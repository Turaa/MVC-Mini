<h1>User Profile</h1>
<p>You can view and update your profile information.</p>

<?php if($is_authenticated): ?>
<<<<<<< HEAD
  <?=$profile_form?>
  <p>You were created at <?=$user['created']?> and last updated at <?=$user['updated']?>.</p>
  <p>You are member of <?=count($user['groups'])?> group(s).</p>
  <ul>
  <?php foreach($user['groups'] as $group): ?>
    <li><?=$group['name']?>
  <?php endforeach; ?>
  </ul>
<?php else: ?>
  <p>User is anonymous and not authenticated.</p>
<?php endif; ?>
=======
<?=$profile_form?>
<p>You were created at <?=$user['created']?> and last updated at <?=$user['updated']?>.</p>
<p>You are member of <?=count($user['groups'])?> group(s).</p>
<ul>
<?php foreach($user['groups'] as $group): ?>
<li><?=$group['name']?>
<?php endforeach; ?>
</ul>
<?php else: ?>
<p>User is anonymous and not authenticated.</p>
<?php endif; ?>
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
