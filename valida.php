<?php
	header('charset=iso-8859-1');
    ob_start();
?>
<?php
    session_start();
    ob_flush();
    
    $_SESSION['name'] = $_POST['name'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['website'] = $_POST['website'];
	$_SESSION['comment'] = $_POST['comment'];
?>
<?php
    if ($_POST["name"] == "" || $_POST["email"] == "" || $_POST["website"] == "" || $_POST["comment"] == ""){
        echo "<script>alert('Todos os campos devem estar preenchidos.');</script>";
		echo" <script>history.go(-1);</script>";
		
    }else{
       echo" <script>document.location.href='contact.php'</script>";
    }
?>