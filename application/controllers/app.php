<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {

  public function index()
  {
    // Get app sample data
    $users = $this->_sampleData('users');
    $ales = $this->_sampleData('ales');

    // We store the sliders inside an array to pass to the view
    $data['sliders'] = array();

    if ($users && $ales) :
      $i = 0;

      foreach ($users as $user) :

        // Get the array key for the matching ale id
        $ale_array_key = $this->_searchForId($user->ale, $ales);

        // Add view data to array
        $data['sliders'][$i]['id'] = $user->id;
        $data['sliders'][$i]['ale'] = $user->ale;
        $data['sliders'][$i]['ale_name'] = $ales[$ale_array_key]->name;

        $i++;

      endforeach;
    endif;

    $this->load->view('partials/header');
    $this->load->view('welcome', $data);
    $this->load->view('partials/footer');
  }

  // Adapted to search array->object mapping from the following function
  // http://stackoverflow.com/questions/6661530/php-multi-dimensional-array-search
  private function _searchForId($id, $array)
  {
    foreach ($array as $key => $val) {
      if ($val->id === $id) {
        return $key;
      }
    }
    return null;
  }

  // custom function to pull in data from the sample json files
  private function _sampleData($file_name)
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