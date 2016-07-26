<?php
	// App::uses('AppController','Controller');

	class ArticlesController extends AppController
	{
		public $components = array('Paginator','Flash');

		public function index() { 
			$this->Article->recursive = 0; 
			$this->set('posts', 
			$this->Paginator->paginate()); } 

		public function visitors(){ 
			$this->Article->recursive = 0; 
			$this->set('Articles', $this->Paginator->paginate()); }  

 		public function view($id = null) {
 			if (!$this->Article->exists($id)) {
 			throw new NotFoundException(__('Invalid Article')); } 
 			$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id)); $this->set('Article', $this->Article->find('first', $options)); } 

 			public function add() {
 			 	if ($this->request->is('post')) {
			 		$this->Article->create(); 
			 		if ($this->Article->save($this->request->data)) { 
			 		$this->Flash->success(__('The Article has been saved.')); 
			 		return $this->redirect(array('action' => 'index'));} else { 
			 		$this->Flash->success(__('The Article could not be saved. Please, try again.')); } } } 

 			public function edit($id = null) { 
 				if (!$this->Article->exists($id)) { 
 					throw new NotFoundException(__('Invalid post'));
 					if ($this->request->is(array('post', 'put'))) { 
 					if ($this->Article->save($this->request->data)) { $this->Flash->success(__('The post has been saved.')); 
 						return $this->redirect(array('action' => 'index')); }
 							else { $this->Flash->success(__('The post could not be saved. Please, try again.')); } } else { 
 								$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id)); $this->request->data = $this->Article->find('first', $options); } } }

			public function delete($id = null) { 
				$this->Article->id = $id; if (!$this->Article->exists()) { throw new NotFoundException(__('Invalid Article')); }
				$this->request->allowMethod('post', 'delete'); 
				if ($this->Article->delete()) { 
				$this->Flash->success(__('The Article has been deleted.')); } else {
				$this->Flash->success(__('The Article could not be deleted. Please, try again.')); } 
				return $this->redirect(array('action' => 'index')); }
	}
?>