<?php if ($app_config['authors']['enabled'] && $app_config['authors']['show']) { ?>
    <div class="blognews_author">
        <?= Str::tr(__('Author: :author'), array('author' => $item->author->fullname() ?: $item->post_author)) ?>
    </div>
<?php }
