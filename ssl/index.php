<?php # Script 3.4 - index.php
$page_title = 'NY life insurance quote!';
include ('./header.html');
?>
<body id="home">
<?php
include ('./banner.html');
?>
<script>
function autotab(current,to){
    if (current.getAttribute && current.value.length==current.getAttribute("maxlength")) {
        to.focus() 
    }
}
</script>
    <tr>
      <td>
                      <center><h4>Welcome to NYlifeinsurancequote.info</h4></center><br>
                      Need life insurance? This site is a simple way to understand life insurance. It will
                      give you a quick guide to life insurance concepts and costs.<br><br>

                      Life insurance policies are usually sold through an agent. Because life insurance is a complex and long term financial planning
                      instrument, you need an experienced agent to help you pick the right life insurance policy. This site is intended
                      as a preparation for when you meet an agent, so that you can have a more in depth, productive conversation and arrive 
                      to a life insurance solution that suits you better.<br><br> 
 
                      Don't let busy websites overwhelm you. Just click next below to learn more about life insurance, get term insurance quotes
                      and contact an agent in an easy and secured way.
      </td>
    </tr>
    <tr>
      <td>
          <form action="./concepts.php" method="POST">
             <div align="center">
                <input id="buttonNext" name="submit" type="submit" value="Next->>" />
             </div>
          </form>
      </td>
    </tr>
<?php
include ('./footer.html');
?>
