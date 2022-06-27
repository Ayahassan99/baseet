
function change() {
  var slc = document.getElementById("mySelect").value;

  document.getElementById("viewalex").style.visibility= "visible";
  }
  function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("text");
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
       text.style.display = "none";
    }
  }