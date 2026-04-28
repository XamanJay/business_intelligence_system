import React, { useState, useEffect, useCallback, useRef } from 'react';
import ErrorAlert from './ErrorAlert';
import FormSelect from './FormSelect';
import FormInput from './FormInput';
import FormTextarea from './FormTextarea';
import { validateAllFields, validateSingleField } from './validators';

export default function SalesForm() {
    
    const LARAVEL = window.LARAVEL_DATA || {};

   
    const [formData, setFormData] = useState({
        cat_employees_id: '0',
        cat_employees_2_id: '0',
        cat_employees_3_id: '0',
        link_lawruler: '',
        lead: '',
        link_payment_receipt: '',
        consultation_cost_id: '0',
        cat_type_process_id: '0',
        cat_client_id: '0',
    });

    const [errors, setErrors] = useState({});
    const [touched, setTouched] = useState({});
    const [isSubmitting, setIsSubmitting] = useState(false);
    const [globalErrors, setGlobalErrors] = useState([]);
    const [formKey, setFormKey] = useState(0);

    
    const formRef = useRef(null);

    
    const handleChange = useCallback((fieldName, value) => {
        setFormData(prev => ({ ...prev, [fieldName]: value }));
        
        // Validar en tiempo real si el campo fue tocado
        if (touched[fieldName]) {
            const error = validateSingleField(fieldName, value);
            setErrors(prev => ({ ...prev, [fieldName]: error }));
        }
    }, [touched]);

    const handleBlur = useCallback((fieldName) => {
        setTouched(prev => ({ ...prev, [fieldName]: true }));
        const error = validateSingleField(fieldName, formData[fieldName]);
        setErrors(prev => ({ ...prev, [fieldName]: error }));
    }, [formData]);

    // Extraer LEAD del link automáticamente
    const handleLinkLawrulerBlur = useCallback(() => {
        handleBlur('link_lawruler');
        
        // Auto-extraer LEAD
        const link = formData.link_lawruler;
        const searchIndex = link.search('=');
        if (searchIndex !== -1) {
            const leadValue = link.slice(searchIndex + 1, searchIndex + 7);
            if (/^\d{6}$/.test(leadValue)) {
                setFormData(prev => ({ ...prev, lead: leadValue }));
                setTouched(prev => ({ ...prev, lead: true }));
                setErrors(prev => ({ ...prev, lead: null }));
            }
        }
    }, [formData.link_lawruler, handleBlur]);

    // Extraer costo del recibo de pago
    const handlePaymentReceiptBlur = useCallback(() => {
        handleBlur('link_payment_receipt');
        
        const text = formData.link_payment_receipt;
        const dollarIndex = text.indexOf('$');
        if (dollarIndex !== -1) {
            const costValue = text.slice(dollarIndex + 1, dollarIndex + 4).trim();
            if (costValue && !isNaN(parseFloat(costValue))) {
                // Buscar si coincide con alguna opción de costo
                const matchedCost = LARAVEL.costs?.find(c => 
                    c.cost && c.cost.includes(costValue)
                );
                if (matchedCost) {
                    setFormData(prev => ({ ...prev, consultation_cost_id: matchedCost.id }));
                    setTouched(prev => ({ ...prev, consultation_cost_id: true }));
                    setErrors(prev => ({ ...prev, consultation_cost_id: null }));
                }
            }
        }
    }, [formData.link_payment_receipt, handleBlur, LARAVEL.costs]);

    
    const handleSubmit = useCallback((e) => {
        if (e) e.preventDefault();
        
        // Validar todos los campos
        const { errors: newErrors, allTouched } = validateAllFields(formData);
        setErrors(newErrors);
        setTouched(allTouched);
        
        // Recopilar errores para mostrar en el alert
        const errorList = Object.values(newErrors).filter(Boolean);
        setGlobalErrors(errorList);
        
        if (errorList.length > 0) {
            // Scroll al primer error
            setTimeout(() => {
                const firstErrorField = document.querySelector('.has-error');
                if (firstErrorField) {
                    firstErrorField.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstErrorField.focus();
                }
            }, 100);
            return;
        }
        
        // Enviar formulario
        setIsSubmitting(true);
        
        // POST tradicional
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = LARAVEL.formAction || '/sales';
        form.style.display = 'none';
        
        // CSRF Token
        const csrfInput = document.createElement('input');
        csrfInput.type = 'hidden';
        csrfInput.name = '_token';
        csrfInput.value = LARAVEL.csrfToken || '';
        form.appendChild(csrfInput);
        
        // Campos del formulario
        const fields = {
            cat_employees_id: formData.cat_employees_id,
            cat_employees_2_id: formData.cat_employees_2_id,
            cat_employees_3_id: formData.cat_employees_3_id,
            link_lawruler: formData.link_lawruler,
            lead: formData.lead,
            link_payment_receipt: formData.link_payment_receipt,
            consultation_cost_id: formData.consultation_cost_id,
            cat_type_process_id: formData.cat_type_process_id,
            cat_client_id: formData.cat_client_id,
            // Campos ocultos
            sale_date: LARAVEL.today || '',
            day: LARAVEL.day || '',
            month: LARAVEL.month || '',
            year: LARAVEL.year || '',
            ipaddress: LARAVEL.ipAddress || '',
            x_users_id: LARAVEL.enjoyerId || '',
        };
        
        Object.entries(fields).forEach(([name, value]) => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = name;
            input.value = value;
            form.appendChild(input);
        });
        
        document.body.appendChild(form);
        form.submit();
    }, [formData, LARAVEL]);

    
    const handleReset = useCallback(() => {
        setFormData({
            cat_employees_id: '0',
            cat_employees_2_id: '0',
            cat_employees_3_id: '0',
            link_lawruler: '',
            lead: '',
            link_payment_receipt: '',
            consultation_cost_id: '0',
            cat_type_process_id: '0',
            cat_client_id: '0',
        });
        setErrors({});
        setTouched({});
        setGlobalErrors([]);
        setFormKey(prev => prev + 1);
        
        // Enfocar el primer campo
        setTimeout(() => {
            document.getElementById('cat_employees_id')?.focus();
        }, 100);
    }, []);

   
    useEffect(() => {
        const handleKeyDown = (e) => {
            if (e.key === 'Enter' && e.target.tagName !== 'TEXTAREA') {
                e.preventDefault();
                handleSubmit();
            }
        };
        
        document.addEventListener('keydown', handleKeyDown);
        return () => document.removeEventListener('keydown', handleKeyDown);
    }, [handleSubmit]);

    
    const hasErrors = Object.values(errors).some(Boolean);
    const allRequiredFilled = 
        formData.cat_employees_id !== '0' &&
        formData.cat_employees_2_id !== '0' &&
        formData.cat_employees_3_id !== '0' &&
        formData.link_lawruler.trim() !== '' &&
        formData.lead.trim() !== '' &&
        formData.link_payment_receipt.trim() !== '' &&
        formData.cat_type_process_id !== '0';

    return (
        <div className="sales-form-container" key={formKey}>
            {/* Header */}
            <div className="sales-form-header">
                <h1>
                    <i className="fas fa-chart-line"></i>
                    ::::: NUEVA VENTA :::::
                </h1>
            </div>

            {/* Alerta de sesión (si existe) */}
            {LARAVEL.sessionMessage && (
                <div className="alert alert-danger">
                    {LARAVEL.sessionMessage}
                </div>
            )}

            {/* Alerta de errores de validación */}
            <ErrorAlert errors={globalErrors} />

            {/* Formulario */}
            <form ref={formRef} onSubmit={handleSubmit} noValidate>
                <div className="sales-form-body">
                    
                    {/* Fila 1: Agentes */}
                    <div className="form-row-3">
                        <FormSelect
                            id="cat_employees_id"
                            label="Agente (Cerrador)"
                            value={formData.cat_employees_id}
                            onChange={(val) => handleChange('cat_employees_id', val)}
                            onBlur={() => handleBlur('cat_employees_id')}
                            error={touched.cat_employees_id && errors.cat_employees_id}
                            options={LARAVEL.employees || []}
                            placeholder="Seleccione una opción"
                            required
                            autoFocus
                        />
                        
                        <FormSelect
                            id="cat_employees_2_id"
                            label="Team leader"
                            value={formData.cat_employees_2_id}
                            onChange={(val) => handleChange('cat_employees_2_id', val)}
                            onBlur={() => handleBlur('cat_employees_2_id')}
                            error={touched.cat_employees_2_id && errors.cat_employees_2_id}
                            options={LARAVEL.employeeesss || []}
                            placeholder="Seleccione una opción"
                            required
                        />
                        
                        <FormSelect
                            id="cat_employees_3_id"
                            label="Agente (Messenger team)"
                            value={formData.cat_employees_3_id}
                            onChange={(val) => handleChange('cat_employees_3_id', val)}
                            onBlur={() => handleBlur('cat_employees_3_id')}
                            error={touched.cat_employees_3_id && errors.cat_employees_3_id}
                            options={LARAVEL.employeess || []}
                            placeholder="Seleccione una opción"
                            required
                        />
                    </div>

                    {/* Fila 2: Link y LEAD */}
                    <div className="form-row-9-3">
                        <FormInput
                            id="link_lawruler"
                            label="Link law ruler"
                            value={formData.link_lawruler}
                            onChange={(val) => handleChange('link_lawruler', val)}
                            onBlur={handleLinkLawrulerBlur}
                            error={touched.link_lawruler && errors.link_lawruler}
                            placeholder="https://mendozafirm.lawruler.com/update-lead.aspx?lead=000000"
                            required
                            hint="El LEAD se extraerá automáticamente"
                        />
                        
                        <FormInput
                            id="lead"
                            label="Número de LEAD"
                            value={formData.lead}
                            onChange={(val) => handleChange('lead', val)}
                            onBlur={() => handleBlur('lead')}
                            error={touched.lead && errors.lead}
                            placeholder="_ _ _ _ _ _"
                            maxLength={6}
                            required
                        />
                    </div>

                    {/* Fila 3: Recibo y Costo */}
                    <div className="form-row-9-3">
                        <FormTextarea
                            id="link_payment_receipt"
                            label="Recibo de pago"
                            value={formData.link_payment_receipt}
                            onChange={(val) => handleChange('link_payment_receipt', val)}
                            onBlur={handlePaymentReceiptBlur}
                            error={touched.link_payment_receipt && errors.link_payment_receipt}
                            rows={7}
                            required
                            hint="El costo se detectará automáticamente si contiene '$'"
                        />
                        
                        <FormInput
                            id="consultation_cost_id"
                            label="Costo de la Consulta"
                            value={formData.consultation_cost_id === '0' ? '' : 
                                LARAVEL.costs?.find(c => c.id == formData.consultation_cost_id)?.cost || ''}
                            onChange={() => {}}
                            error={touched.consultation_cost_id && errors.consultation_cost_id}
                            placeholder="$"
                            readOnly
                        />
                    </div>

                    {/* Fila 4: Tipo de trámite y Cliente */}
                    <div className="form-row-2">
                        <FormSelect
                            id="cat_type_process_id"
                            label="Tipo de trámite"
                            value={formData.cat_type_process_id}
                            onChange={(val) => handleChange('cat_type_process_id', val)}
                            onBlur={() => handleBlur('cat_type_process_id')}
                            error={touched.cat_type_process_id && errors.cat_type_process_id}
                            options={LARAVEL.process || []}
                            placeholder="Seleccione una opción"
                            required
                        />
                        
                        <FormSelect
                            id="cat_client_id"
                            label="Posible Cliente"
                            value={formData.cat_client_id}
                            onChange={(val) => handleChange('cat_client_id', val)}
                            onBlur={() => handleBlur('cat_client_id')}
                            error={touched.cat_client_id && errors.cat_client_id}
                            options={LARAVEL.client || []}
                            placeholder="Seleccione una opción"
                        />
                    </div>

                    {/* Campos ocultos */}
                    <input type="hidden" name="sale_date" value={LARAVEL.today || ''} />
                    <input type="hidden" name="day" value={LARAVEL.day || ''} />
                    <input type="hidden" name="month" value={LARAVEL.month || ''} />
                    <input type="hidden" name="year" value={LARAVEL.year || ''} />
                    <input type="hidden" name="ipaddress" value={LARAVEL.ipAddress || ''} />
                    <input type="hidden" name="x_users_id" value={LARAVEL.enjoyerId || ''} />

                    {/* Botones */}
                    <div className="form-actions">
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
                            type="submit"
                            className="btn btn-submit"
                            disabled={isSubmitting || !allRequiredFilled}
                        >
                            {isSubmitting ? (
                                <>
                                    <span className="spinner"></span>
                                    GUARDANDO...
                                </>
                            ) : (
                                <>
                                    <i className="fas fa-save"></i>
                                    GUARDAR
                                </>
                            )}
                        </button>
                        
                        {Object.keys(touched).length > 0 && (
                            <span className={`form-status ${hasErrors ? 'invalid' : 'valid'}`}>
                                <i className={`fas ${hasErrors ? 'fa-exclamation-circle' : 'fa-check-circle'}`}></i>
                                {hasErrors 
                                    ? `${Object.values(errors).filter(Boolean).length} error(es)` 
                                    : 'Formulario válido'}
                            </span>
                        )}
                    </div>
                </div>
            </form>
        </div>
    );
}