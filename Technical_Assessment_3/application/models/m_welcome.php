<?php
class m_welcome extends CI_Model{
	
	function __construct(){
		$this->load->database();
	}
	
	function m_lihat($data){
		$username = $data['username'];
		$sql="select kode_institusi from member where user='$username'";
		$lihat = $this->db->query($sql);
		foreach ($lihat->result() as $row)
		{
			$kode_institusi=$row->kode_institusi;
		}
		
		if ($kode_institusi=='B01' || $kode_institusi=='C01') {
			$sql2="select member.nama as nama, institusi.nama as institusi from member, institusi where
					member.kode_institusi=institusi.kode_institusi and member.kode_institusi='A01' order by
					institusi.kode_institusi";
			$member = $this->db->query($sql2);
		}
		else{
			$sql2="select member.nama as nama, institusi.nama as institusi from member, institusi where
					member.kode_institusi=institusi.kode_institusi and member.kode_institusi!='$kode_institusi' order by
					institusi.kode_institusi";
			$member = $this->db->query($sql2);
		}
		
		return $member->result();
	}
}
?>