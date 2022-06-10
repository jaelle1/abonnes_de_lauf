let timeout=document.getElementById(timeout);

function myFunction() {
  timeout = setTimeout(alertFunc, 3000);
}

function alertFunc() {
timeout.style.display="none";
}