var indexValue = 0;
function slideShow() {
  setTimeout(slideShow, 2500);
  var x;
  const img = document.querySelectorAll("img");
  for (x = 0; x < img.length; x++) {
    img[x].style.display = "none";
  }
  indexValue++;
  if (indexValue > img.length) { indexValue = 1 }
  img[indexValue - 1].style.display = "block";
}
slideShow()

function validateIme() {
  var nameValue = ime.value;
  var regexp = /\b[^\d\s]+\b/g;
  var count = 0;
  while (regexp.exec(nameValue)) ++count;
  if (count > 1) {

    alert('Ime ne može imati više od 1 reči');
  } else if (count < 1) {

    alert('Ime mora imati makar jednu reč');
  } else {

  }



}
function validatePrezime() {
  var surnameValue = prezime.value;
  var regexp = /\b[^\d\s]+\b/g;
  var count = 0;
  while (regexp.exec(surnameValue)) ++count;
  if (count > 1) {

    alert('Prezime ne može imati više od 1 reči');
  } else if (count < 1) {

    alert('Prezime mora imati makar jednu reč');
  } else {

  }

}
function proveraBroja() {
  var nameValue = ime.value;
  var surnameValue = prezime.value;
  var regexp = /\b[^\d\s]+\b/g;
  var count = 0;
  while (regexp.exec(nameValue)) ++count;


  if (/\d/.test(ime.value)) {
    alert('Ime ne može sadržati broj');




  } else {

  }

  if (/\d/.test(prezime.value)) {
    alert('Prezime ne može sadržati broj');




  } else {

  }

}
function duzinaTeksta() {
  var textBox = document.getElementById("tekst");
  var textLength = textBox.value.length;
  if (textLength > 200) {
    alert('Vaš tekst je predugačak! Maksimalan unos je 20 karaktera!');
    textBox.style.backgroundColor = "#FF0000";
  }
  else if (20 < textLength > 200) {

    textBox.style.backgroundColor = "#00FF00";
  }
}



function validacijaTelefona(telefon) {
  var originalPhoneNumber = telefon.value;
  var phoneRe = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
  var digits = telefon.replace(/\D/g, "");
  return phoneRe.test(digits);
}
