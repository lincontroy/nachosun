@extends('layouts.main')
@section('content')

<style>
    .kuccps-requirements {
        text-align: left;
        margin-left: 0;
    }

</style>

<!-- Slider Area -->
<section class="hero-slider style1">
    <div class="home-slider">
        <!-- Single Slider -->
        <div class="single-slider" style="background-image:url('about.webp')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-12">
                        <div class="hero-text">
                            <h1>Fast and Affordable Digital Solutions</h1>
                            <p>At Nachosun Ke-Nya Cyber, we offer document scanning, passport preparation, KRA PIN
                                retrieval, and other online services, all at unbeatable prices. Experience efficiency
                                and reliability with us.</p>
                            <div class="button">
                                <a href="#services" class="btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->

        <!-- Single Slider -->
        <div class="single-slider" style="background-image:url('student1.webp')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-12">
                        <div class="hero-text">
                            <h1>Effortless KRA PIN Retrieval</h1>
                            <p>Need help with KRA PIN services? We’ve got you covered. Nachosun Ke-Nya Cyber makes the
                                process quick and easy, from retrieval to password management.</p>
                            <div class="button">
                                <a href="#services" class="btn">Explore Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->

        <!-- Single Slider -->
        <div class="single-slider" style="background-image:url('hapyman.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-12">
                        <div class="hero-text">
                            <h1>Get Your Passport Ready in No Time</h1>
                            <p>We prepare passports from regular photos, making it simple and affordable. Visit Nachosun
                                Ke-Nya Cyber for fast, professional services that save you time.</p>
                            <div class="button">
                                <a href="#services" class="btn">View Our Work</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
    </div>
</section>
<!--/ End Slider Area -->


<!-- About Us Area -->
<section class="about-us section" id="about">
    <div class="container">
        <div class="row">
            <!-- About Image -->
            <div class="col-lg-6 col-md-6 col-12">
                <div class="about-image">
                    <img src="about.webp" alt="#">
                    <div class="experience">
                        <img class="bg-pattern" src="images/about/about-short-bg1.png" alt="#">
                        <h2>5 <span>Years Of Experience.</span></h2>
                    </div>
                </div>
            </div>
            <!-- / End About Image -->
            <!-- About Features -->
            <div class="col-lg-6 col-md-6 col-12">
                <div class="about-features">
                    <h2>About Nachosun Ke-Nya Cyber</h2>
                    <p>At Nachosun Ke-Nya Cyber, we are dedicated to providing affordable and efficient online services
                        to our clients. Established with the vision of simplifying access to digital solutions, we offer
                        a wide range of services including document scanning, passport preparation, and various
                        administrative support services.

                        Our team consists of highly trained professionals who prioritize customer satisfaction and
                        strive to deliver top-notch service. We understand the importance of quick and reliable
                        services, which is why we ensure that all our processes are streamlined to meet your needs
                        efficiently.</p>

                    <ul class="list">
                        <li><i class="fa fa-check" aria-hidden="true"></i> Our mission is to empower our clients with
                            easy access to essential online services while maintaining the highest standards of quality
                            and integrity. We aim to be your trusted partner in navigating the digital landscape.</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> We envision a future where every individual
                            has seamless access to online services, contributing to a more connected and informed
                            society.</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Your satisfaction is our top priority, and we
                            work hard to ensure a positive experience.</li>
                    </ul>

                </div>
            </div>
            <!--/ End About Features -->
        </div>
    </div>
</section>
<!--/ End About Us Area -->

<!-- Services -->
<section class="services section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="section-title">
                    <span class="title-bg">Our Services</span>
                    <h1><span>What We Do</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-6 col-12">
                <!-- Single Service -->
                <div class="single-service">

                    <img src="kuccps.png" width="100" height="100">

                    <h4><a href="#">KUCCPS APPLICATION</a></h4>
                    <p>
                        KUCCPS is a State Corporation that provides career guidance and selects students for admission
                        to universities, national polytechnics, technical training institutes and other accredited
                        higher learning institutions for Government of Kenya-sponsored programmes.
                        KUCCPS was established to coordinate the placement of Government-sponsored students to Kenyan
                        universities and colleges; develop and implement career guidance programmes; disseminate
                        information on available programmes; and collect and retain data relating to university and
                        college placement, among other functions. KUCCPS is the Government of Kenya body that undertakes
                        the selection of students for admission to higher learning institutions for Government
                        sponsorship.
                    </p>

                    <br><br>

                    <div class="kuccps-requirements">
                        <h2>Requirements for KUCCPS Application</h2>
                        <ol>
                            <li><strong>KCSE Index and KCSE Year</strong></li>
                            <li><strong>KCPE Index/Birth Certificate Number</strong></li>
                            <li><strong>Course Codes:</strong>
                                <ul>
                                    <li><strong>Degree:</strong>
                                        <ol>
                                            <li>The first three codes should be for the same course but different
                                                universities.</li>
                                            <li>Three additional codes for other different courses.</li>
                                        </ol>
                                    </li>
                                    <li><strong>Diploma:</strong>
                                        <ol>
                                            <li>Four codes for diploma courses, including KMTC diploma courses.</li>
                                        </ol>
                                    </li>
                                    <li><strong>Certificate:</strong>
                                        <ol>
                                            <li>Four codes for certificate courses, including KMTC certificate courses.
                                            </li>
                                        </ol>
                                    </li>
                                    <li><strong>Artisan:</strong> (Details to be provided)</li>
                                </ul>
                            </li>
                            <li><strong>Application Fee:</strong> KES 1,500 payable via eCitizen</li>
                            <li><strong>Nachosun Ke-nya Cyber Service Fee:</strong> KES 200</li>
                        </ol>

                        <br><br>

                        <h3>Important to Note</h3>
                        <p>You must choose courses with clusters below your cluster weight. Nachosun Ke-nya Cyber will
                            update you on how and where to get your cluster points average. A document containing
                            various cluster points will be available for you to select at your convenience.</p>
                        <p><strong>Note:</strong> There are approximately 3 revision phases that take place during the
                            application process.</p>
                    </div>

                </div>
                <!-- End Single Service -->
            </div>


        </div>

        <div class="row">
            <div class="col-lg-12 col-md-6 col-12">
                <!-- Single Service -->
                <div class="single-service">

                    <img src="kuccps.png" width="100" height="100">

                    <h4><a href="#">KUCCPS TRANSFERS</a></h4>
                    <p>
                        KUCCPS provides an opportunity to students who may wish to change their programmes and
                        institutions through the online system. The opening inter-institutional transfer will be
                        officially announced. To enable students transfer to courses of their choice and which they are
                        qualified for.
                    </p>

                    <br><br>

                    <div class="kuccps-requirements">
                        <h2>REQUIREMENTS FOR INTER-INSTITUTIONA TRANSFER</h2>
                        <ol>
                            <li><strong>KCSE Index and KCSE Year</strong></li>
                            <li><strong>KCPE Index/Birth Certificate Number</strong></li>
                            <li><strong>Course Code for the Course You Are Transferring To</strong></li>
                            <li><strong>Transfer Fee:</strong> KES 1,000 payable via eCitizen</li>
                            <li><strong>Nachosun Ke-nya Cyber Service Fee:</strong> KES 200</li>
                        </ol>

                        <br><br>

                    </div>

                </div>
                <!-- End Single Service -->
            </div>


        </div>

        <div class="row">
            <div class="col-lg-12 col-md-6 col-12">
                <!-- Single Service -->
                <div class="single-service">

                    <img src="Kra_Portal.webp" width="200" height="200">

                    <br><br>

                    <h4><a href="#">KRA PIN APPLICATION</a></h4>
                    <p>
                        kra is a unique personal identification number issued by kra.
                        who needs kra?
                        all Kenyans and no Kenyan citizens who generate income in kenya
                        importance of kra
                        it is requiren for financial and tax related activities eg opening bank account,filling
                        returns,registering a business,participating in gvmnt tenders,clearing goods at custom,applying
                        for permits and licenses

                    </p>

                    <br><br>

                    <div class="kuccps-requirements">
                        <h2>REQUIREMENTS FOR KRA APPLICATION</h2>
                        <ol>
                            <div class="nachosun-cyber-requirements" style="text-align: left;">

                                <ol>
                                    <li><strong>Identification Card Photograph</strong></li>
                                    <li><strong>Email Address</strong></li>
                                    <li><strong>Phone Number</strong></li>
                                    <li><strong>Nachosun Kenya Cyber Service Fee:</strong> KES 100</li>
                                </ol>
                            </div>

                        </ol>

                        <br><br>

                    </div>

                </div>
                <!-- End Single Service -->
            </div>


        </div>

        <div class="row">
            <div class="col-lg-12 col-md-6 col-12">
                <!-- Single Service -->
                <div class="single-service">

                    <img src="Kra_Portal.webp" width="200" height="200">

                    <br><br>

                    <h4><a href="#">KRA RETURNS</a></h4>
                    <p>
                        It is a requirement in the law - under the Income Tax Act. From your self-assessment, it enables
                        you to know how much KRA owes you, if any. Enables you to know if you have any tax due and if
                        so, how much.
                        NOTE: kra returns must be filled,without which as a citizen you will be penalized


                    </p>

                    <br><br>

                    <div class="kuccps-requirements">
                        <h2>REQUIREMENTS for kra returns</h2>
                        <ol>
                            <div class="nachosun-cyber-requirements" style="text-align: left;">

                                <ol>
                                    <li><strong>KRA PIN Certificate</strong></li>
                                    <li><strong>KRA PIN Password</strong></li>
                                    <li><strong>Active Email for Password Retrieval</strong></li>
                                    <li><strong>Nachosun Ke-nya Cyber Service Fee:</strong> KES 80</li>
                                </ol>
                            </div>

                        </ol>

                        <br><br>

                    </div>

                    <div class="kra-pin-retrieval-requirements" style="text-align: left;">
                        <h2>KRA PIN Retrieval Requirements</h2>
                        <ol>
                            <li><strong>Identification Card</strong></li>
                            <li><strong>Email Address</strong></li>
                            <li><strong>Nachosun Ke-nya Cyber Service Fee:</strong> KES 200</li>
                        </ol>
                    </div>


                </div>
                <!-- End Single Service -->
            </div>


        </div>

        <div class="row">
            <div class="col-lg-12 col-md-6 col-12">
                <!-- Single Service -->
                <div class="single-service">

                    <img src="lettes.webp" width="300" height="300">

                    <br><br>

                    <h4><a href="#">Universities admission letters</a></h4>
                    <p>
                        NACHOSUN KE-NYA CYBER generates admission letter at every man cormfot, different universities
                        have different requirements and processes of acquiring admission letters but basic requirements
                        are personal data ,kcse index and kcse year

                        STANDARD NACHOSUN KE-NYA CYBER is 120/=

                        A STUDENT SHOULD GET ATLEAST 5 LETTERS,THIS NUMBER CAN VARY DUE TO UNIVERSITY DIFFERENT
                        REQUIREMENTS


                    </p>

                    <br><br>




                </div>
                <!-- End Single Service -->
            </div>


        </div>

        <div class="row">
            <div class="col-lg-12 col-md-6 col-12">
                <!-- Single Service -->
                <div class="single-service">

                    <img src="helbdark.png" width="300" height="300">

                    <br><br>

                    <h4><a href="#">HIGHER EDUCATION FUNDING AND HELB LOAN APPLICATION</a></h4>
                    <div class="application-requirements" style="text-align: left;">
                        <h2>Requirements for Undergraduate & TVET Applications</h2>
                        <ol>
                            <li><strong>Applicant’s valid email address and a valid telephone number</strong></li>
                            <li><strong>Applicant’s KCPE and KCSE index numbers and year of examination</strong></li>
                            <li><strong>Applicant’s passport size photo</strong> (jpeg/jpg/png)</li>
                            <li><strong>Applicant’s copy of National ID/Maisha Card</strong> (both sides in PDF)</li>
                            <li><strong>Applicant’s valid bank details or MPESA number</strong> (registered under the
                                applicant’s name and ID number)</li>
                            <li><strong>Parents’ National ID and registered telephone number</strong></li>
                            <li><strong>Copy of Parent’s death certificate</strong> (if deceased, in PDF)</li>
                            <li><strong>Applicant’s birth certificate</strong> (if applying as a minor, in PDF)</li>
                            <li><strong>Two guarantors’ ID numbers and registered telephone numbers</strong> (can be
                                parents)</li>
                            <li><strong>Copy of sponsorship letter</strong> (in PDF, if sponsored in secondary school)
                            </li>
                            <li><strong>Nachosun Ke-nya Cyber Service Fee:</strong> KES 450</li>
                        </ol>
                    </div>
                    <h3>
                        <p>
                            The gvnment scholarship classifies student into 5 diffenrent band which are as follows
                        </p>


                        <img src="unifinance.png">

                    </h3>


                    <br><br>




                </div>
                <!-- End Single Service -->
            </div>


        </div>
    </div>
</section>
<!-- End Services -->


<!-- Start Consultation  -->
<section class="consultation section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                
                    <h2>Get in Touch with Nachosun Ke-Nya Cyber</h2>
                    <br>
                    <p>We're here to assist you with all your digital service needs, from KRA PIN
                        retrieval to document scanning and more. Reach out to us via the following
                        methods, and let us help make your experience smooth and efficient.</p>
                        <br><br>

                    <div class="contact-details">
                        <h4>Our Contact Information:</h4>
                        <ul>
                            <li><strong>Phone:</strong> +254 700 123 456</li>
                            <li><strong>Email:</strong> <a
                                    href="mailto:info@nachosuncyber.co.ke">info@nachosuncyber.co.ke</a>
                            </li>
                            <li><strong>Address:</strong> 123 Nairobi Street, Nairobi, Kenya</li>
                        </ul>
                    </div>

                    <br><br>

                    <div class="business-hours">
                        <h4>Business Hours:</h4>
                        <ul>
                            <li>Monday to Friday: 9:00 AM – 6:00 PM</li>
                            <li>Saturday: 10:00 AM – 4:00 PM</li>
                            <li>Sunday: Closed</li>
                        </ul>
                    </div>

                    
                </div>


          
            <div class="col-lg-6 col-md-6 col-12">
                <div class="consultation-image">
                    <img src="contact.png" alt="#">
                    <div class="support">
                        <img class="bg-pattern" src="images/about/about-short-bg1.png" alt="#">
                        <h2>24/7 <span>We try to support.</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Consultation  -->

<!-- Testimonial Area -->
<section class="testimonial section" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="section-title">
                    <span class="title-bg">Testimonials</span>
                    <h1><span>What Client Says</span>Reviews from clients</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-12">
                <div class="testimonial-inner">
                    <div class="testimonial-slider owl-carousel">
                        <!-- Start Single Slider -->
                        <div class="single-slider">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <h2>John Mwangi <span>Cyber Security Specialist</span></h2>
                            <p>Nachosun Cyber has been instrumental in helping me secure my business. Their services are
                                professional, reliable, and timely. I highly recommend them for any cyber security
                                needs.</p>
                        </div>
                        <!-- End Single Slider -->
                        <!-- Start Single Slider -->
                        <div class="single-slider">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <h2>Wanjiku Kamau <span>IT Consultant</span></h2>
                            <p>I’ve been working with Nachosun Cyber for over a year, and I’ve always been impressed by
                                their attention to detail and commitment to client satisfaction. Their expertise is
                                top-notch!</p>
                        </div>
                        <!-- End Single Slider -->
                        <!-- Start Single Slider -->
                        <div class="single-slider">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <h2>Joseph Otieno <span>Entrepreneur</span></h2>
                            <p>Nachosun Cyber's services have significantly improved our business operations by
                                safeguarding our online presence. Their support is excellent, and I highly appreciate
                                their work.</p>
                        </div>
                        <!-- End Single Slider -->
                        <!-- Start Single Slider -->
                        <div class="single-slider">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <h2>Faith Kiplagat <span>Freelance Web Developer</span></h2>
                            <p>The team at Nachosun Cyber is professional and efficient. Their cybersecurity solutions
                                have helped me protect my client websites from potential threats. I'm very satisfied
                                with their service.</p>
                        </div>
                        <!-- End Single Slider -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Testimonial Area -->
@endsection
<!-- /End Clients Area -->
