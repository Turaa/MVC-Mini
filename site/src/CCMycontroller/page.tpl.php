<?php if($content['id']):?>
  <h1><?=esc($content['title'])?></h1>
<<<<<<< HEAD
  <p><?=$content->GetFilteredData()?></p>
  <p class='smaller-text silent'><a href='<?=create_url("content/edit/{$content['id']}")?>'>edit</a> <a href='<?=create_url("content")?>'>view all</a></p>
=======
<p><?=$content->GetFilteredData()?></p>
<p class='smaller-text silent'><a href='<?=create_url("content/edit/{$content['id']}")?>'>edit</a> <a href='<?=create_url("content")?>'>view all</a></p>
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
<?php else:?>
  <p>404: No such page exists.</p>
<?php endif;?>
