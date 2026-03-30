<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Vemployees;
use App\Models\Typeemployees;
use App\Models\Active;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class EmployeesController extends Controller
{
    public function index()
    {
        try {
            $vemployees = Vemployees::all();

            return view('employees.index', [
                'vemployees' => $vemployees
            ]);
        } catch (Exception $e) {
            Log::error('Error in EmployeesController@index: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al cargar empleados. Por favor intente nuevamente.');
        }
    }

    public function create()
    {
        try {
            $typeemployees = Typeemployees::all();

            return view('employees.create', [
                'typeemployees' => $typeemployees
            ]);
        } catch (Exception $e) {
            Log::error('Error in EmployeesController@create: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al cargar formulario. Por favor intente nuevamente.');
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:100',
                'last_name' => 'required|string|max:100',
                'second_last_name' => 'nullable|string|max:100',
                'email' => 'required|email|unique:employees,email',
                'cat_type_employees_id' => 'required|exists:typeemployees,id',
                'active' => 'required|boolean',
                'observations' => 'nullable|string|max:500'
            ]);

            $employee = Employee::create($validatedData);

            Log::info('Employee created successfully', ['employee_id' => $employee->id, 'name' => $validatedData['name']]);

            $vemployees = Vemployees::all();

            return view('employees.index', [
                'vemployees' => $vemployees,
                'message' => 'Empleado registrado exitosamente'
            ]);

        } catch (ValidationException $e) {
            Log::warning('Validation error in store: ' . json_encode($e->errors()));
            return redirect('/employees/create')->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            Log::error('Error in EmployeesController@store: ' . $e->getMessage());
            return redirect('/employees/create')->with('error', 'Error al registrar empleado. Por favor intente nuevamente.');
        }
    }

    public function show(string $id)
    {
        try {
            $employee = Employee::findOrFail($id);

            return view('employees.show', [
                'employee' => $employee
            ]);
        } catch (ModelNotFoundException $e) {
            Log::warning('Employee not found: ' . $id);
            return redirect('/employees')->with('error', 'Empleado no encontrado.');
        } catch (Exception $e) {
            Log::error('Error in EmployeesController@show: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al cargar empleado.');
        }
    }

    public function edit(string $id)
    {
        try {
            $employees = Employee::findOrFail($id);
            $active = Active::all();
            $active1 = Active::where('id', $employees->active)->get();
            $typeemployees = Typeemployees::all();
            $typeemployees1 = Typeemployees::where('id', $employees->cat_type_employees_id)->get();

            return view('employees.edit', [
                'employees' => $employees,
                'active' => $active,
                'active1' => $active1,
                'typeemployees' => $typeemployees,
                'typeemployees1' => $typeemployees1
            ]);

        } catch (ModelNotFoundException $e) {
            Log::warning('Employee not found for edit: ' . $id);
            return redirect('/employees')->with('error', 'Empleado no encontrado.');
        } catch (Exception $e) {
            Log::error('Error in EmployeesController@edit: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al cargar formulario de edición.');
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $employee = Employee::findOrFail($id);

            $validatedData = $request->validate([
                'name' => 'required|string|max:100',
                'last_name' => 'required|string|max:100',
                'second_last_name' => 'nullable|string|max:100',
                'email' => 'required|email|unique:employees,email,' . $id,
                'cat_type_employees_id' => 'required|exists:typeemployees,id',
                'active' => 'required|boolean',
                'observations' => 'nullable|string|max:500'
            ]);

            $employee->update($validatedData);

            Log::info('Employee updated successfully', ['employee_id' => $employee->id]);

            $vemployees = Vemployees::all();

            return view('employees.index', [
                'vemployees' => $vemployees,
                'message' => 'Empleado actualizado exitosamente'
            ]);

        } catch (ValidationException $e) {
            Log::warning('Validation error in update: ' . json_encode($e->errors()));
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (ModelNotFoundException $e) {
            Log::warning('Employee not found for update: ' . $id);
            return redirect('/employees')->with('error', 'Empleado no encontrado.');
        } catch (Exception $e) {
            Log::error('Error in EmployeesController@update: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al actualizar empleado.');
        }
    }

    public function destroy(string $id)
    {
        try {
            $employee = Employee::findOrFail($id);
            $employee->delete();

            Log::info('Employee deleted successfully', ['employee_id' => $id]);

            return redirect('/employees')->with('message', 'Empleado eliminado exitosamente');

        } catch (ModelNotFoundException $e) {
            Log::warning('Employee not found for deletion: ' . $id);
            return redirect('/employees')->with('error', 'Empleado no encontrado.');
        } catch (Exception $e) {
            Log::error('Error in EmployeesController@destroy: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al eliminar empleado.');
        }
    }
}
