<?php require_once "SendMailSmtpClass.php"; // подключаем класс ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style-1.css">
    <title>Employment Agency Staffing Agency Recruitment Agency</title>
</head>
<body>
    <a href="#" id="back-top"> &#x2B06;</a>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img class="logo" src="img/Logo-Main.png" alt="placement services recruitment services staffing agencies staffing agency
                    recruitment agency recruitment agencies"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#why-us">Why Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#benefits">Benefits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#hiring">Hiring?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacts">Contacts</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container">
            <section class="paddings">
                <div id="fadeIn" class="margin-auto">
                    <h1 id="why-us" class="header-1 display-3 text-center h1-color text-danger pb-5">Why work with us?</h1>
                    <p class="text-info text-justify large-p">Our agency has a large database of candidates who possess knowledge of two commercial languages, English and Russian, experience in many fields such as hospitality, retail and many others. Many of them have experience working abroad. "Horizon" employment agency can offer our best suited talent to your company.
                    </p>
                    <p class="text-info text-justify large-p">
                        Below are the main three reasons why you should consider working with us and use our services to assist you with solving your company's hiring needs.
                    </p>
			</section>
			<section class="paddings">
                    <div id="benefits" class="advantages clearfix d-flex flex-column w-30 float-left pt-5">
                        <img src="./img/money.jpg" class="m-auto" alt="hire recruitment staffing agency vacancies vacancy placement services recruitment services staffing agencies staffing agency
                    recruitment agency recruitment agencies">
                        <h3 class="text-center pt-3 text-custom2">Save Money</h3>
                        <p class="text-justify www font-weight-light">Working with our employment agency can actually save your organization's expenses
                            in many areas that your company may not have considered. Rather than paying for an expensive advertisement on a national job board,
                            as well as the costs associated with pre-screening assessments, such as skill tests, employment and background checks, you can work with our
                            agency that will take over these steps. You can be confident that candidates we offer are suitable for certain positions. Our agency can bring
                            you applicants who completed these prerequisites and have been pre-screened in a professional manner by our highly qualified recruitment specialists.
                        </p>
                    </div>
                    <div class="advantages clearfix d-flex flex-column w-30 float-left m-customized pt-5">
                        <img src="./img/clock.png" class="m-auto" alt="hire recruitment staffing agency vacancies vacancy placement services recruitment services staffing agencies staffing agency
                    recruitment agency recruitment agencies">
                        <h3 class="text-center pt-3 text-custom">Save Time</h3>
                        <p class="text-justify www font-weight-light">While most employees give at least two weeks to one month notice when resigning,
                            some staff quit on the spot or have to be terminated quickly. When this happens, organizations can lose productivity. Remaining employees may
                            feel overloaded with work if they need to take on additional responsibilities for extended periods of time. For most positions, our agency will
                            have pre-screened and qualified individuals who can be at a company's worksite within a short period of time.
                        </p>
                    </div>
                    <div class="advantages clearfix d-flex flex-column w-30 float-left pt-5 last-child">
                        <img src="./img/energy.png" class="m-auto" alt="hire recruitment staffing agency vacancies vacancy placement services recruitment services staffing agencies staffing agency
                    recruitment agency recruitment agencies">
                        <h3 class="text-center pt-3 text-custom3">Save Energy</h3>
                        <p class="text-justify www font-weight-light">Your HR team may have many other duties, including payroll, benefits and hiring. Your HR representative
                            might spend days going through hundreds of unqualified resumes to assess and pre-screen a handful of qualified candidates. Despite high number of applicants,
                            not all of them are competent enough for a specific job opening. We can bring qualified candidates who speak two commercial languages (Russian and English),
                            and have presentable appearance and suitable set of skills for a job position. We can efficiently work together, become long-term business partners and be
                            the leaders in recruitment field in the Middle East.
                        </p>
                    </div>
                </div>
			</section>	
            </section>
            <section id="hiring" class="paddings-2 wrapper">
                <div>
                    <div class="fade-in">
                        <h1 class="display-3 text-center pt-2 text-danger">Are you looking to hire?</h1>
                        <p class="display-4 text-center pt-3 text-info">Tell us about your hiring requirements</p>
                    </div>
                    <?php sendmymail()?>
                </div>
            </section>

            <section id="contacts" class="paddings-2">
                <div class="fade-in">
                    <div class="w-50 ml-auto mr-auto width-sm-100">
                        <p class="display-4 text-center pt-5 text-danger">Our Contacts:</p>
                        <p class="h3 text-center pt-3 text-info"><img src="img/phone.png" class="icons" alt="placement services recruitment services staffing agencies staffing agency
                    recruitment agency recruitment agencies"> +996 706 45 45 27</p>
                        <p class="h3 text-center pt-3 text-info"> <img src="img/mail.png" class="icons" alt="placement services recruitment services staffing agencies staffing agency
                    recruitment agency recruitment agencies"> horizon.pro.recruitment@gmail.com</p>
                        <p class="h3 text-center pt-3 text-info"> <img src="img/location.png" class="icons" alt="placement services recruitment services staffing agencies staffing agency
                    recruitment agency recruitment agencies">Isanova 5 street, Bishkek, Kyrgyzstan</p>
                    </div>
                </div>
            </section>
        </div>
        <footer></footer>
</body>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</html>