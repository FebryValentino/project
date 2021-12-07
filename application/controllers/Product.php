<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Data Product';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['product'] = $this->ModelProduct->getProduct()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('product/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Produk';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['product'] = $this->ModelProduct->getProduct()->result_array();

        $this->form_validation->set_rules('nama_produk', 'nama_produk', 'required|min_length[3]', [
            'required' => '*Nama produk harus diisi',
            'min_length' => '*Nama produk terlalu pendek'
        ]);
        $this->form_validation->set_rules('kode_produk', 'kode_produk', 'required', [
            'required' => '*Kode produk harus diisi',
        ]);
        $this->form_validation->set_rules('warna', 'warna', 'required|min_length[3]', [
            'required' => '*Warna harus diisi',
            'min_length' => '*Warna terlalu pendek'
        ]);
        $this->form_validation->set_rules('ukuran', 'ukuran', 'required', [
            'required' => '*Ukuran harus diisi'
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required|min_length[3]|numeric', [
            'required' => '*Harga harus diisi',
            'min_length' => '*Harga terlalu pendek',
            'numeric' => '*Hanya boleh diisi angka'
        ]);
        $this->form_validation->set_rules('stok', 'stok', 'required|numeric', [
            'required' => '*Stok harus diisi',
            'numeric' => '*Yang anda masukan bukan angka'
        ]);



        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['file_name'] = 'img';

        $this->load->library('upload', $config);


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('product/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = 'null';
            }
            $data = [
                'nama_produk' => $this->input->post('nama_produk', true),
                'kode_produk' => $this->input->post('kode_produk', true),
                'warna' => $this->input->post('warna', true),
                'ukuran' => $this->input->post('ukuran', true),
                'harga' => $this->input->post('harga', true),
                'stok' => $this->input->post('stok', true),
                'image' => $gambar
            ];

            $this->ModelProduct->simpanProduct($data);
            redirect('Product');
        }
    }

    public function ubahProduct()
    {
        $data['judul'] = 'Ubah Product';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['product'] = $this->ModelProduct->productWhere(['id' => $this->uri->segment(3)])->result_array();


        $this->form_validation->set_rules('nama_produk', 'nama_produk', 'required|min_length[3]', [
            'required' => '*Nama produk harus diisi',
            'min_length' => '*Nama produk terlalu pendek'
        ]);
        $this->form_validation->set_rules('kode_produk', 'kode_produk', 'required', [
            'required' => '*Kode produk harus diisi',
        ]);
        $this->form_validation->set_rules('warna', 'warna', 'required|min_length[3]', [
            'required' => '*Warna harus diisi',
            'min_length' => '*Warna terlalu pendek'
        ]);
        $this->form_validation->set_rules('ukuran', 'ukuran', 'required', [
            'required' => '*Ukuran harus diisi'
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required|min_length[3]|numeric', [
            'required' => '*Harga harus diisi',
            'min_length' => '*Harga terlalu pendek',
            'numeric' => '*Hanya boleh diisi angka'
        ]);
        $this->form_validation->set_rules('stok', 'stok', 'required|numeric', [
            'required' => '*Stok harus diisi',
            'numeric' => '*Yang anda masukan bukan angka'
        ]);

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['file_name'] = 'img';
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('product/ubah_product', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                unlink('assets/img/upload/' . $this->input->post('old_pict', TRUE));
                $gambar = $image['file_name'];
            } else {
                $gambar = $this->input->post('old_pict', TRUE);
            }
            $data = [
                'nama_produk' => $this->input->post('nama_produk', true),
                'kode_produk' => $this->input->post('kode_produk', true),
                'warna' => $this->input->post('warna', true),
                'ukuran' => $this->input->post('ukuran', true),
                'harga' => $this->input->post('harga', true),
                'stok' => $this->input->post('stok', true),
                'image' => $gambar
            ];

            $this->ModelProduct->updateProduct($data, ['id' => $this->input->post('id')]);
            redirect('Product');
        }
    }



    public function hapusProduct()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelProduct->hapusProduct($where);

        redirect('Product');
    }
}
