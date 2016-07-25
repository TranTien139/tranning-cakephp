<?php

class UsersController extends AppController {

	public $paginate = array(
        'limit' => 25,
        'conditions' => array('status' => '1'),
    	'order' => array('User.username' => 'asc' ) 
    );
	
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login','add'); 
    }
	
	public function login() {
		
		//if already logged-in, redirect
		if($this->Session->check('Auth.User')){
			$this->redirect(array('action' => 'index'));		
		}
		
		// if we get the post information, try to authenticate
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->Flash->success(__('Xin chào, '. $this->Auth->user('username')));
				$this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Flash->error(__('sai tên đăng nhập hoặc mật khẩu'));
			}
		} 
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}

    public function index() {
		$this->paginate = array(
			'limit' => 6,
			'order' => array('User.username' => 'asc' )
		);
		$users = $this->paginate('User');
		$this->set(compact('users'));
    }


    public function add() {
        if ($this->request->is('post')) {
				
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('tài khoản đã được tạo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('tài khoản không thể tạo, vui lòng thủ lại'));
			}	
        }
    }

    public function edit($id = null) {

		    if (!$id) {
				$this->Flash->error('vui long cung cấp id tài khoản');
				$this->redirect(array('action'=>'index'));
			}

			$user = $this->User->findById($id);
			if (!$user) {
				$this->Flash->error('cung cấp id không hợp lệ');
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->User->id = $id;
				if ($this->User->save($this->request->data)) {
					$this->Flash->success(__('tài khoản được cập nhật'));
					$this->redirect(array('action' => 'edit', $id));
				}else{
					$this->Flash->error(__('không thể cập nhật tài khoản'));
				}
			}

			if (!$this->request->data) {
				$this->request->data = $user;
			}
    }

    public function delete($id = null) {
		
		if (!$id) {
			$this->Flash->error('vui lòng cung cấp id');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Flash->error('cung cấp id không hợp lệ');
			$this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 0)) {
            $this->Flash->success(__('xóa thành công'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('tài khoán không thể xóa'));
        $this->redirect(array('action' => 'index'));
    }
	
	public function activate($id = null) {
		
		if (!$id) {
			$this->Flash->error('vui lòng cung cấp id');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Flash->error('sai id tài khoản');
			$this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 1)) {
            $this->Flash->success(__('tài khoản được active'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('tài khoản chưa được active'));
        $this->redirect(array('action' => 'index'));
    }

}

?>