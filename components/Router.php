<?php

class Router
{
    
    private $routes;
    
    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        
        $this->routes = include($routesPath);
    }
    
    // return reques string
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
    
    public function run()
    {
        // Отримання запитиу
        $uri = $this->getURI();
        
        //перевірка наявності запиту в routes.php
        foreach ($this->routes as $uriPattern => $path){
            
            // Порівняння $uriPattern i $url
            if(preg_match("~$uriPattern~", $uri)){
                
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                    
                // Визначення який  Controller and Action виконують запит
                $segments = explode('/', $internalRoute);
                
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                
                $actionName = 'action'.ucfirst(array_shift($segments));
                
                $parameters = $segments;
                
                // підключення файл класа-controller
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                
                if(file_exists($controllerFile)){
                    include_once($controllerFile);
                }
                
                // Створення обєкта, виклик метода
                $controllerObject = new $controllerName;
                
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                
                if($result != null){
                    break;
                }
            }
        }
    }
}