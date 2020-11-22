<?php
    const HOST = "localhost";
    const USERNAME = "root";
    const PASSWORD = "";
    const DATABASE = "quanly_ban_sua";
    function getData($sql){
        $conn = mysqli_connect(HOST, USERNAME,PASSWORD, DATABASE);
        $data = [];
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            $data[] = $row;
        }
        mysqli_close($conn);
        return $data;
    }
?>