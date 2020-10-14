<?php

class App
{
    protected $controller = "home";
    protected $action = "index";
    protected $params = [];

    public function __construct()
    {
        $arr_url = $this->XuLyURL();

        //kiểm tra controller
        if (isset($arr_url[0])) {
            if (file_exists("./mvc/controllers/" . $arr_url[0] . ".php")) {
                $this->controller = $arr_url[0];
                unset($arr_url[0]);
            }

            require_once "./mvc/controllers/" . $this->controller . ".php";
            $this->controller = new $this->controller;

            //kiểm tra action
            if (isset($arr_url[1])) {
                if (method_exists($this->controller, $arr_url[1])) {
                    $this->action = $arr_url[1];
                } else {
                    call_user_func_array([$this->controller, $this->action], $this->params);
                }
                unset($arr_url[1]);
            }

            //xử lý params
            $this->params = $arr_url ? array_values($arr_url) : [];

            call_user_func_array([$this->controller, $this->action], $this->params);
        } else {
            require_once "./mvc/controllers/" . $this->controller . ".php";
            $this->controller = new $this->controller;
            call_user_func_array([$this->controller, $this->action], $this->params);
        }
    }

    public function XuLyURL()
    {
        if (isset($_GET["url"])) {
            $url = trim($_GET["url"]);

            return explode("/", $url);
        }
    }
}
