<?php
class Lecpas extends CI_Controller {


  //---------------------------------------
  // MAIN LECPAS VIEW FUNCTION
  //---------------------------------------
  public function view($page = 'lecpas') {
    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
    {
      // Whoops, we don't have a page for that!
      show_404();
    }
    if (!$this->session->userdata('username')){
      redirect (base_URL(). 'index.php/login/view');
    } else {

      $this->form_validation->set_rules('password','Password','trim|required|xss_clean');

      if ($this->form_validation->run() === false) {

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates' . '/header.php', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates' . '/footer.php');

      } else {

        $classPassword = $this->input->post('password');
        $this->load->model('create_model');
        $result = $this->create_model->lecture_login($classPassword);

        if ($result === true) {
          $Time = new DateTime();
          $Time = $Time->format('Y-m-d H:i:s');
          if ($Time > $this->session->userdata('endTime')) {

            $data['error'] = "Class has ended!";
            $data['title'] = ucfirst($page);
            $this->load->view('templates' . '/header.php', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates' . '/footer.php');

          } else {
            redirect (base_url() . 'index.php/lecpas/access');
          }
        } else {

        $data['error'] = "Bad Password!";
        $data['title'] = ucfirst($page);
        $this->load->view('templates' . '/header.php', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates' . '/footer.php');

      }
    }
  }
}



  //---------------------------------------
  // ACCESS FUNCTION
  //---------------------------------------
  public function access($page = 'access') {
    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
    {
      // Whoops, we don't have a page for that!
      show_404();
    }


    if (!$this->session->userdata('username')){
      redirect (base_URL(). 'index.php/login/view');
    } else {
      if (!$this->session->userdata('classPassword')) {

        redirect (base_URL(). 'index.php/lecpas/view');
      } else {
        $Time = new DateTime();
        $Time = $Time->format('Y-m-d H:i:s');
        if ($Time > $this->session->userdata('endTime')) {
          redirect (base_URL(). 'index.php/lecpas/view');
        } else {

       $data['title'] = ucfirst($page); // Capitalize the first letter

       $this->load->model('lecpas_model');
       $this->lecpas_model->insertinput();

       $this->load->view('templates' . '/header.php', $data);
       $this->load->view('pages/'.$page, $data);
       $this->load->view('templates' . '/footer.php');
     }
    }
  }
  }


 public function buttons() {

   if (!$this->session->userdata('username')){

     redirect (base_URL(). 'index.php/login/view');

   } else {

     if (!$this->session->userdata('classPassword')) {

       redirect (base_URL(). 'index.php/lecpas/view');

     } else {

       $Time = new DateTime();
       $Time = $Time->format('Y-m-d H:i:s');

       if ($Time > $this->session->userdata('endTime')) {

         redirect (base_URL(). 'index.php/lecpas/view');

       } else {

         $button = $this->input->post('button');


         $this->load->model('buttons_model');
         $this->buttons_model->alterinput($button);

    }

   }

  }

 }

  //---------------------------------------
  // END OF FILE
  //---------------------------------------
}
