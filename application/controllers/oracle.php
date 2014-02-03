<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Oracle extends CI_Controller {

  public function index()
  {
    // Get app sample data from local json files
    $users = $this->_sample_data('users');
    $ales = $this->_sample_data('ales');

    // Array to store the social data we will pass to the view
    $data['sliders'] = array();

    // Sanity check in case there are no sample data files
    if ($users && $ales) :

      // Randomise the array to make it less predictable
      shuffle($users);

      $i = 0;

      foreach ($users as $user) :

        // Get the array key for the matching ale id
        $ale_array_key = $this->_search_for_id($user->ale, $ales);

        // Add view data to array
        $data['sliders'][$i]['id'] = $user->id;
        $data['sliders'][$i]['ale'] = $user->ale;
        $data['sliders'][$i]['ale_name'] = $ales[$ale_array_key]->name;

        $i++;

      endforeach;

    endif;

    // Next page variables
    $data['next_page'] = 'question/1';
    $data['next_page_text'] = 'Start Ale Oracle';

    // Check if this is a regular or ajax request
    if ($this->input->is_ajax_request()) :

      $this->load->view('welcome', $data);

    else :

      $this->load->view('partials/header');
      $this->load->view('welcome', $data);
      $this->load->view('partials/footer');

    endif;
  }

  public function question($url)
  {
    $questions = $this->_sample_data('questions');

      if ($questions && $this->_search_for_id(intval($url), $questions)) :

        // This would be better if done cleaner
        $data['question_number'] = $questions[$url]->number;
        $data['question'] = $questions[$url]->question;
        $data['next_page'] = $questions[$url]->next_page;
        $data['next_page_text'] = $questions[$url]->next_page_text;
        $data['class'] = $questions[$url]->id;

        if ($this->input->is_ajax_request()) :

          $this->load->view('question', $data);

        else :

          $this->load->view('partials/header');
          $this->load->view('question', $data);
          $this->load->view('partials/footer');

        endif;

      else :

        show_404('page');

      endif;

  }

  public function result()
  {
    $this->load->view('partials/header');
    $this->load->view('result');
    $this->load->view('partials/footer');
  }

  // Adapted to search array->object mapping from the following function
  // http://stackoverflow.com/questions/6661530/php-multi-dimensional-array-search
  private function _search_for_id($id, $array)
  {
    foreach ($array as $key => $val) :

      if ($val->id === $id) :

        return $key;

      endif;

    endforeach;

    return null;
  }

  // custom function to pull in data from the sample json files
  private function _sample_data($file_name)
  {
    if (! read_file(FCPATH . 'data/' . $file_name . '.json')) :

      return FALSE;

    else :

      return json_decode(read_file(FCPATH . 'data/' . $file_name . '.json'));

    endif;
  }
}

/* End of file app.php */
/* Location: ./application/controllers/app.php */