<?php

	namespace App\Controller;
	use App\Controller\AppController;
	class FrutasController extends AppController {

		public function index(){
			$this->paginate = array('limit' => 3);
			$this->set('frutas', $this->paginate($this->Frutas));
		}

		public function add(){
			$fruta = $this->Frutas->newEntity();
			if($this->request->is(['post', 'put'])){
				$this->Frutas->patchEntity($fruta, $this->request->data);
				if($this->Frutas->save($fruta)){
					$this->Flash->success(__("Fruta salva com sucesso!"));
					$this->redirect(['action'=>'index']);
				}else{
					$this->Flash->success(__("Adição com erro!"));
				}
			}
			$this->set(compact('fruta'));
		}

		public function edit($id = null){
			$fruta = $this->Frutas->get($id);
			if($this->request->is(['post', 'put'])){
				$this->Frutas->patchEntity($fruta, $this->request->data);
				if($this->Frutas->save($fruta)){
					$this->Flash->success(__("Fruta editada com sucesso!"));
					$this->redirect(['action'=>'index']);
				}else{
					$this->Flash->success(__("Edição com erro!"));
				}
			}
			$this->set(compact('fruta'));
		}

		public function delete($id = null){
			$this->request->allowMethod(['post', 'delete']);
			$fruta = $this->Frutas->get($id);
			if($this->Frutas->delete($fruta)){
				$this->Flash->success(__("Fruta excluida com sucesso!"));
			}else{
				$this->Flash->success(__("Erro ao excluir!"));
			}
			$this->redirect(['action'=>'index']);
		}

	}

?>