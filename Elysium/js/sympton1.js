// 여기서 해야하는 건 체크된 값들만 받아서 DB로 넘겨주는 것

// 1. 체크박스의 체크된 값만 가져오는 함수 작성 
function selectCheckedRow() {
    var chk = document.getElementsByClassName("checkbox-container"); // 체크박스객체를 담는다
    var len = chk.length;    //체크박스의 전체 개수
    var checkRow = '';      //체크된 체크박스의 value를 담기위한 변수
    var checkCnt = 0;        //체크된 체크박스의 개수   
    var checkLast = '';      //체크된 체크박스 중 마지막 체크박스의 인덱스를 담기위한 변수
    var rowid = '';             //체크된 체크박스의 모든 value 값을 담는다
    var cnt = 0;

    for (var i = 0; i < len; i++) {
        if (chk[i].checked == true) {
            checkCnt++;        //체크된 체크박스의 개수
            checkLast = i;     //체크된 체크박스의 인덱스
        }
    }

    for (var i = 0; i < len; i++) {
        if (chk[i].checked == true) {  //체크가 되어있는 값 구분
            checkRow = chk[i].value;

            if (checkCnt == 1) {                            //체크된 체크박스의 개수가 한 개 일때,
                rowid += "'" + checkRow + "'";        //'value'의 형태 (뒤에 ,(콤마)가 붙지않게)
            } else {                                            //체크된 체크박스의 개수가 여러 개 일때,
                if (i == checkLast) {                     //체크된 체크박스 중 마지막 체크박스일 때,
                    rowid += "'" + checkRow + "'";  //'value'의 형태 (뒤에 ,(콤마)가 붙지않게)
                } else {
                    rowid += "'" + checkRow + "',";	 //'value',의 형태 (뒤에 ,(콤마)가 붙게)         			
                }
            }

            cnt++;
            checkRow = '';    //checkRow초기화.
        }

        alert(rowid);    //'value1', 'value2', 'value3' 의 형태로 출력된다.
    }
}