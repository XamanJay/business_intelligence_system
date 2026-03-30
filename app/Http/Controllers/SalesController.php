<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fact_sale;
use App\Models\Process;
use App\Models\Cost;
use App\Models\Employee;
use App\Models\Client;
use App\Models\Vsales;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class SalesController extends Controller
{
    private const EMPLOYEE_TYPE_CLOSER = 1;
    private const EMPLOYEE_TYPE_LEADER = 6;
    private const EMPLOYEE_TYPE_MESSENGER = 5;

    public function index()
    {
        try {
            $fact_sales = Vsales::all()->sortByDesc('id');

            return view('sales.index', [
                'fact_sales' => $fact_sales
            ]);
        } catch (Exception $e) {
            Log::error('Error in SalesController@index: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al cargar ventas. Por favor intente nuevamente.');
        }
    }

    public function create()
    {
        try {
            $process = Process::all();
            $costs = Cost::all();
            $employees = Employee::where('cat_type_employees_id', self::EMPLOYEE_TYPE_CLOSER)->get();
            $client = Client::all();
            $support_employees = Employee::where('cat_type_employees_id', self::EMPLOYEE_TYPE_MESSENGER)->get();
            $leader_employees = Employee::where('cat_type_employees_id', self::EMPLOYEE_TYPE_LEADER)->get();

            return view('sales.create', [
                'process' => $process,
                'costs' => $costs,
                'employees' => $employees,
                'client' => $client,
                'employeess' => $support_employees,
                'employeeesss' => $leader_employees
            ]);
        } catch (Exception $e) {
            Log::error('Error in SalesController@create: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al cargar formulario. Por favor intente nuevamente.');
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'cat_employees_id' => 'required|exists:employees,id',
                'cat_employees_2_id' => 'nullable|exists:employees,id',
                'cat_employees_3_id' => 'nullable|exists:employees,id',
                'link_lawruler' => 'nullable|url',
                'lead' => 'required|string|unique:fact_sales,lead',
                'cat_type_process_id' => 'required|exists:processes,id',
                'cat_client_id' => 'required|exists:clients,id',
                'link_payment_receipt' => 'nullable|url',
                'consultation_cost_id' => 'required|exists:costs,id',
                'sale_date' => 'required|date',
                'day' => 'required|integer|between:1,31',
                'month' => 'required|integer|between:1,12',
                'year' => 'required|integer|min:2000',
                'ipaddress' => 'nullable|ip',
                'x_users_id' => 'required|exists:xusers,id'
            ]);

            $fact_sales = Fact_sale::create($validatedData);

            Log::info('Sale created successfully', ['sale_id' => $fact_sales->id, 'lead' => $validatedData['lead']]);

            $fact_sales = Vsales::all()->sortByDesc('id');

            return view('sales.index', [
                'fact_sales' => $fact_sales,
                'message' => 'Venta registrada exitosamente'
            ]);

        } catch (ValidationException $e) {
            Log::warning('Validation error in store: ' . json_encode($e->errors()));
            return redirect('/sales/create')->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            Log::error('Error in SalesController@store: ' . $e->getMessage());
            return redirect('/sales/create')->with('error', 'Error al registrar venta. Por favor intente nuevamente.');
        }
    }

    public function show(string $id)
    {
        try {
            $fact_sales = Fact_sale::findOrFail($id);

            return view('sales.show', [
                'fact_sales' => $fact_sales
            ]);
        } catch (ModelNotFoundException $e) {
            Log::warning('Sale not found: ' . $id);
            return redirect('/sales')->with('error', 'Venta no encontrada.');
        } catch (Exception $e) {
            Log::error('Error in SalesController@show: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al cargar venta.');
        }
    }

    public function edit(string $id)
    {
        try {
            $fact_sales = Fact_sale::findOrFail($id);
            $process = Process::all();
            $costs = Cost::all();
            $employees = Employee::where('cat_type_employees_id', self::EMPLOYEE_TYPE_CLOSER)->get();
            $client = Client::all();
            $support_employees = Employee::where('cat_type_employees_id', self::EMPLOYEE_TYPE_MESSENGER)->get();

            $employee1 = Employee::findOrFail($fact_sales->cat_employees_id);
            $employee3 = Employee::findOrFail($fact_sales->cat_employees_3_id);
            $process1 = Process::findOrFail($fact_sales->cat_type_process_id);
            $client1 = Client::findOrFail($fact_sales->cat_client_id);
            $cost1 = Cost::findOrFail($fact_sales->consultation_cost_id);

            return view('sales.edit', [
                'fact_sales' => $fact_sales,
                'process' => $process,
                'costs' => $costs,
                'employees' => $employees,
                'client' => $client,
                'employeess' => $support_employees,
                'employee1' => $employee1,
                'employee3' => $employee3,
                'process1' => $process1,
                'client1' => $client1,
                'cost1' => $cost1
            ]);

        } catch (ModelNotFoundException $e) {
            Log::warning('Resource not found during edit: ' . $e->getMessage());
            return redirect('/sales')->with('error', 'Registro no encontrado.');
        } catch (Exception $e) {
            Log::error('Error in SalesController@edit: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al cargar formulario de edición.');
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $fact_sales = Fact_sale::findOrFail($id);

            $validatedData = $request->validate([
                'cat_employees_id' => 'required|exists:employees,id',
                'cat_employees_3_id' => 'nullable|exists:employees,id',
                'link_lawruler' => 'nullable|url',
                'lead' => 'required|string',
                'cat_type_process_id' => 'required|exists:processes,id',
                'cat_client_id' => 'required|exists:clients,id',
                'link_payment_receipt' => 'nullable|url',
                'consultation_cost_id' => 'required|exists:costs,id'
            ]);

            $fact_sales->update($validatedData);

            Log::info('Sale updated successfully', ['sale_id' => $fact_sales->id]);

            $fact_sales = Vsales::all()->sortByDesc('id');

            return view('sales.index', [
                'fact_sales' => $fact_sales,
                'message' => 'Venta actualizada exitosamente'
            ]);

        } catch (ValidationException $e) {
            Log::warning('Validation error in update: ' . json_encode($e->errors()));
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (ModelNotFoundException $e) {
            Log::warning('Sale not found for update: ' . $id);
            return redirect('/sales')->with('error', 'Venta no encontrada.');
        } catch (Exception $e) {
            Log::error('Error in SalesController@update: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al actualizar venta.');
        }
    }

    public function destroy(string $id)
    {
        try {
            $fact_sales = Fact_sale::findOrFail($id);
            $fact_sales->delete();

            Log::info('Sale deleted successfully', ['sale_id' => $id]);

            return redirect('/sales')->with('message', 'Venta eliminada exitosamente');

        } catch (ModelNotFoundException $e) {
            Log::warning('Sale not found for deletion: ' . $id);
            return redirect('/sales')->with('error', 'Venta no encontrada.');
        } catch (Exception $e) {
            Log::error('Error in SalesController@destroy: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al eliminar venta.');
        }
    }
}
