<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Softwares Controller
 *
 * @property \App\Model\Table\SoftwaresTable $Softwares
 */
class SoftwaresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $softwares = $this->paginate($this->Softwares);

        $this->set(compact('softwares'));
        $this->set('_serialize', ['softwares']);
    }

    /**
     * Ver method
     *
     * @param string|null $id Software id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $software = $this->Softwares->get($id, [
            'contain' => ['Sucursals']
        ]);

        $this->set('software', $software);
        $this->set('_serialize', ['software']);
    }

    /**
     * Crear method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $software = $this->Softwares->newEntity();
        if ($this->request->is('post')) {
            $software = $this->Softwares->patchEntity($software, $this->request->data);
            if ($this->Softwares->save($software)) {
                $this->Flash->success(__('El tipo de software se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El tipo de software no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $this->set(compact('software'));
        $this->set('_serialize', ['software']);
    }

    /**
     * Editar method
     *
     * @param string|null $id Software id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $software = $this->Softwares->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $software = $this->Softwares->patchEntity($software, $this->request->data);
            if ($this->Softwares->save($software)) {
                $this->Flash->success(__('El tipo de software se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El tipo de software no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $this->set(compact('software'));
        $this->set('_serialize', ['software']);
    }

    /**
     * Eliminar method
     *
     * @param string|null $id Software id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $software = $this->Softwares->get($id);
        if ($this->Softwares->delete($software)) {
            $this->Flash->success(__('El tipo de software ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El tipo de software no ha podido ser eliminado. Por favor, intenta de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
