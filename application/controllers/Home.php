<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	/*public function index()
	{
		$data['show'] = $this->model->get_show();
		$this->load->view('home',$data);
	}*/
	public function index()
	{
		$data['show'] = $this->model->get_show();
		$this->load->view('header');
		$this->load->view('main',$data);
	}
	public function detail($id)
	{
		$where = array('id' => $id);
		$data['data'] = $this->model->get_id($where,'news');
		$this->load->view('headersimple');
		$this->load->view('single',$data);
	}
	public function login()
	{
		$this->load->view('v_login');
	}
	function check_login() {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$where = array(
                'email' => $email,
                'password' => $password
                );

			$cek = $this->model->check_user("admin",$where)->result();
			foreach ($cek as $a) {
				$id = $a->id;
			};
			$get = $this->model->check_user("admin",$where)->num_rows();
			if($get > 0){
				$data_session = array(
                    'email' => $email,
                    'login' => TRUE,
                    'id' => $id,
                    );
                $this->session->set_userdata($data_session);
                	redirect(base_url('Home/admin'));
			}else{
				
				redirect(base_url('Home'));
				
			}

	}
	public function admin()
	{
		$data['show'] = $this->model->get_show();
		$this->load->view('header1');
		$this->load->view('index',$data);
	}
	function cari (){
		$cari = $this->input->get('cari');
		$data['show'] = $this->model->cari($cari);
		$this->load->view('header1');
		$this->load->view('index2',$data);	
	}
	function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('login');
		
		redirect(base_url('Home'));
	}
	public function edit_m($id)
	{
		$where = array('id' => $id);
		$data['kategori'] = $this->model->daftar_kategori()->result();
		$data['data'] = $this->model->get_id($where,'news');
		$this->load->view('edit',$data);
	}
	public function update()
	{
		
			$this->form_validation->set_rules('title','title','required');
			$this->form_validation->set_rules('content','content','required');
			$this->form_validation->set_rules('id_ca','id_ca','required');
			$this->form_validation->set_rules('image','image','required');
			if ($this->form_validation->run() === TRUE){
				$id = $this->input->post('id');
				$title = $this->input->post('title');
				$content = $this->input->post('content');
				$id_ca = $this->input->post('id_ca');
				$image = $this->input->post('image');
				$data = array(
					'title' => $title,
					'content' => $content,
					'id_ca' => $id_ca,
					'image' => $image
				);

				$where = array(
					'id' => $id
				);

				$this->model->update_m($where,$data,'news');
				redirect(base_url('home'));
				}
				else{
				echo "gagal";
			}
	}
	function hapus($id)
	{
		$where = array('id' => $id);
		$data['data'] = $this->model->hapus_m($where,'news');
		redirect(base_url('home'));
	}
	public function tambah()
	{
		$data['kategori'] = $this->model->daftar_kategori()->result();
		$this->load->view('tambah',$data);
	}

	function add(){
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			$id_ca = $this->input->post('id_ca');
			$image = $this->input->post('image');
			
			$this->form_validation->set_rules('title', 'title', 'required');
			$this->form_validation->set_rules('content', 'content', 'required');
			$this->form_validation->set_rules('id_ca', 'id_ca', 'required');

			$data= array(
			'title' => $title,
			'content' => $content,
			'id_ca' => $id_ca);
			
			if ($this->form_validation->run() === TRUE){
					$id = $this->model->add_m($data);
					$config = array(
			'upload_path' => "./uploads/",
			'allowed_types' => "gif|jpg|png|jpeg|pdf|doc|docx",
			'overwrite' => TRUE,
			'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			);
			$this->load->library('upload', $config);

			$files = $_FILES;
			
				$_FILES['userfile']['name'] = $files['userfile']['name'];
				$_FILES['userfile']['type'] = $files['userfile']['type'];
				$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'];
				$_FILES['userfile']['error'] = $files['userfile']['error'];
				$_FILES['userfile']['size'] = $files['userfile']['size'];
				
				$this->upload->initialize($config);
				if($this->upload->do_upload())
				{
				$uploaded_data = array('upload_data' => $this->upload->data());
				$file_name = $uploaded_data['upload_data']['file_name'];
				echo $file_name;	
					$this->model->simpan($file_name, $id);
				}
				else
				{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('file_view', $error);
				}
			
					redirect(base_url('home'));
			}else{
				redirect(base_url('home/tambah'));
			}
	}
	
}
