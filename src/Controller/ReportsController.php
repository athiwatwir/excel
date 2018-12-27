<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * Reports Controller
 *
 *
 * @method \App\Model\Entity\Report[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReportsController extends AppController {

    public $DataRows = null;
    public $DataSheets = null;
    public $Datas = null;

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        $this->DataRows = TableRegistry::get('DataRows');
        $this->Datas = TableRegistry::get('Datas');
        $this->DataSheets = TableRegistry::get('DataSheets');
    }

    public function index() {

        if ($this->request->is(['post'])) {
            $postData = $this->request->getData();
            //$this->log($postData, 'debug');
            $title = $postData['title'];
            $year = $postData['year'];
            $type = '';
            if (isset($postData['type'])) {
                foreach ($postData['type'] as $key => $item) {
                    if ($key == 0) {
                        $type = '"' . $item . '"';
                    } else {
                        $type .= ',"' . $item . '"';
                    }
                }
                
            }

            $this->Connection = ConnectionManager::get('default');
            $condition = 'true = true ';
            if (!is_null($title) && $title != '') {
                $condition .= 'and (ds.name LIKE "%' . $title . '%" or ds.title LIKE "%' . $title . '%" ) ';
            }
            if (!is_null($year) && $year != '') {
                $condition .= 'and dr.year = '.$year.' ';
            }
            if (!is_null($type) && $type != '') {
                $condition .= 'and ds.header IN ('.$type.') ';
            }
            
            $sql = 'select * '
                    . 'from data_sheets ds join data_rows dr on ds.id=dr.data_sheet_id '
                    . 'where ' . $condition;
            $this->log($sql,'debug');
            $result = $this->Connection->execute($sql, [])->fetchAll('assoc');

            $json = json_encode($result);
            $json = str_replace("'", "\'", $json);

            $this->set(compact('result','json'));
        }


        $yearList = $this->getYearList();

        $this->set(compact('yearList'));
    }

    private function getYearList() {
        $query = $this->DataRows->find('list', [
            'keyField' => 'year',
            'valueField' => 'year',
            'group' => ['year']
        ]);
        $data = $query->toArray();
        return $data;
    }

}
