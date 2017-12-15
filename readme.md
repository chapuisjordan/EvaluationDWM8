                EVALUATION DWM8
  
<h2> Etapes de développement : </h2> <br><br>                
1 - Style de 'accueil'.<br>
2 - Création de la page listing.<br>
3 - Création de la page create.<br>
4 - Création de la page delete.<br>
5 - Création de la page update.<br>
6 - Création d'un deuxième navbar afin de faciliter la visite.<br>
7 - Ajout de Author sur toute les pages.<br>
8 - Ajout du nombre d'article en stock<br>
9 - Modification style, ajout d'une "seconde navbar".<br>
10 - Modification du style des forms.<br>
11 - Ajout de la barre recherche.
<br><br>
<strong>Modifcations qui m'ont pris du temps :<br></strong><br>
Relation one to many<br>
barre recherche<br>
Le style (Et oui même si on ne dirait pas)
<br><br><br>
<strong>Modifications que je n'ai pas eu le temps de faire : <br><br></strong>
.JavaScript, j'ai voulu faire des animations aux chargements de la page, j'ai mis beaucoup de temps à comprendre 
comment charger du Js et par la suite la syntaxe avait des erreurs j'ai donc laissé de côté mais n'ai pas eu le 
temps d'y revenir.<br><br>
.Les mediaqueries, je voulais le rendre plus responsive qu'il l'est actuellement.






<h2>Problèmes rencontrés :<br><br></h2>
<strong>1-Listing (games->undefined variable/)</strong><br>
Problème réglé !
<br><br>
<strong>2-Listing, problème avec la relation One to Many:<br></strong>
dd($authorsAll)->renvoie un array avec les données.
<br>dd($authors)->renvoie un array avec des valeurs null.<br>
!!!!Problème reglé : function défini au singulier dans la variable...<br>
<br>
<strong>3-htmlentities() expects parameter 1 to be string, array given :</strong>
<br>!!!Problème reglé : 'label' au lieu de select...<br>
<br><strong>4-Method detach does not exist.</strong>
<br>!!!Probléme réglé, réecriture de la même phrase...TGCM
<br><br>
<strong>5 - Ma "navbar deux" affichage :</strong> 
<br>Je veux l'afficher sur toute les pages sauf l'accueil, j'ai donc essayé avef un if...infonctionnel.
<br>Je fais donc une intégration su chaque page...
<br><br>
<strong>6 - Javascript->problème de chargement</strong><br>
Installation de packages : <br>
sudo apt install <br>
sudo apt install <br>
Fonctionne toujours pas<br>
npm install -> Met trop longtemps Ctrl-C<br><br>
<strong>7 - Quelques bugs à l'accueil, l'image background ne charge pas tout le temps</strong><br>

 

