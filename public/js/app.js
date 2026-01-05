// Simple non-module bundle for the browser. Combines bootstrap and animation behavior.

// Bootstrap-like setup (expects axios from CDN)
if (typeof axios !== 'undefined') {
    window.axios = axios;

    if (!window.axios.defaults) window.axios.defaults = {};
    window.axios.defaults.headers = window.axios.defaults.headers || {};
    window.axios.defaults.headers.common = window.axios.defaults.headers.common || {};
    window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
}

// Animation script copied from resources/js/animation.js
(function () {
    document.addEventListener('DOMContentLoaded', function () {
        var elements = document.querySelectorAll('.reveal');

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var el = entry.target;

                    var anim = (el.dataset.animate || 'fade-up').toString().trim();
                    var animClass = 'animate-' + anim.replace(/[_ ]/g, '-');

                    var delay = parseFloat(el.dataset.delay || 0);
                    if (!Number.isNaN(delay) && delay > 0) {
                        el.style.animationDelay = delay + 's';
                    }

                    el.classList.add(animClass);
                    el.classList.add('in-view');
                    observer.unobserve(el);
                }
            });
        }, {
            threshold: 0.15
        });

        elements.forEach(function (el) { observer.observe(el); });
    });
})();