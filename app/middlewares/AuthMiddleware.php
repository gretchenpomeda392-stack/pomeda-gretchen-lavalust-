<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Middleware: AuthMiddleware
 */
class AuthMiddleware
{
    public function handle(Closure $next)
    {
        // Start PHP session
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Check if user is logged in
        if (
            !isset($_SESSION['logged_in']) ||
            $_SESSION['logged_in'] !== true
        ) {
            // Not logged in → go to login page
            redirect('/Product_Views');
            exit();
        }

        return $next();
    }
}