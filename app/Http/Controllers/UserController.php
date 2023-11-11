<?php

namespace App\Http\Controllers;


//Controller UserController created using artisan command
class UserController extends Controller
{
    //function to return a simple message to a Route created in web.php file
    function sayHello()
    {
        return "Hello, Laravel!";
    }
}
