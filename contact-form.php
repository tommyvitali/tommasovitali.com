 <?php

        

$messaggio = "";

$nome = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];


$testo = "Nome: " . $nome . "\n"
. "Email: " . $email . "\n"
. "Messaggio:\n" . $msg;



mail('info@tommasovitali.com', 'Nuovo messaggio dal sito developer', $testo);
    

 


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/contact-form.css">
        <link rel="stylesheet" type="text/css" href="css/contact-form-queries.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/e4ab9ad31f.js"></script>
        
        
       
        
        
        
        
        <title>Thanks for Contacting Me</title>
    </head>
    <body>

        <section class="container">
            <div class="tomfolio">
             <a href="index.html"> <p>TomFolio</p></a>  
            </div>
            <div class="postcard">
                <div class="leftcol">
                    <h1>THANK YOU!</h1>
                    <span class="ico-circle">
                        <ion-icon name="thumbs-up-sharp"></ion-icon>
                    </span>
                    <div class="button">
                        <a href="index.html">
                            <button>BACK</button>
                        </a>   
                    </div>
                </div>
                <div class="rightcol">
                    <div class="picture">
                        <img src="img/me.png" alt="me">
                    </div>
                    <hr>
                    <div class="thanks">
                        <p>Thank you for contacting me!<br>
                        I will reply as soon as possible to your message.</p>
                    </div>
                   
                    <span class="ico-circle">
                        <ion-icon name="happy-outline"></ion-icon>
                    </span>
                </div>
                
            </div>
             <!-- FOOTER -->
              

        </section>

        <section class="footer">
            <footer>
                <p>Developed in 2020 by <strong>Tommaso Vitali</strong> </p>
                <p>tommyvitaly@gmail.com</p>
            </footer>
        </section> 

        
       
            

        
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>

        <script>
            
                TweenMax.to('.smile', 3,  {  opacity:1,rotate:'360deg', translateY:1, ease: "bounce.out", delay:2});
   
            
        </script>

        
        


            
    </body>


</html>    