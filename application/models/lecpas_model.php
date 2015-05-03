<?php

  class lecpas_model extends CI_Model {


          public function __construct()
      {
              parent::__construct();
      }

    public function check_lecture($data){

      //NOTHING HERE..... YET!

    }

    public function lecsearch(){

      return $this->db->query('SELECT Username AS Username, sum(inputOne) AS inputOne, sum(inputTwo) AS inputTwo, sum(inputThree) AS inputThree
        FROM input GROUP BY Username;')->result_array();

    }

  }


  public function insertinput() {

    $updatecheck = 0;

    if($updatecheck === 0 ){

      $data = array(
        'classPassword' => 'classPassword' ,
        'Username' => 'Username' ,
        'inputOne' => 'inputOne',
        'inputTwo' => 'inputOne',
        'inputThree' => 'inputOne',
      );

      $this->db->insert('mytable', $data);

      $updatecheck++;
    } else {



    }

  }
