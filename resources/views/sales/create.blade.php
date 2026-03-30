
@extends('layouts.layout_0')
@section('content')

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-white " style="margin-top:0px">

    <div>
        <p>BIS - Business Intelligence System</p>
    </div>
</div>



<form action="/sales" method="POST" name="sales_form" enctype="multipart/form-data" >
    @csrf


<div id="sales" class="container header " style="margin-top:0px">


        <div class="row" >
            <div class="col-md-12" > 
                    <hr>
                    <p style="text-align: center;margin-bottom: 2px;margin-top: 2px;">
                        <label> ::::: NUEVA VENTA ::::: </label>
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
            <div class="col-sm-4">
                <label for="">Agente (Cerrador)</label>
                
                <select name="cat_employees_id" class="form-select" autofocus> 
                                <option value="0" selected>Seleccione una opción</option>
                    @foreach ($employees as $employyees )    
                                <option value="{{ $employyees->id }}">{{ $employyees->name }} {{$employyees->last_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-sm-4">
                <label for="">Team leader</label>
                
                <select name="cat_employees_2_id" class="form-select" autofocus> 
                                <option value="0" selected>Seleccione una opción</option>
                    @foreach ($employeeesss as $employeeesss )    
                                <option value="{{ $employeeesss->id }}">{{ $employeeesss->name }} {{$employeeesss->last_name}}</option>
                    @endforeach
                </select>
            </div>
                
            <div class="col-sm-4">
                <label for="">Agente (Messenger team)</label>
                <select name="cat_employees_3_id" class="form-select" autofocus> 
                    <option value="0" selected>Seleccione una opción</option>
                    @foreach ($employeess as $employyeess )    
                                <option value="{{ $employyeess->id }}">{{ $employyeess->name }} {{ $employyeess->last_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                    <label for="">Link law ruler </label>
                    <input id="link_lawruler" name="link_lawruler" class="form-control" type="text" value="" onblur="showLead()" >
            </div>

            <div class="col-md-3">
                <label for="">Número de LEAD </label>
                <input id="lead" name="lead" class="form-control" type="text" placeholder="_ _ _ _ _ _"   value=""   readonly>
            </div>
                
            
        </div>


        <div class="row">  
            
            <div class="col-sm-9">
                    <label for="image_path" class="label-form"> Recibo de pago</label>
                    <!-- <input id="link_payment_receipt" name="link_payment_receipt" class="form-control"  type="text" value="" onblur="showCost()" >-->
                    <textarea id="link_payment_receipt" name="link_payment_receipt" class="form-control" required  value=""  size=10 rows=7 cols=35  onblur="showCost()"> </textarea>
                
            </div>
            <div class="col-sm-3">
                    <label for="">Costo de la Consulta</label>
                    <input id="consultation_cost_id" name="consultation_cost_id" placeholder="$" class="form-control" type="text" value=""   readonly>
                    
                    <!-- <select id="consultation_cost_id1" name="consultation_cost_id1" class="form-select"> 
                        <option value="0" selected>Seleccione una opción</option>
                    @foreach ($costs as $cossts )    
                        <option value="{{ $cossts->id }}">{{ $cossts->consultation_cost }}</option>
                    @endforeach
                    -->
                    </select>
            </div>
        </div>


        <div class="row">  
            <div class="col-sm-6">
                <label for="">Tipo de trámite</label>
                <select id="cat_type_process_id" name="cat_type_process_id" class="form-select"> 
                    <option value="0" selected>Seleccione una opción</option>
                    @foreach ($process as $proceesss )    
                                <option value="{{ $proceesss->id }}">{{ $proceesss->description }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-sm-6">
                <label for="">Posible Cliente</label>
                <select name="cat_client_id" class="form-select"> 
                        <option value="0" selected>Seleccione una opción</option>
                    @foreach ($client as $clieents )    
                        <option value="{{ $clieents->id }}">{{ $clieents->name }}</option>
                    @endforeach
                </select>
            </div>
            
        </div>


        


        <div class="row"> 
            <?php
						$today = date("d/m/Y");
						$today1 = date("d-m-Y",strtotime($today."+ 1 day"));
                        $day = date("d");
                        $month = date("m");
                        $year = date("Y");
                        $ipAddress = $_SERVER['REMOTE_ADDR'];
                        
                    //    echo $ipAddress;
                        
                        session_start();
                        if (isset($_SESSION["enjoyer"])){
                            $enjoyer = $_SESSION["enjoyer"];
                    //        echo $enjoyer . "<-- here 1056";
                       //++ $enjoyer_id_ = $_SESSION["enjoyer_id"];
                            $enjoyer_id_ = $_SESSION["enjoyer_id"];
                           //++ echo $enjoyer_id_ . "<-- enjoyer_id_";
                        }
                        
					?>

            <input type="hidden" id="sale_date" name="sale_date" value="<?php echo $today ?>" >
            <input type="hidden" id="day" name="day" value="<?php echo $day ?>" >
            <input type="hidden" id="month" name="month" value="<?php echo $month ?>" >
            <input type="hidden" id="year" name="year" value="<?php echo $year ?>" >
            <input type="hidden" id="ipAddress" name="ipaddress" value="<?php echo $ipAddress ?>" >
            <input type="hidden" id="enjoyer_id_" name="x_users_id" value="<?php echo $enjoyer_id_ ?>" >
            
            





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


        <div class="row" >
            <div class="col-md-12" > 
                    <hr>
                
            </div>
        </div>

</div>
<br><br><br><br><br><br>
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
    function showLead() {
        //alert("evento oneblurrr. showlead");
        let x = document.getElementById("link_lawruler").value;
        let positionX = x.search("=")
        positionX = positionX + 1
        let onlyL = positionX + 6
        let leadX = x.slice(positionX, onlyL);
        // alert(x);
        // alert(leadX);
        // document.getElementById("demo").innerHTML = result;
        document.getElementById("lead").value =  leadX;
        sales_form.cat_type_process_id.focus();
        
    }


    function showCost() {
        //alert("evento oneblurrr. showlead");
        let x = document.getElementById("link_payment_receipt").value;
        let positionX = x.indexOf("$")
        positionX = positionX + 1
        let onlyL = positionX + 3
        let costX = x.slice(positionX, onlyL);
        // alert(x);
    //alert(costX);
        // document.getElementById("demo").innerHTML = result;
    document.getElementById("consultation_cost_id").value =  costX;
    //sales_form.cat_type_process_id.focus();


    }


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
        
        
        
        if (sales_form.cat_employees_id.value  == "0")   {
            alert("Seleccione una opción valida para el campo: Agente (Cerrador).");    sales_form.cat_employees_id.focus(); return false;
        } 

        if (sales_form.cat_employees_2_id.value  == "0")   {
            alert("Seleccione una opción valida para el campo: Team leader.");    sales_form.cat_employees_2_id.focus(); return false;
        } 

        if (sales_form.cat_employees_3_id.value  == "0")   {
            alert("Seleccione una opción valida para el campo: Agente (Messenger Team).");    sales_form.cat_employees_3_id.focus(); return false;
        } 

        if (sales_form.link_lawruler.value  == "")   {
            alert("El campo: Link law ruler, no debe estar vacío, favor de verificar ");    sales_form.link_lawruler.focus(); return false;
        }  

        let x = document.getElementById("link_lawruler").value;
        let spotX = x.indexOf("https://mendozafirm.lawruler.com")
       // alert(spotX);
        if (spotX != "0") {
            alert("El campo: Link law ruler, debe ser un link valido del tipo: https://mendozafirm.lawruler.com/update-lead.aspx?lead=000000 , favor de verificar ");  sales_form.link_lawruler.focus(); return false;
        }

        if (sales_form.lead.value  == "")   {
           // alert("El campo: Número de LEAD, no debe estar vacío, favor de verificar ");    sales_form.name.focus(); return false; 
            alert("El campo: Número de LEAD, Este campo es obligatorio sí, no, no se pagara comisión 1;) ");    sales_form.lead.focus(); return false;
        }  

        if(jvi_numero_correcto.test(sales_form.lead.value)) {
            // alert('Ha escrito un caracter no valido en el campo Nombre, verifique por favor.');  sales_form.name.focus(); return false;    
            alert('Error de sistema esta comisón se eliminara, por mala captura. 2;) ');  sales_form.lead.focus(); return false;    
        }

        if (sales_form.cat_type_process_id.value  == "0")   {
            alert("Seleccione una opción valida para el campo: Tipo de trámite.");    sales_form.cat_type_process_id.focus(); return false;
        } 
        

        var textareaValue = document.getElementById("link_payment_receipt").value.trim();

        // Verificar si el textarea está vacío
        if (textareaValue === '') {
            alert("El campo: Recibo de pago, no debe estar vacío, favor de verificar.");
            sales_form.link_payment_receipt.focus(); 
            return false;
        }





        if (sales_form.link_payment_receipt.value  == "")   {
            alert("El campo: Link recibo de pago, no debe estar vacío, favor de verificar ");    sales_form.link_payment_receipt.focus(); return false;
        }  

        if (sales_form.consultation_cost_id.value  == "0")   {
            alert("Seleccione una opción valida para el campo: Costo de la consulta.");    sales_form.consultation_cost_id.focus(); return false;
        }  
        
        


    
        
       // alert(" Registro Grabado \n  ¡ Exitosamente ! ");
        sales_form.B01.disabled = true; 
		document.sales_form.submit();	  
    }
    


/*    https://mendozafirm.lawruler.com/update-lead.aspx?lead=683580


Payment Receipt	$197.00 The Mendoza Law Firm LLC 601 Pennsylvania Ave. NW Ste. 900 Washington , 
District Of Columbia 20004 (915) 228-3549  	Account Holder MARIA ANTONIA PEREZ ORTIZ 80229 Payment Summary	  
Account:	Operating/ATTORNEY FEES Reference:	MARIA ANTONIA PEREZ ORTIZ / (720) 993-7689 / OEDR  	  
Amount Paid:	$197.00 Payment Method:	VISA Card Number:	************4214 Entry Mode:	
Manual Auth Code:	096706 Payment Date:	April 01, 2024 05:24 pm Transaction Id:	105701834 
*/

</script>



<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		





@endsection