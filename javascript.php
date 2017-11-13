<?php

/**
 * @author 
 * @copyright 2015
 */
?>
<form>
<input type="password" id="Password1" onkeyup="ved()"/><span id="pass1"><img src="./data/checked.gif"></span><br />
<input type="passwoed" id="Password2" /><span id="pass2"></span><br />
</form>

<script type="text/javascript" lang="javascript">
functio ved()
{
    var pwd1 = documnet.getElementById("Password1").value;
    document.getElementById("pass1").innerHTML=pwd1;
    }

</script>
