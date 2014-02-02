<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {

  public function index()
  {
    // Get app sample data
    $users = $this->_sample_data('users');
    $ales = $this->_sample_data('ales');

    // Process sample data
    if ($users && $ales) {
      $data['users'] = array();
      $data['ales'] = array();

      foreach ($users as $user) {

        // var_dump($user);
      }
    }

    $this->load->view('partials/header');
    $this->load->view('welcome', $data);
    $this->load->view('partials/footer');
  }

  private function _sample_data($file_name)
  {
    if ( ! read_file(FCPATH . 'data/' . $file_name . '.json')) {
      return FALSE;
    } else {
      return json_decode(read_file(FCPATH . 'data/' . $file_name . '.json'));
    }
  }
}

/* End of file app.php */
/* Location: ./application/controllers/app.php */