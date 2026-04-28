import React from 'react';

/**
 * Textarea.
 */
export default function FormTextarea({ 
    id, label, value, onChange, onBlur, error, 
    rows = 5, required = false, hint = '' 
}) {
    const textareaClass = `form-textarea${error ? ' has-error' : ''}${value && !error ? ' has-success' : ''}`;
    
    return (
        <div className="form-field">
            <label htmlFor={id} className="form-label">
                {label}
                {required && <span className="required-star" title="Requerido">*</span>}
            </label>
            <textarea
                id={id}
                className={textareaClass}
                value={value}
                onChange={(e) => onChange(e.target.value)}
                onBlur={onBlur}
                rows={rows}
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