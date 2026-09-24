import './bootstrap';
import { initNavbar } from './navbar';
import { initBookingForm } from './booking';

document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
    initBookingForm();
});
