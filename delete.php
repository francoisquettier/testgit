<?php
include ('includes/co.inc.php');
include ('includes/header.inc.php');
require_once("libs/smarty.class.php");
$smarty = new Smarty();
echo '<div class="span8">';

if
	(isset($_GET["id"]))
		{
			$id = $_GET["id"];
			$SQL = "DELETE FROM articles WHERE id='$id';" ;
			mysql_query($SQL);
			$smarty->display("delete.tpl");
		}
?>
<?php
include ('includes/footer.inc.php');
?>
