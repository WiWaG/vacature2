<?php

namespace controllers;

use lib\View;

class HomeController {

    public function index()
    {
        return View::render('home.view');
    }
}