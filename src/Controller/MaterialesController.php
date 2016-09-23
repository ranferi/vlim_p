<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Materiales Controller
 *
 * @property \App\Model\Table\MaterialesTable $Materiales
 */
class MaterialesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $materiales = $this->paginate($this->Materiales);

        $this->set(compact('materiales'));
        $this->set('_serialize', ['materiales']);
    }

    /**
     * Ver method
     *
     * @param string|null $id Materiale id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $materiale = $this->Materiales->get($id, [
            'contain' => []
        ]);

        $this->set('materiale', $materiale);
        $this->set('_serialize', ['materiale']);
    }

    /**
     * Crear method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $materiale = $this->Materiales->newEntity();
        if ($this->request->is('post')) {
            $materiale = $this->Materiales->patchEntity($materiale, $this->request->data);
            if ($this->Materiales->save($materiale)) {
                $this->Flash->success(__('El material se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El material no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $this->set(compact('materiale'));
        $this->set('_serialize', ['materiale']);
    }

    /**
     * Editar method
     *
     * @param string|null $id Materiale id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $materiale = $this->Materiales->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materiale = $this->Materiales->patchEntity($materiale, $this->request->data);
            if ($this->Materiales->save($materiale)) {
                $this->Flash->success(__('El material se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El material no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $this->set(compact('materiale'));
        $this->set('_serialize', ['materiale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Materiale id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function Eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materiale = $this->Materiales->get($id);
        if ($this->Materiales->delete($materiale)) {
            $this->Flash->success(__('El material ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El material no ha podido ser eliminado. Por favor, intenta de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
