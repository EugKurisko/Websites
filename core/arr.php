<?php
    //target - one dimencional associative array
    //fields - contains array of fields
    function extractFields(array $target, array $fields) : array
    {
        $res = [];
        foreach($fields as $field)
        {
            $res[$field] = trim($target[$field]);
        }
        return $res;
    }

    function checkPath($path) : bool
    {
        preg_match("/../", $path);
        return true;
    }
?>