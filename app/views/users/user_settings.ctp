<div>
		<h3><?php __('Profile Image'); ?></h3>



		<img src="<?=$gravatar->urlFromhash($user_info['User']['image'], array('size' => 75, 'default' => 'mm'));?>" width="75" height="75" alt="<?=$user_info['User']['username'];?>" />
		
	
	</div>
<form action="?" method="post" >
<div class="detailed_inputs">
	<div>
		<h3>Email Address <span class="small">An email address we can contact you at.</span></h3>
		<input type="text" name="data[User][email]" value="<?=$user_info['User']['email'];?>"/>
	</div>
	<div>
		<h3>Age <span class="small">An optional age to show.</span></h3>
		<input type="text" maxlength="3" name="data[User][age]" value="<?=$user_info['User']['age'];?>"/>
	</div>
	<div>
		<h3>Location <span class="small">Where are you located?</span></h3>
		<input type="text" name="data[User][location]" value="<?=$user_info['User']['location'];?>"/>
	</div>
	<div>
		<h3>Website <span class="small">Have a website or social profile?</span></h3>
		<input type="text" name="data[User][website]" value="<?=$user_info['User']['website'];?>"/>
	</div>
	<div>
		<h3>Summary <span class="small">Tell us a little about yourself.</span></h3>
		<textarea name="data[User][info]"><?=$user_info['User']['info'];?></textarea>
	</div>
	<div>
		<h3>Nature of Work <span class="small">Tell us a bit of the kind of work you do.</span></h3>
		<fieldset>
			<input type="radio" name="data[User][usertype]" id="UserUsertypeF" value="f" <?= $user_info['User']['usertype']=='f' ? "checked=\"checked\"" : "" ?>>
			<label for="UserUsertypeF">Freelancer</label>
			<input type="radio" name="data[User][usertype]" id="UserUsertypeO" value="o" <?= $user_info['User']['usertype']=='o' ? "checked=\"checked\"" : "" ?>>
			<label for="UserUsertypeO">Outsourcer</label>
			<input type="radio" name="data[User][usertype]" id="UserUsertypeB" value="b" <?= $user_info['User']['usertype']=='b' ? "checked=\"checked\"" : "" ?>>
			<label for="UserUsertypeB">Both Freelancing &amp; Outsourcing</label>
		</fieldset>
	</div>
	<div>
		<h3>Password Change <span class="small">Set a new password. Leave blank if you do not wish to change your password.</span></h3>
		<input type="password" name="data[User][new_password]"/>
	</div>
	<div id="old_password">
		<h3>Old Password <span class="small">If setting a new password please enter your current password.</span></h3>
		<input type="password" name="data[User][old_password]"/>
	</div>
	<div class="submit">
		<input type="submit" value="Update Your Account"/>
	</div>
</div>
</form>