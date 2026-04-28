@extends('layouts.layout_0')

@section('styles')
<style>
    :root {
        --primary: #4f46e5;
        --primary-hover: #4338ca;
        --danger: #ef4444;
        --danger-bg: rgba(239, 68, 68, 0.1);
        --success: #10b981;
        --success-bg: rgba(16, 185, 129, 0.1);
        --warning: #f59e0b;
        --warning-bg: rgba(245, 158, 11, 0.1);
        --dark: #1e1b4b;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-300: #d1d5db;
        --gray-400: #9ca3af;
        --gray-500: #6b7280;
        --gray-700: #374151;
        --gray-900: #111827;
        --white: #ffffff;
        --shadow-sm: 0 1px 2px rgba(0,0,0,0.05);
        --shadow: 0 1px 3px rgba(0,0,0,0.1), 0 1px 2px rgba(0,0,0,0.06);
        --shadow-md: 0 4px 6px rgba(0,0,0,0.07), 0 2px 4px rgba(0,0,0,0.06);
        --shadow-lg: 0 10px 15px rgba(0,0,0,0.1), 0 4px 6px rgba(0,0,0,0.05);
        --radius-sm: 6px;
        --radius: 8px;
        --radius-lg: 12px;
        --transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Contenedor principal del formulario */
    .sales-form-wrapper {
        max-width: 1100px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Tarjeta del formulario */
    .form-card {
        background: var(--white);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-lg);
        overflow: hidden;
        border: 1px solid var(--gray-200);
    }

    /* Header del formulario */
    .form-header {
        background: linear-gradient(135deg, #1e1b4b 0%, #312e81 100%);
        padding: 20px 30px;
        text-align: center;
    }

    .form-header h2 {
        color: white;
        margin: 0;
        font-size: 1.25rem;
        font-weight: 600;
        letter-spacing: 1px;
    }

    /* Cuerpo del formulario */
    .form-body {
        padding: 30px;
    }

    /* Grupo de campo */
    .form-field {
        margin-bottom: 24px;
    }

    .field-label {
        display: block;
        font-weight: 600;
        font-size: 0.875rem;
        color: var(--gray-700);
        margin-bottom: 6px;
        letter-spacing: 0.3px;
    }

    .field-label .required-star {
        color: var(--danger);
        margin-left: 2px;
    }

    /* Inputs y Selects */
    .input-field,
    .select-field,
    .textarea-field {
        width: 100%;
        padding: 10px 14px;
        border: 2px solid var(--gray-200);
        border-radius: var(--radius);
        font-size: 0.95rem;
        font-family: inherit;
        color: var(--gray-900);
        background: var(--white);
        transition: all var(--transition);
        outline: none;
        box-sizing: border-box;
    }

    .input-field:focus,
    .select-field:focus,
    .textarea-field:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
    }

    .input-field.error,
    .select-field.error,
    .textarea-field.error {
        border-color: var(--danger);
        box-shadow: 0 0 0 3px var(--danger-bg);
        animation: shake 0.4s ease-in-out;
    }

    .input-field.success,
    .select-field.success,
    .textarea-field.success {
        border-color: var(--success);
        box-shadow: 0 0 0 3px var(--success-bg);
    }

    .input-field:disabled,
    .select-field:disabled {
        background: var(--gray-100);
        color: var(--gray-500);
        cursor: not-allowed;
    }

    .textarea-field {
        resize: vertical;
        min-height: 100px;
    }

    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        20% { transform: translateX(-4px); }
        40% { transform: translateX(4px); }
        60% { transform: translateX(-3px); }
        80% { transform: translateX(3px); }
    }

    /* Mensaje de error */
    .field-error {
        display: flex;
        align-items: center;
        gap: 6px;
        color: var(--danger);
        font-size: 0.8rem;
        margin-top: 6px;
        animation: slideDown 0.25s ease-out;
    }

    .field-error i {
        font-size: 0.9rem;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-6px);
            max-height: 0;
        }
        to {
            opacity: 1;
            transform: translateY(0);
            max-height: 30px;
        }
    }

    /* Grid de dos columnas */
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .form-row-9-3 {
        display: grid;
        grid-template-columns: 9fr 3fr;
        gap: 20px;
    }

    .form-row-10-2 {
        display: grid;
        grid-template-columns: 10fr 2fr;
        gap: 20px;
    }

    /* Sección del formulario */
    .form-section {
        margin-top: 24px;
        padding-top: 24px;
        border-top: 1px solid var(--gray-200);
    }

    .section-title {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: var(--gray-400);
        margin-bottom: 16px;
    }

    /* Botones */
    .btn-row {
        display: flex;
        gap: 12px;
        margin-top: 30px;
        padding-top: 24px;
        border-top: 1px solid var(--gray-200);
        align-items: center;
    }

    .btn {
        padding: 12px 28px;
        border: none;
        border-radius: var(--radius);
        font-size: 0.95rem;
        font-weight: 600;
        cursor: pointer;
        letter-spacing: 1px;
        transition: all var(--transition);
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-primary {
        background: var(--primary);
        color: white;
        flex: 1;
        justify-content: center;
    }

    .btn-primary:hover:not(:disabled) {
        background: var(--primary-hover);
        box-shadow: var(--shadow-md);
        transform: translateY(-1px);
    }

    .btn-primary:active:not(:disabled) {
        transform: translateY(0);
    }

    .btn-primary:disabled {
        background: var(--gray-300);
        color: var(--gray-500);
        cursor: not-allowed;
        transform: none;
    }

    .btn-reset {
        background: var(--gray-100);
        color: var(--gray-700);
        border: 1px solid var(--gray-200);
        min-width: 120px;
        justify-content: center;
    }

    .btn-reset:hover {
        background: var(--gray-200);
    }

    /* Spinner de carga */
    .spinner {
        width: 18px;
        height: 18px;
        border: 2.5px solid rgba(255,255,255,0.3);
        border-top-color: white;
        border-radius: 50%;
        animation: spin 0.7s linear infinite;
        display: inline-block;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    /* Alerta de error general */
    .alert-error {
        background: var(--danger-bg);
        border: 1px solid rgba(239, 68, 68, 0.3);
        border-radius: var(--radius);
        padding: 14px 18px;
        margin-bottom: 20px;
        display: flex;
        align-items: flex-start;
        gap: 10px;
        animation: slideDown 0.3s ease-out;
    }

    .alert-error i {
        color: var(--danger);
        font-size: 1.2rem;
        margin-top: 1px;
    }

    .alert-error-content {
        flex: 1;
    }

    .alert-error-title {
        font-weight: 700;
        color: var(--danger);
        font-size: 0.9rem;
        margin-bottom: 4px;
    }

    .alert-error-list {
        list-style: none;
        padding: 0;
        margin: 0;
        font-size: 0.85rem;
        color: #b91c1c;
    }

    .alert-error-list li {
        padding: 2px 0;
    }

    .alert-error-list li::before {
        content: '• ';
        font-weight: bold;
    }

    /* Badge de estado del formulario */
    .form-status {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        margin-left: auto;
    }

    .form-status.valid {
        background: var(--success-bg);
        color: var(--success);
        border: 1px solid rgba(16, 185, 129, 0.3);
    }

    .form-status.invalid {
        background: var(--danger-bg);
        color: var(--danger);
        border: 1px solid rgba(239, 68, 68, 0.3);
    }

    .form-status.pending {
        background: var(--warning-bg);
        color: var(--warning);
        border: 1px solid rgba(245, 158, 11, 0.3);
    }

    /* Contador de caracteres */
    .char-counter {
        text-align: right;
        font-size: 0.7rem;
        color: var(--gray-400);
        margin-top: 4px;
    }

    .char-counter.warning {
        color: var(--warning);
    }

    /* Tooltip opcional */
    .field-hint {
        font-size: 0.75rem;
        color: var(--gray-400);
        margin-top: 4px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .form-row,
        .form-row-9-3,
        .form-row-10-2 {
            grid-template-columns: 1fr;
        }
        
        .form-body {
            padding: 20px 15px;
        }
        
        .btn-row {
            flex-direction: column;
        }
        
        .btn-reset {
            width: 100%;
        }
    }
</style>
@endsection


@section('content')

<div class="sales-form-wrapper">
    {{-- Este div será reemplazado completamente por React --}}
    <div id="react-sales-edit-root"></div>
</div>

@endsection

@section('scripts')

<script type="text/babel">
    // ============================================================
    // JSON
    // ============================================================
    const initialData = {
        factSalesId: {{ $fact_sales->id }},
        updateUrl: "/sales/{{ $fact_sales->id }}",
        
        // Valores actuales del registro
        catEmployeesId: "{{ $employee1->first()->id ?? '' }}",
        catEmployees3Id: "{{ $employee3->first()->id ?? '0' }}",
        linkLawruler: {!! json_encode($fact_sales->link_lawruler) !!},
        lead: {!! json_encode($fact_sales->lead) !!},
        catTypeProcessId: "{{ $process1->first()->id ?? '' }}",
        catClientId: "{{ $client1->first()->id ?? '' }}",
        linkPaymentReceipt: {!! json_encode($fact_sales->link_payment_receipt) !!},
        consultationCostId: "{{ $cost1->first()->id ?? '' }}",
    };

    // Opciones para los selects
    const selectOptions = {
        employees: [
            @foreach ($employees as $emp)
                { value: "{{ $emp->id }}", label: "{{ $emp->name }} {{ $emp->last_name }}" },
            @endforeach
        ],
        employeess: [
            @foreach ($employeess as $emp)
                { value: "{{ $emp->id }}", label: "{{ $emp->name }} {{ $emp->last_name }}" },
            @endforeach
        ],
        process: [
            @foreach ($process as $proc)
                { value: "{{ $proc->id }}", label: "{{ $proc->description }}" },
            @endforeach
        ],
        client: [
            @foreach ($client as $cli)
                { value: "{{ $cli->id }}", label: "{{ $cli->name }}" },
            @endforeach
        ],
        costs: [
            @foreach ($costs as $cost)
                { value: "{{ $cost->id }}", label: "{{ $cost->consultation_cost }}" },
            @endforeach
        ],
        // Empleados preseleccionados
        employee1: [
            @foreach ($employee1 as $emp1)
                { value: "{{ $emp1->id }}", label: "{{ $emp1->name }} {{ $emp1->last_name }}" },
            @endforeach
        ],
        employee3: [
            @foreach ($employee3 as $emp3)
                { value: "{{ $emp3->id }}", label: "{{ $emp3->name }} {{ $emp3->last_name }}" },
            @endforeach
        ],
        process1: [
            @foreach ($process1 as $proc1)
                { value: "{{ $proc1->id }}", label: "{{ $proc1->description }}" },
            @endforeach
        ],
        client1: [
            @foreach ($client1 as $cli1)
                { value: "{{ $cli1->id }}", label: "{{ $cli1->name }}" },
            @endforeach
        ],
        cost1: [
            @foreach ($cost1 as $c1)
                { value: "{{ $c1->id }}", label: "{{ $c1->consultation_cost }}" },
            @endforeach
        ],
    };

    // Token CSRF
    const csrfToken = "{{ csrf_token() }}";

    const REGEX = {
        textoInvalido: /[\d\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/,
        numeroInvalido: /[\D\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/,
        caracteresPeligrosos: /[\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/,
        email: /^[^ ]+@[^ ]+\.[a-z]{2,3}$/,
        urlLawruler: /^https:\/\/mendozafirm\.lawruler\.com\/update-lead\.aspx\?lead=\d{6}/,
    };

    const validators = {
        catEmployeesId: (value) => {
            if (!value || value === '0') return 'Seleccione un Agente (Cerrador) válido.';
            return null;
        },
        catEmployees3Id: (value) => {
            if (!value || value === '0') return 'Seleccione un Agente (Messenger Team) válido.';
            return null;
        },
        linkLawruler: (value) => {
            if (!value || !value.trim()) return 'El Link Law Ruler no debe estar vacío.';
            return null;
        },
        lead: (value) => {
            if (!value || !value.trim()) return 'El Número de LEAD es obligatorio (no se pagará comisión).';
            if (REGEX.numeroInvalido.test(value)) return 'El LEAD solo debe contener números.';
            if (value.trim().length !== 6) return 'El LEAD debe tener exactamente 6 dígitos.';
            return null;
        },
        catTypeProcessId: (value) => {
            if (!value || value === '0') return 'Seleccione un Tipo de trámite válido.';
            return null;
        },
        linkPaymentReceipt: (value) => {
            if (!value || !value.trim()) return 'El Recibo de pago no debe estar vacío.';
            return null;
        },
        consultationCostId: (value) => {
            if (!value || value === '0') return 'Seleccione un Costo de consulta válido.';
            return null;
        },
    };

    function SelectField({ id, label, value, onChange, onBlur, options, error, disabled, required }) {
        const selectClass = `select-field ${error ? 'error' : ''} ${value && value !== '0' && !error ? 'success' : ''}`;
        
        return (
            <div className="form-field">
                <label className="field-label" htmlFor={id}>
                    {label}
                    {required && <span className="required-star">*</span>}
                </label>
                <select
                    id={id}
                    className={selectClass}
                    value={value}
                    onChange={(e) => onChange(e.target.value)}
                    onBlur={onBlur}
                    disabled={disabled}
                >
                    {options.map(opt => (
                        <option key={opt.value} value={opt.value}>{opt.label}</option>
                    ))}
                </select>
                {error && (
                    <div className="field-error">
                        <i className="fas fa-exclamation-circle"></i>
                        <span>{error}</span>
                    </div>
                )}
            </div>
        );
    }

    function InputField({ id, label, value, onChange, onBlur, error, disabled, readonly, required, placeholder, maxLength }) {
        const inputClass = `input-field ${error ? 'error' : ''} ${value && !error ? 'success' : ''}`;
        
        return (
            <div className="form-field">
                <label className="field-label" htmlFor={id}>
                    {label}
                    {required && <span className="required-star">*</span>}
                </label>
                <input
                    id={id}
                    type="text"
                    className={inputClass}
                    value={value}
                    onChange={(e) => onChange(e.target.value)}
                    onBlur={onBlur}
                    disabled={disabled}
                    readOnly={readonly}
                    placeholder={placeholder || ''}
                    maxLength={maxLength || undefined}
                />
                {maxLength && value && (
                    <div className={`char-counter ${value.length > maxLength * 0.9 ? 'warning' : ''}`}>
                        {value.length}/{maxLength}
                    </div>
                )}
                {error && (
                    <div className="field-error">
                        <i className="fas fa-exclamation-circle"></i>
                        <span>{error}</span>
                    </div>
                )}
            </div>
        );
    }

    function TextareaField({ id, label, value, onChange, onBlur, error, required, rows }) {
        const textareaClass = `textarea-field ${error ? 'error' : ''} ${value && !error ? 'success' : ''}`;
        
        return (
            <div className="form-field">
                <label className="field-label" htmlFor={id}>
                    {label}
                    {required && <span className="required-star">*</span>}
                </label>
                <textarea
                    id={id}
                    className={textareaClass}
                    value={value}
                    onChange={(e) => onChange(e.target.value)}
                    onBlur={onBlur}
                    rows={rows || 5}
                />
                {error && (
                    <div className="field-error">
                        <i className="fas fa-exclamation-circle"></i>
                        <span>{error}</span>
                    </div>
                )}
            </div>
        );
    }

    
    function ErrorAlert({ errors }) {
        if (!errors || errors.length === 0) return null;
        
        return (
            <div className="alert-error">
                <i className="fas fa-triangle-exclamation"></i>
                <div className="alert-error-content">
                    <div className="alert-error-title">
                        Por favor corrige los siguientes errores ({errors.length}):
                    </div>
                    <ul className="alert-error-list">
                        {errors.map((err, i) => (
                            <li key={i}>{err}</li>
                        ))}
                    </ul>
                </div>
            </div>
        );
    }


    function FormStatusBadge({ touchedCount, errorCount, totalFields }) {
        if (touchedCount === 0) return null;
        
        const allTouched = touchedCount >= totalFields;
        const status = errorCount === 0 ? 'valid' : (allTouched ? 'invalid' : 'pending');
        
        const config = {
            valid: { icon: 'fa-check-circle', text: 'Formulario válido' },
            invalid: { icon: 'fa-exclamation-circle', text: `${errorCount} error(es) pendiente(s)` },
            pending: { icon: 'fa-clock', text: 'Campos por revisar' },
        };
        
        const current = config[status];
        
        return (
            <span className={`form-status ${status}`}>
                <i className={`fas ${current.icon}`}></i>
                {current.text}
            </span>
        );
    }

    
    function SalesEditForm() {
        // Estados de los campos
        const [formData, setFormData] = React.useState({
            catEmployeesId: initialData.catEmployeesId || '0',
            catEmployees3Id: initialData.catEmployees3Id || '0',
            linkLawruler: initialData.linkLawruler || '',
            lead: initialData.lead || '',
            catTypeProcessId: initialData.catTypeProcessId || '0',
            catClientId: initialData.catClientId || '0',
            linkPaymentReceipt: initialData.linkPaymentReceipt || '',
            consultationCostId: initialData.consultationCostId || '0',
        });

        // Estados de errores
        const [errors, setErrors] = React.useState({});
        
        // Campos que han sido tocados
        const [touched, setTouched] = React.useState({});
        
        // Estado de carga
        const [isSubmitting, setIsSubmitting] = React.useState(false);
        
        // Estado del reset (para animación)
        const [resetKey, setResetKey] = React.useState(0);

        // Validar un campo individual
        const validateField = React.useCallback((fieldName, value) => {
            const validator = validators[fieldName];
            return validator ? validator(value) : null;
        }, []);

        // Manejar cambio en cualquier campo
        const handleChange = (fieldName, value) => {
            const newFormData = { ...formData, [fieldName]: value };
            setFormData(newFormData);
            
            // Validar en tiempo real si el campo ya fue tocado
            if (touched[fieldName]) {
                const error = validateField(fieldName, value);
                setErrors(prev => ({ ...prev, [fieldName]: error }));
            }
        };

        // Manejar blur (cuando el usuario sale del campo)
        const handleBlur = (fieldName) => {
            setTouched(prev => ({ ...prev, [fieldName]: true }));
            const error = validateField(fieldName, formData[fieldName]);
            setErrors(prev => ({ ...prev, [fieldName]: error }));
        };

        // Resetear formulario a valores iniciales
        const handleReset = () => {
            setFormData({
                catEmployeesId: initialData.catEmployeesId || '0',
                catEmployees3Id: initialData.catEmployees3Id || '0',
                linkLawruler: initialData.linkLawruler || '',
                lead: initialData.lead || '',
                catTypeProcessId: initialData.catTypeProcessId || '0',
                catClientId: initialData.catClientId || '0',
                linkPaymentReceipt: initialData.linkPaymentReceipt || '',
                consultationCostId: initialData.consultationCostId || '0',
            });
            setErrors({});
            setTouched({});
            setResetKey(prev => prev + 1);
        };

        // Validar todos los campos
        const validateAll = () => {
            const newErrors = {};
            const allTouched = {};
            let hasErrors = false;
            
            Object.keys(formData).forEach(fieldName => {
                allTouched[fieldName] = true;
                const error = validateField(fieldName, formData[fieldName]);
                if (error) {
                    newErrors[fieldName] = error;
                    hasErrors = true;
                }
            });
            
            setTouched(allTouched);
            setErrors(newErrors);
            return !hasErrors;
        };

        // Enviar formulario
        const handleSubmit = () => {
            if (!validateAll()) {
                // Scroll al primer error
                const firstError = document.querySelector('.field-error');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
                return;
            }
            
            setIsSubmitting(true);
            
            //  FormData para enviar
            const submitForm = document.createElement('form');
            submitForm.method = 'POST';
            submitForm.action = initialData.updateUrl;
            submitForm.style.display = 'none';
            
            // CSRF
            const csrfInput = document.createElement('input');
            csrfInput.type = 'hidden';
            csrfInput.name = '_token';
            csrfInput.value = csrfToken;
            submitForm.appendChild(csrfInput);
            
            // T
            const methodInput = document.createElement('input');
            methodInput.type = 'hidden';
            methodInput.name = '_method';
            methodInput.value = 'PUT';
            submitForm.appendChild(methodInput);
            
            // 
            const fieldMapping = {
                catEmployeesId: 'cat_employees_id',
                catEmployees3Id: 'cat_employees_3_id',
                linkLawruler: 'link_lawruler',
                lead: 'lead',
                catTypeProcessId: 'cat_type_process_id',
                catClientId: 'cat_client_id',
                linkPaymentReceipt: 'link_payment_receipt',
                consultationCostId: 'consultation_cost_id',
            };
            
            Object.keys(fieldMapping).forEach(key => {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = fieldMapping[key];
                input.value = formData[key];
                submitForm.appendChild(input);
            });
            
            document.body.appendChild(submitForm);
            submitForm.submit();
        };

        // )
        const buildSelectOptions = (currentValue, currentOptions, allOptions) => {
            // Primero el valor seleccionado actual (si existe y no está en la lista general)
            const currentOpt = currentOptions.find(o => o.value === currentValue);
            const options = [];
            
            if (currentOpt) {
                options.push(currentOpt);
            }
            
            // Luego el resto de opciones (evitando duplicados)
            allOptions.forEach(opt => {
                if (!options.find(o => o.value === opt.value)) {
                    options.push(opt);
                }
            });
            
            return options;
        };

        // Calcular errores generales para el alert
        const errorList = Object.entries(errors)
            .filter(([_, error]) => error !== null && error !== undefined)
            .map(([field, error]) => error);

        const touchedCount = Object.keys(touched).length;
        const errorCount = Object.values(errors).filter(e => e).length;
        const totalFields = Object.keys(validators).length;

        return (
            <div className="form-card" key={resetKey}>
                {/* Header */}
                <div className="form-header">
                    <h2>
                        <i className="fas fa-edit" style={{ marginRight: '8px' }}></i>
                        ::::: MODIFICACIÓN DE VENTAS :::::
                    </h2>
                </div>
                
                {/* Cuerpo */}
                <div className="form-body">
                    {/* Alerta de errores */}
                    <ErrorAlert errors={errorList} />
                    
                    {/* Fila 1: Agentes */}
                    <div className="form-row">
                        <SelectField
                            id="cat_employees_id"
                            label="Agente (Cerrador)"
                            value={formData.catEmployeesId}
                            onChange={(val) => handleChange('catEmployeesId', val)}
                            onBlur={() => handleBlur('catEmployeesId')}
                            options={buildSelectOptions(
                                formData.catEmployeesId,
                                selectOptions.employee1,
                                selectOptions.employees
                            )}
                            error={touched.catEmployeesId && errors.catEmployeesId}
                            required={true}
                        />
                        
                        <SelectField
                            id="cat_employees_3_id"
                            label="Agente (Messenger Team)"
                            value={formData.catEmployees3Id}
                            onChange={(val) => handleChange('catEmployees3Id', val)}
                            onBlur={() => handleBlur('catEmployees3Id')}
                            options={[
                                { value: '0', label: 'Seleccione una opción' },
                                ...buildSelectOptions(
                                    formData.catEmployees3Id,
                                    selectOptions.employee3,
                                    selectOptions.employeess
                                )
                            ]}
                            error={touched.catEmployees3Id && errors.catEmployees3Id}
                            required={true}
                        />
                    </div>
                    
                    {/* Fila 2: Link y LEAD */}
                    <div className="form-row-9-3">
                        <InputField
                            id="link_lawruler"
                            label="Link Law Ruler"
                            value={formData.linkLawruler}
                            onChange={(val) => handleChange('linkLawruler', val)}
                            onBlur={() => handleBlur('linkLawruler')}
                            error={touched.linkLawruler && errors.linkLawruler}
                            required={true}
                            placeholder="https://mendozafirm.lawruler.com/update-lead.aspx?lead=000000"
                        />
                        
                        <InputField
                            id="lead"
                            label="Número de LEAD"
                            value={formData.lead}
                            onChange={(val) => handleChange('lead', val)}
                            onBlur={() => handleBlur('lead')}
                            error={touched.lead && errors.lead}
                            required={true}
                            placeholder="_ _ _ _ _ _"
                            maxLength={6}
                        />
                    </div>
                    
                    {/* Fila 3: Tipo de trámite y Cliente */}
                    <div className="form-row">
                        <SelectField
                            id="cat_type_process_id"
                            label="Tipo de trámite"
                            value={formData.catTypeProcessId}
                            onChange={(val) => handleChange('catTypeProcessId', val)}
                            onBlur={() => handleBlur('catTypeProcessId')}
                            options={buildSelectOptions(
                                formData.catTypeProcessId,
                                selectOptions.process1,
                                selectOptions.process
                            )}
                            error={touched.catTypeProcessId && errors.catTypeProcessId}
                            required={true}
                        />
                        
                        <SelectField
                            id="cat_client_id"
                            label="Posible Cliente"
                            value={formData.catClientId}
                            onChange={(val) => handleChange('catClientId', val)}
                            onBlur={() => handleBlur('catClientId')}
                            options={buildSelectOptions(
                                formData.catClientId,
                                selectOptions.client1,
                                selectOptions.client
                            )}
                        />
                    </div>
                    
                    {/* Fila 4: Recibo de pago y Costo */}
                    <div className="form-row-10-2">
                        <TextareaField
                            id="link_payment_receipt"
                            label="Recibo de pago"
                            value={formData.linkPaymentReceipt}
                            onChange={(val) => handleChange('linkPaymentReceipt', val)}
                            onBlur={() => handleBlur('linkPaymentReceipt')}
                            error={touched.linkPaymentReceipt && errors.linkPaymentReceipt}
                            required={true}
                            rows={5}
                        />
                        
                        <SelectField
                            id="consultation_cost_id"
                            label="Costo de la consulta"
                            value={formData.consultationCostId}
                            onChange={(val) => handleChange('consultationCostId', val)}
                            onBlur={() => handleBlur('consultationCostId')}
                            options={buildSelectOptions(
                                formData.consultationCostId,
                                selectOptions.cost1,
                                selectOptions.costs
                            )}
                            error={touched.consultationCostId && errors.consultationCostId}
                            required={true}
                        />
                    </div>
                    
                    {/* Fila de botones */}
                    <div className="btn-row">
                        <button
                            type="button"
                            className="btn btn-reset"
                            onClick={handleReset}
                            disabled={isSubmitting}
                        >
                            <i className="fas fa-undo-alt"></i>
                            RESET
                        </button>
                        
                        <button
                            type="button"
                            className="btn btn-primary"
                            onClick={handleSubmit}
                            disabled={isSubmitting}
                        >
                            {isSubmitting ? (
                                <>
                                    <span className="spinner"></span>
                                    GUARDANDO...
                                </>
                            ) : (
                                <>
                                    <i className="fas fa-save"></i>
                                    MODIFICAR
                                </>
                            )}
                        </button>
                        
                        <FormStatusBadge
                            touchedCount={touchedCount}
                            errorCount={errorCount}
                            totalFields={totalFields}
                        />
                    </div>
                </div>
            </div>
        );
    }

    // ============================================================
    // 
    // ============================================================
    const rootElement = document.getElementById('react-sales-edit-root');
    const root = ReactDOM.createRoot(rootElement);
    root.render(<SalesEditForm />);
</script>
@endsection