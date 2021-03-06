<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

    class BackupDatabase extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('file');
            $this->load->helper('download');
            $this->load->library('zip');
     
            
        }
        public function cetak()
        {
            $this->load->dbutil();
            $db_format=array('format'=>'zip','filename'=>'Kemenag_backup.sql');
            $backup=& $this->dbutil->backup($db_format);
            $dbname='DB_BankSampah_backup'.date('d-m-Y').'.zip';
            $save='assets/backup/'.$dbname;
            write_file($save,$backup);
            force_download($dbname,$backup);
        }


    }
        /* End of fils admin.php */
    

?>