var changeInput = document.querySelector('.js-check-change');

changeInput.onchange = function() {
  document.getElementById('js-display-change').innerHTML = changeInput.value;
};