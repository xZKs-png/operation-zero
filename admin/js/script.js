const container = document.querySelector('.container');
const signupButton = document.querySelector('.inscricao-selecao header');
const loginButton = document.querySelector('.login-selecao header');

loginButton.addEventListener('click', () => {
    container.classList.add('active');
})

signupButton.addEventListener('click', () => {
    container.classList.remove('active');
})

document.getElementById("google-login").addEventListener("click", function () {
    window.location.href = "https://accounts.google.com/o/oauth2/auth?client_id=SEU_CLIENT_ID&redirect_uri=SUA_REDIRECT_URI&response_type=code&scope=email profile";
});

document.getElementById("apple-login").addEventListener("click", function () {
    window.location.href = "https://appleid.apple.com/auth/authorize?client_id=SEU_CLIENT_ID&redirect_uri=SUA_REDIRECT_URI&response_type=code&scope=name email";
});

document.getElementById("google-login").addEventListener("click", function () {
    window.location.href = "https://accounts.google.com/o/oauth2/auth?" +
        "client_id=SEU_CLIENT_ID" +
        "&redirect_uri=SUA_REDIRECT_URI" +
        "&response_type=code" +
        "&scope=email%20profile";
});

document.getElementById("apple-login").addEventListener("click", function () {
    window.location.href = "https://appleid.apple.com/auth/authorize?" +
        "client_id=SEU_CLIENT_ID" +
        "&redirect_uri=SUA_REDIRECT_URI" +
        "&response_type=code" +
        "&scope=name%20email";
});
