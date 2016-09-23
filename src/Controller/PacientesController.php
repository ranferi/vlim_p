<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pacientes Controller
 *
 * @property \App\Model\Table\PacientesTable $Pacientes
 */
class PacientesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['NumeroCalzados']
        ];
        $pacientes = $this->paginate($this->Pacientes);

        $this->set(compact('pacientes'));
        $this->set('_serialize', ['pacientes']);
    }

    /**
     * Ver method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $paciente = $this->Pacientes->get($id, [
            'contain' => ['NumeroCalzados', 'Disenios', 'Estudios', 'Pedidos']
        ]);

        $this->set('paciente', $paciente);
        $this->set('_serialize', ['paciente']);
    }

    /**
     * Crear method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $paciente = $this->Pacientes->newEntity();
        if ($this->request->is('post')) {
            $paciente = $this->Pacientes->patchEntity($paciente, $this->request->data);
            if ($this->Pacientes->save($paciente)) {
                $this->Flash->success(__('El paciente se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El paciente no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $numeroCalzados = $this->Pacientes->NumeroCalzados->find('list', ['limit' => 200]);
        $this->set(compact('paciente', 'numeroCalzados'));
        $this->set('_serialize', ['paciente']);
    }

    /**
     * Editar method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $paciente = $this->Pacientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paciente = $this->Pacientes->patchEntity($paciente, $this->request->data);
            if ($this->Pacientes->save($paciente)) {
                $this->Flash->success(__('El paciente se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El paciente no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $numeroCalzados = $this->Pacientes->NumeroCalzados->find('list', ['limit' => 200]);
        $this->set(compact('paciente', 'numeroCalzados'));
        $this->set('_serialize', ['paciente']);
    }

    /**
     * Eliminar method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paciente = $this->Pacientes->get($id);
        if ($this->Pacientes->delete($paciente)) {
            $this->Flash->success(__('El paciente ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El paciente no ha podido ser eliminado. Por favor, intenta de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
