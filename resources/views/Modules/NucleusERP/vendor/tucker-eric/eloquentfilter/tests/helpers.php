<?php

/**
 * Replacement for our config function.
 */
if (! function_exists('config')) {
    function config($key, $default)
    {
        return $default;
    }
}
