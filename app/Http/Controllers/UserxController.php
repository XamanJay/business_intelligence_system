<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Xuser;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class UserxController extends Controller
{
    public function index(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'enjoyer' => 'required|string',
                'passswword' => 'required|string'
            ]);

            $enjoyer_found = Xuser::where('user', $validatedData['enjoyer'])
                ->where('passswwword', $validatedData['passswword'])
                ->where('active', 1)
                ->count();

            if ($enjoyer_found != 1) {
                Log::warning('Login attempt failed for user: ' . $validatedData['enjoyer']);
                return redirect('/')->with('message', 'Usuario no válido favor de rectificar');
            }

            $enjoyer_foundid = Xuser::where('user', $validatedData['enjoyer'])
                ->where('passswwword', $validatedData['passswword'])
                ->where('active', 1)
                ->first();

            if ($enjoyer_foundid === null) {
                Log::warning('User record not found after validation for: ' . $validatedData['enjoyer']);
                return redirect('/')->with('message', 'Usuario no válido favor de rectificar');
            }

            $cat_employees_idd = $enjoyer_foundid['cat_employees_id'];

            session_start();
            $_SESSION["enjoyer"] = $validatedData['enjoyer'];
            $_SESSION["enjoyer_id"] = $cat_employees_idd;

            Log::info('User logged in successfully', ['user' => $validatedData['enjoyer'], 'employee_id' => $cat_employees_idd]);

            return redirect('/sales');

        } catch (ValidationException $e) {
            Log::warning('Validation error in login: ' . json_encode($e->errors()));
            return redirect('/')->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            Log::error('Error in UserxController@index: ' . $e->getMessage());
            return redirect('/')->with('message', 'Error en el proceso de autenticación.');
        }
    }

    public function create()
    {
        try {
            return view('admin.login');
        } catch (Exception $e) {
            Log::error('Error in UserxController@create: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al cargar la página de login.');
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'enjoyer' => 'required|string',
                'passswword' => 'required|string'
            ]);

            $enjoyer_found = Xuser::where('user', $validatedData['enjoyer'])
                ->where('passswwword', $validatedData['passswword'])
                ->where('active', 1)
                ->count();

            if ($enjoyer_found != 1) {
                Log::warning('Authentication failed for user: ' . $validatedData['enjoyer']);
                return redirect('/')->with('message', 'Acceso no autorizado, Capture un usuario y password válidos.');
            }

            $enjoyer_foundid = Xuser::where('user', $validatedData['enjoyer'])
                ->where('passswwword', $validatedData['passswword'])
                ->where('active', 1)
                ->first();

            if ($enjoyer_foundid === null) {
                Log::warning('User record not found during store for: ' . $validatedData['enjoyer']);
                return redirect('/')->with('message', 'Acceso no autorizado, Capture un usuario y password válidos.');
            }

            $cat_employees_idd = $enjoyer_foundid['cat_employees_id'];

            session_start();
            $_SESSION["enjoyer"] = $validatedData['enjoyer'];
            $_SESSION["enjoyer_id"] = $cat_employees_idd;

            Log::info('User authenticated during store', ['user' => $validatedData['enjoyer']]);

            return redirect('/sales');

        } catch (ValidationException $e) {
            Log::warning('Validation error in store: ' . json_encode($e->errors()));
            return redirect('/')->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            Log::error('Error in UserxController@store: ' . $e->getMessage());
            return redirect('/')->with('message', 'Acceso no autorizado, Capture un usuario y password válidos.');
        }
    }

    public function show(string $id)
    {
        try {
            $xuser = Xuser::findOrFail($id);

            return view('admin.show', ['xuser' => $xuser]);

        } catch (ModelNotFoundException $e) {
            Log::warning('User not found: ' . $id);
            return redirect('/')->with('error', 'Usuario no encontrado.');
        } catch (Exception $e) {
            Log::error('Error in UserxController@show: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al cargar usuario.');
        }
    }

    public function edit(string $id)
    {
        try {
            $xuser = Xuser::findOrFail($id);

            return view('admin.edit', ['xuser' => $xuser]);

        } catch (ModelNotFoundException $e) {
            Log::warning('User not found for edit: ' . $id);
            return redirect('/')->with('error', 'Usuario no encontrado.');
        } catch (Exception $e) {
            Log::error('Error in UserxController@edit: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al cargar formulario de edición.');
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $xuser = Xuser::findOrFail($id);

            $validatedData = $request->validate([
                'user' => 'required|string|unique:xusers,user,' . $id,
                'passswword' => 'required|string|min:6',
                'name' => 'nullable|string|max:100'
            ]);

            $xuser->update($validatedData);

            Log::info('User updated successfully', ['user_id' => $xuser->id]);

            return redirect('/admin')->with('message', 'Usuario actualizado exitosamente');

        } catch (ValidationException $e) {
            Log::warning('Validation error in update: ' . json_encode($e->errors()));
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (ModelNotFoundException $e) {
            Log::warning('User not found for update: ' . $id);
            return redirect('/admin')->with('error', 'Usuario no encontrado.');
        } catch (Exception $e) {
            Log::error('Error in UserxController@update: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al actualizar usuario.');
        }
    }

    public function destroy(string $id)
    {
        try {
            $xuser = Xuser::findOrFail($id);
            $xuser->delete();

            Log::info('User deleted successfully', ['user_id' => $id]);

            return redirect('/admin')->with('message', 'Usuario eliminado exitosamente');

        } catch (ModelNotFoundException $e) {
            Log::warning('User not found for deletion: ' . $id);
            return redirect('/admin')->with('error', 'Usuario no encontrado.');
        } catch (Exception $e) {
            Log::error('Error in UserxController@destroy: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al eliminar usuario.');
        }
    }
}
