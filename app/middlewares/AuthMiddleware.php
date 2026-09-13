<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Middleware: AuthMiddleware
 */
class AuthMiddleware
{
    public function handle(Closure $next)
    {
        // Get LavaLust instance
        $lava = lava_instance();

        // Load LavaLust session
        $lava->call->library('session');

        // Check login session
        if ($lava->session->userdata('logged_in') !== true) {
            redirect('/login');
            exit();
        }

        return $next();
    }
}