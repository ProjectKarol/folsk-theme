// import _ from 'lodash'
import RegisterForm from '../componets/RegisterForm';
import trimInput from '../componets/dolacz/trim_inputs';
import emailErrorMessage from '../componets/dolacz/errorMessages';
export default {
  init() {
    const category = [];
    const socialLinks = [];
    // select elements on form
    const categoriseList = document.querySelectorAll(
      'div.af-input.acf-input > div > div > ul > li input'
    );

    const socialMediaList = document.querySelectorAll(
      '.social-media-group input'
    );
    const socialErrors = document.querySelector('#form_5e5143d80de43 > div > div.af-field.af-field-type-message.af-field-.acf-field.acf-field-message.acf-field-5e526cc4aaa63 > div.af-label.acf-label > label');

    // const socialMediaLinks = document.querySelectorAll('.acf-field-url');
    const imageInputUploader = document.querySelector(
      '.acf-field-5e5269641b12b > div.af-input.acf-input > div input'
    );
    const imageUploader = document.getElementById('acf-field_5e5269641b12b');
    const submitButton = document.querySelector('.acf-form-submit button');

    // select error div messages
    const imageErrorDiv = document.querySelector('.custom-error-image-acf');
    const categoryErrorDiv = document.querySelector('.custom-error-acf');

    // load category on load
    const loadCategoryOnLoad = () => {
      for (const categoryItem of categoriseList) {
        // category.push(event.target.value);

        if (categoryItem.checked) {
          category.push(categoryItem.value);
        }
      }
    };

    // load social media on load
    const loadSocialMediaOnLoad = () => {
      for (const socialItem of socialMediaList) {
        // category.push(event.target.value);
        if (socialItem.value.length > 0 ) {
          socialLinks.push(socialItem.id);
        }

        socialItem.addEventListener('keyup', function (event) {
          //...
          let SocialValue = event.target.id;

          if (!socialLinks.includes(SocialValue)) {
              socialLinks.push(event.target.id);
          } if (event.target.value < 1){
            let carIndex = socialLinks.indexOf(SocialValue); //get  "car" index
            socialLinks.splice(carIndex, 1);
          }

          validateSubmitButton();

          if (socialLinks.length === 0) {
            socialErrors.appendChild(emailErrorMessage);
          }
          if (socialLinks.length > 0) {
            if(socialErrors.childNodes.length === 2){
              socialErrors.removeChild(emailErrorMessage);
            }
          }
        });
      }
    };

    // JavaScript to be fired on the about us page
    const validateCategories = () => {
      const buttons = document.querySelectorAll(
        'div.af-input.acf-input > div > div > ul > li input'
      );

      for (const button of buttons) {
        button.addEventListener('click', function (event) {
          //...
          let categoryValue = event.target.value;

          if (!category.includes(categoryValue)) {
            if (category.length > 2) {
              event.preventDefault();
            } else {
              category.push(event.target.value);
            }
          } else {
            let carIndex = category.indexOf(categoryValue); //get  "car" index
            category.splice(carIndex, 1);
          }

          validateSubmitButton();

          if (category.length === 1) {
            categoryErrorDiv.style.display = 'none';
          }

          if (category.length === 0) {
            categoryErrorDiv.style.display = 'block';
          }
        });
      }
    };

    const validateSubmitButton = () => {
      if (submitButton) {
        submitButton.addEventListener('click', (e) => {

          if (socialLinks.length === 0) {
            socialErrors.appendChild(emailErrorMessage);
            socialErrors.scrollIntoView({
              behavior: 'smooth',
              block: 'center',
              inline: 'nearest',
            });
            e.preventDefault();
          }

          if (category.length === 0) {
            categoryErrorDiv.style.display = 'block';
            e.preventDefault();
          }

          if (imageInputUploader.value == false) {
            imageErrorDiv.style.display = 'block';
            imageErrorDiv.scrollIntoView({
              behavior: 'smooth',
              block: 'center',
              inline: 'nearest',
            });
            e.preventDefault();
          }
        });
      }

    };

    const validateImageUploader = () => {
      if (imageUploader) {
        imageUploader.addEventListener('click', () => {
          imageErrorDiv.style.display = 'none';
        });
      }
    };

    // init on load

    // init functions
    loadSocialMediaOnLoad();
    loadCategoryOnLoad();
    validateImageUploader();
    validateSubmitButton();
    validateCategories();
    RegisterForm();
    trimInput();
  },
};
