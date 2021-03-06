<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->template->load('template', 'dashboard1');
    }

    function dashboard3() {
        $this->template->load('template', 'dashboard3');
    }

    function form_general() {
        $this->template->load('template', 'general_form');
    }

    function form_advanced() {
        $this->template->load('template', 'form_advanced');
    }

    function form_validation() {
        $this->template->load('template', 'form_validation');
    }

    function form_wizard() {
        $this->template->load('template', 'form_wizard');
    }

    function form_upload() {
        $this->template->load('template', 'form_upload');
    }

    function form_button() {
        $this->template->load('template', 'form_button');
    }

    function table() {
        $this->template->load('template', 'table');
    }

    function table_dynamic() {
        $this->template->load('template', 'table_dynamic');
    }
    
    function contact() {
        $this->template->load('template', 'contact');
    }

}
