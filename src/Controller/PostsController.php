<?php 
	namespace App\Controller;
	use App\Controller\AppController;

	class PostsController extends AppController {

		public function index(){
			
			$this->paginate = array('limit' => 5);
			$this->set('posts', $this->paginate($this->Posts));
		}

		public function view($id = null){
			$post = $this->Posts->get($id);
			$this->set('post', $post);
		}

		public function add(){
			$post = $this->Posts->newEntity();
			if($this->request->is(['post', 'put'])){
				$this->Posts->patchEntity($post, $this->request->data);

				if($this->Posts->save($post)){
					$this->Flash->success(__("Post salvo com sucesso!"));
					$this->redirect(['action'=>'index']);
				}else{
					$this->Flash->success(__("Adição com erro!"));
				}
			}
			$this->set(compact('post'));
		}

		public function edit($id = null){
			$post = $this->Posts->get($id);
			if($this->request->is(['post', 'put'])){
				$this->Posts->patchEntity($post, $this->request->data);

				if($this->Posts->save($post)){
					$this->Flash->success(__("Post editado com sucesso!"));
					$this->redirect(['action'=>'index']);
				}else{
					$this->Flash->success(__("Edição com erro!"));
				}
			}
			$this->set(compact('post'));
		}

		public function delete($id = null){
			$this->request->allowMethod(['post', 'delete']);
			$post = $this->Posts->get($id);
			if($this->Posts->delete($post)){
				$this->Flash->success(__("Excluido com sucesso!"));
			}else{
				$this->Flash->success(__("Erro ao excluir!"));
			}
			$this->redirect(['action'=>'index']);
		}

	}
	
?>