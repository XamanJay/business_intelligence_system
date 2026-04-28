import React from 'react';
import { createRoot } from 'react-dom/client';
import SalesForm from './components/sales/SalesForm';
import './styles/sales-form.css';

//  React en el DOM
const container = document.getElementById('react-sales-form-root');

if (container) {
    const root = createRoot(container);
    root.render(<SalesForm />);
}