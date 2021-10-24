<?php
    header("Content-type: application/json; charset=UTF-8");  //宣言　今からJSON形式のデータを使っていく

    $zipcode = $_GET['zipcode'];  //zipcodeが送られてくる　dataの中身のキー'zipcode'が入る
    $zip_result = array($zip_result);  //JSONの形にする　”zipcode"の中に$zipcodeを格納する　連想配列とJSONは似ているが異なる

    echo json_encode($zip_result);  //JSONで返す