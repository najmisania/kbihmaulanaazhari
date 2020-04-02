<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Agenda extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Agenda_model');
    } 

    /*
     * Listing of agenda
     */
    function index()
    {
        $data['agenda'] = $this->Agenda_model->get_all_agenda();
        $data['content_name'] = "agenda/index";
        $data['title_page'] = "Master Produk Travel";
        $data['option_button'][] = '<a href="'.site_url('agenda/add').'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Baru</a>';
        $this->load->view('index', $data);
    }

    /*
     * Adding a new agenda
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama_kegiatan','Nama Kegiatan','required');
		$this->form_validation->set_rules('tanggal_kegiatan','Tanggal Kegiatan','required');
		$this->form_validation->set_rules('batas_kuota','Batas Kuota','numeric|min_length[1]');
		$this->form_validation->set_rules('harga','Harga','required');

		if($this->form_validation->run())     
        {   

            $sqlDate = $this->dates->getSqlDate($this->input->post('tanggal_kegiatan'),"/");
            $params = array(
				'kategori_id' => $this->input->post('kategori_id'),
				'status' => $this->input->post('status'),
				'nama_kegiatan' => $this->input->post('nama_kegiatan'),
				'deskripsi' => $this->input->post('deskripsi'),
				'tanggal_kegiatan' => $sqlDate,
				'batas_kuota' => $this->input->post('batas_kuota'),
				'harga' => $this->input->post('harga'),
            );

            
            $agenda_id = $this->Agenda_model->add_agenda($params);

            $config['upload_path']          = './gambar_produk/';
            $config['allowed_types']        = 'gif|jpg|png';
            // $config['max_size']             = 500;
            $config['file_name']            = $agenda_id;

            $this->load->library('upload', $config);
         
            if ( ! $this->upload->do_upload('gambar')){
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }else{
                $data = array('upload_data' => $this->upload->data());
                $this->db->set('gambar', $data['upload_data']['file_name']);
                $this->db->where('id', $agenda_id);
                $this->db->update('agenda'); 
                redirect('agenda');
            }

            // redirect('agenda/index');
        }
        else
        {
			$this->load->model('Master_kategori_model');
			$data['all_master_kategori'] = $this->Master_kategori_model->get_all_master_kategori();
            $data['content_name'] = 'agenda/add';
            $data['title_page'] = "Tambah Agenda";
            $this->load->view('index', $data);
    
        }
    }  

    /*
     * Editing a agenda
     */
    function edit($id)
    {   
        // check if the agenda exists before trying to edit it
        $data['agenda'] = $this->Agenda_model->get_agenda($id);
        $arr_date = explode("-",$data['agenda']['tanggal_kegiatan']);
        $data['agenda']['tanggal_kegiatan'] = "$arr_date[2]-$arr_date[1]-$arr_date[0]";
        
        if(isset($data['agenda']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama_kegiatan','Nama Kegiatan','required');
			$this->form_validation->set_rules('tanggal_kegiatan','Tanggal Kegiatan','required');
			$this->form_validation->set_rules('batas_kuota','Batas Kuota','numeric|min_length[1]');
			$this->form_validation->set_rules('harga','Harga','required');
		
			if($this->form_validation->run())     
            {   
                $sqlDate = $this->dates->getSqlDate($this->input->post('tanggal_kegiatan'),"/");
            
                $params = array(
					'kategori_id' => $this->input->post('kategori_id'),
					'status' => $this->input->post('status'),
					'nama_kegiatan' => $this->input->post('nama_kegiatan'),
					'deskripsi' => $this->input->post('deskripsi'),
					'tanggal_kegiatan' => $sqlDate,
					'batas_kuota' => $this->input->post('batas_kuota'),
					'harga' => str_replace(".", "", $this->input->post('harga'))
                );

                if(file_exists($_FILES['gambar']['tmp_name']) && is_uploaded_file($_FILES['gambar']['tmp_name'])) {
                    $config['upload_path']          = './gambar_produk/';
                    $config['allowed_types']        = 'gif|jpg|png';
                    // $config['max_size']             = 500;
                    $config['file_name']            = $id;

                    $this->load->library('upload', $config);
                 
                    if ( ! $this->upload->do_upload('gambar')){
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                        exit;
                    }
                    else{
                        $data = array('upload_data' => $this->upload->data());
                        $params['gambar'] = $data['upload_data']['file_name'];
                    }
                }

                $this->Agenda_model->update_agenda($id,$params);            
                redirect('agenda');
            }
            else
            {
				$this->load->model('Master_kategori_model');
				$data['all_master_kategori'] = $this->Master_kategori_model->get_all_master_kategori();

                // $data['_view'] = 'agenda/edit';
                $data['content_name'] = "agenda/edit";
                $data['title_page'] = "Edit Produk";

                $this->load->view('index',$data);
            }
        }
        else
            show_error('The agenda you are trying to edit does not exist.');
    } 

    /*
     * Deleting agenda
     */
    function remove($id)
    {
        $agenda = $this->Agenda_model->get_agenda($id);

        // check if the agenda exists before trying to delete it
        if(isset($agenda['id']))
        {
            $this->Agenda_model->delete_agenda($id);
            redirect('agenda/index');
        }
        else
            show_error('The agenda you are trying to delete does not exist.');
    }
    
}
