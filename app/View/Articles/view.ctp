<?php if($_COOKIE["language"] == 'vi'){ ?>

<div class="Articles view"> 
<h2><?php echo __('Article'); ?>
</h2> 
<dl> 
<dt><?php echo __('Id'); ?></dt> 
<dd> <?php echo h($Article['Article']['id']); ?> &nbsp; </dd> 
<dt><?php echo __('Title'); ?></dt> 
<dd> <?php echo h($Article['Article']['title_vi']); ?> &nbsp; </dd> 
<dt><?php echo __('Body'); ?></dt> 
<dd> <?php echo h($Article['Article']['body_vi']); ?> &nbsp; </dd> 
<dt><?php echo __('Created'); ?></dt> 
<dd> <?php echo h($Article['Article']['created']); ?> &nbsp; </dd> 
<dt><?php echo __('Modified'); ?></dt> 
<dd> <?php echo h($Article['Article']['modified']); ?> &nbsp; </dd> 
</dl> 
</div> 
<div class="actions"> 
<h3><?php echo __('Actions'); ?></h3> 
<ul> 
<li><?php echo $this->Html->link(__('Edit Article'), array('action' => 'edit', $Article['Article']['id'])); ?> 
</li> 
<li><?php echo $this->Form->ArticleLink(__('Delete Article'), array('action' => 'delete', $Article['Article']['id']), array(), __('Are you sure you want to delete # %s?', $Article['Article']['id'])); ?> 
</li> 
<li>
<?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?> 
</li> 
<li>
<?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?> 
</li>  
</ul> 
</div>

<?php }elseif($_COOKIE["language"] == 'en'){?>

<div class="Articles view"> 
<h2><?php echo __('Article'); ?>
</h2> 
<dl> 
<dt><?php echo __('Id'); ?></dt> 
<dd> <?php echo h($Article['Article']['id']); ?> &nbsp; </dd> 
<dt><?php echo __('Title'); ?></dt> 
<dd> <?php echo h($Article['Article']['title_en']); ?> &nbsp; </dd> 
<dt><?php echo __('Body'); ?></dt> 
<dd> <?php echo h($Article['Article']['body_en']); ?> &nbsp; </dd> 
<dt><?php echo __('Created'); ?></dt> 
<dd> <?php echo h($Article['Article']['created']); ?> &nbsp; </dd> 
<dt><?php echo __('Modified'); ?></dt> 
<dd> <?php echo h($Article['Article']['modified']); ?> &nbsp; </dd> 
</dl> 
</div> 
<div class="actions"> 
<h3><?php echo __('Actions'); ?></h3> 
<ul> 
<li><?php echo $this->Html->link(__('Edit Article'), array('action' => 'edit', $Article['Article']['id'])); ?> 
</li> 
<li><?php echo $this->Form->ArticleLink(__('Delete Article'), array('action' => 'delete', $Article['Article']['id']), array(), __('Are you sure you want to delete # %s?', $Article['Article']['id'])); ?> 
</li> 
<li>
<?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?> 
</li> 
<li>
<?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?> 
</li>  
</ul> 
</div>

<?php }else{ ?>

<div class="Articles view"> 
<h2><?php echo __('Article'); ?>
</h2> 
<dl> 
<dt><?php echo __('Id'); ?></dt> 
<dd> <?php echo h($Article['Article']['id']); ?> &nbsp; </dd> 
<dt><?php echo __('Title'); ?></dt> 
<dd> <?php echo h($Article['Article']['title_jp']); ?> &nbsp; </dd> 
<dt><?php echo __('Body'); ?></dt> 
<dd> <?php echo h($Article['Article']['body_jp']); ?> &nbsp; </dd> 
<dt><?php echo __('Created'); ?></dt> 
<dd> <?php echo h($Article['Article']['created']); ?> &nbsp; </dd> 
<dt><?php echo __('Modified'); ?></dt> 
<dd> <?php echo h($Article['Article']['modified']); ?> &nbsp; </dd> 
</dl> 
</div> 
<div class="actions"> 
<h3><?php echo __('Actions'); ?></h3> 
<ul> 
<li><?php echo $this->Html->link(__('Edit Article'), array('action' => 'edit', $Article['Article']['id'])); ?> 
</li> 
<li><?php echo $this->Form->ArticleLink(__('Delete Article'), array('action' => 'delete', $Article['Article']['id']), array(), __('Are you sure you want to delete # %s?', $Article['Article']['id'])); ?> 
</li> 
<li>
<?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?> 
</li> 
<li>
<?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?> 
</li>  
</ul> 
</div>

<?php } ?>