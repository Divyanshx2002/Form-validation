
document.querySelector('#mainform').addEventListener('submit', function(e){
  let pass1 = document.querySelector('.password11').value;
  let pass2 = document.querySelector('.password22').value;
  if (pass1 != pass2) {
    alert("Password did not Match");
    e.preventDefault();
  } else {
    alert("Password generated");
  }
});
