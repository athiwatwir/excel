<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Component;

use Cake\Controller\Component;
use PHPExcel;
use IOFactory;

/**
 * Description of Utils
 *
 * @author sakorn.s
 */
class ExcelComponent extends Component {

    public function readToArray($fullFilePath, $fileName) {
        $reader = \PHPExcel_IOFactory::createReader('Excel2007');
        $objPHPExcel = $reader->load($fullFilePath);
        //$objWorksheet = $objPHPExcel->getActiveSheet();
        //$currentWorkSheetIndex = 0;

        $data = ['file_name' => $fileName, 'sheets' => []];

        foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
            // echo 'WorkSheet' . $currentWorkSheetIndex++ . "\n";
            //echo 'Worksheet number - ', $objPHPExcel->getIndex($worksheet), PHP_EOL;
            $_data = ['sheet_name' => '', 'rows' => []];
            $activeSheetName = $worksheet->getTitle();
            $_data['sheet_name'] = $activeSheetName;

            $highestRow = $worksheet->getHighestDataRow();
            $highestColumn = $worksheet->getHighestDataColumn();
            $headings = $worksheet->rangeToArray('A1:' . $highestColumn . 1, NULL, TRUE, FALSE);

            $_row = [];
            $countColumn = 0;
            for ($row = 1; $row <= $highestRow; $row++) {

                $rowData = $worksheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
                //$rowData[0] = array_combine($headings[0], $rowData[0]);

                $countColumn = sizeof($rowData[0]);
                array_push($_row, $this->verifyNumber($rowData[0]));
            }

            $_data['highest_column'] = $countColumn;
            $_data['rows'] = $_row;

            array_push($data['sheets'], $_data);
        }

        return $data;
    }

    private function verifyNumber($columns = []) {
        foreach ($columns as $key => $column) {
            if (is_numeric($column)) {
                $number = (float) $column;
                $number = round($number, 2);
                $columns[$key] = $number;
            }
        }


        return $columns;
    }

}
