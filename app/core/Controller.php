<?php
namespace Core;

class Controller
{
    protected $params = [];
    protected $view;

    public function __construct($params)
    {
        $this->params = $params;
    }

    public function __call($name, $args)
    {
        $method = $name . 'Action';
        if (method_exists($this, $method)) {
            call_user_func_array([$this, $method], $args);
        } else {
            throw new \Exception("Method $method not found in controller " . get_class($this));
        }
    }

    protected function render($view, $data = [])
    {
        $view = str_replace('.', '/', $view);
        $viewFile = APP_ROOT . "/app/views/$view.php";

        if (file_exists($viewFile)) {
            extract($data);
            ob_start();
            require $viewFile;
            $content = ob_get_clean();
            echo $content;
        } else {
            throw new \Exception("View file $viewFile not found");
        }
    }

    protected function redirect($url)
    {
        header("Location: $url");
        exit;
    }
}
