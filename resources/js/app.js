import './bootstrap';

const menuToggle = document.querySelector('#menu-toggle');
const topNav = document.querySelector('#main-navigation');

menuToggle?.addEventListener('click', () => {
    const isOpen = topNav?.classList.toggle('open') ?? false;
    menuToggle.setAttribute('aria-expanded', String(isOpen));
});

document.querySelectorAll('.alert-close').forEach((button) => {
    button.addEventListener('click', () => {
        button.closest('.alert')?.remove();
    });
});

document.querySelectorAll('[data-password-toggle]').forEach((button) => {
    button.addEventListener('click', () => {
        const input = document.querySelector(button.dataset.passwordToggle);
        if (!input) return;

        const shouldShow = input.type === 'password';
        input.type = shouldShow ? 'text' : 'password';
        button.textContent = shouldShow ? 'Hide' : 'Show';
        button.setAttribute('aria-label', `${shouldShow ? 'Hide' : 'Show'} password`);
    });
});

document.querySelectorAll('form[data-confirm]').forEach((form) => {
    form.addEventListener('submit', (event) => {
        if (!window.confirm(form.dataset.confirm)) {
            event.preventDefault();
        }
    });
});

document.querySelectorAll('form').forEach((form) => {
    form.addEventListener('submit', () => {
        const submitButton = form.querySelector('button[type="submit"][data-submit-label]');
        if (!submitButton) return;

        submitButton.disabled = true;
        submitButton.textContent = submitButton.dataset.submitLabel;
    }, { once: true });
});
