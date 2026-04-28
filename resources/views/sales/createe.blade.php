@extends('layouts.layout_0')

@section('content')

{{-- 
    formulario aquí.
    
--}}

<div class="Space text-white" style="margin-top:0px">
    <div>
        <p>BIS - Business Intelligence System</p>
    </div>
</div>

{{-- aplicación completa --}}
<div id="react-sales-form-root"></div>

@endsection

@section('scripts')
    
    @vite(['resources/js/app.jsx'])
    
    
    <script>
        window.LARAVEL_DATA = {
            csrfToken: @json(csrf_token()),
            formAction: "/sales",
            sessionMessage: @json(session('message')),
            today: @json(date("d/m/Y")),
            day: @json(date("d")),
            month: @json(date("m")),
            year: @json(date("Y")),
            ipAddress: @json($_SERVER['REMOTE_ADDR']),
            enjoyerId: @json(session('enjoyer_id') ?? ''),
            
            // Datos para los selects
            employees: @json($employees->map(fn($e) => ['id' => $e->id, 'name' => $e->name . ' ' . $e->last_name])),
            employeeesss: @json($employeeesss->map(fn($e) => ['id' => $e->id, 'name' => $e->name . ' ' . $e->last_name])),
            employeess: @json($employeess->map(fn($e) => ['id' => $e->id, 'name' => $e->name . ' ' . $e->last_name])),
            process: @json($process->map(fn($p) => ['id' => $p->id, 'description' => $p->description])),
            client: @json($client->map(fn($c) => ['id' => $c->id, 'name' => $c->name])),
            costs: @json($costs->map(fn($c) => ['id' => $c->id, 'cost' => $c->consultation_cost])),
        };
    </script>
@endsection