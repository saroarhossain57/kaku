<?php

/**
 * Kaku Metabox
 * 
 * @package kaku
 */

add_action('add_meta_boxes', 'kaku_add_sidebar_layout_box');

function kaku_add_sidebar_layout_box()
{
    add_meta_box(
        'kaku_sidebar_layout',
        __('Sidebar Layout', 'kaku'),
        'kaku_sidebar_layout_callback',
        'page',
        'normal',
        'high'
    );
}

$kaku_sidebar_layout = array(
    'right-sidebar' => array(
        'value' => 'right-sidebar',
        'label' => __('Right Sidebar(default)', 'kaku'),
    ),
    'no-sidebar' => array(
        'value' => 'no-sidebar',
        'label' => __('No Sidebar', 'kaku'),
    )
);

function kaku_sidebar_layout_callback()
{
    global $post, $kaku_sidebar_layout;
    wp_nonce_field(basename(__FILE__), 'kaku_nonce');
?>

    <table class="form-table">
        <tr>
            <td colspan="4"><em class="f13"><?php esc_html_e('Choose Sidebar Template', 'kaku'); ?></em></td>
        </tr>

        <tr>
            <td>
                <?php
                foreach ($kaku_sidebar_layout as $field) {
                    $layout = get_post_meta($post->ID, 'kaku_sidebar_layout', true); ?>

                    <div class="radio-image-wrapper" style="float:left; margin-right:30px;">
                        <label class="description">
                            <input type="radio" name="kaku_sidebar_layout" value="<?php echo esc_attr($field['value']); ?>" <?php checked($field['value'], $layout);
							if (empty($layout) && $field['value'] == 'right-sidebar') {
								checked($field['value'], 'right-sidebar');
							} ?> />&nbsp;<?php echo esc_html($field['label']); ?>
                        </label>
                    </div>
                <?php } // end foreach 
                ?>
                <div class="clear"></div>
            </td>
        </tr>
    </table>

<?php
}


/**
 * save the custom metabox data
 * @hooked to save_post hook
 */
function kaku_save_sidebar_layout($post_id)
{
    global $kaku_sidebar_layout;

    // Verify the nonce before proceeding.
    if(isset($_POST['kaku_nonce'])){
		
		$kaku_check_nonce = sanitize_text_field(wp_unslash($_POST['kaku_nonce']));
		if( !isset(  $kaku_check_nonce ) || !wp_verify_nonce( $kaku_check_nonce, basename(__FILE__) ) ){
			return;
		}
	} else {
		return;
	}
        

    // Stop WP from clearing custom fields on autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    if ('page' == isset($_POST['post_type'])) {
        if (!current_user_can('edit_page', $post_id)) return $post_id;
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    $layout = isset($_POST['kaku_sidebar_layout']) ? sanitize_key($_POST['kaku_sidebar_layout']) : 'right-sidebar';

    if (array_key_exists($layout, $kaku_sidebar_layout)) {
        update_post_meta($post_id, 'kaku_sidebar_layout', $layout);
    } else {
        delete_post_meta($post_id, 'kaku_sidebar_layout');
    }
}
add_action('save_post', 'kaku_save_sidebar_layout');
