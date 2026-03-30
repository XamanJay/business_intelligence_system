
@extends('layouts.layout_0')
@section('content')

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-white " style="margin-top:0px">

    <div>
        <p>BIS - Business Intelligence System</p>
    </div>
</div>


<form action="/sales/{{ $fact_sales->id}}" method="POST" name="sales_edit_form" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
    
 <div id="sales" class="container header P_center" style="margin-top:0px">


        <div class="row" >
            <div class="col-md-12" > 
                    <hr>
                    <p style="text-align: center;margin-bottom: 2px;margin-top: 2px;">
                        <label> ::::: MODIFICACIÓN DE VENTAS ::::: </label>
                    </p>
                    <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label for="">Agente (Cerrador)</label>
                
                <select name="cat_employees_id" class="form-select" autofocus> 
                    @foreach ($employee1 as $employee1 )    
                            <option value="{{ $employee1->id }}" selected> {{ $employee1->name}} {{$employee1->last_name}} </option>
                    @endforeach

                    @foreach ($employees as $employyees )    
                            <option value="{{ $employyees->id }}">{{ $employyees->name }} {{$employyees->last_name}}</option>
                    @endforeach
                </select>
            </div>
                
            <div class="col-sm-6">
                <label for="">Agente (Messenger team)</label>
                <select name="cat_employees_3_id" class="form-select" autofocus> 
                    <option value="0" selected>Seleccione una opción</option>
                    @foreach ($employee3 as $employee3 )    
                    <option value="{{ $employee3->id }}" selected> {{ $employee3->name}} {{$employee3->last_name}} </option>
                    @endforeach

                    @foreach ($employeess as $employyeess )    
                                <option value="{{ $employyeess->id }}">{{ $employyeess->name }} {{ $employyeess->last_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                    <label for="">Link law ruler here </label>
                    <input id="link_lawruler" name="link_lawruler" class="form-control" type="text" value="{{$fact_sales->link_lawruler}}">
            </div>

            <div class="col-md-3">
                <label for="">Número de LEAD </label>
                <input id="lead" name="lead" class="form-control" type="text" value="{{$fact_sales->lead}}">
            </div>
            
        </div>


        <div class="row">  
            <div class="col-sm-6">
                <label for="">Tipo de trámite</label>
                <select name="cat_type_process_id" class="form-select"> 
                    @foreach ($process1 as $process1 )    
                                <option value="{{ $process1->id }}" selected>{{ $process1->description }}</option>
                    @endforeach
                    @foreach ($process as $proceesss )    
                                <option value="{{ $proceesss->id }}">{{ $proceesss->description }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-6">
                <label for="">Posible Cliente</label>
                <select name="cat_client_id" class="form-select"> 
                    @foreach ($client1 as $client1 )    
                        <option value="{{ $client1->id }}" selected>{{ $client1->name }}</option>
                    @endforeach
                    @foreach ($client as $clieents )    
                        <option value="{{ $clieents->id }}">{{ $clieents->name }}</option>
                    @endforeach
                </select>
            </div>


            
        </div>

        <div class="row">  
            <div class="col-sm-10">
                    <label for="image_path" class="label-form"> Recibo de pago</label>
                    <textarea id="link_payment_receipt" name="link_payment_receipt" class="form-control" required  value=""  size=10 rows=5 cols=35  >{{ $fact_sales->link_payment_receipt }} </textarea>
                
            </div>
            <div class="col-sm-2">
                    <label for="">Costo de la consulta</label>
                    <select name="consultation_cost_id" class="form-select"> 
                    @foreach ($cost1 as $cost1 )
                        <option value="{{ $cost1->id }}" selected>{{ $cost1->consultation_cost }}</option>
                    @endforeach    

                    @foreach ($costs as $cossts )    
                        <option value="{{ $cossts->id }}">{{ $cossts->consultation_cost }}</option>
                    @endforeach
                    </select>
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
                <button type="button" value="" class="btn btn-primary" id="activate" name="B01" onClick="ValidaCampos()"><strong>...M O D I F I C A R...</strong> </button>
            </div>
        </div>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</form>



<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->	

<script>
   /* function onloadjay(){
        document.getElementById('activate').disabled=true;
        document.getElementById('TC').disabled=false
    }
    function activatejay()
        {
            document.getElementById('activate').disabled=false;
            document.getElementById('TC').disabled=true;
        } */
</script>

<script> 
	function ValidaCampos()  {
    //    let email1 = document.getElementById("email_1").value;
    //    let email2 = document.getElementById("email_2").value;
        
        let jvi_texto_correcto = /[\d\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
		let jvi_numero_correcto = /[\D\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
		let jvi_numero_correcto1 = /[\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
		let jvi_textoynumero_correcto = /[\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
        let pattern  = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; 
        
        
        
        if (sales_edit_form.cat_employees_id.value  == "0")   {
            alert("Seleccione una opción valida para el campo: Agente (Cerrador).");    sales_edit_form.cat_employees_id.focus(); return false;
        } 

        if (sales_edit_form.cat_employees_3_id.value  == "0")   {
            alert("Seleccione una opción valida para el campo: Agente (Messenger Team).");    sales_edit_form.cat_employees_3_id.focus(); return false;
        } 

        if (sales_edit_form.link_lawruler.value  == "")   {
            alert("El campo: Link law ruler, no debe estar vacío, favor de verificar ");    sales_edit_form.link_lawruler.focus(); return false;
        }  


        if (sales_edit_form.lead.value  == "")   {
           // alert("El campo: Número de LEAD, no debe estar vacío, favor de verificar ");    sales_edit_form.name.focus(); return false; 
            alert("El campo: Número de LEAD, Este campo es obligatorio sí, no, no se pagara comisión 1;) ");    sales_edit_form.lead.focus(); return false;
        }  

        if(jvi_numero_correcto.test(sales_edit_form.lead.value)) {
            // alert('Ha escrito un caracter no valido en el campo Nombre, verifique por favor.');  sales_edit_form.name.focus(); return false;    
            alert('Error de sistema esta comisón se eliminara, por mala captura. 2;) ');  sales_edit_form.lead.focus(); return false;    
        }

        if (sales_edit_form.cat_type_process_id.value  == "0")   {
            alert("Seleccione una opción valida para el campo: Tipo de trámite.");    sales_edit_form.cat_type_process_id.focus(); return false;
        } 
        

        if (sales_edit_form.link_payment_receipt.value  == "")   {
            alert("El campo: Link recibo de pago, no debe estar vacío, favor de verificar ");    sales_edit_form.link_payment_receipt.focus(); return false;
        }  

        if (sales_edit_form.consultation_cost_id.value  == "0")   {
            alert("Seleccione una opción valida para el campo: Costo de la consulta.");    sales_edit_form.consultation_cost_id.focus(); return false;
        }  
        

    //    if (clients_form.last_name.value  == "")   {
    //        alert("El campo: Apellidos, no debe estar vacío, favor de verificar ");    clients_form.last_name.focus(); return false;
    //    }  

    //    if(jvi_texto_correcto.test(clients_form.last_name.value)) {
    //        alert('Ha escrito un caracter no valido en el campo Apellidos, verifique por favor.');  clients_form.last_name.focus(); return false;    
    //    }

    //    if (clients_form.email_1.value  == "")   {
    /*        alert("El campo: Email, no debe estar vacío, favor de verificar ");    clients_form.email_1.focus(); return false;
        }  

        if (email1.match(pattern))   {
            let noproblem = 1 ; 
        }
        else {
            alert("El campo: Email, debe ser una dirección de email valida!, favor de verificar ");    clients_form.email_1.focus(); return false;
        }

        if (clients_form.email_2.value  == "")   {
            alert("El campo: CONFIRMACIÓN de Email, no debe estar vacío, favor de verificar ");    clients_form.email_2.focus(); return false;
        } 

        if (email2.match(pattern))   {
            let noproblem = 1 ; 
        }
        else {
            alert("El campo: CONFIRMACIÓN de Email, debe ser una dirección de email valida!, favor de verificar ");    clients_form.email_2.focus(); return false;
        }

        if (clients_form.email_1.value  != clients_form.email_2.value)   {
            alert("Los campos email y confirmación email, deben ser IDENTICOS, favor de verificar ");    clients_form.email_1.focus(); return false;
        } 
        
        if (clients_form.phone_1.value  == "")   {
            alert("El campo: Telefono de Contacto, no debe estar vacío, favor de verificar ");    clients_form.phone_1.focus(); return false;
        } 
        if(jvi_numero_correcto.test(clients_form.phone_1.value)) {
            alert('Ha escrito un caracter no valido en el campo Telefono de Contacto, verifique por favor.');  clients_form.phone_1.focus(); return false;    
        }
        
*/
        
       // alert(" Registro Grabado \n  ¡ Exitosamente ! ");
        sales_edit_form.B01.disabled = true; 
		document.sales_edit_form.submit();	  
    }
    
</script>



<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		





@endsection