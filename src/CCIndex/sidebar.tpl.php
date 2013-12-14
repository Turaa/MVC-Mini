<div class='box'>
<h4>Controllers and methods</h4>

<<<<<<< HEAD
<p>The following controllers exists. You enable and disable controllers in 
=======
<p>The following controllers exists. You enable and disable controllers in
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
<code>site/config.php</code>.</p>

<ul>
<?php foreach($controllers as $key => $val): ?>
<<<<<<< HEAD
  <li><a href='<?=create_url($key)?>'><?=$key?></a></li>

  <?php if(!empty($val)): ?>
  <ul>
  <?php foreach($val as $method): ?>
    <li><a href='<?=create_url($key, $method)?>'><?=$method?></a></li> 
  <?php endforeach; ?>		
  </ul>
  <?php endif; ?>
  
<?php endforeach; ?>		
</ul>
</div>
=======
<li><a href='<?=create_url($key)?>'><?=$key?></a></li>

<?php if(!empty($val)): ?>
<ul>
<?php foreach($val as $method): ?>
<li><a href='<?=create_url($key, $method)?>'><?=$method?></a></li>
<?php endforeach; ?>                
</ul>
<?php endif; ?>
<?php endforeach; ?>                
</ul>
</div>
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
