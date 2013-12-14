<h1>Content</h1>
<p>Create, edit and view content.</p>

<h2>All content</h2>
<?php if($contents != null):?>
  <ul>
  <?php foreach($contents as $val):?>
    <li><?=$val['id']?>, <?=esc($val['title'])?> by <?=$val['owner']?> <a href='<?=create_url("content/edit/{$val['id']}")?>'>edit</a> <a href='<?=create_url("page/view/{$val['id']}")?>'>view</a>
<<<<<<< HEAD
  <?php endforeach; ?>
  </ul>
=======
<?php endforeach; ?>
</ul>
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
<?php else:?>
  <p>No content exists.</p>
<?php endif;?>

<h2>Actions</h2>
<ul>
<<<<<<< HEAD
  <li><a href='<?=create_url('content/create')?>'>Create new content</a>
  <li><a href='<?=create_url('blog')?>'>View as blog</a>
</ul>
=======
<li><a href='<?=create_url('content/create')?>'>Create new content</a>
<li><a href='<?=create_url('blog')?>'>View as blog</a>
</ul>
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
