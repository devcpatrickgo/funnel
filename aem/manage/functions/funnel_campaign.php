<?php
if(!session_id()) session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/aem/manage/config.inc.php');
$GLOBALS["aem_con"] = mysqli_connect(AWEBP_AUTHDB_SERVER, AWEBP_AUTHDB_USER, AWEBP_AUTHDB_PASS, AWEBP_AUTHDB_DB);

$action = $_POST['action'];
if($action === 'list_insert_post') list_insert_post();

function list_insert_post() {

	$user_id = $_SESSION['awebdesk_aweb_admin']['id'];
	$query = sprintf("INSERT INTO awebdesk_funnel_campaign (title, type, description, user_id, list_id, page_link, date_created) VALUES ( '%s', '%s', '%s', '%d', '%d', '%s', '%s')", 
		$_POST['landing-page-name'], $_POST['landing-page-type'], $_POST['landing-page-description'], $user_id, $_POST['landing-page-list-id'], $_POST['landing-page-url'], date('Y-m-d H:i:s'));

	mysqli_query($GLOBALS["aem_con"], $query);

	echo "Campaign successfully created.";
}
?>