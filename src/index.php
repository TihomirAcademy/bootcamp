<?php
    require_once "../vendor/autoload.php";
    use App\Controllers\UserController;

    $user = new UserController();

    $getUserList = $user->getUserList();

    echo $getUserList;
    echo "Advance Academy!";
    echo "Start Bootcamp!";
    $h = 3;
    echo $h;