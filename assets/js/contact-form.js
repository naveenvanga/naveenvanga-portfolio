(function() {
  "use strict";

  const form = document.querySelector('.php-email-form');
  if (!form) {
    return;
  }

  const loadingIndicator = form.querySelector('.loading');
  const errorMessageEl = form.querySelector('.error-message');
  const sentMessageEl = form.querySelector('.sent-message');

  const serviceId = form.dataset.emailjsService;
  const templateId = form.dataset.emailjsTemplate;
  const publicKey = form.dataset.emailjsPublicKey;

  let emailJsInitialized = false;

  function showLoading() {
    loadingIndicator?.classList.add('d-block');
    errorMessageEl?.classList.remove('d-block');
    sentMessageEl?.classList.remove('d-block');
  }

  function hideLoading() {
    loadingIndicator?.classList.remove('d-block');
  }

  function showError(message) {
    hideLoading();
    if (!errorMessageEl) return;
    errorMessageEl.innerHTML = message;
    errorMessageEl.classList.add('d-block');
  }

  function showSuccess(message) {
    hideLoading();
    if (!sentMessageEl) return;
    sentMessageEl.textContent = message || 'Your message has been sent. Thank you!';
    sentMessageEl.classList.add('d-block');
  }

  form.addEventListener('submit', async (event) => {
    event.preventDefault();

    if (!serviceId || !templateId || !publicKey) {
      showError('EmailJS configuration is missing. Please provide service, template, and public key data attributes.');
      return;
    }

    if (typeof emailjs === 'undefined') {
      showError('EmailJS library failed to load. Please check your network connection.');
      return;
    }

    try {
      showLoading();

      if (!emailJsInitialized) {
        emailjs.init(publicKey);
        emailJsInitialized = true;
      }

      const formData = new FormData(form);
      const submission = Object.fromEntries(formData.entries());

      await emailjs.send(serviceId, templateId, submission);

      showSuccess(form.dataset.emailjsSuccessMessage);
      form.reset();
    } catch (err) {
      const message = err?.text || err?.message || 'Failed to send message. Please try again later.';
      showError(message);
    }
  });
})();
