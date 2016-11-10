<? include('config.inc'); ?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.1.0.slim.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>Eureka Joe's Birthday!</title>
        <style>

            body {
                font-family: 'Crete Round', arial, helvetica, sans-serif;
                background-image: url("images/denali-903501.jpg");
                background-size: cover; 
                background-repeat: no-repeat;
                background-attachment: fixed;
                text-align: center;
                
            }
            h1 {
                color: white;
                font-weight: bold;
                text-transform: uppercase;
                font-size: 56px;
                text-align: center;
            }

            .header {
                background-color: #82430C;
                width: 100%;
                box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
                border-radius: 2px;
            }

            h2 {
                color: #82430C;
            }

            a {
                text-decoration: none;
                font-size: 2em;
            }

            p {
                text-align: center;
            }

            form {
                float: center;
                font-size: 2em;
            }

            span {
                max-width: 80%;
                border: none;
                border-bottom: 2px solid #D4D4D4;
                padding: 4px;
                font-family: inherit;
                float: center;
                font-size: .5em;
                color: #A9A9A9;
            }

            button {
                background-color: #82430C;
                font-family: 'Crete Round', arial, helvetica, sans-sarif; 
                color: white;
                border: 0;
                font-size: 2em;
                border-radius: 2px;
                padding: 5px;
                width: 80%;
                box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
            }

            input[type="text"]{
                border: none;
                border-bottom: 2px solid #D4D4D4;
                padding: 8px;
                font-family: inherit;
            }

            textarea {
                border: none;
                border-bottom: 2px solid #D4D4D4;
                font-family: inherit;
            }

            input[type="text"], textarea {
                font-size: 1em;
                width: 80%;
            }

            .card {
                background-color: white;
                border-radius: 2px;
                margin: 0 auto;
                position: relative;
                padding-bottom: 2px;
                color: black;
                box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
                text-align: center;
                max-width: 800px;
            }


            .container{
                max-width: 400px;
                background-color: black;
                margin: 0 auto;
                text-align: center;
                position: relative;
                
            }

            .container div {
                background-color: white;
                width: 100%;
                display: inline-block;
            }

            .container img{
                width: 100%;
                height: auto;
            }

            @media only screen and (max-width: 640px) {

                p {
                    font-size: 1.5em;
                    /*-webkit-text-size-adjust: auto; */
                }

                input[type="text"] textarea {
                    font-size: 1.5em;
                    /*-webkit-text-size-adjust: auto;*/
                }
            }
        </style>
    </head>
    <body>
        <img src="images/logo.png" />
        <div class="card">
            <div class="header">
                <h1>Gold Makes the Best Gift!</h1>
            </div>
            <p>Eureka Joe's BIG Birthday means BIG savings for you! No need to go digging for deals this big!</p>
            <div class="container">
                <div class="img1" style="display: inline-block">
                    <img src="\images\Artboard-1-copy-15.jpg">
                </div>
                <div class="img2" style="display: none">
                    <img src="\images\Artboard-1-copy-16.jpg" >
                </div>
            </div>
    <!-- Script for the image slide show for the ads -->
            <script>
                var currentIndex = 0,
                    items = $('.container div'),
                    itemAmt = items.length;

                function cycleItems() {
                    var item = $('.container div').eq(currentIndex);
                    items.hide();
                    item.css('display', 'inline-block');
                }

                var autoSlide = setInterval(function()
                {
                    currentIndex += 1;
                    if (currentIndex > itemAmt - 1) {
                        currentIndex = 0;
                    }
                    cycleItems();
                }, 3000);
            </script>
            <!-- Contact Form -->
            <div class="contact-form">
                <?
                    // Email this sends to is going to be info@eurekajoes.com
                    if (!empty($_POST['act'])) {
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $number=$_POST['number'];
                    $message=$_POST['message'];

                    $to = 'info@eurekajoes.com';
                    $from = $email ;
                    $subject = 'Testing123';
                    $message =  $name + $email + $number + $message;
                    email($to, $from, $subject, $message);
                    echo("Thank you for submitting!"); 
                    } 
                    else {    
                ?>

                <h2>Please fill out our contact form for more details</h2>
                <form name="contact" id="contact" method="post">
                    <input type="hidden" name="act" value="run" />
                    <input type="text" name="fullname" placeholder="Name"     /><br />
                    <input type="text" name="email" placeholder="Email"   /><br />
                    <input type="text" name="phonenumber" placeholder="Phone Number"     /><br />
                    <textarea name="message" placeholder="Message" col="50"   ></textarea><br /><br />
                    <button type="submit" class="submit">Send</button>

                </form>
                <script>
                $J(document).ready(validate(){
                    $J('#contact').validate(
                        submitHandler: function('#contact') {
                        $J(form).ajaxSubmit();
                    });
                });
                </script>
                <?} ?>
                
            </div>

            <a href="https://www.eurekajoes.com/shop/paydirt-12563"><h2>Take me to the shop!</h2></a>
        </div>
    </body>
</html>