<?php

require './vendor/autoload.php';
require './hotel-mgmt-system-app/app/DB.php';
require './hotel-mgmt-system-app/app/models/Admin.php';
require './hotel-mgmt-system-app/app/dao/AdminDAO.php';
require './hotel-mgmt-system-app/app/handlers/AdminHandler.php';

class AdminDAOTest extends PHPUnit_Framework_TestCase
{

    public function testCreate()
    {
        $adminHandler = new AdminHandler();
        $admin = new Admin();
        $admin->setFullName('Test');
        // email must be unique
        $admin->setEmail('test@gmail.com');
        $admin->setPassword('test');
        $admin->setPhone('5146832697');
        $adminHandler->createAdmin($admin);
        //$this->assertEquals('1', $adminHandler->getExecutionFeedback());
    }

    public function testFetchAll()
    {
        $adminHandler = new AdminHandler();
        $this->assertNotNull($adminHandler->getAdmins());
        //$this->assertEquals('Admin(s) found!', $adminHandler->getExecutionFeedback());
    }

    public function testFetchByEmail()
    {
        $adminHandler = new AdminHandler();
        $admin = new Admin();
        // before running this method, make sure email exists
        $admin->setEmail('test@gmail.com');
        print_r($adminHandler->getAdminByEmail($admin));
        //$this->assertEquals('test@gmail.com', $adminHandler->getExecutionFeedback());
    }


}
