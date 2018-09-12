<?php
  $pageTitle='Itinerary UI';
  $pageKeyword='';
  $pageDiscription='';
  $pageId='itineraryPage';
  $pageClasses='';
  $sidebarSetting = 'fixed';
  $headerType = 'login';
  include('include/head.php');
?>
    <body class="<?= $pageClasses; ?>" id='<?= $pageId; ?>'>
        <?php
        include('include/header-'.$headerType.'.php');
        include('include/sidebar.php');
        ?> 
            <div class="itineraryHeader">
               <div class="container"> 
                    <ul class="">
                        <li class="active"><a href="#"><span>1</span> Itinerary</a><span class="arrow"></span></li>
                        <li class=""><a href="#"><span>2</span> Travellers</a><span class="arrow"></span></li>
                        <li class=""><a href="#"><span>3</span> Payments</a></li>
                    </ul> 
               </div>
            </div>

            <div class="itineraryBody"> 
               <div class="container"> 
                  <div class="itSection">
                     <div class="fltDisc row">
                        <div class="fltDiscIn col m6">
                           <h2>New Delhi <span class="icon-flying"></span> Mumbai</h2>
                           <p>1 Way  •  1 passengers  •  Economy</p>
                        </div>
                        <div class="fltDiscIn col m2">
                           <h3>Total Price</h3>
                           <span class="flight-price"><i class="icon-rupee"></i> 6,413</span>
                        </div>
                        <div class="fltDiscIn col m4">
                           <a href="#" class="btn btn-large btn-ys-purple waves-effect waves-light btn-rounded">Countinue Booking <span class="icon-arrow-right"></span></a> 
                        </div>
                     </div>
               </div>
            </div>
            
            <!-- Departing Flight -->
            <div class="itnMainHeading"> 
               <div class="container">
                <span class="icon-departure"></span>
                  <h2>Departing Flight  •  Mon, June 11</h2>
               </div>
            </div>
            <div class="itineraryBody"> 
               <div class="container"> 
                  <div class="itSection depFltBox">
                     <ul class="collapsible" data-collapsible="expandable">
                         <li>
                             <div class="collapsible-header depFltHeader">
                                 <i class="material-icons">filter_drama</i>
                                 <h2>Indigo <br> <span>SE - 199</span></h2>
                                 <ul>
                                    <li>21:35 <span>DEL</span></li>
                                    <li>23:50 <span> BOM</span></li>
                                    <li>2h:26m <span> Non Stop</span></li>
                                    <li>Boing 777 <span> Economy</span></li>
                                 </ul>
                                 <div class="clear"></div>
                              </div>
                             <div class="collapsible-body depFltbody">
                                 <ul>
                                    <li class="pin"><b>21:35</b>  •  Indira Gandhi International Airport <b>(DEL)</b></li>
                                    <li> Duration : <b>2h 20m</b></li>
                                    <li class="pin"><b>23:50</b>  •  Chhatapati Shivaji International Airport <b>(BOM)</b></li>
                                 </ul>
                             </div>
                         </li> 
                     </ul>
                  </div>
               </div>
            </div>

            <!-- Travel Insaurance -->
            <div class="itnMainHeading"> 
               <div class="container">
                <span class="icon-travel-insurance"></span>
                  <h2>Travel Insaurance</h2>
               </div>
            </div>
            <div class="itineraryBody"> 
               <div class="container"> 
                  <div class="itSection depFltBox travelBox"> 
                     <ul class="collapsible" data-collapsible="expandable">
                         <li>
                             <div class="collapsible-header trvHeader">
                                 <p>40% of our customers insure their trip   <span>See all the benefits you get for just Rs. 299</span></p>
                                 <div class="clear"></div>
                              </div>
                             <div class="collapsible-body trvbody">
                                 <div class="trvbodyRow">
                                    <div class="trbBoxUp">
                                       <div class="trbBox">
                                          <span class="icon-cancelled-flight"></span>
                                          <h2>Trip Cancellation</h2>
                                          <p>Claim 20,000/-</p>
                                       </div>
                                    </div>
                                    <div class="trbBoxUp">
                                       <div class="trbBox">
                                          <span class="icon-flight-duration"></span>
                                          <h2>Flight Delay</h2>
                                          <p>Claim 20,000/-</p>
                                       </div>
                                    </div>
                                    <div class="trbBoxUp">
                                       <div class="trbBox">
                                          <span class="icon-baggage-waiting"></span>
                                          <h2>Loss of Baggage</h2>
                                          <p>Claim 20,000/-</p>
                                       </div>
                                    </div>
                                    <div class="trbBoxUp">
                                       <div class="trbBox">
                                          <span class="icon-baggage-waiting"></span>
                                          <h2>Delay of Baggage</h2>
                                          <p>Claim 20,000/-</p>
                                       </div>
                                    </div>
                                    <div class="trbBoxUp">
                                       <div class="trbBox">
                                          <a href="#"><h3>+06 <span>More</span></h3></a>
                                       </div>
                                    </div>
                                 </div>
                             </div>
                         </li> 
                     </ul>
                     <div class="travelBoxBot">
                        <ul>
                           <li>
                             <input class="with-gap" name="sec1" type="radio" id="sec1Yes">
                             <label for="sec1Yes">Yes <span>, secure my trip with insurance. I agree to the terms &amp; conditions.</span></label>
                           </li>
                           <li>
                             <input class="with-gap" name="sec1" type="radio" id="sec1No">
                             <label for="sec1No">No <span>I do not ant to insure my Trip</span></label>
                           </li>
                        <ul>
                     </div>
                  </div>
               </div>
            </div> 
 
    </div>
    <div class="left-sidebar-hover"></div>

</body>
</html>