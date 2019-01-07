<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\I18n\Date;
use Cake\Datasource\ConnectionManager;

/**
 * Home Controller
 *
 *
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeController extends AppController {

    public $Datas = null;
    public $Connection = null;

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->Datas = TableRegistry::get('Datas');
        $this->Connection = ConnectionManager::get('default');

        $datas = $this->Datas->find()
                ->contain(['Users'])
                ->order(['Datas.created' => 'DESC'])
                ->limit(5)
                ->toArray();



        $sql = 'select count(ds.id) as total,ds.header from data_sheets ds join data_rows dr on ds.id = dr.data_sheet_id group by ds.header';
        $result = $this->Connection->execute($sql, [])->fetchAll('assoc');

        $stat = [
            'SOIL' => ['title' => 'รวมดิน', 'code' => 'SOIL', 'total' => 0,'percent'=>0],
            'WATER' => ['title' => 'รวมน้ำ', 'code' => 'WATER', 'total' => 0,'percent'=>0],
            'PLANT' => ['title' => 'รวมพืช', 'code' => 'PLANT', 'total' => 0,'percent'=>0]
        ];
        
        $total = 0;
        foreach ($result as $item){
            $stat[$item['header']]['total'] = $item['total'];
            $total += $item['total'];
        }
        $stat['SOIL']['percent'] = ($stat['SOIL']['total']/$total*100);
        $stat['WATER']['percent'] = ($stat['WATER']['total']/$total*100);
        $stat['PLANT']['percent'] = ($stat['PLANT']['total']/$total*100);
        
        
        //$this->log($stat,'debug');

        $this->set(compact('datas', 'stat'));
    }

}
