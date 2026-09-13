<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: ProductController
 * 
 * Automatically generated via CLI.
 */
class ProductController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->call->model('ProductModel');
    }

    public function Product_Views() {
        $data['products'] = $this->ProductModel->get_all();
        $this->call->view('Product_Views', $data);
    }

    public function index() {
        $data['products'] = $this->ProductModel->get_all();
        $this->call->view('Product_Views', $data);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'product_name' => $this->request->post('product_name'),
                'description'  => $this->request->post('description'),
                'price'        => $this->request->post('price'),
                'quantity'     => $this->request->post('quantity')
            ];

            if ($this->ProductModel->insert($data)) {
                redirect('Product_Views');
            }
        }
        $this->call->view('create');
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'product_name' => $this->request->post('product_name'),
                'description'  => $this->request->post('description'),
                'price'        => $this->request->post('price'),
                'quantity'     => $this->request->post('quantity')
            ];

            if ($this->ProductModel->update_product($id, $data)) {
                redirect('Product_Views');
                exit();
            }
        }

        $data['products'] = $this->ProductModel->get_one($id);
        $this->call->view('edit', $data);
    }

    public function delete($id) {
        $this->ProductModel->delete_product($id);
        redirect('Product_Views');
        exit();
    }
}
