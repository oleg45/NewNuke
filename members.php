<?php 
  require_once("models/Member.php");
  require_once("helpers/members_helper.php");
  $members = Member::getAllMembers();
?>

<?php include("header.php");?>
  
  <h3>Memebrs Page</h3>
  <?php echo showAllMembers($members); ?>

<?php include("footer.php");?>