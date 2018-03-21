<html>
<body>
<script>
function process()
{
var url="https://v2.steemconnect.com/sign/delegateVestingShares?delegator=" + document.getElementById("url").value +"&delegatee=astrobot&vesting_shares="+document.getElementById("steempower").value +"%20VESTS";
location.href=url;
return false;
}
</script>

<form onSubmit="return process();">
<center>
<h2 style="color:Black;"> Welcome to <a href="https://steemit.com/@astrobot">@astrobot</a> Delegation service. </h2><p>
<center><img src="/images/astrobot.jpg">
</p>
<p>
</p>
You can earn daily passive income by delegating your Steem Power (Vest) to <a href="https://steemit.com/@astrobot">@astrobot</a>. However You can undelegate your SP anytime you want (it takes one week)

<h2 style="color:Black;"> How much will I earn?</h2>
It depends on your SP contribution and how much the bot has earned on previous day. The bot distributes 80% rewards to all delegators next next day. 
Consider this scenary example:
There are two delegators - 'Pippo' & 'Pluto'.
<p>
Pippo delegated 900 VP & Pluto delegated 100 VP: Astrobot VP is 1000 VP
<p>
<p>
Pippo delegated 90% of Total Astrobot VP & Pluto delegated 10% of Total Astrobot VP
<p>
<p>
Astrobot earned $100 SBD on previous day.
Next day it is going to distribute the 80% of $100 SBD to all delegators. 
<p>
<p>
Pippo will receive the 90% of 80% earned by astrobot & Pluto will receive the 10% of 80% earned by astrobot
<p>
<p>
Pippo will receive $72 SBD & Pluto will receive $8  SBD
<p>
<p>

If the bot earns no money on previous day, nobody will get paid on the following day.
<p>
<hr>
<p>
Select The Amount Of Steem Power You Wish To Delegate and Enter Your Steemit Username Below To Get Started.</p>
Select Amount Of Steem Power To Delegate: 
<select id="steempower">
<option value="51376.58419">25 Steem Power</option>
<option value="102753.16839">50 Steem Power</option>
<option value="205506.33678">100 Steem Power</option>
<option value="411012.67356">200 Steem Power</option>
<option value="1027530.168390">500 Steem Power</option>
<option value="2055060.336780">1000 Steem Power</option>
</select>
</br>
Enter Steemit Username:<input type="text" name="url" id="url"> <input type="submit" value="Delegate Now">

</center>
</form>
<p>
<h2>This service use Steemconnect for authenticate users and does not store any passwords</h2>

<hr>
This is the list of Delegator and their Vest:
<p>

<?php
$output = shell_exec("python3 delegator.py astrobot");
echo nl2br($output);
?>


</body> 
</html>



