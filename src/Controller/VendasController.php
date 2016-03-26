<?php
	
	namespace App\Controller;
	use App\Controller\AppController;

	class VendasController extends AppController {
		
		public function index(){
			$this->paginate = array('limit' => 5);
			$this->set('vendas', $this->paginate($this->Vendas));
		}

		public function add(){
			$venda = $this->Vendas->newEntity();
			if($this->request->is(['post', 'put'])){
				$this->Vendas->patchEntity($venda, $this->request->data);
				if($this->Vendas->save($venda)){
					$this->Flash->success(__("Venda efetuada com sucesso!"));
					$this->redirect(['controller'=>'vendas','action'=>'index']);
				}else{
					$this->Flash->error(__("Adição com erro!"));
				}
			}
			$groups = $this->Vendas->Frutas->find('list');

			$this->set(compact('venda', 'groups'));
			$this->set('_serialize', ['venda']);
		}
	}


?>