<?php
@include 'db.php';


$name_txt= $_POST['name'];
$email_id = $_POST['email'];
$feedback_txt= $_POST['feedbk'];
$conn = mysqli_connect("localhost", "root","", "travel");
$query ="INSERT INTO feedback(name,email,feedback) VALUES('$name_txt','$email_id', '$feedback_txt')";
$result = mysqli_query($conn, $query);
if($result){
  header("Location: http://localhost/tns/tourly-master/index.html");
  			?>
		<script type="text/javascript">
			alert("Thank you for your feedback. We\'ll appreciate!'");
		</script>
		<?php
}
else
{
die("Something terrible happened. Please try again. ");

}
?>
	