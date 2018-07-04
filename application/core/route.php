<?php
    class Route {
        public static function start() {
            // Контроллер и действия по умолчанию
            $controllerName = "Main";
            $actionName = "index";

            //разбить строку машрута (URL) по разделителю '/'
            $routes = explode('/', $_SERVER['REQUEST_URI']);

            // Получить имя контроллера
            if (empty($routes[1]) == false)
                $controllerName = $routes[1];

            // Получить имя экшена
            if (empty($routes[2]) == false)
                $actionName = $routes[2];

            // Добавить префиксы
            $model_name = "model_" . $controllerName;
            $controller_name = "controller_" . $controller_name;
            $action_name = "action_" . $action_name;

            // подключить файл с классом модели 
            // (такого файла модели может и не быть)
            $model_file = strtolower($model_name) . ".php";
            $model_path = "application/models/" . $model_file;
            //если такой файл модели существует
            if(file_exists($model_path) == true)
                include $model_path;

            // подключить файл с классом контроллера
            $controller_file = strtolower($controller_name) . ".php";
            $controller_path = "application/controllers/" . $controller_file;
            // если такой файл контроллер существует, то подключить его
            if(file_exists($controller_path) == true)
                include $controller_path;
            else
                // иначе если такого контроллера нет, то 
                // редирект на страницу 404
                Route::ErrorPage404();
            
            // создать контроллер
            $controller = new $controller_name; // контроллер
            $action = $action_name; // экшн (метод контроллера)
            // если у контроллера существует такой экшн 
            if (method_exists($controller, $action) == true)
                // вызвать его
                $controller->$action();
            else
                // редирект на страницу 404, 
                // если такого метода в контроллере нет
                Route::ErrorPage404();

        }

        // Отправка HTTP-запроса 404
        public static function ErrorPage404() {
            $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
            header('HTTP/1.1 404 Not Found');
		    header("Status: 404 Not Found");
		    header('Location:'.$host.'404');
        }
    }
    
?>