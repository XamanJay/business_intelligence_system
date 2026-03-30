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




class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // dd('paso hasta aqui');

        //$fact_sales = Fact_sale::all();
        $fact_sales = Vsales::all()->sortByDesc('id');

        return view('sales.index',[
            'fact_sales' => $fact_sales
        ] ); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /*$fact_sales = Fact_sale::all();*/
        $process = Process::all();
        $costs = Cost::all();
        //$employees = Employee::all();
        $employees = Employee::where ('cat_type_employees_id',1)->get();
        $client = Client::all();
        // dd($employees);
        $employeess = Employee::where ('cat_type_employees_id',5)->get();
        //dd($employeess);
        $employeeesss = Employee::where ('cat_type_employees_id',6)->get();

        return view('sales.create',[
            'process' => $process,
            'costs' => $costs,
            'employees' => $employees,
            'client'   => $client,
            'employeess' => $employeess,
            'employeeesss' => $employeeesss
        ] ); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $xLead =    $request->input('lead');
        
        //dd($enjoyer);
        //dd('paso hasta aqui 1208');
        $xLead_found = Fact_sale::where('lead',$xLead) ->get() ->count();

        //dd($xLead_found);
    
        if ( $xLead_found == 1){
            
            return redirect('/sales/create')->with('message', 'El número de Lead ya existe. favor de recapturar con un numero de lead nuevo y valido');            
        
        }
        else{

                /* =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
            $fact_sales = Fact_sale::create([    
                'cat_employees_id'         => $request->input('cat_employees_id'),
                'cat_employees_2_id'       => $request->input('cat_employees_2_id'),
                'cat_employees_3_id'       => $request->input('cat_employees_3_id'),
                'link_lawruler'            => $request->input('link_lawruler'),
                'lead'                     => $request->input('lead'),
                'cat_type_process_id'      => $request->input('cat_type_process_id'),
                'cat_client_id'            => $request->input('cat_client_id'),
                'link_payment_receipt'     => $request->input('link_payment_receipt'),
                'consultation_cost_id'     => $request->input('consultation_cost_id'),
                    'sale_date'                => $request->input('sale_date'),
                    'day'                      => $request->input('day'),
                    'month'                    => $request->input('month'),
                    'year'                     => $request->input('year'),
                    'ipaddress'                => $request->input('ipaddress'),
                    'x_users_id'               => $request->input('x_users_id'),



                
            ]);



            //$fact_sales = Fact_sale::all();
            $fact_sales = Vsales::all()->sortByDesc('id');
            return view('sales.index',[
                'fact_sales' => $fact_sales
            ] ); 

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
        
        $fact_sales = Fact_sale::find($id);
        $process = Process::all();
        $costs = Cost::all();
        $employees = Employee::where ('cat_type_employees_id',1)->get();
        $client = Client::all();
        $employeess = Employee::where ('cat_type_employees_id',5)->get();
        $cat_employees_id_closers = $fact_sales->cat_employees_id;
        $cat_employees_id = $fact_sales['cat_employees_id'];
        $employee1 = Employee::where ('id',$cat_employees_id)->get();
        $cat_employees_3_id = $fact_sales['cat_employees_3_id'];
        $employee3 = Employee::where ('id',$cat_employees_3_id)->get();
        $cat_type_process_id = $fact_sales['cat_type_process_id'];
        $process1 = Process::where ('id',$cat_type_process_id)->get();
        $cat_client_id = $fact_sales['cat_client_id'];
        $client1 = Client::where ('id',$cat_client_id)->get();
        $consultation_cost_id = $fact_sales['consultation_cost_id'];
        $cost1 = Cost::where ('id',$consultation_cost_id)->get();


        //dd ($employee1);
        

        return view('sales.edit',[
            'fact_sales' => $fact_sales,
            'process' => $process,
            'costs' => $costs,
            'employees' => $employees,
            'client'   => $client,
            'employeess' => $employeess,
            'employee1' => $employee1,
            'employee3' => $employee3,
            'process1' => $process1,
            'client1' => $client1,
            'cost1' => $cost1
        ] ); 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fact_sales = Fact_sale::where('id',$id)->update([    
            'cat_employees_id'         => $request->input('cat_employees_id'),
            'cat_employees_3_id'       => $request->input('cat_employees_3_id'),
            'link_lawruler'            => $request->input('link_lawruler'),
            'lead'                     => $request->input('lead'),
            'cat_type_process_id'      => $request->input('cat_type_process_id'),
            'cat_client_id'            => $request->input('cat_client_id'),
            'link_payment_receipt'     => $request->input('link_payment_receipt'),
            'consultation_cost_id'     => $request->input('consultation_cost_id')
            
        ]);

        $fact_sales = Fact_sale::all();

        return view('sales.index',[
            'fact_sales' => $fact_sales
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
