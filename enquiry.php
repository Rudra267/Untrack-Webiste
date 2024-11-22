<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- Site Title -->
    <title>OnTrack Energy </title>

    <!-- Place favicon.ico in the root directory -->
    <!-- <link rel="apple-touch-icon" href="images/fav.svg"> -->
    <link rel="apple-touch-icon" href="images/about/ontrack-fav.jpg">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="images/fav.svg"> -->
    <link rel="shortcut icon" type="image/x-icon" href="images/about/ontrack-fav.jpg">

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome-pro.min.css">
    <link rel="stylesheet" href="css/flaticon_solar_plus.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/odometer.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <!-- START HEADER -->
   <?php include 'includes/header.php' ?>
   <!-- END HEADER -->

    <main class="site-content ">
        <!--=========== Breadcrumb Start =========-->
        <section class="breadcrumb-wrapper" data-bg-image="images/banner/breadcrumb-background.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content-area">
                            <div class="breadcrumb-heading">
                                <h1 class="breadcrumb-title">Enquiry</h1>
                            </div>
                            <div class="breadcrumb-link">
                                <span>
                                    <a href="index.php">
                                        <span>Home</span>
                                    </a>
                                </span>
                                <i class="fa-light fa-angle-right"></i>
                                <span>
                                    <span>Contact Us</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=========== Breadcrumb End =========-->

        <!-- enquiry from starts  -->
         
       <section class="contact contact-1 bg-overlay bg-overlay-theme" id="contact-1">
        <!--<div class="bg-section"><img src="images/3.jpg" alt="background"/></div>-->
        <div class="container">
          <div class="contact-panel contact-panel-3">
            <!-- <div class="heading heading-light heading-6">
              <p class="heading-subtitle">Improving The Performance Of Solar Energy.</p>
              <h2 class="heading-title">Discover Independence Through Using The Power Of Solar Panels!</h2>
              <p class="heading-desc">We offer products, solutions, and services across the entire energy value chain. We support our customers on their way to a more sustainable future – no matter how far along the journey to energize society with affordable energy systems.</p>
              <div class="advantages-list-holder">
                <div class="row"> 
                  <div class="col-12 col-lg-6">
                    <ul class="list-unstyled advantages-list advantages-list-2">
                      <li>Reliabe and performance</li>
                      <li>Solar material financing</li>
                      <li>In-time manufacturing</li>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-6">
                    <ul class="list-unstyled advantages-list advantages-list-2">
                      <li>50% more energy output</li>
                      <li>Built using ntype mono</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="contact-action"><a class="btn btn--white" href="page-about.html">learn more <i class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white" href="page-faqs.html">our core values</a></div>
              <div class="contact-quote"> <img src="assets/images/icons/noteicon.png" alt="icon"/>
                <p>Receive an accurate quote within 3-5 days when you fill out this form. Or, give us a call: <a href="tel:01061245741">(002) 01061245741</a></p>
              </div>
            </div> -->
            <div class="contact-card">
              <div class="contact-body">
                <h5 class="card-heading">Service/Quote Form</h5>
                <p class="card-desc">We take great pride in everything that we do, control over products allows us to ensure our customers receive the best quality service.</p>
                <form class="contactForm" method="post" action="https://iark.in/san/ontrack-latest/save-data.php">
                  <div class="row">
                    <div class="col-12 col-md-4 align-self-end offset-md-8">
                        <label class="form-label" for="">Date & Time</label>
                        <input class="form-control" type="datetime-local" id="service_request_date" name="service_request_date" placeholder="" required=""/>
                    </div>

                    <span class="new-rv">Request a Service/Quote</span>
                    <div class="col-12 col-md-4">
                      <label class="form-label" for="select-2">Full Name :</label>
                      <input class="form-control" type="text" id="name" name="name" placeholder="Full Name" required=""/>
                    </div>
                    <div class="col-12 col-md-4">
                      <label class="form-label" for="select-2">Name of the Company :</label>
                      <input class="form-control" type="text" id="company_name" name="company_name" placeholder="Company Name" required=""/>
                    </div>
                    <div class="col-12 col-md-4">
                      <label class="form-label" for="select-2">Phone :</label>
                      <input class="form-control" type="text" id="phone" name="phone" placeholder="Phone Number" required=""/>
                    </div>

                    <span class="new-rv">Address</span>
                    <div class="col-12 col-md-4">
                      <label class="form-label" for="select-2">Present Address :</label>
                      <input class="form-control" type="text" id="address" name="address" placeholder="Full Name" required=""/>
                    </div>
                    <div class="col-12 col-md-4">
                      <label class="form-label" for="select-2">The City :</label>
                      <input class="form-control" type="text" id="city" name="city" placeholder="Company Name" required=""/>
                    </div>
                    <div class="col-12 col-md-4">
                      <label class="form-label" for="select-2">Zip Code :</label>
                      <input class="form-control" type="text" id="zipcode" name="zipcode" placeholder="Phone Number" required=""/>
                    </div>



                    <span class="new-rv">Nature of Service</span>
                    <div class="col-12">
                      <!-- <label class="form-label"></label> -->
                      <div class="custom-radio-group" id="custom-radio-group">
                        <div class="custom-control">
                          <input class="custom-control-input" type="radio" id="customRadioInline1" name="nature_of_service"/>
                          <label for="customRadioInline1">Installation & Commissioning                        </label>
                        </div>
                        <div class="custom-control">
                          <input class="custom-control-input" type="radio" id="customRadioInline2" name="nature_of_service"/>
                          <label for="customRadioInline2">Prev. Maintenance</label>
                        </div>
                        <div class="custom-control">
                          <input class="custom-control-input" type="radio" id="customRadioInline3" name="nature_of_service"/>
                          <label for="customRadioInline3">Break down call</label>
                        </div>
                        <div class="custom-control">
                          <input class="custom-control-input" type="radio" id="customRadioInline4" name="nature_of_service"/>
                          <label for="customRadioInline4">Site visit</label>
                        </div>
                        <div class="custom-control">
                          <input class="custom-control-input" type="radio" id="customRadioInline5" name="nature_of_service"/>
                          <label for="customRadioInline5">Battery Test</label>
                        </div>
                      </div>
                    </div>

                    <!--<div class="col-12 col-md-12">
                      <label class="form-label" for="select-2">Name :</label>
                      <input class="form-control" type="text" id="contact-usage" name="contact-usage" placeholder="Full Name" required=""/>
                    </div>-->
                    <!-- 
                    <div class="col-12 col-md-4">
                      <label class="form-label" for="select-1">Customer</label>
                      <select class="form-control" id="select-1">
                        <option value="default">Select</option>
                        <option value="AL">Existing Customer</option>
                        <option value="AL">New Customer</option>
                      </select>
                    </div>

                    <div class="col-12 col-md-4">
                      <label class="form-label" for="select-1">Nature of Service</label>
                      <select class="form-control" id="select-1">
                        <option value="default">Select</option>
                        <option value="AL">Installation & Commissioning</option>
                        <option value="AL">Prev. Maintenance</option>
                        <option value="AL">Break down call</option>
                        <option value="AL">Site visit</option>
                        <option value="AL">Battery Test</option>
                       
                      </select>
                    </div>
                    <div class="col-12 col-md-4">
                      <label class="form-label" for="select-2">Name</label>
                      <input class="form-control" type="text" id="contact-usage" name="contact-usage" placeholder="enter manually" required=""/>
                      <select class="form-control" id="select-2">
                        <option value="default">3:6 months</option>
                        <option value="AL">6:12 months</option>
                        <option value="AK">12:24 months</option>
                      </select>
                    </div> -->

                    <div class="col-12 col-md-4">
                      <label class="form-label" for="product">Products :</label>
                      <select class="form-control" id="product" name="product">
                        <option value="default">Select</option>
                        <option value="UPS">UPS</option>
                        <option value="Inverter">Inverter</option>
                        <option value="Battery">Battery</option>
                        <option value="Life Invertor">Life Invertor</option>
                        <option value="IMPU">IMPU</option>
                      </select>
                    </div>
                    <div class="col-12 col-md-4">
                      <label class="form-label" for="ups">UPS :</label>
                      <select class="form-control" id="ups" name="ups">
                        <option value="default">Select</option>
                        <option value="Socomec">Socomec</option>
                        <option value="Vertiv">Vertiv</option>
                        <option value="APC/Schneider">APC/Schneider</option>
                        <option value="Power One">Power One</option>
                        <option value="ProstarM">ProstarM</option>
                        <option value="Fuji">Fuji</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                    <div class="col-12 col-md-4">
                      <label class="form-label" for="invertor">Invertor :</label>
                      <select class="form-control" id="invertor" name="invertor">
                        <option value="default">Select</option>
                        <option value="Microtek">Microtek</option>
                        <option value="Luminous">Luminous</option>
                        <option value="UTL">UTL</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label class="form-label" for="contact-usage">Model Name</label>
                        <input class="form-control" type="text" id="model_name" name="model_name" placeholder="enter manually" required=""/>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="form-label" for="contact-usage">Rating</label>
                        <input class="form-control" type="text" id="rating" name="rating" placeholder="enter manually" required=""/>
                      </div>
                    <div class="col-12 col-md-4">
                      <label class="form-label" for="battery">Batteries</label>
                      <select class="form-control" id="battery" name="battery">
                        <option value="default">Select</option>
                        <option value="Amaron-Quanta">Amaron-Quanta</option>
                        <option value="Exide">Exide</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                    <div class="col-12 col-md-4">
                      <label class="form-label" for="battery_ratings">Battery Ratings</label>
                      <select class="form-control" id="battery_ratings" name="battery_ratings">
                        <option value="default">Select</option>
                        <option value="Volt/AH">Volt/AH</option>
                        <option value="12V/7AH SMF">12V/7AH SMF</option>
                        <option value="12V/18AH SMF">12V/18AH SMF</option>
                        <option value="12V/26AH SMF">12V/26AH SMF</option>
                        <option value="12V/42AH SMF">12V/42AH SMF</option>
                        <option value="12V/65AH SMF">12V/65AH SMF</option>
                        <option value="12V/75AH SMF">12V/75AH SMF</option>
                        <option value="12V/100AH SMF">12V/100AH SMF</option>
                        <option value="12V/120AH SMF">12V/120AH SMF</option>
                        <option value="12V/150AH SMF">12V/150AH SMF</option>
                        <option value="12V/200AH SMF">12V/200AH SMF</option>
                      </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label class="form-label" for="quantity">Quantity</label>
                        <input class="form-control" type="text" id="quantity" name="quantity" placeholder="enter manually" required=""/>
                    </div>
                    <div class="col-12 col-md-4">
                        <label class="form-label" for="strings">Strings</label>
                        <select class="form-control" id="strings" name="strings">
                          <option value="default">Select</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                         
                        </select>
                      </div>
                      <!-- <div class="col-12 col-md-6">
                        <label class="form-label" for="select-3">Contract Type</label>
                        <select class="form-control" id="select-3">
                          <option value="default">Select</option>
                          <option value="AL">Warranty </option>
                          <option value="AL">CAMC </option>
                          <option value="AL">OOW</option>
                          <option value="AL">Call basis</option>
                         
                        </select>
                      </div> -->
                      <div class="col-12">
                      <label class="form-label">A/C Available</label>
                      <div class="custom-radio-group" id="custom-radio-group">
                        <div class="custom-control">
                          <input class="custom-control-input" type="radio" id="customRadioInline6" name="ac_availability"/>
                          <label for="customRadioInline6">Yes                      </label>
                        </div>
                        <div class="custom-control">
                          <input class="custom-control-input" type="radio" id="customRadioInline7" name="ac_availability"/>
                          <label for="customRadioInline7">No</label>
                        </div>
                        <!-- <div class="custom-control">
                          <input class="custom-control-input" type="radio" id="customRadioInline3" name="customRadioInline1"/>
                          <label for="customRadioInline3">Others</label>
                        </div> -->
                      </div>
                    </div>

                      <!-- <div class="col-12 col-md-4">
                        <label class="form-label" for="select-3">A/C Available</label>
                        <select class="form-control" id="select-3">
                          <option value="default">Select</option>
                          <option value="AL">Yes </option>
                          <option value="AL">No</option>     
                        </select>
                      </div> -->
                      <div class="col-12 col-md-4">
                            <label class="form-label" for="ac_capacity">A/C Capacity</label>
                            <input class="form-control" type="text" id="ac_capacity" name="ac_capacity" placeholder="enter manually" required=""/>
                      </div>


                      <div class="col-12">
                      <label class="form-label">DG Available</label>
                      <div class="custom-radio-group" id="custom-radio-group">
                        <div class="custom-control">
                          <input class="custom-control-input" type="radio" id="customRadioInline8" name="dg_availability"/>
                          <label for="customRadioInline8">Yes</label>
                        </div>
                        <div class="custom-control">
                          <input class="custom-control-input" type="radio" id="customRadioInline9" name="dg_availability"/>
                          <label for="customRadioInline9">No</label>
                        </div>
                      </div>
                    </div>
                      <!-- <div class="col-12 col-md-4">
                        <label class="form-label" for="select-3">DG Available</label>
                        <select class="form-control" id="select-3">
                          <option value="default">Select</option>
                          <option value="AL">Yes </option>
                          <option value="AL">No</option>     
                        </select>
                      </div> -->
                      <div class="col-12 col-md-4">
                            <label class="form-label" for="select-2">D/G Capacity</label>
                            <input class="form-control" type="text" id="dg_capacity" name="dg_capacity" placeholder="enter manually" required=""/>
                      </div>
                      <!-- <div class="col-12 col-md-6">
                        <label class="form-label" for="select-3">Environment-Dust Level                        </label>
                        <select class="form-control" id="select-3">
                          <option value="default">Select</option>
                          <option value="AL">Low</option>
                          <option value="AL">Medium</option>     
                          <option value="AL">High</option>     
                        </select>
                      </div> -->
                     




                    <div class="col-12">
                      <label class="form-label">Load Type</label>
                      <div class="custom-radio-group" id="custom-radio-group">
                        <div class="custom-control">
                          <input class="custom-control-input" type="radio" id="customRadioInline10" name="load_type"/>
                          <label for="customRadioInline10">IT                        </label>
                        </div>
                        <div class="custom-control">
                          <input class="custom-control-input" type="radio" id="customRadioInline11" name="load_type"/>
                          <label for="customRadioInline11">Industrial</label>
                        </div>
                        <div class="custom-control">
                          <input class="custom-control-input" type="radio" id="customRadioInline12" name="load_type"/>
                          <label for="customRadioInline12">Others</label>
                        </div>
                      </div>
                    </div>


                    <label class="form-label">Job Done</label>
                    <div class="col-12 rv-box">
                          <textarea class="form-control" id="job_status" placeholder="Job Done" name="job_status" cols="30" rows="10"></textarea>
                    </div>
                    <label class="form-label">Engineer Remarks</label>
                    <div class="col-12 rv-box">
                          <textarea class="form-control" id="engineer_remarks" placeholder="Engineer Remarks" name="engineer_remarks" cols="30" rows="10"></textarea>
                    </div>
                    <label class="form-label">Customer Remarks</label>
                    <div class="col-12 rv-box">
                          <textarea class="form-control" id="customer_remarks" placeholder="Customer Remarks" name="customer_remarks" cols="30" rows="10"></textarea>
                    </div>


                    <span class="new-rv">Engineer Name & Sign</span>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="contact-usage">Engineer</label>
                        <input class="form-control" type="text" id="engineer_name" name="engineer_name" placeholder="Name" required=""/>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="contact-usage">Signature</label>
                        <input class="form-control" type="file" id="engineer_sign" name="engineer_sign" placeholder="Signature" required=""/>
                    </div>

                    <span class="new-rv">Customer Name & Sign</span>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="contact-usage">Customer</label>
                        <input class="form-control" type="text" id="customer_name" name="customer_name" placeholder="Name" required=""/>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="contact-usage">Signature</label>
                        <input class="form-control" type="file" id="customer_sign" name="customer_sign" placeholder="Signature" required=""/>
                    </div>
                    




                    <div class="col-12">
                      <button class="btn btn--secondary w-100">submit request <i class="energia-arrow-right"></i></button>
                    </div>
                    <div class="col-12">
                      <div class="contact-result"></div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- End .contact-body -->
            </div>
          </div>
          <!-- End .contact-panel-->
        </div>
        <!-- End .container-->
      </section>
       <!-- enquiry from ends -->

        <!--=========== Subscribe Section Start =========-->
        <!-- <section class="tj-subscribe-section">
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="gallery-text">
                                    <div class="tj-sec-heading">
                                        <h2 class="sec-title">Get Free Consultancy?</h2>
                                        <div class="gallery-contact">
                                            Discuss about your project to call
                                            <a href="tel:+0156789000"> +0156 789 000</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-box-one">
                                    <div class="input-form">
                                        <input type="text" id="name" name="name" placeholder="Your Name.." required="">
                                    </div>
                                    <div class="input-form">
                                        <input type="email" id="email" name="email" placeholder="Your Mail Address...."
                                            required="">
                                    </div>
                                    <div class="subscribe-button">
                                        <button class="tj-primary-btn btn" type="submit" value="submit">
                                            Get a Quote now <i class="flaticon-right-arrow"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subscribe-bg-shape">
                <div class="shape-1">
                    <img src="images/solar.svg" alt="Shape">
                </div>
                <div class="shape-two">
                    <img class="shape-1" src="images/shape-2.svg" alt="Shape">
                    <img class="shape-2" src="images/shape-3.svg" alt="Shape">
                </div>
                <div class="shape-three">
                    <img class="shape-1" src="images/shape-2.svg" alt="Shape">
                    <img class="shape-2" src="images/shape-3.svg" alt="Shape">
                </div>
            </div>
        </section> -->
        <!--=========== Subscribe Section End =========-->

        <!--=========== Gallery Section Start =========-->
        <!-- <section class="tj-gallery-section">
            <div class="container-fluid p-0">
                <div class="widget_gallery popup-gallery">
                    <div class="swiper tj-gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="tj-gallery-item" href="images/gallery/gallery-6.jpg">
                                    <div class="image-box" data-bg-image="images/gallery/gallery-1.jpg">
                                        <div class="gallery-icon">
                                            <i class="fa-regular fa-plus"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="tj-gallery-item" href="images/gallery/gallery-7.jpg">
                                    <div class="image-box" data-bg-image="images/gallery/gallery-2.jpg">
                                        <div class="gallery-icon">
                                            <i class="fa-regular fa-plus"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="tj-gallery-item" href="images/gallery/gallery-8.jpg">
                                    <div class="image-box" data-bg-image="images/gallery/gallery-3.jpg">
                                        <div class="gallery-icon">
                                            <i class="fa-regular fa-plus"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="tj-gallery-item" href="images/gallery/gallery-9.jpg">
                                    <div class="image-box" data-bg-image="images/gallery/gallery-4.jpg">
                                        <div class="gallery-icon">
                                            <i class="fa-regular fa-plus"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="tj-gallery-item" href="images/gallery/gallery-10.jpg">
                                    <div class="image-box" data-bg-image="images/gallery/gallery-5.jpg">
                                        <div class="gallery-icon">
                                            <i class="fa-regular fa-plus"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="gallery-navigation">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--=========== Gallery Section End =========-->
    </main>

      <!-- START FOOTER -->
      <?php include 'includes/footer.php' ?>
      <!-- END FOOTER -->

    <!-- JS here -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/magnific-popup.js"></script>
    <script src="js/imagesloaded-pkgd.js"></script>
    <script src="js/meanmenu.js"></script>
    <script src="js/main.js"></script>


</body>

</html>