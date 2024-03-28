<?php
namespace src\Controllers;

use src\Services\Render;

class HomeController {

    use Render;

    public function index() {
        $this->render('home');
    }

    public function dashboard() {
        $this->render('dashboard');
    }

    public function login() {
        $this->render('login');
    }
    
    public function notFound() {
        $this->render('404');
    }
}