<div class="posts form">
<?php echo $this->Form->create('Article'); ?>
<fieldset>
<legend>
<?php echo __('Add Article'); ?>
</legend> 
<?php 
echo "vietnamese";
echo $this->Form->input('title_vi');
echo "english";
echo $this->Form->input('title_en');
echo "japanese";
echo $this->Form->input('title_jp'); 
echo "vietnamese";
echo $this->Form->input('body_vi');
echo "english";
echo $this->Form->input('body_en'); 
echo "japanese"; 
echo $this->Form->input('body_jp'); ?>  
</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div> 
<div class="actions">
<h3><?php echo __('Actions'); ?></h3> 
<ul>
<li>
<?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?>
</li>
<li>
<?php echo $this->Html->link(__('Logout'), array('controller' => 'Users', 'action' => 'logout')); ?>
</li>
</ul> 
</div>
