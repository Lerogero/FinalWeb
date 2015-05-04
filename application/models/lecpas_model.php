<?php

  class lecpas_model extends CI_Model {


          public function __construct()
      {
              parent::__construct();
      }


    public function lecsearch(){

      return $this->db->query('SELECT Username AS Username,
        sum(inputOne) AS inputOne, sum(inputTwo) AS inputTwo, sum(inputThree) AS inputThree
        FROM input GROUP BY Username;')->result_array();

    }

    public function insertinput() {

      $classPassword = $this->session->userdata('classPassword');
      $Username = $this->session->userdata('username');

      $sql = "INSERT INTO input (classPassword, Username)
        VALUES ('" . $classPassword . "',
          '" . $Username . "')";

      $this->db->query($sql);

      return  true;

    }

      //---------------------------------------
      // END OF FILE
      //---------------------------------------
  }
