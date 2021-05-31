<?php
class Loginmodel extends CI_Model
{
    public function isvalidate($email,$password)
    {
        $q=$this->db->where(['email'=>$email,'password'=>$password])
                    ->get('user');
        if($q->num_rows()){
            return $q->row()->id;
        }else{
            return False;
        }
    }

    public function savedata($data)
    {
        $this->db->insert('user',$data);
        return true;
    }
}
?>