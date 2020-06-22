<?php
include_once'Includes/connection.php';
include_once'MJcode.php';
include_once'Includes/header.php';
$Count_NameErr = $Count_emailErr = $CountMessErr = 0;

if (isset($_POST['Send'])) {
    $name = trim(addslashes($_POST['name']));
    $email = trim(addslashes($_POST['email']));
    $message = trim(addslashes($_POST['message']));
    $phone = trim(addslashes($_POST['phone']));
    $date = date("Y-m-d h:i:s");

    $mjcode = new MJcode($name, $email, $message, $phone, $date);
    if($mjcode->insertContact()){
        echo "<script>alert('Votre message est envoyé avec succès)</script>";
    }
}

?>

<body>

<?php
	include_once'Includes/preloader.php';
	include_once'Includes/navbar.php';
	include_once'Includes/slides.php';
	include_once'Includes/about.php';
	include_once'Includes/services.php';
	include_once'Includes/team.php';
	include_once'Includes/hiring.php';
	include_once'Includes/projects.php';
	include_once'Includes/contact.php';
	include_once'Includes/footer.php';
?>
