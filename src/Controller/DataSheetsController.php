<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DataSheets Controller
 *
 * @property \App\Model\Table\DataSheetsTable $DataSheets
 *
 * @method \App\Model\Entity\DataSheet[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DataSheetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Data']
        ];
        $dataSheets = $this->paginate($this->DataSheets);

        $this->set(compact('dataSheets'));
    }

    /**
     * View method
     *
     * @param string|null $id Data Sheet id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dataSheet = $this->DataSheets->get($id, [
            'contain' => ['Data', 'DataRows']
        ]);

        $this->set('dataSheet', $dataSheet);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dataSheet = $this->DataSheets->newEntity();
        if ($this->request->is('post')) {
            $dataSheet = $this->DataSheets->patchEntity($dataSheet, $this->request->getData());
            if ($this->DataSheets->save($dataSheet)) {
                $this->Flash->success(__('The data sheet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The data sheet could not be saved. Please, try again.'));
        }
        $data = $this->DataSheets->Data->find('list', ['limit' => 200]);
        $this->set(compact('dataSheet', 'data'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Data Sheet id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dataSheet = $this->DataSheets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dataSheet = $this->DataSheets->patchEntity($dataSheet, $this->request->getData());
            if ($this->DataSheets->save($dataSheet)) {
                $this->Flash->success(__('The data sheet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The data sheet could not be saved. Please, try again.'));
        }
        $data = $this->DataSheets->Data->find('list', ['limit' => 200]);
        $this->set(compact('dataSheet', 'data'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Data Sheet id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dataSheet = $this->DataSheets->get($id);
        if ($this->DataSheets->delete($dataSheet)) {
            $this->Flash->success(__('The data sheet has been deleted.'));
        } else {
            $this->Flash->error(__('The data sheet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
