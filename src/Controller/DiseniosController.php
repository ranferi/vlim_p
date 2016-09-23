<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Disenios Controller
 *
 * @property \App\Model\Table\DiseniosTable $Disenios
 */
class DiseniosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios', 'Pacientes', 'Pedidos']
        ];
        $disenios = $this->paginate($this->Disenios);

        $this->set(compact('disenios'));
        $this->set('_serialize', ['disenios']);
    }

    /**
     * View method
     *
     * @param string|null $id Disenio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $disenio = $this->Disenios->get($id, [
            'contain' => ['Usuarios', 'Pacientes', 'Pedidos']
        ]);

        $this->set('disenio', $disenio);
        $this->set('_serialize', ['disenio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $disenio = $this->Disenios->newEntity();
        if ($this->request->is('post')) {
            $disenio = $this->Disenios->patchEntity($disenio, $this->request->data);
            if ($this->Disenios->save($disenio)) {
                $this->Flash->success(__('The disenio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The disenio could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Disenios->Usuarios->find('list', ['limit' => 200]);
        $pacientes = $this->Disenios->Pacientes->find('list', ['limit' => 200]);
        $pedidos = $this->Disenios->Pedidos->find('list', ['limit' => 200]);
        $this->set(compact('disenio', 'usuarios', 'pacientes', 'pedidos'));
        $this->set('_serialize', ['disenio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Disenio id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $disenio = $this->Disenios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $disenio = $this->Disenios->patchEntity($disenio, $this->request->data);
            if ($this->Disenios->save($disenio)) {
                $this->Flash->success(__('The disenio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The disenio could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Disenios->Usuarios->find('list', ['limit' => 200]);
        $pacientes = $this->Disenios->Pacientes->find('list', ['limit' => 200]);
        $pedidos = $this->Disenios->Pedidos->find('list', ['limit' => 200]);
        $this->set(compact('disenio', 'usuarios', 'pacientes', 'pedidos'));
        $this->set('_serialize', ['disenio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Disenio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $disenio = $this->Disenios->get($id);
        if ($this->Disenios->delete($disenio)) {
            $this->Flash->success(__('The disenio has been deleted.'));
        } else {
            $this->Flash->error(__('The disenio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
