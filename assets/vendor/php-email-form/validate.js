/**
* PHP Email Form Validation - v3.11
* URL: https://bootstrapmade.com/php-email-form/
* Author: BootstrapMade.com
*/
(function () {
  "use strict";

  let forms = document.querySelectorAll('.php-email-form');

  forms.forEach( function(e) {
    e.addEventListener('submit', function(event) {
      event.preventDefault();

      let thisForm = this;

      let action = thisForm.getAttribute('action');
      let recaptcha = thisForm.getAttribute('data-recaptcha-site-key');
      
      if( ! action ) {
        displayError(thisForm, 'The form action property is not set!');
        return;
      }
      thisForm.querySelector('.loading').classList.add('d-block');
      thisForm.querySelector('.error-message').classList.remove('d-block');
      thisForm.querySelector('.sent-message').classList.remove('d-block');

      let formData = new FormData( thisForm );

      if ( recaptcha ) {
        if(typeof grecaptcha !== "undefined" ) {
          grecaptcha.ready(function() {
            try {
              grecaptcha.execute(recaptcha, {action: 'php_email_form_submit'})
              .then(token => {
                formData.set('recaptcha-response', token);
                php_email_form_submit(thisForm, action, formData);
              })
            } catch(error) {
              displayError(thisForm, error);
            }
          });
        } else {
          displayError(thisForm, 'The reCaptcha javascript API url is not loaded!')
        }
      } else {
        php_email_form_submit(thisForm, action, formData);
      }
    });
  });

  function php_email_form_submit(thisForm, action, formData) {
    fetch(action, {
      method: 'POST',
      body: formData,
      headers: {'X-Requested-With': 'XMLHttpRequest'}
    })
    .then(async response => {
      const rawText = await response.text();
      let payload = rawText;
      try {
        payload = rawText ? JSON.parse(rawText) : {};
      } catch (_) {
        // Leave payload as raw text if JSON parse fails
      }

      if (response.ok) {
        return payload;
      }

      const errorMessage = typeof payload === 'object' && payload !== null
        ? (payload.message || JSON.stringify(payload))
        : rawText || `${response.status} ${response.statusText}`;
      throw new Error(errorMessage);
    })
    .then(data => {
      thisForm.querySelector('.loading').classList.remove('d-block');

      if (typeof data === 'object' && data !== null) {
        if (data.success) {
          thisForm.querySelector('.sent-message').textContent = data.message || 'Your message has been sent. Thank you!';
          thisForm.querySelector('.sent-message').classList.add('d-block');
          thisForm.reset();
          return;
        }
        throw new Error(data.message || 'Form submission failed without a message.');
      }

      if (typeof data === 'string' && data.trim() === 'OK') {
        thisForm.querySelector('.sent-message').classList.add('d-block');
        thisForm.reset();
        return;
      }

      throw new Error(data || 'Form submission failed and no error message returned from: ' + action);
    })
    .catch((error) => {
      displayError(thisForm, error);
    });
  }

  function displayError(thisForm, error) {
    thisForm.querySelector('.loading').classList.remove('d-block');
    thisForm.querySelector('.error-message').innerHTML = error;
    thisForm.querySelector('.error-message').classList.add('d-block');
  }

})();
