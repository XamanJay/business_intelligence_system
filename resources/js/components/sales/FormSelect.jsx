import React from 'react';

/**
 * Select reutilizable .
 */
export default function FormSelect({ 
    id, label, value, onChange, onBlur, error, 
    options = [], placeholder = 'Seleccione una opción', 
    required = false, autoFocus = false, disabled = false 
}) {
    const selectClass = `form-select${error ? ' has-error' : ''}${value && value !== '0' && !error ? ' has-success' : ''}`;
    
    return (
        <div className="form-field">
            <label htmlFor={id} className="form-label">
                {label}
                {required && <span className="required-star" title="Requerido">*</span>}
            </label>
            <select
                id={id}
                className={selectClass}
                value={value}
                onChange={(e) => onChange(e.target.value)}
                onBlur={onBlur}
                autoFocus={autoFocus}
                disabled={disabled}
            >
                <option value="0">{placeholder}</option>
                {options.map(opt => (
                    <option key={opt.id} value={opt.id}>
                        {opt.name || opt.description || opt.label || opt.id}
                    </option>
                ))}
            </select>
            {error && (
                <div className="field-error">
                    <i className="fas fa-circle-exclamation"></i>
                    <span>{error}</span>
                </div>
            )}
        </div>
    );
}