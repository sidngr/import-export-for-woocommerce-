<?php

if ( ! defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly

?>
<div class="sn-wie-setting-page product-category">
    <div class="sn-wie-header">
        <h2><?php echo( __('Manage product category import export settings', SN_WIE_SLUG) ); ?></h2>
        <p><?php echo( __('This section allows you to manage settings for Import Export process', SN_WIE_SLUG) ); ?></p>
    </div>
    <div class="sn-wie-box-section">
        <?php wc_get_template( 'navigation.php', $args, '', SN_WIE_TEMPLATE_PATH .'/product-category/' );?>
        <div class="setting-box">
            <form id="form_setting" action="<?php echo(admin_url('admin-post.php')) ?>" method="post" class="sn-wie-form  setting-form product-category">
                <input type="hidden" id="action" name="action" value="sn_wie_update_product_category_setting" />
                <div class="input-group">
                    <label class="control-label"><?php echo( __('Import records per request', SN_WIE_SLUG) ); ?></label>
                    <input type="number" id="import_record_per_request" name="import_record_per_request" class="form-control" value="<?php echo( $options['product_category_import_record_per_request'] ) ?>" />
                    <div class="input-hint"><?php echo( __('Global Value', SN_WIE_SLUG) ); ?>: <?php echo( $options['import_record_per_request'] ) ?></div>
                </div>
                <div class="input-group">
                    <label class="control-label"><?php echo( __('Export records per request', SN_WIE_SLUG) ); ?></label>
                    <input type="number" id="export_record_per_request" name="export_record_per_request" class="form-control" value="<?php echo( $options['product_category_export_record_per_request'] ) ?>" />
                    <div class="input-hint"><?php echo( __('Global Value', SN_WIE_SLUG) ); ?>: <?php echo( $options['export_record_per_request'] ) ?></div>
                </div>
            </form>
            <div class="footer">
                <button type="button" class="button button-primary btn-submit" data-form="form_setting"><?php echo( __('Save', SN_WIE_SLUG) ); ?></button>
            </div>
        </div>
    </div>
</div>