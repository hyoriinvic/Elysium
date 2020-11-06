function valueChange() {
  let button = document.getElementById('select1');
  if (button.value === "1") {
    button.style.backgroundColor = "#a8a9ad";
    button.value = "0";
  } else {
    button.style.backgroundColor = "#9d1c20";
    button.value = "1";
  }
  console.log(button.value)
}
