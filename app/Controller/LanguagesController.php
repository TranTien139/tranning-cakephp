<?php 

class LanguagesController extends AppController
{
	public function setting(){
		if($this->request->is('post')){
			
			$value = $this->request->data['Languages']['lang'];
			setcookie( 'language', $value, time() + 60*30,'/' );
			$this->Flash->success(__('lưu thành công'));

		}else{
			//$this->Flash->success(__('lưu thất bại'));
		}
	}

}
 ?>