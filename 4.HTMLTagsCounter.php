<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Valid HTML tags</title>
</head>
<body>
<form method="post">
    Enter HTML tags:<br />
    <input type="text" name="tag" placeholder="enter tag...">
    <input type="submit" name="formData" value="Изпрати">
</form>
</body>
</html>

<?php
if(isset ($_POST['formData'])) {
    $tag = $_POST['tag'];
    $result = 'Invalid';
    $score = 0;
    if(preg_match("/([\<])([^\>]{1,})*([\>])/i", $tag)){
        $result = 'Valid';
    }
    echo $result." HTML tag!<br />Score: ".$score.' '.$tag;
}
?>