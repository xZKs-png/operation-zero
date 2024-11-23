const container = document.querySelector('.container');
const signupButton = document.querySelector('.inscricao-selecao header');
const loginButton = document.querySelector('.login-selecao header');

loginButton.addEventListener('click', () => {
    container.classList.add('active');
})

signupButton.addEventListener('click', () => {
    container.classList.remove('active');
})