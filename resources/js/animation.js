/*
    Simple scroll-triggered animations using IntersectionObserver.

    Usage (in Blade):
        - Add `class="reveal"` to the element you want to animate.
        - Optionally set `data-animate="fade-up|fade-in|slide-left|scale-up"` (default: fade-up)
        - Optionally set `data-delay="0.15"` to stagger (seconds)

    The script will add an `.animate-...` class and a small inline `animation-delay` when the
    element enters the viewport and will then unobserve it.
*/
document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.reveal');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;

                // support choosing animation via data-animate="fade-up|fade-in|slide-left|scale-up"
                const anim = (el.dataset.animate || 'fade-up').toString().trim();
                const animClass = 'animate-' + anim.replace(/[_ ]/g, '-');

                // support optional delay in seconds via data-delay="0.2"
                const delay = parseFloat(el.dataset.delay || 0);
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

    elements.forEach(el => observer.observe(el));
});
