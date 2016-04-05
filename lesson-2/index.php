<?php
    ini_set('display_errors','On');
    require "user.php";

    $user1 = new User();
    $user1->setEmail("bill@gmail.com");
    $user1->setPassword("123654fg");
    //var_dump($user1->password);   // ERROR !!! access to private property
    var_dump($user1->getEmail());
    echo "<br />";
    var_dump($user1->getPassword());

?>