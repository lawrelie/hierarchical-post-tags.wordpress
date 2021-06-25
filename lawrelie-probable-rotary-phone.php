<?php
namespace Lawrelie\ProbableRotaryPhone;
// Plugin Name: lawrelie-probable-rotary-phone
// Description: WordPress のタグを階層化するプラグイン
// Version: 0.1.0-alpha
// Requires at least: 4.4
// Tested up to: 5.7
// Requires PHP: 5.3
// Text Domain: lawrelie-probable-rotary-phone
function filter_registerTaxonomyArgs(array $args, string $taxonomy, array $objectType): array {
    return 'post_tag' === $taxonomy ? ['label' => 'タグ', 'hierarchical' => true] + $args : $args;
}
\add_filter('register_taxonomy_args', __NAMESPACE__ . '\filter_registerTaxonomyArgs', 10, 3);
