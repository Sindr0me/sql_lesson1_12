<?php
header("Content-Type: text/html; charset=utf-8");
include "config.php";
mysqli_set_charset ($connect,"utf8");
$sql = "select * from books";
$res = mysqli_query($connect, $sql);
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
	<body>
		<table border="1" width="700px">
			<tr>
			<td>id</td>
			<td>name</td>
			<td>author</td>
			<td>year</td>
			<td>isbn</td>
			<td>genre</td></tr>

			<tr>
			<?php while($data = mysqli_fetch_array($res)){ ?>
				<td><?=$data['id'];?></td>
    			<td><?=$data['name'];?></td>
    			<td><?=$data['author'];?></td>
    			<td><?=$data['year'];?></td>
    			<td><?=$data['isbn'];?></td>
    			<td><?=$data['genre'];?></td>
    		<tr></tr>
    		<?php } ?>
			</tr>
</table>
	</body>
</html>