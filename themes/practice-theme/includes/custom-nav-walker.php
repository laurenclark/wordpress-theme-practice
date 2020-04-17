<?php

class LC_Custom_Nav_Walker extends Walker_Nav_Menu
{
    // https://developer.wordpress.org/reference/classes/walker/

    public function start_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '<ul class="special-class">';
    }

    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= '<li class="special-class-item">';
        $output .= $args->before; // Placed before the link
        $output .= '<a href="' . $item->url . '">';
        $output .= $args->link_before . $item->title . $args->link_after;
        $output .= '</a>';
        $output .= $args->after;
    }

    public function end_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '</li>';
    }
}
