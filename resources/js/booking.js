const EMAIL_PATTERN = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
const PHONE_PATTERN = /^01[3-9]\d{8}$/;

export function initBookingForm() {
    const form = document.getElementById('booking-form-el');
    if (!form) return;

    const successPanel = document.getElementById('success-summary');
    const summaryList = document.getElementById('summary-list');
    const bookAnotherBtn = document.getElementById('book-another');

    const showError = (field, message) => {
        const errorEl = document.getElementById(`error-${field}`);
        if (!errorEl) return;
        errorEl.textContent = message;
        errorEl.classList.remove('hidden');
    };

    const clearAllErrors = () => {
        form.querySelectorAll('.error-message').forEach((el) => {
            el.textContent = '';
            el.classList.add('hidden');
        });
    };

    function validate() {
        let isValid = true;
        clearAllErrors();

        const fullName = form.full_name.value.trim();
        if (!fullName) {
            showError('full_name', 'Full name is required.');
            isValid = false;
        } else if (fullName.length < 3) {
            showError('full_name', 'Full name must be at least 3 characters.');
            isValid = false;
        }

        const email = form.email.value.trim();
        if (!email) {
            showError('email', 'Email is required.');
            isValid = false;
        } else if (!EMAIL_PATTERN.test(email)) {
            showError('email', 'Enter a valid email address.');
            isValid = false;
        }

        const phone = form.phone.value.trim();
        if (!phone) {
            showError('phone', 'Phone number is required.');
            isValid = false;
        } else if (!PHONE_PATTERN.test(phone)) {
            showError('phone', 'Enter a valid 11-digit BD mobile number (e.g. 01712345678).');
            isValid = false;
        }

        const age = form.age.value.trim();
        if (!age) {
            showError('age', 'Age is required.');
            isValid = false;
        } else if (Number(age) < 1 || Number(age) > 120) {
            showError('age', 'Enter a valid age between 1 and 120.');
            isValid = false;
        }

        if (!form.department.value) {
            showError('department', 'Please select a department.');
            isValid = false;
        }

        if (!form.querySelector('input[name="gender"]:checked')) {
            showError('gender', 'Please select a gender.');
            isValid = false;
        }

        const preferredDate = form.preferred_date.value;
        const today = new Date().toISOString().split('T')[0];
        if (!preferredDate) {
            showError('preferred_date', 'Preferred date is required.');
            isValid = false;
        } else if (preferredDate < today) {
            showError('preferred_date', 'Preferred date cannot be in the past.');
            isValid = false;
        }

        const alternateDate = form.alternate_date.value;
        if (!alternateDate) {
            showError('alternate_date', 'Alternate date is required.');
            isValid = false;
        } else if (preferredDate && alternateDate <= preferredDate) {
            showError('alternate_date', 'Alternate date must be after the preferred date.');
            isValid = false;
        }

        if (!form.agree_terms.checked) {
            showError('agree_terms', 'You must agree to the booking policy.');
            isValid = false;
        }

        return isValid;
    }

    function buildSummary() {
        const genderChecked = form.querySelector('input[name="gender"]:checked');
        const departmentText = form.department.options[form.department.selectedIndex]?.text ?? '';

        const entries = [
            ['Full Name', form.full_name.value.trim()],
            ['Email', form.email.value.trim()],
            ['Phone', form.phone.value.trim()],
            ['Age', form.age.value.trim()],
            ['Department', departmentText],
            ['Gender', genderChecked ? genderChecked.value : ''],
            ['Preferred Date', form.preferred_date.value],
            ['Alternate Date', form.alternate_date.value],
            ['Symptoms', form.symptoms.value.trim() || '—'],
        ];

        summaryList.replaceChildren();
        entries.forEach(([label, value]) => {
            const dt = document.createElement('dt');
            dt.className = 'font-semibold';
            dt.textContent = label;

            const dd = document.createElement('dd');
            dd.textContent = value;

            const wrapper = document.createElement('div');
            wrapper.append(dt, dd);
            summaryList.appendChild(wrapper);
        });
    }

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        if (!validate()) {
            successPanel.classList.add('hidden');
            return;
        }

        buildSummary();
        successPanel.classList.remove('hidden');
        form.classList.add('hidden');
        successPanel.scrollIntoView({ behavior: 'smooth' });
    });

    form.addEventListener('reset', () => {
        clearAllErrors();
        successPanel.classList.add('hidden');
        form.classList.remove('hidden');
    });

    bookAnotherBtn?.addEventListener('click', () => form.reset());
}
