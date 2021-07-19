<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('session_admin')) {
    function session_admin()
    {
        if (get_instance()->session->userdata('status_admin') != 'Online') {
            redirect(base_url('admin/auth/login'));
        }
    }
}
