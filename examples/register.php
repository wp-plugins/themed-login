<?php get_header() ?>
<h2>Register</h2>
<?php lc_formatted_errors() ?>
<form name="registerform" id="registerform" action="<?php lc_register_url() ?>" method="post">
	<label class="block"><?php _e('Username') ?></label>
	<input type="text" name="user_login" id="user_login" class="text" value="<?php lc_user_login() ?>" size="20" tabindex="10" />
	<label class="block"><?php _e('E-mail') ?></label>
	<input type="text" name="user_email" id="user_email" class="text" value="<?php lc_user_email() ?>" size="25" tabindex="20" />
	<?php do_action('register_form'); ?>
	<div><?php _e('A password will be e-mailed to you.') ?></div>
	<br class="clear" />
	<input type="hidden" name="redirect_to" value="<?php echo esc_attr('/login?registered'); ?>" />
	<input type="submit" name="wp-submit" id="wp-submit" class="button" value="<?php esc_attr_e('Register'); ?>" tabindex="100" />
</form>
<?php get_footer() ?>