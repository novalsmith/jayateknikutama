 <?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Articles extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Articles_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');

   if ($this->session->userdata('email')=="" )
      { redirect('auth'); }
    }

    public function index()
    {
        
 
        $data = array(
            
            'content'     => 'articles/articles_list',
             'email'     =>  'novalsmith69@gmail.com',
             
         'judul'      => 'Artikel',

         'judul_sub' => 'Artikel',
         'judulBrand' => 'Silat Sampah',
         'judul_page' => 'Artikel' 
        
        );

        $this->load->view('template', $data);
    }
    
    public function json() {
   header('Content-Type: application/json');
       echo $this->Articles_model->json();
    }



    public function read($id) 
    {
        $row = $this->Articles_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idartikel' => $row->idartikel,
		'idkategori' => $row->idkategori,
		'idtag' => $row->idtag,
		'title' => $row->title,
		'slug' => $row->slug,
		'body' => $row->body,
		'image' => $row->image,
		'status' => $row->status,
		'create_date' => $row->create_date,
		'modif_date' => $row->modif_date,
	    );
            $this->load->view('articles/articles_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('articles'));
        }
    }

    public function create() 
    {
       $breadcrumb = array(
   "Home" => "/welcome",
   "Agenda" => ""
   );
        $data = array(
            
            'content'     => 'articles/articles_form',
             'email'     =>  'novalsmith69@gmail.com',
               'breadcrumb' => $breadcrumb,
               'get_allKategori' => $this->Articles_model->get_allKategori(),
         'judul'      => 'Agenda List',

         'judul_sub' => 'Artikel',
         'judulBrand' => 'Silat Sampah',
         'judul_page' => 'Artikel' 
        
        );

        $this->load->view('template', $data);
    }
    
   

public function create_action(){
  
     $judul = $this->input->post('judul');
   
    
              $simpan = array(
                                  'idmenu' => $this->input->post('idmenu'),
                                  'tags' => $this->input->post('tags'),
                                  'title' => $judul,
                                  'slug' => strtolower(url_title($judul,'_')),
                                  'body' => $this->input->post('isiartikel'),
                                  
                                  'image' =>$this->_uploadImage(),
                                  'status' => $this->input->post('status'),
                                  
                                   
                                  'create_date' => date('Y-m-d H:i:s')
                                  
                                  // 'modifdate' => date('y m d H:i:s')
                            );
   // unlink('./assets/img/thumb/'. $gbr['file_name']);
              
            $this->Articles_model->insert($simpan); //kirim value ke model m_upload
            echo json_encode(array('judul' => $judul,
                                    'pesan' => "Berhasil Tersimpan",
                                    'status' => TRUE
        ));

        
        
       }


       
public function update_action(){
  
    $idarticles = $this->input->post('idartikel');
     $judul = $this->input->post('judul');
      $foto = $this->input->post('foto');
 
    if($this->_uploadImage() == null){
         $simpan = array(
      'idmenu' => $this->input->post('idmenu'),
      'tags' => $this->input->post('tags'),
      'title' => $judul,
      'slug' => strtolower(url_title($judul,'_')),
      'body' => $this->input->post('isiartikel'),
      
      // 'image' =>$this->_uploadImage(),
      'status' => $this->input->post('status'),
      
       
      'create_date' => date('Y-m-d H:i:s')
      
      // 'modifdate' => date('y m d H:i:s')
);
    }else{
  $simpan = array(
      'idkategori' => $this->input->post('idkategori'),
      'tags' => $this->input->post('tags'),
      'title' => $judul,
      'slug' => strtolower(url_title($judul,'_')),
      'body' => $this->input->post('isiartikel'),
      
      'image' =>$this->_uploadImage(),
      'status' => $this->input->post('status'),
      
       
      'create_date' => date('Y-m-d H:i:s')
      
      // 'modifdate' => date('y m d H:i:s')
);
    unlink('./assets/img/small/'. $foto);
    }
           $validasi =  $this->Articles_model->update($idarticles, $simpan);
                  if( $validasi){

                  echo json_encode(array('judul' => $judul,
                  'pesan' => "Berhasil Tersimpan",
                  'status' => TRUE  ));
                  }else{
                  echo json_encode(array('judul' => $judul,
                  'pesan' => "Gagal Tersimpan",
                  'status' => FALSE  ));

                  }
       
       }


private function _uploadImage()
{
    $config['upload_path']          = './assets/img/small';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = 'jayateknikutama_'.date('dMy H i s');
    $config['overwrite']            = true;
    // $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if($this->upload->do_upload('image') =="" ){
       return null;
     }else{
        return $this->upload->data("file_name");
      }
     
}

 

    
    public function get_by_id() 
    {
        $judul = $this->input->post('judul');
      $slug = strtolower(url_title($judul,'_'));
        $row = $this->Articles_model->get_by_id($slug);
        if ($row) {
          
          $data = array( 
            'status' => true,
            'data'  =>$row
          );

          echo json_encode($data);
        }else{
           $dataerror = array( 
            'status' => false,
            'data'  =>$row
          );
           echo json_encode($dataerror);
        }

          
    }

     public function Editget_by_id($id) 
    {
         
        $row = $this->Articles_model->Editget_by_id($id);
        if ($row) {
          
          $data = array( 
            'status' => true,
            'data'  =>$row
          );

          echo json_encode($data);
        }else{
           $dataerror = array( 
            'status' => false,
            'data'  =>$row
          );
           echo json_encode($dataerror);
        }

          
    }
    
 
    
    public function delete($id) 
    {

    
        $row = $this->Articles_model->Editget_by_id($id);
      
        if ($row) {
           unlink('./assets/img/small/'.$row->image);
           $this->db->delete('articles', array('idartikel' =>$row->idartikel));

            $data = array(
              'status' => true,
              'data'   =>$row 
            );
            echo json_encode($data);
        } else {
          $data = array(
            'status' => false
            
          );
         echo json_encode($data);
            
        }
    }

 
 

}

?>