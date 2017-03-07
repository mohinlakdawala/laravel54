<?php

use Theme;

if (! function_exists('view')) {
    /**
     * Render theme view file.
     *
     * @param string $view
     * @param array $data
     * @return View
     */
    function view($view = null, $data = [], $mergeData = [])
    {
        return Theme::view($view, $data);        
    }
}

if (! function_exists('asset')) {
    /**
     * Generate a HTML link to the given asset using HTTP for the
     * currently active theme.
     *
     * @return string
     */
    function asset($path)
    {
        return Theme::asset($path);
    }
}