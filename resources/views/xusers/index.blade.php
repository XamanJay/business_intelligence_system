
@extends('layouts.layout_0')
@section('content')
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-white " style="margin-top:0px">
<!-- <div class="Space text-white font__Griffy" style="margin-top:0px"> -->
    <!-- <div class="MOVIMIENTO_IZQ_CRECIENDO"  >
        <p>BIS - Business Inteligence System</p>
    </div> -->
    <div>
        <p>BIS - Business Intelligence System</p>
    </div>
</div>




<div id="idusers01" class="container header P_center" style="margin-top:5px">
    <div class="row" >
        

            <div style="margin-bottom:0px">
                <h1> Usuarios </h1>
            </div>

            <div class="table-responsive">
                <a href="xusers/create"> <button type="button" class="btn btn-primary" id="new" name="new"> Nuevo Usuario </button></a> 
                
                <br><br><hr>
                <table id="xusers01" class="display" style="width:100%"> 
                    <thead>
                        <tr class="">
                            <th class=""> Acción </th>
                            <th class=""> Usuario </th>
                            <th class=""> Password </th>
                            <th class=""> Empleado </th>
                            <th class=""> Perfil </th>
                            <th class=""> Activo </th>
                            <th class=""> Observaciones </th>
                        </tr>
                    </thead>
                    <tbody > 
                        @foreach ($vusers as $vusers )
                            <tr class="">
                                <td class=""><a href="/xusers/{{ $vusers->id }}/edit"> <button type="button" value="" class="btn btn-primary" id="edit" name="edit01"> Edit </button> </a> </td>
                                <td class=""> {{ $vusers->user }}  </td>
                                <td class=""> {{ $vusers->passswwword }} </td>
                                <td class=""> {{ $vusers->name}} {{ $vusers->last_name}} </td>
                                <td class=""> {{ $vusers->profile}} </td>
                                <td class=""> {{ $vusers->active }}</td> 
                                <td class=""> {{ $vusers->observations }} </td>                                                                             
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                            <tr class="">
                                <th class=""> Acción </th>
                                <th class=""> Usuario </th>
                                <th class=""> Password </th>
                                <th class=""> Empleado </th>
                                <th class=""> Perfil </th>
                                <th class=""> Activo </th>
                                <th class=""> Observaciones </th>
                            </tr>
                    </tfoot>
                </table>
            </div>   
            <hr>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            
            <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
            <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
            
            
            <script>

                new DataTable('#xusers01', {
                    layout: {
                        bottomEnd: {
                            paging: {
                                boundaryNumbers: false
                            }
                        }
                    }
                });
            </script>

            <hr>

            
    </div>
</div>    



@endsection