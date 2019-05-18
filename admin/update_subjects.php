<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$predmet=$_POST['predmet'];
$semestar=$_POST['semestar'];
//$category_id=$_POST['category_id'];
//$author=$_POST['author'];
//$book_copies=$_POST['book_copies'];
//$book_pub=$_POST['book_pub'];
//$publisher_name=$_POST['publisher_name'];
//$isbn=$_POST['isbn'];
//$copyright_year=$_POST['copyright_year'];
/* $date_receive=$_POST['date_receive'];
$date_added=$_POST['date_added']; 
$status=$_POST['status'];
*/



mysqli_query($mysqli,"update predmeti set predmet='$predmet', semestar='$semestar' where predmet_id='$id'")or die(mysql_error());
								
								
 header('location:predmeti.php');
}
?>	