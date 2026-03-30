
@extends('layouts.layout_0')
@section('content')
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-white " style="margin-top:0px">
    <div>
        <p>BIS - Business Intelligence System</p>
    </div>
</div>




<div id="idusers01" class="container header P_center" style="margin-top:5px">
    <div class="row" >
        

            <div style="margin-bottom:0px">
                <h1> Empleados </h1>
            </div>

            <div class="table-responsive">
                <a href="employees/create"> <button type="button" class="btn btn-primary" id="new" name="new"> Nuevo Empleado </button></a> 
                
                <br><br><hr>
                <table id="vemployees01" class="display" style="width:100%"> 
                    <thead>
                        <tr class="">
                            <th class=""> Acción </th>
                            <th class=""> Tipo </th>
                            <th class=""> Nombre(s) </th>
                            <th class=""> Apellido(Paterno) </th>
                            <th class=""> Apellido(Materno) </th>
                            <th class=""> Activo </th>
                            <th class=""> Observaciones </th>
                        </tr>
                    </thead>
                    <tbody > 
                        @foreach ($vemployees as $vemployees )
                            <tr class="">
                                <td class=""><a href="/employees/{{ $vemployees->id }}/edit"> <button type="button" value="" class="btn btn-primary" id="edit" name="edit01"> Edit </button> </a> </td>
                                <td class=""> {{ $vemployees->cat_type_employees_description }}  </td>
                                <td class=""> {{ $vemployees->name }} </td>
                                <td class=""> {{ $vemployees->last_name}} </td>
                                <td class=""> {{ $vemployees->second_last_name}} </td>
                                <td class=""> {{ $vemployees->active }}</td> 
                                <td class=""> {{ $vemployees->observations }} </td>                                                                             
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

                new DataTable('#vemployees01', {
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