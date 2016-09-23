<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoUsuarios Controller
 *
 * @property \App\Model\Table\TipoUsuariosTable $TipoUsuarios
 */
class TipoUsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tipoUsuarios = $this->paginate($this->TipoUsuarios);

        $this->set(compact('tipoUsuarios'));
        $this->set('_serialize', ['tipoUsuarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Usuario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoUsuario = $this->TipoUsuarios->get($id, [
            'contain' => ['Usuarios']
        ]);

        $this->set('tipoUsuario', $tipoUsuario);
        $this->set('_serialize', ['tipoUsuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoUsuario = $this->TipoUsuarios->newEntity();
        if ($this->request->is('post')) {
            $tipoUsuario = $this->TipoUsuarios->patchEntity($tipoUsuario, $this->request->data);
            if ($this->TipoUsuarios->save($tipoUsuario)) {
                $this->Flash->success(__('The tipo usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo usuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoUsuario'));
        $this->set('_serialize', ['tipoUsuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Usuario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoUsuario = $this->TipoUsuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoUsuario = $this->TipoUsuarios->patchEntity($tipoUsuario, $this->request->data);
            if ($this->TipoUsuarios->save($tipoUsuario)) {
                $this->Flash->success(__('The tipo usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo usuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoUsuario'));
        $this->set('_serialize', ['tipoUsuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoUsuario = $this->TipoUsuarios->get($id);
        if ($this->TipoUsuarios->delete($tipoUsuario)) {
            $this->Flash->success(__('The tipo usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
