<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'autoset';
    $dbName = 'kyunghee';
    $connect = new mysqli($host, $user, $pw, $dbName);

    if($connect -> connect_errno){
        die("Connect Error: ".$connect -> connect_error);
    }
?>

<a href="registraion.php">회원가입</a>
<br>

<table border=1>
<tr>
    <th>성명</th>
    <th>전화번호</th>
    <th>우편번호 + 주소</th>
    <th>상세 주소</th>
    <th>참고 주소</th>
    <th>주민등록번호</th>
    <th>추천자</th>
</tr>

<?php
$query = "SELECT * FROM patient_db";
$result = $connect->$query($query) or die("select error: $connect->error");

while($row = $result->fetch_object()){
?>
<tr>
    <td> <?php echo $row->join_patientName ?></td>
    <td> <?php echo $row->join_patientTel ?></td>
    <td> <?php echo $row->join_addressSearch ?></td>
    <td> <?php echo $row->join_addressDetail ?></td>
    <td> <?php echo $row->join_addressExtra ?></td>
    <td> <?php echo $row->join_juminNumber ?></td>
    <td> <?php echo $row->join_recommendPatient ?></td>
</tr>

}
?>
