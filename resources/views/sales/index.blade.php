
@extends('layouts.layout')
@section('content')
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-white " style="margin-top:0px">

    <div>
        <p>BIS - Business Intelligence System</p>
    </div>
</div>




<div id="idsales01" class="container header P_center" style="margin-top:5px">
    <div class="row" >
        

            <div style="margin-bottom:0px">
                <h1> Ventas </h1>
            </div>

            <div class="table-responsive">
                    <a href="sales/create"> <button type="button" class="btn btn-primary" id="new" name="new">::: Nueva Venta :::</button></a> 
                <br><br><hr>
                <table id="sales01" class="display" style="width:100%"> 
                    <thead>
                        <tr class="">
                            <th class=""> Acción </th>
                            <th class=""> Lead </th>
                            <th class=""> Tramite </th>
                            <th class=""> Costo </th>
                            <th class=""> Fecha(Reg.Venta) </th>
                            <th class=""> Agente(Cerrador) </th>
                            <th class=""> Team(Leader) </th>
                            <th class=""> Agente(MessengerTeam) </th>
                            <th class=""> Link(LawRuler) </th>
                            <th class=""> Cliente(Posible) </th>
                            <th class=""> Recibo(Pago) </th>
                        </tr>
                    </thead>
                    <tbody > 
                        
                        

                        @foreach ($fact_sales as $fact_sale )
                            <tr class="">
                                <td class=""><a href="/sales/{{ $fact_sale->id }}/edit"> <button type="button" value="" class="btn btn-primary" id="edit" name="edit01"> Edit </button> </a>  </td>
                                <td class=""> {{ $fact_sale->lead }}  </td>
                                <td class=""> {{ $fact_sale->process }} </td>
                                <td class=""> {{ $fact_sale->consultation_cost }}</td> 
                                <td class=""> {{ $fact_sale->sale_date}}</td>
                                <td class=""> {{ $fact_sale->name_closer }} {{ $fact_sale->lastname_closer }}</td>
                                <td class=""> {{ $fact_sale->name_leader }} {{ $fact_sale->lastname_leader}}</td> 
                                <td class=""> {{ $fact_sale->name_messenger }} {{ $fact_sale->lastname_messenger }}</td>
                                <td class=""> {{ $fact_sale->link_lawruler }}</td> 
                                <td class=""> {{ $fact_sale->name_client }} {{ $fact_sale->lastname_client }}</td> 
                                <td class=""> {{   Str::limit( $fact_sale->link_payment_receipt,30,'...' ) }}</td> 
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr class="">
                            <th class=""> Acción </th>
                            <th class=""> Lead </th>
                            <th class=""> Tramite </th>
                            <th class=""> Costo </th>
                            <th class=""> Fecha(Reg.Venta) </th>
                            <th class=""> Agente(Cerrador) </th>
                            <th class=""> Team(Leader) </th>
                            <th class=""> Agente(MessengerTeam) </th>
                            <th class=""> Link(LawRuler) </th>
                            <th class=""> Cliente(Posible) </th>
                            <th class=""> Recibo(Pago) </th>
                        </tr>
                    </tfoot>
                </table>
            </div>   
            <hr>
            <br><br><br><br><br><br><br>
            
            
            <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
            <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>

            <script>

                new DataTable('#sales01');

            
            </script>

            <hr>

            
    </div>
</div>    



@endsection