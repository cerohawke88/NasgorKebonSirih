<?php 
if ( ! defined('BASEPATH')) 
  exit('No direct script access allowed');

class Map {
    
     function __construct()
  {
    parent::__construct();
    $this->load->library('Googlemaps');
    // Load our model
    $this->load->model('map_model');
  }
  public function index()
    {
    // Load the library
    // Initialize the map, passing through any parameters
    $config['center'] = '-6.21462, 106.84513';
    $config['zoom'] = '18';
    $config['places'] = TRUE;
    $config['placesRadius'] = 200;

    $this->googlemaps->initialize($config);
    // Get the co-ordinates from the database using our model
    $alamat = $this->map_model->get_coordinates();
           
    // Loop through the coordinates we obtained above and add them to the map
    foreach ($alamat as $coordinate) {
    $marker = array();
    $marker['id'] = $coordinate->id;
    $marker['position'] = $coordinate->lat.','.$coordinate->lng;
    $this->googlemaps->add_marker($marker);

    }
    $data = array();
    $data['map'] = $this->googlemaps->create_map();
    $this->load->view('map', $data);
}