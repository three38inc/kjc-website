<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website"; $imgNum = mt_rand(1,10);/*$ROOT is the base URL & should on top of every PAGE */?> 
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kristu Jayanti College, Bengaluru</title>
    <!--<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />-->
    <meta name="author" content="Three38 inc" />
    <link rel="shortcut icon" href="../images/icon.png">
    <!-- Bootstrap css -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--additional css-->
    <link rel="stylesheet" type="text/css" href="../css/component.css" />
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/roundIcons.css">
    <link rel="stylesheet" href="../css/hoverEffect.css">
    <link rel="stylesheet" href="../css/morphing.css">
    <link rel="stylesheet" href="../css/navTabs.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/fakeLoader.css">
    <!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
    <!--custom css-->
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/innerpage.css" rel="stylesheet">
    <!-- javascript -->
    <script src="../js/jquery-1.11.0.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/respond.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/fakeLoader.js"></script>
    <style>
        .link-arrow a.a-link-arrow::before {
            left: 0px;
            z-index: -1;
            width: 100%;
            background: #f3f3f3;
        }
        
        .link-arrow {
            /* background: rgba(149,165,166,0.4); */
            background: rgba(255, 255, 255, 0);
        }
        
        .link-arrow a.a-link-arrow {
            left: 10px;
        }
        
        .menu-list ul li {
            background: transparent;
        }
        
        .side-menu {
            background: transparent;
        }
        
        .content-right {
            background: transparent;
            box-shadow: none;
        }

    </style>
</head>

<body>
    
    <div id="fakeLoader"></div>
    <script>
        $("#fakeLoader").fakeLoader({
            timeToHide: 2000,
            bgColor: "#2c3e50",
            spinner: "spinner4"
        });

    </script>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=578768295582897";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>
    <div class="container-fluid">
        <div class="row">
            <?php include ('../php/navbar.php');  ?>
        </div>
    </div>
    <div id="st-container" class="st-container">
        <?php include('../php/offCanvasMenu.php'); ?>
        <!-- content push wrapper -->
        <div class="st-pusher">
            <div class="st-content">
                <!-- this is the wrapper for the content -->
                <div class="st-content-inner">
                    <div class="container">
                        <!--        <div class="row">-->
                        <div class="row" style="margin-top: 100px; padding-left: 10px; padding-right: 10px;">

                        </div>
                        <div class="row">
                            <div class="marginTopDiv">&nbsp;</div>
                            <div class="col-lg-9">
                                <div class="content-left myWelcome wow fadeIn">
                                    <img src="../images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Our Recruiters</span>
                                    </h4>
	
									<table border="0" class="table table-bordered table-hover">
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center"><strong>SL. NO.</strong></p></td>
    <td width="340" nowrap="nowrap" valign="bottom"><p><strong>NAME OF THE    COMPANY</strong></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">1</p></td>
    <td width="340" nowrap="nowrap"><p><em>[24]7</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">2</p></td>
    <td width="340" nowrap="nowrap"><p><em>24 Digital Frames</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">3</p></td>
    <td width="340" nowrap="nowrap"><p><em>99acres.com</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">4</p></td>
    <td width="340" nowrap="nowrap"><p><em>Accenutre</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">5</p></td>
    <td width="340" nowrap="nowrap"><p><em>Airtel</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">6</p></td>
    <td width="340" nowrap="nowrap"><p><em>Altisource</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">7</p></td>
    <td width="340" nowrap="nowrap"><p><em>Aryaka Infotech</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">8</p></td>
    <td width="340" nowrap="nowrap"><p><em>Asian Paints</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">9</p></td>
    <td width="340" nowrap="nowrap"><p><em>AXA</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">10</p></td>
    <td width="340" nowrap="nowrap"><p><em>Bank of Baroda</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">11</p></td>
    <td width="340" nowrap="nowrap"><p><em>BCD Travel</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">12</p></td>
    <td width="340" nowrap="nowrap"><p><em>Berger Paints</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">13</p></td>
    <td width="340" nowrap="nowrap"><p><em>Biocon</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">14</p></td>
    <td width="340" nowrap="nowrap"><p><em>Cafe Coffee Day</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">15</p></td>
    <td width="340" nowrap="nowrap"><p><em>City Union Bank</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">16</p></td>
    <td width="340" nowrap="nowrap"><p><em>Coca Cola</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">17</p></td>
    <td width="340" nowrap="nowrap"><p><em>Cognizant</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">18</p></td>
    <td width="340" nowrap="nowrap"><p><em>Cross Domain</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">19</p></td>
    <td width="340" nowrap="nowrap"><p><em>CSC Corporation</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">20</p></td>
    <td width="340" nowrap="nowrap"><p><em>Decathlon</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">21</p></td>
    <td width="340" nowrap="nowrap"><p><em>Deliotte</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">22</p></td>
    <td width="340" nowrap="nowrap"><p><em>Deutsche Bank</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">23</p></td>
    <td width="340" nowrap="nowrap"><p><em>Eureka Forbes</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">24</p></td>
    <td width="340" nowrap="nowrap"><p><em>EY</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">25</p></td>
    <td width="340" nowrap="nowrap"><p><em>Fab India</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">26</p></td>
    <td width="340" nowrap="nowrap"><p><em>Federal Bank</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">27</p></td>
    <td width="340" nowrap="nowrap"><p><em>Fincare</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">28</p></td>
    <td width="340" nowrap="nowrap"><p><em>GIEOM Software (P) Ltd</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">29</p></td>
    <td width="340" nowrap="nowrap"><p><em>Global Automaton</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">30</p></td>
    <td width="340" nowrap="nowrap"><p><em>Google</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">31</p></td>
    <td width="340" nowrap="nowrap"><p><em>Grant Thornton</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">32</p></td>
    <td width="340" nowrap="nowrap"><p><em>Great West Financials</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">33</p></td>
    <td width="340" nowrap="nowrap"><p><em>Godrej &amp; Boyce</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">34</p></td>
    <td width="340" nowrap="nowrap"><p><em>Health &amp;Glow</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">35</p></td>
    <td width="340" nowrap="nowrap"><p><em>HSBC</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">36</p></td>
    <td width="340" nowrap="nowrap"><p><em>IBM</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">37</p></td>
    <td width="340" nowrap="nowrap"><p><em>IBM Concentrix</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">38</p></td>
    <td width="340" nowrap="nowrap"><p><em>IBM Daksh</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">39</p></td>
    <td width="340" nowrap="nowrap"><p><em>ICICI Bank</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">40</p></td>
    <td width="340" nowrap="nowrap"><p><em>IDBI</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">41</p></td>
    <td width="340" nowrap="nowrap"><p><em>iGATE</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">42</p></td>
    <td width="340" nowrap="nowrap"><p><em>Indegene</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">43</p></td>
    <td width="340" nowrap="nowrap"><p><em>Indigo Airlines</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">44</p></td>
    <td width="340" nowrap="nowrap"><p><em>Infosys</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">45</p></td>
    <td width="340" nowrap="nowrap"><p><em>International Justice Mission</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">46</p></td>
    <td width="340" nowrap="nowrap"><p><em>Iron Mountain</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">47</p></td>
    <td width="340" nowrap="nowrap"><p><em>Johnson &amp; Johnson</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">48</p></td>
    <td width="340" nowrap="nowrap"><p><em>Joy Alukkas</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">49</p></td>
    <td width="340" nowrap="nowrap"><p><em>KPMG</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">50</p></td>
    <td width="340" nowrap="nowrap"><p><em>Licious</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">51</p></td>
    <td width="340" nowrap="nowrap"><p><em>L&amp;T Finance</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">52</p></td>
    <td width="340" nowrap="nowrap"><p><em>Landmark ( TATA)</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">53</p></td>
    <td width="340" nowrap="nowrap"><p><em>Landmark(Dubai)</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">54</p></td>
    <td width="340" nowrap="nowrap"><p><em>Liverpool Data Research Associates</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">55</p></td>
    <td width="340" nowrap="nowrap"><p><em>Main Stay</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">56</p></td>
    <td width="340" nowrap="nowrap"><p><em>Mavens</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">57</p></td>
    <td width="340" nowrap="nowrap"><p><em>MAX Hyper Markets</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">58</p></td>
    <td width="340" nowrap="nowrap"><p><em>Medreich Pharma</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">59</p></td>
    <td width="340" nowrap="nowrap"><p><em>MGH</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">60</p></td>
    <td width="340" nowrap="nowrap"><p><em>Mphasis</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">61</p></td>
    <td width="340" nowrap="nowrap"><p><em>Nabler</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">62</p></td>
    <td width="340" nowrap="nowrap"><p><em>National Instruments</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">63</p></td>
    <td width="340" nowrap="nowrap"><p><em>Naukri.com</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">64</p></td>
    <td width="340" nowrap="nowrap"><p><em>NIIT Technologies</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">65</p></td>
    <td width="340" nowrap="nowrap"><p><em>Northern Trust</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">66</p></td>
    <td width="340" nowrap="nowrap"><p><em>Ocwen</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">67</p></td>
    <td width="340" nowrap="nowrap"><p><em>Oracle</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">68</p></td>
    <td width="340" nowrap="nowrap"><p><em>Parents Circle</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">69</p></td>
    <td width="340" nowrap="nowrap"><p><em>Pepsi</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">70</p></td>
    <td width="340" nowrap="nowrap"><p><em>Prudent</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">71</p></td>
    <td width="340" nowrap="nowrap"><p><em>PWC</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">72</p></td>
    <td width="340" nowrap="nowrap"><p><em>Quadrangle</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">73</p></td>
    <td width="340" nowrap="nowrap"><p><em>Quintiles</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">74</p></td>
    <td width="340" nowrap="nowrap"><p><em>Robert Bosch</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">75</p></td>
    <td width="340" nowrap="nowrap"><p><em>Silfra Technologies</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">76</p></td>
    <td width="340" nowrap="nowrap"><p><em>Societe Generale</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">77</p></td>
    <td width="340" nowrap="nowrap"><p><em>South Indian Bank</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">78</p></td>
    <td width="340" nowrap="nowrap"><p><em>Sprinklr</em></p></td>
  </tr>
  <tr>
    <td width="1"><p>&nbsp;</p></td>
    <td width="108" nowrap="nowrap" valign="bottom"><p align="center">79</p></td>
    <td width="340" nowrap="nowrap"><p><em>St Annes College</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">80</p></td>
    <td width="340" valign="top"><p><em>Star Union Daichi</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">81</p></td>
    <td width="340" valign="top"><p><em>State Bank of India</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">82</p></td>
    <td width="340" valign="top"><p><em>State Street</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">83</p></td>
    <td width="340" valign="top"><p><em>Step 2 Strategy</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">84</p></td>
    <td width="340" valign="top"><p><em>Sunrise Systems</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">85</p></td>
    <td width="340" valign="top"><p><em>Synchron</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">86</p></td>
    <td width="340" valign="top"><p><em>Syngene</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">87</p></td>
    <td width="340" valign="top"><p><em>Target corporation</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">88</p></td>
    <td width="340" valign="top"><p><em>TCS</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">89</p></td>
    <td width="340" valign="top"><p><em>TEG Analytics</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">90</p></td>
    <td width="340" valign="top"><p><em>Tesco</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">91</p></td>
    <td width="340" valign="top"><p><em>Time Inc</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">92</p></td>
    <td width="340" valign="top"><p><em>Thomson Reuters</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">93</p></td>
    <td width="340" valign="top"><p><em>Toyota</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">94</p></td>
    <td width="340" valign="top"><p><em>Trianz</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">95</p></td>
    <td width="340" valign="top"><p><em>Trivium eSolutions</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">96</p></td>
    <td width="340" valign="top"><p><em>Unisys</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">97</p></td>
    <td width="340" valign="top"><p><em>Usha International</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">98</p></td>
    <td width="340" valign="top"><p><em>UST Global</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">99</p></td>
    <td width="340" valign="top"><p><em>Utegration</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">100</p></td>
    <td width="340" valign="top"><p><em>Venkys'‚&nbsp; India</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">101</p></td>
    <td width="340" valign="top"><p><em>Wells Fargo</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">102</p></td>
    <td width="340" valign="top"><p><em>WINGS</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">103</p></td>
    <td width="340" valign="top"><p><em>Wipro</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">104</p></td>
    <td width="340" valign="top"><p><em>Wipro Stepup</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">105</p></td>
    <td width="340" valign="top"><p><em>Yodlee Infotech</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">106</p></td>
    <td width="340" valign="top"><p><em>Licious</em></p></td>
  </tr>
  <tr>
    <td width="109" colspan="2" valign="top"><p align="center">107</p></td>
    <td width="340" valign="top"><p><em>Microland</em></p></td>
  </tr>
</table>



                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Learn <strong>Placements</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="about_cecr.php">Introduction</a></p>
                                    </section>
                                        <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="../pdf/2017/placements/2016_17_student_placed.pdf" target="_blank">Student Placed 2016-17</a></p>
                                   </section>
                                     <section class="link-arrow">   
                <p><a class="a-link-arrow" href="talent_transformation_team.php">Talent Transformation Team(TTT)</a></p>
                                    </section><section class="link-arrow">
                                    
                                        <p><a class="a-link-arrow" href="gate.php">GATE</a></p>
                                    </section><section class="link-arrow">
                                    
                                        <p><a class="a-link-arrow" href="placement_process.php">Placement Process</a></p>
                                    </section><section class="link-arrow">
                                    
              <p><a class="a-link-arrow" href="orientation_training.php">Placement Orientation & Training Programme</a></p>
                                    </section><section class="link-arrow">
                                    
          <p><a class="a-link-arrow" href="industry_institute_interfac.php">Industry Institute Interface(3iCell)</a></p>
                                    </section><section class="link-arrow">
                                    
                                        <p><a class="a-link-arrow" href="placement_initiatives.php">Placement Initiatives @ KJC</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="our_recruiters.php" style="color: #2980b9;font-weight: bold;">Our Recruiters</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="placement_extension_services.php">Placement Extension Services</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="udyogVichaar.php">UdyogVichaar</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="transcend.php">Transcend</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="photo_gallery.php">Photo Gallery</a></p>
                                    </section>



                                </div>
                                <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                        </h4>

                                        <?php include ('../php/sideMenu.php'); ?>
                                    </div>



                                   <div class="content-right wow fadeIn" style="padding:10px;padding-bottom: 0px;">
                                    <div class="fb-page" data-href="https://www.facebook.com/KristuJayantiCollege" data-height="425" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                                        <div class="fb-xfbml-parse-ignore">
                                            <blockquote cite="https://www.facebook.com/KristuJayantiCollege"><a href="https://www.facebook.com/KristuJayantiCollege">Facebook</a></blockquote>
                                        </div>
                                    </div>
                                </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <!--						                                </div>-->
                    <?php include ('../php/alerts.php');  ?>
                    <?php include('../php/footer.php'); ?>
                    
                </div>



            </div>
            <!--/st-content-inner-->
        </div>
        <!-- this is the wrapper for the content-->
    </div>
    <!--st-pusher-->
    </div>
    <!--st-container-->

    <script src="../js/cbpFWTabs.js"></script>
    <script>
        (function() {

            [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
                new CBPFWTabs(el);
            });

        })();

    </script>
    <script src="../js/modernizr.custom.js"></script>
    <script src="../js/spin.min.js"></script>
    <script src="../js/mySpin.js"></script>
    <script src="../js/swipeview.js"></script>
    <script src="../js/jquery.bootstrap.newsbox.min.js"></script>
    <script src="../js/classie.js"></script>
    <script src="../js/morphingSearch.js"></script>
    <script src="../js/sidebarEffects.js"></script>
    <script src="../js/transit.js"></script>
    <script src="../js/sly.js"></script>
    <script src="../js/customSly.js"></script>
    <script src="../js/wow.min.js"></script>
    <!--    <script src="js/res-navtabs.js"></script>-->
    <script src="../js/scripts.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>
