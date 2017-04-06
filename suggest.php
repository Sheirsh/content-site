<?php
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
echo 'thank you for your kind suggestion '.
htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') . ' ' .
htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';
?>