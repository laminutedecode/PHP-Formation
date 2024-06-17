<?php
if(preg_match("#voitures#", $_SERVER['REQUEST_URI'])){
$class1= '';  
$class2= 'active';  
$class3= '';  
} else if(preg_match("#contact#", $_SERVER['REQUEST_URI'])){
    $class1= '';  
    $class2= '';  
    $class3= 'active';  
}else {
$class1= 'active';  
$class2= '';  
$class3= '';  
}

?>

<nav>
        <ul>
            <li>
                <a class="<?= $class1;?>" href="index.php">Home</a>
            </li>
            <li>
                <a class="<?= $class2;?>" href="voitures.php">Voitures</a>
            </li>
            <li>
                <a class="<?= $class3;?>" href="contact.php">Contact</a>
            </li>
        </ul>
    </nav>
