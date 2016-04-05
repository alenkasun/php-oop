<?php
    require "user.php";

    $user1 = new User();
    $user1->email = "bill@gmail.com";
    $user1->setPassword("123654fg");
    var_dump($user1->password);

    $user2 = new User();
    $user2->email = "sam@gmail.com";
    $user2->password = "456987";
    var_dump($user2);

    var_dump($user1->login());
?>