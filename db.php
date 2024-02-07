<?
	header("Content-Type: text/html; charset=UTF-8;");

	$tb_name = "my_board";

	function mysql_conn() {
		$host = "127.0.0.1";
		$id = "root";
		$pw = "450815";
		$db = "exam";
	
		$db_conn = new mysqli($host, $id, $pw, $db);

		return $db_conn;
	}
?>