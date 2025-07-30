<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_product');
        $this->load->helper('url');

        $data['urlassets'] = $this->config->item('urlassets');
        $data['urluploadurl'] = $this->config->item('urluploadurl') . '/' . $this->config->item('channelsoket');
        $data['title'] = $this->config->item('base_title');
        $data['favicon'] = $this->config->item('base_icon');
        $data['description'] = $this->config->item('base_description');
        $data['author'] = $this->config->item('base_author');
        $data['generator'] = $this->config->item('base_generator');
        $data['urlsocket'] = $this->config->item('urlsocket');
        $data['channelsoket'] = $this->config->item('channelsoket');


        $data['akid'] = 1;
        $data['akuser'] = 'admin';
        $data['aknama'] = 'Administrator';
        $data['akgroup'] = '1';

        date_default_timezone_set('Asia/Jakarta');

        $this->k_data = $data;
    }

    public function index()
    {
        $data = $this->k_data;
        $data['fitur'] = "Manage Product";
        $data['usedatatable'] = true;
        $this->load->view('panel/zheader', $data);
        $this->load->view('panel/product', $data);
        $this->load->view('panel/zfooter', $data);
    }

    public function getList()
    {
        $data['data'] = $this->m_product->get_all();
        echo json_encode($data);
    }

    public function getId($id)
    {
        $data['data'] = $this->m_product->get_by_id($id);
        echo json_encode($data);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            show_error('Method Not Allowed', 405);
        }
        $data = [
            'name'        => $this->input->post('name'),
            'price'       => $this->input->post('price'),
            'stock'       => $this->input->post('stock'),
            'formula'     => $this->input->post('formula'),
            'created_at'  => date("Y-m-d H:i:s")
        ];

        $inserted = $this->m_product->insert($data);

        if ($inserted) {
            echo json_encode([
                'status' => true,
                'message' => 'Produk berhasil ditambahkan.'
            ]);
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Gagal menambahkan produk.'
            ]);
        }
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            show_error('Method Not Allowed', 405);
        }
        $data = [
            'name'    => $this->input->post('name'),
            'price'   => $this->input->post('price'),
            'stock'   => $this->input->post('stock'),
            'formula' => $this->input->post('formula'),
        ];

        $updated = $this->m_product->update($id, $data);

        if ($updated) {
            echo json_encode([
                'status' => true,
                'message' => 'Produk berhasil diperbarui.'
            ]);
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Gagal memperbarui produk.'
            ]);
        }
    }

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            show_error('Method Not Allowed', 405);
        }
        $deleted = $this->m_product->delete($id);

        if ($deleted) {
            echo json_encode([
                'status' => true,
                'message' => 'Produk berhasil dihapus.'
            ]);
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Gagal menghapus produk.'
            ]);
        }
    }
}
