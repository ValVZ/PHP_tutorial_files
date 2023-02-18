<?php

require('app/app.php');

if(!isset($_GET['term'])) {
    redirect('index.php');
}

$data = Data::get_term($_GET['term']);

if ($data == false) {
    view('not_found');
    die();
}

$view_bag = [
    'title' => 'Detail for ' . $data->term 
];

view('detail', $data);

