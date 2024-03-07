<?php

// Short code Front-page Section Hero
function section_hero_shortcode_function()
{

    ob_start();
    get_template_part('template-parts/front-page/section_hero');
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('hero_section_shortcode', 'section_hero_shortcode_function');

// Short code Front-page Query Display 2 Articles
function display_articles_shortcode_function()
{

    ob_start();
    get_template_part('template-parts/front-page/query-article-section');
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('display_article_shortcode', 'display_articles_shortcode_function');
