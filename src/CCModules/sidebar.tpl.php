<div class='box'>
<h4>All modules</h4>
<p>All Mini modules.</p>
<ul>
<?php foreach($modules as $module): ?>
<<<<<<< HEAD

  <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>

  <li><?=$module['name']?></li>

=======
<li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
<?php endforeach; ?>
</ul>
</div>


<div class='box'>
<h4>Mini core</h4>
<p>Mini core modules.</p>
<ul>
<?php foreach($modules as $module): ?>
<<<<<<< HEAD
  <?php if($module['isMiniCore']): ?>

  <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>

  <li><?=$module['name']?></li>

  <?php endif; ?>
=======
<?php if($module['isMiniCore']): ?>
<li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
<?php endif; ?>
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
<?php endforeach; ?>
</ul>
</div>


<div class='box'>
<h4>Mini CMF</h4>
<p>Mini Content Management Framework (CMF) modules.</p>
<ul>
<?php foreach($modules as $module): ?>
<<<<<<< HEAD
  <?php if($module['isMiniCMF']): ?>

  <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>

  <li><?=$module['name']?></li>

  <?php endif; ?>
=======
<?php if($module['isMiniCMF']): ?>
<li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
<?php endif; ?>
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
<?php endforeach; ?>
</ul>
</div>


<div class='box'>
<h4>Models</h4>
<p>A class is considered a model if its name starts with CM.</p>
<ul>
<?php foreach($modules as $module): ?>
<<<<<<< HEAD
  <?php if($module['isModel']): ?>

  <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>

  <li><?=$module['name']?></li>

  <?php endif; ?>
=======
<?php if($module['isModel']): ?>
<li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
<?php endif; ?>
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
<?php endforeach; ?>
</ul>
</div>


<div class='box'>
<h4>Controllers</h4>
<p>Implements interface <code>IController</code>.</p>
<ul>
<?php foreach($modules as $module): ?>
<<<<<<< HEAD
  <?php if($module['isController']): ?>

  <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
  <?php endif; ?>
=======
<?php if($module['isController']): ?>
<li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
<?php endif; ?>
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
<?php endforeach; ?>
</ul>
</div>


<div class='box'>
<h4>Manageable module</h4>
<p>Implements interface <code>IModule</code>.</p>
<ul>
<?php foreach($modules as $module): ?>
<<<<<<< HEAD
  <?php if($module['isManageable']): ?>
  <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>

  <li><?=$module['name']?></li>

  <?php endif; ?>
=======
<?php if($module['isManageable']): ?>
<li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
<?php endif; ?>
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
<?php endforeach; ?>
</ul>
</div>


<div class='box'>
<h4>Contains SQL</h4>
<p>Implements interface <code>IHasSQL</code>.</p>
<ul>
<?php foreach($modules as $module): ?>
<<<<<<< HEAD
  <?php if($module['hasSQL']): ?>

  <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>

  <li><?=$module['name']?></li>

  <?php endif; ?>
=======
<?php if($module['hasSQL']): ?>
<li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
<?php endif; ?>
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
<?php endforeach; ?>
</ul>
</div>


<div class='box'>
<h4>More modules</h4>
<p>Modules that does not implement any specific Mini interface.</p>
<ul>
<?php foreach($modules as $module): ?>
<<<<<<< HEAD
  <?php if(!($module['isController'] || $module['isMiniCore'] || $module['isMiniCMF'])): ?>

  <li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>

  <li><?=$module['name']?></li>

  <?php endif; ?>
<?php endforeach; ?>
</ul>
</div>
=======
<?php if(!($module['isController'] || $module['isMiniCore'] || $module['isMiniCMF'])): ?>
<li><a href='<?=create_url("module/view/{$module['name']}")?>'><?=$module['name']?></a></li>
<?php endif; ?>
<?php endforeach; ?>
</ul>
</div>
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
