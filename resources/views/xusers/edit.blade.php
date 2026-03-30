
@extends('layouts.layout_0')
@section('content')

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-white " style="margin-top:0px">
    <div>
        <p>BIS - Business Intelligence System</p>
    </div>
</div>


<form action="/xusers/{{ $xusers->id }}" method="POST" name="xusers_edit_form" enctype="multipart/form-data" >
    @csrf
    @method('PUT')


<div id="sales" class="container header " style="margin-top:0px">


        <div class="row" >
            <div class="col-md-12" > 
                    <hr>
                    <p style="text-align: center;margin-bottom: 2px;margin-top: 2px;">
                        <label> ::::: MODIFICAR USUARIOS ::::: </label>
                    </p>
                    <div>
                        @if (session()->has('message'))
                            <div class="alert alert-danger">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <hr>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6">
                <label for="">Persona</label>
                <select id="cat_employees_id" name="cat_employees_id" class="form-select"> 
                    
                    @foreach ($employee1 as $employee1 )    
                    <option value="{{ $employee1->id }}" selected>{{ $employee1->name }} {{ $employee1->last_name }} </option>
                    @endforeach

                    @foreach ($employee as $employee )    
                                <option value="{{ $employee->id }}">{{ $employee->name }} {{ $employee->last_name }} </option>
                    @endforeach
                </select>
            </div>
                
            <div class="col-sm-6">
                <label for="">Perfil</label>
                <select id="x_profiles_id" name="x_profiles_id" class="form-select"> 
                    
                    @foreach ($x_profiles_1 as $x_profiles_1 )    
                                <option value="{{ $x_profiles_1->id }}" selected>{{ $x_profiles_1->profile }}</option>
                    @endforeach

                    @foreach ($profile as $profile )    
                                <option value="{{ $profile->id }}">{{ $profile->profile }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        

        <div class="row">
            <div class="col-sm-6">
                <label for="">Usuario</label>
                <input id="user" name="user" class="form-control" type="text" value="{{ $xusers->user }}" >
                
            </div>
                
            <div class="col-sm-6">
                <label for="">Password</label>
                <input id="passswwword" name="passswwword" class="form-control" type="text" value="{{ $xusers->passswwword}}">
            </div>
        </div>

        <div class="row">  
            <div class="col-sm-3">
                <label for="">Activar</label>
                <select id="active" name="active" class="form-select"> 
                    
                    @foreach ($active1 as $active1 )    
                                <option value="{{ $active1->id }}" selected>{{ $active1->description }}</option>
                    @endforeach
                    @foreach ($active as $active )    
                                <option value="{{ $active->id }}">{{ $active->description }}</option>
                    @endforeach
                </select>

                
                
            </div>
            <div class="col-sm-9">
                <label for="image_path" class="label-form"> Observaciones</label>
                    <textarea id="observations" name="observations" class="form-control" required  value=""  size=10 rows=3 cols=35>{{ $xusers->observations}} </textarea>
            
            </div>
            
        </div>


        


        <div class="row"> 
            <div class="form-group  col-sm-2" >
                <label for="reset" class="label-form">&nbsp;</label><br>
                <input type="reset" class="btn btn-light"  value="..... R E S E T .....">
            </div>
            <div class="form-group  col-sm-10" >
                <label for="guardar" class="label-form">&nbsp;</label><br>
                
                <!-- <button type="submit" class="btn btn-primary">..... G U A R D A R .....</button> -->
                <button type="button" value="" class="btn btn-primary" id="activate" name="B01" onClick="ValidaCampos()"><strong>...G U A R D A R...</strong> </button>
                
            </div>
        </div>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</form>
<?php
						$today = date("d-m-Y");
						$today1 = date("d-m-Y",strtotime($today."+ 1 day"));
                        $day = date("d");
                        $month = date("m");
                        $year = date("Y");
                        $ipAddress = $_SERVER['REMOTE_ADDR'];
                        
                        echo $ipAddress;
                        
                        session_start();
                        if (isset($_SESSION["enjoyer"])){
                            $enjoyer = $_SESSION["enjoyer"];
                            echo $enjoyer . "<-- here";
                       //++ $enjoyer_id_ = $_SESSION["enjoyer_id"];
                           //++ echo $enjoyer_id_ . "<-- enjoyer_id_";
                        }
                        
					?>


<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->	


<script> 
    
	function ValidaCampos()  {
        
        let jvi_texto_correcto = /[\d\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
		let jvi_numero_correcto = /[\D\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
		let jvi_numero_correcto1 = /[\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
		let jvi_textoynumero_correcto = /[\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
        let pattern  = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; 
        
        
        
        

        

        // alert(" Registro Grabado \n  ¡ Exitosamente ! ");
        xusers_edit_form.B01.disabled = true; 
		document.xusers_edit_form.submit();	  
    }
    
</script>



<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		





@endsection