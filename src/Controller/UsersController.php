<?php

	namespace App\Controller;
	use App\Controller\AppController;

	use Controller\Component\AuthComponent;
	use Cake\Event\Event;

	class UsersController extends AppController {

		public function login(){
			if($this->request->is('post')){
            	$user = $this->Auth->identify();
            if($user){
            	$this->Auth->setUser($user);
				$usuario = $this->request->data['username'];
	            	if($usuario=='administrador'){
		            	$this->Flash->success('Admin logado com sucesso!');
		                return $this->redirect(['controller' => 'frutas', 'action'=>'index']);
	            	}else{
	            		$this->Flash->success('Vendedor logado com sucesso!');
		                return $this->redirect(['controller' => 'vendas', 'action'=>'index']);
	            	}
            }
            	$this->Flash->error('Login inválido!');
            
        	}
		}

		public function logout(){
			$this->Flash->success('Você se desconectou!');
			return $this->redirect($this->Auth->logout());
		}

		public function add(){
			$user = $this->Users->newEntity();
	        if ($this->request->is('post')) {
	            $user = $this->Users->patchEntity($user, $this->request->data);
	            if ($this->Users->save($user)) {
	                $this->Flash->success(__('Usuario salvo com sucesso!'));
	                return $this->redirect(['action' => 'login']);
	            } else {
	                $this->Flash->error(__('The user could not be saved. Please, try again.'));
	            }
	        }
	        $this->set(compact('user'));
	        $this->set('_serialize', ['user']);
		}

		public function index(){

		}

	}

?>