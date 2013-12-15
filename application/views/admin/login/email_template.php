<div style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px;">
<h1 style="text-transform: uppercase; margin: 0px; padding: 0px; color: #3a87ad;"><?php echo ADMIN_PROJECT; ?>
	<span style="margin: 0px; padding: 0px; color: #b94a48; font-size: 15px;">Reset password</span></h1>
<p>Hello <span style="font-weight: bold;"><?php echo $name; ?></span>,</p>
<p>Click <a href="<?php echo site_url('admin/login/reset-password/' . $reset_token); ?>" target="_blank">here</a> to reset your password in the CMS.</p>
<p>If you have trouble accessing the link, you can copy and paste the following link:<br>
<?php echo site_url('admin/login/reset-password/' . $reset_token); ?></p>
<p>If you find any issue, please get in touch with the dev team so they can assist you.</p>
<p>Best regards,</p>
<p style="font-weight: bold;">The <?php echo ADMIN_PROJECT; ?> team</p>
<hr style="border: 0px; background: #000; height: 1px; margin: 0; padding: 0;">
<p style="color: #999; text-align: center;"><small>If you haven't requested this email, please discard it.<br><?php echo ADMIN_CLIENT . ' ' . date("Y"); ?></small></p>
