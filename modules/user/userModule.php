<?php

class userModule
{
 public function __construct()
 {
     require 'controllers/userController.php';
     $controller = new userController();
     $controller->index();
 }
}