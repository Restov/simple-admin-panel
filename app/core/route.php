<?php

class Route
{
    static function start(): void
    {
        $controller_name = 'Main';
        $action_name = 'index';
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }

        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }


        $model_name = 'Model_' . $controller_name;
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'action_' . $action_name;
        $model_file = strtolower($model_name) . '.php';
        $model_path = "app/models/" . $model_file;
        if (file_exists($model_path)) {
            include "app/models/" . $model_file;
        }

        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = "app/controllers/" . $controller_file;
        if (file_exists($controller_path)) {
            include "app/controllers/" . $controller_file;
        } else {
            Route::ErrorPage404();
        }

        if (method_exists($controller_name, $action_name)) {
            $controller = new $controller_name;
            $action = $action_name;
            if (!empty($routes[3])) {
                $controller->$action($routes[3]);
            } else {
                $controller->$action();
            }
        } else {
            Route::ErrorPage404();
        }
    }

    private static function RedirectToPage($page): void
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('Location: ' . $host . $page);
    }

    static function ErrorPage404(): void
    {
        Route::RedirectToPage('404');
    }

    static function LoginPage(): void
    {
        Route::RedirectToPage('login');
    }

    static function MainPage(): void
    {
        Route::RedirectToPage('main');
    }
}
