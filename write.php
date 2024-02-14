<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>board write</title>
    <style>
        * {
            font-family: '굴림'; 
        }
        
        .container {
            width: 80%;
            margin: 20px auto;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .btns {
            position: absolute;
            top: 100%;
            right: 0;
            margin-top: 20px;
            width: 260px;
            height: 210px;
        }
        button {
            width: 100px;
            height: 40px;
            
        }
    </style>
</head>
<body>
    <h1>Write</h1>
    <hr>
    <div class="container">
		<form action="action.php" method="POST" enctype="multipart/form-data">
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="Title Input">

            <label for="content">Contents</label>
            <textarea name="content" rows="5" placeholder="Contents Input"></textarea>

            <label for="writer">Writer</label>
            <input type="text" name="writer" placeholder="Writer Input">

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password Input">

            <label for="file">File</label>
			<input type="file" class="form-control" name="userfile">

            <div class="btns">
                <button type="submit">Write</button>
                <button type="button" onclick="history.back(-1);">Back</button>
            </div>
        </form>
    </div>
</body>
</html>