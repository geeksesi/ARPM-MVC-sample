<?php

namespace App\Controllers;

class PageController
{
    public function homepage()
    {
        $data = [
            "title" => "MVC SAMPLE",
            "location" => "the Homepage"
        ];
        include VIEW_LOCATION . "/location.php";
    }

    public function folder1()
    {
        $data = [
            "title" => "MVC SAMPLE",
            "location" => "folder1"
        ];
        include VIEW_LOCATION . "/location.php";
    }
    public function folder2()
    {
        $data = [
            "title" => "MVC SAMPLE",
            "location" => "folder2"
        ];
        include VIEW_LOCATION . "/location.php";
    }

    public function notFound()
    {
        echo "<h1>404</h1>";
    }
}
