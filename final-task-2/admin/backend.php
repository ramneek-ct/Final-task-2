<?php
    include 'database.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $logo_text = $_POST['logo_text'];
        $logo_img_name = $_POST['logo_img_name'];
        $menu_item1 = $_POST['menu_item1'];
        $menu_item2 = $_POST['menu_item2'];
        $menu_item3 = $_POST['menu_item3'];
        $menu_item4 = $_POST['menu_item4'];
        $menu_item5 = $_POST['menu_item5'];
        // $mobile = $_POST['mobile'];
        // $svg_name = $_POST['svg_name'];
        // $button1 = $_POST['button1'];
        // $heading = $_POST['heading'];
        // $paragraph = $_POST['paragraph'];
        // $button2 = $_POST['button2'];
        // $bg_img_name = $_POST['bg_img_name'];
 

        $alert='';

        $logo_image="";
        if (isset($_FILES['logo_image'])){
            $logo_image = $_FILES['logo_image']['name'];
            $logo_image_tmp = $_FILES['logo_image']['tmp_name'];
            move_uploaded_file($logo_image_tmp, "assets/uploads/".$logo_image);
        }

        // $svg="";
        // if (isset($_FILES['svg'])){
        //     $svg = $_FILES['svg']['name'];
        //     $svg_tmp = $_FILES['svg']['tmp_name'];
        //     move_uploaded_file($svg_tmp, "assets/uploads/".$svg);
        // }

        // $bg_image="";
        // if (isset($_FILES['bg_image'])){
        //     $bg_image = $_FILES['bg_image']['name'];
        //     $bg_image_tmp = $_FILES['bg_image']['tmp_name'];
        //     move_uploaded_file($bg_image_tmp, "assets/uploads/".$bg_image);
        // }

        $check="SELECT * FROM page_data";
        $run_check = mysqli_query($conn, $check);
        if(mysqli_num_rows($run_check) > 0){
            $row = mysqli_fetch_assoc($run_check);
            $id = $row['id'];
            if(!empty($logo_image)){
            $update = "UPDATE page_data SET logo_image = '$logo_image', logo_text = '', menu_item_1 = '$menu_item1', menu_item_2 = '$menu_item2', menu_item_3 = '$menu_item3', menu_item_4 = '$menu_item4', menu_item_5 = '$menu_item5' WHERE id = $id";

            mysqli_query($conn,$update);
            $alert = "Record Updated!";

            }else if(!empty($logo_text)){

                $update1 = "UPDATE page_data SET logo_image = '' , logo_text = '$logo_text', menu_item_1 = '$menu_item1', menu_item_2 = '$menu_item2', menu_item_3 = '$menu_item3', menu_item_4 = '$menu_item4', menu_item_5 = '$menu_item5' WHERE id = $id";

                mysqli_query($conn,$update1);
                $alert = "Record Updated!";
            }}else{

     
                $insert = "INSERT INTO page_data (logo_image, logo_text, menu_item_1, menu_item_2, menu_item_3, menu_item_4, menu_item_5) VALUES ('$logo_image', '$logo_text', '$menu_item1', '$menu_item2', '$menu_item3', '$menu_item4', '$menu_item5')";

                if (mysqli_query($conn,$insert)){
                    $alert = "Record  Inserted!!";
                }else{
                    $alert = "Error";
                }
            }
     
        

        $output =['alert' => $alert];
        header('Content-Type: application/json');
        echo json_encode($output);
    }
?>