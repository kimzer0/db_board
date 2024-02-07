<?
	include_once("./db.php");

	$db_conn = mysql_conn();
	$query = "select * from {$tb_name} ORDER BY no ASC";

	$result = $db_conn->query($query);
	$num = $result->num_rows;

    $counter = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>board</title>
    <style>
        * {
            font-family: '굴림'; 
        }

        .container {
            width: 80%;
            margin: 20px auto;
            position: relative;
        }

        table {
            width: 100%;
            text-align: center;
        }

        button {
            position: absolute;
            top: 100%;
            right: 0;
            margin-top: 20px;
            width: 60px;
            height: 30px;
        }
    </style>
</head>
<body>
    <h1>Board</h1>
    <hr>
    <div class="container">
        <?
        if($num != 0) {
        ?>
    <table class="table">
        <thead>
        <tr>
            <th>NO</th>
            <th>TITLE</th>
            <th>WRITER</th>
            <th>DATE</th>
        </tr>
        </thead>
        <tbody>
            <?
                while($row = $result->fetch_assoc()) {
            ?>
        <tr>
            <td><?=$counter++?></td>
            <td><a href="view.php?no=<?=$row["no"]?>"><?=$row["title"]?></a></td>
            <td><?=$row["writer"]?></td>
            <td><?=$row["regdate"]?></td>
        </tr>
        <? } ?>
        </tbody>
    </table>
    <button onclick="location.href='write.php'">글쓰기</button>
    </div>
    <?
        } else {
    ?>
    <p style="font-size: 20px; text-align: center;">게시글이 없습니다.</p>
    <button onclick="location.href='write.php'">글쓰기</button>
    <?
        }
    ?>
</body>
</html>