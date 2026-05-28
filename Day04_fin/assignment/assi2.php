<?php

    header("Content-Type:text/html; charset=utf-8");

    $user_name = $_GET['user_name'];
    $phone_number = $_GET['phone_number'];
    $field = $_GET['field'];
    $motive = $_GET['motive'];

    $now = date('Y-m-d H:i:s');

    $db = mysqli_connect('localhost', 'sangukaix', 'a1s2d3f4!', 'sangukaix');

    mysqli_query($db, "set names utf8");
    $sql = "INSERT INTO assi2(name, phone, field, motive, date)
            VALUES('$user_name', '$phone_number', '$field', '$motive', '$now')";

    $result = mysqli_query($db, $sql);

    if($result){
        echo "지원자가 DB에 저장되었습니다.";
    }else{
        echo"저장실패";
    }



    echo "<h2>지원서 접수 결과</h2>";
    echo "<p>이름: $user_name</p>";
    echo "<p>연락처: $phone_number</p>";
    echo "<p>지원분야: $field</p>";
    echo "<p>지원동기: $motive</p>";


    mysqli_close($db);
    ?>