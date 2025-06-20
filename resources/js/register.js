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

function getData() {
    return fetch('http://127.0.0.1:8000/api/allergenes')
        .then(response => response.json())
}

function createTagAllergene(name) {
    let containAllergene = document.querySelector('.contain-tag-allergene')
    containAllergene.innerHTML += `<div class="flex gap-2 bg-gray-300 rounded-full px-2 py-1 delete-allergene">${name} <p class="text-red-600">🗑️</p></div>`;
    allergeneData.push(name);
    let deleteAllergenes = document.querySelectorAll('.delete-allergene')
    deleteAllergenes.forEach(deleteAllergene => {
        deleteAllergene.addEventListener('click', (e) => {
            allergeneData = allergeneData.filter((item) => item == deleteAllergene.textContent);
            deleteAllergene.parentNode.removeChild(deleteAllergene)
        })
    })
}

async function init() {
    data = await getData();
}

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
        .slice(0,5)
}

function createAllergeneSearch(text) {
    let containSearchResult = document.querySelector('.contain-search-result');
    containSearchResult.innerHTML += `<p class="divSearch">${text}</p>`;
}


searchInput.addEventListener('input', function () {
    let dataSort = sortData(searchInput.value)
    document.querySelector('.contain-search-result').innerHTML = "";
    dataSort.forEach(data => {
        createAllergeneSearch(data.name);
    })
    let searchDiv = document.querySelectorAll('.divSearch')
    searchDiv.forEach(searchInput => {
        searchInput.addEventListener('click', () => {
            createTagAllergene(searchInput.textContent);
            document.querySelector('.contain-search-result').innerHTML = "";
            searchInput.value = ""
        })
    })
});

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
    stepTitle.textContent = stepsTitle[currentStep];
    stepProgress.style.width = stepsProgress[currentStep];
    numbersProgress.forEach((number, index) => {
        index++;
        if (index <= currentStep) {
            number.classList.remove('bg-[#FFF7EB]', 'text-[#0E2F46]');
            number.classList.add('bg-[#0E2F46]', 'text-[#FFF7EB]');
        }
    });

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
    });
}


init()

updateStepFocus();

nextStepBtn.addEventListener('click', () => {
    const next = currentStep + 1;
    if (next === 3) {
        setButtonDisabled(false, nextStepBtn, submitButton);
    }
    const nextSlide = document.querySelector(`[data-step="${next}"]`);

    if (nextSlide) {
        currentStep = next;
        updateStepFocus();
        nextSlide.scrollIntoView({behavior: 'smooth', inline: 'start'});
    }
});


window.addEventListener('resize', () => {
    const nextSlide = document.querySelector(`[data-step="${currentStep}"]`);
    nextSlide.scrollIntoView({behavior: 'smooth', inline: 'start'});
})
