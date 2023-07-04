const forms = document.querySelector(".forms"),
      pwShowHide = document.querySelectorAll(".eye-icon"),
      links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", ()=> {
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
        
        pwShowHide.forEach((eyeIcon) => {
            eyeIcon.addEventListener("click", () => {
              let pwFields = eyeIcon.closest(".forms").querySelectorAll(".password");
          
              pwFields.forEach((password) => {
                if (password.type === "password") {
                  password.type = "text";
                  eyeIcon.classList.remove("bx-hide");
                  eyeIcon.classList.add("bx-show");
                } else {
                  password.type = "password";
                  eyeIcon.classList.remove("bx-show");
                  eyeIcon.classList.add("bx-hide");
                }
              });
            });
          });
        
    })
})

links.forEach(link => {
    link.addEventListener("click", e => {
        e.preventDefault();
        forms.classList.toggle("show-signup");
    })
});
