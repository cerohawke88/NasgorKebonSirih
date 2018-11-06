<?php 
class Map_model {    
    
    function __construct()    {        

        parent::__construct();    
    }
    function get_coordinates()    {
        
        $return = array();
        $this->db->select("id,lat,lng");        
        $this->db->from("alamat");        
        $query = $this->db->get();

        if ($query->num_rows()>0) {            
            foreach ($query->result() as $row) {                
                array_push($return, $row);            
            }        

        }
        return $return;
    
    }
?>