<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<html>

 <link rel="stylesheet" href="vitrine.css" />


<head>
    <header>
    <link rel="stylesheet" href="header.php" />
    <?php include('header.php'); ?>
    
</header>
</head>
<body>

<?php 
$href2= "Acceuil.php"
$href3= "Programme.php"
$href4= "Contacts.php"
$href5= "404.php"
$href6= "contact-form.php"
echo $_GET['page1'] . $_GET['page2']. $_GET['page3'];

if ($_GET['page'] == 'accueil') {
    echo $href2;
    if ($_GET['page'] == 'programme')
        echo $href3;
        if ($_GET['page'] == 'contacts') 
            echo $href4;
            if ($_GET['page'] == '404') 
            echo $href5;
            echo $_POST['contact-form'];
            if (empty($href6)) 
            echo "<p> Aucune donnée reçus </p>"
}



?>

</body>
<footer>
<?php include('footer.php'); ?>


</footer>
</html>


