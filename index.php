<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <script src="js/navigationDE.js"></script>

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-54KB6CV');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143837547-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-143837547-1');
    </script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="site" content="tvarit.com" />
    <meta name="description"
        content="Tvarit AI is the best solution for smart manufacturing, smart machines and digital transformation" />
    <meta name="keywords"
        content="machine learning, free, no credit card, big data, machine learning, ml, machine learning as a service, machine learning API, API, datasets, models, decision trees, predictive models, predictions, fast predictions, evaluation, evaluate predictive models, ensembles, random decision forest, boosted trees, gradient boosted trees, gradient boosting, boosting ensembles, isolation forest, anomaly detector, anomaly score, clustering, k-means, g-means, cluster, centroids, linear regression, regression, logistic regression, lr, topic, topic modeling, topic distributions, PCA, principal component analysis, text analysis, LDA, Latent Dirichlet Allocation, partial dependence plot, scatter plot, time series forecasting, timeseries, forecast, trends, deepnets, deep learning, deep neural networks, neural network, neural networks, automl, automatic optimization, optiml, fusion, easy, model gallery, workflows, flatline, whizzml, dsl, domain-specific language, bindings, library, amazon echo, alexa, mac, desktop" />
    <meta name="keywords"
        content="SPS – Smart Production Solutions, Nuremberg, NürnbergMesse, Components, Control Technology, Drive Systems, Electromechanical Components, Human-Machine-Interface Devices, Industrial Communication, Industrial Software, Interface Technology, IPCs, Motion Control, Peripheral Equipment, Sensor Technology, " />
    <!-- Favicons -->
    <link rel="icon" href="./img/favicon.png">
    <title>Tvarit AI</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/ai_consulting.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/flickity.css">
    <link rel="stylesheet" href="css/animate.css">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway: 100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed: 300i,400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.5.0/knockout-debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.5.0/knockout-min.js"></script>
     <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <![endif]-->
</head>


    <!------------------------ main menu start ---------------------->
     <?php
     include 'header.php';
     ?>
    <!------------------------ main menu end ------------------------>

    <!------------------------ header start ------------------------->
    
   <header class="headerBg indexMainBg parallax-bg parallax" data-diff="100">
      <video autoplay="true" muted loop style="z-index=-1">
        <source src="video/index-video.mp4" type="video/mp4">
      </video>
      <div class="container">
        <a href="#downClick" class="hdrscrollArrow" style="bottom:5%" ><i class="icon ion-ios-arrow-dropdown"></i></a>
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="typography lh-1 left" >
              <div id="tvarit-strings" class="stringText">
                <span>TV<span class="red">A</span>R<span class="red">I</span>T</span>
              </div>
              <div id="industrial-strings" class="stringText">
                <span>INDUSTRIAL <span class="red">AI</span> </span>
              </div>
              <div id="prgf-strings" class="stringText">
                <span>Fast and customized solutions for all your manufacturing problems and data science needs</span>
              </div>
              <div class="hdr-tvarit"><span id="typed-tvarit"></span></div>
              <div class="hdr-industrial" id="typed-industrial"></div>
              <div class="hdr-prgf" ><span id="typed-prgf"></span></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="typography right lh-1">
              <div id="germany-strings" class="stringText">
                <span>AI MADE IN GERMANY</span>
              </div>                                 
               <div class="hdr-germany red"><span class="mr-2" id="typed-germany"></span> <img src="img/flag.png" class="img-fluid flag"></div>
              <div class="hdr-prgf2r">
                <span id="typed-prgf2r"></span>
                <div class="rw-words-1">
                  <span>Remove inefficiencies and failures of your production units and business processes</span>
                  <span>Reduce the failure rate of all your AI/Data Science Projects</span>
                </div>   
              </div>
             
            </div>
          </div>
        </div>
      </div>
      
      <!-- <div class="container">
        <a href="#downClick" class="hdrscrollArrow" ><i class="icon ion-ios-arrow-dropdown"></i></a>
        <div class="row align-items-center">
          <div class="col-md-5">
            <div class="typography lh-1 left"  style="float:left">
              <div id="tvarit-strings" >
                <span>TV<span class="red">A</span>R<span class="red">I</span>T</span>
              </div>
              <div id="industrial-strings">
                <span>INDUSTRIAL <span class="red">AI</span> </span>
              </div>
              <div id="prgf-strings">
                <span>Fast and customized solutions for all your manufacturing problems and data science needs</span>
              </div>
              <div class="hdr-tvarit"><span id="typed-tvarit"></span></div>
              <div class="hdr-industrial" id="typed-industrial">
              </div>
              <div class="hdr-prgf" >
                <span id="typed-prgf"></span>
              </div>
                
            </div>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-5">
            <div class="typography right lh-1">
              <div id="germany-strings">
                <span>AI MADE IN GERMANY &nbsp;</span>
              </div>
              <div id="prgf2r-strings">
                <span>Remove inefficiencies and failures of your production units and business processes</span>
                <span>Reduce the failure rate of all your AI/Data Science Projects</span>
              </div>

              <div class="hdr-germany red"><span class="mr-2" id="typed-germany"></span> <img src="img/flag.png" class="img-fluid flag"></div>

              <div class="hdr-prgf2r">
                <span  id="typed-prgf2r"></span>
              </div>
              
            </div>
          </div>
        </div>
      </div> -->

    </header>
    <!------------------------ header end --------------------------->
    <!------------------------ Features start --------------------->
    <div class="section-padding" id="downClick">
      <div class="container">
        <div class="centerTitle sec-mainTitle">
          we offer
        </div>
        <br>
        <div class="row justify-content-lg-center weOfferBox">
          <div class="col-lg-4">
            <div  class="featureBox">
                <div class="icon" >
                    <img src="img/ai-solution-1.png" >
                </div>
                <div class="inner-container">
                  <p class="title">AI Solutions</p>
                  <div class="short-line bg-red"></div>
                  <ul class="ul-list">
                    <li>
                    Ready to use AI solutions for most impactful business use-cases
                    </li>
                    <li>
                      Scalable and already proven technology
                    </li>
                    <li>
                      Available on On-Premise, Cloud and edge-computing
                    </li>
                  </ul>
                  <a href="optimize_oee_for_steel_and_metal_manufacturing_companies" target="_blank" class="btn btn-round btn-red-grd btn-knowmore">Know More</a>
                </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="featureBox">
                <div class="icon">
                    <img src="img/ai-platform-1.png">
                </div>
                <div class="inner-container">
                  <p class="title">AI Platform</p>
                  <div class="short-line bg-red"></div>
                  <ul class="ul-list">
                    <li>
                     Award winning AI Platform for your Data Scientists
                    </li>
                    <li>
                      Analyse manufacturing data and make new use-cases on your own
                    </li>
                    <li>
                     Available on On-Premise, Cloud and edge-computing
                    </li>
                  </ul>
                  <a href="ai-platform"  target="_blank" class="btn btn-round btn-red-grd btn-knowmore"> Know More</a>               
                </div>
              </div>
          </div>

          <div class="col-lg-4">
            <div href="ai-consulting"  target="_blank" class="featureBox">
              <div class="icon">
                <img src="img/ai-consulting-1.png" >
              </div>
                <div class="inner-container">
                  <p class="title">AI Consulting</p>
                  <div class="short-line bg-red"></div>
                  <ul class="ul-list">
                    <li>
                      Data Extraction, IT Systems Integration, Data Preparation, AI Modeling
                    </li>
                    <li>
                      Managed outside teams and hire  data science experts within hours
                    </li>
                    <li>
                      Innovative task based pricing
                    </li>
                  </ul>
                    <a href="ai-consulting"  target="_blank" class="btn btn-round btn-red-grd btn-knowmore">Know More</a>
                </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!------------------------ Features end --------------------->

    <!------------------------ why needed start --------------------->
    <div class="section-padding-both">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="videoWrapper">
              <iframe  class="videoFrame" src="https://www.youtube.com/embed/QVLXPFi16n0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="px-lg-4 box-content-left">
              <div class="title">
               <div class="sec-mainTitle">Why Us?</div>
              </div>
              <div class="short-line bg-red"></div>
                <p class="text-p">
                Our products and services have been built and designed on the basis of 34+ years of experience  in fortune 500 manufacturing companies. We provide fast and customizable AI solutions for discrete and process manufacturing. We are continuously improving our solutions by heavily investing into R&D. We have developed most advanced AI algorithms and ready to use AI modules to solve all your complex manufacturing problems and needs.</p>
              <br>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <!------------------------ why needed end ----------------------->

    <!------------------------Countdown start --------------------->
    <?php
    include 'change_we_brought.php'
    ?>
    <!------------------------Countdown end --------------------->

    <section class="section-padding">
      <div class="container">
        <div class="centerTitle">
          <h3 class="bold text-center red mb-0">We talk in all the languages used by</h3>
          <div class="sec-mainTitle">Manufacturing companies</div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="logo-box">
              <img src="img/HomeAiLogo/1.png" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="logo-box">
              <img src="img/HomeAiLogo/2.png" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="logo-box">
              <img src="img/HomeAiLogo/3.png" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="logo-box">
              <img src="img/HomeAiLogo/4.png" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="logo-box">
              <img src="img/HomeAiLogo/5.png" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="logo-box">
              <img src="img/HomeAiLogo/6.png" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="logo-box">
              <img src="img/HomeAiLogo/7.png" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="logo-box">
              <img src="img/HomeAiLogo/8.png" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="logo-box">
              <img src="img/HomeAiLogo/9.png" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="logo-box">
              <img src="img/HomeAiLogo/10.png" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="logo-box">
              <img src="img/HomeAiLogo/11.png" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="logo-box">
              <img src="img/HomeAiLogo/12.png" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!------------------------Client logo slide start --------------------->
    <div class="section-padding">
        <?php include 'using-tvarit.php';?>
    </div>
    <!------------------------Client logo slide end --------------------->

    <!------------------------ Reference start --------------------->
    <div class="section-padding">
        <div class="container">
            <div class="centerTitle sec-mainTitle">
                ASSOCIATES & PARTNERS
            </div>
            <br>
            <div class="client-carousel">
                <div class="carousel-cell">
                    <div class="picBox">
                        <img src="img/partners_img/tud_logo_web_druck.png" class="img-fluid">
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="picBox">
                        <img src="img/partners_img/iit_bombay.png" class="img-fluid">
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="picBox">
                        <img src="img/partners_img/logo_zvei.png" class="img-fluid">
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="picBox">
                        <img src="img/partners_img/vivatech.png" class="img-fluid">
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="picBox">
                        <img src="img/partners_img/Bundesverband-Deutsche-Startups.png" class="img-fluid">
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="picBox">
                        <img src="img/partners_img/aws-logo.png" class="img-fluid">
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="picBox">
                        <img src="img/partners_img/ihk-ffm.png" class="img-fluid">
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="picBox">
                        <img src="img/partners_img/reference2.png" class="img-fluid">
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="picBox">
                        <img src="img/partners_img/Hannover-Messe.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------ Reference end ----------------------->

    <!------------------------footer start --------------------->
    <?php
    include 'footer.php';
    ?>
    <!------------------------footer end --------------------->

    <div class="cookieFooter bg-red-grd" id="cookieDiv">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <p class="m-0 text-white text-center text-md-left">We use cookies to improve your experience on our
                        website. By browsing this website, you agree to our use of cookies.</p>
                </div>
                <div class="col-md-4">
                    <form name="myform" action="">
                        <div class="d-flex mt-3 mt-md-0 justify-content-center justify-content-md-end">
                            <input type="hidden" name="customer" value="user">
                            <a href="datenschutz" target="_blank" class="btn btn-white btn-round mr-2">More Info</a>
                            <input type="button" class="btn btn-white btn-round closeCookie" value="ok"
                                onclick="WriteCookie();" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- script start -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
    <script src="js/readmore.js"></script>
    <script src="js/counting.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/script.js"></script>
    <script src="js/parallax.js"></script>
    
<style>   
.rw-words-1 span{
	/* position: absolute; */
	opacity: 0;
	overflow: hidden;
	/* color: #6b969d; */
	-webkit-animation: rotateWord 13s linear infinite 0s;
	-ms-animation: rotateWord 13s linear infinite 0s;
	animation: rotateWord 13s linear infinite 0s;
}
.rw-words-1 span:nth-child(2) { 
    -webkit-animation-delay: 6s; 
	-ms-animation-delay: 6s; 
	animation-delay: 6s; 
	/* color: #6b889d; */
} 
@-webkit-keyframes rotateWord {
    0% { opacity: 0; }
    2% { opacity: 0; -webkit-transform: translateY(-30px); }
	5% { opacity: 0; -webkit-transform: translateY(0px);}
    17% { opacity: 0; -webkit-transform: translateY(0px); }
	20% { opacity: 1; -webkit-transform: translateY(30px); }
	80% { opacity: 0; }
    100% { opacity: 0; }
}
@-ms-keyframes rotateWord {
    0% { opacity: 0; }
    2% { opacity: 0; -ms-transform: translateY(-30px); }
	5% { opacity: 0; -ms-transform: translateY(0px);}
    17% { opacity: 0; -ms-transform: translateY(0px); }
	20% { opacity: 1; -ms-transform: translateY(30px); }
	80% { opacity: 0; }
    100% { opacity: 0; }
}
@keyframes rotateWord {
    0% { opacity: 0; }
    2% { opacity: 0; -webkit-transform: translateY(-30px); transform: translateY(-30px); }
	5% { opacity: 0; -webkit-transform: translateY(0px); transform: translateY(0px);}
    17% { opacity: 0; -webkit-transform: translateY(0px); transform: translateY(0px); }
	20% { opacity: 1; -webkit-transform: translateY(30px); transform: translateY(30px); }
	80% { opacity: 0; }
    100% { opacity: 0; }
}
@media screen and (max-width: 768px){
	.rw-sentence { font-size: 18px; }
}
@media screen and (max-width: 320px){
	.rw-sentence { font-size: 9px; }
}

  </style>

</body>
</html>