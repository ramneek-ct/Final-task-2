<?php 
include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workhorse Input Form</title>
    <link rel="stylesheet" href="assets/css/formstyle.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="assets/js/index.js"></script>
</head>
<body>
<?php
     
        $sql="SELECT * FROM page_data";
        $execute = mysqli_query($conn,$sql);

        if(mysqli_num_rows($execute)>0){
            $row = mysqli_fetch_assoc($execute);
        
    ?>
      

    <form action="#" method="post" enctype="multipart/form-data"><br>
    <label>----Menu Section----</label><br><br>
    <!-- Logo -->
    <label for="logo">Choose the format for logo: </label>
        <select name="logo" id="logo"  >
            <option value="0">Choose format</option>
            <option value="1">Image </option>
            <option value="2">Text</option>
        </select><br><br>
        <!-- logo as image -->
        <div class = "img">
        <label for="logo_img">Upload Logo Image: </label>
        <input type="file" id="logo_img" name="logo_img" accept="image/*">
        <label for="logo_img_name" class="logo_img_name"></label><br><br> 
        </div>
        <!-- logo as text -->
        <div class = "text">
        <label for="logo_text">Enter Logo Text: </label>
        <input type="text" id="logo_text" name="logo_text" value= "<?php echo $row['logo_text']; ?>"><br><br>
        </div> 
    <!-- End of logo -->

    <!-- Menu Items -->
    <label for="menu_item1">Enter menu item 1: </label>
    <input type="text" id="menu_item1" name="menu_item1" value= "<?php echo $row['menu_item_1']; ?>" ><br>
    <label for="menu_item2">Enter menu item 2: </label>
    <input type="text" id="menu_item2" name="menu_item2" value= "<?php echo $row['menu_item_2']; ?>"><br>
    <label for="menu_item3">Enter menu item 3: </label>
    <input type="text" id="menu_item3" name="menu_item3" value= "<?php echo $row['menu_item_3']; ?>"><br>
    <label for="menu_item4">Enter menu item 4: </label>
    <input type="text" id="menu_item4" name="menu_item4" value= "<?php echo $row['menu_item_4']; ?>"><br>
    <label for="menu_item5">Enter menu item 5: </label>
    <input type="text" id="menu_item5" name="menu_item5" value= "<?php echo $row['menu_item_5']; ?>"><br><br>
    <!-- End of menu items -->

    <!-- Top bar -->
    <!--<label>----Header----</label><br><br>
    <label for="header_svg">Upload SVG icon: </label>
    <input type="file" id="header_svg" name="header_svg">
    <label for="svg_name" class="svg_name"></label><br><br>

    <label for="mobile">Enter mobile number: </label>
    <input type="text" id="mobile" name="mobile"><br><br>

    <label for="button1">Enter button text: </label>
    <input type="text" id="button1" name="button1"><br><br>-->
    <!-- End of top bar -->

    <!-- Banner Section -->
    <!-- <label>----Banner----</label><br><br>
    <label for="bg_img">Upload background image: </label>
    <input type="file" id="bg_img" name="bg_img" accept="image/*">
    <label for="bg_img_name" class="bg_img_name"></label><br><br>-->

    <!--<label for="heading">Enter Heading: </label>
    <input type="text" id="heading" name="heading"><br><br>

    <label for="pg">Enter Paragraph: </label>
    <input type="text" id="pg" name="pg"><br><br>

    <label for="button2">Enter button text: </label>
    <input type="text" id="button2" name="button2"><br><br>-->

    <input type="submit" class="enter" value="Enter">

    <input type="submit" value="Log out" class="logout"><br><br>
    </form>
<?php } ?>
</body>
</html>