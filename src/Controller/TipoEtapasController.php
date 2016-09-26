<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoEtapas Controller
 *
 * @property \App\Model\Table\TipoEtapasTable $TipoEtapas
 */
class TipoEtapasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tipoEtapas = $this->paginate($this->TipoEtapas);

        $this->set(compact('tipoEtapas'));
        $this->set('_serialize', ['tipoEtapas']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Etapa id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoEtapa = $this->TipoEtapas->get($id, [
            'contain' => ['Pedidos']
        ]);

        $this->set('tipoEtapa', $tipoEtapa);
        $this->set('_serialize', ['tipoEtapa']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoEtapa = $this->TipoEtapas->newEntity();
        if ($this->request->is('post')) {
            $tipoEtapa = $this->TipoEtapas->patchEntity($tipoEtapa, $this->request->data);
            if ($this->TipoEtapas->save($tipoEtapa)) {
                $this->Flash->success(__('The tipo etapa has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo etapa could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoEtapa'));
        $this->set('_serialize', ['tipoEtapa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Etapa id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoEtapa = $this->TipoEtapas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoEtapa = $this->TipoEtapas->patchEntity($tipoEtapa, $this->request->data);
            if ($this->TipoEtapas->save($tipoEtapa)) {
                $this->Flash->success(__('The tipo etapa has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo etapa could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoEtapa'));
        $this->set('_serialize', ['tipoEtapa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Etapa id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoEtapa = $this->TipoEtapas->get($id);
        if ($this->TipoEtapas->delete($tipoEtapa)) {
            $this->Flash->success(__('The tipo etapa has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo etapa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
