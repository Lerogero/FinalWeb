<?php

  class Buttons_model extends CI_Model {



          public function __construct()
      {
              parent::__construct();
      }


    public function alterinput() {

        $classPassword = $this->session->userdata('classPassword');
        $Username = $this->session->userdata('username');
        $button = $this->input->post('button');


        if ($button == "inputOne") {
          $this->db->query("UPDATE input SET inputOne  = (inputOne + 1) WHERE (classPassword = '" . $classPassword . "' AND  Username = '" . $Username . "') ");
        } elseif ($button == "inputTwo") {
          $this->db->query("UPDATE input SET inputTwo  = (inputTwo + 1) WHERE (classPassword = '" . $classPassword . "' AND Username = '" . $Username . "') ");
        } elseif ($button == "inputThree") {
          $this->db->query("UPDATE input SET inputThree  = (inputThree + 1) WHERE (classPassword = '" . $classPassword . "' AND  Username = '" . $Username . "') ");
        }

      }



      public function getinput() {

          $classPassword = $this->session->userdata('classPassword');

          $this->db->select('sum(inputOne) AS inputOne, sum(inputTwo) AS inputTwo, sum(inputThree) AS inputThree')->from('input')->where('classPassword', $classPassword);
          $query = $this->db->get();
          return $query->result_array();

      }

      //---------------------------------------
      // END OF FILE
      //---------------------------------------
  }
