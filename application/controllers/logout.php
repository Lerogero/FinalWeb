<?php
class Logout extends CI_Controller {

  public function view() {
    $this->session->sess_destroy();
    redirect (base_URL(). 'index.php/login/view');
  }
}
