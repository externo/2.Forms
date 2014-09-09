<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Most frequent tag</title>
</head>
<body>
<div id="result"></div>
<form method="post">
    Enter Amount<input type="text" name="amount" placeholder=""><br/>
    USD<input type="radio" name="currency" value="$">EUR<input type="radio" name="currency" value="EU">BGN<input type="radio" name="currency" value="BG"><br/>
    Compound Interest Amount<input type="text" name="lihva" placeholder=""><br/>
    <select name="dropdown">
        <option value="0.5">6 months</option>
        <option value="1">1 year</option>
        <option value="2">2 years</option>
        <option value="5">5 years</option>
    </select>
    <input type="submit" name="formData" value="Сметни">
</form>
</body>
</html>
<?php
if(isset ($_POST['formData'])) {
    $amount = $_POST['amount'];
    $currency = $_POST['currency'];
    $lihva = $_POST['lihva'];
    $period = $_POST['dropdown'];
    $final = round($amount*pow((1+$lihva/100),$period),2);
    echo $currency.' '.$final;
    ?><script type="text/javascript">document.getElementById("result").innerText=<?=$final?></script>
<?php
}
?>
