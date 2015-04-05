<?php
class Lecpas extends CI_Controller {

  public function view($page = 'lecpas') {
    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
    {
      // Whoops, we don't have a page for that!
      show_404();
    }
    if (!$this->session->userdata('username')){
      redirect (base_URL(). 'index.php/login/view');
    } else {
     echo "Welcome, enter the lecture password to continue!";
     $data['title'] = ucfirst($page); // Capitalize the first letter
     $this->load->view('templates' . '/header.php');
     $this->load->view('pages/'.$page, $data);
     $this->load->view('templates' . '/footer.php');
   }
  }
}
