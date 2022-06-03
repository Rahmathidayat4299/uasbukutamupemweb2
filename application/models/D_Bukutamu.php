<?Php
Defined('BASEPATH') OR Exit('No Direct Script Access Allowed');

Class D_Bukutamu Extends CI_Model {

    public function GetDataBukutamu() {
        $this->db->select('*');
        $this->db->from("tb_bukutamu");
        $query = $this->db->get();
        return $query->result();
    }

  
    public function InsertDatabkt($data) {
        $this->db->insert('tb_bukutamu', $data);
    }

    public function EditDatabkt($data,$id){
        $this->db->where('nim',$id);
        $this->db->update('tb_bukutamu',$data);
    }

    public function GetDatabkt($id){
        $this->db->where('nim',$id);
        $query = $this->db->get('tb_bukutamu');
        return $query->row();
    }

    public function DeleteDatabkt($id){
        $this->db->where('nim',$id);
        $this->db->delete('tb_bukutamu');
    }
    
}