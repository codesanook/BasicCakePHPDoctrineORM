<?php

$user = AuthComponent::user();
//var_dump($user);
echo sprintf("username: %s ", $user['name']);
?>