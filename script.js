document.addEventListener("DOMContentLoaded", function () {
  const alertBox = document.getElementById("alert-box");

  if (alertBox) {
      setTimeout(() => {
          alertBox.classList.remove("show"); 
          alertBox.classList.add("fade");   
          setTimeout(() => alertBox.remove(), 500);
      }, 5000);
  }
});