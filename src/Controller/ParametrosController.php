<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Parametros Controller
 *
 * @property \App\Model\Table\ParametrosTable $Parametros
 */
class ParametrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $parametros = $this->paginate($this->Parametros);

        $this->set(compact('parametros'));
        $this->set('_serialize', ['parametros']);
    }

    /**
     * Ver method
     *
     * @param string|null $id Parametro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $parametro = $this->Parametros->get($id, [
            'contain' => []
        ]);

        $this->set('parametro', $parametro);
        $this->set('_serialize', ['parametro']);
    }

    /**
     * Crear method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $parametro = $this->Parametros->newEntity();
        if ($this->request->is('post')) {
            $parametro = $this->Parametros->patchEntity($parametro, $this->request->data);
            if ($this->Parametros->save($parametro)) {
                $this->Flash->success(__('El parametro se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El parametro no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $this->set(compact('parametro'));
        $this->set('_serialize', ['parametro']);
    }

    /**
     * Editar method
     *
     * @param string|null $id Parametro id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $parametro = $this->Parametros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $parametro = $this->Parametros->patchEntity($parametro, $this->request->data);
            if ($this->Parametros->save($parametro)) {
                $this->Flash->success(__('El parametro se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El parametro no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $this->set(compact('parametro'));
        $this->set('_serialize', ['parametro']);
    }

    /**
     * Eliminar method
     *
     * @param string|null $id Parametro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $parametro = $this->Parametros->get($id);
        if ($this->Parametros->delete($parametro)) {
            $this->Flash->success(__('El parametro ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El parametro ser eliminado. Por favor, intenta de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
