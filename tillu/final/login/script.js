const formOpenBtn = document.querySelector("#form-open"),
  home = document.querySelector(".home"),
  before_otp=document.querySelector(".before_otp"),
  formContainer = document.querySelector(".form_container"),
  formCloseBtn = document.querySelector(".form_close"),
  header= document.querySelector(".header"),
  signupBtn = document.querySelector("#signup"),
  loginBtn = document.querySelector("#login"),
  pwShowHide = document.querySelectorAll(".pw_hide");
  //home.classList.add("show")
  function set()
  {
  before_otp.style.display="block";}
  // formOpenBtn.addEventListener("click", () => home.style.display="block");
//formOpenBtn.addEventListener("click", () => home.classList.add("show"));
// formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

// pwShowHide.forEach((icon) => {
//   icon.addEventListener("click", () => {
//     let getPwInput = icon.parentElement.querySelector("input");
//     if (getPwInput.type === "password") {
//       getPwInput.type = "text";
//       icon.classList.replace("uil-eye-slash", "uil-eye");
//     } else {
//       getPwInput.type = "password";
//       icon.classList.replace("uil-eye", "uil-eye-slash");
//     }
//   });
// });

signupBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.add("active");
});
loginBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.remove("active");
});
