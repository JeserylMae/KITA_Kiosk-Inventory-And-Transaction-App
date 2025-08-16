document.addEventListener('click', e => {
    const target = e.target.closest('.navlink'); 

    if (!target) {
        document.querySelectorAll('.navlink').forEach(l => {
            l.style.setProperty('--after-width', '0%');
            l.style.fontWeight = "400";
            l.style.color = "var(--color-secondary-foreground)";
        });
        return;
    }

    e.preventDefault(); 
    document.querySelectorAll('.navlink').forEach(l => {
        l.style.setProperty('--after-width', '0%');
        l.style.fontWeight = "400";
        l.style.color = "var(--color-secondary-foreground)";
    });

    target.style.fontWeight = "500";
    target.style.color = "var(--color-foreground)";
    target.style.setProperty('--after-width', '100%');
});
