<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DataRows Controller
 *
 * @property \App\Model\Table\DataRowsTable $DataRows
 *
 * @method \App\Model\Entity\DataRow[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DataRowsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['DataSheets']
        ];
        $dataRows = $this->paginate($this->DataRows);

        $this->set(compact('dataRows'));
    }

    /**
     * View method
     *
     * @param string|null $id Data Row id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dataRow = $this->DataRows->get($id, [
            'contain' => ['DataSheets']
        ]);

        $this->set('dataRow', $dataRow);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dataRow = $this->DataRows->newEntity();
        if ($this->request->is('post')) {
            $dataRow = $this->DataRows->patchEntity($dataRow, $this->request->getData());
            if ($this->DataRows->save($dataRow)) {
                $this->Flash->success(__('The data row has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The data row could not be saved. Please, try again.'));
        }
        $dataSheets = $this->DataRows->DataSheets->find('list', ['limit' => 200]);
        $this->set(compact('dataRow', 'dataSheets'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Data Row id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dataRow = $this->DataRows->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dataRow = $this->DataRows->patchEntity($dataRow, $this->request->getData());
            if ($this->DataRows->save($dataRow)) {
                $this->Flash->success(__('The data row has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The data row could not be saved. Please, try again.'));
        }
        $dataSheets = $this->DataRows->DataSheets->find('list', ['limit' => 200]);
        $this->set(compact('dataRow', 'dataSheets'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Data Row id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dataRow = $this->DataRows->get($id);
        if ($this->DataRows->delete($dataRow)) {
            $this->Flash->success(__('The data row has been deleted.'));
        } else {
            $this->Flash->error(__('The data row could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
