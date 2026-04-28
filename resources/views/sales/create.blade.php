@extends('layouts.layout_0')
@section('content')

<div class="Space text-white" style="margin-top:0px">
    <div>
        <p>BIS - Business Intelligence System</p>
    </div>
</div>

{{--  --}}
<form id="sales-form" action="/sales" method="POST" name="sales_form" enctype="multipart/form-data">
    @csrf

<div id="sales" class="container header" style="margin-top:0px">

    
    <div class="row">
        <div class="col-md-12">
            <hr>
            <p style="text-align: center;margin-bottom: 2px;margin-top: 2px;">
                <label>::::: NUEVA VENTA :::::</label>
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
            <label for="cat_employees_id">Agente (Cerrador)</label>
            <select name="cat_employees_id" id="cat_employees_id" class="form-select" autofocus>
                <option value="0" selected>Seleccione una opción</option>
                @foreach ($employees as $employyees)
                    <option value="{{ $employyees->id }}">{{ $employyees->name }} {{$employyees->last_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-sm-4">
            <label for="cat_employees_2_id">Team leader</label>
            <select name="cat_employees_2_id" id="cat_employees_2_id" class="form-select">
                <option value="0" selected>Seleccione una opción</option>
                @foreach ($employeeesss as $employeeesss)
                    <option value="{{ $employeeesss->id }}">{{ $employeeesss->name }} {{$employeeesss->last_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-sm-4">
            <label for="cat_employees_3_id">Agente (Messenger team)</label>
            <select name="cat_employees_3_id" id="cat_employees_3_id" class="form-select">
                <option value="0" selected>Seleccione una opción</option>
                @foreach ($employeess as $employyeess)
                    <option value="{{ $employyeess->id }}">{{ $employyeess->name }} {{ $employyeess->last_name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    
    <div class="row">
        <div class="col-md-9">
            <label for="link_lawruler">Link law ruler</label>
            <input id="link_lawruler" name="link_lawruler" class="form-control" type="text" value="">
        </div>
        <div class="col-md-3">
            <label for="lead">Número de LEAD</label>
            <input id="lead" name="lead" class="form-control" type="text" placeholder="_ _ _ _ _ _" value="" readonly>
        </div>
    </div>

    
    <div class="row">
        <div class="col-sm-9">
            <label for="link_payment_receipt" class="label-form">Recibo de pago</label>
            <textarea id="link_payment_receipt" name="link_payment_receipt" class="form-control" required value="" size=10 rows=7 cols=35></textarea>
        </div>
        <div class="col-sm-3">
            <label for="consultation_cost_id">Costo de la Consulta</label>
            <input id="consultation_cost_id" name="consultation_cost_id" placeholder="$" class="form-control" type="text" value="" readonly>
        </div>
    </div>

    
    <div class="row">
        <div class="col-sm-6">
            <label for="cat_type_process_id">Tipo de trámite</label>
            <select id="cat_type_process_id" name="cat_type_process_id" class="form-select">
                <option value="0" selected>Seleccione una opción</option>
                @foreach ($process as $proceesss)
                    <option value="{{ $proceesss->id }}">{{ $proceesss->description }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-6">
            <label for="cat_client_id">Posible Cliente</label>
            <select name="cat_client_id" id="cat_client_id" class="form-select">
                <option value="0" selected>Seleccione una opción</option>
                @foreach ($client as $clieents)
                    <option value="{{ $clieents->id }}">{{ $clieents->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    
    @php
        $today = date("d/m/Y");
        $today1 = date("d-m-Y", strtotime($today."+ 1 day"));
        $day = date("d");
        $month = date("m");
        $year = date("Y");
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        session_start();
        $enjoyer_id_ = $_SESSION["enjoyer_id"] ?? '';
    @endphp

    <input type="hidden" id="sale_date" name="sale_date" value="{{ $today }}">
    <input type="hidden" id="day" name="day" value="{{ $day }}">
    <input type="hidden" id="month" name="month" value="{{ $month }}">
    <input type="hidden" id="year" name="year" value="{{ $year }}">
    <input type="hidden" id="ipAddress" name="ipaddress" value="{{ $ipAddress }}">
    <input type="hidden" id="enjoyer_id_" name="x_users_id" value="{{ $enjoyer_id_ }}">

    {{-- Botones --}}
    <div class="row">
        <div class="form-group col-sm-2">
            <label for="reset" class="label-form">&nbsp;</label><br>
            <input type="reset" class="btn btn-light" value="..... R E S E T .....">
        </div>
        <div class="form-group col-sm-10">
            <label for="guardar" class="label-form">&nbsp;</label><br>
            <button type="button" id="btn-submit" class="btn btn-primary">
                <strong>...G U A R D A R...</strong>
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>

</div>
<br><br><br><br><br><br>
</form>

{{--  REACT --}}
<div id="react-error-container"></div>


<script type="text/babel">

    // --- Expresiones regulares (mismas que usabas) ---
    const jvi_texto_correcto = /[\d\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
    const jvi_numero_correcto = /[\D\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;

    // --- Componente React para los mensajes de error ---
    function ErrorMessages({ errors }) {
        if (errors.length === 0) return null;
        
        return (
            <div className="container" style={{ marginTop: '20px' }}>
                <div className="alert alert-danger">
                    <strong>Por favor corrige los siguientes errores:</strong>
                    <ul style={{ marginTop: '10px' }}>
                        {errors.map((error, index) => (
                            <li key={index}>{error}</li>
                        ))}
                    </ul>
                </div>
            </div>
        );
    }

    // --- 
    function SalesFormValidator() {
        const [errors, setErrors] = React.useState([]);

        // 
        const reportError = (message, fieldId) => {
            const newErrors = [...errors, message];
            setErrors(newErrors);
            document.getElementById(fieldId)?.focus();
            return false;
        };

        // Función principal de validación
        const validateForm = () => {
            const newErrors = [];
            setErrors([]); // Limpiar errores previos

            // 1. Agente (Cerrador)
            if (document.getElementById('cat_employees_id').value === '0') {
                newErrors.push('Seleccione una opción válida para el campo: Agente (Cerrador).');
                document.getElementById('cat_employees_id').focus();
                setErrors([...newErrors]);
                return false;
            }

            // 2. Team leader
            if (document.getElementById('cat_employees_2_id').value === '0') {
                newErrors.push('Seleccione una opción válida para el campo: Team leader.');
                document.getElementById('cat_employees_2_id').focus();
                setErrors([...newErrors]);
                return false;
            }

            // 3. Agente (Messenger Team)
            if (document.getElementById('cat_employees_3_id').value === '0') {
                newErrors.push('Seleccione una opción válida para el campo: Agente (Messenger Team).');
                document.getElementById('cat_employees_3_id').focus();
                setErrors([...newErrors]);
                return false;
            }

            // 4. Link law ruler vacío
            const linkLawruler = document.getElementById('link_lawruler').value;
            if (linkLawruler === '') {
                newErrors.push('El campo: Link law ruler, no debe estar vacío, favor de verificar.');
                document.getElementById('link_lawruler').focus();
                setErrors([...newErrors]);
                return false;
            }

            // 5. Link law ruler formato
            const spotX = linkLawruler.indexOf('https://mendozafirm.lawruler.com');
            if (spotX !== 0) {
                newErrors.push('El campo: Link law ruler, debe ser un link válido del tipo: https://mendozafirm.lawruler.com/update-lead.aspx?lead=000000, favor de verificar.');
                document.getElementById('link_lawruler').focus();
                setErrors([...newErrors]);
                return false;
            }

            // 6. LEAD vacío
            const lead = document.getElementById('lead').value;
            if (lead === '') {
                newErrors.push('El campo: Número de LEAD, no debe estar vacío. Este campo es obligatorio.');
                document.getElementById('lead').focus();
                setErrors([...newErrors]);
                return false;
            }

            // 7. LEAD numérico
            if (jvi_numero_correcto.test(lead)) {
                newErrors.push('Error de sistema: esta comisión se eliminará por mala captura (LEAD no numérico).');
                document.getElementById('lead').focus();
                setErrors([...newErrors]);
                return false;
            }

            // 8. Tipo de trámite
            if (document.getElementById('cat_type_process_id').value === '0') {
                newErrors.push('Seleccione una opción válida para el campo: Tipo de trámite.');
                document.getElementById('cat_type_process_id').focus();
                setErrors([...newErrors]);
                return false;
            }

            // 9. Recibo de pago
            const paymentReceipt = document.getElementById('link_payment_receipt').value.trim();
            if (paymentReceipt === '') {
                newErrors.push('El campo: Recibo de pago, no debe estar vacío, favor de verificar.');
                document.getElementById('link_payment_receipt').focus();
                setErrors([...newErrors]);
                return false;
            }

            // 10. Costo de consulta
            if (document.getElementById('consultation_cost_id').value === '0' || 
                document.getElementById('consultation_cost_id').value === '') {
                newErrors.push('Seleccione una opción válida para el campo: Costo de la consulta.');
                document.getElementById('consultation_cost_id').focus();
                setErrors([...newErrors]);
                return false;
            }

            //
            return true;
        };

        // 
        const handleSubmit = () => {
            if (validateForm()) {
                // Deshabilitar botón para evitar doble envío
                document.getElementById('btn-submit').disabled = true;
                // Enviar el formulario
                document.getElementById('sales-form').submit();
            }
        };

        // 
        React.useEffect(() => {
            const btn = document.getElementById('btn-submit');
            btn.addEventListener('click', handleSubmit);
            
            // 
            return () => {
                btn.removeEventListener('click', handleSubmit);
            };
        }, []); // 

        return (
            <ErrorMessages errors={errors} />
        );
    }

    // --- MONTAR REACT EN EL DOM ---
    const container = document.getElementById('react-error-container');
    const root = ReactDOM.createRoot(container);
    root.render(<SalesFormValidator />);

    // 
    // 
    // 
    
    function showLead() {
        let x = document.getElementById("link_lawruler").value;
        let positionX = x.search("=");
        positionX = positionX + 1;
        let onlyL = positionX + 6;
        let leadX = x.slice(positionX, onlyL);
        document.getElementById("lead").value = leadX;
        document.getElementById("cat_type_process_id").focus();
    }

    function showCost() {
        let x = document.getElementById("link_payment_receipt").value;
        let positionX = x.indexOf("$");
        positionX = positionX + 1;
        let onlyL = positionX + 3;
        let costX = x.slice(positionX, onlyL);
        document.getElementById("consultation_cost_id").value = costX;
    }

    // 
    document.getElementById('link_lawruler').addEventListener('blur', showLead);
    document.getElementById('link_payment_receipt').addEventListener('blur', showCost);

</script>

@endsection