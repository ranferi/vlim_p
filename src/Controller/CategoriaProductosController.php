<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoriaProductos Controller
 *
 * @property \App\Model\Table\CategoriaProductosTable $CategoriaProductos
 */
class CategoriaProductosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TipoProductos']
        ];
        $categoriaProductos = $this->paginate($this->CategoriaProductos);

        $this->set(compact('categoriaProductos'));
        $this->set('_serialize', ['categoriaProductos']);
    }

    /**
     * Ver method
     *
     * @param string|null $id Categoria Producto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $categoriaProducto = $this->CategoriaProductos->get($id, [
            'contain' => ['TipoProductos', 'Productos']
        ]);

        $this->set('categoriaProducto', $categoriaProducto);
        $this->set('_serialize', ['categoriaProducto']);
    }

    /**
     * Crear method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $categoriaProducto = $this->CategoriaProductos->newEntity();
        if ($this->request->is('post')) {
            $categoriaProducto = $this->CategoriaProductos->patchEntity($categoriaProducto, $this->request->data);
            if ($this->CategoriaProductos->save($categoriaProducto)) {
                $this->Flash->success(__('La categoría de productos se ha guardada.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('La categoría de productos no ha podido ser guardadoa. Por favor, intenta de nuevo.'));
            }
        }
        $tipoProductos = $this->CategoriaProductos->TipoProductos->find('list', ['limit' => 200]);
        $this->set(compact('categoriaProducto', 'tipoProductos'));
        $this->set('_serialize', ['categoriaProducto']);
    }

    /**
     * Editar method
     *
     * @param string|null $id Categoria Producto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $categoriaProducto = $this->CategoriaProductos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriaProducto = $this->CategoriaProductos->patchEntity($categoriaProducto, $this->request->data);
            if ($this->CategoriaProductos->save($categoriaProducto)) {
                $this->Flash->success(__('La categoría de productos se ha guardada.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('La categoría de productos no ha podido ser guardadoa. Por favor, intenta de nuevo.'));
            }
        }
        $tipoProductos = $this->CategoriaProductos->TipoProductos->find('list', ['limit' => 200]);
        $this->set(compact('categoriaProducto', 'tipoProductos'));
        $this->set('_serialize', ['categoriaProducto']);
    }

    /**
     * Eliminar method
     *
     * @param string|null $id Categoria Producto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriaProducto = $this->CategoriaProductos->get($id);
        if ($this->CategoriaProductos->delete($categoriaProducto)) {
            $this->Flash->success(__('La categoría de productos ha sido eliminada.'));
        } else {
            $this->Flash->error(__('La categoría de productos ser eliminada. Por favor, intenta de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
