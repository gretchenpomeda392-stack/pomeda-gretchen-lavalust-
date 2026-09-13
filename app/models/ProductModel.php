<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Model: ProductModel
 * 
 * Automatically generated via CLI.
 */
class ProductModel extends Model {
    protected $table = 'products';
    protected $primary_key = 'id';
    protected $fillable = [];
    protected $guarded = ['id'];

    public function __construct() 
    {
        parent::__construct();
    }

    public function get_all() 
    {
        return $this->db->table($this->table)->get_all();
    }

    public function get_one($id) 
    {
        return $this->db->table($this->table)->where('id', $id)->get();
    }

    public function insert_product($data) 
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_product($id, $data) 
    {
        return $this->db->table($this->table)->where('id', $id)->update($data);
    }

    public function delete_product($id) 
    {
        return $this->db->table($this->table)->where('id', $id)->delete();
    }
}