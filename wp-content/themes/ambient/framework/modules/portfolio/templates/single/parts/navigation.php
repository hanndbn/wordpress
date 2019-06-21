<?php if(ambient_elated_options()->getOptionValue('portfolio_single_hide_pagination') !== 'yes') : ?>

    <?php
    $back_to_link      = get_post_meta(get_the_ID(), 'portfolio_single_back_to_link', true);
    $nav_same_category = ambient_elated_options()->getOptionValue('portfolio_single_nav_same_category') == 'yes';
    ?>

    <div class="eltdf-ps-navigation">
        <?php if(get_previous_post() !== '') : ?>
            <div class="eltdf-ps-prev">
                <?php if($nav_same_category) {
                    previous_post_link('%link', '<span class="eltdf-ps-nav-mark"><span class="eltdf-single-previous">'.esc_html__('Previous', 'ambient').'</span></span>', true, '', 'portfolio-category');
                } else {
                    previous_post_link('%link', '<span class="eltdf-ps-nav-mark"><span class="eltdf-single-previous">'.esc_html__('Previous', 'ambient').'</span></span>');
                } ?>
            </div>
        <?php endif; ?>

        <?php if($back_to_link !== '') : ?>
            <div class="eltdf-ps-back-btn">
                <a itemprop="url" href="<?php echo esc_url(get_permalink($back_to_link)); ?>">
                    <span class="social_flickr"></span>
                </a>
            </div>
        <?php endif; ?>

        <?php if(get_next_post() !== '') : ?>
            <div class="eltdf-ps-next">
                <?php if($nav_same_category) {
                    next_post_link('%link', '<span class="eltdf-ps-nav-mark"><span class="eltdf-single-next">'.esc_html__('Next', 'ambient').'</span></span>', true, '', 'portfolio-category');
                } else {
                    next_post_link('%link', '<span class="eltdf-ps-nav-mark"><span class="eltdf-single-next">'.esc_html__('Next', 'ambient').'</span></span>');
                } ?>
            </div>
        <?php endif; ?>
    </div>

<?php endif; ?>