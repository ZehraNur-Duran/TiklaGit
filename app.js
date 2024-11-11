const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container0 = document.querySelector(".container0");

sign_up_btn.addEventListener("click", () => {
  container0.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container0.classList.remove("sign-up-mode");
});