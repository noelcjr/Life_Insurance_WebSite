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
        <nav id="concept3">
          <ul>
            <li id="subNav1"><a href="concepts.php">Importance</a></li>
            <li id="subNav2"><a href="c2.php">Term</a></li>
            <li id="subNav3"><a href="c3.php">Permanent</a></li>
            <li id="subNav5"><a href="c5.php">Testimonials</a></li>
            <li id="subNav4"><a href="c4.php">Suitability</a></li>
          </ul>
        </nav>
        <b>Permanent Life Insurance</b> is guaranteed to pay in the event of death, and never ends as long
        as the insurance policy is kept in force by paying the premiums according to the contract. These life insurance
        policies accumulate cash that can be accessed as loans or withdrawals. There are four main categories of permanent life insurance:
        Whole Life, Universal Life, Indexed Universal Life and Variable Universal Life.
           <ul><li><b>Whole Life:</b> In its traditional form, Whole Life policies mature at age 100, but most recent ones mature at 120.
               What that means is that premiums are paid until maturity date, at which point the policy owner receives the death benefit,
               and the policy becomes a matured endowment with a possible taxable event. If the insured dies before the maturity date,
               the beneficiaries receive the death benefit. Premiums must be paid on time to keep the insurance in force, and the policy
               builds cash. Whole life policies generally has the highest premiums.
           </li><li><b>Universal Life:</b> This type of policy gives more flexibility than whole life. You can schedule payments to pay up
               the policy at certain age, and even skip payments for periods of time as long as the policy is not allowed to lapse.
               The policy has more potential to accumulate cash than whole life. Cash built in the policy earns interests with a rate 
               declared by the insurance company.
           </li><li><b>Indexed Universal Life:</b> In this type of universal life policies, cash builds in the policy at interest rates that 
               depend on financial indexes such as the S&P 500. Cash in the policy is not directly invested in any financial index, and no 
               dividends are paid out. The rates are derived from the index according to a formula that roughly mirrors the performance of
               the index. Additionally, the formula caps the rates on both ends to eliminate the risks of loses when markets perform poorly, 
               and to earn a maximum rate (12% in some cases) when the markets are performing well. A fixed interest option is also available 
               for people with less tolerance to market risks who want a steady and safe growth of their cash value. A combination of fixed and
               indexed interest rates is allowed. 
           </li><li><b>Variable Universal Life:</b> This policy has flexibility, like Universal life policies, but the policy owner 
               has more choices for investing the cash accumulated. You can also invest in more than one option, or sub-account, and 
               have more control over the amount of risk. This is ideal for people who know how to invest, and can afford to pay higher 
               premiums to grow more cash. Unlike Indexed Universal Life policies, the interest rates are not capped. Variable policies 
               can lose cash value when the markets go down, or build up cash faster when the markets perform well.
            </li></ul>
        Now that you know about Term and Permanent life insurance policies in more detail, it is important to decide which one suits your situation. 
        In the next tab, we will give you a few tips that can make the decision easier when you meet with an agent.<bur><br>
      </td>
   </tr>
   <tr>
       <td>
           <div align="right">
           <form action="./c2.php" method="POST">
                <input id="buttonPrev" name="submit" type="submit" value="<<-Previous" />
           </form>
         </div>
      </td>
      <td>
          <div align="left">
           <form action="./c5.php" method="POST">
                <input id="buttonNext" name="submit" type="submit" value="Next->>" />
          </form>
         </div>
       </td>
   </tr>
<?php
include ('./footer.html');
?>
