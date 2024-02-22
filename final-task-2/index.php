<?php 
include 'admin/database.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1" /> 
    <title>Workhorse</title>
    <link rel="stylesheet" href="admin/assets/css/style.css">
</head>
<body>
    <?php 
    $sql = "SELECT * FROM page_data";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){

?>

    <div class="section">
        <div class="container row section-container">
        <div class="col-sm-2 menu-section">
            <a href="#homepage"> <?php if($row['logo_image'] == '' ){
                                    echo "<p>".$row['logo_text']."</p>";
                                }
                                else if($row['logo_text'] == ''){
                                    echo " <img src = "."admin/assets/uploads/".$row['logo_image']." alt="."Logo".">";
                                } ?> </a>
            <div class="menu-container">
                <nav>
                    <ul>
                        <li><a href="#"><?php echo $row['menu_item_1']; ?></a></li>
                        <li class="selected-menu"><a href="#"><?php echo $row['menu_item_2']; ?></a></li>
                        <li><a href="#"></a><?php echo $row['menu_item_3']; ?></li>
                        <li><a href="#"></a><?php echo $row['menu_item_4']; ?></li>
                        <li><a href="#"></a><?php echo $row['menu_item_5']; ?></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-sm-10 main-section">
            <!-- top contact bar -->
            <div class="row contact-bar">
                <div class="phone-no">
                    <img src="admin/assets/images/call.svg" alt="phone svg icon">
                    <h3>+61 3 9644 3003</h3>
                </div>
                <div class="primary-button"><a href="#free-audit">Get Free Audit <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.999969 8.00037L15.9706 7.99936" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.88907 1.9187L15.9705 8.00013L9.88825 14.0824" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                
                    </a></div>
            </div>
            <!-- Banner Section -->
            <div class="banner-section">
                <div class="row banner-container">
                    <div class="banner-content">
                        <h1>All About Workhorse Digital</h1>
                        <p>We are passionate artisans of the virtual realm, crafting captivating digital experiences that leave a lasting impact. We are passionate artisans of the virtual realm.</p>
                        <div class="primary-button"><a href="#masterplan">Free Digital Marketing Masterplan <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.999969 8.00037L15.9706 7.99936" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.88907 1.9187L15.9705 8.00013L9.88825 14.0824" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                
                            </a></div>
                    </div>
                    <div class="banner-image">
                        <img src="admin/assets/images/banner-img.png" alt="banner image">
                    </div>
                </div>
            </div>
            <!-- End of banner section -->

            <!-- Display Section -->
            <div class="row col-sm-12 display-section">
                <h2>Unleashing boundless creativity to reshape the digital landscape and inspire meaningful connections.</h2>
                <div class="row col-sm-12 display-container">
                    <div class="col-sm-3 display-image">
                        <img src="admin/assets/images/display-img.png" alt="display image">
                    </div>
                    <div class="col-sm-9 display-content">
                        <h4>The power of imagination to reshape the digital landscape</h4>
                        <p>Crafting innovative and captivating experiences that transcend the ordinary. By infusing our work with artistic flair and technical excellence, we aim to inspire meaningful connections between brands and their audiences.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of display section -->
    </div>

        <!-- Footer -->
        <div class="container row col-sm-12 footer-section">
            <!-- footer column 1 -->
            <div class="col-sm-4 footer-block-1">
                <img src="admin/assets/images/footer-logo.svg" alt="Footer logo">
                <p>Lorem ipsum dolor sit amet consectetur. Felis   set porttitor velit neque vitae odio suspendisse dignissim metus augue. </p>
                <h5>Follow Our Social</h5>
                <div class="row col-sm-6 social-icons">
                    <a href="#"><img src="admin/assets/images/icon1.svg" alt="pajamas"></a>
                    <a href="#"><img src="admin/assets/images/icon2.svg" alt="instagram"></a>
                    <a href="#"><img src="admin/assets/images/icon3.svg" alt="linkedin"></a>
                    <a href="#"><img src="admin/assets/images/icon4.svg" alt="facebook"></a>
                </div>
            </div>
            <!-- footer column 2 -->
            <div class="col-sm-2 footer-link-block">
                <h6>Quick Links</h6>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Case Studies</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <!-- footer column 3 -->
            <div class="col-sm-3 footer-link-block">
                <h6>Services</h6>
                <ul>
                    <li><a href="#">Strategy & Consultancy</a></li>
                    <li><a href="#">SEO Services</a></li>
                    <li><a href="#">PPC Management</a></li>
                    <li><a href="#">Paid Social</a></li>
                    <li><a href="#">Dev & Design</a></li>
                    <li><a href="#">Branding</a></li>
                </ul>
            </div>
            <!-- footer column 4 -->
            <div class="col-sm-2 footer-link-block">
                <h6>Legal</h6>
                <ul>
                    <li><a href="#">Terms & Condition</a></li>
                    <li><a href="#">Privacy & Policy</a></li>
                </ul>
            </div>
            <h5 class="tc">© Workhorse Digital 2023. All Rights Reserved</h5>
        </div>
        <!-- End of footer -->
    </div>
    <?php }
    }?>
</body>
</html>