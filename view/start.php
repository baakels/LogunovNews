<?php
ob_start();
?>
<h1>TOP 10 NEWS</h1>
<br>
<?php
//print_r($arr);
ViewNews::NewsByCategory($arr);
$content = ob_get_clean();
include_once  'view/Layout.php';
?>