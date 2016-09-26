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
     * Ver method
     *
     * @param string|null $id Sucursal id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $sucursal = $this->Sucursals->get($id, [
            'contain' => ['Softwares', 'Empresas', 'Usuarios']
        ]);

        $this->set('sucursal', $sucursal);
        $this->set('_serialize', ['sucursal']);
    }

    /**
     * Crear method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $sucursal = $this->Sucursals->newEntity();
        if ($this->request->is('post')) {
            $sucursal = $this->Sucursals->patchEntity($sucursal, $this->request->data);
            if ($this->Sucursals->save($sucursal)) {
                $this->Flash->success(__('La sucursal se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('La sucursal no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $softwares = $this->Sucursals->Softwares->find('list', ['limit' => 200]);
        $empresas = $this->Sucursals->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('sucursal', 'softwares', 'empresas'));
        $this->set('_serialize', ['sucursal']);
    }

    /**
     * Editar method
     *
     * @param string|null $id Sucursal id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $sucursal = $this->Sucursals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sucursal = $this->Sucursals->patchEntity($sucursal, $this->request->data);
            if ($this->Sucursals->save($sucursal)) {
                $this->Flash->success(__('La sucursal se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('La sucursal no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $softwares = $this->Sucursals->Softwares->find('list', ['limit' => 200]);
        $empresas = $this->Sucursals->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('sucursal', 'softwares', 'empresas'));
        $this->set('_serialize', ['sucursal']);
    }

    /**
     * Eliminar method
     *
     * @param string|null $id Sucursal id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sucursal = $this->Sucursals->get($id);
        if ($this->Sucursals->delete($sucursal)) {
            $this->Flash->success(__('La sucursal ha sido eliminado.'));
        } else {
            $this->Flash->error(__('La sucursal no ha podido ser eliminado. Por favor, intenta de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
