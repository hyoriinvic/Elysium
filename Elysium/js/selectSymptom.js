// sympton1.php 의 버튼들에 대한 valueChange 함수
// 크기가 큰 버튼
function valueChange1() {
  let btn1 = document.getElementsByClassName('btn1');

  for (var i = 0; i < btn1.length; i++) {
    console.log($(btn1[i]).is(":checked"));
    if ($(btn1[i]).is(":checked") == true) {
      if (btn1[i].value === "1") {
        btn1[i].value = "0";
      } else {
        btn1[i].value = "1";
      }
    }
    console.log(btn1[i].value);
  }
}

// 크기가 작은 버튼(음주, 흡연 2개)
function valueChange2() {
  let btn2 = document.getElementsByClassName('btn2');
  if (btn2.value === "1") {
    btn2.value = "0";
  } else {
    btn2.value = "1";
  }
  // console.log(btn2.value)
}

// sympton2.php 의 버튼들에 대한 valueChange 함수
// 전신 및 얼굴 관련 작은 버튼
function valueChange3() {
  let btn3 = document.getElementsByClassName('small-btn');
  if (btn3.value === "1") {
    btn3.value = "0";
  } else {
    btn3.value = "1";
  }
  console.log(btn3.value)
}

//기타 버튼
function valueChange4() {
  let btn4 = document.getElementById('else');
  if (btn4.value === "1") {
    btn4.value = "0";
  } else {
    btn4.value = "1";
  }
  console.log(btn4.value)
}