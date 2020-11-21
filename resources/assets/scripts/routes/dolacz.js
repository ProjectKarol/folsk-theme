// import _ from 'lodash'
export default {
  init() {
    const category = [];
    // select elements on form
    const categoriseList = document.querySelectorAll(
      'div.af-input.acf-input > div > div > ul > li input'
    );
    const socialMediaList = document.querySelectorAll(
      '.social-media-group input'
    );
    const imageInputUploader = document.querySelector(
      '.acf-field-5e5269641b12b > div.af-input.acf-input > div input'
    );

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
        console.log('socialmedia', socialItem.value);
        // if (categoryItem.checked) {
        //   category.push(categoryItem.value);
        // }
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

          validateFunction();

          if (category.length === 1) {
            categoryErrorDiv.style.display = 'none';
          }

          if (category.length === 0) {
            categoryErrorDiv.style.display = 'block';
          }
        });
      }
    };

    const validateFunction = () => {
      const submitButton = document.querySelector('.acf-form-submit button');
      const XHR = new XMLHttpRequest();
      submitButton.addEventListener('click', (e) => {
        XHR.setRequestHeader('X-WP-Nonce', 'universityData.nonce')
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
    };

    const validateImageUploader = () => {
      const imageUploader = document.getElementById('acf-field_5e5269641b12b');
      imageUploader.addEventListener('click', () => {
        imageErrorDiv.style.display = 'none';
      });
    };

    // init on load

    // init functions
    loadSocialMediaOnLoad();
    loadCategoryOnLoad();
    validateImageUploader();
    validateFunction();
    validateCategories();
  },
};
