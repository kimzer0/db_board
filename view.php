<?
	include_once("./db.php");

	$db_conn = mysql_conn();
	$no = $_REQUEST["no"];
	$query = "select * from {$tb_name} where no={$no}";

	$result = $db_conn->query($query);
	$num = $result->num_rows;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>board view</title>
    <style>
        * {
            font-family: '굴림'; 
        }
        
        .container {
            width: 80%;
            margin: 20px auto;
            position: relative;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .table th, .table td {
            max-width: 300px;
            height: auto;
            border: 1px solid #dddddd;
            padding: 8px;
            white-space: nowrap; 
            overflow: hidden; 
            text-overflow: ellipsis; 
        }

        .contents {
            height: auto;
        }

        .contents-container {
            max-height: 200px; 
            overflow-y: auto; 
        }

        .table-bordered th {
            background-color: #f2f2f2;
        }

        button {
            width: 100px;
            height: 40px;
            margin-top: 20px;
        }
    </style>
  </head>
  <body>
    <h1>View</h1>
    <hr>
    <div class="container">
	<?
	if($num != 0) {
		$row = $result->fetch_assoc();
	?>
    <div class="table-container">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th width="20%" class="text-center">Title</th>
                    <td><?=$row["title"]?></td>
                </tr>
                <tr>
                    <th width="20%" class="text-center">Writer</th>
                    <td><?=$row["writer"]?></td>
                </tr>
                <tr>
                    <th width="20%" class="text-center">Date</th>
                    <td><?=$row["regdate"]?></td>
                </tr>
                <tr class="contents">
                    <th width="20%">Contents</th>
                    <td>
                        <div class="contents-container"><?=$row["content"]?></div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    <button type="button" onclick="location.href='index.php'">Back</button>
    </div>
	<?
	} else {
	?>
		<script>alert("존재하지 않는 게시글 입니다.");history.back(-1);</script>
	<?
	}
	?>
  </body>
</html>
<?
	$db_conn->close();
?>
