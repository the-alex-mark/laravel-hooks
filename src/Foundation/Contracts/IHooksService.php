<?php

namespace ProgLib\Hooks\Foundation\Contracts;

/**
 *
 */
interface IHooksService {

    /**
     * Hooks a function or method to a specific filter action.
     *
     * @since 4.7.0
     *
     * @param string   $tag             The name of the filter to hook the $function_to_add callback to.
     * @param callable $function_to_add The callback to be run when the filter is applied.
     * @param int      $priority        The order in which the functions associated with a
     *                                  particular action are executed. Lower numbers correspond with
     *                                  earlier execution, and functions with the same priority are executed
     *                                  in the order in which they were added to the action.
     * @param int      $accepted_args   The number of arguments the function accepts.
     */
    public static function add_filter($tag, $function_to_add, $priority = 10, $accepted_args = 1);
}