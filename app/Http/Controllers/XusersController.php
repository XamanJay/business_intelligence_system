<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Xuser;
use App\Models\Profile;
use App\Models\Employee;
use App\Models\Active;
use App\Models\Vusers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class XusersController extends Controller
{
    public function index()
    {
        try {
            $vusers = Vusers::all();

            return view('xusers.index', [
                'vusers' => $vusers
            ]);
        } catch (Exception $e) {
            Log::error('Error in XusersController@index: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al cargar usuarios. Por favor intente nuevamente.');
        }
    }

    public function create()
    {
        try {
            $x_profiles = Profile::all();
            $x_employees = Employee::all();

            return view('xusers.create', [
                'x_profiles' => $x_profiles,
                'x_employees' => $x_employees
            ]);
        } catch (Exception $e) {
            Log::error('Error in XusersController@create: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al cargar formulario. Por favor intente nuevamente.');
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'user' => 'required|string|unique:xusers,user',
                'passswwword' => 'required|string|min:6',
                'cat_employees_id' => 'required|exists:employees,id',
                'x_profiles_id' => 'required|exists:profiles,id',
                'active' => 'required|boolean',
                'observations' => 'nullable|string|max:500'
            ]);

            $xuser = Xuser::create($validatedData);

            Log::info('System user created successfully', ['user_id' => $xuser->id, 'username' => $validatedData['user']]);

            $vusers = Vusers::all();

            return view('xusers.index', [
                'vusers' => $vusers,
                'message' => 'Usuario del sistema registrado exitosamente'
            ]);

        } catch (ValidationException $e) {
            Log::warning('Validation error in store: ' . json_encode($e->errors()));
            return redirect('/xusers/create')->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            Log::error('Error in XusersController@store: ' . $e->getMessage());
            return redirect('/xusers/create')->with('error', 'Error al registrar usuario del sistema.');
        }
    }

    public function show(string $id)
    {
        try {
            $xuser = Xuser::findOrFail($id);

            return view('xusers.show', [
                'xuser' => $xuser
            ]);
        } catch (ModelNotFoundException $e) {
            Log::warning('System user not found: ' . $id);
            return redirect('/xusers')->with('error', 'Usuario del sistema no encontrado.');
        } catch (Exception $e) {
            Log::error('Error in XusersController@show: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al cargar usuario del sistema.');
        }
    }

    public function edit(string $id)
    {
        try {
            $xusers = Xuser::findOrFail($id);
            $employee = Employee::all();
            $profile = Profile::all();
            $active = Active::all();
            $active1 = Active::where('id', $xusers['active'])->get();
            $employee1 = Employee::where('id', $xusers['cat_employees_id'])->get();
            $x_profiles_1 = Profile::where('id', $xusers['x_profiles_id'])->get();

            return view('xusers.edit', [
                'xusers' => $xusers,
                'employee' => $employee,
                'profile' => $profile,
                'active' => $active,
                'employee1' => $employee1,
                'x_profiles_1' => $x_profiles_1,
                'active1' => $active1
            ]);

        } catch (ModelNotFoundException $e) {
            Log::warning('System user not found for edit: ' . $id);
            return redirect('/xusers')->with('error', 'Usuario del sistema no encontrado.');
        } catch (Exception $e) {
            Log::error('Error in XusersController@edit: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al cargar formulario de edición.');
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $xuser = Xuser::findOrFail($id);

            $validatedData = $request->validate([
                'user' => 'required|string|unique:xusers,user,' . $id,
                'passswwword' => 'required|string|min:6',
                'cat_employees_id' => 'required|exists:employees,id',
                'x_profiles_id' => 'required|exists:profiles,id',
                'active' => 'required|boolean',
                'observations' => 'nullable|string|max:500'
            ]);

            $xuser->update($validatedData);

            Log::info('System user updated successfully', ['user_id' => $xuser->id]);

            $vusers = Vusers::all();

            return view('xusers.index', [
                'vusers' => $vusers,
                'message' => 'Usuario del sistema actualizado exitosamente'
            ]);

        } catch (ValidationException $e) {
            Log::warning('Validation error in update: ' . json_encode($e->errors()));
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (ModelNotFoundException $e) {
            Log::warning('System user not found for update: ' . $id);
            return redirect('/xusers')->with('error', 'Usuario del sistema no encontrado.');
        } catch (Exception $e) {
            Log::error('Error in XusersController@update: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al actualizar usuario del sistema.');
        }
    }

    public function destroy(string $id)
    {
        try {
            $xuser = Xuser::findOrFail($id);
            $xuser->delete();

            Log::info('System user deleted successfully', ['user_id' => $id]);

            return redirect('/xusers')->with('message', 'Usuario del sistema eliminado exitosamente');

        } catch (ModelNotFoundException $e) {
            Log::warning('System user not found for deletion: ' . $id);
            return redirect('/xusers')->with('error', 'Usuario del sistema no encontrado.');
        } catch (Exception $e) {
            Log::error('Error in XusersController@destroy: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al eliminar usuario del sistema.');
        }
    }
}
