<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antrian extends CI_Controller {


	  
    function __construct()
    {
        parent::__construct();
        $this->language       = 'english'; /** Indonesian / english **/
        $this->tema           = "flexigrid"; /** datatables / flexigrid **/
        $this->tabel          = "antrian";
        $this->active_id_menu = "Antrian";
        $this->nama_view      = "Antrian";
        $this->status         = true; 
        $this->field_tambah   = array(); 
        $this->field_edit     = array(); 
        $this->field_tampil   = array('id_layanan','id_user','tanggal','nomor'); 
        $this->folder_upload  = 'assets/uploads/files';
        $this->add            = true;
        $this->edit           = false;
        $this->delete         = false;
        $this->crud;
    }

    function index(){
            $data = [];
            if($this->crud->getState() == "add")
            redirect(base_url('admin/Antrian_poli/addAntrianPoli'));
            /** Bagian GROCERY CRUD USER**/


            /** Relasi Antar Tabel 
            * @parameter (nama_field_ditabel_ini, tabel_relasi, field_dari_tabel_relasinya)
            **/
            $this->crud->set_relation('id_user','user','nama');
            $this->crud->set_relation('id_layanan','layanan','nama_poli');

            /** Upload **/
            // $this->crud->set_field_upload('nama_field_upload',$this->folder_upload);  
            // $this->crud->set_field_upload('gambar',$this->folder_upload);  
            
            /** Ubah Nama yang akan ditampilkan**/
            // ->display_as('nama','Nama Setelah di Edit')
            $this->crud->display_as('id_layanan','Poli'); 
            $this->crud->display_as('id_user','Nama user'); 
            
            /** Akhir Bagian GROCERY CRUD Edit Oleh User**/
            $data = array_merge($data,$this->generateBreadcumbs());
            $data = array_merge($data,$this->generateData());
            $this->generate();
            $data['output'] = $this->crud->render();
            $this->load->view('admin/'.$this->session->userdata('theme').'/v_index',$data);
    }

    private function generateBreadcumbs(){
        $data['breadcumbs'] = array(
                array(
                    'nama'=>'Dashboard',
                    'icon'=>'fa fa-dashboard',
                    'url'=>'admin/dashboard'
                ),
                array(
                    'nama'=>'Admin',
                    'icon'=>'fa fa-users',
                    'url'=>'admin/useradmin'
                ),
            );
        return $data;
    }

    public function addAntrianPoli(){
        $data = [];
        $data = array_merge($data,$this->generateBreadcumbs());
        $data = array_merge($data,$this->generateData());
        $this->generate();

        $rowLayanan = $this->db->get('layanan')->result();
        $data['getPoli'] = $rowLayanan;
        // var_dump($rowLayanan); exit();

        $rowuser =$this->db->get('user')->result();
        $data['user'] = $rowuser;

        $data['page'] = 'antrian_layanan';
        $data['output'] = $this->crud->render();
        $this->load->view('admin/'.$this->session->userdata('theme').'/v_index',$data);
    }

    public function getNoAntrian(){
        $id_layanan = $this->input->post('id_layanan');
        $tanggal = date("Y-m-d");

        $this->db->where('antrian.id_layanan',$id_layanan);
        $this->db->where('antrian.tanggal',$tanggal);
        $sql = $this->db->get('antrian');
        $getPoli = $sql->num_rows();//cek jumlah row


        

        if($getPoli==0){//kondisi jika belum ada yg daftar perhari
            $this->db->where('id_layanan',$id_layanan);
            $sql2 = $this->db->get('layanan');
            $rowLayanan = $sql2->row();
            $no = 1;
            $kode=$rowLayanan->kode_poli;
            $noAntrian = $kode.$no;
            $maks = $rowLayanan->jumlah_maksimal;

        }else{
            //kondisi jika sudah ada data per hari
            $this->db->limit(1);
            $this->db->order_by('nomor',"DESC");
            $this->db->where('antrian.id_layanan',$id_layanan);
            $this->db->where('antrian.tanggal',$tanggal);
            $sql = $this->db->get('antrian');
            $rowNo = $sql->row();


            $this->db->where('id_layanan',$id_layanan);
            $sql2 = $this->db->get('layanan');
            $rowLayanan = $sql2->row();
            $kode = $rowLayanan->kode_poli;
            $no = $rowNo->nomor + 1;
            $maks = $rowLayanan->jumlah_maksimal;

            // var_dump($rowNo); exit();
            $noAntrian = $kode.$no;
        }

        $hasil = array("no_hasil"=>$noAntrian, "no"=>$no, "maks"=>$maks);
        echo json_encode($hasil);
    }

    public function save(){
        // var_dump($_POST); exit();
        $id_layanan = $this->input->post('id_layanan');
        $nomor = $this->input->post('nomor');
        // $nomor = substr($this->input->post('nomor'),4);
        $id_user = $this->input->post('id_user');
        $tanggal = date("Y-m-d");

        // echo $tanggal; exit();

        $this->db->set('id_layanan',$id_layanan);
        $this->db->set('nomor',$nomor);
        $this->db->set('id_user',$id_user);
        $this->db->set('tanggal',$tanggal);
        $this->db->insert('antrian');

        redirect(base_url('admin/antrian'));

    }
}