@extends('layouts.layout_0')


@section('styles')
<style>
    :root {
        --primary: #6366f1;
        --primary-hover: #4f46e5;
        --primary-light: rgba(99, 102, 241, 0.1);
        --danger: #ef4444;
        --danger-light: rgba(239, 68, 68, 0.08);
        --success: #10b981;
        --success-light: rgba(16, 185, 129, 0.08);
        --warning: #f59e0b;
        --warning-light: rgba(245, 158, 11, 0.08);
        --dark: #0f172a;
        --gray-50: #f8fafc;
        --gray-100: #f1f5f9;
        --gray-200: #e2e8f0;
        --gray-300: #cbd5e1;
        --gray-400: #94a3b8;
        --gray-500: #64748b;
        --gray-600: #475569;
        --gray-700: #334155;
        --gray-800: #1e293b;
        --gray-900: #0f172a;
        --white: #ffffff;
        --radius-sm: 6px;
        --radius: 10px;
        --radius-lg: 16px;
        --shadow-sm: 0 1px 3px rgba(0,0,0,0.06);
        --shadow: 0 4px 6px rgba(0,0,0,0.07);
        --shadow-md: 0 8px 16px rgba(0,0,0,0.08);
        --shadow-lg: 0 20px 40px rgba(0,0,0,0.12);
        --transition: 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Contenedor principal */
    .employee-form-wrapper {
        max-width: 900px;
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

    /* Header */
    .form-header {
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #312e81 100%);
        padding: 24px 32px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .form-header::before {
        content: '';
        position: absolute;
        top: -30%;
        left: -10%;
        width: 120%;
        height: 160%;
        background: radial-gradient(ellipse at center, 
            rgba(99, 102, 241, 0.2) 0%, 
            transparent 70%);
        animation: headerGlow 4s ease-in-out infinite;
    }

    @keyframes headerGlow {
        0%, 100% { opacity: 0.5; transform: scale(1); }
        50% { opacity: 1; transform: scale(1.05); }
    }

    .form-header h2 {
        color: white;
        margin: 0;
        font-size: 1.3rem;
        font-weight: 700;
        letter-spacing: 2px;
        position: relative;
        z-index: 1;
        text-transform: uppercase;
    }

    .form-header .header-icon {
        display: inline-block;
        margin-right: 10px;
        animation: iconBounce 2s ease-in-out infinite;
    }

    @keyframes iconBounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-4px); }
    }

    .form-header .header-subtitle {
        color: var(--gray-400);
        font-size: 0.8rem;
        letter-spacing: 3px;
        margin-top: 4px;
        position: relative;
        z-index: 1;
    }

    /* Cuerpo */
    .form-body {
        padding: 32px;
    }

    /* Secciones */
    .form-section {
        margin-bottom: 8px;
    }

    .section-divider {
        border: none;
        height: 1px;
        background: linear-gradient(90deg, 
            transparent, 
            var(--gray-200), 
            transparent);
        margin: 24px 0;
    }

    /* Grids */
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .form-row-3 {
        display: grid;
        grid-template-columns: 4fr 3fr 5fr;
        gap: 20px;
    }

    @media (max-width: 768px) {
        .form-row,
        .form-row-3 {
            grid-template-columns: 1fr;
        }
        
        .form-body {
            padding: 20px 16px;
        }
    }

    /* Campo de formulario */
    .form-field {
        margin-bottom: 22px;
    }

    .field-label {
        display: flex;
        align-items: center;
        gap: 6px;
        font-weight: 600;
        font-size: 0.85rem;
        color: var(--gray-700);
        margin-bottom: 7px;
        letter-spacing: 0.3px;
    }

    .field-label .required-dot {
        width: 8px;
        height: 8px;
        background: var(--danger);
        border-radius: 50%;
        display: inline-block;
        animation: pulseDot 2s ease-in-out infinite;
    }

    @keyframes pulseDot {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.5; transform: scale(1.3); }
    }

    .field-icon {
        color: var(--gray-400);
        font-size: 0.85rem;
        width: 16px;
        text-align: center;
    }

    /* Inputs, Selects, Textareas */
    .input-field,
    .select-field,
    .textarea-field {
        width: 100%;
        padding: 11px 14px;
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

    .input-field:hover,
    .select-field:hover,
    .textarea-field:hover {
        border-color: var(--gray-300);
    }

    .input-field:focus,
    .select-field:focus,
    .textarea-field:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 4px var(--primary-light);
        background: var(--gray-50);
    }

    .input-field.error,
    .select-field.error,
    .textarea-field.error {
        border-color: var(--danger);
        box-shadow: 0 0 0 4px var(--danger-light);
        animation: shake 0.45s ease-in-out;
    }

    .input-field.success,
    .select-field.success,
    .textarea-field.success {
        border-color: var(--success);
        box-shadow: 0 0 0 4px var(--success-light);
    }

    .textarea-field {
        resize: vertical;
        min-height: 80px;
    }

    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        15% { transform: translateX(-5px); }
        30% { transform: translateX(5px); }
        45% { transform: translateX(-4px); }
        60% { transform: translateX(4px); }
        75% { transform: translateX(-2px); }
        90% { transform: translateX(2px); }
    }

    /* Mensaje de error */
    .field-error {
        display: flex;
        align-items: center;
        gap: 7px;
        color: var(--danger);
        font-size: 0.78rem;
        margin-top: 7px;
        animation: errorSlideIn 0.3s ease-out;
        font-weight: 500;
    }

    .field-error i {
        font-size: 0.85rem;
        flex-shrink: 0;
    }

    @keyframes errorSlideIn {
        from {
            opacity: 0;
            transform: translateY(-8px);
            max-height: 0;
        }
        to {
            opacity: 1;
            transform: translateY(0);
            max-height: 40px;
        }
    }

    /* Contador de caracteres */
    .char-counter {
        text-align: right;
        font-size: 0.7rem;
        color: var(--gray-400);
        margin-top: 4px;
        transition: color 0.3s;
    }

    .char-counter.warning {
        color: var(--warning);
    }

    .char-counter.danger {
        color: var(--danger);
    }

    /* Alerta de errores general */
    .error-alert {
        background: var(--danger-light);
        border: 1px solid rgba(239, 68, 68, 0.25);
        border-left: 4px solid var(--danger);
        border-radius: var(--radius);
        padding: 14px 18px;
        margin-bottom: 24px;
        display: flex;
        gap: 12px;
        animation: errorSlideIn 0.4s ease-out;
    }

    .error-alert-icon {
        color: var(--danger);
        font-size: 1.3rem;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .error-alert-content h4 {
        margin: 0 0 6px 0;
        color: var(--danger);
        font-size: 0.9rem;
    }

    .error-alert-list {
        list-style: none;
        padding: 0;
        margin: 0;
        font-size: 0.83rem;
        color: #b91c1c;
    }

    .error-alert-list li {
        padding: 2px 0;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .error-alert-list li::before {
        content: '•';
        font-weight: bold;
        font-size: 1.2rem;
        color: var(--danger);
    }

    /* Botones */
    .btn-row {
        display: flex;
        gap: 14px;
        margin-top: 32px;
        padding-top: 24px;
        border-top: 1px solid var(--gray-200);
        align-items: center;
        flex-wrap: wrap;
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
        font-family: inherit;
    }

    .btn-save {
        background: linear-gradient(135deg, var(--primary), #818cf8);
        color: white;
        flex: 1;
        justify-content: center;
        min-width: 200px;
        position: relative;
        overflow: hidden;
    }

    .btn-save:hover:not(:disabled) {
        box-shadow: 0 8px 25px rgba(99, 102, 241, 0.35);
        transform: translateY(-2px);
    }

    .btn-save:active:not(:disabled) {
        transform: translateY(0);
        box-shadow: 0 4px 12px rgba(99, 102, 241, 0.25);
    }

    .btn-save:disabled {
        background: var(--gray-300);
        color: var(--gray-500);
        cursor: not-allowed;
        transform: none;
        box-shadow: none;
    }

    .btn-reset {
        background: var(--white);
        color: var(--gray-600);
        border: 2px solid var(--gray-200);
        min-width: 110px;
        justify-content: center;
    }

    .btn-reset:hover {
        background: var(--gray-50);
        border-color: var(--gray-300);
    }

    /* Spinner */
    .spinner {
        width: 20px;
        height: 20px;
        border: 2.5px solid rgba(255,255,255,0.3);
        border-top-color: white;
        border-radius: 50%;
        animation: spin 0.7s linear infinite;
        display: inline-block;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    /* Badge de estado */
    .form-status-badge {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 0.78rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        white-space: nowrap;
    }

    .form-status-badge.valid {
        background: var(--success-light);
        color: var(--success);
        border: 1px solid rgba(16, 185, 129, 0.3);
    }

    .form-status-badge.invalid {
        background: var(--danger-light);
        color: var(--danger);
        border: 1px solid rgba(239, 68, 68, 0.3);
    }

    .form-status-badge.pending {
        background: var(--warning-light);
        color: var(--warning);
        border: 1px solid rgba(245, 158, 11, 0.3);
    }

    /* Preview de email */
    .email-preview {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 12px;
        background: var(--gray-50);
        border-radius: var(--radius-sm);
        margin-top: 8px;
        font-size: 0.8rem;
        color: var(--gray-600);
        border: 1px dashed var(--gray-300);
    }

    .email-preview i {
        color: var(--primary);
    }
</style>
@endsection


@section('content')

<div class="employee-form-wrapper">

    <div id="react-employee-form-root"></div>
</div>

@endsection

@section('scripts')

<script type="text/babel">
    
    const LARAVEL_DATA = {
    
        csrfToken: {!! json_encode(csrf_token()) !!},
        
    
        formAction: "/employees",
        
    
        sessionData: {
            ipAddress: {!! json_encode($_SERVER['REMOTE_ADDR'] ?? '0.0.0.0') !!},
            enjoyer: {!! json_encode(session('enjoyer') ?? '') !!},
            enjoyerId: {!! json_encode(session('enjoyer_id') ?? '') !!},
            today: {!! json_encode(date("d-m-Y")) !!},
            day: {!! json_encode(date("d")) !!},
            month: {!! json_encode(date("m")) !!},
            year: {!! json_encode(date("Y")) !!},
        },
        
    
        typeEmployees: [
            @foreach ($typeemployees as $type)
                { value: "{{ $type->id }}", label: "{{ $type->description }}" },
            @endforeach
        ],
        
    
        sessionMessage: {!! json_encode(session('message')) !!},
    };

    const VALIDATION_RULES = {
        name: {
            required: true,
            requiredMessage: 'El Nombre es obligatorio.',
            minLength: 2,
            minLengthMessage: 'El Nombre debe tener al menos 2 caracteres.',
            maxLength: 50,
            maxLengthMessage: 'El Nombre no debe exceder 50 caracteres.',
            pattern: /^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/,
            patternMessage: 'El Nombre solo debe contener letras y espacios.',
            forbiddenPattern: /[\d\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/,
            forbiddenMessage: 'El Nombre contiene caracteres no permitidos.',
        },
        last_name: {
            required: true,
            requiredMessage: 'El Apellido Paterno es obligatorio.',
            minLength: 2,
            minLengthMessage: 'El Apellido Paterno debe tener al menos 2 caracteres.',
            maxLength: 50,
            maxLengthMessage: 'El Apellido Paterno no debe exceder 50 caracteres.',
            pattern: /^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/,
            patternMessage: 'El Apellido Paterno solo debe contener letras y espacios.',
            forbiddenPattern: /[\d\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/,
            forbiddenMessage: 'El Apellido Paterno contiene caracteres no permitidos.',
        },
        second_last_name: {
            required: false,
            maxLength: 50,
            maxLengthMessage: 'El Apellido Materno no debe exceder 50 caracteres.',
            pattern: /^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]*$/,
            patternMessage: 'El Apellido Materno solo debe contener letras y espacios.',
            forbiddenPattern: /[\d\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/,
            forbiddenMessage: 'El Apellido Materno contiene caracteres no permitidos.',
        },
        email: {
            required: true,
            requiredMessage: 'El Email es obligatorio.',
            pattern: /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/,
            patternMessage: 'El formato del Email no es válido (ej: usuario@dominio.com).',
            maxLength: 100,
            maxLengthMessage: 'El Email no debe exceder 100 caracteres.',
        },
        cat_type_employees_id: {
            required: true,
            requiredMessage: 'Seleccione un Tipo de empleado válido.',
            notZero: true,
            notZeroMessage: 'Seleccione una opción válida para Tipo de empleado.',
        },
        active: {
            required: true,
            requiredMessage: 'El Status es obligatorio.',
        },
        observations: {
            required: false,
            maxLength: 500,
            maxLengthMessage: 'Las Observaciones no deben exceder 500 caracteres.',
        },
    };

    
    function validateField(fieldName, value) {
        const rules = VALIDATION_RULES[fieldName];
        if (!rules) return null;

        const trimmedValue = typeof value === 'string' ? value.trim() : value;

    
        if (rules.required && !trimmedValue) {
            return rules.requiredMessage || 'Este campo es obligatorio.';
        }

    
        if (rules.notZero && (trimmedValue === '0' || trimmedValue === 0)) {
            return rules.notZeroMessage || 'Seleccione una opción válida.';
        }

    
        if (!trimmedValue && !rules.required) {
            return null;
        }

    
        if (rules.minLength && trimmedValue.length < rules.minLength) {
            return rules.minLengthMessage;
        }

    
        if (rules.maxLength && trimmedValue.length > rules.maxLength) {
            return rules.maxLengthMessage;
        }

    
        if (rules.forbiddenPattern && rules.forbiddenPattern.test(trimmedValue)) {
            return rules.forbiddenMessage;
        }

    
        if (rules.pattern && !rules.pattern.test(trimmedValue)) {
            return rules.patternMessage;
        }

        return null; // Sin errores
    }

    
    function ErrorAlert({ errors }) {
        if (!errors || errors.length === 0) return null;
        
        return (
            <div className="error-alert">
                <div className="error-alert-icon">
                    <i className="fas fa-exclamation-triangle"></i>
                </div>
                <div className="error-alert-content">
                    <h4>Corrige los siguientes errores ({errors.length}):</h4>
                    <ul className="error-alert-list">
                        {errors.map((err, index) => (
                            <li key={index}>{err}</li>
                        ))}
                    </ul>
                </div>
            </div>
        );
    }

    
    function FieldError({ error }) {
        if (!error) return null;
        
        return (
            <div className="field-error">
                <i className="fas fa-circle-exclamation"></i>
                <span>{error}</span>
            </div>
        );
    }

    
    function InputField({ 
        id, label, icon, value, onChange, onBlur, error, 
        placeholder, maxLength, required, type = 'text',
        disabled, autoFocus 
    }) {
        const inputClass = `input-field${error ? ' error' : ''}${value && !error ? ' success' : ''}`;
        const showCounter = maxLength && value;
        const counterClass = `char-counter${showCounter && value.length > maxLength * 0.85 ? ' warning' : ''}${showCounter && value.length >= maxLength ? ' danger' : ''}`;
        
        return (
            <div className="form-field">
                <label className="field-label" htmlFor={id}>
                    {icon && <span className="field-icon"><i className={`fas ${icon}`}></i></span>}
                    {label}
                    {required && <span className="required-dot" title="Requerido"></span>}
                </label>
                <input
                    id={id}
                    type={type}
                    className={inputClass}
                    value={value}
                    onChange={(e) => onChange(e.target.value)}
                    onBlur={onBlur}
                    placeholder={placeholder || ''}
                    maxLength={maxLength || undefined}
                    disabled={disabled}
                    autoFocus={autoFocus || false}
                />
                {showCounter && (
                    <div className={counterClass}>
                        {value.length}/{maxLength} caracteres
                    </div>
                )}
                <FieldError error={error} />
            </div>
        );
    }

    
    function SelectField({ 
        id, label, icon, value, onChange, onBlur, error, 
        options, required, disabled, placeholderOption 
    }) {
        const selectClass = `select-field${error ? ' error' : ''}${value && value !== '0' && !error ? ' success' : ''}`;
        
        return (
            <div className="form-field">
                <label className="field-label" htmlFor={id}>
                    {icon && <span className="field-icon"><i className={`fas ${icon}`}></i></span>}
                    {label}
                    {required && <span className="required-dot" title="Requerido"></span>}
                </label>
                <select
                    id={id}
                    className={selectClass}
                    value={value}
                    onChange={(e) => onChange(e.target.value)}
                    onBlur={onBlur}
                    disabled={disabled}
                >
                    {placeholderOption && (
                        <option value="0">{placeholderOption}</option>
                    )}
                    {options.map(opt => (
                        <option key={opt.value} value={opt.value}>{opt.label}</option>
                    ))}
                </select>
                <FieldError error={error} />
            </div>
        );
    }

    
    function TextareaField({ 
        id, label, icon, value, onChange, onBlur, error, 
        placeholder, rows, maxLength, required 
    }) {
        const textareaClass = `textarea-field${error ? ' error' : ''}${value && !error ? ' success' : ''}`;
        const showCounter = maxLength && value;
        const counterClass = `char-counter${showCounter && value.length > maxLength * 0.85 ? ' warning' : ''}${showCounter && value.length >= maxLength ? ' danger' : ''}`;
        
        return (
            <div className="form-field">
                <label className="field-label" htmlFor={id}>
                    {icon && <span className="field-icon"><i className={`fas ${icon}`}></i></span>}
                    {label}
                    {required && <span className="required-dot" title="Requerido"></span>}
                </label>
                <textarea
                    id={id}
                    className={textareaClass}
                    value={value}
                    onChange={(e) => onChange(e.target.value)}
                    onBlur={onBlur}
                    placeholder={placeholder || ''}
                    rows={rows || 3}
                    maxLength={maxLength || undefined}
                />
                {showCounter && (
                    <div className={counterClass}>
                        {value.length}/{maxLength} caracteres
                    </div>
                )}
                <FieldError error={error} />
            </div>
        );
    }

    // ============================================================
    // 
    // ============================================================
    function EmailPreview({ email }) {
        if (!email || !email.trim()) return null;
        
        const isValid = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/.test(email.trim());
        
        return (
            <div className="email-preview">
                <i className={`fas ${isValid ? 'fa-check-circle' : 'fa-question-circle'}`} 
                   style={{ color: isValid ? 'var(--success)' : 'var(--warning)' }}></i>
                <span>
                    {isValid 
                        ? `Se enviará a: ${email.trim()}`
                        : 'El formato del email parece incorrecto'
                    }
                </span>
            </div>
        );
    }

    // ============================================================
    // 
    // ============================================================
    function SessionInfo({ data }) {
        if (!data) return null;
        
        return (
            <div style={{ 
                marginTop: '16px', 
                padding: '12px 16px', 
                background: 'var(--gray-50)', 
                borderRadius: 'var(--radius-sm)',
                fontSize: '0.75rem',
                color: 'var(--gray-500)',
                display: 'flex',
                gap: '20px',
                flexWrap: 'wrap',
                border: '1px solid var(--gray-200)'
            }}>
                <span><i className="fas fa-globe"></i> IP: {data.ipAddress}</span>
                <span><i className="fas fa-user"></i> Sesión: {data.enjoyer || 'N/A'}</span>
                <span><i className="fas fa-calendar"></i> Fecha: {data.today}</span>
            </div>
        );
    }

    // ============================================================
    // EmployeeForm
    // ============================================================
    function EmployeeForm() {
        // 
        const [formData, setFormData] = React.useState({
            name: '',
            last_name: '',
            second_last_name: '',
            email: '',
            cat_type_employees_id: '0',
            active: '1',
            observations: '',
        });

        // 
        const [errors, setErrors] = React.useState({});
        
        // 
        const [touched, setTouched] = React.useState({});
        
        // 
        const [isSubmitting, setIsSubmitting] = React.useState(false);
        
        // 
        const [sessionMsg, setSessionMsg] = React.useState(LARAVEL_DATA.sessionMessage);
        
        // 
        const [formKey, setFormKey] = React.useState(0);

        // 
        const handleChange = React.useCallback((fieldName, value) => {
            setFormData(prev => ({ ...prev, [fieldName]: value }));
            
            // 
            if (touched[fieldName]) {
                const error = validateField(fieldName, value);
                setErrors(prev => ({ ...prev, [fieldName]: error }));
            }
        }, [touched]);

        // 
        const handleBlur = React.useCallback((fieldName) => {
            setTouched(prev => ({ ...prev, [fieldName]: true }));
            const error = validateField(fieldName, formData[fieldName]);
            setErrors(prev => ({ ...prev, [fieldName]: error }));
        }, [formData]);

        // 
        const handleReset = () => {
            const initialState = {
                name: '',
                last_name: '',
                second_last_name: '',
                email: '',
                cat_type_employees_id: '0',
                active: '1',
                observations: '',
            };
            setFormData(initialState);
            setErrors({});
            setTouched({});
            setSessionMsg(null);
            setFormKey(prev => prev + 1);
        };

        // 
        const handleSubmit = () => {
            // 
            const allTouched = {};
            const newErrors = {};
            
            Object.keys(formData).forEach(fieldName => {
                allTouched[fieldName] = true;
                const error = validateField(fieldName, formData[fieldName]);
                if (error) {
                    newErrors[fieldName] = error;
                }
            });
            
            setTouched(allTouched);
            setErrors(newErrors);
            
            // 
            if (Object.keys(newErrors).length > 0) {
                setTimeout(() => {
                    const firstError = document.querySelector('.field-error');
                    if (firstError) {
                        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                }, 100);
                return;
            }
            
            // 
            setIsSubmitting(true);
            
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = LARAVEL_DATA.formAction;
            form.style.display = 'none';
            
            // 
            const fieldMap = {
                name: 'name',
                last_name: 'last_name',
                second_last_name: 'second_last_name',
                email: 'email',
                cat_type_employees_id: 'cat_type_employees_id',
                active: 'active',
                observations: 'observations',
            };
            
            // CSRF Token
            const csrf = document.createElement('input');
            csrf.type = 'hidden';
            csrf.name = '_token';
            csrf.value = LARAVEL_DATA.csrfToken;
            form.appendChild(csrf);
            
            // 
            Object.entries(fieldMap).forEach(([key, name]) => {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = name;
                input.value = formData[key];
                form.appendChild(input);
            });
            
            document.body.appendChild(form);
            form.submit();
        };

        // 
        React.useEffect(() => {
            const handleKeyDown = (e) => {
                if (e.key === 'Enter' && e.target.tagName !== 'TEXTAREA') {
                    e.preventDefault();
                    handleSubmit();
                }
            };
            
            document.addEventListener('keydown', handleKeyDown);
            return () => document.removeEventListener('keydown', handleKeyDown);
        }, [formData, touched]);

        // 
        const errorList = Object.entries(errors)
            .filter(([_, err]) => err)
            .map(([field, err]) => err);

        // 
        const touchedCount = Object.keys(touched).filter(k => touched[k]).length;
        const errorCount = Object.values(errors).filter(e => e).length;
        const requiredFields = ['name', 'last_name', 'email', 'cat_type_employees_id'];

        const allRequiredFilled = requiredFields.every(f => formData[f] && formData[f] !== '0');
        const hasNoErrors = errorCount === 0;
        const someTouched = touchedCount > 0;

        let badgeStatus = null;
        if (someTouched && hasNoErrors && allRequiredFilled) {
            badgeStatus = 'valid';
        } else if (someTouched && errorCount > 0) {
            badgeStatus = 'invalid';
        } else if (someTouched) {
            badgeStatus = 'pending';
        }

        const badgeConfig = {
            valid: { icon: 'fa-circle-check', text: 'Formulario completo' },
            invalid: { icon: 'fa-circle-exclamation', text: `${errorCount} error(es)` },
            pending: { icon: 'fa-clock', text: 'Campos pendientes' },
        };

        return (
            <div className="form-card" key={formKey}>
                {/* Header */}
                <div className="form-header">
                    <div className="header-icon">
                        <i className="fas fa-user-plus" style={{ fontSize: '1.5rem' }}></i>
                    </div>
                    <h2>Alta de Empleados</h2>
                    <div className="header-subtitle">REGISTRO DE NUEVO PERSONAL</div>
                </div>
                
                {/*  */}
                <div className="form-body">
                    {/* Mensaje de sesión (si existe) */}
                    {sessionMsg && (
                        <div className="error-alert" style={{ marginBottom: '20px' }}>
                            <div className="error-alert-icon">
                                <i className="fas fa-info-circle"></i>
                            </div>
                            <div className="error-alert-content">
                                <h4>Mensaje del sistema</h4>
                                <p style={{ margin: 0, fontSize: '0.85rem' }}>{sessionMsg}</p>
                            </div>
                        </div>
                    )}
                    
                    {/* Alerta de errores */}
                    <ErrorAlert errors={errorList} />
                    
                    {/* Sección: Datos personales */}
                    <div className="form-section">
                        <div className="form-row">
                            <InputField
                                id="name"
                                label="Nombre"
                                icon="fa-user"
                                value={formData.name}
                                onChange={(val) => handleChange('name', val)}
                                onBlur={() => handleBlur('name')}
                                error={touched.name && errors.name}
                                placeholder="Ej: Juan Carlos"
                                maxLength={50}
                                required={true}
                                autoFocus={true}
                            />
                            
                            <InputField
                                id="last_name"
                                label="Apellido Paterno"
                                icon="fa-user-tag"
                                value={formData.last_name}
                                onChange={(val) => handleChange('last_name', val)}
                                onBlur={() => handleBlur('last_name')}
                                error={touched.last_name && errors.last_name}
                                placeholder="Ej: García"
                                maxLength={50}
                                required={true}
                            />
                        </div>
                        
                        <div className="form-row">
                            <InputField
                                id="second_last_name"
                                label="Apellido Materno"
                                icon="fa-user-tag"
                                value={formData.second_last_name}
                                onChange={(val) => handleChange('second_last_name', val)}
                                onBlur={() => handleBlur('second_last_name')}
                                error={touched.second_last_name && errors.second_last_name}
                                placeholder="Opcional"
                                maxLength={50}
                            />
                            
                            <div>
                                <InputField
                                    id="email"
                                    label="Email"
                                    icon="fa-envelope"
                                    type="email"
                                    value={formData.email}
                                    onChange={(val) => handleChange('email', val)}
                                    onBlur={() => handleBlur('email')}
                                    error={touched.email && errors.email}
                                    placeholder="ejemplo@dominio.com"
                                    maxLength={100}
                                    required={true}
                                />
                                <EmailPreview email={formData.email} />
                            </div>
                        </div>
                    </div>
                    
                    <hr className="section-divider" />
                    
                    {/* Sección: Datos laborales */}
                    <div className="form-section">
                        <div className="form-row-3">
                            <SelectField
                                id="cat_type_employees_id"
                                label="Tipo de empleado"
                                icon="fa-briefcase"
                                value={formData.cat_type_employees_id}
                                onChange={(val) => handleChange('cat_type_employees_id', val)}
                                onBlur={() => handleBlur('cat_type_employees_id')}
                                error={touched.cat_type_employees_id && errors.cat_type_employees_id}
                                options={LARAVEL_DATA.typeEmployees}
                                placeholderOption="Seleccione una opción"
                                required={true}
                            />
                            
                            <SelectField
                                id="active"
                                label="Status"
                                icon="fa-toggle-on"
                                value={formData.active}
                                onChange={(val) => handleChange('active', val)}
                                onBlur={() => handleBlur('active')}
                                error={touched.active && errors.active}
                                options={[
                                    { value: '1', label: '✅ Activo' },
                                    { value: '0', label: '❌ No activo' },
                                ]}
                                required={true}
                            />
                            
                            <TextareaField
                                id="observations"
                                label="Observaciones"
                                icon="fa-note-sticky"
                                value={formData.observations}
                                onChange={(val) => handleChange('observations', val)}
                                onBlur={() => handleBlur('observations')}
                                error={touched.observations && errors.observations}
                                placeholder="Notas adicionales sobre el empleado..."
                                rows={3}
                                maxLength={500}
                            />
                        </div>
                    </div>
                    
                    {/* Botones */}
                    <div className="btn-row">
                        <button
                            type="button"
                            className="btn btn-reset"
                            onClick={handleReset}
                            disabled={isSubmitting}
                        >
                            <i className="fas fa-arrow-rotate-left"></i>
                            RESET
                        </button>
                        
                        <button
                            type="button"
                            className="btn btn-save"
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
                                    <i className="fas fa-floppy-disk"></i>
                                    GUARDAR
                                </>
                            )}
                        </button>
                        
                        {badgeStatus && (
                            <span className={`form-status-badge ${badgeStatus}`}>
                                <i className={`fas ${badgeConfig[badgeStatus].icon}`}></i>
                                {badgeConfig[badgeStatus].text}
                            </span>
                        )}
                    </div>
                    
                    {/*  */}
                    <SessionInfo data={LARAVEL_DATA.sessionData} />
                </div>
            </div>
        );
    }

    // ============================================================
    
    // ============================================================
    const rootElement = document.getElementById('react-employee-form-root');
    if (rootElement) {
        const root = ReactDOM.createRoot(rootElement);
        root.render(<EmployeeForm />);
    }
</script>
@endsection