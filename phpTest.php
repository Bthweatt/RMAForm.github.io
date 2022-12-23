

<script defer src="rmaJS.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.28/jspdf.plugin.autotable.min.js"></script>
<link rel="stylesheet" href="rmaCss.css">

<div class="rma-rendered-form">
  <div class="rma-inner-form">
    <form action="phpTest.php" method="get" enctype="text/plain">
    <div class="">
        <h1 access="false" id="re">j5create RMA Return Form</h1></div>
    <div class="">
        <h3 access="false" id="" style="text-decoration: underline;">Please fill out form in its entirety in order for return process to be completed.</h3></div>
    <div class="form-group">
        <label for="" class="">Name<span class="required-field">*</span></label>
        <input type="text" class="form-control" name="name" access="false" id="" required="required" novalidate aria-required="true">
    </div>
    <div class="form-group">
        <label for="" class="">Date<span class="required-field">*</span></label>
        <input type="text" class="form-control" name="date" access="false" id="" required="required" aria-required="true">
    </div>
    <div class="form-group">
        <label for="" class="">Date of Purchase<span class="required-field">*</span></label>
        <input type="text" class="form-control" name="date_of_purchase" access="false" id="" required="required" aria-required="true">
    </div>
    <div class="form-group">
        <label for="" class="">Ticket Number<span class="required-field">*</span></label>
        <input type="text" class="form-control" name="ticket_number" access="false" id="" required="required" aria-required="true">
    </div>
    <div class="form-group">
        <label for="" class="">Reason for Return<span class="required-field">*</span></label>
        <input type="text" class="form-control" name="reason_for_return" access="false" id="" required="required" aria-required="true">
    </div>
    <div class="form-group">
        <label for="" class="">Preferred Mailing Address<span class="required-field">*</span></label>
        <input type="text" class="form-control" name="preferred_mailing_address" access="false" id="" required="required" aria-required="true">
    </div>
    <div class="form-group">
        <label for="" class="">Phone Number<span class="required-field">*</span></label>
        <input type="text" class="form-control" name="phone_number" access="false" id="" required="required" aria-required="true">
    </div>
    <div class="form-group">
        <label for="" class="">Preferred Email<span class="required-field">*</span></label>
        <input type="text" class="form-control" name="preferred_email" access="false" id="custEmail" required="required" aria-required="true">
    </div>
    <div class="form-group">
        <label for="" class="">Vendor
            <span class="required-field">*</span></label>
        <input type="text" class="form-control" name="vendor" access="false" id="" required="required" aria-required="true">
    </div>
    <div class="form-group">
        <label for="" class="">SKU/Model (Ex. JCD543)
            <span class="required-field">*</span></label>
        <input type="text" class="form-control" name="sku" access="false" id="" required="required" aria-required="true">
    </div>
    <div class="form-group">
        <label for="" class="">Serial Number
            <span class="required-field">*</span></label>
        <input type="text" class="form-control" name="serial_number" access="false" id="" required="required" aria-required="true">
    </div>
    <input type="submit" value="Submit">
  <div id="subBtn">
    <p style="color: red;" id="errorText"></p>
     
    <button data-micromodal-open="modal-1" role="button" type="submit" onclick="test()">Submit Form</button></div>
      </form>
  </div>
</div>

<?php
$name = $_GET['name'];
echo $name,
$date = $_GET['date'];

echo $date,
$date_of_purchase = $_GET['date_of_purchase'];

echo $date_of_purchase,
$ticket_number = $_GET['ticket_number'];

echo $ticket_number,
$reason_for_return = $_GET['reason_for_return'];

echo $reason_for_return,
$preferred_mailing_address = $_GET['preferred_mailing_address'];

echo $preferred_mailing_address,
$phone_number = $_GET['phone_number'];

echo $phone_number,
$preferred_email = $_GET['preferred_email'];

echo $preferred_email,
$vendor = $_GET['vendor'];

echo $vendor,
$sku = $_GET['sku'];

echo $sku,
$serial_number = $_GET['serial_number'];

echo $serial_number;

$email = test_input($_POST["email"]);


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<!-- Modal for onClick event -->
<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
        <header class="modal__header">
          <h2 class="modal__title" id="modal-1-title">
            Thanks for your submission!
          </h2>
          <!--<button class="modal__close" aria-label="Close modal" data-micromodal-close></button>-->
        </header>
        <main class="modal__content" id="modal-1-content">
          <p>
            <strong>Your form has been submitted. To save a copy of your submission, please click the "Print PDF" button below.
              <br><br>
              For more information please contact us via live chat at <a href="https://en.j5create.com/support">j5create Customer Support</a> or call us at 1-888-988-0488. Phone Support Hours are from 9:00 AM to 5:00 PM Eastern Standard Time, Monday through Friday, excluding holidays</strong>
          </p>
        </main>
        <footer class="modal__footer">
          <button class="modal__btn modal__btn-primary" onclick="javascript:rmagenerate();">Print PDF</button>
          <button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">Close</button>
        </footer>
      </div>
    </div>
  </div>
<!-- jspdf Autotable script find -->
<table id="rmatable" style="display: none !important;">
<tbody>
<tr>
<td>Name</td>
<td class="td"></td>
</tr>
<tr>
<td>Date</td>
<td class="td"></td>
</tr>
<tr>
<td>Date of Purchase</td>
<td class="td"></td>
</tr>
<tr>
<td>Ticket Number</td>
<td class="td"></td>
</tr>
<tr>
<td>Reason for Return</td>
<td class="td"></td>
</tr>
<tr>
<td>Preferred Mailing Address</td>
<td class="td"></td>
</tr>
<tr>
<td>Phone Number</td>
<td class="td"></td>
</tr>
<tr>
<td>Preferred Email</td>
<td class="td"></td>
</tr>
<tr>
<td>Vendor</td>
<td class="td"></td>
</tr>
<tr>
<td>SKU/Model (Ex. JCD543)</td>
<td class="td"></td>
</tr>
<tr>
<td>Serial Number</td>
<td class="td"></td>
</tr>
</tbody>
</table>


