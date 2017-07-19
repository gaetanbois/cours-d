function check() {
  var inputs = document.querySelectorAll("input[type=checkbox]:checked");
  for (var input of inputs) {
    console.log(input.checked);
  }
  if (inputs.length == 4) {
    alert("Vous pouvez partir en vacance");
  } else {
    alert("Vous avez oublié quelque chose !");
  }
}

// var inputs = document.getElementsByTagName("input").checked;
//
//   for (var inputs of input);{
//   console.log(input.checked);
//   }
// }
//
//
// input = document.getElementsByClassName('checkedlist-item');
//
// for (var inputs of input) {
//   console.log(input.checked);
// }
//
//
// input = document.querySelectorAll("div label input.checkedlist-item");
//
// for (var inputs of input) {
//   console.log(input.checked);
// }
