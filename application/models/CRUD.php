<?php
class CRUD extends CI_Model
{
    public function selectdata($userid)
    {
        
        $q=$this->db->where(['userid'=>$userid])
                    ->get('orders');  
        return $q->result_array();
    }

    public function savedata($data)
    {
        $this->db->insert('orders',$data);
        return true;
    }

    public function deletedata($id)
    {
        $this->db->where("shareid", $id)
                 ->delete("orders");
        return true;
    }

    public function displaydata($userid)
    {
        
        $q=$this->db->where(['shareid'=>$userid])
                    ->get('orders');  
        return $q->result_array();
    }

    public function updatedata($data)
    {
        $this->db->where('shareid', $data['shareid'])
             ->update('orders', $data);
        return true;
    }

}
?>