<?php

  class buttons_model extends CI_Model {


          public function __construct()
      {
              parent::__construct();
      }


    public function alterinput() {

        $classPassword = $this->session->userdata('classPassword');
        $Username = $this->session->userdata('Username');
        
        $inputOne = $this->input->post('inputOne');
        $inputTwo = $this->input->post('inputTwo');
        $inputThree = $this->input->post('inputThree');


        $sql = "UPDATE input SET WHERE (classPassword = '" . $classPassword . "', Username = '" . $Username . "') ";

          $this->db->query($sql);

      }

      //---------------------------------------
      // END OF FILE
      //---------------------------------------
  }
