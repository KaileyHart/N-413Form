
<DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
		<title>Form Project</title>
		<style>
			body	{ font-family:Arial; }
			h2	{ text-align:center;margin-top:50px; }
			h4	{ text-align:center; }
			#form-container { width:30%;margin-left:40%;margin-top:100px; }
			input { font-size:18px;margin-bottom:20px; }
			textarea {height:100px;width:300px;margin-bottom:30px;font-size:16px; }
			#submit	{float:right;}
		</style>
	</head>       
	<body>
		<h2>Submit a Comment</h2>
		<h4><a href="comments.php">See Comments</a></h4>
		<form method="POST" action="n413post.php">
        <div id="form-container">
        	Name: <br><input type="text" id="name" name="name" value="" placeholder="Enter Name" required/><br/>
            E-mail:<br> <input type="email" id="email" name="email" value="" placeholder="Enter E-mail" required/><br/>
            Comment: <br><textarea id="comment" name="comment" value="" placeholder="Add your comment here:"></textarea><br/>
            <input type="submit" id="submit" value="Submit" />
         </div>       
		
	</body>
</html>
        