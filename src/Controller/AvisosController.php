<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Avisos Controller
 *
 * @property \App\Model\Table\AvisosTable $Avisos
 */
class AvisosController extends AppController
{
    public $paginate = [
        'limit' => 10,
        'order' => [
            'Avisos.id' => 'desc'
        ]
    ];

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate['contain'] = ['Usuarios', 'Empresas'];
        $avisos = $this->paginate($this->Avisos);

        $this->set(compact('avisos'));
        $this->set('_serialize', ['avisos']);
    }

    /**
     * Administrar method
     *
     * @return \Cake\Network\Response|null
     */
    public function administrar()
    {
        $this->paginate['contain'] = ['Usuarios', 'Empresas'];
        $avisos = $this->paginate($this->Avisos);

        $this->set(compact('avisos'));
        $this->set('_serialize', ['avisos']);
    }

    /**
     * Ver method
     *
     * @param string|null $id Aviso id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $aviso = $this->Avisos->get($id, [
            'contain' => ['Usuarios', 'Empresas']
        ]);

        $this->set('aviso', $aviso);
        $this->set('_serialize', ['aviso']);
    }

    /**
     * Crear method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $aviso = $this->Avisos->newEntity();
        if ($this->request->is('post')) {
            $aviso = $this->Avisos->patchEntity($aviso, $this->request->data);
            if ($this->Avisos->save($aviso)) {
                $this->Flash->success(__('El aviso se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El aviso no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $usuarios = $this->Avisos->Usuarios->find('list', ['limit' => 200]);
        $empresas = $this->Avisos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('aviso', 'usuarios', 'empresas'));
        $this->set('_serialize', ['aviso']);
    }

    /**
     * Editar method
     *
     * @param string|null $id Aviso id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $aviso = $this->Avisos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aviso = $this->Avisos->patchEntity($aviso, $this->request->data);
            if ($this->Avisos->save($aviso)) {
                $this->Flash->success(__('El aviso se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El aviso no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $usuarios = $this->Avisos->Usuarios->find('list', ['limit' => 200]);
        $empresas = $this->Avisos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('aviso', 'usuarios', 'empresas'));
        $this->set('_serialize', ['aviso']);
    }

    /**
     * Eliminar method
     *
     * @param string|null $id Aviso id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aviso = $this->Avisos->get($id);
        if ($this->Avisos->delete($aviso)) {
            $this->Flash->success(__('El aviso ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El aviso no ha podido ser eliminado. Por favor, intenta de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
