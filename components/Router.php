<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        if (file_exists($routesPath)) {
            $this->routes = include($routesPath);
        }
    }

    /**
     * return request string
     * @return  string
     */
    private function getUri()
    {
        $stringRequest = null;
        if (!empty($_SERVER['REQUEST_URI'])) {
            $stringRequest = trim($_SERVER['REQUEST_URI'], '/');
        }
        return $stringRequest;
    }

    public function run()
    {
// 1. Отримати рядок запиту
        $uri = $this->getUri();

// 2. Перевірити наявність такого запиту в routes.php
        foreach ($this->routes as $uriPattern => $path) {

// 3. Якщо є співпадіння, вичначити який controller і action обробляють запит
            if (preg_match("~$uriPattern~", $uri)) {
                // При вході на сайт, в адресному рядку нічого немає, тому необхідно це передбачити
                if ($uriPattern != "") {
                    // Отримуємо внутрішній шлях, з якого можна отримати controller, action, параметри
                    $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                    $segments = explode('/', $internalRoute);
                    // Формуємо назву контролера і action
                    array_shift($segments); // Видалимо назву кореневої папки з масиву запиту
                } else {
                    $segments = explode('/', $path);
                }
                // Формуємо назву контролера і action
                $controllerName = array_shift($segments) . 'Controller';
                // Робимо назву контролера з великої букви і формуємо назву функції, так як це потрібно для папки контролерів
                $controllerName = ucfirst($controllerName);
                $actionName = 'action' . ucfirst(array_shift($segments));
                $arrayParameters = $segments;


// 4. Підключити файл класа контроллера
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

// 5. Створити об'єкт, викликати метод (тобто action)
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $arrayParameters);
                if ($result != null) {
                    break;
                }
            }
        }
    }
}