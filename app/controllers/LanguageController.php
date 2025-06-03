<?php
namespace App\Controllers;

use Core\Controller;

class LanguageController extends Controller
{
    public function switchAction($lang)
    {
        if (in_array($lang, ['en', 'km'])) {
            $_SESSION['language'] = $lang;
        }
        $this->redirect($_SERVER['HTTP_REFERER'] ?? '/');
    }
}
