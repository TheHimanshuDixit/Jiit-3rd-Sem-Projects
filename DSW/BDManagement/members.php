<?php

$i=0;
require_once 'users/php/DBConnect.php';
$db = new DBConnect();
$users = $db->getUsers();

$title="Members Area";
$setMemberActive="active";
$bg_background="bg-warning";

include 'layout/_header.php';

include 'layout/_top_nav.php';
?>

<h1 style="font-family: timesnewroman;text-align :center; margin-bottom:40px;text-decoration:underline"><i>Our Members</i></h1>

<?php include 'users/layout/_member_layout.php'; ?>

<?php include 'layout/_footer.php'; ?>
