import { init } from "./fetch.js";
import { validateField, showErrorFields } from "./error.js";

const form = document.querySelector('#register-form');

const steps = document.querySelectorAll('[data-step]');
const stepTitle = document.querySelector('#stepTitle');
const stepsTitle = ['', "Qui êtes-vous ?", "Information Utilisateur", "Une dernière chose"]

const numbersProgress = document.querySelectorAll('.number-progress');
const stepProgress = document.querySelector('#stepProgress');
const stepsProgress = ['', '1%', '50%', '95%'];

const searchInput = document.querySelector('#allergenes');

const nextStepBtn = document.querySelector('#nextStep');
const submitButton = document.querySelector('#validate-form');

let currentStep = 1;

let data = [];
let allergeneData = [];

function createTagAllergene(name, id) {
    let containAllergene = document.querySelector('.contain-tag-allergene')
    containAllergene.innerHTML += `<div class="flex gap-2 bg-gray-300 rounded-full px-2 py-1 delete-allergene"><p class="allergene-value" data-id="${id}">${name}</p> <p class="text-red-600">🗑️</p></div>`;

    allergeneData.push(name);
    let deleteAllergenes = document.querySelectorAll('.delete-allergene')
    deleteAllergenes.forEach(deleteAllergene => {
        deleteAllergene.addEventListener('click', (e) => {
            allergeneData = allergeneData.filter((item) => item == deleteAllergene.textContent);
            deleteAllergene.parentNode.removeChild(deleteAllergene)
        })
    })
}

data = await init('http://127.0.0.1:8000/api/allergenes');

function sortData(q) {
    if (!q) return [];
    const qLower = q.toLowerCase();
    return data
        .filter(item => item.name.toLowerCase().includes(qLower))
        .sort((a, b) => {
            const aName = a.name.toLowerCase();
            const bName = b.name.toLowerCase();
            const aStarts = aName.startsWith(qLower);
            const bStarts = bName.startsWith(qLower);
            if (aStarts && !bStarts) return -1;
            if (!aStarts && bStarts) return 1;
            return aName.indexOf(qLower) - bName.indexOf(qLower);
        })
        .filter(item => !allergeneData.includes(item.name))
        .slice(0, 5)
}

function updateStepDisplay(value) {
    stepTitle.textContent = stepsTitle[value];
    stepProgress.style.width = stepsProgress[value];
    numbersProgress.forEach((number, index) => {
        number.classList.add('bg-[#FFF7EB]', 'text-[#0E2F46]');
        number.classList.remove('bg-[#0E2F46]', 'text-[#FFF7EB]');
        index++;
        if (index <= value) {
            number.classList.remove('bg-[#FFF7EB]', 'text-[#0E2F46]');
            number.classList.add('bg-[#0E2F46]', 'text-[#FFF7EB]');
        }
    });
}

function createAllergeneSearch(text, id) {
    let containSearchResult = document.querySelector('.contain-search-result');
    containSearchResult.innerHTML += `<p class="divSearch px-4 py-2" data-id="${id}">${text}</p>`;
}

searchInput.addEventListener('input', function () {
    let dataSort = sortData(searchInput.value)
    document.querySelector('.contain-search-result').innerHTML = "";
    dataSort.forEach(data => {
        createAllergeneSearch(data.name, data.id_allergenes);
    })
    let searchDiv = document.querySelectorAll('.divSearch')
    searchDiv.forEach(searchInput => {
        searchInput.addEventListener('click', () => {
            createTagAllergene(searchInput.textContent, searchInput.dataset.id);
            document.querySelector('.contain-search-result').innerHTML = "";
            searchInput.value = ""
        })
    })
});

function validateCurrentStep() {
    const formStep = document.querySelector(`[data-step="${currentStep}"]`);
    let valid = [];
    const requiredFields = formStep.querySelectorAll('input, select');
    requiredFields.forEach(field => {
        const value = field.value.trim();
        const name = field.getAttribute('name');
        field.classList.remove('border', 'border-red-500');
        valid.push(validateField(name, value));
    });
    return valid.includes(false) ? false : true;
}

function setButtonDisabled(isDisabled, parent, btn) {
    if (isDisabled) {
        btn.setAttribute('disabled', 'disabled');
        btn.classList.add('hidden');
        btn.classList.remove('inline-flex');
        parent.classList.remove('hidden');
        parent.classList.add('inline-flex');
    } else {
        btn.removeAttribute('disabled');
        btn.classList.remove('inline-flex');
        btn.classList.remove('hidden');
        parent.classList.remove('inline-flex');
        parent.classList.add('hidden');
    }
}

function updateStepFocus() {
    updateStepDisplay(currentStep);

    steps.forEach(step => {
        const isActive = parseInt(step.getAttribute('data-step')) === currentStep;

        const focusables = step.querySelectorAll(
            'input, select, textarea, button, [tabindex]'
        );

        focusables.forEach(el => {
            if (isActive) {
                el.removeAttribute('tabindex');
                el.removeAttribute('disabled');
            } else {
                el.setAttribute('tabindex', '-1');
                el.setAttribute('disabled', 'disabled');
            }
        });

        currentStep == 3 ? setButtonDisabled(false, nextStepBtn, submitButton) : setButtonDisabled(true, nextStepBtn, submitButton);
    });
}

function ChooseStep(value = 1) {
    if (value > 3 || value < 1) {
        return;
    }

    currentStep = value;
    updateStepDisplay(currentStep);

    steps.forEach(step => {
        const isActive = parseInt(step.getAttribute('data-step')) === currentStep;

        const focusables = step.querySelectorAll(
            'input, select, textarea, button, [tabindex]'
        );

        focusables.forEach(el => {
            if (isActive) {
                el.removeAttribute('tabindex');
                el.removeAttribute('disabled');
            } else {
                el.setAttribute('tabindex', '-1');
                el.setAttribute('disabled', 'disabled');
            }
        });

        currentStep == 3 ? setButtonDisabled(false, nextStepBtn, submitButton) : setButtonDisabled(true, nextStepBtn, submitButton);
    });

    const Step = document.querySelector(`[data-step="${currentStep}"]`);
    Step.scrollIntoView({ behavior: 'smooth', inline: 'start' });
    currentStep = currentStep;
}

updateStepFocus();

nextStepBtn.addEventListener('click', () => {
    if (validateCurrentStep()) {
        const next = currentStep + 1;
        if (next === 3) {
            setButtonDisabled(false, nextStepBtn, submitButton);
        }
        const nextSlide = document.querySelector(`[data-step="${next}"]`);
        if (nextSlide) {
            currentStep = next;
            console.log(currentStep);
            
            updateStepFocus();
            nextSlide.scrollIntoView({ behavior: 'smooth', inline: 'start' });
        }
    }
});

window.addEventListener('resize', () => {
    const nextSlide = document.querySelector(`[data-step="${currentStep}"]`);
    nextSlide.scrollIntoView({ behavior: 'smooth', inline: 'start' });
})

form.addEventListener('submit', e => {
    e.preventDefault();
    const disabledFields = form.querySelectorAll('[disabled]');
    disabledFields.forEach(field => field.removeAttribute('disabled'));

    const formData = new FormData(form);
    const dataRegister = {};

    for (const [key, value] of formData.entries()) {
        dataRegister[key] = value;
    }
    const allergeneElements = document.querySelectorAll('.allergene-value');
    const allergenes = Array.from(allergeneElements).map(el => el.dataset.id.trim());

    dataRegister.allergenes = allergenes;
    disabledFields.forEach(field => field.setAttribute('disabled', 'disabled'));
    init('http://127.0.0.1:8000/api/register', dataRegister)
        .then(data => {
            ChooseStep(1)
        })
        .catch(errors => {
            let errorStep = 3;
            for (const [key, value] of Object.entries(errors.errors)) {
                showErrorFields(key, value);

                const field = document.querySelector(`input[name="${key}"], select[name="${key}"]`);
                const step = parseFloat(field.getAttribute('data-step'));

                if (step) {
                    errorStep = parseFloat(step) < errorStep ? parseFloat(step) : errorStep;
                }
            }

            ChooseStep(errorStep);
        });
});

