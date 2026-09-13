<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Middleware: AuthMiddleware
 */
class AuthMiddleware
{
    public function handle(Closure $next)
    {
        // Start session
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Check if logged in
        if (
            !isset($_SESSION['logged_in']) ||
            $_SESSION['logged_in'] !== true
        ) {
            redirect('/not_logged_in');
            exit();
        }

        return $next();
    }
}