<?php
$pincode = $_POST['pincode'];

$data = file_get_contents('https://api.postalpincode.in/pincode/' . $pincode);

$data = json_decode($data);

$city = $data[0]->PostOffice[0]->District;
$state = $data[0]->PostOffice[0]->State;

if (isset($data[0]->PostOffice[0])) {

	$arr['city'] = $city;
	$arr['state'] = $state;
	echo json_encode($arr);
	// print_r($data->PostOffice['0']);
} else {
	echo 'no';
}
