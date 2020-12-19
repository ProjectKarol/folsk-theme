const trimInput = () => {
  let phone = document.getElementById('acf-field_5fa680c6acc7a');
  let fbLiczbaObserwujących = document.getElementById(
    'acf-field_5f9c4d1df8eeb-field_5f9c48382e528'
  );
  let inLiczbaObserwujących = document.getElementById(
    'acf-field_5f9c522b25a7d-field_5f9c4af14b9c4'
  );
  let YtLiczbaObserwujących = document.getElementById(
    'acf-field_5f9c54501f3ca-field_5fb146dc182f3'
  );
  let SnLiczbaObserwujących = document.getElementById(
    'acf-field_5f9c54cb447f6-field_5f9c4b3a4b9c5'
  );
  let TwLiczbaObserwujących = document.getElementById(
    'acf-field_5f9c5516447f7-field_5f9c4bbe4b9c6'
  );
  let LnLiczbaObserwujących = document.getElementById(
    'acf-field_5f9c554c447f8-field_5f9c4be14b9c7'
  );

  const preventTypingLetters = (val) => {
    if (val) {
      val.addEventListener('keypress', (e) => {
        e = e || window.event;
        var charCode = typeof e.which == 'undefined' ? e.keyCode : e.which;
        var charStr = String.fromCharCode(charCode);
        console.log(charStr);
        if (!charStr.match(/^[0-9]+$/)) e.preventDefault();
      });
    }
  };

  preventTypingLetters(phone);
  preventTypingLetters(fbLiczbaObserwujących);
  preventTypingLetters(inLiczbaObserwujących);
  preventTypingLetters(YtLiczbaObserwujących);
  preventTypingLetters(YtLiczbaObserwujących);
  preventTypingLetters(SnLiczbaObserwujących);
  preventTypingLetters(TwLiczbaObserwujących);
  preventTypingLetters(LnLiczbaObserwujących);
};

export default trimInput;
