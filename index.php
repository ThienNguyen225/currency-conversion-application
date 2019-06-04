<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập chuyển đổi tiền tệ</title>
</head>
<style>
    h2{
        color: blue;
    }
    .display{
        height:180px; width:230px;
        margin:0;
        padding:10px;
        border:1px #CCC solid;
    }
    .display input{
        padding:5px; margin:5px;
    }
    input{
        width: 80%;
        padding:5px; margin:5px;
    }
    select{
        width: 40%;
        padding:5px; margin:5px;
    }
    .click{
        color: red;
    }
</style>
<body>
<form method="post">
    <div class="display">
        <h2>Currency conversion application</h2>
        <input type="number" name="numbers" size="30">
        <select name="from">
            <option value="VND">VND</option>
            <option value="USD">USD</option>
        </select>
        <select name="to">
            <option value="VND">VND</option>
            <option value="USD">USD</option>
        </select>
        <input type="submit" value="click" class="click">
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = $_POST["numbers"];
    $from = $_POST["from"];
    $to = $_POST["to"];
    if ($from === "VND" && $to === "USD"){
        $result = $number / 23000;
        echo $result."USD";
    }elseif ($from === "USD" && $to === "VND"){
        $result = $number * 23000;
        echo $result."VND";
    }else{
        echo $number;
    }
}
?>
</body>
</html>
