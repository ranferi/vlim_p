<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sucursals Controller
 *
 * @property \App\Model\Table\SucursalsTable $Sucursals
 */
class SucursalsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Softwares', 'Empresas']
        ];
        $sucursals = $this->paginate($this->Sucursals);

        $this->set(compact('sucursals'));
        $this->set('_serialize', ['sucursals']);
    }

    /**
     * View method
     *
     * @param string|null $id Sucursal id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sucursal = $this->Sucursals->get($id, [
            'contain' => ['Softwares', 'Empresas', 'Usuarios']
        ]);

        $this->set('sucursal', $sucursal);
        $this->set('_serialize', ['sucursal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sucursal = $this->Sucursals->newEntity();
        if ($this->request->is('post')) {
            $sucursal = $this->Sucursals->patchEntity($sucursal, $this->request->data);
            if ($this->Sucursals->save($sucursal)) {
                $this->Flash->success(__('The sucursal has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sucursal could not be saved. Please, try again.'));
            }
        }
        $softwares = $this->Sucursals->Softwares->find('list', ['limit' => 200]);
        $empresas = $this->Sucursals->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('sucursal', 'softwares', 'empresas'));
        $this->set('_serialize', ['sucursal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sucursal id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sucursal = $this->Sucursals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sucursal = $this->Sucursals->patchEntity($sucursal, $this->request->data);
            if ($this->Sucursals->save($sucursal)) {
                $this->Flash->success(__('The sucursal has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sucursal could not be saved. Please, try again.'));
            }
        }
        $softwares = $this->Sucursals->Softwares->find('list', ['limit' => 200]);
        $empresas = $this->Sucursals->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('sucursal', 'softwares', 'empresas'));
        $this->set('_serialize', ['sucursal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sucursal id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sucursal = $this->Sucursals->get($id);
        if ($this->Sucursals->delete($sucursal)) {
            $this->Flash->success(__('The sucursal has been deleted.'));
        } else {
            $this->Flash->error(__('The sucursal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
