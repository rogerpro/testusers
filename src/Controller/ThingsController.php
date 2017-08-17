<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Things Controller
 *
 * @property \App\Model\Table\ThingsTable $Things
 *
 * @method \App\Model\Entity\Thing[] paginate($object = null, array $settings = [])
 */
class ThingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $things = $this->paginate($this->Things);

        $this->set(compact('things'));
        $this->set('_serialize', ['things']);
    }

    /**
     * View method
     *
     * @param string|null $id Thing id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $thing = $this->Things->get($id, [
            'contain' => []
        ]);

        $this->set('thing', $thing);
        $this->set('_serialize', ['thing']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $thing = $this->Things->newEntity();
        if ($this->request->is('post')) {
            $thing = $this->Things->patchEntity($thing, $this->request->getData());
            if ($this->Things->save($thing)) {
                $this->Flash->success(__('The thing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The thing could not be saved. Please, try again.'));
        }
        $this->set(compact('thing'));
        $this->set('_serialize', ['thing']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Thing id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $thing = $this->Things->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $thing = $this->Things->patchEntity($thing, $this->request->getData());
            if ($this->Things->save($thing)) {
                $this->Flash->success(__('The thing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The thing could not be saved. Please, try again.'));
        }
        $this->set(compact('thing'));
        $this->set('_serialize', ['thing']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Thing id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $thing = $this->Things->get($id);
        if ($this->Things->delete($thing)) {
            $this->Flash->success(__('The thing has been deleted.'));
        } else {
            $this->Flash->error(__('The thing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
