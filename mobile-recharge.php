<?php
$pageTitle='Mobile Recharge';
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
  include('include/sidebar.php');

  ?>
  <main class="mn-inner container ys-signup-container">
    
    <form>

      <div class="row">

        <div class="col s3">
          <select class='select-inlined select-img-left'>
            <option value="" disabled selected><i class="icon-email prefix">Mobile Number</option></i>
            <optgroup label="" data-code='BOM'>
              <option value="" data-icon=""></option>
              <option value="" data-icon=""></option>
              <option value="" data-icon=""></option>
            </optgroup>
          </select>
        </div>

        <div class="col s3">
          <select class='select-inlined select-img-left'>
            <option value="" disabled selected>Operator Type</option>
            <optgroup label="" data-code='BOM'>
              <option value="" data-icon=""></option>
              <option value="" data-icon=""></option>
              <option value="" data-icon=""></option>
            </optgroup>
          </select>
        </div>

        <div class="col s5">
          <input type="text" name="amount" class="ys-daterange" value="Recharge Amount" />
        </div>
        <div class="col s1">
          <button type='submit' class="btn btn-large"><span class='icon-back'></span></button>
        </div>
      </div>
    </form>

    <div class="row">
      <div class="col s12">

      </div>

      <div class="col s6">
        <a href=''><img src='https://via.placeholder.com/500x175'></a>
      </div>
      <div class="col s6">
        <a href=''><img src='https://via.placeholder.com/500x175'></a>
      </div>
    </div>

    <div class="col s12">
      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header">Recharge Status <p>You can check the status of recent recharge done here!</p></div>
          <div class="collapsible-body">
            <style>
            table, th{
              border-bottom: 5px solid;
              border-color: #ffffff;
              padding: 10px 20px;
              
            }
            td {
              border-bottom: 5px solid;
              border-color: #fafafa;
              background-color: #fff;
              padding: 10px 20px;
            }
            .successful{
              color: #7BD80F;
              font-size: 20px;
              font-weight: 600;
            }
            .refund{
              color: #FF5F73;
              font-size: 20px;
              font-weight: 600;
            }
            .pending{
              color: #F5A623;
              font-size: 20px;
              font-weight: 600;
            }
            .complain{
              background-color: #7700FE;
              color: #fff;
              font-size: 20px;
              font-weight: 600;
            }
          </style>

          <table>
            <tr>
              <th>Mobile Number</th>
              <th>Amount</th> 
              <th>Track ID</th>
              <th>Recharge Date</th>
              <th>Recharge Status</th>
            </tr>
            <tr>
              <td>+91 9818912345</td>
              <td>209</td>
              <td>VK1118046123</td>
              <td>27 Jun 2018</td>
              <td class="successful">Successful</td>
            </tr>
            <tr>
              <td>+91 9819912345</td>
              <td>450</td>
              <td>VK1118046123</td>
              <td>26 Jun 2018</td>
              <td class="pending">Pending</td>
            </tr>
            <tr>
              <td>+91 7719912345</td>
              <td>100</td>
              <td>VK1118046123</td>
              <td>26 Jun 2018</td>
              <td class="successful">Successful</td>
            </tr>
            <tr>
              <td>+91 9819954321</td>
              <td>168</td>
              <td>VK1118046123</td>
              <td>25 Jun 2018</td>
              <td class="refund">Refunded</td>
            </tr>
            <tr>
              <td>+91 9819912345</td>
              <td>480</td>
              <td>VK1118046123</td>
              <td>25 Jun 2018</td>
              <td><a class="btn-flat complain" style="border-radius: 20px;">Complain</a></td>
            </tr>
          </table>
        </div>
      </li>
    </ul>
  </div>
</main>

</div>
<div class="left-sidebar-hover"></div>



</body>
</html>