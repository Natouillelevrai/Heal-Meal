const steps = document.querySelectorAll('[data-step]');
const stepTitle = document.querySelector('#stepTitle');
const stepsTitle = ['', "Qui êtes-vous ?", "Information Utilisateur", "Une dernière chose"]

const numbersProgress = document.querySelectorAll('.number-progress');
const stepProgress = document.querySelector('#stepProgress');
const stepsProgress = ['', '1%', '50%', '95%'];

const nextStepBtn = document.querySelector('#nextStep');
const submitButton = document.querySelector('#validate-form');

let currentStep = 1;

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
    nextSlide.scrollIntoView({ behavior: 'smooth', inline: 'start' });
  }
});

window.addEventListener('resize', () => {
  const nextSlide = document.querySelector(`[data-step="${currentStep}"]`);
  nextSlide.scrollIntoView({ behavior: 'smooth', inline: 'start' });
})
