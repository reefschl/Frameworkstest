<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Kuchen Controller
 *
 * @property \App\Model\Table\KuchenTable $Kuchen
 * @method \App\Model\Entity\Kuchen[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KuchenController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $kuchen = $this->paginate($this->Kuchen);

        $this->set(compact('kuchen'));
    }

    /**
     * View method
     *
     * @param string|null $id Kuchen id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kuchen = $this->Kuchen->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('kuchen'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kuchen = $this->Kuchen->newEmptyEntity();
        if ($this->request->is('post')) {
            $kuchen = $this->Kuchen->patchEntity($kuchen, $this->request->getData());
            if ($this->Kuchen->save($kuchen)) {
                $this->Flash->success(__('The kuchen has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kuchen could not be saved. Please, try again.'));
        }
        $this->set(compact('kuchen'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Kuchen id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kuchen = $this->Kuchen->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kuchen = $this->Kuchen->patchEntity($kuchen, $this->request->getData());
            if ($this->Kuchen->save($kuchen)) {
                $this->Flash->success(__('The kuchen has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kuchen could not be saved. Please, try again.'));
        }
        $this->set(compact('kuchen'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Kuchen id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kuchen = $this->Kuchen->get($id);
        if ($this->Kuchen->delete($kuchen)) {
            $this->Flash->success(__('The kuchen has been deleted.'));
        } else {
            $this->Flash->error(__('The kuchen could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
