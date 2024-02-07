<?
	header("Content-Type: text/html; charset=UTF-8");
	include ( './db.php' );

	$db_conn = mysql_conn();
	
    $title = $_POST["title"];
    $writer = $_POST["writer"];
    $password = $_POST["password"];
    $content = $_POST["content"];

    if(empty($title) || empty($writer) || empty($password) || empty($content)) {
        echo "<script>alert('빈칸이 존재합니다.');history.back(-1);</script>";
        exit();
    }
    
    $content = str_replace("\r\n", "<br>", $content);
    $query = "insert into {$tb_name}(title, writer, password, content, file, regdate) values('{$title}', '{$writer}', '{$password}', '{$content}', null, now())";
    $db_conn->query($query);
	

	echo "<script>location.href='index.php';</script>";
	$db_conn->close();
?>