1 installation du projet 

git clone https://github.com/julienWillette/tekyn_tchat.git

cd tekyn_tchat

code .

 2 ouvrir un terminal 

php -S localhost:8000

3 ouvrir google chrome

4 http://localhost:8000/src/View/login.php 

5 tester:
http://localhost:8000/src/View/chat.php 

Pas possible d'y avoir accès tant que l'utilisateur n'est pas connecté

6 rentrer n'importe quel username

un message d'erreur apparait: username incorrect

7 rentrer le username: cyril

8 tester 
http://localhost:8000/src/View/login.php

Pas possible d'aller sur la page login tant que l'on est pas déconnecté

9 taper un message et cliquer sur validé

le message s'envoie et apparait sur le chat sans refresh .

10 cliquer sur se déconnecter pour retourner à la pae login. 




