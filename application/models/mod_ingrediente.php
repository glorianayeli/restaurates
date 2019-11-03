<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Mod_Ingrediente extends CI_Model {
    
        // Constructor
        public function __construct()
        {
            parent::__construct();
            $this->db->initialize();
        }

        // Obtiene el listado de ingredientes
        public function Listado($pagina)
        {
            $this->db->select('*');
            $this->db->limit(PAGINACION_REGISTROS_POR_PAGINA, $pagina);
            $query = $this->db->get("ingredientes");
    
            if ($query->num_rows() > 0) 
            {
                // var_dump($query->result_array());
                return $query->result_array();
            }    

            return false;
        }

        // Obtiene el total de registros de ingredientes
        public function Total()
        {
            return $this->db->count_all("ingredientes");
        }
    
    }
    
    /* End of file Mod_Ingrediente.php */
    