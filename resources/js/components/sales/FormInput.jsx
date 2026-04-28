import React from 'react';

/**
 * Componente Input.
 */
export default function FormInput({ 
    id, label, value, onChange, onBlur, error, 
    placeholder = '', maxLength, required = false, 
    readOnly = false, hint = '', type = 'text' 
}) {
    const inputClass = `form-input${error ? ' has-error' : ''}${value && !error ? ' has-success' : ''}`;
    
    return (
        <div className="form-field">
            <label htmlFor={id} className="form-label">
                {label}
                {required && <span className="required-star" title="Requerido">*</span>}
            </label>
            <input
                id={id}
                type={type}
                className={inputClass}
                value={value}
                onChange={(e) => onChange(e.target.value)}
                onBlur={onBlur}
                placeholder={placeholder}
                maxLength={maxLength || undefined}
                readOnly={readOnly}
            />
            {hint && !error && (
                <small className="field-hint">{hint}</small>
            )}
            {error && (
                <div className="field-error">
                    <i className="fas fa-circle-exclamation"></i>
                    <span>{error}</span>
                </div>
            )}
        </div>
    );
}