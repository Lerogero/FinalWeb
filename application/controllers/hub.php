<?php
class Hub extends CI_Controller {

  public function view($page = 'hub') {
    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
    {
      // Whoops, we don't have a page for that!
      show_404();
    }

    $lecture = $this->session->userdata('lecture');

    if (!$this->session->userdata('username')){
      redirect (base_URL(). 'index.php/login/view');
    } else if ($lecture == 0){
      redirect (base_URL(). 'index.php/lecpas/view');
    } else {
     echo "Welcome, " . $this->session->userdata('username') . " Create your lecture!";
     $data['title'] = ucfirst($page); // Capitalize the first letter
     $this->load->view('templates' . '/header.php', $data);
     $this->load->view('pages/'.$page, $data);
     $this->load->view('templates' . '/footer.php');
   }
  }
}
