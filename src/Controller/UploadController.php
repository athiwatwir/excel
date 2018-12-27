<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

/**
 * Upload Controller
 *
 *
 * @method \App\Model\Entity\Upload[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UploadController extends AppController {

    public function index($taskId = '') {
        $status = 'DR';

        

        if ($this->request->is(['post'])) {
            $postData = $this->request->getData();
            $taskId = $postData['taskid'];
            $files = $postData['uploadfile'];
            //$this->log($files, 'debug');


            $defaultPath = WWW_ROOT . 'uploads' . DS . $taskId;
            $dir = new Folder($defaultPath, true, 0755);
            //$defaultPath = $dir['path'];


            foreach ($files as $file) {
                if (move_uploaded_file($file['tmp_name'], $defaultPath . DS . $file['name'])) {
                    
                }
            }
            return $this->redirect(['action' => 'index', $taskId]);
        }

        if ($taskId != '') {
            $defaultPath = WWW_ROOT . 'uploads' . DS . $taskId;
            $status = 'UPLOADED';
            $dir = new Folder($defaultPath);
            $files = $dir->find('.*');
            $this->set('upload_files', $files);
            $this->set('file_path', $defaultPath);
        } else {
            $taskId = $this->Util->generateRandomString(5);
        }

        $this->set(compact('taskId', 'status'));
    }

    public function saveFile() {
        $this->viewBuilder()->setLayout('ajax');
        $this->loadComponent('Excel');
        $this->loadComponent('ExcelTemplate');
        
        $res = ['status'=>404,'message'=>'empty'];
        $taskId = $this->request->getQuery('task_id');
        $fileName = $this->request->getQuery('file_name');

        $defaultPath = WWW_ROOT . 'uploads' . DS . $taskId;
        //$dir = new Folder($defaultPath);
        //$files = $dir->find($fileName);
        $file = new File($defaultPath . DS . $fileName, false, 0755);

        
        $excelData = $this->Excel->readToArray($file->path,$fileName);
        //debug($excelData);
        $_res = $this->ExcelTemplate->process($excelData);
        $dataId = '';
        if($_res['status'] == 200){
            $dataId = $_res['data_id'];
            $res = ['status'=>200,'message'=>'','data'=>['data_id'=>$dataId]];
        }else{
            $res = $_res;
        }
        

        $file->delete();
        //$this->log($file,'debug');
        $dir = new Folder($defaultPath);
        $files = $dir->find('.*');
        if(sizeof($files) ==0){
            $dir->delete();
        }
        
       
        
        $json = json_encode($res);
        $this->set(compact('json'));
    }
    
   

}
