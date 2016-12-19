<?php include "inc/topPart.inc"; ?>

<?php include "inc/nav.inc"; ?>

<h1 class="s3-title">Contact Me</h1>

<div class="s3-border">

<form method="post" action="database-write.php" name="myForm" onsubmit="return(validate());"> 

<div>
<label for="name">
Name:
</label>
<input type="text" name="name" id="name"> 
</div>

<div>
<label for="email">
Email:
</label>
<input type="text" name="email" id="email">
</div>

<div>
<label for="phone">
Phone Number:
</label>
<input type="text" name="phone" id="phone">
</div>

<div>
	<label for="message">
	Message:
	</label>
	<textarea name="message" id="message"></textarea>
</div>


<label for="submit">
</label>
<input type="submit" name="submit" id="submit" value="send">


</form>

<br>

<div>Or Go <a href=".">Back to the Index</a></div>

</div>



<?php include "inc/scripts.inc" ?>
</body>
</html>