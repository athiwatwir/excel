<?php

namespace App\Controller;

use App\Controller\AppController;
use Adldap\Adldap;
use Cake\Core\Configure;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $users = $this->Users->find()->toArray();

        $this->set(compact('users'));
    }

    public function adUpdate() {
        //$this->LdapAuthenticate->listUser('swdb','EaRb59hY');
        $configuration = Configure::read('LDAP');

        try {
            $ad = new Adldap($configuration);
            //$authenticated = $ad->authenticate('swdb', 'EaRb59hY');

            //$ad->getLdapConnection()->showErrors();
            //$user = $ad->user()->info('swdb');
            //$this->log($user, 'debug');

            $fields = ['cn', 'description', 'physicaldeliveryofficename', 'name', 'userprincipalname', 'mail', 'samaccountname'];
            $users = $ad->user()->all($fields);
            set_time_limit(3000);
            $this->createAdUser($users);
        } catch (AdldapException $e) {
            //echo "Uh oh, looks like we had an issue trying to connect: $e";
        }
        $this->Flash->success('อัพเดทเรียบร้อยแล้ว');
        return $this->redirect(['action' => 'index']);
    }

    private function createAdUser($users = []) {
        foreach ($users as $item) {
            $_user = $this->Users->find()->where(['Users.username'=>$item['samaccountname']])->count();
            if($_user > 0){
                continue;
            }

            $user = $this->Users->newEntity();

            $fullname = $item['cn'];
            if (isset($item['description'])) {
                $fullname = $item['description'];
            }
            if (isset($item['mail'])) {
                $user->email = $item['mail'];
            } else {
                if (isset($item['userprincipalname'])) {
                    $user->email = $item['userprincipalname'];
                }
            }

            $user->username = $item['samaccountname'];
            $user->fullname = $fullname;
            $user->password = '0000';
            $user->isactive = 'Y';
            if (isset($item['physicaldeliveryofficename'])) {
                $user->description = $item['physicaldeliveryofficename'];
            }

            $this->Users->save($user);
        }
    }
    
    public function setting($user_id = null){
        $user = $this->Users->get($user_id);
        
        $this->set(compact('user'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $user = $this->Users->get($id, [
            'contain' => ['Datas']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    /*
    public function add() {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }

        $this->set(compact('user'));
    }
     * 
     */

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    /*
    public function edit($id = null) {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }

        $this->set(compact('user'));
    }
     * 
     */

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
     * 
     */

}
