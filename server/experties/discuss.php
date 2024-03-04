<?php
require_once('../../connect.php');
extract($_POST);

$sql = "INSERT INTO discuss (l_comment,e_comment) VALUES('{$l_comment}','{$e_comment}')";
$mysql->query($sql);

header('Location: /experties/comments.php')
    ?>