<h1>Login</h1>
<p>Login using your acronym or email.</p>
<?=$login_form->GetHTML(array('start'=>true))?>
<<<<<<< HEAD
  <fieldset>
    <?=$login_form['acronym']->GetHTML()?>
    <?=$login_form['password']->GetHTML()?>  
    <?=$login_form['login']->GetHTML()?>
    <?php if($allow_create_user) : ?>
      <p class='form-action-link'><a href='<?=$create_user_url?>' title='Create a new user account'>Create user</a></p>
    <?php endif; ?>
  </fieldset>
=======
<fieldset>
<?=$login_form['acronym']->GetHTML()?>
<?=$login_form['password']->GetHTML()?>
<?=$login_form['login']->GetHTML()?>
<?php if($allow_create_user) : ?>
<p class='form-action-link'><a href='<?=$create_user_url?>' title='Create a new user account'>Create user</a></p>
<?php endif; ?>
</fieldset>
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
</form>
