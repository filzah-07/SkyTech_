// signup/login page
const formOpenBtn = document.querySelector("#form-open"),
  home = document.querySelector(".home"),
  formContainer = document.querySelector(".form_container"),
  formCloseBtn = document.querySelector(".form_close"),
  signupBtn = document.querySelector("#signup"),
  loginBtn = document.querySelector("#login"),
  pwShowHide = document.querySelectorAll(".pw_hide");

formOpenBtn.addEventListener("click", () => home.classList.add("show"));
formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

pwShowHide.forEach((icon) => {
  icon.addEventListener("click", () => {
    let getPwInput = icon.parentElement.querySelector("input");
    if (getPwInput.type === "password") {
      getPwInput.type = "text";
      icon.classList.replace("uil-eye-slash", "uil-eye");
    } else {
      getPwInput.type = "password";
      icon.classList.replace("uil-eye", "uil-eye-slash");
    }
  });
});

signupBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.add("active");
});
loginBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.remove("active");
});

//editRow dataset
function editRow(id) {
  // Open a popup window for editing
  var popupWindow = window.open('editPopup.php?id=' + id, 'Edit Row', 'width=500,height=500');
  popupWindow.focus();
}

// deleteRow dataset
function deleteRow(columnName, id) {
  var confirmation = confirm("Are you sure you want to delete this row?");
  if (confirmation) {
      var form = document.createElement('form');
      form.method = 'post';
      form.action = '';

      var columnNameField = document.createElement('input');
      columnNameField.type = 'hidden';
      columnNameField.name = 'columnName';
      columnNameField.value = columnName;

      var idField = document.createElement('input');
      idField.type = 'hidden';
      idField.name = 'id';
      idField.value = id;

      var deleteField = document.createElement('input');
      deleteField.type = 'hidden';
      deleteField.name = 'delete';
      deleteField.value = 'true';

      form.appendChild(columnNameField);
      form.appendChild(idField);
      form.appendChild(deleteField);

      document.body.appendChild(form);
      form.submit();
  }
}