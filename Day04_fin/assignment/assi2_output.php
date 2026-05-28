<?php
    header('Content-Type:text/html; charset=utf-8');

    $db = mysqli_connect('localhost', 'sangukaix', 'a1s2d3f4!', 'sangukaix');
    
    mysqli_query($db, "set names utf8");

    $sql = "SELECT * FROM assi2";

    $result_table = mysqli_query($db, $sql);

    $row_num = mysqli_num_rows($result_table);

    for($i = 0; $i <$row_num; $i+=1){
        $row = mysqli_fetch_array($result_table, MYSQLI_ASSOC);

            echo "이름:" . $row['name'];
            echo "<br>";
            echo "전화번호:" . $row['phone'];
            echo "<br>";
            echo "지원분야:" . $row['field'];
            echo "<br>";
            echo "지원동기:" . $row['motive'];
            echo "<br>";
            echo "날짜:" . $row['date'];

    }

    mysqli_close($db);

    ?>