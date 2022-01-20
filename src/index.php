<?php
    require_once "../vendor/autoload.php";
    use App\Controllers\UserController;

    $user = new UserController();

    $getUserList = $user->getUserList();

    echo $getUserList;
    $h = 3;
    echo $h;