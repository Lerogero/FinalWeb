<?php

  class buttons_model extends CI_Model {


          public function __construct()
      {
              parent::__construct();
      }


    public function alterinput() {

        $classPassword = $this->session->userdata('classPassword');
        $Username = $this->session->userdata('Username');
        
        if ($button == "inputOne") {
          $this->db->query("UPDATE input SET inputOne  = (inputOne + 1) WHERE (classPassword = '" . $classPassword . "', Username = '" . $Username . "') ";);
        } elseif ($button == "inputTwo") {
          $this->db->query("UPDATE input SET inputTwo  = (inputTwo + 1) WHERE (classPassword = '" . $classPassword . "', Username = '" . $Username . "') ";);
        } elseif ($button == "inputThree") {
          $this->db->query("UPDATE input SET inputThree  = (inputThree + 1) WHERE (classPassword = '" . $classPassword . "', Username = '" . $Username . "') ";);
        }

      }

      //---------------------------------------
      // END OF FILE
      //---------------------------------------
  }
