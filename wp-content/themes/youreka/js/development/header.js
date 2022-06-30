document.addEventListener("DOMContentLoaded", function () {
  var button = document.getElementById("primaryNav__toggler");
  var mobile_menu = document.getElementById("primaryNav__mobile");
  function handlePrimaryMenuToggle() {
    if (button && mobile_menu) {
      if (button.classList.contains("active")) {
        button.classList.remove("active");
      } else {
        button.classList.add("active");
      }
      if (mobile_menu.classList.contains("active")) {
        mobile_menu.classList.remove("active");
      } else {
        mobile_menu.classList.add("active");
      }
    }
  }
  button.addEventListener("click", handlePrimaryMenuToggle);
});
