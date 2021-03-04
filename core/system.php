<?php
    function checkControllerName(string $path) : bool
    {
        return !!preg_match('/^[a-z0-9-]+$/', $path);
        //^-beginning of str
        //$ - end of str
        //+ at least one symbol
        //[a-z0-9-] allowed symbols : a-z, 0-9, - 
    }

    function template(string $path, array $params = []) : string
    {
        $systemPathNotToCopy = "view/$path.php";
        extract($params);
        ob_start();
        include "$systemPathNotToCopy";
        return ob_get_clean();
    }

    function parseURL(string $url, array $routes) : ?array
    {
        $res = [
            'controller' => 'errors/e404',
            'params' => []
        ];
        foreach($routes as $route)
        {
            $matches = [];
            if(preg_match($route['test'], $url, $matches))
            {
                $res['controller'] = $route['controller'];
                if(isset($route['params']))
                {
                    foreach($route['params'] as $name => $num)
                    {
                        $res['params'][$name] = $matches[$num];
                    }
                }
                break;
            }
        }
        return $res;
    }
?>