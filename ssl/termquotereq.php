<?php # Script 3.4 - index.php
$page_title = 'Term Life Insurance Quote!';
include ('header.html');
?>
<body id="term">
<?php
include ('banner.html');
   $errors = array();
   include('termform.php');
   if (isset($_POST['TermSubmitted'])){
        if($_POST['age']==0){$errors[] = 'Select Age.';}
        if($_POST['gender']=="0"){$errors[] = 'Select gender.';}
        if($_POST['term']==0){$errors[] = 'Select Term choice.';}
        if($_POST['face']=="0"){$errors[] = 'Select face amount.';}
        if($_POST['height']==0){$errors[] = 'Select height.';}
        if($_POST['weight']=="0"){$errors[] = 'Select weight.';} 
        if($_POST['smoke1']=="0"){$errors[] = 'Select if you smoke.';}

        $SQL1 = "SELECT ".$_POST['gender'];
        if($_POST['gender'] == "M"){ $gen="male";}elseif($_POST["female"]){ $gen="female";}
        require_once('mysql_connect.php');
        $inches = $_POST['height']%12;
        $feet = ($_POST['height'] - $inches)/12;
        if($_POST['age'] < 60){  $SQL2 = "select * from WEIGHT_UNDER60 where height=".$_POST['height'];
        }else{                   $SQL2 = "select * from WEIGHT_OVER60 where height=".$_POST['height'];}
           $result = @mysql_query($SQL2);
           $row = mysql_fetch_array($result, MYSQL_NUM);
           if($_POST['smoke1']==Never || $_POST['smoke1'] == QMT5yr){ $smk = "does not smoke";
              if($_POST['weight'] <= $row[1]){                                        $SQL1 = $SQL1."PB ";
                 }elseif($_POST['weight'] > $row[1] && $_POST['weight'] <= $row[2]){  $SQL1 = $SQL1."PNT ";
                 }elseif($_POST['weight'] > $row[2] && $_POST['weight'] <= $row[3]){  $SQL1 = $SQL1."NSP "; 
                 }elseif($_POST['weight'] > $row[3] && $_POST['weight'] <= $row[4]){  $SQL1 = $SQL1."NS ";
                 }elseif($_POST['weight'] > $row[4]){                                 $SQL1 = $SQL1."NS ";}
           }elseif($_POST['smoke1'] == Q3to5yr){ $smk = "quit between 3 and 5 years ago";
                 if($_POST['weight'] <= $row[1]){                                     $SQL1 = $SQL1."PNT ";
                 }elseif($_POST['weight'] > $row[1] && $_POST['weight'] <= $row[2]){  $SQL1 = $SQL1."PNT ";
                 }elseif($_POST['weight'] > $row[2] && $_POST['weight'] <= $row[3]){  $SQL1 = $SQL1."NSP ";
                 }elseif($_POST['weight'] > $row[3] && $_POST['weight'] <= $row[4]){  $SQL1 = $SQL1."NS ";
                 }elseif($_POST['weight'] > $row[4]){                                 $SQL1 = $SQL1."NS ";}
           }elseif($_POST['smoke1'] == Q1to3yr){ $smk = "quit between 1 and 3 years ago";
                 if($_POST['weight'] <= $row[1]){                                     $SQL1 = $SQL1."NSP ";
                 }elseif($_POST['weight'] > $row[1] && $_POST['weight'] <= $row[2]){  $SQL1 = $SQL1."NSP ";
                 }elseif($_POST['weight'] > $row[2] && $_POST['weight'] <= $row[3]){  $SQL1 = $SQL1."NSP ";
                 }elseif($_POST['weight'] > $row[3] && $_POST['weight'] <= $row[4]){  $SQL1 = $SQL1."NS ";
                 }elseif($_POST['weight'] > $row[4]){                                 $SQL1 = $SQL1."NS ";}
           }elseif($_POST['smoke1'] == Y){ $smk = "smokes";
                   if($_POST['weight'] <= $row[2]){   $SQL1 = $SQL1."PS ";
                   }else{                             $SQL1 = $SQL1."S ";}           
              }
        mysql_free_result($result);
             if($_POST['term']==1){$SQL1 = $SQL1." FROM TERM10_";
        }elseif($_POST['term']==2){$SQL1 = $SQL1." FROM TERM20_";
        }elseif($_POST['term']==3){$SQL1 = $SQL1." FROM TERM30_";}
              if($_POST['face']==1){$SQL1 = $SQL1."100k WHERE age=".$_POST['age'];  $f = 100;
        } elseif($_POST['face']==2){$SQL1 = $SQL1."250k WHERE age=".$_POST['age'];  $f = 250;
        } elseif($_POST['face']==3){$SQL1 = $SQL1."500k WHERE age=".$_POST['age'];  $f = 500;}
     
       
        if(empty($errors)) {
?>         <tr>
              <td id="narrow"> <?php term_drop_down();?> </td>
              <td>
<?php         require_once('mysql_connect.php');
              $result = @mysql_query($SQL1);
              if($result){
                 while ($row = mysql_fetch_array($result, MYSQL_NUM)){
                     $t = $_POST['term']*10;
                     if($row[0] == -1){
                        if($t == 20){
                           echo "<h3>A US\$".$f.",000, ".$t." year Term life insurance";
                           echo " for a ".$_POST['age']." years old ".$gen." who ".$smk;
                           echo ", and is ".$feet."\'".$inches."\" tall, and weights ".$_POST['weight']."lbs cannot be purchased\n</h3>";
                           echo "<center><r> The age limit for a 20 year Term life insurance policy ";
                           echo "is 65 year old for non-smokers and 60 years old for smokers.</r></center>"; 
                        }elseif($t == 30){
                           echo "<h3>A US\$".$f.",000, ".$t." year Term life insurance";
                           echo " for a ".$_POST['age']." years old ".$gen." who ".$smk;
                           echo ", and is ".$feet."\'".$inches."\" tall, and weights ".$_POST['weight']."lbs cannot be purchased\n</h3>";
                           echo "<center><r> The age limit for a 30 year Term life insurance policy ";
                           echo "is 55 years old for non-smokers and 45 years old for smokers.</r></center>";
                        }
                     }else{
                         echo "<h3>A US\$".$f.",000, ".$t." year Term life insurance";
                         echo " for a ".$_POST['age']." years old ".$gen." who ".$smk;
                         echo ", and is ".$feet."'".$inches."\" tall, and weights ".$_POST['weight']."lbs costs:\n</h3>";
                         mt_srand($_POST['age']);
                         $randval = $row[0]+(mt_rand(1,200)/100);
                         echo "<quote>";
                         echo sprintf("$%.2f",$randval); //money_format('$%i', $randval);
                         echo "</quote> US$ per month.**";
                         echo "<br><h6>**This quote is an estimate from the mean of a market survey. ";
                         echo "Quotes in the survey are from highly rated insurance companies. ";
                         echo "Quotes from companies that deviate by more than US$2 from the survey's mean are not considered, ";
                         echo "an a new mean is calculated from remaining quotes. Agents from companies not considered in the mean ";
                         echo "will not be referred to clients who request to be contacted by an agent through this website. ";
                         echo "This quote is not guaranteed to be matched exactly by an agent. Only an agent can give you an official quote. "; 
                         echo "This quote is only for your guide, and It's not an official offer.</h6>";
                     }
                 }
                 mysql_free_result($result);
              }else{
                 echo mysql_error();
                 echo 'Query:';
                 echo $SQL1;
              }
              mysql_close();
?>
              </td>
           </tr>
           <tr>
                <td><div align="right">
                       <form action="c4.php" method="POST"><input id="buttonPrev" name="submit" type="submit" value="<<-Previous" /></form>
                </div></td>
                <td><div align="left">
                       <form action="mailquotereq.php" method="POST"> <input id="buttonNext" name="submit" type="submit" value="Next->>" /> </form>
                </div></td>
		</tr>
<?php   }else{    // else from errors ?>           
              <tr><td id="narrow">
<?php   term_drop_down();   ?>
              </td><td>
<?php          echo '<center><rs>Select the following field(s) to get a Term Life Insurance quote:</rs></center>';
               foreach ($errors as $msg) {   echo "<center><rs> - $msg<br /> </rs></center>\n";}
               $errors = array();
?>
             </td></tr>
             <tr><td><div align="right">
                       <form action="c4.php" method="POST"> <input id="buttonPrev" name="submit" type="submit" value="<<-Previous" /> </form>
             </div></td>
             <td><div align="left">
                      <form action="./mailquotereq.php" method="POST">
                        <input id="buttonNext" name="submit" type="submit" value="Next->>" />
                      </form>
             </div></td>
             </tr>
<?php  }
  }else{
?>     <tr><td id="narrow">
           <?php term_drop_down();?> 
       </td><td>
           <h3>Fill out the form to the left for a Term Life Insurance quote.</h3>
           <quote>$0.00</quote>       
       </td></tr>
       <tr><td><div align="right">
                <form action="c5.php" method="POST"> <input id="buttonPrev" name="submit" type="submit" value="<<-Previous" /> </form>
       </div></td>
       <td><div align="left">
           <form action="./mailquotereq.php" method="POST"><input id="buttonNext" name="submit" type="submit" value="Next->>" /></form>
       </div></td>
       </tr>
<?php } include ('footer.html');
?>
