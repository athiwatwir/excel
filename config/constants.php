<?php

use Cake\Core\Configure;

define('DEFAULT_USER', '0');
define('PAGE_TITLE', 'Soil and Water Database System');
define('MAP_API_KEY', 'AIzaSyBlBNYnIC9qGPT2dEMmbpnPFMYtFbqaXpM');
define('SITE_KEY', '6LcxcHMUAAAAACFCZBRN-MzxKnmT9uz85pHPTzou');
define('SECret_KEY', '6LcxcHMUAAAAALuuubeb06bm5wPzlsnuf-V7PP1B');





/* * *********BUTTON******** */
define('BT_ADD', '<button id="" class="btn btn-success waves-effect waves-light">เพิ่ม <i class="mdi mdi-plus-circle-outline"></i></button>');
define('BT_BACK', '<button type="button" class="btn btn-secondary waves-effect"><i class=" mdi mdi-arrow-left-bold"></i>Back</button>');
define('BT_EDIT', '<button type="button" class="btn btn-secondary waves-effect"><i class=" fa fa-pencil"></i></button> ');
define('BT_VIEW', '<button type="button" class="btn btn-secondary waves-effect"><i class=" fa fa-search"></i></button>');
define('BT_DELETE', '<button type="button" class="btn btn-secondary waves-effect"><i class=" fa fa-trash-o"></i></button>');
define('BT_ADDUSER', '<button type="button" class="btn btn-info btn-block"><i class="ti-plus"></i> เพิ่มผู้ใช้</button>');
define('BT_SAVE', '<button type="submit" id="subm" class="btn btn-success waves-effect"><i class="mdi mdi-content-save-all"></i> Save</button>');
define('BT_SEND', '<button type="submit" id="subm" class="btn btn-success waves-effect"><i class="mdi mdi-content-save-all"></i> Send</button>');
define('BT_RESET', '<button type="reset" class="btn btn-danger waves-effect">Reset</button>');
define('PAGE_LIMIT', 20);
define('REQUIRE_FIELD', '<i class="text-danger"> * </i>');

define('ACTIVE', '<span class="badge badge-success">เปิดใช้งานอยู่</span>');
define('INACTIVE', '<span class="badge badge-warning">ปิดการใช้งาน</span>');
define('YES', '<span class="badge badge-success">ใช่</span>');
define('NO', '<span class="badge badge-warning">ไม่</span>');

//URL saction

define('USERPERMISSION', '/users/displaypermission');
define('DEFAULT_HOME_URL', '/home/index');


define('DATE_TIME_FORMATE', 'dd/MM/yyyy HH:mm');
define('DATE_FORMATE', 'dd/MM/yyyy');
define('TH_DATE', 'en-IR@calendar=buddhist');
define('MONTH_FORMATE', 'M');

//MSG
define('MSG_DELETE_SUCCESS', 'ลบข้อมูลแล้ว');
define('MSG_DELETE_ERROR', 'ไม่สามารถลบข้อมูลได้');
define('MSG_DELETE_NOTFOUND', 'ไม่พบข้อมูลหรือข้อมูลโดนลบไปแล้วโดยผู้ใช้งานอื่น');

Configure::write('LDAP', [
    'account_suffix' => "@hrdi.or.th",
    'domain_controllers' => array("ad01.hrdi.or.th"),
    'base_dn' => 'dc=hrdi,dc=or,dc=th',
    'admin_username' => 'swdb',
    'admin_password' => 'EaRb59hY',
    'real_primarygroup' => true,
    'use_ssl' => false,
    'use_tls' => false,
    'recursive_groups' => true,
    'ad_port' => '389',
    'sso' => false,
]);
