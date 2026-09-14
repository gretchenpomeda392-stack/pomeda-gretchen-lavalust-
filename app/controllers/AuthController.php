<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: AuthController
 */
class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->library('form_validation');
        $this->call->model('AuthModel');
        $this->call->helper('url');
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $username = $this->request->post('username');
            $email = $this->request->post('email');
            $password = $this->request->post('password');
            $passconfirm = $this->request->post('passconfirm');

            // Validation
            if (!$this->form_validation->validate([
                'username' => 'required | min_length[10] | max_length[20] | alpha_numeric',
                'email' => 'required | valid_email',
                'password' => 'required | min_length[10] | max_length[20]',
                'passconfirm' => 'required'
            ])) {

                $this->call->view('register');
                return;
            }

            // Check password confirmation
            if ($password !== $passconfirm) {

                $this->call->view('register', [
                    'error' => 'Passwords do not match.'
                ]);

                return;
            }

            // Check if username already exists
            $existing_user = $this->AuthModel->get_by_username($username);

            if ($existing_user) {

                $this->call->view('register', [
                    'error' => 'Username already exists.'
                ]);

                return;
            }

            // Hash password
            $hashed_password = password_hash(
                $password,
                PASSWORD_DEFAULT
            );

            // Insert user
            $this->AuthModel->insert([
                'username' => $username,
                'email' => $email,
                'password' => $hashed_password
            ]);

            // Go to login after successful registration
            redirect('/login');
            return;

        } else {

            $this->call->view('register');
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $username = $this->request->post('username');
            $password = $this->request->post('password');

            if (empty($username) || empty($password)) {

                $this->call->view('login', [
                    'error' => 'Please enter your username and password.'
                ]);

                return;
            }

            // Get user from database
            $user = $this->AuthModel->get_by_username($username);

            // Check username and password
            if ($user && password_verify($password, $user['password'])) {

                // Start native PHP session
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }

                // Store login information
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                // Redirect to products
                redirect('/Product_Views');
                exit();

            } else {

                $this->call->view('login', [
                    'error' => 'Invalid username or password.'
                ]);

                return;
            }

        } else {

            $this->call->view('login');
        }
    }

    public function logout()
    {
        // Start native PHP session if needed
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Clear session
        $_SESSION = [];

        // Destroy session
        session_destroy();

        // Go back to login
        redirect('/login');
        exit();
    }
}