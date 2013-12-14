<?php if($content['created']): ?>
<<<<<<< HEAD
  <h1>Edit Content</h1>
  <p>You can edit and save this content.</p>
<?php else: ?>
  <h1>Create Content</h1>
  <p>Create new content.</p>
=======
<h1>Edit Content</h1>
<p>You can edit and save this content.</p>
<?php else: ?>
<h1>Create Content</h1>
<p>Create new content.</p>
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
<?php endif; ?>


<?=$form->GetHTML(array('class'=>'content-edit'))?>

<p class='smaller-text'><em>
<?php if($content['created']): ?>
<<<<<<< HEAD
  This content were created by <?=$content['owner']?> <?=time_diff($content['created'])?> ago.
<?php else: ?>
  Content not yet created.
=======
This content were created by <?=$content['owner']?> <?=time_diff($content['created'])?> ago.
<?php else: ?>
Content not yet created.
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
<?php endif; ?>

<?php if(isset($content['updated'])):?>
  Last updated <?=time_diff($content['updated'])?> ago.
<?php endif; ?>
</em></p>

<p>
<a href='<?=create_url('content', 'create')?>'>Create new</a>
<a href='<?=create_url('page', 'view', $content['id'])?>'>View</a>
<a href='<?=create_url('content')?>'>View all</a>
</p>

<<<<<<< HEAD
=======

>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
