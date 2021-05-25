<?php
if ($_POST['submit_cancel_public']) {
	header("location: @admin_@panel_@manage.php");
}
if ($_POST['submit_reply_public']) {
	$reply=$_POST['text_reply'];

	date_default_timezone_set('Africa/Nairobi');
      $now = new DateTime();
      $time = $now->format('H:i');
      $date = $now->format('Y-m-d');

      $sqz=mysqli_query($con,"UPDATE `athlete_messages` SET `reply`='$reply',date_reply='$reply' WHERE id='$id'");
      echo "<h4 class='btn-warning'>Reply Sent Successifully</h4>";


}

?>