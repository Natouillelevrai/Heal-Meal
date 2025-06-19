const steps = document.querySelectorAll('[data-step]');
const numbersProgress = document.querySelectorAll('.number-progress');
const nextStepBtn = document.querySelector('#nextStep');
const stepTitle = document.querySelector('#stepTitle');
const stepProgress = document.querySelector('#stepProgress');

let currentStep = 1;
const stepsTitle = [
  '',
  "Qui êtes-vous ?",
  "Information Utilisateur",
  "Une derniière chose"
]

const stepsProgress = [
  '',
  '1%',
  '50%',
  '95%'
];

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
