document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        const targetId = anchor.getAttribute('href').substring(1);

        if (['about', 'services', 'developers'].includes(targetId)) {
            anchor.addEventListener('click', (event) => {
                event.preventDefault();
                const target = document.getElementById(targetId);

                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                   
                    target.classList.remove('fade-on-entry-animation');
                    void target.offsetWidth; 
                    target.classList.add('fade-on-entry-animation');
                }
            });
        }
    });
});