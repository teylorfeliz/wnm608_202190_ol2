<?php

include_once "../lib/php/functions.php";

$output = [];

$data = json_decode(file_get_contents("php://input"));

//print_p($data);

switch($data->type) {
	case "products_all":
		$output['result'] = makeQuery(makeConn(),"SELECT * 
			FROM `product` 
			ORDER BY `catagory` DESC 
			LIMIT 12");
		break;

	case "product_search":
		$output['result'] = makeQuery(makeConn(),"SELECT * 
			FROM `product` 
			WHERE 
				`name` LIKE '%$data->search%' OR
				`description` LIKE '%$data->search%' OR
				`catagory` LIKE '%$data->search%'
			ORDER BY `catagory` DESC 
			LIMIT 12");
		break;

	case "product_filter":
		$output['result'] = makeQuery(makeConn(),"SELECT * 
			FROM `product` 
			WHERE `$data->column` LIKE '$data->value'
			ORDER BY `catagory` DESC 
			LIMIT 12");
		break;

	case "product_sort":
		$output['result'] = makeQuery(makeConn(),"SELECT * 
			FROM `product` 
			ORDER BY `$data->column` $data->dir
			LIMIT 12");
		break;

	default: $output['error'] = "No Valid Type";
}

echo json_encode($output,JSON_NUMERIC_CHECK/JSON_UNESCAPED_UNICODE);