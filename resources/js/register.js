const steps = document.querySelectorAll('[data-step]');
const nextStepBtn = document.querySelector('#nextStep');

let currentStep = 1;

function updateStepFocus() {
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
