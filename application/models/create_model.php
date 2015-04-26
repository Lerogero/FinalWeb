<?php


  class create_model extends CI_Model {

    public function insert_data($data){

      $this->db->insert('class', $data);

    }

    public function lecture_login($classPassword) {

      $query = $this->db->get_where('class',array('classPassword'=>$classPassword));

      if ($query->num_rows() > 0) {

      $query = $query->row_array();
      $password = $query['classPassword'];
      $time= $query['endTime'];

      if ($password  !== $classPassword) {

          return false;

        } else {

        $userdata = array (
        'classPassword'=>$classPassword,
        'endTime'=> $time
        );

        $this->session->set_userdata($userdata);
        return true;

      }

      }  else {

        return false;

    }

    }

  }
