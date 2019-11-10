<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontweb extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //     $this->load->model('Articles_model');
        //     $this->load->library('form_validation');        
        // $this->load->library('datatables');


        //    if ($this->session->userdata('email')=="" )
        //   { redirect('auth'); }

    }
    public function index()
    {
        $data = array(

            'content'     => 'frontContent',
            'email'     =>  'novalsmith69@gmail.com',
            // 'breadcrumb' => $breadcrumb,
            //  'get_allKategori' => $this->Articles_model->get_allKategori(),
            'judul'      => 'Home HadiTerpal',

            'judul_sub' => 'Artikel',
            'judulBrand' => 'Silat Sampah',
            'judul_page' => 'Artikel',
            'produks'   =>    $this->db->query('select * from products where slideshow ="0" and status ="1"
                             order by id desc limit 10')->result(),
            'artikel'  =>    $this->db->query('select * from articles where   status ="1"
                             order by idartikel desc limit 6')->result(),
            'brand'     =>   $this->db->query('select * from brand   order by idbrand desc')->result()
           


        );

        $this->load->view('frontTemplate', $data);
    }

    public function jsonproduk()
    {
        $totalrow = $this->db->query('select count(*) as total from products where slideshow =1')->row();
        $this->db->where('slideshow',1);
         $data = $this->db->get('products')->result();
        $sets = array('total' => $totalrow->total , 'data' => $data );
         echo json_encode($sets);
        }


           public function jsonproduk_brand()
    {
        $brand = $this->db->query('select * from brand')->result();
        echo json_encode($brand);

    }
    public function jsonproduk_All()
    {
        
        // $data = $this->db->query('select * from products where slideshow ="0" order by id desc limit 10')->result();
        $contact = $this->db->query('select * from contact')->result();
        $webprofil = $this->db->query('select * from webprofil')->result();
        
        $kategori = $this->db->query('select count(a.idmenu) as total,km.menu,a.idmenu,km.slugmenu from articles a
         join kategorimenu km on a.idmenu = km.idmenu where a.status =1 group by a.idmenu ')->result();
         $about = $this->db->get('about')->result();
        $sets = array(
            // 'terbaru' => $data,
            'contact' => $contact,
            'webprofil'    => $webprofil,
            'kategori'  => $kategori,
            'about' => $about
    );
        echo json_encode($sets);
    }


}
