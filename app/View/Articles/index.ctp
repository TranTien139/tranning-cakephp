<?php if($_COOKIE["language"] == 'vi'){ ?>

<div class="posts index"> <h2>
<?php echo __('Danh sách bài báo'); ?></h2>
<table cellpadding="0" cellspacing="0">
<thead> 
<tr> 
<th><?php echo $this->Paginator->sort('id'); ?></th>
<th><?php echo $this->Paginator->sort('Tiêu đề'); ?></th> 
<th><?php echo $this->Paginator->sort('Nội dung'); ?></th> 
<th><?php echo $this->Paginator->sort('Ngày tạo'); ?></th> 
<th><?php echo $this->Paginator->sort('Ngày sửa'); ?></th>
<th class="actions"><?php echo __('Thao tác'); ?></th>
</tr> 
</thead>
<tbody> 
<?php foreach ($posts as $post): ?> <tr> 
<td><?php echo h($post['Article']['id']); ?>&nbsp;</td>
<td><?php echo h($post['Article']['title_vi']); ?>&nbsp;</td> 
<td><?php echo h($post['Article']['body_vi']); ?>&nbsp;</td>
<td><?php echo h($post['Article']['created']); ?>&nbsp;</td> 
<td><?php echo h($post['Article']['modified']); ?>&nbsp;</td> 
<td class="actions"> 
<?php echo $this->Html->link(__('Xem'), array('action' => 'view', $post['Article']['id'])); ?> <?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $post['Article']['id'])); ?> <?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $post['Article']['id']), array(), __('bạn có chắc chắn xóa', $post['Article']['id'])); ?> 
</td> 
</tr> <?php endforeach; ?>
</tbody> 
</table>
<p> <?php echo $this->Paginator->counter(array( 'format' => __('Trang {:page} của {:pages}, hiển thị {:current} trường của {:count} tổng tất cả, bắt đầu từ {:start}, đến hết {:end}') )); ?>	</p>
<div class="paging"> 
<?php echo $this->Paginator->prev('< ' . __('Trước'), array(), null, array('class' => 'prev disabled')); echo $this->Paginator->numbers(array('separator' => '')); echo $this->Paginator->next(__('Sau') . ' >', array(), null, array('class' => 'next disabled')); ?> 
</div> 
</div> 
<div class="actions"> 
<h3><?php echo __('Chuyển hướng'); ?></h3> 
<ul> 
<li><?php echo $this->Html->link(__('Thêm bài báo'), array('action' => 'add')); ?></li> 
<li><?php echo $this->Html->link(__('Trang Chính'), array('controller' => 'Users', 'action' => 'index')); ?>
</li> 
</ul> 
</div>

<?php }elseif($_COOKIE["language"] == 'en'){?>

<div class="posts index"> <h2>
<?php echo __('Articles'); ?></h2>
<table cellpadding="0" cellspacing="0">
<thead> 
<tr> 
<th><?php echo $this->Paginator->sort('id'); ?></th>
<th><?php echo $this->Paginator->sort('title'); ?></th> 
<th><?php echo $this->Paginator->sort('body'); ?></th> 
<th><?php echo $this->Paginator->sort('created'); ?></th> 
<th><?php echo $this->Paginator->sort('modified'); ?></th>
<th class="actions"><?php echo __('Actions'); ?></th>
</tr> 
</thead>
<tbody> 
<?php foreach ($posts as $post): ?> <tr> 
<td><?php echo h($post['Article']['id']); ?>&nbsp;</td>
<td><?php echo h($post['Article']['title_en']); ?>&nbsp;</td> 
<td><?php echo h($post['Article']['body_en']); ?>&nbsp;</td>
<td><?php echo h($post['Article']['created']); ?>&nbsp;</td> 
<td><?php echo h($post['Article']['modified']); ?>&nbsp;</td> 
<td class="actions"> 
<?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Article']['id'])); ?> <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Article']['id'])); ?> <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Article']['id']), array(), __('Are you sure you want to delete # %s?', $post['Article']['id'])); ?> 
</td> 
</tr> <?php endforeach; ?>
</tbody> 
</table>
<p> <?php echo $this->Paginator->counter(array( 'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}') )); ?>	</p>
<div class="paging"> 
<?php echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')); echo $this->Paginator->numbers(array('separator' => '')); echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')); ?> 
</div> 
</div> 
<div class="actions"> 
<h3><?php echo __('Actions'); ?></h3> 
<ul> 
<li><?php echo $this->Html->link(__('new post'), array('action' => 'add')); ?></li> 
<li><?php echo $this->Html->link(__('dashboard'), array('controller' => 'Users', 'action' => 'index')); ?>
</li> 
</ul> 
</div>

<?php }else{ ?>

<div class="posts index"> <h2>
<?php echo __('物品'); ?></h2>
<table cellpadding="0" cellspacing="0">
<thead> 
<tr> 
<th><?php echo $this->Paginator->sort('id'); ?></th>
<th><?php echo $this->Paginator->sort('タイトル'); ?></th> 
<th><?php echo $this->Paginator->sort('コンテンツ'); ?></th> 
<th><?php echo $this->Paginator->sort('作成した'); ?></th> 
<th><?php echo $this->Paginator->sort('修正されました'); ?></th>
<th class="actions"><?php echo __('行動'); ?></th>
</tr> 
</thead>
<tbody> 
<?php foreach ($posts as $post): ?> <tr> 
<td><?php echo h($post['Article']['id']); ?>&nbsp;</td>
<td><?php echo h($post['Article']['title_jp']); ?>&nbsp;</td> 
<td><?php echo h($post['Article']['body_jp']); ?>&nbsp;</td>
<td><?php echo h($post['Article']['created']); ?>&nbsp;</td> 
<td><?php echo h($post['Article']['modified']); ?>&nbsp;</td> 
<td class="actions"> 
<?php echo $this->Html->link(__('ビュー'), array('action' => 'view', $post['Article']['id'])); ?> <?php echo $this->Html->link(__('編集'), array('action' => 'edit', $post['Article']['id'])); ?> <?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $post['Article']['id']), array(), __('消去してもよろしいですか', $post['Article']['id'])); ?> 
</td> 
</tr> <?php endforeach; ?>
</tbody> 
</table>
<p> <?php echo $this->Paginator->counter(array( 'format' => __('ページ {:page} の {:pages}, 表示 {:current} 廃盤 {:count} 合計, レコードで始まります {:start}, 終了 {:end}') )); ?>	</p>
<div class="paging"> 
<?php echo $this->Paginator->prev('< ' . __('前'), array(), null, array('class' => 'prev disabled')); echo $this->Paginator->numbers(array('separator' => '')); echo $this->Paginator->next(__('次') . ' >', array(), null, array('class' => 'next disabled')); ?> 
</div> 
</div> 
<div class="actions"> 
<h3><?php echo __('行動'); ?></h3> 
<ul> 
<li><?php echo $this->Html->link(__('新しいポスト'), array('action' => 'add')); ?></li> 
<li><?php echo $this->Html->link(__('ダッシュボード'), array('controller' => 'Users', 'action' => 'index')); ?>
</li> 
</ul> 
</div>

<?php } ?>