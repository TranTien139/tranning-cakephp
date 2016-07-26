<div class="users form">
<?php if($_COOKIE["language"] == 'vi'){ ?>
<h1>Danh sách tài khoản</h1>
<?php }elseif($_COOKIE["language"] == 'en'){?>
<h1>List User</h1>
<?php }else{ ?>
<h1>アカウントリスト</h1>
<?php } ?>

<table>
    <thead>
		<tr>
		<?php if($_COOKIE["language"] == 'vi'){ ?>

			<th><?php echo $this->Form->checkbox('all', array('name' => 'CheckAll',  'id' => 'CheckAll')); ?></th>
			<th><?php echo $this->Paginator->sort('username', 'Tài khoản');?>  </th>
			<th><?php echo $this->Paginator->sort('email', 'Email');?></th>
			<th><?php echo $this->Paginator->sort('created', 'Ngày tạo');?></th>
			<th><?php echo $this->Paginator->sort('modified','Sửa lần cuối');?></th>
			<th><?php echo $this->Paginator->sort('role','Vai trò');?></th>
			<th><?php echo $this->Paginator->sort('status','Trạng thái');?></th>
			<th>Thao tác</th>

			<?php }elseif($_COOKIE["language"] == 'en'){?>

			<th><?php echo $this->Form->checkbox('all', array('name' => 'CheckAll',  'id' => 'CheckAll')); ?></th>
			<th><?php echo $this->Paginator->sort('username', 'Username');?>  </th>
			<th><?php echo $this->Paginator->sort('email', 'Email');?></th>
			<th><?php echo $this->Paginator->sort('created', 'Created');?></th>
			<th><?php echo $this->Paginator->sort('modified','Modified');?></th>
			<th><?php echo $this->Paginator->sort('role','Role');?></th>
			<th><?php echo $this->Paginator->sort('status','Status');?></th>
			<th>Action</th>

			<?php }else{ ?>

			<th><?php echo $this->Form->checkbox('all', array('name' => 'CheckAll',  'id' => 'CheckAll')); ?></th>
			<th><?php echo $this->Paginator->sort('username', 'ユーザー名');?>  </th>
			<th><?php echo $this->Paginator->sort('email', 'Eメール');?></th>
			<th><?php echo $this->Paginator->sort('created', '作成した');?></th>
			<th><?php echo $this->Paginator->sort('modified','修正されました');?></th>
			<th><?php echo $this->Paginator->sort('role','役割');?></th>
			<th><?php echo $this->Paginator->sort('status','状態');?></th>
			<th>アクション</th>

			<?php } ?>
		</tr>
	</thead>
	<tbody>						
		<?php $count=0; ?>
		<?php foreach($users as $user): ?>				
		<?php $count ++;?>
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; ?>
			<td><?php echo $this->Form->checkbox('User.id.'.$user['User']['id']); ?></td>
			<td><?php echo $this->Html->link( $user['User']['username']  ,   array('action'=>'edit', $user['User']['id']),array('escape' => false) );?></td>
			<td style="text-align: center;"><?php echo $user['User']['email']; ?></td>
			<td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['created']); ?></td>
			<td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['modified']); ?></td>
			<td style="text-align: center;"><?php echo $user['User']['role']; ?></td>
			<td style="text-align: center;"><?php echo $user['User']['status']; ?></td>
			<td >
			<?php echo $this->Html->link(    "Edit",   array('action'=>'edit', $user['User']['id']) ); ?> | 
			<?php
				if( $user['User']['status'] != 0){ 
					echo $this->Html->link(    "Delete", array('action'=>'delete', $user['User']['id']));}else{
					echo $this->Html->link(    "Re-Activate", array('action'=>'activate', $user['User']['id']));
					}
			?>
			</td>
		</tr>
		<?php endforeach; ?>
		<?php unset($user); ?>
	</tbody>
</table>
<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
<?php echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));?>
<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
</div>				
<?php echo $this->Html->link( "Thêm tài khoản.",   array('action'=>'add'),array('escape' => false) ); ?>
<br/>
<?php 
echo $this->Html->link( "Thoát",   array('action'=>'logout') ); 
?>
<br/>
<?php echo $this->Html->link("danh sách bài báo", array('controller'=>'Articles','action'=>'index')) ?>
<br/>
<?php echo $this->Html->link('cài đặt ngôn ngữ', array('controller'=>'Languages', 'action'=>'setting')) ?>