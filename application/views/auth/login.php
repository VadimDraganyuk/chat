<div class="webmail_pic">
	<img src="/media/img/logo.jpg" width="120" height="93" />
</div>
<?php if (isset($errors)): ?>
		<ul class="errors">
			<?php foreach ($errors as $message): ?>
				<li><p><?php echo $message ?></p></li>
			<?php endforeach ?>
		</ul>
	<?php endif;?>
<div class="webmail_form">
	<form method="post" action="/login">
		<div class="fieldwrap_2">
			<input type="text" name="username" value="<?php if (isset($email)) echo $email; ?>" placeholder="Логин" autofocus/>
			<div class="icon_mail_gray">
				<img src="/media/img/icon_mail_gray.png" width="16" height="11" />
			</div>
		</div>
		<div class="fieldwrap_2">
			<input type="password" name="password" placeholder="Пароль"/>
			<div class="icon_lock">
				<img src="/media/img/icon_lock.png" width="16" height="16" />
			</div>
		</div>
		<div class="fieldwrap_2">
			<input type="submit" value="Войти"/>
		</div>

	</form>
</div>