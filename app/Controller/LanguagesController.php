<?php 

class LanguagesController extends AppController
{
	public function add(){
		if($this->request->is('post')){
			$this->Language->create();
			if($this->Language->save($this->request->data)){
				$this->Flash->success(__('tạo ngôn ngữ thành công'));
				$this->readirect(array('action'=>'dashboard'));
			}
			else{
				$this->Flash->error(__('tạo ngôn ngữ thất bại'));
			}
		}
	}

}
 ?>