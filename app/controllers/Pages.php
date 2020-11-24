<?php
class Pages
{
    public function __construct()
    {
    }

    public function index()
    {
        echo 'index';
    }

    public function about($id)
    {
        if ($id) {
            echo $id;
        } else {
            echo 'about';
        }
    }
}
