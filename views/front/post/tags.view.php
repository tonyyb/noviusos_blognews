<?php
if ($app_config['tags']['enabled'] && $app_config['tags']['show']) {
    ?>
    <div class="blognews_tags">
    <?php
    if (count($item->tags) > 0) {
        $tags = array();
        foreach ($item->tags as $tag) {
            $tags[$tag->url()] = $tag->tag_label;
        }
        $tags_str = implode(', ', array_map(function($href, $title) {
            return '<a href="'.$href.'">'.e($title).'</a>';
        }, array_keys($tags), array_values($tags)));
        echo e(Str::tr(__('Tags: :tags')), array('tags' => $tags_str));
    }
    ?>
    </div>
    <?php
}
