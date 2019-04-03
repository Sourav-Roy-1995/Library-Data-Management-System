<?php

  include 'includes/header.php';
  include 'counter/visitor_count.php';

?>

<div class="contact-container container">
  <form  action="comment_done.php" method="POST">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Mobile Number</label>
    <input type="text" id="lname" name="mobile" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="Bangladesh">Bangladesh</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="india">India</option>
      <option value="sreelanka">Sreelanka</option>
      <option value="nepal">Nepal</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div> 




<?php	
	include 'includes/footer.php';
?>