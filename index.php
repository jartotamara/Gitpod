<?php
    $conn = mysqli_connect("localhost","root","", "test");
    $data = mysqli_query($conn,"SELECT * FROM AGENTS");

    while($row = mysqli_fetch_array($data)){
        echo "$row[AGENT_CODE] <br>";
    }
?>