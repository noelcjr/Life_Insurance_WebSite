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
        <nav id="concept4">
          <ul>
            <li id="subNav1"><a href="concepts.php">Importance</a></li>
            <li id="subNav2"><a href="c2.php">Term</a></li>
            <li id="subNav3"><a href="c3.php">Permanent</a></li>
            <li id="subNav5"><a href="c5.php">Testimonials</a></li>
            <li id="subNav4"><a href="c4.php">Suitability</a></li>
          </ul>
        </nav>
      So, do Term or permanent life insurance suit you better? Here are some concepts to help you answer this question.<br><br>

      Plain Term vs. permanent life insurance is like renting vs. buying a home. Rent, like term insurance, is an expense that you will 
      never recover. Permanent life insurance is like buying a home, and it builds up value for you. 
      The cash that builds in permanent policies can be as much as what you paid into the policy over the years, and sometimes more.
      For this reason, the cost of term is usually less expensive than permanent for the same death benefit amount, but 
      it is usually more expensive than some permanent life insurances on the long run.<br><br>
      
      When you meet with a life insurance agent, think of him/her as a tailor who is going to make you a jacket or a dress. 
      Ask the tailor as many questions. Do not feel afraid to seem uninformed, he is there to answer your questions. Request as many 
      modifications during application and until you feel comfortable with the policy of your choice. If the agent recommends 
      a different policy from the one you had in mind, think carefully of the reasons he gives you in support of his recommendation.
      That way when you actually sign the final policy, you will be comfortable with your purchase, just like you should when wearing 
      a custom made jacket or dress on a night out.<br><br>

      Both permanent and term life insurance policies come with optional features or riders. Some riders are free, others can increase 
      the monthly premiums. Ask your agent if there are any riders included in the quote he gives you.<br><br>  

      An agent is usually appointed with a particular insurance company, but he can get you a policy from another company. If you 
      want to shop around, you do not need another agent to compare prices.<br><br>

      Only an agent can quote you a permanent policy. This is because of the many variables that go into a permanent quote.
      A term life insurance quote will provide you with a baseline, a point of reference, to compare with the cost of permanent 
      life insurance. Click next to get a Term life insurance quote.<br><br>
      </td>
   </tr>
   <tr>
       <td>
           <div align="right">
           <form action="c5.php" method="POST">
                <input id="buttonPrev" name="submit" type="submit" value="<<-Previous" />
           </form>
         </div>
      </td>
      <td>
          <div align="left">
           <form action="termquotereq.php" method="POST">
                <input id="buttonNext" name="submit" type="submit" value="Next->>" />
          </form>
         </div>
       </td>
   </tr>
<?php
include ('./footer.html');
?>
