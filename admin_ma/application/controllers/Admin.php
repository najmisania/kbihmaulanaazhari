<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    } 

    /*
     * Listing of admin
     */
    function index()
    {
        $data['admin'] = $this->Admin_model->get_all_admin();
        
        $data['_view'] = 'admin/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new admin
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('nama','Nama','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'status_aktif' => $this->input->post('status_aktif'),
				'password' => $this->input->post('password'),
				'email' => $this->input->post('email'),
				'nama' => $this->input->post('nama'),
            );
            
            $admin_id = $this->Admin_model->add_admin($params);
            redirect('admin/index');
        }
        else
        {            
            $data['_view'] = 'admin/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a admin
     */
    function edit($username)
    {   
        // check if the admin exists before trying to edit it
        $data['admin'] = $this->Admin_model->get_admin($username);
        
        if(isset($data['admin']['username']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('nama','Nama','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'status_aktif' => $this->input->post('status_aktif'),
					'password' => $this->input->post('password'),
					'email' => $this->input->post('email'),
					'nama' => $this->input->post('nama'),
                );

                $this->Admin_model->update_admin($username,$params);            
                redirect('admin/index');
            }
            else
            {
                $data['_view'] = 'admin/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The admin you are trying to edit does not exist.');
    } 

    /*
     * Deleting admin
     */
    function remove($username)
    {
        $admin = $this->Admin_model->get_admin($username);

        // check if the admin exists before trying to delete it
        if(isset($admin['username']))
        {
            $this->Admin_model->delete_admin($username);
            redirect('admin/index');
        }
        else
            show_error('The admin you are trying to delete does not exist.');
    }
    
}
