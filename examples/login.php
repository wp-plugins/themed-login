<?php get_header() ?>
<h2>Log in</h2>
<?php lc_formatted_errors() ?>
<?php if(isset($_GET['registered'])): ?>
	<div class="notice">Please check your email for a new password. </div>
<?php endif ?>
<form action="<?php lc_login_url() ?>" method="post" id="form-login">
	<label class="block">Login</label>
	<input type="text" class="text" name="log" value="<?php esc_attr($lc_user_login)?>">
	<label class="block">Password</label>
	<input type="password" name="pwd" value="" class="text" >
	<div class="clearfix">
		<div class="float-right"><a href="<?php ls_lost_password_url() ?>">Forgot password?</a></div>
		<?php lc_rememberme_checkbox() ?>
	</div>
	<br>
	<?php lc_login_hidden_fields() ?>
	<input type="hidden" name="redirect_to" value="<?php bloginfo('url')?>">
	<input type="submit" value="Login" class="button">
	<div style="display: inline">or <a href="/register">Register now</a></div>
</form>
<?php get_footer() ?>