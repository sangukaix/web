<?php

    header("Content-Type:text/html; charset=utf-8");

    $user_name= $_GET['user_name'];
    $phone_number= $_GET['phone_number'];
    $지원분야= $_GET['지원분야'];
    $motive= $_GET['motive'];

    echo "<h2>지원서 접수 결과</h2>";
    echo "<p>이름: $user_name</p>";
    echo "<p>연락처: $phone_number</p>";
    echo "<p>지원분야: $지원분야</p>";
    echo "<p>지원동기: $motive</p>";

    ?>