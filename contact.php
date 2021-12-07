<!DOCTYPE html>
<html>
<head>
	<title>Benkus -- Contact Us</title>
</head>
<body>
<?php $currentPage = 'contact'; include('menu.php'); include('header.php');?>
<div class="content ">
	<div class="contact_heading">
		<div class="container">
			<div style="display: inline-flex;flex-wrap: wrap; justify-content: center; padding-top: 2%;">
				<div class="a2">CONTACT US</div>
				<div>
				<br/>
				<p class="intro_text" style="display: none; color: #fff; font-family: sans-serif;font-size: 150%;">Thank you for trusting us. We are open and waiting eagerly to hear from you, please feel free to send us feedbacks, complains, suggestions etc.</p>
				</div>
				
				<section class="get-in-touch">
   <h1 class="title">Get in touch</h1>
   <form class="contact-form row row_contact" action="mail.php" method="POST">
      <div class="form-field col x-50">
         <input id="name" class="input-text js-input" type="text" name="sender_name" required>
         <label class="label" for="name">Name</label>
      </div>
      <div class="form-field col x-50">
         <input id="email" class="input-text js-input" type="email" name="email_address" required>
         <label class="label" for="email">E-mail</label>
      </div>
      <div class="form-field col x-100">
         <input id="message" class="input-text js-input" type="text" name="subject" required>
         <label class="label" for="subject">Subject</label>
      </div>
      <div class="form-field col x-100">
         <input id="message" class="input-text js-input"  type="text" name="message" required>
         <label class="label" for="message">Message</label>
      </div>
      <div class="form-field col x-100 align-center">
         <input class="submit-btn" type="submit" value="Submit" name="submit2">
      </div>
   </form>
</section>




			</div>
		</div>	
		</div>


	<?php include('footer.php');?>
</div>
</body>
</html>