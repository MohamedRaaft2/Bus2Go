<style>
    body, html{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
    scroll-behavior: smooth;
    }

            /* Fonts */
:root {
  --font-default: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-primary: "Montserrat", sans-serif;
  --font-secondary: "Raleway", sans-serif;
}
    
/* Colors */
:root {
  --color-default: #2b180d;
  --color-primary: #56b8e6;
  --color-secondary: #1b2f45;
}

/* Smooth scroll behavior */
:root {
  scroll-behavior: smooth;
}

    *, *::after, *::before{
        box-sizing: inherit;
    }
    .link-light{
        text-decoration: none;
    }

    .searchQuery{
        position: relative;
    }

    .sugg{
        position: absolute;
        width: 100%;
        z-index: 1;
        background-color: white;
        max-height: 179px;
        overflow: auto;
    }

    .sugg li{
        list-style-type: none;
        padding: 0;
        text-align: left;
        padding: 0.3rem;
        text-transform: capitalize;
        border-style: solid; 
        border-color: black;
        border-width: 0 2px 2px 2px;
        border-radius: 5px;
    }

    .sugg li:hover{
        background-color: #efefef;
        cursor: pointer;
    }



    .hl{
        background-color: #ddbea9;
    }



    /*--------------------------------------------------------------
# Scroll top button
--------------------------------------------------------------*/
.scroll-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 99999;
  background: var(--color-primary);
  width: 40px;
  height: 40px;
  border-radius: 4px;
  transition: all 0.4s;
}

.scroll-top i {
  font-size: 24px;
  color: #fff;
  line-height: 0;
}

.scroll-top:hover {
  background: rgba(86, 184, 230, 0.8);
  color: #fff;
}

.scroll-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
#preloader {
  position: fixed;
  inset: 0;
  z-index: 9999;
  overflow: hidden;
  background: #fff;
  transition: all 1ms ease-out;
}

#preloader:before {
  content: "";
  position: fixed;
  top: calc(50% - 30px);
  left: calc(50% - 30px);
  border: 6px solid var(--color-primary);
  border-top-color: #fff;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  animation: animate-preloader 1s linear infinite;
}

@keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}
/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}


    /* Overriding Bootstrap */
    nav a:hover{
        color: black;
    }
    nav{
        text-align: center;
        padding: 1.5rem 0;
    }

    nav div, nav ul{
        margin-top: 1rem;
    }

    nav div:first-child{
        margin-top: 0;
    }

    nav > div a{
        display: block;
    }

    nav ul{
        list-style-type: none;
        padding: 0;
        margin-bottom: 0;
    }

    nav a{
        padding-bottom: 0.2rem;
        text-decoration: none;
        color: black;
        font-weight: bold;
        text-transform: uppercase;
    }

    nav a:not(.nav-logo):hover{
        text-decoration: underline;
    }

    .nav-logo{
        color:black;
        letter-spacing: 2px;
        transition: none;
        font-size:x-large;
        font-weight: 800;
        padding-left: -60px;
    }

    /* Alert Message on top of the header */
    .alert{
        z-index: 3;
        border-radius: 0px;
    }


    #home{
        height: 70vh;
        background-image: url("assets/img/sbtbsimg.png");
        background-size: cover;
        background-position: 0% 65%;;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #route-search-form{
        width: 50%;
        padding: 1rem 0.5rem;
        color: black;
        position: relative;
        z-index: 1;
    }

    #route-search-form::before{
        content: "";
        position: absolute;
        top: 0%;
        left: 0%;
        height: 100%;
        width: 100%;
        background-color: white;
        z-index: -1;
        opacity: 0.6;
    }


    #route-search-form h1{
        margin-top: 0;
        text-align: center;
        color: black;
    }

    form{
        padding: 0 0.5rem;
        font-weight: bold;
    }

    #route-search-form > div{
        margin: 1rem 0;
    }

    form input, form textarea{
        border: 2px solid black;
        outline: none;
        width: 100%;
        font-size: inherit;
        border-radius: 5px;
        padding-left: 0.3rem;
    }


    #route-search-form form input{
        margin-top: 0.8rem;
    }


    #route-search-form form div:last-child{
        text-align: center;
    }

    form button{ 
        border:2px solid;
        padding: 0.3rem 0.7rem;
        font-weight: bolder;
        background-color: transparent;
        transition: background-color 800ms, color 800ms;
        border-radius: 4px;
    }

    form button:hover{
        background-color: #fff;
        color: #201E22;
        cursor: pointer;
    }

    #info-num{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    #info-num figure{
        flex-basis: 30%;
        padding: 2rem 0;
        text-align: center;
        border-radius: 5px;
    }

    #info-num figcaption{
        margin-top: 1rem;
        text-transform: uppercase;
    }

    #info-num .num{
        display: block;
        margin-bottom: 0.3rem;
        font-size: 1.2rem;
        font-weight: 800;
    }

    #pnr-enquiry{
        height: 80vh;
        background-image: url("assets/img/buscv.jpg");
        background-size: cover;
        background-position: 50% 50%;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    #pnr-form{
        padding: 4rem 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        position: relative;
        z-index: 1;
    }

    #pnr-form form{
        width: 70%;
    }

    #pnr-form input{
        width: 100%;
    }

    #pnr-form::before{
        content: "";
        position: absolute;
        height: 100%;
        width: 100%;
        right: 0%;
        background-color: black;
        border-radius: 10px;
        z-index: -1;
        opacity: 0.5;
    }

    #pnr-form div{
        margin: 1rem auto;
        width: 90%;
    }

    #pnr-form button{
        font-weight: bold;
        font-size: 14px;
        padding: 0.3rem 0.7rem;
        text-transform: uppercase;
        border: 3px solid;
        border-radius: 5px;
        color: #212529;
        background-color: #CCD3DD;
        transition: background-color 400ms;
    }

    #pnr-form button:hover{
        background-color: #ebecee;
        cursor: pointer;
    }

    #about{
        text-align: center;
        padding: 3rem 0;
        background-color: #e5e5e5;
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #about h1{
        margin: 0;
    }

    #about p{
        line-height: 26px;
    }

  /*--------------------------------------------------------------
# Contact Section
--------------------------------------------------------------*/
.contact {
  background: url("../img/contact-bg.png") left top no-repeat;
  background-size: contain;
  position: relative;
}

@media (max-width: 640px) {
  .contact {
    background-position: center 50px;
  }
}

.contact:before {
  content: "";
  background: rgba(255, 255, 255, 0.7);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

.contact .info-item+.info-item {
  margin-top: 40px;
}

.contact .info-item i {
  font-size: 20px;
  background: var(--color-primary);
  color: #fff;
  width: 44px;
  height: 44px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
  margin-right: 15px;
}

.contact .info-item h4 {
  padding: 0;
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 5px;
  color: #1c88ba;
}

.contact .info-item p {
  padding: 0;
  margin-bottom: 0;
  font-size: 14px;
}

.contact .php-email-form {
  width: 100%;
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #df1529;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #059652;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #059652;
  border-top-color: #fff;
  animation: animate-loading 1s linear infinite;
}
@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}
.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  padding: 12px 15px;
}

.contact .php-email-form input:focus,
.contact .php-email-form textarea:focus {
  border-color: var(--color-primary);
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type=submit] {
  background: #1f98d1;
  border: 0;
  padding: 12px 40px;
  color: #fff;
  transition: 0.4s;
}

.contact .php-email-form button[type=submit]:hover {
  background: var(--color-primary);
}





    footer{
        padding: 1rem 0;
        text-align: center;
        font-weight: bold;
    }

    footer p{
        margin: 0;
    }

    .pnr-details{
        list-style-type: none;
        padding: 0;
    }

    .nav-scroll{
        position: fixed;
        background-color: white;
    }

    /* Tablet */
    @media only screen and (min-width: 784px){
        

        header{
            position: absolute;
            display: block;
            top: 0;
            width: 100%;
            z-index: 2;
            transition: background-color 500ms;
        }
        nav{
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin: 0 auto;
            padding: 0.5rem;
        }

        nav > div{
            display: flex;
            align-items: center;
            flex-grow: 1;
            justify-content: center;
        }

        nav ul{
            display: flex;
            flex-grow: 1;
            justify-content: center;
        }

        nav div, nav ul{
            margin-top: 0;
        }
        
        nav a{
            border-bottom: 2px solid transparent;
            margin: 0 1rem;
            transition: border-color 800ms;
            border-radius: 2px;
        }

        nav a:not(.nav-logo):hover{
            border-color: black;
            text-decoration: none;
        }

        #home{
            height: 100vh;
            background-position: 40% 65%;
            background-attachment: fixed;
            display: block;
        }

            
        #route-search-form{
            position: absolute;
            top: 28%;
            right: 10%;
            width: 20rem;
            padding: 1rem 2rem;
        }


        #route-search-form h1{
            margin-top: 0;
            text-align: center;
        }

        form{
            padding: 0 0.5rem;
            font-weight: bold;
        }

        #route-search-form form > div{
            margin: 1rem 0;
        }

        #block{
            width: 100%;
        }


    }


    /* Desktops */
    @media only screen and (min-width: 992px){
        /* Alert Message on top of the header */
        .alert{
            position: absolute;
           width: 100%;
            z-index: 3;
            border-radius: 0px;
        }

        .alert-dark{
            width: 50%;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 1px;
        }

        nav{
            width: 80%;
        }

        #home{
            background-position: 60% 65%;
        }


        #route-search-form{
            position: absolute;
            top: 14%;
            right: 15%;
            width: 60rem;
            padding: 2.5rem 2rem;
        }

        #block{
            width: 90%;
            margin: 0 auto;
        }

        #info-num figure{
            flex-basis: 15%;
        }

        #pnr-enquiry{
            height: 50vh;
        }

        #pnr-form{
            width: 50%;
        }

        #about{
            height: auto;
            padding: 2rem;
        }
        #about div{
            width: 50%;
        }

        #contact-form{
            width: 438px;
            margin: 0 auto;
        }
    }

    /*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
.footer {
  font-size: 14px;
}

.footer .footer-content {
  background-color: #f7f9fc;
  background-size: contain;
  padding: 60px 0 30px 0;
}

.footer .footer-content .footer-info {
  margin-bottom: 30px;
}

.footer .footer-content .footer-info .logo {
  line-height: 0;
  margin-bottom: 25px;
}

.footer .footer-content .footer-info .logo img {
  max-height: 40px;
  margin-right: 6px;
}

.footer .footer-content .footer-info .logo span {
  font-size: 30px;
  font-weight: 700;
  letter-spacing: 1px;
  color: var(--color-secondary);
  font-family: var(--font-secondary);
  margin-top: 3px;
}

.footer .footer-content .footer-info p {
  font-size: 15px;
  margin-bottom: 0;
  font-family: var(--font-primary);
  color: var(--color-secondary);
}

.footer .footer-content .social-links a {
  font-size: 14px;
  line-height: 0;
  display: inline-block;
  width: 32px;
  height: 32px;
  color: rgba(27, 47, 69, 0.5);
  margin-right: 10px;
  transition: 0.3s;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: var(--color-primary);
  color: #fff;
  border-radius: 50px;
}

.footer .footer-content .social-links a:hover {
  background-color: #38618e;
}

.footer .footer-content h4 {
  font-size: 16px;
  font-weight: bold;
  color: #29486a;
  position: relative;
  padding-bottom: 12px;
}

.footer .footer-content .footer-links {
  margin-bottom: 30px;
}

.footer .footer-content .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer .footer-content .footer-links ul i {
  margin-right: 2px;
  color: var(--color-primary);
  font-size: 16px;
  line-height: 0;
}

.footer .footer-content .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

.footer .footer-content .footer-links ul li:first-child {
  padding-top: 0;
}

.footer .footer-content .footer-links ul a {
  color: #31547c;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

.footer .footer-content .footer-links ul a:hover {
  color: var(--color-primary);
}

.footer .footer-content .footer-contact p {
  line-height: 26px;
  display: inline;
  color: var(--color-secondary);
}

.footer .footer-legal {
  background: #fff;
  padding: 30px 0;
}

.footer .footer-legal .copyright {
  text-align: center;
  color: var(--color-secondary);
}

.footer .footer-legal .credits {
  padding-top: 4px;
  text-align: center;
  font-size: 13px;
  color: var(--color-secondary);
}
</style>