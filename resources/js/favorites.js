const favForms = document.querySelectorAll('.favForm');

if (favForms.length) {
    document.addEventListener('DOMContentLoaded', () => {
        favForms.forEach(form => {
            form.addEventListener('submit', async e => {
                e.preventDefault();

                const btn       = form.querySelector('.icon');
                const countEl   = form.querySelector('.fav-count');   // ← présent uniquement sur la page Détails
                const hasCount  = !!countEl;                          // ← true = page Détails
                let   count     = hasCount ? parseInt(countEl.textContent, 10) || 0 : 0;

                const recetteId = form.querySelector('[name="id_recette"]').value;
                const userId    = form.querySelector('[name="id_user"]').value;
                const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

                btn.disabled = true;

                try {
                    const res   = await fetch('/api/favorites/toggle', {
                        method      : 'POST',
                        credentials : 'same-origin',
                        headers     : {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                            'Accept'      : 'application/json'
                        },
                        body        : JSON.stringify({ id_recette: recetteId, id_user: userId })
                    });
                    const { status } = await res.json();

                    if (status === 'added') {
                        btn.classList.replace('ri-bookmark-line',  'ri-bookmark-fill');
                        if (hasCount) countEl.textContent = ++count;
                    } else if (status === 'removed') {
                        btn.classList.replace('ri-bookmark-fill', 'ri-bookmark-line');
                        if (hasCount) countEl.textContent = --count;
                    } else {
                        console.error('Réponse API inattendue :', status);
                    }
                } catch (err) {
                    console.error('Erreur réseau :', err);
                } finally {
                    btn.disabled = false;
                }
            });
        });
    });
}
