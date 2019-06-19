<?php
    require 'connection.php';
    $req = $_POST['user'];
    // $req = "getStore";
    $store_arr = [];
    if($req === "getStore"){
        $sql = "SELECT * FROM users WHERE type = '2'";
        $query = $conn->query($sql);

        if(mysqli_num_rows($query) > 0)
        {
           while($row = $query->fetch_assoc()){
            array_push($store_arr , $row);
           }
        }
        echo json_encode($store_arr);
    }else if ($req === "ChooseStore"){
        $storeName = $_POST['storeName'];
        $sql = "SELECT * FROM users WHERE username = '$storeName'";
        $query = $conn->query($sql);

        if(mysqli_num_rows($query) > 0)
        {
           while($row = $query->fetch_assoc()){
            array_push($store_arr , $row);
           }
        }
        echo json_encode($store_arr);
    }
?>