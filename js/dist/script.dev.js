"use strict";

var forms = document.querySelector(".forms"),
    pwShowHide = document.querySelectorAll(".eye-icon"),
    links = document.querySelectorAll(".link");
pwShowHide.forEach(function (eyeIcon) {
  eyeIcon.addEventListener("click", function () {
    var pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
    pwShowHide.forEach(function (eyeIcon) {
      eyeIcon.addEventListener("click", function () {
        var pwFields = eyeIcon.closest(".forms").querySelectorAll(".password");
        pwFields.forEach(function (password) {
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
  });
});
links.forEach(function (link) {
  link.addEventListener("click", function (e) {
    e.preventDefault();
    forms.classList.toggle("show-signup");
  });
});
//# sourceMappingURL=script.dev.js.map
