import React from 'react';


export default function ErrorAlert({ errors }) {
    if (!errors || errors.length === 0) return null;
    
    return (
        <div className="error-alert" role="alert">
            <div className="error-alert-icon">
                <i className="fas fa-exclamation-triangle"></i>
            </div>
            <div className="error-alert-content">
                <h4>Por favor corrige los siguientes errores ({errors.length}):</h4>
                <ul>
                    {errors.map((error, index) => (
                        <li key={index}>{error}</li>
                    ))}
                </ul>
            </div>
        </div>
    );
}