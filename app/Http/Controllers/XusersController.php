<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Xuser;
use App\Models\Profile;
use App\Models\Employee;
use App\Models\Active;
use App\Models\Vusers;

class XusersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('paso hasta aqui');

        //$xusers = Xuser::all();
        $vusers = Vusers::all();
        //dd($vusers);

        return view('xusers.index',[
            'vusers' => $vusers
        ] ); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $x_profiles = Profile::all();
        $x_employees = Employee::all();
        //dd('here');
       // dd($x_profiles);
        
        return view('xusers.create',[
            'x_profiles' => $x_profiles,
            'x_employees' => $x_employees
            
        ] ); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Xuser = Xuser::create([    
            'user'              => $request->input('user'),
            'passswwword'       => $request->input('passswwword'),
            'cat_employees_id'  => $request->input('cat_employees_id'),
            'x_profiles_id'     => $request->input('x_profiles_id'),
            'active'            => $request->input('active'),
            'observations'      => $request->input('observations')
            
            
        ]);

        $vusers = Vusers::all();
        //dd($vusers);

        return view('xusers.index',[
            'vusers' => $vusers
        ] ); 

    /* $xusers = Xuser::all();

        return view('xusers.index',[
            'xusers' => $xusers
        ] ); 
    */

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
        $xusers = Xuser::find($id);
        $employee = Employee::all();
        $profile = Profile::all();
        $active = Active::all();
        $active_active = $xusers['active'];
        $active1 = Active::where ('id',$active_active)->get();
        $cat_employees_id = $xusers['cat_employees_id'];
        $employee1 = Employee::where ('id',$cat_employees_id)->get();
        $x_profiles_id = $xusers['x_profiles_id'];
        $x_profiles_1 = Profile::where ('id',$x_profiles_id)->get();

        //dd ($employee1);
        

        return view('xusers.edit',[
            'xusers' => $xusers,
            'employee' => $employee,
            'profile' => $profile,
            'active' => $active,
            'employee1' => $employee1,
            'x_profiles_1' => $x_profiles_1,
            'active1' => $active1
            
        ] ); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Xuser = Xuser::where('id',$id)->update([     
            'user'              => $request->input('user'),
            'passswwword'       => $request->input('passswwword'),
            'cat_employees_id'  => $request->input('cat_employees_id'),
            'x_profiles_id'     => $request->input('x_profiles_id'),
            'active'            => $request->input('active'),
            'observations'      => $request->input('observations')
            
            
        ]);

        $vusers = Vusers::all();
        //dd($vusers);

        return view('xusers.index',[
            'vusers' => $vusers
        ] );

        /* $xusers = Xuser::all();

        return view('xusers.index',[
            'xusers' => $xusers
        ] );
        */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
