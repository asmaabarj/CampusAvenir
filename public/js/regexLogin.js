// Regex Email



document.getElementById('email').addEventListener('input', function() {
    const nomValue = this.value;
    const nomstyle = this;
    const regexnom = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
  
    nomstyle.classList.remove('border-gray-300', 'border-red-300', 'border-green-300' );  
    if (!regexnom.test(nomValue)) {
      nomstyle.classList.add('border-red-300');
      nomstyle.classList.add('focus:border-red-600');

      showError('errorMessage2');
    } else {
      nomstyle.classList.add('border-green-300');
      nomstyle.classList.add('focus:border-green-600');

      hideError('errorMessage2');
    }
  });
// Regex password



document.getElementById('password').addEventListener('input', function() {
    const nomValue = this.value;
    const nomstyle = this;
    const regexPassword = /^.{5,}$/;
  
    nomstyle.classList.remove('border-gray-300', 'border-red-300', 'border-green-300' );  
    if (!regexPassword.test(nomValue)) {
      nomstyle.classList.add('border-red-300');
      nomstyle.classList.add('focus:border-red-600');

      showError('errorMessage3');
    } else {
      nomstyle.classList.add('border-green-300');
      nomstyle.classList.add('focus:border-green-600');

      hideError('errorMessage3');
    }
  });


  //   invalide messages


function showError(errorId) {
    const errorElement = document.getElementById(errorId);
    errorElement.classList.remove('hidden');
    errorElement.classList.add('block');

  }
  
  function hideError(errorId) {
    const errorElement = document.getElementById(errorId);
    errorElement.classList.add('hidden');
  }