<?php
require("../assets/lib/smarty-master/libs/smarty.class.php"); // On inclut la classe Smarty
?>

<?php
$smarty = new Smarty();
?>


<?php
$smarty->display("indexFront.php");
?>