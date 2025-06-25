function validateField(name, value) {
  let valid = true;
  const field = document.querySelector(`input[name="${name}"], select[name="${name}"]`);

  // Réinitialiser les classes d'erreur
  field.classList.remove('border-red-500');

  if (name === 'email') {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(value)) {
      valid = false;
      field.classList.add('border-red-500');
      document.querySelector('.error-email').textContent = "Veuillez entrer une adresse email valide.";
    } else {
      document.querySelector('.error-email').textContent = ""; // Clear error message
    }
  } else if (name === 'verify-password') {
    const password = document.querySelector('input[name="password"]').value.trim();
    if (value !== password || value === '') {
      valid = false;
      field.classList.add('border-red-500');
      document.querySelector('.error-password_confirmation').textContent = "Les mots de passe ne correspondent pas.";
    } else {
      document.querySelector('.error-password_confirmation').textContent = ""; // Clear error message
    }
  } else {
    if (!value || value.length < 3) {
      valid = false;
      field.classList.add('border-red-500');
      document.querySelector(`.error-${name}`).textContent = "Ce champ doit contenir au moins 3 caractères.";
    } else {
      document.querySelector(`.error-${name}`).textContent = ""; // Clear error message
    }
  }

  return valid;
}

function showErrorFields(key, value) {
  const field = document.querySelector(`input[name="${key}"], select[name="${key}"]`);

  // Réinitialiser les classes d'erreur
  field.classList.remove('border-red-500');

  document.querySelector(`.error-${key}`).textContent = value;
}

export { validateField, showErrorFields };