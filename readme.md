                EVALUATION DWM8
                
1 - Style de 'accueil'.<br>
2 - Création de la page listing.<br>
3 - Création de la page create.<br>
4 - Création de la page delete.<br>
5 - Création de la page update.<br>
6 - Création d'un deuxième navbar afin de faciliter la visite.<br>
7 - Ajout de Author sur toute les pages.<br>
8 - Ajout du nombre d'article en stock<br>
9 - Modification style, ajout d'une "seconde navbar".
10 - Modification du style des forms.


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
<br><br>
<strong>6 - Javascript->problème de chargement</strong><br>
Installation de packages : <br>
sudo apt install <br>
sudo apt install <br>
Fonctionne toujours pas<br>
npm install -> Met trop longtemps Ctrl-C<br><br>
<strong>7 - Quelques bugs à l'accueil, l'image background ne charge pas tout le temps</strong><br>
 

