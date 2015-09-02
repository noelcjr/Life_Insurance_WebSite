<?php
function contact_fill_form(){
?>
<center>
  <form name="info" action="mailquotereq.php" method="post" class="dark-matter">
    <h4>Request for a life insurance professional to contact you</h4>
        <disc>All fields marked with a red asterisk <r>*</r> are required.</disc><br>
    <label>
        <span><r>*</r>Name :</span>
        <input id="firstname" type="text" name="firstname" value="<?php echo $_POST['firstname'] ?>" onKeyup="autotab(this, document.info.MI)" placeholder="First Name" />
        <input id="mi" type="text" name="MI" value="<?php echo $_POST['mi'] ?>" onKeyup="autotab(this, document.info.lastname)" placeholder="M.I." />
        <input id="lastname" type="text" name="lastname" value="<?php echo $_POST['lastname'] ?>" onKeyup="autotab(this, document.info.address1)" placeholder="Last Name" />
    </label>
    <label>
        <span><r>*</r>Address 1 :</span>
        <input id="address1" type="text" name="address1" value="<?php echo $_POST['address1'] ?>" onKeyup="autotab(this, document.info.address2)" placeholder="Address" />
    </label>
    <label>
        <span>Address 2 :</span>
        <input id="address2" type="text" name="address2" value="<?php echo $_POST['address2'] ?>" onKeyup="autotab(this, document.info.city)" placeholder="Address" />
    </label>
    <label>
        <span><r>*</r>City, State, zip :</span>
        <input id="city" type="text" name="city" value="<?php echo $_POST['city'] ?>" onKeyup="autotab(this, document.info.state)" placeholder="city" />
        <input id="state" type="text" name="state" value="<?php echo $_POST['state'] ?>" onKeyup="autotab(this, document.info.zipcode)" placeholder="state" />
        <input id="zipcode" type="text" name="zipcode" value="<?php echo $_POST['zipcode'] ?>" onKeyup="autotab(this, document.info.email)" placeholder="zip code" />
    </label>
    <label>
        <span><r>*</r>Email: </span>
        <input id="email" type="email" name="email" value="<?php echo $_POST['email'] ?>" onKeyup="autotab(this, document.info.n1)" placeholder="Valid Email Address" />, <r>*</r> Telephone:
        (<input id="n1" type="text" name="n1" value="<?php echo $_POST['n1'] ?>" size="3" onKeyup="autotab(this, document.info.n2)" maxlength="3" >)
         <input id="n2" type="text" name="n2" value="<?php echo $_POST['n2'] ?>" size="3" onKeyup="autotab(this, document.info.n3)" maxlength="3" > -
         <input id="n3" type="text" name="n3" value="<?php echo $_POST['n3'] ?>" size="4" onKeyup="autotab(this, document.info.n4)" maxlength="4" >
    </label>    
    <label>
        <disc>By completing the form above and clicking on the "Submit" button, I am providing my electronic signature to request 
        that a licensed representative or an appointed independent insurance agent contact me by telephone, email or mail 
        using the information I have supplied above even if I have previously requested not to receive marketing mail, 
        paper or electronic, or if my phone number is on a Do-Not-Call list. By submitting this form, 
        I consent to receive phone calls, auto-dialed and/or pre-recorded telephone messages in response to my request 
        at the phone number provided. I understand that consent to be contacted by an agent does not requires me to 
        make any purchase from the agent.</disc><br>
        <input id="n4" name="submit" type="submit" class="button" value="Submit" />
        <input type="hidden" name="submitted" value="TRUE" /> 
    </label>    
  </form>
</center>
<?php } ?>
