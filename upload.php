<?php
require('include/db.config.php');
$time_start = microtime(true);
session_start();

if (($_FILES['file']['name'] != "")) {
  
    // Where the file is going to be stored
    $time = time();
    $data = [];
    mkdir("tmp/csv/1/$time");
    $target_dir = "tmp/csv/1/" . $time . "/";
    $file = $_FILES['file']['name'];
    $path = pathinfo($file);
    $filename = $path['filename'];
    $filename = rand(10, 99) . $time . '_csv_file';
    $ext = $path['extension'];
    $temp_name = $_FILES['file']['tmp_name'];
    $path_filename_ext = $target_dir . $filename . "." . $ext;


    // Check if file already exists
    if (file_exists($path_filename_ext)) {
        echo "Sorry, file already exists.";
    } else {
        move_uploaded_file($temp_name, $path_filename_ext);
        // split_files($path_filename_ext);
        // echo "Congratulations! File Uploaded Successfully.";
        // echo $path_filename_ext;
    }
   
    mysqli_options($link, MYSQLI_OPT_LOCAL_INFILE, true);

    $sql = "LOAD DATA LOCAL INFILE '" . $path_filename_ext . "'
    INTO TABLE csv_data_temp
    FIELDS TERMINATED BY '\n'
    LINES TERMINATED BY '\n'
    IGNORE 1 LINES 
    (@email_name)
    SET csv_file_name = 'test',
    first_name = 'test',
    email_name = LOWER(@email_name),
    last_name = 'test',
    full_name = NULLIF(@full_name, 'null'),
    address  = NULLIF(@address, 'null'),
    create_date = '" . date('Y-d-m') . "',
    user_id = NULLIF(@user_id, 'null');;";


    mysqli_query($link, $sql) or die(mysqli_error($link));
    $data['records'] = mysqli_affected_rows($link);
   
    // print_r(mysqli_info($link));
    $time_end = microtime(true);

    //dividing with 60 will give the execution time in minutes otherwise seconds
    $execution_time = ($time_end - $time_start);

    //execution time of the script
    $data['time'] = $execution_time;
    echo  json_encode($data);
}
