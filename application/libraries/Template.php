<?php

/**
 * 
 */
class Template
{
    protected $_ci;
    function __construct()
    {
        $this->_ci = &get_instance();
    }

    public function admin($content, $data = null)
    {
        $data = [
            '_content' => $this->_ci->load->view($content, $data, true)
        ];
        $this->_ci->load->view('admin/template', $data);
    }

    public function web($content, $data = null)
    {
        $data = [
            '_content' => $this->_ci->load->view($content, $data, true)
        ];
        $this->_ci->load->view('template', $data);
    }
}
