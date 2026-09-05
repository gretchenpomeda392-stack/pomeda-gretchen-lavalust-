<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: UsersController
 * 
 * Automatically generated via CLI.
 */
class UsersController extends Controller {
    
    public function show_users(){
        $users = $this->UsersModel->all();
        ddt($users, 'Users Table');
        $this->call->view('users');
    }
}