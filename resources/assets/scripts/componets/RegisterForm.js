const RegisterForm = () => {
  // select elements

  const submitButton = document.querySelector('#gform_submit_button_4');
  //login
  const loginElement = document.querySelector('#field_4_2');
  const eloginElement = document.createElement('div');
  eloginElement.innerHTML =
    '<div id="validation_message_not_thesame_login" class="gfield_description validation_message" aria-live="polite">Login i mail różnią się</div>';
  // powtorz
  const powtozElement = document.querySelector('#field_4_3');
  const epowtorzElement = document.createElement('div');
  epowtorzElement.innerHTML =
    '<div id="validation_message_not_thesame_login" class="gfield_description validation_message" aria-live="polite">Login i mail różnią się</div>';
  if (submitButton) {
    submitButton.addEventListener('click', (event) => {
      const TwojLogin = document.querySelector('#input_4_2');
      const Powtozlogin = document.querySelector('#input_4_3');
      if (TwojLogin.value !== Powtozlogin.value) {
        event.preventDefault();
        loginElement.classList.add('gfield_error');
        loginElement.appendChild(eloginElement);
        powtozElement.appendChild(epowtorzElement);
      }
    });
  }
};

export default RegisterForm;
