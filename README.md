# Exam PHP

## Organisation générale

Le site se compose de 3 pages : Accueil, Connexion et Infos, contenant des infos générales.  
Toutes les pages comportent un header, un footer avec une navbar et des images de fond. Seule la page d'accueil comporte une image centrale lorsque l'on n'est pas connecté.

## Logins
``` php
admin => 0000
plèbe => 1234 
```
## Secret
Le lien vers la page secrète se trouve sur l'accueil, et est visible uniquement lorsque l'on est log en tant qu'admin. On peut cocher sur cette page les différentes transformations de Megaman, pour voir celles qui nous intéressent. L'envoi du formulaire nous redirige vers l'accueil avec les infos correspondantes. *Note: Le texte est en anglais*

## Fonctionalités

> * Image d'accueil qui disparait si quelqu'un est connecté
> * Lien vers la page secrète accessible que si connecté en tant qu'admin
> * Page secrète inaccessible par l'url si on n'est pas connecté