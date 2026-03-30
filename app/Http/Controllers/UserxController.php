<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Xuser;

class UserxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enjoyer = $request->input('enjoyer');
        $passswword = $request->input('passswword');
        
        //dd('$enjoyer');
        //dd('paso hasta aqui 1208');
        $enjoyer_found = Xuser::where('user',$enjoyer) -> where('passswwword',$passswword)  ->get() ->count();
        if ( $enjoyer_found == 1){
           



           return redirect('/sales');
        }
        else{
            return redirect('/')->with('message', 'Usuario no Valido favor de rectificar');

        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $enjoyer = $request->input('enjoyer');
        $passswword = $request->input('passswword');
        
        //dd($enjoyer);
        //dd('paso hasta aqui 1208');
        $enjoyer_found = Xuser::where('user',$enjoyer) -> where('passswwword',$passswword) -> where('active',1) ->get() ->count();
    //+++   $enjoyer_foundid = Xuser::where('user',$enjoyer) -> where('passswwword',$passswword) ->get() ->first() ;
            $enjoyer_foundid = Xuser::where('user',$enjoyer) -> where('passswwword',$passswword) -> where('active',1) ->get() ->first() ;
        

        //$fact_sales = Fact_sale::find($id);
        
        //dd ($enjoyer_foundid);

        //++$cat_employees_idd = $enjoyer_foundid['cat_employees_id'];
            $cat_employees_idd = $enjoyer_foundid['cat_employees_id'];
    //dd ($cat_employees_idd);

        //return $data['name']; // Accessing 'name' key
       // $enjoyer_id1 = $enjoyer_foundid->id;
    //dd ($enjoyer_id1);
        //$consultation_cost_id = $fact_sales['consultation_cost_id'];
        

        if ( $enjoyer_found == 1){
            

            session_start();
            $_SESSION["enjoyer"] = $enjoyer;
           //++ $_SESSION["enjoyer_id"] = $cat_employees_idd;
                $_SESSION["enjoyer_id"] = $cat_employees_idd;
            
            $enj = $_SESSION["enjoyer"];
            //dd ($enj);
            //dd('paso hasta aqui 1225');
            return redirect('/sales');
        }
        else{
            return redirect('/')->with('message', 'Acceso no autorizado, Capture un usuario y password validos.');

        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
