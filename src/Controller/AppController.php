<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;
use Ldap\Auth\LdapAuthenticate;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public $allowedPages = [];

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        //  $this->Auth->allow();
        $this->allowedPages = ['recoverpw', 'logout', 'resetpassword', 'sentpassword'];
        $this->Auth->allow($this->allowedPages);
        $this->authen();
    }

    public function initialize() {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Util');
        $this->loadComponent('Auth', [
            'loginAction' => [
                'controller' => 'login',
                'action' => 'index'
            ],
            'loginRedirect' => ['controller' => 'home', 'action' => 'index'],
            'logoutRedirect' => [
                'controller' => 'login',
                'action' => 'index'
            ],
            
            'storage' => 'Session'
        ]);
        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    private function authen() {


        if ((is_null($this->request->getSession()->read('Auth.User')))) {


            $this->Auth->deny();
        } else {
            $this->Auth->allow();
        }
    }

}
