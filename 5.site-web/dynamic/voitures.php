
<?php

if(isset($_GET['voitures'])){

$voitures = $_GET['voitures'];
switch($voitures){
    case "class1":
        $titre = "class 1";
        $content = "   
        <img src='./src/auto-01.png'>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quaerat ut officiis? Ab porro asperiores totam pariatur neque molestias saepe minus laborum repellendus excepturi, eligendi eos possimus iusto ducimus, consectetur quisquam suscipit consequatur, quis officia labore itaque assumenda accusamus perferendis. A quasi architecto fuga nam aspernatur, mollitia debitis vitae quisquam! Recusandae eum doloribus amet maiores tenetur ratione minima dolor neque quisquam modi, quibusdam odio quidem assumenda a blanditiis vero rem dignissimos repellendus impedit consectetur, ea quod. Optio soluta rem recusandae, eaque cupiditate dolore! Vitae ipsum, non, eaque distinctio exercitationem laborum atque nam laudantium commodi, quia et? Reprehenderit asperiores suscipit architecto est veritatis, eaque illo? Deleniti, molestias repudiandae? Architecto, sint hic? Totam ipsum, optio eos dicta autem perspiciatis dolor asperiores expedita! Harum maiores saepe est quaerat consequatur itaque illum, vero, asperiores atque eligendi fugiat! Iure necessitatibus ipsam quidem veniam tempora sint alias quis voluptate perferendis. Rem accusantium veritatis eveniet repudiandae recusandae, assumenda non expedita, voluptatum amet nemo, ducimus sit officia asperiores enim sequi distinctio provident dolores ipsum veniam soluta mollitia laboriosam ex. Quidem necessitatibus similique illo, doloribus voluptate magnam hic consectetur esse vero earum rem, incidunt nulla quod aliquam totam ex alias maxime. Praesentium neque ratione at perspiciatis natus, culpa, quas ipsa magnam molestiae dolores nobis! Ducimus perspiciatis minima animi iste dignissimos explicabo sit autem quisquam, hic odio obcaecati deserunt, aliquam sed aperiam! Labore corrupti temporibus aut molestias quibusdam expedita. Nesciunt vel, modi possimus provident dicta unde culpa tempore sint veniam ullam adipisci? Ipsam similique harum numquam, eos autem earum ea.</p>";
        break;
    case "class2":
        $titre = "class 2";
        $content = " 
        <img src='./src/auto-02.png'>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quaerat ut officiis? Ab porro asperiores totam pariatur neque molestias saepe minus laborum repellendus excepturi, eligendi eos possimus iusto ducimus, consectetur quisquam suscipit consequatur, quis officia labore itaque assumenda accusamus perferendis. A quasi architecto fuga nam aspernatur, mollitia debitis vitae quisquam! Recusandae eum doloribus amet maiores tenetur ratione minima dolor neque quisquam modi, quibusdam odio quidem assumenda a blanditiis vero rem dignissimos repellendus impedit consectetur, ea quod. Optio soluta rem recusandae, eaque cupiditate dolore! Vitae ipsum, non, eaque distinctio exercitationem laborum atque nam laudantium commodi, quia et? Reprehenderit asperiores suscipit architecto est veritatis, eaque illo? Deleniti, molestias repudiandae? Architecto, sint hic? Totam ipsum, optio eos dicta autem perspiciatis dolor asperiores expedita! Harum maiores saepe est quaerat consequatur itaque illum, vero, asperiores atque eligendi fugiat! Iure necessitatibus ipsam quidem veniam tempora sint alias quis voluptate perferendis. Rem accusantium veritatis eveniet repudiandae recusandae, assumenda non expedita, voluptatum amet nemo, ducimus sit officia asperiores enim sequi distinctio provident dolores ipsum veniam soluta mollitia laboriosam ex. Quidem necessitatibus similique illo, doloribus voluptate magnam hic consectetur esse vero earum rem, incidunt nulla quod aliquam totam ex alias maxime. Praesentium neque ratione at perspiciatis natus, culpa, quas ipsa magnam molestiae dolores nobis! Ducimus perspiciatis minima animi iste dignissimos explicabo sit autem quisquam, hic odio obcaecati deserunt, aliquam sed aperiam! Labore corrupti temporibus aut molestias quibusdam expedita. Nesciunt vel, modi possimus provident dicta unde culpa tempore sint veniam ullam adipisci? Ipsam similique harum numquam, eos autem earum ea.</p>";
        break;
    case "class3":
        $titre = "class 3";
        $content = " 
        <img src='./src/auto-03.png'>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quaerat ut officiis? Ab porro asperiores totam pariatur neque molestias saepe minus laborum repellendus excepturi, eligendi eos possimus iusto ducimus, consectetur quisquam suscipit consequatur, quis officia labore itaque assumenda accusamus perferendis. A quasi architecto fuga nam aspernatur, mollitia debitis vitae quisquam! Recusandae eum doloribus amet maiores tenetur ratione minima dolor neque quisquam modi, quibusdam odio quidem assumenda a blanditiis vero rem dignissimos repellendus impedit consectetur, ea quod. Optio soluta rem recusandae, eaque cupiditate dolore! Vitae ipsum, non, eaque distinctio exercitationem laborum atque nam laudantium commodi, quia et? Reprehenderit asperiores suscipit architecto est veritatis, eaque illo? Deleniti, molestias repudiandae? Architecto, sint hic? Totam ipsum, optio eos dicta autem perspiciatis dolor asperiores expedita! Harum maiores saepe est quaerat consequatur itaque illum, vero, asperiores atque eligendi fugiat! Iure necessitatibus ipsam quidem veniam tempora sint alias quis voluptate perferendis. Rem accusantium veritatis eveniet repudiandae recusandae, assumenda non expedita, voluptatum amet nemo, ducimus sit officia asperiores enim sequi distinctio provident dolores ipsum veniam soluta mollitia laboriosam ex. Quidem necessitatibus similique illo, doloribus voluptate magnam hic consectetur esse vero earum rem, incidunt nulla quod aliquam totam ex alias maxime. Praesentium neque ratione at perspiciatis natus, culpa, quas ipsa magnam molestiae dolores nobis! Ducimus perspiciatis minima animi iste dignissimos explicabo sit autem quisquam, hic odio obcaecati deserunt, aliquam sed aperiam! Labore corrupti temporibus aut molestias quibusdam expedita. Nesciunt vel, modi possimus provident dicta unde culpa tempore sint veniam ullam adipisci? Ipsam similique harum numquam, eos autem earum ea.</p>";
        break;
}



}else {


    $titre = "Liste des voitures";

    $content = '
    <ul class=liste>
        <li><a href="?voitures=class1">Class1</a></li>
        <li><a href="?voitures=class2">Class2</a></li>
        <li><a href="?voitures=class3">Class3</a></li>
    </ul>
    <p><img src="./src/img-cars.png" alt=""></p>';

}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?= $titre?></title>
</head>
<body>

<div id="container">
<?php include('./Assets/nav.php');?>
<?php include('./Assets/header.php');?>

<article>
<p class="fil"> <a href="./voitures.php">Voitures</a> / <?= $titre?></p>
    <h2><?= $titre?></h2>
   <?= $content ?>

    
</article>


<?php include('./Assets/footer.php');?>
</div>



</body>
</html>