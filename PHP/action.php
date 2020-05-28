<?php
    $RollNumber = $_POST["Roll_Number"];
    $listdata = $_POST["List"];

    $data = preg_split('/\r\n/',$listdata);
    $data = array_filter($data);

    $json = array();

    if (file_exists("./data/vouchers.json") && filesize("./data/vouchers.json") > 0){
        $json = json_decode(file_get_contents("./data/vouchers.json"), true);
    }
    
    if (key_exists($RollNumber, $json)){
        header("Location: /addvouchers.php?action=error&msg=rollexist");
    }
    elseif(!count($data)){
        header("Location: /addvouchers.php?action=error&msg=nodata");
    }
    else{
        $json[$RollNumber] = $data;
        file_put_contents("./data/vouchers.json", json_encode($json));
        header("Location: /list.php");
    }
?>