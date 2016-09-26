<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 */
class UsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TipoUsuarios', 'Empresas', 'Sucursals']
        ];
        $usuarios = $this->paginate($this->Usuarios);

        $this->set(compact('usuarios'));
        $this->set('_serialize', ['usuarios']);
    }

    /**
     * Ver method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => ['TipoUsuarios', 'Empresas', 'Sucursals']
        ]);

        $this->set('usuario', $usuario);
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Crear method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $usuario = $this->Usuarios->newEntity();
        if ($this->request->is('post')) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('El usuario se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El usuario no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $tipoUsuarios = $this->Usuarios->TipoUsuarios->find('list', ['limit' => 200]);
        $empresas = $this->Usuarios->Empresas->find('list', ['limit' => 200]);
        $sucursals = $this->Usuarios->Sucursals->find('list', ['limit' => 200]);
        $this->set(compact('usuario', 'tipoUsuarios', 'empresas', 'sucursals'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Editar method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('El usuario se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El usuario no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $tipoUsuarios = $this->Usuarios->TipoUsuarios->find('list', ['limit' => 200]);
        $empresas = $this->Usuarios->Empresas->find('list', ['limit' => 200]);
        $sucursals = $this->Usuarios->Sucursals->find('list', ['limit' => 200]);
        $this->set(compact('usuario', 'tipoUsuarios', 'empresas', 'sucursals'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Diseniadores method
     *
     * @return \Cake\Network\Response|null
     */
    public function diseniadores() {
        $titulo = 'Diseñadores';
        $this->paginate = [
            'contain' => ['TipoUsuarios', 'Empresas', 'Sucursals']
        ];
        $usuariosQuery = $this->Usuarios
            ->find()
            ->where(['tipo_usuario_id =' => 4]);
        $usuarios = $this->paginate($usuariosQuery);

        $this->set(compact('usuarios'));
        $this->set('_serialize', ['usuarios']);

        $this->render('index');
    }

    /**
     * Vendedores method
     *
     * @return \Cake\Network\Response|null
     */
    public function vendedores() {
        $titulo = 'Vendedores';
        $this->paginate = [
            'contain' => ['TipoUsuarios', 'Empresas', 'Sucursals']
        ];
        $usuariosQuery = $this->Usuarios
            ->find()
            ->where(['tipo_usuario_id =' => 5]);
        $usuarios = $this->paginate($usuariosQuery);

        $this->set(compact('usuarios'));
        $this->set('_serialize', ['usuarios']);

        $this->set(compact('titulo'));
        $this->render('index');
    }

    /**
     * Control method
     *
     * @return \Cake\Network\Response|null
     */
    public function control() {
        $titulo = 'Vendedores';
        $this->paginate = [
            'contain' => ['TipoUsuarios', 'Empresas', 'Sucursals']
        ];
        $usuariosQuery = $this->Usuarios
            ->find()
            ->where(['tipo_usuario_id =' => 3]);
        $usuarios = $this->paginate($usuariosQuery);

        $this->set(compact('usuarios'));
        $this->set('_serialize', ['usuarios']);

        $this->set(compact('titulo'));
        $this->render('index');
    }

    /**
     * Produccion method
     *
     * @return \Cake\Network\Response|null
     */
    public function produccion() {
        $titulo = 'Vendedores';
        $this->paginate = [
            'contain' => ['TipoUsuarios', 'Empresas', 'Sucursals']
        ];
        $usuariosQuery = $this->Usuarios
            ->find()
            ->where(['tipo_usuario_id =' => 6]);
        $usuarios = $this->paginate($usuariosQuery);

        $this->set(compact('usuarios'));
        $this->set('_serialize', ['usuarios']);

        $this->set(compact('titulo'));
        $this->render('index');
    }


    /**
     * Eliminar method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('El usuario ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El usuario no ha podido ser eliminado. Por favor, intenta de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
