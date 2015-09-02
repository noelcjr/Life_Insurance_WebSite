<?php
function term_drop_down(){
     $term = array (1 => 'Term 10','Term 20','Term 30');
     $term2 = array (1 => '10','20','30');
     $face = array (1 => '$100,000','$250,000','$500,000');
     $class = array (1 => 'Preferred Best','Preferred Non-Tobacco','Non-Smoker Plus','Non-Smoker','Preferred Smoker','Smoker');
     $height = array (1 => '4\'10"','4\'11"','5\'0"','5\'1"','5\'2"','5\'3"','5\'4"','5\'5"','5\'6"','5\'7"','5\'8"','5\'9"','5\'10"','5\'11"','6\'0"','6\'1"','6\'2"','6\'3"','6\'4"','6\'5"','6\'6"','6\'7"','6\'8"','6\'9"','6\'10"');
?>
    <form name="term" action="termquotereq.php" method="post" class="dark-matter">
      <center>
        <h4>Get a Term Life Insurance Quote</h4>
        <disc>All fields marked with a red asterisk <r>*</r> are required.</disc><br>
      </center>
      <label>
        <span><r>*</r>Age:</span>
         <select name="age" id="age">
         <option value="0" selected="selected"></option>
         <?php
           for ($age = 18; $age <= 75; $age++) {
         ?>
                <option <?php if($_POST['age']==$age) echo 'selected="selected"';?>value=<?php echo $age;?>><?php echo $age;?></option>
         <?php } ?>
          </select> <disc>years old.</disc>
      </label>
      <label>
        <span><r>*</r>Gender:</span>
            <select name="gender" id="gender">
              <option <?php if($_POST['gender']==0) echo 'selected="selected"';?>value="0"></option>
              <option <?php if($_POST['gender']==F) echo 'selected="selected"';?>value="F">Female</option>
              <option <?php if($_POST['gender']==M) echo 'selected="selected"';?>value="M">Male</option>
            </select>
      </label>
      <label>
        <span><r>*</r>Term Type:</span>
          <select name="term" id="term2">
          <option value=0></option>
          <?php
            foreach ($term as $key => $value) {
          ?>
               <option <?php if($_POST['term']==$key) echo 'selected="selected"'?> value="<?php echo $key;?>"><?php echo $value?></option>
          <?php } ?>
          </select> <disc>years.</disc>
      </label>
      <label>
        <span><r>*</r>Face Amount:</span>
            <select name="face" id="face">
            <option value="0"></option>
          <?php
            foreach ($face as $key => $value) {
          ?>
              <option <?php if($_POST['face']==$key) echo 'selected="selected"';?> value="<?php echo $key?>"><?php echo $value?></option>
          <?php } ?>
          </select> <disc>U.S. dollars.</disc>
      </label>
      <label>
        <span><r>*</r>Height:</span>
          <select name="height" id="height">
          <option value=0 selected="selected"></option>
          <?php
            for ($height2 = 58; $height2 <= 82; $height2++) {
          ?>
               <option <?php if($_POST['height']==$height2) echo 'selected="selected"';?>value=<?php echo $height2;?>><?php echo $height[$height2-57]?></option>
          <?php } ?>
          </select>, <r>*</r> <disc>Weight:</disck>
          <select name="weight" id="weight">
          <option value="0" selected="selected"></option>
         <?php
           for ($weight = 138; $weight <= 383; $weight++) {
         ?>
                <option <?php if($_POST['weight']==$weight) echo 'selected="selected"';?>value=<?php echo $weight;?>><?php echo $weight;?></option>
         <?php } ?>
         </select> <disc>lbs.</disc>
      </label>
      <label>
         </select> 
         <span><r>*</r>Smoke:</span>
         <select name="smoke1" id="smoke1">';
         <option <?php if($_POST['smoke1']==0) echo 'selected="selected"';?>value="0"></option>
         <option <?php if($_POST['smoke1']==Y) echo 'selected="selected"';?>value="Y">Yes, Smoke within last year.</option>
         <option <?php if($_POST['smoke1']==Q1to3yr) echo 'selected="selected"';?>value="Q1to3yr">Quit within 1 and 3 yrs ago.</option>
         <option <?php if($_POST['smoke1']==Q3to5yr) echo 'selected="selected"';?>value="Q3to5yr">Quit within 3 and 5 yrs ago.</option>
         <option <?php if($_POST['smoke1']==QMT5yr) echo 'selected="selected"';?>value="QMT5yr">Quit more than 5 yrs ago.</option>
         <option <?php if($_POST['smoke1']==Never) echo 'selected="selected"';?>value="Never">No cigarettes ever.</option>
         </select>
   </label>
      <label>
        <span>State:</span>
          <?php
            $states = array (1 => 'NY');
            echo '<select name="state" id="state2">';
            foreach ($states as $key => $value) {
                  echo "<option value=\"$key\">$value</option>\n";
            }
            echo '</select>';
          ?>
      </label>
      <label>
           <p align="center"><input type="submit" name="Submit" value="Get Term Quote" class="button"/></p>
           <input type="hidden" name="TermSubmitted" value="TRUE" />
      </label>
   </form>
<?php } ?>
