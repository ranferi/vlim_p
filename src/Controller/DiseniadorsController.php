<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Diseniadors Controller
 *
 * @property \App\Model\Table\DiseniadorsTable $Diseniadors
 */
class DiseniadorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios']
        ];
        $diseniadors = $this->paginate($this->Diseniadors);

        $this->set(compact('diseniadors'));
        $this->set('_serialize', ['diseniadors']);
    }

    /**
     * View method
     *
     * @param string|null $id Diseniador id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $diseniador = $this->Diseniadors->get($id, [
            'contain' => ['Usuarios', 'Pedidos']
        ]);

        $this->set('diseniador', $diseniador);
        $this->set('_serialize', ['diseniador']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $diseniador = $this->Diseniadors->newEntity();
        if ($this->request->is('post')) {
            $diseniador = $this->Diseniadors->patchEntity($diseniador, $this->request->data);
            if ($this->Diseniadors->save($diseniador)) {
                $this->Flash->success(__('The diseniador has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The diseniador could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Diseniadors->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('diseniador', 'usuarios'));
        $this->set('_serialize', ['diseniador']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Diseniador id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diseniador = $this->Diseniadors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diseniador = $this->Diseniadors->patchEntity($diseniador, $this->request->data);
            if ($this->Diseniadors->save($diseniador)) {
                $this->Flash->success(__('The diseniador has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The diseniador could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Diseniadors->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('diseniador', 'usuarios'));
        $this->set('_serialize', ['diseniador']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Diseniador id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diseniador = $this->Diseniadors->get($id);
        if ($this->Diseniadors->delete($diseniador)) {
            $this->Flash->success(__('The diseniador has been deleted.'));
        } else {
            $this->Flash->error(__('The diseniador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
