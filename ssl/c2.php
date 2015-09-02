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
        <nav id="concept2">
          <ul>
            <li id="subNav1"><a href="concepts.php">Importance</a></li>
            <li id="subNav2"><a href="c2.php">Term</a></li>
            <li id="subNav3"><a href="c3.php">Permanent</a></li>
            <li id="subNav5"><a href="c5.php">Testimonials</a></li>
            <li id="subNav4"><a href="c4.php">Suitability</a></li>
          </ul>
        </nav>
        <b>Term Life insurance</b> is meant to protect you for a specific period of time, 10, 15, 20 or 30 years.
        Your coverage is in force as long as the monthly premiums are paid on time. After the period of coverage
        ends, it is possible to extend coverage, but this is usually very expensive. For that reason, it is important to 
        think carefully about the unforeseen possibility of needing more coverage at the end of the term period. If that is the case, 
        a permanent life policy would be a better choice.<br><br>

        There are two types of Term life insurance. In traditional term life insurance, payments made to the insurance company are not
        refundable. The other type of Term insurance is Return of Premium (ROP). In this type of policy, the policy owner 
        receives all of the money paid at the end of the policy term. ROP costs more than traditional term life insurance. 
        Remember that because of inflation the reimbursement of premiums by ROP insurances is devalued compared to when the policy 
        is purchased. A permanent policy is recommended to help offset the loss of fund's value in the policy over time.<br><br>
     </RD>
  <tr>
  <tr>
       <td>
         <div align="right">
           <form action="./concepts.php" method="POST">
                <input id="buttonPrev" name="submit" type="submit" value="<<-Previous" />
           </form>
         </div>
      </td>
      <td>
          <div align="left">
           <form action="./c3.php" method="POST">
                <input id="buttonNext" name="submit" type="submit" value="Next->>" />
          </form>
         </div>
      </td>
  </tr>
<?php
include ('./footer.html');
?>
