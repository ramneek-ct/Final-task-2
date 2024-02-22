<?php
$servername="localhost";
$username="root";
$password="";
$database="workhorse";

$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $sql="CREATE DATABASE workhorse";
// mysqli_query($conn,$sql); 

// $sql = "CREATE TABLE admin_info (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     first_name VARCHAR(30) NOT NULL,
//     middle_name VARCHAR(30),
//     last_name VARCHAR(30) NOT NULL,
//     pass VARCHAR(8) NOT NULL
// )";

// if(mysqli_query($conn,$sql))
// {
//     echo "Table admin_info created!";
// }else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

// $table = "CREATE TABLE page_data(
//         id INT AUTO_INCREMENT PRIMARY KEY,
//         logo_image VARCHAR(255),
//         logo_text VARCHAR(255),
//         menu_item_1 VARCHAR(255),
//         menu_item_2 VARCHAR(255),
//         menu_item_3 VARCHAR(255),
//         menu_item_4 VARCHAR(255),
//         menu_item_5 VARCHAR(255), b_heading VARCHAR(255),
//         b_paragraph VARCHAR(255),
//         b_button VARCHAR(255))";
//         svg VARCHAR(255),
//         m_number VARCHAR(255),
//         header_button VARCHAR(255),
        // b_heading VARCHAR(255),
        // b_paragraph VARCHAR(255),
        // b_button VARCHAR(255),
//         b_image VARCHAR(255)
//         )";

        // if(mysqli_query($conn,$table)){
        //     echo "Table page_data created!";
        // }
        // else{
        //     echo mysqli_error($conn);
        // }


// mysqli_close($conn);
?>