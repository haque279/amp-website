<?php 
if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
        
        $to = "test@gmail.com";
        $subject = "Test Digital Message";
        
        $message = "
        <html>
        <head>
        <title>HTML email</title>
        </head>
        <body>
        <h2>A Message from Meieek Digital Website</h2>
        <table style='border-collapse: collapse;
    width: 100%;' >
        <tr>
            <td>Name: </td>
            <td>$name</td>
        </tr>
        <tr>
            <td>Email: </td>
            <td>$email</td>
        </tr>
        <tr>
            <td>Subject: </td>
            <td>$subject</td>
        </tr>
        <tr>
            <td>Message: </td>
            <td>$message</td>
        </tr>
        
        </table>
        </body>
        </html>
        ";
        
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: <testdigital.com>' . "\r\n";
        $headers .= 'Cc: test27@gmail.com' . "\r\n";
        
        mail($to,$subject,$message,$headers);
    
        $send = 1;
        
}

?>

<!doctype html>
<html amp lang="en">
  <head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title>Test Digital</title>
    <link rel="canonical" href="http://example.ampproject.org/article-metadata.html">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
<script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "Open-source framework for publishing content",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
          "images/logo.png"
        ]
      }
    </script>
    <link href="https://fonts.googleapis.com/css?family=Niramit:400,600" rel="stylesheet">
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
      
           
           <?php include "inc/header.php"; ?>
           
           
<div class="center">
    <div class="col sm-col-12 sm-col-12">
        <div style="padding: 67.5px">
            <h1 class="title" style="color: #fff">Hire Us</h1>
            <div class="bradgram">
                <a href="index.php">Home</a> >
                <a href="#">Hire Us</a>
            </div>
        </div>
    </div>

</div>
</header>
<section class="">

    <?php  if(isset($send)){ ?>
    <div class="" style="position: absolute; top: 20px; right: 20px; background: #1E9E40; font-size: 25px; padding: 15px; color: #fff">Thanks!!! Message send successfully done</div>
    <?php  } ?>

    <div class="clearfix mobile_p">

        <div class="clearfix mxn2">
            <div class="col sm-col-4 px2 pb3 center">
                <div class="p3 px3" style="background: #3B80F1; color: #fff ">
                    <amp-img alt="Test Digital" src="images/home_seo2_contactbox_1.png" width="85" height="85">
                    </amp-img>
                    <h2>
                        Contact Us
                    </h2>
                    <p style="height: 5em">House 1121, Flat A2, Road 11(new), Avenue 8, DOHS Mirpur, Dhaka 1216</p>


                </div>
            </div>
            <div class="col sm-col-4 px2 pb3 center">
                <div class="p3 px3" style="background: #F1B501; color: #fff">
                    <amp-img alt="Test Digital" src="images/home_seo2_contactbox_2.png" width="85" height="85">
                    </amp-img>
                    <h2>Call Us</h2>
                    <p style="height: 5em">+88 01752 30 30 90 <br>
                        +88 017 52 30 30 90
                    </p>

                </div>
            </div>
            <div class="col sm-col-4 px2 pb3 center">
                <div class="p3 px3" style="background: #1E9E40; color: #fff">
                    <amp-img alt="Test Digital" src="images/home_seo2_contactbox_3.png" width="85" height="85">
                    </amp-img>
                    <h2>
                        Social Media
                    </h2>
                    <div class="center" style="height: 6em">
                        <ul class="social">
                            <li><a href="#" class="icon-10 facebook" title="Facebook"><svg viewBox="0 0 512 512">
                                        <path d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z" /></svg></a></li>

                            <li><a href="#" class="icon-26 twitter" title="Twitter"><svg viewBox="0 0 512 512">
                                        <path d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z" /></svg></a></li>

                            <li><a href="#" class="icon-15 instagram" title="Instagram"><svg viewBox="0 0 512 512">
                                        <path d="M256 109.3c47.8 0 53.4 0.2 72.3 1 17.4 0.8 26.9 3.7 33.2 6.2 8.4 3.2 14.3 7.1 20.6 13.4 6.3 6.3 10.1 12.2 13.4 20.6 2.5 6.3 5.4 15.8 6.2 33.2 0.9 18.9 1 24.5 1 72.3s-0.2 53.4-1 72.3c-0.8 17.4-3.7 26.9-6.2 33.2 -3.2 8.4-7.1 14.3-13.4 20.6 -6.3 6.3-12.2 10.1-20.6 13.4 -6.3 2.5-15.8 5.4-33.2 6.2 -18.9 0.9-24.5 1-72.3 1s-53.4-0.2-72.3-1c-17.4-0.8-26.9-3.7-33.2-6.2 -8.4-3.2-14.3-7.1-20.6-13.4 -6.3-6.3-10.1-12.2-13.4-20.6 -2.5-6.3-5.4-15.8-6.2-33.2 -0.9-18.9-1-24.5-1-72.3s0.2-53.4 1-72.3c0.8-17.4 3.7-26.9 6.2-33.2 3.2-8.4 7.1-14.3 13.4-20.6 6.3-6.3 12.2-10.1 20.6-13.4 6.3-2.5 15.8-5.4 33.2-6.2C202.6 109.5 208.2 109.3 256 109.3M256 77.1c-48.6 0-54.7 0.2-73.8 1.1 -19 0.9-32.1 3.9-43.4 8.3 -11.8 4.6-21.7 10.7-31.7 20.6 -9.9 9.9-16.1 19.9-20.6 31.7 -4.4 11.4-7.4 24.4-8.3 43.4 -0.9 19.1-1.1 25.2-1.1 73.8 0 48.6 0.2 54.7 1.1 73.8 0.9 19 3.9 32.1 8.3 43.4 4.6 11.8 10.7 21.7 20.6 31.7 9.9 9.9 19.9 16.1 31.7 20.6 11.4 4.4 24.4 7.4 43.4 8.3 19.1 0.9 25.2 1.1 73.8 1.1s54.7-0.2 73.8-1.1c19-0.9 32.1-3.9 43.4-8.3 11.8-4.6 21.7-10.7 31.7-20.6 9.9-9.9 16.1-19.9 20.6-31.7 4.4-11.4 7.4-24.4 8.3-43.4 0.9-19.1 1.1-25.2 1.1-73.8s-0.2-54.7-1.1-73.8c-0.9-19-3.9-32.1-8.3-43.4 -4.6-11.8-10.7-21.7-20.6-31.7 -9.9-9.9-19.9-16.1-31.7-20.6 -11.4-4.4-24.4-7.4-43.4-8.3C310.7 77.3 304.6 77.1 256 77.1L256 77.1z" />
                                        <path d="M256 164.1c-50.7 0-91.9 41.1-91.9 91.9s41.1 91.9 91.9 91.9 91.9-41.1 91.9-91.9S306.7 164.1 256 164.1zM256 315.6c-32.9 0-59.6-26.7-59.6-59.6s26.7-59.6 59.6-59.6 59.6 26.7 59.6 59.6S288.9 315.6 256 315.6z" />
                                        <circle cx="351.5" cy="160.5" r="21.5" /></svg></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="clearfix mxn2">
            <div class="col sm-col-6 px2 pb3 ">
                <div class="pt3 ">
                    <h4>Have any query?</h4>
                    <form method="post" action-xhr="/components/amp-form/submit-form-input-text-xhr" target="_top">
                        <div class="clearfix mxn2">
                            <div class="col sm-col-6 px2">
                                <input type="text" required name="name" class="form" placeholder="Name">
                            </div>
                            <div class="col sm-col-6 px2">
                                <input type="text" required name="email" class="form" placeholder="Email">
                            </div>
                        </div>
                        <input type="text" name="subject" required class="form" placeholder="Subject">
                        <textarea name="message" required id="" cols="30" rows="10" class="form" placeholder="Message"></textarea>
                        <button type="submit" name="submit" class="btn rounded">Send Message</button>
                    </form>


                </div>
            </div>
            <div class="col sm-col-6 px2 pb3">
                <div class="pt3 ">
                    <amp-iframe width="100" height="90" sandbox="allow-scripts allow-same-origin" layout="responsive" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDG9YXIhKBhqclZizcSzJ0ROiE0qgVfwzI&q=europe">
                    </amp-iframe>

                </div>
            </div>
        </div>

    </div>





</section>

<?php include "inc/footer.php"; ?>


</body>

</html>
