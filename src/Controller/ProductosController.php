<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Productos Controller
 *
 * @property \App\Model\Table\ProductosTable $Productos
 */
class ProductosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CategoriaProductos']
        ];
        $productos = $this->paginate($this->Productos);

        $this->set(compact('productos'));
        $this->set('_serialize', ['productos']);
    }

    /**
     * Ver method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $producto = $this->Productos->get($id, [
            'contain' => ['CategoriaProductos']
        ]);

        $this->set('producto', $producto);
        $this->set('_serialize', ['producto']);
    }

    /**
     * Crear method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $producto = $this->Productos->newEntity();
        if ($this->request->is('post')) {
            $producto = $this->Productos->patchEntity($producto, $this->request->data);
            if ($this->Productos->save($producto)) {
                $this->Flash->success(__('The producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The producto could not be saved. Please, try again.'));
            }
        }
        $categoriaProductos = $this->Productos->CategoriaProductos->find('list', ['limit' => 200]);
        $this->set(compact('producto', 'categoriaProductos'));
        $this->set('_serialize', ['producto']);
    }

    /**
     * Editar method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $producto = $this->Productos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $producto = $this->Productos->patchEntity($producto, $this->request->data);
            if ($this->Productos->save($producto)) {
                $this->Flash->success(__('El producto se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El producto no ha podido ser guardado. Por favor, intenta de nuevo.'));
            }
        }
        $categoriaProductos = $this->Productos->CategoriaProductos->find('list', ['limit' => 200]);
        $this->set(compact('producto', 'categoriaProductos'));
        $this->set('_serialize', ['producto']);
    }

    /**
     * Eliminar method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $producto = $this->Productos->get($id);
        if ($this->Productos->delete($producto)) {
            $this->Flash->success(__('El producto ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El producto ser eliminado. Por favor, intenta de nuevo.'));
        }


        return $this->redirect(['action' => 'index']);
    }
}
