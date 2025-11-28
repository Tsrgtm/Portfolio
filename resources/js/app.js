import './bootstrap';

function applyTheme(theme, persist = false) {
    const html = document.documentElement;
    if (!theme) return;
    // set data-attribute
    html.setAttribute('data-theme', theme);
    // set class (ensure only 'light' or 'dark' present)
    html.classList.remove('light', 'dark');
    html.classList.add(theme);
    if (persist) {
        localStorage.setItem('theme', theme);
    }
}

function toggletheme() {
    const html = document.documentElement;
    const current = html.getAttribute('data-theme');
    const next = current === 'dark' ? 'light' : 'dark';
    applyTheme(next, true);
}

const btn = document.getElementById('theme-toggle-button');
if (btn) btn.addEventListener('click', toggletheme);

window.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark' || savedTheme === 'light') {
        applyTheme(savedTheme, false);
    } else {
        const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
        applyTheme(prefersDark ? 'dark' : 'light', false);
    }
});