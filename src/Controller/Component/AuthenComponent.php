<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Component;

use Cake\Controller\Component;

/**
 * Description of Utils
 *
 * @author sakorn.s
 */
class AuthenComponent extends Component {

    public function authen() {
        $control = strtolower($this->request->getParam('controller'));
        $action = strtolower($this->request->getParam('action'));




        if ((is_null($this->request->getSession()->read('Auth.User')))) {

            false;
        } else {
            $this->Auth->allow($action);
        }
    }

    public function getAuthenUserId() {
        $user_id = $this->request->getSession()->read('Auth.User.id');
        if (is_null($user_id) || $user_id == '') {
            $user_id = '0';
        }
        return $user_id;
    }

    private function authenPublicFunction($control, $action) {


        $allows = [
            'systemusages' => ['verifysession'],
            'login' => ['index', 'verifyclient', 'forgotpass'],
            'logout' => ['index'],
            'invoices' => ['view', 'getdetailjson'],
            'productions' => ['getdetailjson'],
            'plantgroups' => ['saverow', 'updateposition'],
            'users' => ['displaypermission'],
            'scmanagements' => [],
            'services' => [],
            'registformulas' => ['getdetailjson'],
            'rawmattransactions' => ['getdetailjson', 'getdetailproductionjson', 'savetransaction', 'deltransaction', 'edittransaction'],
            'qrcode' => [],
            'tvc' => ['ajaxformulacalaulation', 'ajaxtvccalaulation', 'ajaxgenkeycode', 'ajaxgetformulawithcalaulation']
        ];

        if ((isset($allows[$control]) == true) && (in_array($action, $allows[$control]) || sizeof($allows[$control]) == 0)) {

            return true;
        } else {
            //$this->log($action,'debug');
            return false;
            //return $this->redirect(['controller' => 'login', 'action' => 'index']);
        }
    }

}
