<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Display extends Web_Controller
{   
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('covid19_model');
        // $this->load->model('wilayah_model');
        // $this->load->model('penduduk_model');
        // $this->modul_ini = 206;
    }

    public function dis() {
        return view('display.index');      
    }
    
}