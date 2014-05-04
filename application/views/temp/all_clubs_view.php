<html>
<head>
	<title></title>
</head>
<body>
	<?php foreach($all_clubs_details as $club): ?>
		<h3>Club Id : <?php echo $club["club_id"]; ?></h3>
		<h3>Club Name : <?php echo $club["club_name"]; ?></h3>
		<h3>Club Thumbnail File Name : <?php echo $club["club_thumb_file_name"]; ?></h3>
	<?php endforeach; ?>
</body>
</html>