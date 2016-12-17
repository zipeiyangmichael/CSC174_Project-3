<?php include "inc/topPart.inc"; ?>

<?php include "inc/nav.inc"; ?>

<h1>Phonebook Entry</h1>

<form method="post" action="database-write.php"> 

<div>
<label for="firstname">
First name:
</label>
<input type="firstname" name="firstname" id="firstname"> 
</div>

<div>
<label for="lastname">
Last name:
</label>
<input type="lastname" name="lastname" id="lastname">
</div>

<div>
<label for="email">
Email:
</label>
<input type="email" name="email" id="email">
</div>


<label for="submit">
</label>
<input type="submit" name="submit" id="submit" value="send">


</form>

<br>

<div>Or Go <a href=".">Back to the Index</a></div>



<?php include "inc/scripts.inc" ?>
</body>
</html>