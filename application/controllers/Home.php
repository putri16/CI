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
		$this->load->view('headersimple');
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
	public function check_login() {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$where = array(
                'email' => $email,
                'password' => md5($password)
                );

			$cek = $this->model->check_user("admin",$where)->result();
			foreach ($cek as $a) {
				$id_admin = $a->id_admin;
			};
			$get = $this->model->check_user("admin",$where)->num_rows();
			if($get > 0){
				$data_session = array(
                    'email' => $email,
                    'login' => TRUE,
                    'id_admin' => $id_admin,
                    );
                $this->session->set_userdata($data_session);
                	redirect(base_url('Home/admin'));
			}else{
				
				
		?><script type="text/javascript">alert("Email dan password yang anda masukkan salah ."); window.location="http://localhost/CI/home/login"</script> <?php
				
			}

	}
	public function admin()
	{
		if($this->session->userdata('login') != TRUE){
		redirect(base_url('home'));
		}
		else{
		$data['show'] = $this->model->get_show();
		$this->load->view('header1');
		$this->load->view('index',$data);
		}
	}
	public function cari (){
		if($this->session->userdata('login') != TRUE){
		redirect(base_url('home'));
		}else{
		$cari = $this->input->get('cari');
		$data['show'] = $this->model->cari($cari);
		$this->load->view('header1');
		$this->load->view('index2',$data);}	
	}
	public function cari2 (){
		
		$cari = $this->input->get('cari');
		$data['show'] = $this->model->cari($cari);
		$this->load->view('headersimple');
		$this->load->view('main',$data);
	}
	public function view($id)
	{
		if($this->session->userdata('login') != TRUE){
		redirect(base_url('home'));
		}else{
		$where = array('id' => $id);
		$data['data'] = $this->model->get_id($where,'news');
		$this->load->view('header1');
		$this->load->view('lihat',$data);}
	}
	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('login');
		
		redirect(base_url('home'));
	}
	public function edit_m($id)
	{
		if($this->session->userdata('login') != TRUE){
		redirect(base_url('home'));
		}else{
		$where = array('id' => $id);
		$data['kategori'] = $this->model->daftar_kategori()->result();
		$data['data'] = $this->model->get_id($where,'news');
		$this->load->view('header1');
		$this->load->view('edit',$data);}
	}
	public function update()
	{
		$this->form_validation->set_rules('title','title','required');
			$this->form_validation->set_rules('content','content','required');
			if ($this->form_validation->run() === TRUE){
				$config['upload_path']          = './uploads/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 100;
				$config['max_width']            = 1024;
				$config['max_height']           = 768;
		 
				$this->load->library('upload', $config);
		 
				if ( ! $this->upload->do_upload('berkas')){
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('v_upload', $error);
				}else{
					$uploaded_data = array('upload_data' => $this->upload->data());
					$file_name = $uploaded_data['upload_data']['file_name'];
					$id = $this->input->post('id');
					$title = $this->input->post('title');
					$content = $this->input->post('content');
					$id_ca = $this->input->post('id_ca');
					$data = array(
						'title' => $title,
						'content' => $content,
						'id_ca' => $id_ca,
						'image' => $file_name
					);
					$where = array(
						'id' => $id
					);
					$this->model->update_m($where,$data,'news');
					?><script type="text/javascript">alert("data berhasil diperbarui ."); window.location="http://localhost/CI/home/admin"</script> <?php
				}
			}
			else{
				$id = $this->input->post('id');
			?><script type="text/javascript">alert("data belum diisi semua <?php echo form_error();?>."); window.location="http://localhost/CI/home/edit_m/<?php echo $id?>"</script> <?php
			}	
	}
	public function hapus($id)
	{
		$id = $this->input->post('hapus');
		$where = array('id' => $id);
		$this->model->hap($where,'news');
		redirect(base_url('home/admin'));
	}
	public function tambah()
	{
		if($this->session->userdata('login') != TRUE){
		redirect(base_url('home'));
		}else{
		$data['kategori'] = $this->model->daftar_kategori()->result();
		$this->load->view('header1');
		$this->load->view('tambah',$data);}
	}

	public function add(){
			$this->form_validation->set_rules('title', 'title', 'required');
			$this->form_validation->set_rules('content', 'content', 'required');
			$this->form_validation->set_rules('id_ca', 'id_ca', 'required');
			
			if ($this->form_validation->run() === TRUE){
				$config['upload_path']          = './uploads/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 100;
				$config['max_width']            = 1024;
				$config['max_height']           = 768;
		 
				$this->load->library('upload', $config);
		 
				if ( ! $this->upload->do_upload('berkas')){
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('v_upload', $error);
				}else{
					$uploaded_data = array('upload_data' => $this->upload->data());
					$file_name = $uploaded_data['upload_data']['file_name'];
					$title = $this->input->post('title');
					$content = $this->input->post('content');
					$id_ca = $this->input->post('id_ca');
					$data = array(
						'title' => $title,
						'content' => $content,
						'id_ca' => $id_ca,
						'image' => $file_name
					);
					
					$this->model->add_m($data);
					
					?><script type="text/javascript">alert("data berhasil ditambah ."); window.location="http://localhost/CI/home/admin"</script> <?php
				}
			}else{
			?><script type="text/javascript">alert("data belum diisi semua <?php echo form_error();?>."); window.location="http://localhost/CI/home/tambah"</script> <?php
			}	
}
		public function add_ca(){
			
			$this->form_validation->set_rules('category', 'category', 'required');
			
			if ($this->form_validation->run() === TRUE){
				
					$category = $this->input->post('category');
					
					$data = array(
						'category' => $category
					);
					
					$this->model->add_k($data);
					
					?><script type="text/javascript">alert("Kategori berhasil ditambah ."); window.location="http://localhost/CI/home/tambah"</script> <?php
				
			}else{
				
					?><script type="text/javascript">alert("Category belum diisi ."); window.location="http://localhost/CI/home/tambah"</script> <?php
			}	
	
}
function profil()
	{if($this->session->userdata('login') != TRUE){
		redirect(base_url('home'));
		}
		else{
		$id = $this->session->userdata('id_admin');
		$where = array('id_admin' => $id);
		$data['data'] = $this->model->profile($where,'admin');
		$this->load->view('header1');
		$this->load->view('profil',$data);}
	}
	public function edit_p()
	{
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('email','email','required|valid_email');
			if ($this->form_validation->run() === TRUE){
				
					$id_admin = $this->input->post('id_admin');
					$email = $this->input->post('email');
					$password = $this->input->post('password');
					$data = array(
						'email' => $email,
						'password' => md5($password)
					);
					$where = array(
						'id_admin' => $id_admin
					);
					$this->model->update_m($where,$data,'admin');
					?><script type="text/javascript">alert("data berhasil diperbarui ."); window.location="http://localhost/CI/home/profil/<?php echo $id_admin?>"</script> <?php
				
			}
			else{
				$id = $this->session->userdata('login');
			?><script type="text/javascript">alert("data belum diisi semua <?php echo form_error();?>."); window.location="http://localhost/CI/home/profil/<?php echo $id?>"</script> <?php
			}	
	}
	public function category()
	{
		if($this->session->userdata('login') != TRUE){
		redirect(base_url('home'));
		}
		else{
		$data['show'] = $this->model->get_ca();
		$this->load->view('header1');
		$this->load->view('category',$data);
		}
	}
	public function hapus_ca($id)
	{
		$id = $this->input->post('hapus');
		$where = array('id_ca' => $id);
		$this->model->hap($where,'category');
		redirect(base_url('home/category'));
	}
}

