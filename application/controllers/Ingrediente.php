<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Ingrediente extends MY_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            
            $this->load->library('pagination');
            $this->load->model('mod_ingrediente');
        }
        

        // Muetsra el listado de ingredientes
        public function index()
        {
            $pagina = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

            $params['registros'] = $this->mod_ingrediente->Listado($pagina);
            $params['totalRegistros'] = $this->mod_ingrediente->Total();
            if($params['registros']){                
                $config = $this->ConfigurarPaginacion(
                    base_url().'Ingrediente/Index',
                    $params['totalRegistros']
                );
                $this->pagination->initialize($config);
                $params["links"] = $this->pagination->create_links();
            }

            $this->load->view('Shared/header');
                $this->load->view('Ingrediente/Listado', $params);
            $this->load->view('Shared/footer');
        }
    
    }
    
    /* End of file Ingrediente.php */
    