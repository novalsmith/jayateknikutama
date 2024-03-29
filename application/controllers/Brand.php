<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Brand extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Brand_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }


    public function index()
    {


        $data = array(

            'content'     => 'brand/brand_list',
            'email'     =>  'novalsmith69@gmail.com',

            'judul'      => 'Brand',

            'judul_sub' => 'Brand',
            'judulBrand' => 'Brand',
            'judul_page' => 'Brand'

        );

        $this->load->view('template', $data);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Brand_model->json();
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/brand';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = 'jtu_' . date('dMy H i s');
        $config['overwrite']            = true;
        // $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('filebrand') == "") {
            return null;
        } else {
            return $this->upload->data("file_name");
        }
    }
 
    
    public function createaction() 
    {
        if ($this->_uploadImage() == null) {
            $data = array(
		'judul' => $this->input->post('judulbrand',TRUE),
		// 'filebrand' => $this->_uploadImage(),
		'createdate' => date("d-m-y")
		 
        );
    }else{
            $data = array(
                'judul' => $this->input->post('judulbrand', TRUE),
                'filebrand' => $this->_uploadImage(),
                'createdate' => date("d-m-y")

            );
    }

           $datacek =  $this->db->insert('brand',$data);
        if ($datacek) {
            echo json_encode(array('success' => 'ok', 'data' => $data));
        } else {
            echo json_encode(array('success' => 'no', 'data' => $data));
        }
    
    }


    public function updateaction()
    {
        $id = $this->input->post('idbrand');
        if ($this->_uploadImage() == null) {
      
        $data = array(
            'judul' => $this->input->post('judulbrand', TRUE),
            // 'filebrand' => $this->_uploadImage(),
            'createdate' => date("d-m-y")
        );
    }else{
            $data = array(
                'judul' => $this->input->post('judulbrand', TRUE),
                'filebrand' => $this->_uploadImage(),
                'createdate' => date("d-m-y")
            );
    }
        $this->db->where('idbrand',$id);
        $datacek =  $this->db->update('brand', $data);
        if ($datacek) {
            echo json_encode(array('success' => 'ok','idbrand'=>$id, 'data' => $data));
        } else {
            echo json_encode(array('success' => 'no', 'data' => $data));
        }
    }

    public function jsonEdit($id)
    {
         
         $this->db->where('idbrand', $id);
      $row =   $this->db->get('brand')->row();
      $setdata = array('idbrand' => $row->idbrand ,
                        'judul' => $row->judul,
                        'filebrand' => $row->filebrand,
                        'createdate' => $row->createdate );
         
         echo json_encode($setdata);
    }
    
    public function update($id) 
    {
        $row = $this->Barang_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('barang/update_action'),
		'id_barang' => set_value('id_barang', $row->id_barang),
		'nama_barang' => set_value('nama_barang', $row->nama_barang),
		'create_by' => set_value('create_by', $row->create_by),
		'create_date' => set_value('create_date', $row->create_date),
		'modif_by' => set_value('modif_by', $row->modif_by),
		'modif_date' => set_value('modif_date', $row->modif_date),
	    );
            $this->load->view('barang/barang_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_barang', TRUE));
        } else {
            $data = array(
		'nama_barang' => $this->input->post('nama_barang',TRUE),
		'create_by' => $this->input->post('create_by',TRUE),
		'create_date' => $this->input->post('create_date',TRUE),
		'modif_by' => $this->input->post('modif_by',TRUE),
		'modif_date' => $this->input->post('modif_date',TRUE),
	    );

            $this->Barang_model->update($this->input->post('id_barang', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang'));
        }
    }


    public function delete($id)
    {
        $row = $this->db->query("select filebrand,idbrand,judul from brand where idbrand=".$id)->row();
         if ($row) {
            unlink('./assets/img/brand/' . $row->filebrand);
            $this->db->delete('brand', array('idbrand' => $row->idbrand));

            $data = array(
                'status' => true,
                'data'   => $row->judul
            );
            echo json_encode($data);
        } else {
            $data = array(
                'status' => false

            );
            echo json_encode($data);
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_barang', 'nama barang', 'trim|required');
	$this->form_validation->set_rules('create_by', 'create by', 'trim|required');
	$this->form_validation->set_rules('create_date', 'create date', 'trim|required');
	$this->form_validation->set_rules('modif_by', 'modif by', 'trim|required');
	$this->form_validation->set_rules('modif_date', 'modif date', 'trim|required');

	$this->form_validation->set_rules('id_barang', 'id_barang', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "barang.xls";
        $judul = "barang";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Barang");
	xlsWriteLabel($tablehead, $kolomhead++, "Create By");
	xlsWriteLabel($tablehead, $kolomhead++, "Create Date");
	xlsWriteLabel($tablehead, $kolomhead++, "Modif By");
	xlsWriteLabel($tablehead, $kolomhead++, "Modif Date");

	foreach ($this->Barang_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_barang);
	    xlsWriteLabel($tablebody, $kolombody++, $data->create_by);
	    xlsWriteLabel($tablebody, $kolombody++, $data->create_date);
	    xlsWriteLabel($tablebody, $kolombody++, $data->modif_by);
	    xlsWriteLabel($tablebody, $kolombody++, $data->modif_date);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=barang.doc");

        $data = array(
            'barang_data' => $this->Barang_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('barang/barang_doc',$data);
    }

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-05-05 10:04:01 */
/* http://harviacode.com */