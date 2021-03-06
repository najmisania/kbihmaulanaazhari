<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Master_kategori extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Master_kategori_model');
    } 

    /*
     * Listing of master_kategori
     */
    function index()
    {


        $data['master_kategori'] = $this->Master_kategori_model->get_all_master_kategori();
        $data['content_name'] = "master_kategori/index";
        $data['title_page'] = "Master Kategori";
        $data['option_button'][] = '<a href="'.site_url('master_kategori/add').'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Baru</a>';
        $this->load->view('index', $data);
    }

    /*
     * Adding a new master_kategori
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama_kategori','Nama Kategori','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nama_kategori' => $this->input->post('nama_kategori'),
            );
            
            $master_kategori_id = $this->Master_kategori_model->add_master_kategori($params);
            redirect('master_kategori/index');
        }
        else
        {            
            $data['master_kategori'] = $this->Master_kategori_model->get_all_master_kategori();
            $data['content_name'] = "master_kategori/add";
            $data['title_page'] = "Master Kategori";
            $data['option_button'][] = '<a href="'.site_url('master_kategori/add').'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Baru</a>';
            $this->load->view('index',$data);
        }
    }  

    /*
     * Editing a master_kategori
     */
    function edit($id)
    {   
        // check if the master_kategori exists before trying to edit it
        $data['master_kategori'] = $this->Master_kategori_model->get_master_kategori($id);
        
        if(isset($data['master_kategori']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama_kategori','Nama Kategori','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nama_kategori' => $this->input->post('nama_kategori'),
                );

                $this->Master_kategori_model->update_master_kategori($id,$params);            
                redirect('master_kategori/index');
            }
            else
            {
                $data['_view'] = 'master_kategori/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The master_kategori you are trying to edit does not exist.');
    } 

    /*
     * Deleting master_kategori
     */
    function remove($id)
    {
        $master_kategori = $this->Master_kategori_model->get_master_kategori($id);

        // check if the master_kategori exists before trying to delete it
        if(isset($master_kategori['id']))
        {
            $this->Master_kategori_model->delete_master_kategori($id);
            redirect('master_kategori/index');
        }
        else
            show_error('The master_kategori you are trying to delete does not exist.');
    }
    
}
