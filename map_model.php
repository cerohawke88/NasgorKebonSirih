<?php 
if ( ! defined('BASEPATH')) 
  exit('No direct script access allowed');

class Map_model {    
    
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
        function get_center()    {
        
        $return = array();
        $this->db->select("id,latitude,longitude");        
        $this->db->from("tabelpelanggan");        
        $query = $this->db->get();

        if ($query->num_rows()>0) {            
            foreach ($query->result() as $row) {                
                array_push($return, $row);            
            }        

        }
        return $return;
    
    }
}
?>
