<?php

class loginmodel extends CI_model{
	public function isvalidate($uname,$password){
		$q=$this->db->where(['username'=>$uname,'password'=>$password])
					 ->from('user')
					 ->get();
					 
		if($q->num_rows()){
			return $q->row()->id;
		}else{
			return false;
		}

	}
}

?>