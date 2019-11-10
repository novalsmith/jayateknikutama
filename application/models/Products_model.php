<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products_model extends CI_Model
{

    public $table = 'products';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json()
    {
        $this->datatables->select('id,name,
                                
                                 kategorimenu.menu,
                                 kategorimenu.parentid,
                                 kategorimenu.idmenu,
                                 brand.judul,
                                 description,
                                 image,slideshow,
                                 products.status');
        $this->datatables->from('products');
        $this->datatables->join('kategorimenu', 'kategorimenu.idmenu = products.idmenu');
        $this->datatables->join('brand', 'brand.idbrand = products.idbrand');
        //add this line for join
        //$this->datatables->join('table2', 'products.field = table2.field');
        $this->datatables->add_column(
            'action',

            '  <a href="javascript:void(0);" class="view_produk label label-sm label-info" data-view="$1" ><i class="fa fa-eye"></i> View</a>  
               <a href="javascript:void(0);" class="edit_produk label label-sm label-info" data-code="$1" ><i class="fa fa-pencil"></i> Edit</a> 
               <a href="javascript:void(0);" class="delete_produk label label-sm label-danger" data-code="$1" data-judul="$2"><i class="fa fa-trash-o"></i> Hapus</a> 
              ', 'id,name'
        );

        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        $data =  $this->db->get($this->table)->row();

        if ($data) {
            return $data;
        } else {
            return false;
        }
    }

    // get total rows
    function total_rows($q = NULL)
    {
        $this->db->like('id', $q);
        $this->db->or_like('name', $q);
        $this->db->or_like('idkategori', $q);
        $this->db->or_like('description', $q);
        $this->db->or_like('image', $q);
        $this->db->or_like('slideshow', $q);
        $this->db->or_like('create_date', $q);
        $this->db->or_like('modif_date', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
        $this->db->or_like('name', $q);
        $this->db->or_like('idkategori', $q);
        $this->db->or_like('description', $q);
        $this->db->or_like('image', $q);
        $this->db->or_like('slideshow', $q);
        $this->db->or_like('create_date', $q);
        $this->db->or_like('modif_date', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}

/* End of file Products_model.php */
/* Location: ./application/models/Products_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-05-11 11:09:54 */
/* http://harviacode.com */
