<?php if (!defined('BASEPATH')) exit('No direct script access');

class Control extends CI_Controller {

  function __construct() {
    parent::__construct();
    // set template set to control
    $this->template->set_template('control');
  }

  function index() {
    if ($this->_checkAuth()) {
      redirect('control/dashboard');
    } else {
      redirect('control/login');
    }
  }

  /**
   * sample dashboard view
   */
  function dashboard() {
    if ($this->_checkAuth()) {
      $this->template->write_view('menu', 'control/menu');
      $this->template->write_view('header', 'control/header-login');
      $this->template->write_view('dashboard', 'control/dashboard');
      $this->template->render();
    } else {
      redirect('control/login');
    }
  }


  /**
   * sample user view
   */
  function users() {
    if ($this->_checkAuth()) {
      $data = array();

      /**
       * to using ci pageination uncomment below the line
       */
      // $this->load->library('pagination');
      // $config['base_url'] = site_url('control/users/page');
      // $config['total_rows'] = $this->db->count_all('fb_users');
      // $config['per_page'] = 20;
      // $config['uri_segment'] = 4;
      // $config['num_links'] = 10;

      /**
       * twitter bootstrap pageination markup
       */
      // $config['full_tag_open'] = '<div class="pagination" style="text-align: center;"><ul>';
      // $config['full_tag_close'] = '</ul></div>';
      // $config['first_link'] = 'First';
      // $config['first_tag_open'] = '<li>';
      // $config['first_tag_close'] = '</li>';
      // $config['last_link'] = 'Last';
      // $config['last_tag_open'] = '<li>';
      // $config['last_tag_close'] = '</li>';
      // $config['next_link'] = '&gt;';
      // $config['next_tag_open'] = '<li>';
      // $config['next_tag_close'] = '</li>';
      // $config['prev_link'] = '&lt;';
      // $config['prev_tag_open'] = '<li>';
      // $config['prev_tag_close'] = '</li>';
      // $config['cur_tag_open'] = '<li class="active"><a>';
      // $config['cur_tag_close'] = '</a></li>';
      // $config['num_tag_open'] = '<li>';
      // $config['num_tag_close'] = '</li>';

      // $this->pagination->initialize($config);
      // $pageination = $this->pagination->create_links();

      /**
       * query from database
       */
      // $user = $this->db->get('fb_users', $config['per_page'], $this->uri->segment(4));

      // if ($user->num_rows() > 0) {
      //   foreach ($user->result_array() as $row) {
      //     $row['fb_name'] = stripcslashes($row['fb_name']);
      //     $data['users'][] = $row;
      //   }
      // }

      /**
       * sample data
       */
      $data['users'] = array(
        '0' => array(
          'id' => '1',
          'fbid' => '1417570437',
          'fb_name' => 'Jakkapong Yuangtong',
          'fb_email' => 'visualizeq@gmail.com',
          'created' => '2012-06-15 12:57:11'
        ),
        '1' => array(
          'id' => '2',
          'fbid' => '100002260007336',
          'fb_name' => 'Jakkapong Yuangtong',
          'fb_email' => 'coke@iscoke.com',
          'created' => '2012-06-15 15:02:05'
        ),
        '2' => array(
          'id' => '3',
          'fbid' => '100000128799022',
          'fb_name' => 'Kanin Mint',
          'fb_email' => 'pninfcall@gmail.com',
          'created' => '2012-06-15 16:14:31'
        ),
        '3' => array(
          'id' => '4',
          'fbid' => '1129196333',
          'fb_name' => 'Pete Chuenprayoth',
          'fb_email' => 'futureinvasion@gmail.com',
          'created' => '2012-06-15 16:34:21'
        ),
        '4' => array(
          'id' => '5',
          'fbid' => '100002328770636',
          'fb_name' => 'ฟ้า อรรถพล',
          'fb_email' => 'roteeboy@gmail.com',
          'created' => '2012-06-15 16:36:46'
        ),
        '5' => array(
          'id' => '6',
          'fbid' => '1122117712',
          'fb_name' => 'UaNg Peerapattanapoom',
          'fb_email' => 'uang_natp@hotmail.com',
          'created' => '2012-06-15 17:03:31'
        ),
        '6' => array(
          'id' => '7',
          'fbid' => '530117401',
          'fb_name' => 'Nidicecream Apibunyanun',
          'fb_email' => 'nidicycream@hotmail.com',
          'created' => '2012-06-15 17:08:01'
        ),
        '7' => array(
          'id' => '8',
          'fbid' => '100003044956455',
          'fb_name' => 'Poy Meka',
          'fb_email' => 'poy.meka@live.com',
          'created' => '2012-06-15 17:19:26'
        ),
        '8' => array(
          'id' => '9',
          'fbid' => '767265159',
          'fb_name' => 'Naiphatsorn Zziinnee',
          'fb_email' => 'mixgirl_qoo@hotmail.com',
          'created' => '2012-06-15 17:24:26'
        ),
        '9' => array(
          'id' => '10',
          'fbid' => '1380533856',
          'fb_name' => 'IiTumii Ku',
          'fb_email' => 'tum_xex@hotmail.com',
          'created' => '2012-06-15 18:25:42'
        ),
        '10' => array(
          'id' => '11',
          'fbid' => '619629009',
          'fb_name' => 'Issares Chaivichien',
          'fb_email' => 'shimayjodai@hotmail.com',
          'created' => '2012-06-15 22:59:59'
        ),
        '11' => array(
          'id' => '12',
          'fbid' => '100000869120137',
          'fb_name' => 'Darin Lersrattanawisuth',
          'fb_email' => 'darintra@yahoo.com',
          'created' => '2012-06-16 11:04:05'
        ),
        '12' => array(
          'id' => '13',
          'fbid' => '1018658512',
          'fb_name' => 'Thanaporn Chankitmunkong',
          'fb_email' => 'aloha_kenchin@hotmail.com',
          'created' => '2012-06-18 11:22:57'
        ),
        '13' => array(
          'id' => '14',
          'fbid' => '100003699803189',
          'fb_name' => 'Scbcard Modulator',
          'fb_email' => 'scb.creditcards@gmail.com',
          'created' => '2012-06-18 19:29:19'
        ),
        '14' => array(
          'id' => '15',
          'fbid' => '717497036',
          'fb_name' => 'Chananath Jaikla',
          'fb_email' => 'zip_7822@hotmail.com',
          'created' => '2012-06-19 10:27:33'
        ),
        '15' => array(
          'id' => '16',
          'fbid' => '100003567875585',
          'fb_name' => 'Tanny Lee',
          'fb_email' => 'darintra@hotmail.com',
          'created' => '2012-06-19 11:17:32'
        ),
        '16' => array(
          'id' => '17',
          'fbid' => '100000427784433',
          'fb_name' => 'Pairoj Ajyeamsuan',
          'fb_email' => 'm-begin@hotmail.com',
          'created' => '2012-06-19 12:07:42'
        ),
        '17' => array(
          'id' => '18',
          'fbid' => '721601055',
          'fb_name' => 'Nuttapong Kanchanapha',
          'fb_email' => 'kanchanapha@hotmail.com',
          'created' => '2012-06-19 12:30:57'
        ),
        '18' => array(
          'id' => '19',
          'fbid' => '552464933',
          'fb_name' => 'Milks Turner',
          'fb_email' => 'noomilk_69@hotmail.com',
          'created' => '2012-06-19 16:18:37'
        ),
        '19' => array(
          'id' => '20',
          'fbid' => '1691869310',
          'fb_name' => 'Bim Panjai',
          'fb_email' => 'panjai.hansamut@gmail.com',
          'created' => '2012-06-20 14:41:04'
        )
      );

      $this->template->write_view('menu', 'control/menu');
      $this->template->write_view('header', 'control/header-login');
      // $this->template->write('content', $pageination);
      $this->template->write_view('content', 'control/users', $data);
      // $this->template->write('content', $pageination);
      $this->template->render();
    } else {
      redirect('control/login');
    }
  }

  /**
   * sample gallery view
   */
  function gallery() {
    $data = array();

    $this->template->write_view('menu', 'control/menu');
    $this->template->write_view('header', 'control/header-login');
    $this->template->write_view('content', 'control/gallery', $data);
    $this->template->render();
  }

  /**
   * login 
   */
  function login() {
    if ($this->input->is_ajax_request()) {
      $user = $this->input->post('username', TRUE);
      $pass = $this->input->post('password', TRUE);

      $return = array();

      if ($user == "admin" && $pass == "admin") {
        $user = array(
          'user' => 'admin',
          'access' => date('Y-m-d H:i:s')
        );
        $this->session->set_userdata(array('admin' => $user));
        $return['status'] = true;
        $return['session'] = $this->session->userdata('admin');
      } else {
        $return['status'] = false;
        $return['message'] = 'invalid username or password please try again';
      }

      echo json_encode($return);

    } else {
      if ($this->_checkAuth()) {
        redirect('control/dashboard');
      } else {
        $this->template->write_view('header', 'control/header');
        $this->template->write_view('content', 'control/login');
        $this->template->render();
      }
    }
  }

  /**
   * logout
   */
  function logout() {
    $this->session->unset_userdata('admin');
    redirect('control');
  }

  /**
   * private function to use in this controller
   */
  function _checkAuth() {
    $admin = $this->session->userdata('admin');
    if (isset($admin['user']) && $admin['user'] == 'admin') {
      return true;
    } else {
      return false;
    }
  }
}