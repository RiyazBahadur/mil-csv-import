<?php
require('include/db.config.php');
$data = [];
$query = 'INSERT INTO csv_data(csv_file_name,first_name,last_name,full_name,address,email_name,create_date,user_id) SELECT csv_file_name,first_name,last_name,full_name,address,email_name,create_date,user_id  FROM csv_data_temp GROUP BY email_name';
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$count = mysqli_affected_rows($link);
$data['count'] = $count;
$query = 'TRUNCATE TABLE csv_data_temp';
mysqli_query($link,$query);
echo json_encode($data);
