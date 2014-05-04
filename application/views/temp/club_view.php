<html>
<head>
	<title></title>
</head>
<body>

	<?php foreach ($club_details as $key => $value): ?>
		<h3><?php echo $key; ?> : <?php echo $value; ?></h3>
	<?php endforeach ?>
	<!-- 
	<h3>Club Id : <?php echo $club_details["club_id"]; ?></h3>
	<h3>Club Name : <?php echo $club_details["club_name"]; ?></h3>
	<h3>Club Thumbnail File Name : <?php echo $club_details["club_thumb_file_name"]; ?></h3> -->
</body>
</html>