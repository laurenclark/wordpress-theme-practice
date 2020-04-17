<?php

function lc_widgets()
{
    register_sidebar([
        'name'       => __('Sidebar', 'practice_theme'),
        'id'         => 'lc_sidebar',
        'description' => __('Default sidebar', 'practice_theme')
    ]);
}
