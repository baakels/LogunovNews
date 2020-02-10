<?php
ob_start();
?>
<h1>Новости по категориям</h1>
<br>
<?php
ViewNews::NewsByCategory($arr);
$content = ob_get_clean();
include_once 'view/Layout.php';