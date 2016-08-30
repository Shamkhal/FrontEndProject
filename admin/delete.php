<?php
	session_start();
	include 'db.php';
	if (isset($_SESSION['admin']) && $_SESSION['admin'] = "admin") {
		if(isset($_GET) && isset($_GET['section']) && isset($_GET['id'])) {
			delete($db_conn, $_GET['section'], $_GET['id']);
		} else {
			throw_error("Error: Mission GET argument!");
		}
	} else {
		echo "Access Denied!";
	}

	function delete($db_conn, $section, $id) {
		$id = $_GET['id'];
		$sql_delete = "DELETE FROM $section WHERE id=$id";
		if(mysqli_query($db_conn, $sql_delete)) {
			throw_error("Success!");
		} else {
			throw_error("Error!");
		}
	}
	function throw_error($err) {
		echo $err;
		header("Refresh:2; url=admin.php");
	}
?>