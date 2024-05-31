<html>
<body>
<?php
$price=550;
$discount = 12;
$value = $price - $price*$discount/100;
echo".$value."."<br>";
$value=($price - (($price*$discount)/100));
echo".$value.";
 ?>
</body>
</html>
