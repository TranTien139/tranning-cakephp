<h1>Cài đặt ngôn ngữ</h1>
<?php echo $this->Html->link('trở về trang chủ',array('controller'=>'Users','action'=>'index')); ?>

<!-- <?php
if(empty($_COOKIE["language"])){
	$_COOKIE["language"] = "vi";
} ?>
 -->
<!-- <?php 
if(isset($_COOKIE["language"])){
	echo $_COOKIE["language"];
}else{
  echo '404';
}
 ?> -->

<?php 
echo $this->Form->create('Languages'); 
echo $this->Form->input('lang', array('class'=>'controlls','options' => array('vi'=>'Tiếng Việt', 'en'=>'English', 'jp'=>'Japanise')));

echo $this->Form->end(__('submit'), array('class' => 'test'));
?>

