
<style type="text/css">
	.link-style{
		color: white; text-decoration: none;
	}
	.link-style:hover{
		text-decoration: none;
		color: white;
	}
</style>

<div class="menu">

  <a href="index.php" class="link-style"><div class="<?php if($currentPage =='index'){echo 'active';}?> menu-item">Home</div></a>

  <a href="services.php" class="link-style"><div class="<?php if($currentPage =='services'){echo 'active';}?> menu-item">Services</div></a>

  <a href="about.php" class="link-style"><div class="<?php if($currentPage =='about'){echo 'active';}?> menu-item">About Us</div></a>

  <a href="contact.php" class="link-style"><div class="<?php if($currentPage =='contact'){echo 'active';}?> menu-item">Contact Us</div></a>
  <hr/>
   <a href="stuck.php" class="link-style"><div class="<?php if($currentPage =='stuck'){echo 'active';}?> menu-item">Property stuck</div></a>
   
</div>