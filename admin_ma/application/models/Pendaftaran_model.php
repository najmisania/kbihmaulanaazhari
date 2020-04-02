<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pendaftaran_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get pendaftaran by nik
     */
    function get_pendaftaran($nik)
    {
        return $this->db->get_where('pendaftaran',array('nik'=>$nik))->row_array();
    }
        
    /*
     * Get all pendaftaran
     */
    function get_all_pendaftaran()
    {
        $this->db->order_by('nik', 'desc');
        $this->db->join('master_kategori', 'master_kategori.id = pendaftaran.kategori_id');
        $this->db->join('agenda', 'agenda.id = pendaftaran.produk_id', 'left');

        return $this->db->get('pendaftaran')->result_array();
    }
        
    /*
     * function to add new pendaftaran
     */
    function add_pendaftaran($params)
    {
        $this->db->insert('pendaftaran',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update pendaftaran
     */
    function update_pendaftaran($nik,$params)
    {
        $this->db->where('nik',$nik);
        return $this->db->update('pendaftaran',$params);
    }
    
    /*
     * function to delete pendaftaran
     */
    function delete_pendaftaran($nik)
    {
        return $this->db->delete('pendaftaran',array('nik'=>$nik));
    }
}
