
export const REGEX = {
    textoInvalido: /[\d'"()%$!#&<>+*=?¿¡\[\]{}\/@]/,
    numeroInvalido: /\D/,
    caracteresPeligrosos: /['"()%$!#&<>+*=?¿¡\[\]{}\/@]/,
    urlLawruler: /^https:\/\/mendozafirm\.lawruler\.com\/update-lead\.aspx\?lead=\d{6}/,
};

/**
 * 
 * @param {string} fieldName - Nombre del campo
 * @param {string} value - Valor a validar
 * @returns {string|null} Mensaje de error o null si es válido
 */
export function validateSingleField(fieldName, value) {
    const trimmed = typeof value === 'string' ? value.trim() : value;

    switch (fieldName) {
        case 'cat_employees_id':
            if (!trimmed || trimmed === '0') {
                return 'Seleccione un Agente (Cerrador) válido.';
            }
            break;

        case 'cat_employees_2_id':
            if (!trimmed || trimmed === '0') {
                return 'Seleccione un Team leader válido.';
            }
            break;

        case 'cat_employees_3_id':
            if (!trimmed || trimmed === '0') {
                return 'Seleccione un Agente (Messenger Team) válido.';
            }
            break;

        case 'link_lawruler':
            if (!trimmed) {
                return 'El Link law ruler no debe estar vacío.';
            }
            break;

        case 'lead':
            if (!trimmed) {
                return 'El Número de LEAD es obligatorio.';
            }
            if (!/^\d+$/.test(trimmed)) {
                return 'El LEAD debe contener solo números.';
            }
            if (trimmed.length !== 6) {
                return 'El LEAD debe tener exactamente 6 dígitos.';
            }
            break;

        case 'link_payment_receipt':
            if (!trimmed) {
                return 'El Recibo de pago no debe estar vacío.';
            }
            break;

        case 'consultation_cost_id':
            if (!trimmed || trimmed === '0') {
                return 'El costo de consulta debe ser detectado automáticamente del recibo.';
            }
            break;

        case 'cat_type_process_id':
            if (!trimmed || trimmed === '0') {
                return 'Seleccione un Tipo de trámite válido.';
            }
            break;

        
        default:
            break;
    }

    return null;
}

/**
 * 
 * @param {Object} formData - Datos del formulario
 * @returns {Object} { errors: Object, allTouched: Object }
 */
export function validateAllFields(formData) {
    const errors = {};
    const allTouched = {};

    const fieldsToValidate = [
        'cat_employees_id',
        'cat_employees_2_id',
        'cat_employees_3_id',
        'link_lawruler',
        'lead',
        'link_payment_receipt',
        'consultation_cost_id',
        'cat_type_process_id',
    ];

    fieldsToValidate.forEach(fieldName => {
        allTouched[fieldName] = true;
        const error = validateSingleField(fieldName, formData[fieldName]);
        if (error) {
            errors[fieldName] = error;
        }
    });

    return { errors, allTouched };
}