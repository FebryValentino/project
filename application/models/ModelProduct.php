<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelProduct extends CI_Model
{
    //manajemen buku
    public function getProduct()
    {
        return $this->db->get('product');
    }

    public function productWhere($where)
    {
        return $this->db->get_where('product', $where);
    }

    public function simpanProduct($data = null)
    {
        $this->db->insert('product', $data);
    }

    public function updateProduct($data = null, $where = null)
    {
        $this->db->update('product', $data, $where);
    }

    public function hapusProduct($where = null)
    {
        $this->db->delete('product', $where);
    }
}
