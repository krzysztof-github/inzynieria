const login = document.getElementById('login')
const password = document.getElementById('password')
const password2 = document.getElementById('password2')
const form = document.querySelector('.form1')
const errorElement = document.getElementById('error')
const span = document.createElement("span");
const ul = document.querySelector(".errorList")


form.addEventListener('submit', (e) => {

  e.preventDefault();
  let messages = []
  if (login.value === '' || login.value == null) {

    messages.push('Pole z loginem nie może być puste')
  }

  if (login.value.length <= 3) {
    messages.push('Login musi mieć conajmniej 4 znaki')
  }

  if (login.value.length >= 21) {
    messages.push('Login może mieć maksymalnie 20 znaków')
  }

  if (password.value === '' || password.value == null) {
    messages.push('Pole z hasłem nie może być puste')
  }

  if (password.value.length <= 5) {
    messages.push('Hasło musi mieć conajmniej 6 znaków')
  }

  if (password.value.length >= 21) {
    messages.push('Hasło może mieć maksymalnie 20 znaków')
  }

  if (password.value === 'hasło' || password.value == 'haslo' || password.value == 'Haslo' || password.value == 'Haslo') {
    messages.push('Słowo "hasło" nie może być hasłem')
  }

  if (password.value !== password2.value) {
    messages.push('Hasła muszą być identyczne')
  }

  ul.innerHTML = `${messages.map(el => `<li>${el}</li>`).join("")}`

})