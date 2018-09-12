<?php
$pageTitle='Round Trip Search Result';
$pageKeyword='';
$pageDiscription='';
$pageId='homePage';
$pageClasses='';
$sidebarSetting = 'fixed';
$headerType = 'login';
include('include/head.php');
?>
<body class="<?= $pageClasses; ?>" id='<?= $pageId; ?>'>
  <?php
  include('include/header-'.$headerType.'.php');
  ?>
  <main>
    <div class="ys-ow-search-topbar bggray"">
      <div class="container">
        <?php include('modules/flight-round-trip.php'); ?>
      </div>
    </div>

    <?php include('modules/flight-filter-box.php'); ?>
    
    <div class='ys-ow-search-header'>
      <div class="container">
        <div class='row'>
          <div class="col s6">
            <h2 class="search-title">Displaying Flights</h2>
          </div>
          <div class="col s6">
            <ul class="search-sort">
              <li class=""><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right"><span class="icon-incognito"></span></a></li>
              <li class=""><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right"><span class="icon-interchange"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="ys-rt-final-selection">
      <div class="ys-rt-flight-detail container">
        <div class='row rt-flight-detail-main'>
         <div class="col m9 flight-detail-info">
          
          <div class="row">
            <div class="col m6">
              <ul>
                <li>
                  <img src='https://via.placeholder.com/70x70' class='flight-img'>
                </li>
                <li>
                  <h2>Spicejet</h2>
                  <ul>
                    <li><p class="rt-flight-time">21:00 <small>Non Stop</small></p></li>
                    <li><p class="rt-flight-time">21:00 <small>Non Stop</small></p></li>
                  </ul>
                </li>
                <li><p class="rt-flight-cost"><i class="icon-rupee"></i> 10,000</p></li>
              </ul>
            </div>
            <div class="col m6">
              <ul>
                <li>
                  <img src='https://via.placeholder.com/70x70' class='flight-img'>
                </li>
                <li>
                  <h2>Spicejet</h2>
                  <ul>
                    <li><p class="rt-flight-time">21:00 <small>Non Stop</small></p></li>
                    <li><p class="rt-flight-time">21:00 <small>Non Stop</small></p></li>
                  </ul>
                </li>
                <li><p class="rt-flight-cost"><i class="icon-rupee"></i> 10,000</p></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col m3">
          <a href="" class="btn btn-large btn-ys-purple waves-effect waves-light btn-rounded flight-book-now">Book Now <span class="icon-arrow-right"></span></a>
        </div>
      </div>
      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header zero-cacellation-accordian">
            <div class="row">
              <div class="col m8">
                <input type="checkbox" class="filled-in" id="filled-in-box-example" checked="checked">
                <label for="filled-in-box-example">Zero Cancellation <small>Get Full refund on cacellation penalties. Buy ZC @ only Rs.499</small></label>
              </div>
              <div class="col m4 right-align">
                <p>Flight Details <span class="icon-arrow-bottom"></span></p>
              </div>
            </div>
          </div>
          <div class="collapsible-body">
            <div class="row">
              <div class="col s12">
                <ul class="tabs tab-demo z-depth-1" style="width: 100%;">
                  <li class="tab col s3"><a href="#flight1" class="">Flight Details</a></li>
                  <li class="tab col s3"><a class="" href="#fare1">Fare Details</a></li>
                  <li class="tab col s3"><a href="#baggage1">Baggage Details</a></li>
                  <li class="tab col s3"><a href="#cancel1">Concellation Fees</a></li>
                </ul>
              </div>
              <div id="flight1" class="col s12">
                <div class="row">
                  <div class="col s12">
                    <h4 class="flight-date">Flight 1</h4>
                  </div>
                  <div class="col m8 flight-detail-info">
                    <img src='https://via.placeholder.com/70x70' class='flight-img'>
                    <h2>Indigo <br> <span>SE - 199</span></h2>
                    <ul class="flight-time">
                      <li>21:35 <span>DEL</span></li>
                      <li>23:50 <span> BOM</span></li>
                      <li>2h:26m <span> Non Stop</span></li>
                    </ul>
                    <h3 class="flight-amount-main"><i class="material-icons">add</i> 5,250</h3>
                  </div>
                  <div class="col m4 refund-type">
                    <h3>Partially Refundable <span>Economy</span></h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <h4 class="flight-date">FLight 2</h4>
                  </div>
                  <div class="col m8 flight-detail-info">
                    <img src='https://via.placeholder.com/70x70' class='flight-img'>
                    <h2>Indigo <br> <span>SE - 199</span></h2>
                    <ul class="flight-time">
                      <li>21:35 <span>DEL</span></li>
                      <li>23:50 <span> BOM</span></li>
                      <li>2h:26m <span> Non Stop</span></li>
                    </ul>
                    <h3 class="flight-amount-main"><i class="material-icons">add</i> 5,250</h3>
                  </div>
                  <div class="col m4 refund-type">
                    <h3>Partially Refundable <span>Economy</span></h3>
                  </div>
                </div>
              </div>
              <div id="fare1" class="col s12 fare-details">
                <div class="row">
                  <div class="col s12">
                    <h4 class="flight-date">FLight 1</h4>
                  </div>
                  <div class="col m8 flight-detail-info fare-details-box">
                    <img src='https://via.placeholder.com/70x70' class='flight-img'>
                    <ul class="fare-price">
                      <li>Base fees <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 5,000</span></li>
                      <li>Taxes and Fees <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 1,000</span></li>
                      <li class="fare-total">Total <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 6,000</span></li>
                    </ul>
                  </div>
                  <div class="col m4 refund-type">
                    <h3>Partially Refundable <span>Economy</span></h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <h4 class="flight-date">FLight 2</h4>
                  </div>
                  <div class="col m8 flight-detail-info fare-details-box">
                    <img src='https://via.placeholder.com/70x70' class='flight-img'>
                    <ul class="fare-price">
                      <li>Base fees <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 5,000</span></li>
                      <li>Taxes and Fees <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 1,000</span></li>
                      <li class="fare-total">Total <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 6,000</span></li>
                    </ul>
                  </div>
                  <div class="col m4 refund-type">
                    <h3>Partially Refundable <span>Economy</span></h3>
                  </div>
                </div>

              </div>
              <div id="baggage1" class="col s12">
                <div class="row">
                  <div class="col s12">
                    <h4 class="flight-date">FLight 2</h4>
                  </div>
                  <div class="col m8 flight-detail-info">
                    <img src='https://via.placeholder.com/70x70' class='flight-img'>
                    <h2>Indigo <br> <span>SE - 199</span></h2>
                    <ul class="baggage-box">
                      <li><p>Checkin</p> <p class="right-align">15 kg <span>/person</span></li>
                        <li><p>Cabin</p> <p class="right-align">7 kg <span>/person</span></li>
                        </ul>
                      </div>
                      <div class="col m4 refund-type">
                        <h3>Partially Refundable <span>Economy</span></h3>
                      </div>
                    </div>
                    <div class="row">
                  <div class="col s12">
                    <h4 class="flight-date">FLight 1</h4>
                  </div>
                  <div class="col m8 flight-detail-info">
                    <img src='https://via.placeholder.com/70x70' class='flight-img'>
                    <h2>Indigo <br> <span>SE - 199</span></h2>
                    <ul class="baggage-box">
                      <li><p>Checkin</p> <p class="right-align">15 kg <span>/person</span></li>
                        <li><p>Cabin</p> <p class="right-align">7 kg <span>/person</span></li>
                        </ul>
                      </div>
                      <div class="col m4 refund-type">
                        <h3>Partially Refundable <span>Economy</span></h3>
                      </div>
                    </div>
                  </div>
                  <div id="cancel1" class="col s12 baggage-details">
                    <div class="row">
                      <div class="col s12">
                    <h4 class="flight-date">FLight 1</h4>
                  </div>
                      <div class="col m8 flight-detail-info">
                        <img src='https://via.placeholder.com/70x70' class='flight-img'>
                        <div class="row">
                          <div class="col m4 cacellation-box">
                            <h5>Cancellation <span>per person</span></h5>
                            <ul class="fare-price">
                              <li>Base fees <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 5,000</span></li>
                              <li>Taxes and Fees <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 1,000</span></li>
                              <li class="fare-total">Total <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 6,000</span></li>
                            </ul>
                          </div>
                          <div class="col m4 cacellation-box">
                            <h5>Change Flight <span>per person</span></h5>
                            <ul class="fare-price">
                              <li>Base fees <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 5,000</span></li>
                              <li>Taxes and Fees <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 1,000</span></li>
                              <li class="fare-total">Total <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 6,000</span></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col m4 refund-type">
                        <h3>Partially Refundable <span>Economy</span></h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col s12">
                    <h4 class="flight-date">FLight 2</h4>
                  </div>
                      <div class="col m8 flight-detail-info">
                        <img src='https://via.placeholder.com/70x70' class='flight-img'>
                        <div class="row">
                          <div class="col m4 cacellation-box">
                            <h5>Cancellation <span>per person</span></h5>
                            <ul class="fare-price">
                              <li>Base fees <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 5,000</span></li>
                              <li>Taxes and Fees <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 1,000</span></li>
                              <li class="fare-total">Total <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 6,000</span></li>
                            </ul>
                          </div>
                          <div class="col m4 cacellation-box">
                            <h5>Change Flight <span>per person</span></h5>
                            <ul class="fare-price">
                              <li>Base fees <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 5,000</span></li>
                              <li>Taxes and Fees <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 1,000</span></li>
                              <li class="fare-total">Total <span class="right-align"><i class="icon-vkv-icons-set-23"></i> 6,000</span></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col m4 refund-type">
                        <h3>Partially Refundable <span>Economy</span></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>

        </div>

        <style type="text/css">
          
          .ys-rt-heading h2{
            font-size: 18px;
                margin: 15px 0; 
          }
           .ys-rt-heading h2 span{
            padding: 0 15px;
           }
        </style>

        <div class='ys-rt-search-result'>
          <div class="container">
            <div class='row'>
              <div class="col s6">

                <div class="ys-rt-heading clear">
                  <h2 class="left">New Delhi <span class="icon-flying"></span> Mumbai</h2>
                  <p class="right">Mon, Jun 11</p>
                </div>
                <div class="ys-rt-result-container">
                <div class="ys-rt-result">
                  <div class="top">
                    <ul>
                      <li>
                        <input class="with-gap" name="sec1" type="radio" id="sec1Yes">
                        <label for="sec1Yes"></label>
                        <img src='https://via.placeholder.com/70x70'>
                      </li>
                      <li>
                        <p class="rt-flight-time">21:00 <small>Non Stop</small></p>
                      </li>
                      <li>
                        <p class="rt-flight-time">23:50 <small>2h 20m</small></p>
                      </li>
                      <li>
                        <p class="rt-flight-cost"><span class="icon-rupee"></span> 10,000</p>
                      </li>
                      <li>
                        <ul class="flight-right-icons">
                          <li class=""><a href="javascript:void(0)" ><span class="icon-lite-fare"></span></a></li>
                          <li class=""><a href="javascript:void(0)" ><span class="icon-business"></span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="bottom clear">
                    <p class="left"><b>Spicejet</b> SG - 168</p>
                    <p class="right">Zero Cancellation available</p>
                  </div>
                </div>

                <div class="ys-rt-result">
                  <div class="top">
                    <ul>
                      <li>
                        <input class="with-gap" name="sec1" type="radio" id="sec1Yes">
                        <label for="sec1Yes"></label>
                        <img src='https://via.placeholder.com/70x70'>
                      </li>
                      <li>
                        <p class="rt-flight-time">21:00 <small>Non Stop</small></p>
                      </li>
                      <li>
                        <p class="rt-flight-time">23:50 <small>2h 20m</small></p>
                      </li>
                      <li>
                        <p class="rt-flight-cost"><span class="icon-rupee"></span> 10,000</p>
                      </li>
                      <li>
                        <ul class="flight-right-icons">
                          <li class=""><a href="javascript:void(0)" ><span class="icon-lite-fare"></span></a></li>
                          <li class=""><a href="javascript:void(0)" ><span class="icon-business"></span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              </div>

              <div class="col s6">

                <div class="ys-rt-heading clear">
                  <h2 class="left">Mumbai <span class="icon-flying"></span> New Delhi</h2>
                  <p class="right">Wed, Jun 13</p>
                </div>

                <div class="ys-rt-result-container">
                <div class="ys-rt-result">
                  <div class="top">
                    <ul>
                      <li>
                        <input class="with-gap" name="sec1" type="radio" id="sec1Yes">
                        <label for="sec1Yes"></label>
                        <img src='https://via.placeholder.com/70x70'>
                      </li>
                      <li>
                        <p class="rt-flight-time">21:00 <small>Non Stop</small></p>
                      </li>
                      <li>
                        <p class="rt-flight-time">23:50 <small>2h 20m</small></p>
                      </li>
                      <li>
                        <p class="rt-flight-cost"><span class="icon-rupee"></span> 10,000</p>
                      </li>
                      <li>
                        <ul class="flight-right-icons">
                          <li class=""><a href="javascript:void(0)" ><span class="icon-lite-fare"></span></a></li>
                          <li class=""><a href="javascript:void(0)" ><span class="icon-business"></span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="bottom clear">
                    <p class="left"><b>Spicejet</b> SG - 168</p>
                    <p class="right">Zero Cancellation available</p>
                  </div>
                </div>

                <div class="ys-rt-result">
                  <div class="top">
                    <ul>
                      <li>
                        <input class="with-gap" name="sec1" type="radio" id="sec1Yes">
                        <label for="sec1Yes"></label>
                        <img src='https://via.placeholder.com/70x70'>
                      </li>
                      <li>
                        <p class="rt-flight-time">21:00 <small>Non Stop</small></p>
                      </li>
                      <li>
                        <p class="rt-flight-time">23:50 <small>2h 20m</small></p>
                      </li>
                      <li>
                        <p class="rt-flight-cost"><span class="icon-rupee"></span> 10,000</p>
                      </li>
                      <li>
                        <ul class="flight-right-icons">
                          <li class=""><a href="javascript:void(0)" ><span class="icon-lite-fare"></span></a></li>
                          <li class=""><a href="javascript:void(0)" ><span class="icon-business"></span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>

      </main>
    </div>
    <div class="left-sidebar-hover"></div>

  </body>
  </html>