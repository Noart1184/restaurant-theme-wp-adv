<form role="search" method="get" class="search-form form-inline my-2" action="<?php echo esc_url(home_url('/'));?>">
    <div class="input-group w-100">
        <label class="sr-only" for="s"><?php esc_attr_e('Search for:', 'wp-adv1'); ?></label>
        <input type="search" id="s" class="form-control" placeholder="<?php esc_attr_e("Search...", "wp-adv1");?>" value="<?php echo get_search_query();?>" name="s"/>
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit"><?php esc_html_e("Search", "wp-adv1"); ?></button>
        </div>
    </div>
</form>