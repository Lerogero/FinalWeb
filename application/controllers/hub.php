<?php
class Hub extends CI_Controller {

  //---------------------------------------
  // MAIN HUB VIEW FUNCTION
  //---------------------------------------
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

     $data['user'] = $this->session->userdata('username');
     $data['title'] = ucfirst($page);

     $this->load->model('lecpas_model');
     $data['query'] = $this->lecpas_model->lecsearch();

     $this->load->view('templates' . '/header.php', $data);
     $this->load->view('pages/'.$page, $data);
     $this->load->view('templates' . '/footer.php');

   }
  }


  //---------------------------------------
  // CREATE VIEW FUNCTION
  //---------------------------------------
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

      $data['title'] = ucfirst($page);
      $this->load->view('templates'.'/header.php', $data);
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates'.'/footer.php');

   }
  }



  //---------------------------------------
  // CREATE LECTURE FUNCTION
  //---------------------------------------
  public function start(){

    function randomString($length = 5) {
     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
     $charactersLength = strlen($characters);
     $randomString = '';
       for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
     return $randomString;
    }

    $classPassword = randomString();

   $this->session->set_userdata('classPassword', $classPassword);

    $this->load->model('create_model');
    $classPassword = $this->session->userdata('classPassword');

    $addtime = $this->input->post('time');
    $time = new DateTime($addtime);
    $time = $time->format('Y-m-d H:i:s');

    $data = array (
      'classPassword' => $classPassword,
      'endTime' =>$time
    );

    $this->create_model->insert_data($data);
    redirect (base_URL(). 'index.php/hub/lecture');

  }


  //---------------------------------------
  // LECTURE VIEW FUNCTION
  //---------------------------------------
  public function lecture($page = 'lecture') {
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

      $data['classPassword'] = $this->session->userdata('classPassword');
      $data['title'] = ucfirst($page);


      $this->load->view('templates'.'/header.php', $data);
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates'.'/footer.php');

   }

  }

  public function inputs() {

    $this->load->model('buttons_model');
    $query =  $this->buttons_model->getinput();
    foreach($query as $row) {
    $query = array(
      'inputOne' => $row['inputOne'],
      'inputTwo' => $row['inputTwo'],
      'inputThree' => $row['inputThree'],
    );
  }
    $data['query'] = var_dump(json_encode($query));
    
  }

  //---------------------------------------
  // END OF FILE
  //---------------------------------------
}
