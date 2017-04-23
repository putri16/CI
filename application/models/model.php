<?php
class Model extends  CI_Model{
	
	public function get_show(){
		$query = $this->db->select('*')
						->from('news')
						->join('category', 'news.id_ca = category.id_ca')
						->get();
		return $query->result();
	}
	
	public function get_id($where,$table){
		
		$query = $this->db->select('*')
						->from($table)
						->join('category', 'news.id_ca = category.id_ca')
						->where($where)
						->get();
		return $query->row();
	}
	public function check_user($table,$where){
		return $this->db->get_where($table,$where);
	}
	public function cari($cari){

	$cari = $this->db->query("select * from news inner join category on news.id_ca = category.id_ca where title like '%$cari%'");
	return $cari->result();
	}
	function update_m($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus_m($where,$table){
		$this->db->where($where);
		$this->db->delete($table);

	}
	public function add_m($data)
	{
		return $this->db->insert('news',$data);
	}
	public function daftar_kategori(){
		$q="select * FROM category";
		return $this->db->query($q);
	}
	function simpan($image, $id) {
	$data = array(
'image' => $image);
$where = array(
'id' => $id);
	$this->db->where($where);
		$this->db->update('news',$data);
}

}