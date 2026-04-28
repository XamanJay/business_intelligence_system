@extends('layouts.login')

@section('styles')
<style>
    :root {
        --neon-blue: #00d4ff;
        --neon-purple: #7b2ff7;
        --neon-pink: #ff2d95;
        --dark-bg: #0a0a1a;
        --card-bg: rgba(15, 15, 35, 0.8);
        --glass-border: rgba(255, 255, 255, 0.1);
        --text-primary: #e0e0ff;
        --text-secondary: #a0a0c0;
        --error-red: #ff3860;
        --success-green: #00e676;
        --warning-amber: #ffaa00;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: var(--dark-bg);
        background-image: 
            radial-gradient(ellipse at 20% 50%, rgba(123, 47, 247, 0.15) 0%, transparent 50%),
            radial-gradient(ellipse at 80% 20%, rgba(0, 212, 255, 0.1) 0%, transparent 50%),
            radial-gradient(ellipse at 50% 80%, rgba(255, 45, 149, 0.08) 0%, transparent 50%);
        min-height: 100vh;
        font-family: 'Exo 2', sans-serif;
        overflow-x: hidden;
    }

    /* Animación de estrellas de fondo */
    .stars-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 0;
    }

    .star {
        position: absolute;
        background: white;
        border-radius: 50%;
        animation: twinkle var(--duration) ease-in-out infinite;
        animation-delay: var(--delay);
        opacity: 0;
    }

    @keyframes twinkle {
        0%, 100% { opacity: 0; transform: scale(0.5); }
        50% { opacity: 0.8; transform: scale(1.2); }
    }

    /* Contenedor principal con glassmorphism */
    .login-container {
        position: relative;
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
    }

    .login-card {
        background: var(--card-bg);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid var(--glass-border);
        border-radius: 24px;
        padding: 40px;
        max-width: 520px;
        width: 100%;
        box-shadow: 
            0 25px 50px rgba(0, 0, 0, 0.4),
            inset 0 1px 0 rgba(255, 255, 255, 0.05);
        animation: cardEntrance 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        position: relative;
        overflow: hidden;
    }

    .login-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: conic-gradient(
            from 0deg,
            transparent,
            rgba(0, 212, 255, 0.03),
            transparent,
            rgba(123, 47, 247, 0.03),
            transparent,
            rgba(255, 45, 149, 0.03),
            transparent
        );
        animation: cardGlow 8s linear infinite;
        pointer-events: none;
    }

    @keyframes cardGlow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    @keyframes cardEntrance {
        from {
            opacity: 0;
            transform: translateY(40px) scale(0.95);
            filter: blur(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
            filter: blur(0);
        }
    }

    /* Título futurista */
    .login-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.8rem;
        font-weight: 900;
        text-align: center;
        background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple), var(--neon-pink));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 8px;
        letter-spacing: 2px;
        animation: titleShimmer 3s ease-in-out infinite;
        position: relative;
        z-index: 1;
    }

    @keyframes titleShimmer {
        0%, 100% { filter: brightness(1); }
        50% { filter: brightness(1.3); }
    }

    .login-subtitle {
        text-align: center;
        color: var(--text-secondary);
        font-size: 0.9rem;
        margin-bottom: 30px;
        letter-spacing: 4px;
        text-transform: uppercase;
        position: relative;
        z-index: 1;
    }

    /* Separador neón */
    .neon-divider {
        height: 2px;
        background: linear-gradient(90deg, 
            transparent, 
            var(--neon-blue), 
            var(--neon-purple), 
            var(--neon-pink), 
            transparent);
        margin: 20px 0;
        border: none;
        animation: dividerPulse 2s ease-in-out infinite;
        position: relative;
        z-index: 1;
    }

    @keyframes dividerPulse {
        0%, 100% { opacity: 0.5; }
        50% { opacity: 1; }
    }

    /* Grupo de inputs */
    .input-group-futuristic {
        margin-bottom: 24px;
        position: relative;
        z-index: 1;
    }

    .input-label {
        display: block;
        color: var(--text-secondary);
        font-weight: 600;
        font-size: 0.85rem;
        margin-bottom: 8px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: color 0.3s ease;
    }

    .input-label.focused {
        color: var(--neon-blue);
    }

    .input-label.error {
        color: var(--error-red);
    }

    .input-wrapper {
        position: relative;
    }

    .futuristic-input {
        width: 100%;
        padding: 14px 16px 14px 44px;
        background: rgba(20, 20, 40, 0.6);
        border: 2px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        color: var(--text-primary);
        font-size: 1rem;
        font-family: 'Exo 2', sans-serif;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        outline: none;
        letter-spacing: 1px;
    }

    .futuristic-input:focus {
        border-color: var(--neon-blue);
        box-shadow: 
            0 0 20px rgba(0, 212, 255, 0.15),
            inset 0 0 20px rgba(0, 212, 255, 0.05);
        background: rgba(20, 20, 50, 0.8);
    }

    .futuristic-input.error {
        border-color: var(--error-red);
        box-shadow: 0 0 20px rgba(255, 56, 96, 0.2);
        animation: shake 0.5s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
    }

    .futuristic-input.success {
        border-color: var(--success-green);
        box-shadow: 0 0 20px rgba(0, 230, 118, 0.15);
    }

    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        10%, 90% { transform: translateX(-2px); }
        20%, 80% { transform: translateX(4px); }
        30%, 50%, 70% { transform: translateX(-6px); }
        40%, 60% { transform: translateX(6px); }
    }

    .input-icon {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-secondary);
        font-size: 1.1rem;
        transition: color 0.3s ease;
        pointer-events: none;
        z-index: 2;
    }

    .input-icon.focused {
        color: var(--neon-blue);
    }

    .input-icon.error {
        color: var(--error-red);
    }

    /* Botón de toggle password */
    .toggle-password {
        position: absolute;
        right: 14px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: var(--text-secondary);
        cursor: pointer;
        font-size: 1.1rem;
        padding: 4px;
        transition: color 0.3s ease;
        z-index: 2;
    }

    .toggle-password:hover {
        color: var(--neon-blue);
    }

    /* Mensaje de error animado */
    .error-message {
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--error-red);
        font-size: 0.8rem;
        margin-top: 8px;
        letter-spacing: 0.5px;
        animation: errorSlideIn 0.3s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        overflow: hidden;
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
            max-height: 30px;
        }
    }

    .error-icon {
        animation: errorBounce 0.6s ease-in-out;
    }

    @keyframes errorBounce {
        0%, 100% { transform: scale(1); }
        30% { transform: scale(1.3); }
        60% { transform: scale(0.9); }
    }

    /* Botón futurista */
    .futuristic-btn {
        width: 100%;
        padding: 16px;
        background: linear-gradient(135deg, var(--neon-purple), var(--neon-blue));
        border: none;
        border-radius: 12px;
        color: white;
        font-size: 1.1rem;
        font-weight: 700;
        font-family: 'Orbitron', sans-serif;
        letter-spacing: 3px;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        z-index: 1;
        text-transform: uppercase;
    }

    .futuristic-btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 
            0 15px 40px rgba(123, 47, 247, 0.4),
            0 0 60px rgba(0, 212, 255, 0.2);
        background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple));
    }

    .futuristic-btn:active:not(:disabled) {
        transform: translateY(0);
        box-shadow: 0 5px 20px rgba(123, 47, 247, 0.3);
    }

    .futuristic-btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        background: linear-gradient(135deg, #555, #333);
    }

    /* Ripple effect */
    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: scale(0);
        animation: rippleEffect 0.6s linear;
        pointer-events: none;
    }

    @keyframes rippleEffect {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }

    /* Spinner de carga */
    .spinner-container {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .spinner {
        width: 20px;
        height: 20px;
        border: 3px solid rgba(255, 255, 255, 0.3);
        border-top-color: white;
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    /* Badge de estado */
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-top: 8px;
        transition: all 0.3s ease;
    }

    .status-badge.secure {
        background: rgba(0, 230, 118, 0.15);
        color: var(--success-green);
        border: 1px solid rgba(0, 230, 118, 0.3);
    }

    .status-badge.insecure {
        background: rgba(255, 170, 0, 0.15);
        color: var(--warning-amber);
        border: 1px solid rgba(255, 170, 0, 0.3);
    }

    /* Toast de éxito */
    .success-toast {
        position: fixed;
        top: 20px;
        right: 20px;
        background: rgba(0, 230, 118, 0.15);
        border: 1px solid rgba(0, 230, 118, 0.3);
        backdrop-filter: blur(10px);
        color: var(--success-green);
        padding: 16px 24px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        gap: 10px;
        z-index: 1000;
        animation: toastIn 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards,
                   toastOut 0.5s cubic-bezier(0.16, 1, 0.3, 1) 2.5s forwards;
        box-shadow: 0 15px 40px rgba(0, 230, 118, 0.2);
    }

    @keyframes toastIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }

    @keyframes toastOut {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100%); opacity: 0; }
    }

    /* Responsive */
    @media (max-width: 600px) {
        .login-card {
            padding: 24px;
            border-radius: 16px;
        }
        .login-title {
            font-size: 1.3rem;
        }
    }
</style>
@endsection

@section('content1')

<!-- Contenedor de estrellas (fondo animado) -->
<div class="stars-container" id="stars-container"></div>

<!-- Contenedor principal de React -->
<div class="login-container">
    <div id="react-login-root"></div>
</div>

<!-- Toast container -->
<div id="toast-container"></div>

@endsection

@section('scripts')
<script type="text/babel">
    // ============================================================
    // 
    // ============================================================
    function createStars() {
        const container = document.getElementById('stars-container');
        const starCount = 80;
        let starsHTML = '';
        
        for (let i = 0; i < starCount; i++) {
            const size = Math.random() * 3 + 1;
            const x = Math.random() * 100;
            const y = Math.random() * 100;
            const duration = Math.random() * 3 + 2;
            const delay = Math.random() * 3;
            
            starsHTML += `
                <div class="star" style="
                    left: ${x}%;
                    top: ${y}%;
                    width: ${size}px;
                    height: ${size}px;
                    --duration: ${duration}s;
                    --delay: ${delay}s;
                "></div>
            `;
        }
        container.innerHTML = starsHTML;
    }
    createStars();

    // ============================================================
    // 
    // ============================================================
    function Toast({ message, show }) {
        if (!show) return null;
        
        return (
            <div className="success-toast">
                <i className="fas fa-check-circle" style={{ fontSize: '1.5rem' }}></i>
                <div>
                    <strong>{message}</strong>
                </div>
            </div>
        );
    }

    // ============================================================
    // 
    // ============================================================
    function FuturisticInput({ 
        id, 
        label, 
        type = 'text', 
        icon, 
        value, 
        onChange, 
        error, 
        isFocused, 
        onFocus, 
        onBlur,
        showPasswordToggle = false,
        placeholder = ''
    }) {
        const [showPassword, setShowPassword] = React.useState(false);
        const inputRef = React.useRef(null);
        
        const actualType = showPasswordToggle && showPassword ? 'text' : type;
        
        const wrapperStyle = {
            position: 'relative',
            zIndex: 1
        };
        
        const inputClasses = `
            futuristic-input 
            ${error ? 'error' : ''} 
            ${value && !error ? 'success' : ''}
        `.trim();
        
        const labelClasses = `
            input-label 
            ${isFocused ? 'focused' : ''} 
            ${error ? 'error' : ''}
        `.trim();
        
        const iconClasses = `
            input-icon 
            ${isFocused ? 'focused' : ''} 
            ${error ? 'error' : ''}
        `.trim();

        return (
            <div className="input-group-futuristic">
                <label className={labelClasses} htmlFor={id}>
                    {label}
                </label>
                <div className="input-wrapper">
                    <i className={`fas ${icon} ${iconClasses}`}></i>
                    <input
                        ref={inputRef}
                        id={id}
                        type={actualType}
                        className={inputClasses}
                        value={value}
                        onChange={onChange}
                        onFocus={onFocus}
                        onBlur={onBlur}
                        placeholder={placeholder}
                        autoComplete={type === 'password' ? 'current-password' : 'username'}
                    />
                    {showPasswordToggle && value.length > 0 && (
                        <button
                            type="button"
                            className="toggle-password"
                            onClick={() => setShowPassword(!showPassword)}
                            tabIndex="-1"
                        >
                            <i className={`fas ${showPassword ? 'fa-eye-slash' : 'fa-eye'}`}></i>
                        </button>
                    )}
                </div>
                {error && (
                    <div className="error-message">
                        <i className="fas fa-exclamation-circle error-icon"></i>
                        <span>{error}</span>
                    </div>
                )}
            </div>
        );
    }

    // ============================================================
    // 
    // ============================================================
    function PasswordStrength({ password }) {
        if (!password) return null;
        
        const getStrength = (pwd) => {
            let score = 0;
            if (pwd.length >= 6) score++;
            if (pwd.length >= 10) score++;
            if (/[A-Z]/.test(pwd)) score++;
            if (/[0-9]/.test(pwd)) score++;
            if (/[!@#$%^&*(),.?":{}|<>]/.test(pwd)) score++;
            return score;
        };
        
        const strength = getStrength(password);
        
        const levels = [
            { label: 'Muy débil', color: '#ff3860', width: '15%' },
            { label: 'Débil', color: '#ff6b6b', width: '30%' },
            { label: 'Moderada', color: '#ffaa00', width: '50%' },
            { label: 'Fuerte', color: '#4ecdc4', width: '70%' },
            { label: 'Muy fuerte', color: '#00e676', width: '100%' }
        ];
        
        const currentLevel = levels[strength] || levels[0];
        
        return (
            <div style={{ marginTop: '12px', position: 'relative', zIndex: 1 }}>
                <div style={{
                    display: 'flex',
                    justifyContent: 'space-between',
                    marginBottom: '4px',
                    fontSize: '0.75rem'
                }}>
                    <span style={{ color: '#a0a0c0' }}>Fortaleza:</span>
                    <span style={{ color: currentLevel.color, fontWeight: 600 }}>
                        {currentLevel.label}
                    </span>
                </div>
                <div style={{
                    height: '4px',
                    background: 'rgba(255,255,255,0.1)',
                    borderRadius: '2px',
                    overflow: 'hidden'
                }}>
                    <div style={{
                        width: currentLevel.width,
                        height: '100%',
                        background: currentLevel.color,
                        borderRadius: '2px',
                        transition: 'width 0.5s ease, background 0.5s ease'
                    }}></div>
                </div>
            </div>
        );
    }

    // ============================================================
    // 
    // ============================================================
    function LoginForm() {
        // Estados
        const [username, setUsername] = React.useState('');
        const [password, setPassword] = React.useState('');
        const [focusedField, setFocusedField] = React.useState(null);
        const [errors, setErrors] = React.useState({});
        const [isLoading, setIsLoading] = React.useState(false);
        const [touched, setTouched] = React.useState({});
        const [showToast, setShowToast] = React.useState(false);
        const [rippleStyle, setRippleStyle] = React.useState(null);
        
        // Referencia al formulario
        const formRef = React.useRef(null);

        // Validación en tiempo real
        const validateField = React.useCallback((fieldName, value) => {
            const newErrors = { ...errors };
            
            switch(fieldName) {
                case 'username':
                    if (!value.trim()) {
                        newErrors.username = touched.username ? 'El usuario es requerido' : '';
                    } else if (value.trim().length < 3) {
                        newErrors.username = 'Mínimo 3 caracteres';
                    } else if (/[\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/.test(value)) {
                        newErrors.username = 'Contiene caracteres no permitidos';
                    } else {
                        delete newErrors.username;
                    }
                    break;
                    
                case 'password':
                    if (!value) {
                        newErrors.password = touched.password ? 'La contraseña es requerida' : '';
                    } else if (value.length < 4) {
                        newErrors.password = 'Mínimo 4 caracteres';
                    } else if (/[\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/.test(value)) {
                        newErrors.password = 'Contiene caracteres no permitidos';
                    } else {
                        delete newErrors.password;
                    }
                    break;
            }
            
            setErrors(newErrors);
        }, [errors, touched]);

        // Handlers
        const handleUsernameChange = (e) => {
            const value = e.target.value;
            setUsername(value);
            if (touched.username) {
                validateField('username', value);
            }
        };

        const handlePasswordChange = (e) => {
            const value = e.target.value;
            setPassword(value);
            if (touched.password) {
                validateField('password', value);
            }
        };

        const handleFocus = (field) => {
            setFocusedField(field);
        };

        const handleBlur = (field) => {
            setFocusedField(null);
            setTouched({ ...touched, [field]: true });
            const value = field === 'username' ? username : password;
            validateField(field, value);
        };

        // Efecto ripple del botón
        const createRipple = (e) => {
            const button = e.currentTarget;
            const rect = button.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            setRippleStyle({
                width: `${size}px`,
                height: `${size}px`,
                left: `${x}px`,
                top: `${y}px`
            });
            
            setTimeout(() => setRippleStyle(null), 600);
        };

        // Validación completa al enviar
        const handleSubmit = (e) => {
            if (e) {
                createRipple(e);
            }
            
            // Marcar todos como tocados
            setTouched({ username: true, password: true });
            
            // Validar todo
            const newErrors = {};
            
            if (!username.trim()) {
                newErrors.username = 'El usuario es requerido';
            } else if (username.trim().length < 3) {
                newErrors.username = 'Mínimo 3 caracteres';
            } else if (/[\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/.test(username)) {
                newErrors.username = 'Contiene caracteres no permitidos';
            }
            
            if (!password) {
                newErrors.password = 'La contraseña es requerida';
            } else if (password.length < 4) {
                newErrors.password = 'Mínimo 4 caracteres';
            } else if (/[\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/.test(password)) {
                newErrors.password = 'Contiene caracteres no permitidos';
            }
            
            setErrors(newErrors);
            
            // Si no hay errores, enviar
            if (Object.keys(newErrors).length === 0) {
                setIsLoading(true);
                
                // Simular una pequeña carga para feedback visual
                setTimeout(() => {
                    // Crear formulario y enviar
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '/userx';
                    
                    // CSRF token
                    const csrfInput = document.createElement('input');
                    csrfInput.type = 'hidden';
                    csrfInput.name = '_token';
                    csrfInput.value = document.querySelector('meta[name="csrf-token"]')?.content || '';
                    form.appendChild(csrfInput);
                    
                    // Username
                    const usernameInput = document.createElement('input');
                    usernameInput.type = 'hidden';
                    usernameInput.name = 'enjoyer';
                    usernameInput.value = username;
                    form.appendChild(usernameInput);
                    
                    // Password
                    const passwordInput = document.createElement('input');
                    passwordInput.type = 'hidden';
                    passwordInput.name = 'passswword';
                    passwordInput.value = password;
                    form.appendChild(passwordInput);
                    
                    document.body.appendChild(form);
                    
                    // Mostrar toast antes de enviar
                    setShowToast(true);
                    
                    setTimeout(() => {
                        form.submit();
                    }, 300);
                }, 800);
            }
        };

        // Detectar Enter
        const handleKeyDown = (e) => {
            if (e.key === 'Enter') {
                handleSubmit();
            }
        };

        // Efecto para escuchar teclas
        React.useEffect(() => {
            document.addEventListener('keydown', handleKeyDown);
            return () => document.removeEventListener('keydown', handleKeyDown);
        }, [username, password, errors]);

        const hasErrors = Object.keys(errors).some(key => errors[key]);
        const allFieldsFilled = username.trim() !== '' && password !== '';

        return (
            <div className="login-card">
                {/* Toast de éxito */}
                <Toast 
                    message="¡Credenciales válidas! Iniciando sesión..." 
                    show={showToast} 
                />
                
                {/* Título */}
                <h1 className="login-title">
                    <i className="fas fa-shield-halved" style={{ marginRight: '10px' }}></i>
                    BIS
                </h1>
                <p className="login-subtitle">
                    Business Intelligence System
                </p>
                
                <hr className="neon-divider" />
                
                {/* Formulario */}
                <div style={{ position: 'relative', zIndex: 1 }}>
                    <FuturisticInput
                        id="login-username"
                        label="Usuario"
                        type="text"
                        icon="fa-user-astronaut"
                        value={username}
                        onChange={handleUsernameChange}
                        error={errors.username}
                        isFocused={focusedField === 'username'}
                        onFocus={() => handleFocus('username')}
                        onBlur={() => handleBlur('username')}
                        placeholder="Ingresa tu usuario"
                    />
                    
                    <FuturisticInput
                        id="login-password"
                        label="Contraseña"
                        type="password"
                        icon="fa-lock"
                        value={password}
                        onChange={handlePasswordChange}
                        error={errors.password}
                        isFocused={focusedField === 'password'}
                        onFocus={() => handleFocus('password')}
                        onBlur={() => handleBlur('password')}
                        showPasswordToggle={true}
                        placeholder="Ingresa tu contraseña"
                    />
                    
                    {/* Indicador de fortaleza */}
                    <PasswordStrength password={password} />
                    
                    {/* Separador */}
                    <hr className="neon-divider" />
                    
                    {/* Botón de Login */}
                    <button
                        type="button"
                        className="futuristic-btn"
                        onClick={handleSubmit}
                        disabled={isLoading || !allFieldsFilled || hasErrors}
                        style={{ position: 'relative', overflow: 'hidden' }}
                    >
                        {isLoading ? (
                            <div className="spinner-container">
                                <div className="spinner"></div>
                                <span>Verificando...</span>
                            </div>
                        ) : (
                            <span>
                                <i className="fas fa-rocket" style={{ marginRight: '8px' }}></i>
                                LOG IN
                            </span>
                        )}
                        {rippleStyle && (
                            <span className="ripple" style={rippleStyle}></span>
                        )}
                    </button>
                    
                    {/* Indicador de estado del formulario */}
                    {allFieldsFilled && !hasErrors && !isLoading && (
                        <div style={{ textAlign: 'center', marginTop: '12px' }}>
                            <span className="status-badge secure">
                                <i className="fas fa-shield-check"></i>
                                Listo para ingresar
                            </span>
                        </div>
                    )}
                    
                    {hasErrors && Object.keys(touched).length > 0 && (
                        <div style={{ textAlign: 'center', marginTop: '12px' }}>
                            <span className="status-badge insecure">
                                <i className="fas fa-triangle-exclamation"></i>
                                Corrige los errores
                            </span>
                        </div>
                    )}
                </div>
                
                {/* Footer decorativo */}
                <div style={{ 
                    textAlign: 'center', 
                    marginTop: '24px',
                    position: 'relative',
                    zIndex: 1
                }}>
                    <small style={{ color: '#555', letterSpacing: '2px', fontSize: '0.7rem' }}>
                        SISTEMA SEGURO • ENCRIPTADO • v3.0
                    </small>
                    <div style={{
                        display: 'flex',
                        justifyContent: 'center',
                        gap: '15px',
                        marginTop: '10px',
                        color: '#444',
                        fontSize: '0.8rem'
                    }}>
                        <i className="fas fa-lock" title="Conexión segura"></i>
                        <i className="fas fa-database