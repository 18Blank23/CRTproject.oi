<?php

require "../config/bootstrap.php";

if($input->is_ajax()){
	$output = array(
		'status' => FALSE,
	);

	$name = $db->escape($input->post('name'));
	$id_number = $db->escape($input->post('id_number'));
	$phone = $db->escape($input->post('phone'));
	$message = $db->escape($input->post('message'));

	if(!empty($name) && !empty($id_number) && !empty($phone) && !empty($message)){
		$expired = date_create();
		date_modify($expired, "+2 hours");
		$expired = date_format($expired, "Y-m-d H:i:s");

		$token = get_token(10);

		$sql = "INSERT INTO `chat`(`id_chat`, `start_time`, `expired`, `token`, `status`, `name`, `id_number`, `year`) VALUES (null,CURRENT_TIMESTAMP,'$expired','$token','enabled','$name','$id_number','$phone')";
		$result = $db->insert($sql);
		if($result){
			$id = $result->insert_id;
			$updateToken = "UPDATE `chat` SET `token` = MD5(CONCAT(`id_chat`, '@', `token`)) WHERE `id_chat` = '$id'";
			$db->query($updateToken);
			$db->insert("INSERT INTO `detail_chat`(`id_detail`, `id_chat`, `sumber`, `isi`, `waktu`, `status`) VALUES (null,'$id','client','$message',CURRENT_TIMESTAMP,'unread')");

			$data = $db->select("SELECT * FROM `chat` WHERE `id_chat` = '$id'")->row();
			$output['token'] = $data['token'];
			$output['status'] = TRUE;
		}
		else{
			$output['error'] = 'Failed to enter data into database';
		}
	}
	else{
		$output['error'] = 'Invalid request';
	}
	
	echo json_encode($output);
}
else{
	header('HTTP/1.0 406 Not Acceptable', 406, true);
	exit();
}
