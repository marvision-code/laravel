<?php

require_once "functions/autoloadfunctions.php";

if (! function_exists('marwen')) {
    /**
     * Generate a HTML link.
     *
     * @param string $url
     * @param string $title
     * @param array  $attributes
     * @param bool   $secure
     *
     * @return string
     */
    function marwen()
    {
        return "hello i'm marwen ^_^";
    }
}

if (! function_exists('lang')) {
    
    function lang($data)
    {
        return trans('marvision_lang::'.$data);
    }
}


