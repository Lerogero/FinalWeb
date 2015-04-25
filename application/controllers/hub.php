<?php
class Hub extends CI_Controller {

  public function view($page = 'hub') {
    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
    {
      show_404();
    }

    $lecture = $this->session->userdata('lecture');

    if (!$this->session->userdata('username')){

      redirect (base_URL(). 'index.php/login/view');

    }  if ($lecture == 0){

      redirect (base_URL(). 'index.php/lecpas/view');

    } else {

     echo "Welcome, " . $this->session->userdata('username') . " Create your lecture!";
     $data['title'] = ucfirst($page);
     $this->load->view('templates' . '/header.php', $data);
     $this->load->view('pages/'.$page, $data);
     $this->load->view('templates' . '/footer.php');

   }
  }

  public function create($page = 'create') {
    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
    {
      show_404();
    }

    $lecture = $this->session->userdata('lecture');

    if (!$this->session->userdata('username')){

      redirect (base_URL(). 'index.php/login/view');

    }  if ($lecture == 0){

      redirect (base_URL(). 'index.php/lecpas/view');

    } else {

          function randomString($length = 5) {
           $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
           $charactersLength = strlen($characters);
           $randomString = '';
           for ($i = 0; $i < $length; $i++) {
               $randomString .= $characters[rand(0, $charactersLength - 1)];
           }
           return $randomString;
       }

      $data['password'] = randomString();
      $data['title'] = ucfirst($page);
      $this->load->view('templates'.'/header.php', $data);
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates'.'/footer.php');

   }
   return $randomString;
  }

  public function lecture($page = 'lecture', $randomString) {
    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
    {
      show_404();
    }

    $lecture = $this->session->userdata('lecture');

    if (!$this->session->userdata('username')){

      redirect (base_URL(). 'index.php/login/view');

    }  if ($lecture == 0){

      redirect (base_URL(). 'index.php/lecpas/view');

    } else {

      $data['title'] = ucfirst($page);
      $this->load->view('templates'.'/header.php', $data);
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates'.'/footer.php');

   }

  }
}
