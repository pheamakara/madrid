<?php
namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        $this->render('home/index', [
            'title' => 'Welcome to Madrid KH',
            'description' => 'Your source for Real Madrid news in Cambodia'
        ]);
    }
}
