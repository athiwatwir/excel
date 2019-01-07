<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Network\Email\Email;
use Ldap\Auth\LdapAuthenticate;

/**
 * Login Controller
 *
 *
 * @method \App\Model\Entity\Login[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LoginController extends AppController {

    public $Users = null;

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        $this->Users = TableRegistry::get('Users');
    }

    
    public function index() {
        $this->viewBuilder()->setLayout('login');

        if (!(is_null($this->request->getSession()->read('Auth.User')))) {
            return $this->redirect($this->Auth->redirectUrl());
        }

        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $user = $this->Auth->identify();
            if ($user) {
                
            } else {
                $user = $this->Users->find()
                        ->where(['username' => $data['username'], 'password' => $data['password']])
                        ->first();
            }

            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__('Invalid email or password, try again'));
                return $this->redirect(['controller' => 'login']);
            }
        }
    }

    public function recoverpw() {
        $this->viewBuilder()->setLayout('login');
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $q = $this->Users->find()
                    ->where(['email' => $data['email']])
                    ->first();
            if ($q != '') {
                $newpass = $this->Util->generateRandomString();
                $q->verifycode = $newpass;
                // $this->log($q, 'debug');
                if ($this->Users->save($q)) {
                    $this->sentpassword($newpass, $q->email);
                }
            }
            $this->Flash->success(__('หาก email นั้นถูกต้องเราได้ส่ง email หาคุณแล้ว'));
        }
    }

    public function resetpassword() {
        $this->viewBuilder()->setLayout('login');
        $code = $_GET['code'];
        $email = $_GET['email'];
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $q = $this->Users->find()
                    ->where(['email' => $email, 'verifycode' => $code])
                    ->first();
            if ($q != '') {

                $q->password = $data['cpassword'];
                // $this->log($q, 'debug');
                if ($this->Users->save($q)) {
                    $this->Flash->success(__('ตั้งรหัสผ่านใหม่เรียบร้อย'));
                    return $this->redirect(['controller' => 'login']);
                }
            } else {
                $this->Flash->success(__('รหัสยืนยันไม่ถูกต้อง'));
                return $this->redirect(['controller' => 'login']);
            }
        }
    }

    public function sentpassword($codepass = null, $mail = null) {

        $link = SITE_URL . 'login/resetpassword?code=' . $codepass . '&email=' . $mail;
        $this->Sendemail->userForgotPassword($mail, $link);
        $this->set(compact('date', 'link'));
        $this->set('_serialize', ['link']);
    }

}
