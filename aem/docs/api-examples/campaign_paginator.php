<?php
/**
Title: View a list of existing campaigns using pagination, much like it appears in the standard user interface.

Description: View a list of campaigns based on sorting, offset, limits, filters, and public/private. This allows you to view campaigns much like you would through the admin interface - View Campaigns screen.

Supported formats: xml, json, serialize

Supported request methods: GET

Requires authentication: true

Parameters (* denotes requirement):
{
	[*api_user] => An "Admin" Group username
	[*api_pass] => The corresponding password for the "Admin" Group username
	[*api_action] => campaign_paginator
	[*api_output] => xml, json, or serialize
	[*sort] => Leave empty for default sorting. Example: 01, 01D, 02, 02D, etc.
	[*offset] => The amount of records you want to skip over. This works in tandem with "limit." Example: 20, 50
	[*limit] => The amount of campaigns you wish to retrieve. Example: 10, 20, 50, 100
	[*filter] => The section filter that should be applied. This corresponds to a unique ID in the sectionfilter database table. Example: 11
	[*public] => 0: no, 1: yes
}

Example response:
{
	[paginator] => ID of the paginator.
	[offset] => Result pages to skip over. Example: 0
	[limit] => Results returned per page. Example: 20
	[total] => Total returned. Example: 1
	[cnt] => Total count returned. Example: 1
	[rows] => Array of individual campaign rows.
	[result_code] => Whether or not the response was successful. Examples: 1 = yes, 0 = no
	[result_message] => A custom message that appears explaining what happened. Example: Something is returned
	[result_output] => The result output used. Example: serialize
}
**/


// By default, this sample code is designed to get the result from your
// server (where AwebDesk Email Marketing is installed) and to print out the result
$url    = 'http://yourdomain.com/path/to/AEM';


$params = array(

	// the API Username and Password are the same as your login access to the Admin panel
	// replace these with your info
	'api_user'     => 'YOUR_USERNAME',
	'api_pass'     => 'YOUR_PASSWORD',

	// this is the action that fetches a list info based on the ID you provide
	'api_action'   => 'campaign_paginator',

	// define the type of output you wish to get back
	// possible values:
	// - 'xml'  :      you have to write your own XML parser
	// - 'json' :      data is returned in JSON format and can be decoded with
	//                 json_decode() function (included in PHP since 5.2.0)
	// - 'serialize' : data is returned in a serialized format and can be decoded with
	//                 a native unserialize() function
	'api_output'   => 'serialize',

	'somethingthatwillneverbeused' => '', // this variable is pushed right back in the response
	'sort' => '', // leave empty to use a default one; other values are 01, 01D, 02, 02D, etc (number is a column index, and D means 'order descending')
	'offset' => 0, // start with this item (first page would be loaded using offset=0,limit=20, second page using offset=20,limit=20)
	'limit' => 20, // items per page
	'filter' => 0, // which sectionfilter to use (0=no filter)
	'public' => 0, // is public (1=yes, 0=no)

);

// This section takes the input fields and converts them to the proper format
$query = "";
foreach( $params as $key => $value ) $query .= $key . '=' . urlencode($value) . '&';
$query = rtrim($query, '& ');

// clean up the url
$url = rtrim($url, '/ ');

// This sample code uses the CURL library for php to establish a connection,
// submit your request, and show (print out) the response.
if ( !function_exists('curl_init') ) die('CURL not supported. (introduced in PHP 4.0.2)');

// If JSON is used, check if json_decode is present (PHP 5.2.0+)
if ( $params['api_output'] == 'json' && !function_exists('json_decode') ) {
	die('JSON not supported. (introduced in PHP 5.2.0)');
}

// define a final API request - GET
$api = $url . '/manage/awebdeskapi.php?' . $query;

$request = curl_init($api); // initiate curl object
curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
//curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment if you get no gateway response and are using HTTPS

$response = (string)curl_exec($request); // execute curl fetch and store results in $response

// additional options may be required depending upon your server configuration
// you can find documentation on curl options at http://www.php.net/curl_setopt
curl_close($request); // close curl object

if ( !$response ) {
	die('Nothing was returned. Do you have a connection to Email Marketing server?');
}

// This line takes the response and breaks it into an array using:
// JSON decoder
//$result = json_decode($response);
// unserializer
$result = unserialize($response);
// XML parser...
// ...

// Result info that is always returned
echo 'Result: ' . ( $result['result_code'] ? 'SUCCESS' : 'FAILED' ) . '<br />';
echo 'Message: ' . $result['result_message'] . '<br />';

// The entire result printed out
echo 'The entire result printed out:<br />';
echo '<pre>';
print_r($result);
echo '</pre>';

// Raw response printed out
echo 'Raw response printed out:<br />';
echo '<pre>';
print_r($response);
echo '</pre>';

// API URL that returned the result
echo 'API URL that returned the result:<br />';
echo $api;

?>