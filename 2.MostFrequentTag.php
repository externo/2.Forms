<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Most frequent tag</title>
</head>
<body>
<form method="post">
	<input type="text" name="arr" placeholder=""><br>
    <input type="submit" name="formData" value="Изпращане">
</form>
</body>
</html>

<?php
if(isset ($_POST['arr'])) {
    $arr = $_POST['arr'];
    $a1 = explode(', ', $arr);
    $a2 = array();
    foreach($a1 as $value){
        if (array_key_exists($value, $a2)){
            $a2[$value] += 1;
        }
        else{
            $a2[$value]=1;
        }
    }
    $max = reset($a2);
    $mostFrValue = '';
    foreach($a2 as $key=>$value){
        if ($max<$value){
            $max=$value;
            $mostFrValue = $key;
        }
        print_r($key." : ".$value." times<br />");
    }
    echo "Most Frequent Tag is: ".$mostFrValue;
}
?>