<?php


  class user_model extends CI_Model {

    public function get_users($username, $password){

      $query = $this->db->get_where('users',array('username'=>$username));

        if ($query->num_rows() > 0) {

        $query = $query->row_array();
        $name = $query['username'];
        $pass= $query['password'];
        $lecture = $query['lecture'];

        if ($name  === $username) {
          if($password !== $pass ) {
            return false;

          }  else {

          $userdata = array (
          'username'=>$username,
          'lecture'=> $lecture
          );

          $this->session->set_userdata($userdata);
          return true;
        }

        }

        }  else {

          return false;

      }

    }

  }
