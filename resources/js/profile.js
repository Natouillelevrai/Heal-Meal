document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('#buttonsList button');
    const sections = {
        'Publiques': document.getElementById('recipesPublic'),
        'Privées': document.getElementById('recipesPrivate'),
        'Noté': document.getElementById('recipesRate'),
        'Enregistrées': document.getElementById('recipesFav'),
    };

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const label = button.textContent.trim();

            Object.values(sections).forEach(section => section.classList.add('hidden'));

            if (sections[label]) {
                sections[label].classList.remove('hidden');
            }
        });
    });
});
