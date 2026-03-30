<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Vemployees;
use App\Models\Typeemployees;
use App\Models\Active;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('paso hasta aqui');

        //$xusers = Xuser::all();
        $vemployees = Vemployees::all();
        //dd($vusers);

        return view('employees.index',[
            'vemployees' => $vemployees
        ] ); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typeemployees = Typeemployees::all();
        
        
        return view('employees.create',[
            'typeemployees' => $typeemployees
            
        ] ); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Employees = Employee::create([    
            'name'                  => $request->input('name'),
            'last_name'             => $request->input('last_name'),
            'second_last_name'      => $request->input('second_last_name'),
            'email'                 => $request->input('email'),
            'cat_type_employees_id' => $request->input('cat_type_employees_id'),
            'active'                => $request->input('active'),
            'observations'          => $request->input('observations')
            
            
        ]);

        $vemployees = Vemployees::all();
        
        //dd($vusers);

        return view('employees.index',[
            'vemployees' => $vemployees
        ] );  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employees = Employee::find($id);
        $active = Active::all();
        $active_active = $employees['active'];
        $active1 = Active::where ('id',$active_active)->get();
        $typeemployees = Typeemployees::all();
        $cat_type_employees_id = $employees['cat_type_employees_id'];
        $typeemployees1 = Typeemployees::where ('id',$cat_type_employees_id)->get();
        //dd ($employee1);

        return view('employees.edit',[
            'employees' => $employees,
            'active' => $active,
            'active1' => $active1,
            'typeemployees' => $typeemployees,
            'typeemployees1' => $typeemployees1
        ] ); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Employees = Employee::where('id',$id)->update([     
            'name'                  => $request->input('name'),
            'last_name'             => $request->input('last_name'),
            'second_last_name'      => $request->input('second_last_name'),
            'email'                 => $request->input('email'),
            'cat_type_employees_id' => $request->input('cat_type_employees_id'),
            'active'                => $request->input('active'),
            'observations'          => $request->input('observations')
            
            
        ]);

        $vemployees = Vemployees::all();
        
        //dd($vusers);

        return view('employees.index',[
            'vemployees' => $vemployees
        ] ); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
