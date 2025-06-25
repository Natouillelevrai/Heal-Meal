import { init } from "@/fetch.js";
const recipesContainer = document.querySelector('.recipes');
const forms = document.querySelectorAll('.search-contain-form > form');



async function loadNewData(e, form) {

    e.preventDefault();
    const formData = new FormData(form);
        const response = await init('http://127.0.0.1:8000/api/userDetail', formData);
        console.log(response);
        recipesContainer.innerHTML = response.recettes;

}

forms.forEach(form => {
    form.addEventListener('submit', (e) => loadNewData(e,form)) ;
});
