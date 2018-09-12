<?php
$pageTitle='Traveller UI';
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
      <li class="prev"><a href="#"><span>1</span> Itinerary</a><span class="arrow"></span></li>
      <li class="active"><a href="#"><span>2</span> Travellers</a><span class="arrow"></span></li>
      <li class=""><a href="#"><span>3</span> Payments</a></li>
    </ul> 
  </div>
</div>

<div class="itineraryBody mb20"> 
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

<div class="trvContainer mb20">
 <div class="container">
  <p class="trvTxt">Please enter names as mentioned on your government ID proof</p>

  <div class="itSection mb0"> 
   <div class="itSecPrior clear"> 
    <h2>Adult 01</h2>
    <div class="itSecPriorRight"> 
     <div class="row"> 
       <div class="input-field col s4">
         <input id="first_name" type="text" placeholder="First Name" class="validate boxed-input">
       </div>
       <div class="input-field col s4">
         <input id="last_name" type="text" placeholder="Last Name" class="validate boxed-input">
       </div>
       <div class="input-field col s4">
         <input id="last_name" type="text" placeholder="Nationality" class="validate boxed-input">
       </div>
     </div>
   </div>
 </div>
   <div class="itSecPrior clear"> 
    <h2>Date of Birth</h2>
    <div class="itSecPriorRight"> 
     <div class="row"> 
       <div class="input-field col s1">
         <input id="first_name" type="text" placeholder="MM" class="validate small boxed-input">
       </div>
       <div class="input-field col s1">
         <input id="last_name" type="text" placeholder="DD" class="validate small boxed-input">
       </div>
       <div class="input-field col s2">
         <input id="last_name" type="text" placeholder="YYYY" class="validate center-text boxed-input">
       </div>
     </div>
   </div>
 </div>
 <div class="itSecPrior clear"> 
    <h2>Passport Details</h2>
    <div class="itSecPriorRight"> 
     <div class="row"> 
       <div class="input-field col s4">
         <input id="first_name" type="text" placeholder="Passport Number" class="validate boxed-input">
       </div>
       <div class="input-field col s4">
         <input id="last_name" type="text" placeholder="Issuing Country" class="validate boxed-input">
       </div>
     </div>
   </div>
 </div>

 <div class="itSecPrior clear"> 
    <h2>Date of Expiry</h2>
    <div class="itSecPriorRight"> 
     <div class="row"> 
       <div class="input-field col s1">
         <input id="first_name" type="text" placeholder="MM" class="validate small boxed-input">
       </div>
       <div class="input-field col s1">
         <input id="last_name" type="text" placeholder="DD" class="validate small boxed-input">
       </div>
       <div class="input-field col s2">
         <input id="last_name" type="text" placeholder="YYYY" class="validate center-text boxed-input">
       </div>
     </div>
   </div>
 </div>
</div>


<div class="itSection mb0"> 
 <div class="itSecPrior"> 
  <h2>Adult 01</h2>
  <div class="itSecPriorRight"> 
   <div class="row"> 
     <div class="input-field col s4">
       <input id="first_name" type="text" placeholder="First Name" class="validate boxed-input">
     </div>
     <div class="input-field col s4">
       <input id="last_name" type="text" placeholder="Last Name" class="validate boxed-input">
     </div>

     <div class="col s12">
      <div class="space15"></div>
      <input class="with-gap" name="mf" type="radio" id="male">
      <label for="male">Male</label> 
      &nbsp;&nbsp;
      <input class="with-gap" name="mf" type="radio" id="female">
      <label for="female">Female</label> 
    </div>
  </div>

</div>
</div>
<div class="clear"></div>
</div>

<div class="depFltBox trvAccord mb20">

 <ul class="collapsible" data-collapsible="expandable">
   <li>
     <div class="collapsible-header trvHeader">
      <span class="right  icon-arrow-right"></span>
      <p>Frequent Flyer Number <span>(Optional)</span></p>

      <div class="clear"></div>
    </div>
    <div class="collapsible-body">

      <div class="itSect"> 
       <div class="itSecPrior"> 
        <h2></h2>
        <div class="itSecPriorRight"> 
         <div class="row"> 
           <div class="col s4">
             <select class="boxed-input">
               <option disabled="">Select Airlines</option>
               <option>Jet Airways</option>
             </select>
           </div>
           <div class="col s4">
             <input id="last_name" type="text" placeholder="Enter FFN" class="validate boxed-input">
           </div>
           <div class="space15"></div>
           <div class="col s12">
            <input class="with-gap" name="mf" type="radio" id="male">
            <label for="male">Male</label> 
            &nbsp;&nbsp;
            <input class="with-gap" name="mf" type="radio" id="female">
            <label for="female">Female</label> 
          </div>
        </div>
        <div class="space15"></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
</li> 
</ul>
</div>

<div class="itSection mb20"> 
 <div class="itSecPrior"> 
  <h2>Contact Details</h2>
  <div class="itSecPriorRight"> 
   <div class="row"> 
     <div class="col s4">
       <input id="first_name" type="text" placeholder="+91 XXXXXXXXXX" class="validate boxed-input">
     </div>
     <div class="col s8">
       Your Mobile number will be used only for sending flight releated communication.
     </div>
   </div>

 </div>
</div>
<div class="clear"></div>
</div>

<div class="depFltBox trvAccord mb20">
 <ul class="collapsible" data-collapsible="expandable">
   <li>
     <div class="collapsible-header trvHeader">
      <span class="right  icon-arrow-right"></span>
      <p>GST No. for Business Travel <span>(Optional)</span></p>
      <h6>To claim credit of GST charged by airlines/MMT, please enter your company's GST Number</h6>
      <div class="clear"></div>
    </div>
    <div class="collapsible-body">

      <div class="gstSec"> 
       <div class="itSecPrior"> 
        <div class="itSecPriorRight"> 
         <div class="row"> 
           <div class="col s4">
             <input id="last_name" type="text" placeholder="Registeration Number" class="validate boxed-input">
           </div>
           <div class="col s4">
             <input id="last_name" type="text" placeholder="Registered Company Name" class="validate boxed-input">
           </div>
         </div>
         <div class="space15"></div>
         <span>NOTE:  Appending of Customer GSTN for customer invoicing is not supported by Air Ventura and TrueJet. </span>
       </div>
     </div>
     <div class="clear"></div>
   </div>
 </div>
</li> 
</ul>
</div>

<div class="grab-seat depFltBox trvHeader mb20">
  <div class=''>
   <span class="right  icon-arrow-right"></span>
   <p>Grab your Seats!</p>
   <h6>Get the best of view</h6>
   <div class="clear"></div>
 </div>
</div>

<div class="depFltBox trvAccord mb20">
 <ul class="collapsible" data-collapsible="expandable">
   <li>
     <div class="collapsible-header trvHeader">
      <span class="right  icon-arrow-right"></span>
      <p>Add hot and dilicious meals to your trip <span>(Optional)</span></p>
      <h6>Get the best of view</h6>
      <div class="clear"></div>
    </div>
    <div class="collapsible-body">

      <div class="meal-selector"> 
        <div class="itSecPriorRight meal-container"> 
         <div class="row"> 
           <div class="col s4">
             <div class="meal">
              <img src='https://via.placeholder.com/350x250'>
              <div class="clear">
                <h2 class="left">Veg Hindu Meal</h2>
                <h2 class="right"><span class="icon-rupee"></span> 0</h2>
              </div>
              <div class="input-field relative">
                <input type="checkbox" class="filled-in white" id="filled-in-box-example">
                <label for="filled-in-box-example">Select this meal</label>
              </div>
            </div>
          </div>
          <div class="col s4">
           <div class="meal">
            <img src='https://via.placeholder.com/350x250'>
            <div class="clear">
              <h2 class="left">Veg Hindu Meal</h2>
              <h2 class="right"><span class="icon-rupee"></span> 0</h2>
            </div>
            <div class="input-field relative">
              <input type="checkbox" class="filled-in white" id="filled-in-box-example">
              <label for="filled-in-box-example">Select this meal</label>
            </div>
          </div>
        </div>
      </div>
      <div class="space15"></div>
    </div>

    <div class="clear"></div>
  </div>
</div>
</li> 
</ul>
</div>

</div>
</div>


<div class="left-sidebar-hover"></div>

</body>
</html>