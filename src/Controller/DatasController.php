<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class DatasController extends AppController {

    public $DataRows = null;
    public $DataSheets = null;
    

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->DataRows = TableRegistry::get('DataRows');
        $this->DataSheets = TableRegistry::get('DataSheets');
    }

    public function index() {
        $q = $this->Datas->find()
                ->contain(['Users'])
                ->order(['Datas.created'=>'DESC']);
        $datas = $q->toArray();
        $this->set(compact('datas'));
    }

    public function view($id = null) {
        $this->loadComponent('Excel');
        $this->loadComponent('ExcelTemplate');
        $data = $this->Datas->get($id, [
            'contain' => ['Users', 'DataSheets' => ['DataRows']]
        ]);
        
        foreach ($data['data_sheets'] as $key=> $item){
            $template = null;
            if($item['header'] == 'WATER'){
                $template = $this->ExcelTemplate->templateWater();
            }elseif($item['header'] == 'SOIL'){
                $template = $this->ExcelTemplate->templateSoil();
            }elseif($item['header'] == 'PLANT'){
                $template = $this->ExcelTemplate->templatePlant();
            }
            $data['data_sheets'][$key]['template'] = $template;
        }
        //$this->log($data, 'debug');
        $this->set('data', $data);
    }
    
    public function mapView($sheetId=null){
        $q = $this->DataSheets->find()
                ->contain(['DataRows'])
                ->where(['id'=>$sheetId]);
        $sheet = $q->first();
        $json = json_encode($sheet->data_rows);
        $json = str_replace("'", "\'", $json);
        $this->set(compact('sheet','json'));
        
    }

}
