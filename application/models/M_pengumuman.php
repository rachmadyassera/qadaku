<?php 
class M_pengumuman extends CI_Model{

    function get_pengumuman(){
		$hsl=$this->db->query("SELECT * FROM tbl_pengumuman Order By id_pengumuman DESC");
		return $hsl;
	}


	function insert_pengumuman($judul,$desk,$gbrpgm,$author){

		$data = array(
			'judul_pengumuman'     => $judul,
			'deskripsi_pengumuman' => $desk,
			'gambar_pengumuman'    => $gbrpgm,
			'author_pengumuman'    => $author
		);

		$this->db->insert('tbl_pengumuman', $data);
	}

	function get_pgm_by_id($id_pgm){
		$result = $this->db->query("SELECT * FROM tbl_pengumuman WHERE id_pengumuman='$id_pgm'");
		return $result;
	}
	
	function update_pgm($id_pgm,$judul,$desk,$gbrpgm,$author){

		$data = array(
			'judul_pengumuman'     => $judul,
			'deskripsi_pengumuman' => $desk,
			'gambar_pengumuman'    => $gbrpgm,
			'author_pengumuman'    => $author
		);
		$this->db->where('id_pengumuman', $id_pgm)->update('tbl_pengumuman', $data);

	}

	function update_pgm_noimg($id_pgm,$judul,$desk,$author){

		$data = array(
			'judul_pengumuman'     => $judul,
			'deskripsi_pengumuman' => $desk,
			'author_pengumuman'    => $author,
		);
		$this->db->where('id_pengumuman', $id_pgm)->update('tbl_pengumuman', $data);

	}

	function delete_pgm($id_pgm){
		$hsl=$this->db->query("DELETE FROM tbl_pengumuman WHERE id_pengumuman='$id_pgm'");
		return $hsl;
	}
	
    

}
