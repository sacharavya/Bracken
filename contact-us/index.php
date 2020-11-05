<!DOCTYPE html>
<html>
<head>
    <title>Send an Email</title>
    <!-- font awsome CDN -->
    <script src="https://kit.fontawesome.com/ac9ff115c7.js" crossorigin="anonymous"></script>
    
    
    <style>
  body {
    padding: 0;
     margin: 0;
    font-family: 'Roboto', sans-serif;
                        }

 nav {
    position: fixed;
    z-index: 10;
    left: 0;
    right: 0;
    top: 0;
    font-family: 'Montserrat', sans-serif;
    height: auto;
    padding: 0 5%;
    background: linear-gradient( 320deg, rgba(46, 51, 147, 1) 35%, rgba(41, 170, 225, 1) 100%);
}

nav .logo {
    float: left;
    width: 40%;
    /* height: 100%; */
    display: flex;
    align-items: center;
    font-family: var(--montserrat);
    font-weight: 900;
    font-size: 25px;
    color: white;
    margin-top: 15px;
    letter-spacing: 1.5px;
}


/* nav */

nav .links {
    display: flex;
    float: right;
    padding: 0px;
    margin: 0px;
    width: 40%;
    height: auto;
    /* justify-content: space-around; */
    align-items: center;
}

nav .links li {
    list-style: none;
}

nav .links a {
    display: block;
    padding: 1em;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    text-decoration: none;
}

nav .links a:hover {
    color: #ff00c8;
}

#nav-toggle {
    position: absolute;
    top: -100px;
}

nav .icon-burger {
    display: none;
    position: absolute;
    right: 5%;
    top: 50%;
    transform: translateY(-50%);
}

nav .icon-burger .line {
    width: 30px;
    height: 5px;
    background-color: #fff;
    margin: 5px;
    border-radius: 3px;
}

.book {
    background: linear-gradient(90deg, #ff00c8, #ff00c8);
    text-decoration: none;
    letter-spacing: 2px;
    border-radius: 5px;
    font-family: var(--montserrat);
    font-weight: 600;
    padding: 5px 15px!important;
}

.book:hover {
    background: #fff;
    color: #ff00c8;
}


@media screen and (max-width:768px) {
    nav .logo {
        float: left;
        width: auto;
        justify-content: center;
    }
    nav .links {
        float: none;
        position: fixed;
        z-index: 9;
        left: 0;
        right: 0;
        top: 70px;
        bottom: 100%;
        width: auto;
        height: auto;
        flex-direction: column;
        justify-content: space-evenly;
        background-color: rgba(0, 0, 0, 0.8);
        overflow: hidden;
        transition: all 0.5s ease-in-out;
    }
    nav .links a {
        font-size: 20px;
    }
    nav .icon-burger {
        display: block;
    }
    nav :checked~.links {
        bottom: 50%;
    }
}

/*Styling form */
                    .container {
                        width: 90%;
                        margin: auto;
                        overflow: hidden;
                         }
                     #contact-section{
                         background: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9));
                         background-size: cover;
                         background-position: center;
                         height: 100%;
                         width: 100%;
                         padding-bottom: 2%;
                         padding-top: 6%;
                     }  
                     #contact-section .container h2{
                         text-align: center;
                         text-decoration: underline;
                         text-underline-position: under;
                         color: white;
                         letter-spacing: 3px;
                     }  
                     #contact-section .container p{
                         text-align: center;
                         margin-left: auto;
                         margin-right: auto;
                         padding-bottom: 3%;
                         color: white;
                         letter-spacing: 2px;;
                     }

                     .contact-form i.fa{
                         font-size: 20px;
                         padding: 5%;
                         background-color: none;
                         margin: 1%;
                         margin-top: 4%;
                         border-radius: 5px;
                         cursor: pointer;
                         border: 2px solid rgb(190,190,190);
                         color: rgb(190,190,190);
                     }

                     .contact-form i.fa:hover{
                         cursor: pointer;
                         border: 2px solid #fff;
                         color: #fff;
                     }

                     .contact-form{
                         display: grid;
                         grid-template-columns: 40% 60%;
                     }

                     .form-info{
                         font-size: 15px;
                         font-style: italic;
                         color: #fff;
                         letter-spacing: 2px;
                         margin-left: 1%;
                     }

                     input{
                         padding: 10px;
                         margin: 10px;
                         width: 70%;
                         background-color: rgba(136,133,133,0.5);
                         color: #fff;
                         border: none;
                         outline: none;
                     }
                     input::placeholder{
                         color: #fff;
                     }
                     textarea{
                        padding: 10px;
                         margin: 10px;
                         width: 70%;
                         background-color: rgba(136,133,133,0.5);
                         color: #fff;
                         border: none;
                         outline: none;
                     }
                      
                     textarea::placeholder{
                        color: #fff;
                     }

                     .submit{
                         width: 30%;
                         background: none;
                         padding: 4px;
                         outline: none;
                         font-size: bold;
                         letter-spacing: 2px;
                         height: 33px;
                         text-align: center;
                         cursor: pointer;
                         margin-left: 3%;
                         border: 2px solid rgb(190,190,190);
                         color: rgb(190,190,190);
                     }

                     .submit:hover{
                         border: 1px solid #fff;
                         color: #fff;
                         cursor: pointer;
                     }

                     footer {
    background: linear-gradient( 320deg, rgba(46, 51, 147, 1) 35%, rgba(41, 170, 225, 1) 100%);
    color: white;
}

.footer-bottom {
    color: white;
    width: 100%;
    box-shadow: 0px 0px 3px 0px #666;
    padding: 1px;
}

.footer-bottom p {
    margin: 0px!important;
}


/* Footer content */

.footer .footer-content {
    display: flex;
}

.footer .footer-content .footer-Section {
    flex: 1;
    padding: 25px;
}

.footer .footer-content h1 {
    color: white;
    font-size: 18px;
    margin-left: 2em;
    opacity: .8;
    font-family: var(--roboto);
    font-weight: 700;
}

.footer .footer-content p {
    text-align: justify;
    font-size: 12px;
    line-height: 20px;
    margin-left: 3em;
    opacity: .8;
}

.footer-content .links ul a li {
    display: block;
    margin-bottom: 5px;
    font-size: 13px;
    text-decoration: none;
    margin-left: 32em;
    color: white;
    opacity: .5;
    transition: all .3s;
}

.footer .footer-content .links ul a li:hover {
    opacity: 1;
    font-size: 14px;
    transition: all .3s;
    margin-left: 32em;
}
                     @media (max-width: 768px){
                        #contact-section{
                            padding-top: 10%;
                        }
                        .contact-form {
                                display: block;
                                width: 100%;
                                text-align: center;
                            }
                            .submit {
                                width: 50%;
                            }
                            .contact-form i.fa {
                                font-size: 10px;
                                padding: 3%;
                            }
                     }
                     
@media screen and (max-width:800px) {
    nav .logo {
        float: left;
        width: auto;
        justify-content: center;
    }
    nav .links {
        float: none;
        position: fixed;
        z-index: 9;
        left: 0;
        right: 0;
        top: 70px;
        bottom: 100%;
        width: auto;
        height: auto;
        flex-direction: column;
        justify-content: space-evenly;
        background-color: rgba(0, 0, 0, 0.8);
        overflow: hidden;
        transition: all 0.5s ease-in-out;
    }
    nav .links a {
        font-size: 20px;
    }
    nav .icon-burger {
        display: block;
    }
    nav :checked~.links {
        bottom: 50%;
    }
    .footer .footer-content h1 {
        font-size: 10px;
        margin-left: 9em!important;
    }
    .footer .footer-content p {
        font-size: 9px;
        margin-left: 10em!important;
    }
    .footer .footer-content {
        width: 100%;
    }
    .footer .footer-content .footer-Section {
        padding: 0px;
        padding-top: 2em;
        margin-left: -4em;
    }
    .About p {
        margin-left: 2em;
        font-size: 5px;
    }
    .footer .footer-content .links ul a li {
        margin-left: 25em;
    }
    .footer .footer-content .links ul a li:hover {
        margin-left: 24em
    }
}

@media screen and (max-width:1280px) {
    nav .links {
        width: 50%;
    }
}

@media screen and (max-width:1020px) {
    nav .links {
        width: 60%;
    }
}

@media screen and (max-width:1024px) {
    .footer .footer-content .footer-Section {
        padding: 0px;
        padding-top: 2em;
    }
    .footer .footer-content .links ul a li {
        margin-left: 24em;
    }
    .footer .footer-content .links ul a li:hover {
        margin-left: 26em;
    }
}

@media screen and (min-width:1920px) {
    .footer .footer-content .links ul a li {
        margin-left: 60em;
    }
    .footer .footer-content .links ul a li:hover {
        margin-left: 58em;
    }
}

@media screen and (min-width:2560px) {
    .footer .footer-content .links ul a li {
        margin-left: 75em;
    }
    .footer .footer-content .links ul a li:hover {
        margin-left: 74em;
    }
}

@media screen and (max-width:540px) {
    .footer .footer-content .links ul a li {
        margin-left: 15em;
    }
    .footer .footer-content .links ul a li:hover {
        margin-left: 14em;
    }
}

@media screen and (max-width:425px) {
    .footer .footer-content .footer-Section {
        padding: 0px;
        padding-top: 2em;
        margin-left: -4em;
    }
    .About p {
        margin-left: 2em;
        font-size: 5px;
    }
    .footer .footer-content .links ul a li {
        margin-left: 15em;
    }
    .footer .footer-content .links ul a li:hover {
        margin-left: 14em;
    }
}


@media screen and (max-width:320px) {
    .footer .footer-content .links ul a li {
        margin-left: 12em;
    }
    .footer .footer-content .links ul a li:hover {
        margin-left: 11em;
    }
}

    </style>
</head>
<body>
<header>
                <nav>
                    <input id="nav-toggle" type="checkbox">
                    <div class="logo">BikeRental</div>
                    <ul class="links">
                        <li><a href="./index.html">Home</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="./bike.html">Bikes</a></li>
                        <li><a href="#home">Contact Us</a></li>
                        <li><a href="#home" class="book">Book</a></li>
                    </ul>
                    <label for="nav-toggle" class="icon-burger">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </label>
                </nav>
 </header>
 <main>
        <!-- contact section -->
        <section id="contact-section">
            <div class="container">
                <h2>Contact Us</h2>
                <p>Fill the form for booking</p>

                <div class="contact-form">
                    <!-- first grid section -->
                    <div>
                        <i class="fa fa-map-marker"></i><span class="form-info">123 abc city</span><br>
                        <i class="fa fa-phone"></i><span class="form-info">+123123123</span><br>
                        <i class="fa fa-envelope"></i><span class="form-info">abcd1234@mail.com</span><br>
                    </div>
                    <!-- Second grid -->
                    <div>
                        <form id="myForm">

                            <input id="name" type="text" placeholder="Enter Name" required>
                            <input id="email" type="text" placeholder="Enter Email" required>
                             <input id="phone" type="text" placeholder=" Enter Phone number" maxlength="10" required> 
                            <input id="subject" type="text" placeholder=" Enter Subject" required> 
                            <textarea id="body" rows="5" placeholder="Type Message" required></textarea>
                             <button type="button" onclick="sendEmail()" value="Send An Email" class="submit">Submit</button> 
                        </form>
                    </div>
                </div>
            </div>
        </section>
</main>

<footer>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-Section About">
                    <h1 class="name-section">Bike Rental company</h1>
                    <p>
                        <!-- it contains the paragraph about the company-->
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid placeat corporis impedit ducimus distinctio nulla similique quos, animi incidunt, quasi molestias sint vel non recusandae. Vel explicabo nam itaque qui!
                    </p>
                </div>
                <div class="footer-Section links">
                    <ul>
                        <a href="#">
                            <li>Home</li>
                        </a>
                        <a href="#">
                            <li>About Us</li>
                        </a>
                        <a href="#">
                            <li>Bikes</li>
                        </a>
                        <a href="#">
                            <li>Contact Us</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p style="text-align: center;">Bike Rental &copy; 2020</p>
            </div>
        </div>
    </footer>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var phone = $("#phone");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body) && isNotEmpty(phone)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       phone:phone.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</body>
</html>