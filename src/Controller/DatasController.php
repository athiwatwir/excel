<?php

namespace App\Controller;

use App\Controller\AppController;
use PHPExcel;
use IOFactory;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class DatasController extends AppController {

    public $DataRows = null;
    public $DataSheets = null;
    public $form1 = ['calculat' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        'title' => '',
        'header' => '  <tr>
                                    <th colspan="10"></th>
                                </tr>
                                <tr >
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th colspan="3" class="text-center"><b>ผลการทดสอบโลหะหนัก</b></th>
                                    <th  class="text-center"><b>หมายเหต</b></th>

                                </tr>
                                <tr >
                                    <th  class="text-center"><b>ลำดับ</b></th>
                                    <th  class="text-center"><b>ศูนย์/สถาน</b></th>
                                    <th  class="text-center"><b>ชื่อเกษตรกร</b></th>
                                    <th  class="text-center"><b>รหัสเกษตรกร</b></th>
                                    <th  class="text-center"><b>รหัสตัวอย่าง</b></th>
                                    <th  class="text-center"><b>ชนิดพืช</b></th>
                                    <th class="text-center"><b>As</b></th>
                                    <th class="text-center"><b>Cd</b></th>
                                    <th class="text-center"><b>Pb</b></th>
                                    <th class="text-center"><b>Codex</b></th>
                                </tr>
                                <tr >
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th class="text-center"><b>2 mg/kg</b></th>
                                    <th class="text-center"><b>0.05 mg/kg</b></th>
                                    <th class="text-center"><b>1 mg/kg</b></th>
                                    <th></th>

                                </tr>'];
    public $form2 = ['calculat' => [0, 0, 0, 0.15, 300, 400, 23, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        'title' => '',
        'header' => '  <tr >
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th colspan="5" class="text-center"><b>โลหะหนัก (ppm)</b></th>
                                    <th colspan="5" class="text-center"><b>คุณสมบัติทั่วไป</b></th>
                                    <th colspan="8" class="text-center"><b>สารกำจัดศุตรูพืช (Pesticide)</b></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr >
                                    <th class="text-center"><b>ลำดับ</b></th>
                                    <th class="text-center"><b>เจ้าของแปลง</b></th>
                                    <th class="text-center"><b>ปีที่ตรวจวิเคราะห์</b></th>
                                    <th class="text-center"><b>Cd</b></th>
                                    <th class="text-center"><b>Cr</b></th>
                                    <th class="text-center"><b>Pb</b></th>
                                    <th class="text-center"><b>Hg</b></th>
                                    <th class="text-center"><b>As</b></th>
                                    <th class="text-center"><b>Ph</b></th>
                                    <th class="text-center"><b>OM</b></th>
                                    <th class="text-center"><b>N</b></th>
                                    <th class="text-center"><b>P(Avaliable)</b></th>
                                    <th class="text-center"><b>K(Avaliable)</b></th>
                                    <th colspan="2"  class="text-center"><b>OC</b></th>
                                    <th colspan="2"  class="text-center"><b>PY</b></th>
                                    <th colspan="2"  class="text-center"><b>OP</b></th>
                                    <th colspan="2"  class="text-center"><b>CA</b></th>
                                    <th colspan="2"  class="text-center"><b>พิกัด</b></th>
                                    <th class="text-center"><b>ความสูง</b></th>
                                    <th class="text-center"><b>เลขแปลง</b></th>
                                 </tr>
                                <tr >
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th class="text-center"><b>≤ 0.15</b></th>
                                    <th class="text-center"><b>≤ 300</b></th>
                                    <th class="text-center"><b>≤ 400</b></th>
                                    <th class="text-center"><b>≤ 23</b></th>
                                    <th class="text-center"><b>≤ 30</b></th>
                                    <th></th>
                                    <th class="text-center"><b>%(wt)</b></th>
                                    <th class="text-center"><b>%(wt)</b></th>
                                    <th class="text-center"><b>mg/kg</b></th>
                                    <th class="text-center"><b>%(wt)</b></th>
                                    <th class="text-center"><b>Items</b></th>
                                    <th class="text-center"><b>mg/kg</b></th>
                                    <th class="text-center"><b>Items</b></th>
                                    <th class="text-center"><b>mg/kg</b></th>
                                    <th class="text-center"><b>Items</b></th>
                                    <th class="text-center"><b>mg/kg</b></th>
                                    <th class="text-center"><b>Items</b></th>
                                    <th class="text-center"><b>mg/kg</b></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                 </tr>
                                 <tr >
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th class="text-center"><b>(mg/kg)</b></th>
                                    <th class="text-center"><b>(mg/kg)</b></th>
                                    <th class="text-center"><b>(mg/kg)</b></th>
                                    <th class="text-center"><b>(mg/kg)</b></th>
                                    <th class="text-center"><b>(mg/kg)</b></th>
                                    <th class="text-center"><b>NC</b></th>
                                    <th class="text-center"><b>NC</b></th>
                                    <th class="text-center"><b>NC</b></th>
                                    <th class="text-center"><b>NC</b></th>
                                    <th class="text-center"><b>NC</b></th>
                                    <th class="text-center"><b>Lowest</b></th>
                                    <th class="text-center"><b>≤ 0.3</b></th>
                                    <th class="text-center"><b>NC</b></th>
                                    <th></th>
                                    <th class="text-center"><b>NC</b></th>
                                    <th></th>
                                    <th class="text-center"><b>NC</b></th>
                                    <th></th>
                                    <th class="text-center"><b>E</b></th>
                                    <th class="text-center"><b>N</b></th>
                                    <th></th>
                                    <th></th>

                                </tr>'];
    public $form3 = ['calculat' => [0, 0, 0, 0.4, 2.0, 5.0, 0.5, 0.05, 0.01, 0.01, 0.01, 0.05, 0.05, 0.05, 0.002, 0.01, 1.0, 0, 20000, 4000, 0, 0, 0],
        'title' => '',
        'header' => '  <tr >
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th colspan="4" class="text-center"><b>เคมีทั่วไป</b></th>
                                    <th colspan="4" class="text-center"><b>สารกำจัดศัตรูพืช (Pesticide)</b></th>
                                    <th colspan="5" class="text-center"><b>โลหะหนัก (ppm)</b></th>
                                    <th colspan="2" class="text-center"><b>ธาตุอาหาร</b></th>
                                    <th colspan="2" class="text-center"><b>จุลินทรีย์</b></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr >
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th class="text-center"><b>DO</b></th>
                                    <th class="text-center"><b>BOD</b></th>
                                    <th class="text-center"><b>NO3-N</b></th>
                                    <th class="text-center"><b>NH3-N</b></th>
                                    <th class="text-center"><b>OC</b></th>
                                    <th class="text-center"><b>OP</b></th>
                                    <th class="text-center"><b>CA</b></th>
                                    <th class="text-center"><b>PY</b></th>
                                    <th class="text-center"><b>Cd</b></th>
                                    <th class="text-center"><b>Cr</b></th>
                                    <th class="text-center"><b>Pb</b></th>
                                    <th class="text-center"><b>Hg</b></th>
                                    <th class="text-center"><b>As</b></th>
                                    <th class="text-center"><b>Cu</b></th>
                                    <th class="text-center"><b>Ca</b></th>
                                    <th class="text-center"><b>Coliform</b></th>
                                    <th class="text-center"><b>Fecal</b></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr >
                                    <th class="text-center"><b>ลำดับ</b></th>
                                    <th class="text-center"><b>เจ้าของแปลง</b></th>
                                    <th class="text-center"><b>ปีที่ตรวจวิเคราะห์</b></th>
                                    <th class="text-center"><b>(mg/L)</b></th>
                                    <th class="text-center"><b>(mg/L)</b></th>
                                    <th class="text-center"><b>(mg/L)</b></th>
                                    <th class="text-center"><b>(mg/L)</b></th>
                                    <th class="text-center"><b>(mg/L)</b></th>
                                    <th class="text-center"><b>(mg/L)</b></th>
                                    <th class="text-center"><b>(mg/L)</b></th>
                                    <th class="text-center"><b>(mg/L)</b></th>
                                    <th class="text-center"><b>(mg/L)</b></th>
                                    <th class="text-center"><b>(mg/L)</b></th>
                                    <th class="text-center"><b>(mg/L)</b></th>
                                    <th class="text-center"><b>(mg/L)</b></th>
                                    <th class="text-center"><b>(mg/L)</b></th>
                                    <th class="text-center"><b>(mg/L)</b></th>
                                    <th class="text-center"><b>(mg/L)</b></th>
                                    <th class="text-center"><b>(MPN/100mL)</b></th>
                                    <th class="text-center"><b>(MPN/100mL)</b></th>
                                    <th colspan="2"  class="text-center"><b>พิกัด</b></th>
                                    <th class="text-center"><b>ความสูง</b></th>
                                  </tr>
                                 <tr >
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th class="text-center"><b>>4.0</b></th>
                                    <th class="text-center"><b><2.0</b></th>
                                    <th class="text-center"><b><5.0</b></th>
                                    <th class="text-center"><b><0.5</b></th>
                                    <th class="text-center"><b><0.05</b></th>
                                    <th class="text-center"><b><0.01</b></th>
                                    <th class="text-center"><b><0.01</b></th>
                                    <th class="text-center"><b><0.01</b></th>
                                    <th class="text-center"><b><0.05</b></th>
                                    <th class="text-center"><b><0.05</b></th>
                                    <th class="text-center"><b><0.05</b></th>
                                    <th class="text-center"><b><0.002</b></th>
                                    <th class="text-center"><b><0.01</b></th>
                                    <th class="text-center"><b><1.0</b></th>
                                    <th class="text-center"><b>NC</b></th>
                                    <th class="text-center"><b><20000</b></th>
                                    <th class="text-center"><b><4000</b></th>
                                    <th class="text-center"><b>E</b></th>
                                    <th class="text-center"><b>N</b></th>
                                    <th></th>
                                  </tr>'];

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
        
        /*$this->set('data', $data);
        $this->set('form1', $this->form1);
        $this->set('form2', $this->form2);
        $this->set('form3', $this->form3);
         * 
         */
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

    public function form1() {
        $this->autoRender = false;
        $data = $this->Datas->newEntity();
        $form1 = $this->request->getSession()->read('form1');
        $data->name = $this->request->getSession()->read('name');
        $data->user_id = $this->request->getSession()->read('Auth.User.id');
        $detail = $this->request->getSession()->read('detail');
        if ($this->Datas->save($data)) {
            foreach ($detail as $key => $item) {
                $dataSheet = $this->DataSheets->newEntity();
                $dataSheet->data_id = $data->id;
                $dataSheet->name = $item['sheetname'];
                $dataSheet->seq = $key;
                $dataSheet->title = $form1['title'];
                $dataSheet->header = 'form1';
                if ($this->DataSheets->save($dataSheet)) {
                    foreach ($item['td'] as $keytd => $itemtd) {
                        $dataRow = $this->DataRows->newEntity();
                        $dataRow->data_sheet_id = $dataSheet->id;
                        $dataRow->seq = $itemtd[0];
                        $dataRow->office_center = $itemtd[1];
                        $dataRow->fullname = $itemtd[2];
                        $dataRow->farmer_code = $itemtd[3];
                        $dataRow->code = $itemtd[4];
                        $dataRow->plant_type = $itemtd[5];
                        $dataRow->ppm_as = $itemtd[6];
                        $dataRow->ppm_cd = $itemtd[7];
                        $dataRow->ppm_pb = $itemtd[8];
                        if (sizeof($itemtd) > 9) {
                            $dataRow->description = $itemtd[9];
                        }

                        if ($this->DataRows->save($dataRow)) {
                            
                        } else {
                            $this->log($dataRow->errors(), 'debug');
                        }
                    }
                } else {
                    $this->log($dataSheet->errors(), 'debug');
                }
            }
            $this->Flash->success(__('บันทึกข้อมูลเรียบร้อย'));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The data could not be saved. Please, try again.'));
    }

    public function add($detail = null, $name = null) {
        $data = $this->Datas->newEntity();
        if ($this->request->is('post')) {
            $data = $this->Datas->patchEntity($data, $this->request->getData());
            $data->name = $this->request->getSession()->read('name');
            $data->user_id = $this->request->getSession()->read('Auth.User.id');

            if ($this->Datas->save($data)) {
                $this->Flash->success(__('The data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The data could not be saved. Please, try again.'));
        }
        $users = $this->Datas->Users->find('list', ['limit' => 200]);
        $this->set(compact('datarow', 'users'));
    }

    public function upload() {
        $return = [];
        $result = [];
        $filename = '';
        $form = '';
        $target = '';
        if ($this->request->is('post')) {

            $data = $this->request->getData();

            $objReader = \PHPExcel_IOFactory::createReader('Excel2007');
            if (!is_null($data['uploadfile']['tmp_name']) || $data['uploadfile']['tmp_name'] != '') {
                $objPHPExcel = $objReader->load($data['uploadfile']['tmp_name']);

                $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                $worksheetNames = $objPHPExcel->getSheetNames($data['uploadfile']['tmp_name']);

                foreach ($worksheetNames as $key => $sheetName) {

                    $detail = ['sheetname' => $sheetName, 'td' => []];

                    array_push($result, $detail);
                    $objPHPExcel->setActiveSheetIndexByName($sheetName);

                    $return[$key] = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                }

                $filename = $data['uploadfile']['name'];
                $index = 0;
                if (sizeof($return[0][1]) == 10) {
                    $target = 'form1';
                    $this->form1['title'] = '<tr>
                                    <th colspan="10" class="text-center">' . $return[0][1]['A'] . '</th>
                                </tr>';
                } else {
                    $target = 'form2';
                    $this->form2['title'] = '<tr>
                                    <th colspan="25" class="text-center">' . $return[0][1]['A'] . '</th>
                                </tr>';
                    $this->form3['title'] = '<tr>
                                    <th colspan="23" class="text-center">' . $return[1][1]['A'] . '</th>
                                </tr>';
                }
                foreach ($return as $sheet) {
                    foreach ($sheet as $key => $row) {

                        $itemrow = [];
                        if ($key >= 6) {
                            foreach ($row as $colum) {


                                $item = $colum;
                                if (is_null($colum) || $colum == '') {
                                    $item = '-';
                                }

                                array_push($itemrow, $item);
                            }
                            array_push($result[$index]['td'], $itemrow);
                        }
                    }
                    $index++;
                }
            }
        }
        $this->set(compact('result', 'filename', 'th', 'target', 'form'));
        $this->set('form1', $this->form1);
        $this->set('form2', $this->form2);
        $this->set('form3', $this->form3);
    }

    public function form2() {
        $this->autoRender = false;
        $data = $this->Datas->newEntity();
        $form2 = $this->request->getSession()->read('form2');
        $form3 = $this->request->getSession()->read('form3');
        $data->name = $this->request->getSession()->read('name');
        $data->user_id = $this->request->getSession()->read('Auth.User.id');
        $detail = $this->request->getSession()->read('detail');
        if ($this->Datas->save($data)) {

            //// sh1
            $dataSheet = $this->DataSheets->newEntity();
            $dataSheet->data_id = $data->id;
            $dataSheet->name = $detail[0]['sheetname'];
            $dataSheet->seq = 0;
            $dataSheet->title = $form2['title'];
            $dataSheet->header = 'form2';
            if ($this->DataSheets->save($dataSheet)) {

                foreach ($detail[0]['td'] as $keytd => $itemtd) {
                    $dataRow = $this->DataRows->newEntity();
                    $dataRow->fullname = '-';
                    $dataRow->data_sheet_id = $dataSheet->id;
                    $dataRow->seq = $itemtd[0];
                    $dataRow->office_center = $itemtd[1];
                    $dataRow->year = $itemtd[2];
                    $dataRow->ppm_cd = $itemtd[3];
                    $dataRow->ppm_cr = $itemtd[4];
                    $dataRow->ppm_pb = $itemtd[5];
                    $dataRow->ppm_hg = $itemtd[6];
                    $dataRow->ppm_as = $itemtd[7];
                    $dataRow->gen_ph = $itemtd[8];
                    $dataRow->gen_om = $itemtd[9];
                    $dataRow->gen_n = $itemtd[10];
                    $dataRow->gen_p = $itemtd[11];
                    $dataRow->gen_k = $itemtd[12];
                    $dataRow->oc_item = $itemtd[13];
                    $dataRow->oc_weight = $itemtd[14];
                    $dataRow->py_item = $itemtd[15];
                    $dataRow->py_weight = $itemtd[16];
                    $dataRow->op_item = $itemtd[17];
                    $dataRow->op_weight = $itemtd[18];
                    $dataRow->ca_item = $itemtd[19];
                    $dataRow->ca_weight = $itemtd[20];
                    $dataRow->coordinates_e = $itemtd[21];
                    $dataRow->coordinates_n = $itemtd[22];
                    $dataRow->high = $itemtd[21];
                    $dataRow->area_number = $itemtd[22];
                    if ($this->DataRows->save($dataRow)) {
                        
                    } else {
                        $this->log($dataRow->errors(), 'debug');
                    }
                }
            } else {
                $this->log($dataSheet->errors(), 'debug');
            }
            ////sh2
            $dataSheet = $this->DataSheets->newEntity();
            $dataSheet->data_id = $data->id;
            $dataSheet->name = $detail[1]['sheetname'];
            $dataSheet->seq = 1;
            $dataSheet->title = $form3['title'];
            $dataSheet->header = 'form3';
            if ($this->DataSheets->save($dataSheet)) {

                foreach ($detail[1]['td'] as $keytd2 => $itemtd2) {
                    $dataRow = $this->DataRows->newEntity();
                    $dataRow->fullname = '-';
                    $dataRow->data_sheet_id = $dataSheet->id;
                    $dataRow->seq = $itemtd2[0];
                    $dataRow->office_center = $itemtd2[1];
                    $dataRow->year = $itemtd2[2];
                    $dataRow->chemical_do = $itemtd2[3];
                    $dataRow->chemical_bod = $itemtd2[4];
                    $dataRow->chemical_no3n = $itemtd2[5];
                    $dataRow->chemical_nh3n = $itemtd2[6];
                    $dataRow->oc_weight = $itemtd2[7];
                    $dataRow->op_weight = $itemtd2[8];
                    $dataRow->ca_weight = $itemtd2[9];
                    $dataRow->py_weight = $itemtd2[10];
                    $dataRow->ppm_cd = $itemtd2[11];
                    $dataRow->ppm_cr = $itemtd2[12];
                    $dataRow->ppm_pb = $itemtd2[13];
                    $dataRow->ppm_hg = $itemtd2[14];
                    $dataRow->ppm_as = $itemtd2[15];
                    $dataRow->nutrient_cu = $itemtd2[16];
                    $dataRow->nutrient_ca = $itemtd2[17];
                    $dataRow->coliform = $itemtd2[18];
                    $dataRow->fecal = $itemtd2[19];
                    $dataRow->coordinates_e = $itemtd2[20];
                    $dataRow->coordinates_n = $itemtd2[21];
                    $dataRow->high = $itemtd2[22];
                    if ($this->DataRows->save($dataRow)) {
                        
                    } else {
                        $this->log($dataRow->errors(), 'debug');
                    }
                }
            } else {
                $this->log($dataSheet->errors(), 'debug');
            }

            $this->Flash->success(__('บันทึกข้อมูลเรียบร้อย'));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The data could not be saved. Please, try again.'));
    }

}
