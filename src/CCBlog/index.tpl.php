<h1>Blog</h1>
<p>All blog-like list of all content with the type "post", <a href='<?=create_url("content")?>'>view all content</a>.</p>

<?php if($contents != null):?>
  <?php foreach($contents as $val):?>
    <h2><?=esc($val['title'])?></h2>
<<<<<<< HEAD
    <p class='smaller-text'><em>Posted on <?=$val['created']?> by <?=$val['owner']?></em></p>
    <p><?=filter_data($val['data'], $val['filter'])?></p>
    <p class='smaller-text silent'><a href='<?=create_url("content/edit/{$val['id']}")?>'>edit</a></p>
  <?php endforeach; ?>
<?php else:?>
  <p>No posts exists.</p>
<?php endif;?>
=======
<p class='smaller-text'><em>Posted on <?=$val['created']?> by <?=$val['owner']?></em></p>
<p><?=filter_data($val['data'], $val['filter'])?></p>
<p class='smaller-text silent'><a href='<?=create_url("content/edit/{$val['id']}")?>'>edit</a></p>
<?php endforeach; ?>
<?php else:?>
  <p>No posts exists.</p>
<?php endif;?>
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
