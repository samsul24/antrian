<?php

defined('BASEPATH') or exit('No direct script access allowed');

Class LaporanExcel extends CI_Controller{
    
  public function __construct(){    
    parent::__construct();        
    // $this->load->model('siswa_model');  
    $this->load->library('curl');

    $this->API = "http://localhost:8080/antrian/laporan";
  
  }
  public function exportExcelGan()
  {
    $data = $this->M_inponow->getData();
  
    include_once APPPATH.'/third_party/xlsxwriter.class.php';
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
    error_reporting(E_ALL & ~E_NOTICE);
  
    $filename = "report-".date(d-m-Y-H-i-s').".xlsx";
    header('Content-disposition: attachment; filename="'.XLSXWriter::sanitize_filename($filename).'"');
    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
    header('Content-Transfer-Encoding: binary');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
  
    $styles = array('widths'=>[3,20,30,40], 'font'=>'Arial','font-size'=>10,'font-style'=>'bold', 'fill'=>'#eee', 'halign'=>'center', 'border'=>'left,right,top,bottom');
    $styles2 = array( ['font'=>'Arial','font-size'=>10,'font-style'=>'bold', 'fill'=>'#eee', 'halign'=>'left', 'border'=>'left,right,top,bottom','fill'=>'#ffc'],['fill'=>'#fcf'],['fill'=>'#ccf'],['fill'=>'#cff'],);
  
    $header = array(
      'No'=>'integer',
      'Tanggal'=>'string',
      'Nomor'=>'string',
      'Id Instansi'=>'string',
      'Id Layanan'=>'string',
      'Waktu Datang'=>'string',
      'Waktu Panggil'=>'string',
      'Waktu Selesai'=>'string',
      'Status'=>'string',
    );
  
    $writer = new XLSXWriter();
    $writer->setAuthor('Manusia');
  
    $writer->writeSheetHeader('Sheet1', $header, $styles);
    $no = 1;
    foreach($data as $row){
      $writer->writeSheetRow('Sheet1', [$no, $row['tanggal'], $row['nomor'], $row['id_instansi'], $row['id_layanan'], 
      $row['waktu_datang'], $row['waktu_panggil'], $row['waktu_selesai'], $row['status']], $styles2);
      $no++;
    }
    $writer->writeToStdOut();
  }

}
?>