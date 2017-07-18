"use strict";

var myArray = [123, 42, 3.14, 100,1 ,-2];

// boucle for avec un index
for (var i = 0; i < myArray.length; i++) {
  console.log(myArray[i]);
}

// boucle for en commencant par la fin
for (var i = myArray.length - 1; i >= 0; i--) {
  console.log(myArray[i]);
}

for (var i in myArray) {
  console.log(myArray[i]);
}

for (var value of myArray) {
  console.log(value);
  }


for (var i = 0; i < myArray.length; i++) {
  if (myArray[i] > 50) {
    console.log(myArray[i]);
  }
}

for (var i = 0; i < myArray.length; i++) {
  if (myArray[i] > 0 && myArray[i] < 50) {
    console.log(myArray[i]);
  }
}

for (var value of myArray) {
  if (Number.isInteger(value)) {
  console.log(value);
  }
}

for (var value of myArray) {
  if (value - Math.round(value) != 0){
    console.log(value);
  }
}
