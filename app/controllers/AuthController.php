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

        $this->call->library(['form_validation', 'session']);
        $this->call->model('AuthModel');
        $this->call->helper('url');
    }


    // =========================
    // REGISTER
    // =========================

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $username = $this->request->post('username');
            $email = $this->request->post('email');
            $password = $this->request->post('password');
            $passconfirm = $this->request->post('passconfirm');

            // Validation
            if (!$this->form_validation->validate([
                'username' => 'required | min_length[5] | max_length[20] | alpha_numeric',
                'email' => 'required | valid_email',
                'password' => 'required | min_length[8] | max_length[20]',
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

            // Success message
            $this->session->set_flashdata(
                'success',
                'Account created successfully.'
            );

            // Go to login
            redirect('/login');
            return;

        } else {

            $this->call->view('register');
        }
    }


    // =========================
    // LOGIN
    // =========================

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $username = $this->request->post('username');
            $password = $this->request->post('password');

            // Check empty fields
            if (empty($username) || empty($password)) {

                $this->call->view('login', [
                    'error' => 'Please enter your username and password.'
                ]);

                return;
            }

            // Find user
            $user = $this->AuthModel->get_by_username($username);

            // Check username and password
            if ($user && password_verify($password, $user['password'])) {

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['logged_in'] = true;
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];

    redirect('/Product_Views');
    return;

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


    // =========================
    // LOGOUT
    // =========================

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('/login');
    }
}