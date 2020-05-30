<?php

require __DIR__ . '/../../config.php';

use Capstone\BlogModel;
use Capstone\UserModel;

$title = "Users";

$u = new UserModel();
$all_users = $u->allUsers();
dd($all_users);
die;

