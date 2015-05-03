<?php


  class lecpas_model extends CI_Model {

    public function check_lecture($data){

      //NOTHING HERE..... YET!

    }

    public function lecsearch($data){

      $query = $this->db->get('input');
      return $query->result();

    }

  }
