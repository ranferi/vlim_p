<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Recubrimientos Controller
 *
 * @property \App\Model\Table\RecubrimientosTable $Recubrimientos
 */
class RecubrimientosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $recubrimientos = $this->paginate($this->Recubrimientos);

        $this->set(compact('recubrimientos'));
        $this->set('_serialize', ['recubrimientos']);
    }

    /**
     * View method
     *
     * @param string|null $id Recubrimiento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recubrimiento = $this->Recubrimientos->get($id, [
            'contain' => []
        ]);

        $this->set('recubrimiento', $recubrimiento);
        $this->set('_serialize', ['recubrimiento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recubrimiento = $this->Recubrimientos->newEntity();
        if ($this->request->is('post')) {
            $recubrimiento = $this->Recubrimientos->patchEntity($recubrimiento, $this->request->data);
            if ($this->Recubrimientos->save($recubrimiento)) {
                $this->Flash->success(__('The recubrimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recubrimiento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('recubrimiento'));
        $this->set('_serialize', ['recubrimiento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recubrimiento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recubrimiento = $this->Recubrimientos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recubrimiento = $this->Recubrimientos->patchEntity($recubrimiento, $this->request->data);
            if ($this->Recubrimientos->save($recubrimiento)) {
                $this->Flash->success(__('The recubrimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recubrimiento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('recubrimiento'));
        $this->set('_serialize', ['recubrimiento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recubrimiento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recubrimiento = $this->Recubrimientos->get($id);
        if ($this->Recubrimientos->delete($recubrimiento)) {
            $this->Flash->success(__('The recubrimiento has been deleted.'));
        } else {
            $this->Flash->error(__('The recubrimiento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
