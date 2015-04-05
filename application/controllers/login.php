<?php
class Login extends CI_Controller {

  public function view($page = 'login') {
    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
    {
      // Whoops, we don't have a page for that!
      show_404();
    }
    $data['title'] = ucfirst($page); // Capitalize the first letter

    $this->form_validation->set_rules('username','Username','trim|required|xss_clean');
    $this->form_validation->set_rules('password','Password','trim|required|xss_clean');

    if ($this->form_validation->run() === false) {

      $this->load->view('templates' . '/header.php', $data);
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates' . '/footer.php');

    } else {

      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $this->load->model('user_model');
      $result = $this->user_model->get_users($username, $password);

      if( $result === true ){

        $lecture = $this->session->userdata('lecture');

        if ($lecture == 0 ) {

        redirect (base_url() . 'index.php/lecpas/view');

      } else if ($lecture == 1) {

        redirect (base_url() . 'index.php/hub/view');

      }
      } else {

        $data['error'] = "Incorrect Username or Password!";
        $this->load->view('templates' . '/header.php', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates' . '/footer.php');
        
      }
    }
  }
}
