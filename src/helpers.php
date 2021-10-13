<?php

if (!function_exists('add_filter')) {

    /**
     *
     *
     * @param  string $tag
     * @param         $function_to_add
     * @param  int    $priority
     * @param  int    $accepted_args
     * @return true
     */
    function add_filter($tag, $function_to_add, $priority = 10, $accepted_args = 1) {
        return app('hooks')->add_filter($tag, $function_to_add, $priority, $accepted_args);
    }
}

if (!function_exists('apply_filters')) {

    /**
     *
     *
     * @param  string $tag
     * @param         $function_to_add
     * @param  int    $priority
     * @param  int    $accepted_args
     * @return true
     */
    function add_filter($tag, $function_to_add, $priority = 10, $accepted_args = 1) {
        return app('hooks')->add_filter($tag, $function_to_add, $priority, $accepted_args);
    }
}