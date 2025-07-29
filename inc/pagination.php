<?php
/**
 * Pagination
 */
function pagination($pages = '', $range = 1)
{
    // Number of page links to show around the current page
    $showitems = ($range * 2) + 1;

    global $paged;
    if (empty($paged)) $paged = 1;

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
    }

    if (($paged + 2) <= $pages) {
        $links[] = $paged + 1;
    }

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo '<div class="pagination">
                <div class="container">
                    <ul class="pagination__list">';

        // Previous Page Link
        if ($paged > 1 && $showitems < $pages) {
            echo '<li class="pagination__item -sp -prev"><a href="' . get_pagenum_link($paged - 1) . '">
            <svg xmlns="http://www.w3.org/2000/svg" width="12.613" height="9.196" viewBox="0 0 12.613 9.196">
            <g id="Group_24064" data-name="Group 24064" transform="translate(1161.626 0.707)">
                <g id="Group_23441" data-name="Group 23441" transform="translate(-1160.919 0)">
                    <path id="Path_9127" data-name="Path 9127" d="M0,5.5V0H5.5" transform="translate(0 3.89) rotate(-45)" fill="none" stroke="#222" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                    <line id="Line_501" data-name="Line 501" x1="10.358" transform="translate(1.048 3.89)" fill="none" stroke="#222" stroke-linecap="round" stroke-width="1" />
                </g>
            </g>
            </svg>
        </a></li>';
        }

        // First Page Link
        if (!in_array(1, $links)) {
            $class = 1 == $paged ? ' class="-active"' : '';
            printf('<li%s class="pagination__item"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

            if (!in_array(2, $links)) {
                echo '<li class="pagination__item -dots"><a>…</a></li>';
            }
        }

        // Page Numbers
        sort($links);
        foreach ((array) $links as $link) {
            $class = $paged == $link ? ' class="pagination__item -active"' : '';
            printf('<li%s class="pagination__item"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
        }

        // Last Page Link
        if (!in_array($pages, $links)) {
            if (!in_array($pages - 1, $links)) {
                echo '<li class="pagination__item -dots"><a>・・・</a></li>';
            }
            $class = $paged == $pages ? ' class="-active"' : '';
            printf('<li%s class="pagination__item"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($pages)), $pages);
        }

        // Next Page Link
        if ($paged < $pages && $showitems < $pages) {
            echo '<li class="pagination__item -sp -next"><a href="' . get_pagenum_link($paged + 1) . '">
            <svg xmlns="http://www.w3.org/2000/svg" width="12.613" height="9.196" viewBox="0 0 12.613 9.196">
                <g id="Group_24063" data-name="Group 24063" transform="translate(-1149 -499.464)">
                    <g id="Group_23441" data-name="Group 23441" transform="translate(1149.5 500.171)">
                        <path id="Path_9127" data-name="Path 9127" d="M0,0V5.5H5.5" transform="translate(7.515 7.782) rotate(-135)" fill="none" stroke="#222" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                        <line id="Line_501" data-name="Line 501" x2="10.358" transform="translate(0 3.891)" fill="none" stroke="#222" stroke-linecap="round" stroke-width="1"/>
                    </g>
                </g>
            </svg>
        </a></li>';
        }

        echo '</ul>
                </div>
            </div>';
    }
}