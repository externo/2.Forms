<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Print tags</title>
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
    foreach($a1 as $key=>$value){
        print_r($key." : ".$value."<br />");
    }
}
?>