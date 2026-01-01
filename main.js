

const authModal=document.querySelector(".auth-modal");
const loginLink=document.querySelector(".login-link");
const registerlink=document.querySelector(".register-link");



registerlink.addEventListener("click",()=>
      authModal.classList.add("slide"));
loginLink.addEventListener("click",()=> authModal.classList.remove('slide'));