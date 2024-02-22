$(document).ready(function(){

    $('select').change(function() {
        if(this.value == "1"){
            $(".img").show();
            $(".text").hide();
        }else if(this.value == "2"){
            $(".img").hide();
            $(".text").show();
        }else if(this.value == "0"){
            $(".img").hide();
            $(".text").hide();
        }
      });

    $(".create_admin").click(function(){
        window.open("create_admin.php");
    });

    $(".login").click(function(){
        var userid = $("#user").val();
        var password = $("#password").val();

        $.ajax({
            type:"POST",
            url: "login.php",
            data: {
                userid : userid,
                password : password,
            },
            success: function(response){
            
                if(response == "1"){
                    alert("Logging in...");
                    window.location.href = 'inputform.php';
                }
                else {
                    alert ("User not verified!");
                }
            }
        });
    });

    $(".create").click(function(){
        var fname = $("#first_name").val();
        var mname = $("#middle_name").val();
        var lname = $("#last_name").val();
        var pass = $("#pwd").val();
        var cpass = $("#cpwd").val();

        $.ajax({
            type:"POST",
            url: "create.php",
            data: {
                fname : fname,
                mname : mname,
                lname : lname,
                pass : pass,
                cpass : cpass
            },
            success: function(response){
                alert(response);
            }
        });
    });

    $(".enter").click(function(){
        
        var logo_img_name = $('.logo_img_name').val();
        var logo_text = $('#logo_text').val();
        // alert(logo_text);
        var menu_item1 = $('#menu_item1').val();
        // alert(menu_item1);
        var menu_item2 = $('#menu_item2').val();
        // alert(menu_item2);
        var menu_item3 = $('#menu_item3').val();
        // alert(menu_item3);
        var menu_item4 = $('#menu_item4').val();
        // alert(menu_item4);
        var menu_item5 = $('#menu_item5').val();
        // alert(menu_item5);
        // var svg_name = $('.svg_name').val();
        // var mobile = $('#mobile').val();
        // // alert(mobile);
        // var button1 = $('#button1').val();
        // // alert(button1);
        // var bg_img_name = $('.bg_img_name').val();
        // var heading = $('#heading').val();
        // // alert(heading);
        // var paragraph = $('#pg').val();
        // // alert(paragraph);
        // var button2 = $('#button2').val();
        // // alert(button2);
       
        var logo_image = $("#logo_img")[0].files[0];
        // var svg = $("header_svg")[0].files[0];
        // var bg_image = $("#bg_img")[0].files[0];

        var form_data = new FormData();
        form_data.append("logo_image",logo_image);
        form_data.append("logo_img_name",logo_img_name);
        form_data.append("logo_text",logo_text);
        form_data.append("menu_item1",menu_item1);
        form_data.append("menu_item2",menu_item2);
        form_data.append("menu_item3",menu_item3);
        form_data.append("menu_item4",menu_item4);
        form_data.append("menu_item5",menu_item5);
        // form_data.append("svg",svg);
        // form_data.append("svg_name",svg_name);
        // form_data.append("mobile",mobile);
        // form_data.append("button1",button1);
        // form_data.append("bg_image",bg_image);
        // form_data.append("bg_img_name",bg_img_name);
        // form_data.append("heading",heading);
        // form_data.append("paragraph",paragraph);
        // form_data.append("button2",button2);

        
        $.ajax({
            type:"POST",
            url:"backend.php",
            data: form_data,
            processData: false,
            contentType: false,
            success: function(response){
                alert(response.alert);
            }
        });
        alert("outside ajax");
    });

    $(".logout").click(function(){
        $.ajax({
            type: "POST",
            url: "logout.php",
            contentType: false,
            processData: false,
            success: function (response){
                if(response == "logout"){
                    alert ("Logging out");
                    window.location.href = 'index.php';
                }
                else {
                    alert ("Try again");
                }
            }
        });
    });

});
