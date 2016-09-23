<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estudios Controller
 *
 * @property \App\Model\Table\EstudiosTable $Estudios
 */
class EstudiosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pacientes']
        ];
        $estudios = $this->paginate($this->Estudios);

        $this->set(compact('estudios'));
        $this->set('_serialize', ['estudios']);
    }

    /**
     * View method
     *
     * @param string|null $id Estudio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estudio = $this->Estudios->get($id, [
            'contain' => ['Pacientes', 'Pedidos']
        ]);

        $this->set('estudio', $estudio);
        $this->set('_serialize', ['estudio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estudio = $this->Estudios->newEntity();
        if ($this->request->is('post')) {
            $estudio = $this->Estudios->patchEntity($estudio, $this->request->data);
            if ($this->Estudios->save($estudio)) {
                $this->Flash->success(__('The estudio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The estudio could not be saved. Please, try again.'));
            }
        }
        $pacientes = $this->Estudios->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('estudio', 'pacientes'));
        $this->set('_serialize', ['estudio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estudio id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estudio = $this->Estudios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estudio = $this->Estudios->patchEntity($estudio, $this->request->data);
            if ($this->Estudios->save($estudio)) {
                $this->Flash->success(__('The estudio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The estudio could not be saved. Please, try again.'));
            }
        }
        $pacientes = $this->Estudios->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('estudio', 'pacientes'));
        $this->set('_serialize', ['estudio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estudio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estudio = $this->Estudios->get($id);
        if ($this->Estudios->delete($estudio)) {
            $this->Flash->success(__('The estudio has been deleted.'));
        } else {
            $this->Flash->error(__('The estudio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
