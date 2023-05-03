const input = document.querySelector('input#username');
const submitBtn = document.querySelector('input#submit');

submitBtn.addEventListener('click', () => {
  if (input.value == '') {
    alert('username must not be empty');
  }
});
