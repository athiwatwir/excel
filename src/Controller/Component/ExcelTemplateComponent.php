<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

/**
 * Description of Utils
 *
 * @author sakorn.s
 */
class ExcelTemplateComponent extends Component {

    public $soilColumn = 25;
    public $waterColumn = 23;
    public $plantColumn = 11;
    public $DataRows = null;
    public $DataSheets = null;
    public $Datas = null;

    public function process($excelData) {
        //create date
        //$this->log($excelData, 'debug');
        $this->DataRows = TableRegistry::get('DataRows');
        $this->Datas = TableRegistry::get('Datas');
        $this->DataSheets = TableRegistry::get('DataSheets');

        $dataId = $this->createData($excelData['file_name']);
        $res = ['data_id' => $dataId, 'status' => 200, 'message' => ''];
        foreach ($excelData['sheets'] as $key => $sheet) {
            if ($sheet['highest_column'] == $this->soilColumn) {
                $template = $this->templateSoil();
                $formula = $template['formula'];
                //Get title
                $title = $sheet['rows'][0][0];

                $dataSheetId = $this->createDataSheet($sheet['sheet_name'], ($key + 1), $title, $dataId, 'SOIL');
                $rows = $sheet['rows'];
                unset($rows[0]);
                unset($rows[1]);
                unset($rows[2]);
                unset($rows[3]);
                unset($rows[4]);

                $count = 1;
                foreach ($rows as $key_row => $row) {


                    $fullname = $row[1];
                    $year = $row[2];
                    $ppm_cd = $row[3];
                    $ppm_cr = $row[4];
                    $ppm_pb = $row[5];
                    $ppm_hg = $row[6];
                    $ppm_as = $row[7];
                    $gen_ph = $row[8];
                    $gen_om = $row[9];
                    $gen_n = $row[10];
                    $gen_p = $row[11];
                    $gen_k = $row[12];
                    $oc_item = $row[13];
                    $oc_weight = $row[14];
                    $py_item = $row[15];
                    $py_weight = $row[16];
                    $op_item = $row[17];
                    $op_weight = $row[18];
                    $ca_item = $row[19];
                    $ca_weight = $row[20];
                    $coordinates_e = $row[21];
                    $coordinates_n = $row[22];
                    $high = $row[21];
                    $area_number = $row[22];

                    $chkValues = [
                        [$ppm_cd, $formula[3]],
                        [$ppm_cr, $formula[4]],
                        [$ppm_pb, $formula[5]],
                        [$ppm_hg, $formula[6]],
                        [$ppm_as, $formula[7]],
                        [$oc_weight, $formula[14]],
                    ];
                    $status = $this->chkValueLess($chkValues);



                    $this->createDataRow($fullname, $dataSheetId, $count, null, $year, $ppm_cd, $ppm_cr, $ppm_pb, $ppm_hg, $ppm_as, $gen_ph, $gen_om, $gen_n, $gen_p, $gen_k, $oc_item, $oc_weight, $py_item, $py_weight, $op_item, $op_weight, $ca_item, $ca_weight, $coordinates_e, $coordinates_n, $high, $area_number, null, null, null, null, null, null, null, null, null, null, null, null, $status);
                    $count++;
                }
            } elseif ($sheet['highest_column'] == $this->waterColumn) {
                $template = $this->templateWater();
                $formula = $template['formula'];

                //Get title
                $title = $sheet['rows'][0][0];

                $dataSheetId = $this->createDataSheet($sheet['sheet_name'], ($key + 1), $title, $dataId, 'WATER');
                $rows = $sheet['rows'];
                unset($rows[0]);
                unset($rows[1]);
                unset($rows[2]);
                unset($rows[3]);
                unset($rows[4]);

                $count = 1;
                foreach ($rows as $key_row => $row) {
                    $fullname = $row[1];
                    $year = $row[2];
                    $chemical_do = $row[3];
                    $chemical_bod = $row[4];
                    $chemical_no3n = $row[5];
                    $chemical_nh3n = $row[6];
                    $oc_weight = $row[7];
                    $op_weight = $row[8];
                    $ca_weight = $row[9];
                    $py_weight = $row[10];
                    $ppm_cd = $row[11];
                    $ppm_cr = $row[12];
                    $ppm_pb = $row[13];
                    $ppm_hg = $row[14];
                    $ppm_as = $row[15];
                    $nutrient_cu = $row[16];
                    $nutrient_ca = $row[17];
                    $coliform = $row[18];
                    $fecal = $row[19];
                    $coordinates_e = $row[20];
                    $coordinates_n = $row[21];
                    $high = $row[22];

                    $chkValues = [
                        [$chemical_do, $formula[3]]
                    ];
                    $status = $this->chkValueMore($chkValues);
                    if ($status == 'P') {
                        $chkValues = [
                            [$chemical_bod, $formula[4]],
                            [$chemical_no3n, $formula[5]],
                            [$chemical_nh3n, $formula[6]],
                            [$oc_weight, $formula[7]],
                            [$op_weight, $formula[8]],
                            [$ca_weight, $formula[9]],
                            [$py_weight, $formula[10]],
                            [$ppm_cd, $formula[11]],
                            [$ppm_cr, $formula[12]],
                            [$ppm_pb, $formula[13]],
                            [$ppm_hg, $formula[14]],
                            [$ppm_as, $formula[15]],
                            [$nutrient_cu, $formula[16]],
                            [$coliform, $formula[18]],
                            [$fecal, $formula[19]],
                        ];
                        $status = $this->chkValueLess($chkValues);
                    }


                    $this->createDataRow($fullname, $dataSheetId, $count, null, $year, $ppm_cd, $ppm_cr, $ppm_pb, $ppm_hg, $ppm_as, null, null, null, null, null, null, $oc_weight, null, $py_weight, null, $op_weight, null, $ca_weight, $coordinates_e, $coordinates_n, $high, null, null, null, null, $nutrient_cu, $nutrient_ca, $coliform, $fecal, $chemical_do, $chemical_bod, $chemical_no3n, $chemical_nh3n,null,$status);
                    $count++;
                }
            } elseif ($sheet['highest_column'] == $this->plantColumn) {
                //Get title
                $title = $sheet['rows'][0][0];

                $dataSheetId = $this->createDataSheet($sheet['sheet_name'], ($key + 1), $title, $dataId, 'PLANT');
                $rows = $sheet['rows'];
                unset($rows[0]);
                unset($rows[1]);
                unset($rows[2]);
                unset($rows[3]);
                $count = 1;
                foreach ($rows as $key_row => $row) {
                    $office_center = $row[1];
                    $fullname = $row[2];
                    $farmer_code = $row[3];
                    $code = $row[4];
                    $year = $row[5];
                    $plant_type = $row[6];
                    $ppm_as = $row[7];
                    $ppm_cd = $row[8];
                    $ppm_pb = $row[9];
                    $description = $row[10];

                    $chkValues = [
                        [$ppm_as, $formula[7]],
                        [$ppm_cd, $formula[8]],
                        [$ppm_pb, $formula[9]],
        
                    ];
                    $status = $this->chkValueLess($chkValues);

                    $this->createDataRow($fullname, $dataSheetId, $count, $office_center, $year, $ppm_cd, null, $ppm_pb, null, $ppm_as, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, $farmer_code, $code, $plant_type, null, null, null, null, null, null, null, null, $description,$status);

                    $count++;
                }
            } else {
                $res['status'] = 500;
                $res['message'] = 'รูปแบบเอกสารไม่ถูกต้อง';
                $res['data_id'] = '';
                $data = $this->Datas->get($dataId);
                $this->Datas->delete($data);
                return $res;
            }
        }

        return $res;
    }

    private function chkValueMore($chkValues) {
        foreach ($chkValues as $item) {
            if (is_numeric($item[0]) && is_numeric($item[1])) {
                if (!($item[0] > $item[1])) {
                    return 'F';
                }
            }
        }
        return 'P';
    }

    private function chkValueLess($chkValues) {
        foreach ($chkValues as $item) {
            if (is_numeric($item[0]) && is_numeric($item[1])) {
                if (!($item[0] < $item[1])) {
                    //$this->log($item[0].'<'.$item[1],'debug');
                    return 'F';
                }
            }
        }
        return 'P';
    }

    private function createData($name) {

        $data = $this->Datas->newEntity();

        $data->name = $name;
        $data->user_id = $this->request->getSession()->read('Auth.User.id');
        if ($this->Datas->save($data)) {
            return $data->id;
        }
    }

    private function createDataSheet($name, $seq, $title, $dataId, $header) {

        $dataSheet = $this->DataSheets->newEntity();
        $dataSheet->data_id = $dataId;
        $dataSheet->name = $name;
        $dataSheet->seq = $seq;
        $dataSheet->title = $title;
        $dataSheet->header = $header;
        if ($this->DataSheets->save($dataSheet)) {
            return $dataSheet->id;
        }
    }

    private function createDataRow($fullname, $data_sheet_id, $seq, $office_center, $year, $ppm_cd, $ppm_cr, $ppm_pb, $ppm_hg, $ppm_as, $gen_ph, $gen_om, $gen_n, $gen_p, $gen_k, $oc_item, $oc_weight, $py_item, $py_weight, $op_item, $op_weight, $ca_item, $ca_weight, $coordinates_e, $coordinates_n, $high, $area_number, $farmer_code, $code, $plant_type, $nutrient_cu, $nutrient_ca, $coliform, $fecal, $chemical_do = null, $chemical_bod = null, $chemical_no3n = null, $chemical_nh3n = null, $description = null, $status = 'P') {
        if (is_null($fullname)) {
            $fullname = '-';
        }
        $dataRow = $this->DataRows->newEntity();
        $dataRow->fullname = $fullname;
        $dataRow->data_sheet_id = $data_sheet_id;
        $dataRow->seq = $seq;
        $dataRow->office_center = $office_center;
        $dataRow->year = $year;
        $dataRow->ppm_cd = $ppm_cd;
        $dataRow->ppm_cr = $ppm_cr;
        $dataRow->ppm_pb = $ppm_pb;
        $dataRow->ppm_hg = $ppm_hg;
        $dataRow->ppm_as = $ppm_as;
        $dataRow->gen_ph = $gen_ph;
        $dataRow->gen_om = $gen_om;
        $dataRow->gen_n = $gen_n;
        $dataRow->gen_p = $gen_p;
        $dataRow->gen_k = $gen_k;
        $dataRow->oc_item = $oc_item;
        $dataRow->oc_weight = $oc_weight;
        $dataRow->py_item = $py_item;
        $dataRow->py_weight = $py_weight;
        $dataRow->op_item = $op_item;
        $dataRow->op_weight = $op_weight;
        $dataRow->ca_item = $ca_item;
        $dataRow->ca_weight = $ca_weight;
        $dataRow->coordinates_e = $coordinates_e;
        $dataRow->coordinates_n = $coordinates_n;
        $dataRow->high = $high;
        $dataRow->area_number = $area_number;
        $dataRow->farmer_code = $farmer_code;
        $dataRow->code = $code;
        $dataRow->plant_type = $plant_type;
        $dataRow->nutrient_cu = $nutrient_cu;
        $dataRow->nutrient_ca = $nutrient_ca;
        $dataRow->coliform = $coliform;
        $dataRow->fecal = $fecal;
        $dataRow->chemical_do = $chemical_do;
        $dataRow->chemical_bod = $chemical_bod;
        $dataRow->chemical_no3n = $chemical_no3n;
        $dataRow->chemical_nh3n = $chemical_nh3n;
        $dataRow->description = $description;
        $dataRow->status = $status;
        if ($this->DataRows->save($dataRow)) {
            return $dataRow->id;
        }
    }

    public function templateSoil() {
        return [
            'highestColumn' => $this->soilColumn,
            'formula' => [0, 0, 0, 0.15, 300, 400, 23, 30, 0, 0, 0, 0, 0, 0, 0.3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        ];
    }

    public function templateWater() {
        return [
            'highestColumn' => $this->waterColumn,
            'formula' => [0, 0, 0, 4, 2.0, 5.0, 0.5, 0.05, 0.01, 0.01, 0.01, 0.05, 0.05, 0.05, 0.002, 0.01, 1.0, 0, 20000, 4000, 0, 0, 0],
        ];
    }

    public function templatePlant() {
        return [
            'highestColumn' => $this->plantColumn,
            'formula' => [],
        ];
    }

}
