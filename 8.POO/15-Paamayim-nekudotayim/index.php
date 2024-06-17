<?php
// Le Paamayim Nekudotayim (aussi appelé double deux-points) est un opérateur utilisé en PHP pour accéder aux éléments statiques d'une classe, tels que les propriétés ou les méthodes. Cet opérateur est représenté par deux fois le symbole deux-points (::).

// Voici un exemple de code qui utilise l'opérateur Paamayim Nekudotayim pour accéder à une méthode statique dans une classe :

class MyClass {
  public static function myStaticMethod() {
      echo "Ceci est une méthode statique.";
  }
}

MyClass::myStaticMethod(); // affiche "Ceci est une méthode statique."


// Dans cet exemple, nous avons une classe MyClass avec une méthode statique myStaticMethod(). Nous pouvons accéder à cette méthode en utilisant l'opérateur Paamayim Nekudotayim et le nom de la classe suivi du nom de la méthode :



// Il est important de noter que l'opérateur Paamayim Nekudotayim ne peut être utilisé qu'avec des éléments statiques d'une classe, tels que les propriétés ou les méthodes statiques. Si vous essayez d'utiliser l'opérateur Paamayim Nekudotayim avec des éléments non statiques d'une classe, vous obtiendrez une erreur.

?>
