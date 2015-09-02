<?php # Script 3.4 - index.php
$page_title = 'About this web site!';
include ('./header.html');
?>
<body id="concepts">
<?php
include ('./banner.html');
?>
  <tr>
     <td colspan="2">
        <nav id="concept1">
          <ul>
            <li id="subNav1"><a href="concepts.php">Importance</a></li>
            <li id="subNav2"><a href="c2.php">Term</a></li>
            <li id="subNav3"><a href="c3.php">Permanent</a></li>
            <li id="subNav5"><a href="c5.php">Testimonials</a></li>
            <li id="subNav4"><a href="c4.php">Suitability</a></li>
          </ul>
        </nav>
        The main idea behind life insurance is to protect surviving relatives from financial difficulties in the event of death. 
        Life insurance proceeds are usually used to provide tax-free income for the surviving spouse, pay off a mortgage, put children 
        through college and/or to cover final expenses.<br><br>
        
        Life insurance can also have additional uses in personal and business financial planing. Those types of life insurances
        are outside the scope of this website, so make sure to ask your insurance agent for more information if you are a business owner.<br><br>

        The recommended amount of life insurance depends on the particular circumstances of the applicant. A quick rule of thumbs is to
        multiply the applicant's annual gross salary by two, five, ten or even more years. The right number of income years depends on 
        the age of the insured person, age of beneficiaries, and affordability, among other factors. An insurance policy is meant to 
        give you peace of mind, and not to put a heavy burden on your budget.<br><br>

        Because of the many types of life insurance policies and their many features, they are very important in financial planing and are 
        used for additional reasons besides protection in the event of death. With this in mind, life insurance products can be categorized 
        in different ways. One initial, simple way to categorize life insurance is by distinguishing them from the length of protection they 
        provide, and that is Term and permanent life insurance.<br><br>
 
        Click next to learn more about Term and Permanent life insurance policies.<br><br>
        <br><br>
      </td>
   </tr>
   <tr>
      <td>
         <div align="right">
           <form action="./index.php" method="POST">
	        <input id="buttonPrev" name="submit" type="submit" value="<<-Previous" />
           </form>
         </div>
      </td>
      <td>
         <div align="left">
           <form action="./c2.php" method="POST">
                <input id="buttonNext" name="submit" type="submit" value="Next->>" />
          </form>
         </div>
      </td>
   </tr>
<?php
include ('./footer.html');
?>
