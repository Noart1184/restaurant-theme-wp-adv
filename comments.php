<div class="comments-wrapper my-5">
    <div class="comments" id="comments">

        <!-- Comments Header -->
        <div class="comments-header text-center mb-4">
            <h2 class="comment-reply-title">
                <?php
                if (!have_comments()) {
                    echo esc_html__('Share Your Experience', 'wp-adv1');
                } else {
                    printf(
                        esc_html(_n('%s Review', '%s Reviews', get_comments_number(), 'wp-adv1')),
                        number_format_i18n(get_comments_number())
                    );
                }
                ?>
            </h2>
            <p class="text-muted">We love hearing from our guests!</p>
        </div><!-- .comments-header -->

        <!-- Comments List -->
        <div class="comments-inner">
            <?php
            wp_list_comments([
                'style'       => 'div',
                'short_ping'  => true,
                'avatar_size' => 60, // slightly bigger for better presence
                'callback'    => null, // default callback, can be customized
            ]);
            ?>
        </div><!-- .comments-inner -->

    </div><!-- comments -->

    <hr aria-hidden="true">

    <!-- Comment Form -->
    <?php
    if (comments_open()) {
        comment_form([
            'class_form'         => 'comment-form',
            'title_reply'        => esc_html__('Leave Your Feedback', 'wp-adv1'),
            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title text-center mb-4">',
            'title_reply_after'  => '</h2>',
            'comment_notes_before'=> '<p class="comment-notes text-muted text-center">Your feedback helps us improve our dishes and service.</p>',
            'comment_notes_after' => '',
            'label_submit'       => esc_html__('Post Review', 'wp-adv1'),
        ]);
    }
    ?>
</div>
