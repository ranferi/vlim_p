<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NumeroCalzados Controller
 *
 * @property \App\Model\Table\NumeroCalzadosTable $NumeroCalzados
 */
class NumeroCalzadosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $numeroCalzados = $this->paginate($this->NumeroCalzados);

        $this->set(compact('numeroCalzados'));
        $this->set('_serialize', ['numeroCalzados']);
    }

    /**
     * Ver method
     *
     * @param string|null $id Numero Calzado id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $numeroCalzado = $this->NumeroCalzados->get($id, [
            'contain' => ['Pacientes', 'Pedidos']
        ]);

        $this->set('numeroCalzado', $numeroCalzado);
        $this->set('_serialize', ['numeroCalzado']);
    }

    /**
     * Crear method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $numeroCalzado = $this->NumeroCalzados->newEntity();
        if ($this->request->is('post')) {
            $numeroCalzado = $this->NumeroCalzados->patchEntity($numeroCalzado, $this->request->data);
            if ($this->NumeroCalzados->save($numeroCalzado)) {
                $this->Flash->success(__('La talla de calzado se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('La talla de calzado no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $this->set(compact('numeroCalzado'));
        $this->set('_serialize', ['numeroCalzado']);
    }

    /**
     * Editar method
     *
     * @param string|null $id Numero Calzado id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $numeroCalzado = $this->NumeroCalzados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $numeroCalzado = $this->NumeroCalzados->patchEntity($numeroCalzado, $this->request->data);
            if ($this->NumeroCalzados->save($numeroCalzado)) {
                $this->Flash->success(__('La talla de calzado se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('La talla de calzado no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $this->set(compact('numeroCalzado'));
        $this->set('_serialize', ['numeroCalzado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Numero Calzado id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function Eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $numeroCalzado = $this->NumeroCalzados->get($id);
        if ($this->NumeroCalzados->delete($numeroCalzado)) {
            $this->Flash->success(__('La talla de calzado ha sido eliminado.'));
        } else {
            $this->Flash->error(__('La talla de calzado no ha podido ser eliminado. Por favor, intenta de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
