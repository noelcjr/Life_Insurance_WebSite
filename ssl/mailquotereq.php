<?php # Script 4.13 - register.php
$page_title = 'Register';
include ('header.html');
?>
<body id="contact">
<script>
function autotab(current,to){
    if (current.getAttribute && current.value.length==current.getAttribute("maxlength")) {
        to.focus()
    }
}
</script>
<?php
// Check if the form has been submitted.
   include('mailform.php');
if (isset($_POST['submitted'])) {
        $errors = array(); // Initialize error array.
	if(empty($_POST['firstname'])){$errors[] = 'First Name.';}
	if(empty($_POST['lastname'])) {$errors[] = 'Last Name.';}
        if(empty($_POST['address1']))  {$errors[] = 'Address.';}
        if(empty($_POST['city']))     {$errors[] = 'City.';}
        if(empty($_POST['state']))    {$errors[] = 'State.';}
        if(empty($_POST['zipcode']))  {$errors[] = 'Zip code.';}
        if(empty($_POST['email']))    {$errors[] = 'E-mail.';}

	// Check for a password and match against the confirmed password.
        $numb1 = $_POST['n1'] . $_POST['n2'] . $_POST['n3'];        
        $numb1f = "(" . $_POST['n1'] . ") " . $_POST['n2'] . "-" . $_POST['n3'];
	if (empty($_POST['n1']) || empty($_POST['n2']) || empty($_POST['n3'])){
            $errors[] = 'Your Contact Number must have 10 digits. Fill in missing digits';
	} else {
            if(strlen($numb1) != 10){
		$errors[] = 'Your Contact Number must have 10 digits. Fill in missing digits.';
            }
	}

	if (empty($errors)) { // If everything's okay.
        // Send an email.
        $body = "An appointment has been requested \n Name: " . $_POST['firstname'] . " " . $_POST['lastname'] . "\n" .
                "Contact Number: $numb1f \n Address: " . $_POST['address1'] . " " . $_POST['address2'] . ", " .
                $_POST['city'] . ", " . $_POST['state'] . " " . $_POST['zipcode'] . "\n E-mail: " . $_POST['email'];
        mail ('noelcarrascal@gmail.com', 'Appointment Request!', $body, 'From: contact@nylifeinsurancequote.info');
        include ('banner.html');
?>
  <tr>
    <td colspan="2">
       <center>
         <h4>Thank You!</h4>
         <h3>Your request has been processed. A licensed life insurance agent will contact you within 24 hours.</h3>
       </center>
    </td>
  </tr>
  <tr>
       <td>
           <div align="right">
                       <form action="termquotereq.php" method="POST">
                           <input id="buttonPrev" name="submit" type="submit" value="<<-Previous" />
                       </form>
                    </div>
                </td>
                <td>
                   <div align="left">
                      <form action="index.php" method="POST">
                        <input id="buttonNext" name="submit" type="submit" value="Home->>" />
                      </form>
                   </div>
       </td>
  </tr>
<?php
include ('footer.html');		
	} else {
include ('banner.html');
?>   <tr><td colspan="2">
<?php
                // Report the errors.
                echo '<center><rs>Fill in the following field(s) to send this form:</rs></center>';
                foreach ($errors as $msg) { // Print each error.
                    echo "<tr><td><center><rs> - $msg<br /> </rs></center></td></tr>\n";
                }
?>
     </td></tr>
     <tr><td colspan="2">
<?php
                contact_fill_form();
?>
    </td></tr>
<?php
include ('footer.html');	
	} // End of if (empty($errors)) IF.
}else{
     include ('banner.html');
?>   <tr><td colspan="2">
<?php
        contact_fill_form();
?>     
     </td></tr>
     <tr>
       <td>
           <div align="right">
                       <form action="termquotereq.php" method="POST">
                           <input id="buttonPrev" name="submit" type="submit" value="<<-Previous" />
                       </form>
                    </div>
                </td>
                <td>
                   <div align="left">
                      <form action="index.php" method="POST">
                        <input id="buttonNext" name="submit" type="submit" value="Home->>" />
                      </form>
                   </div>
       </td>
  </tr>
<?php
     include ('footer.html');
}
?>
