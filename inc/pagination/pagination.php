<?php

/**
 * Pagination
 */
function kaku_pagination()
{
    global $wp_query;

    $links = paginate_links(array(
        'current'  => max(1, get_query_var('paged')),
        'total'    => $wp_query->max_num_pages,
        'type'     => 'list',
        'mid_size' => apply_filters("kaku_pagination_mid_size", 3)
    ));
    echo wp_kses_post($links);
}
