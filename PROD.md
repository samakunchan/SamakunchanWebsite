Chose à faire en mode production
==

Etape1
---
Clear le cache en mode production
    
    php bin/console cache:clear --env=prod
    
Si la commande ne marche pas, il faut supprimé à la main. Le cache à supprimer se trouve vers le chemin 
ci dessous

    /var/cache/prod
    
    clic-droit -> supprimer
    
Etape 2
---
Donner les droits total au dossier cache

* Ouvrir le dossier hors IDE dans le dossier /var
* Faire apparaitre l'invite de commande
* Entrer la commande ci-dessous


    chmod -R 777 cache/
    
NB: Si le site est déja en ligne, on peut le faire avec Filezilla avec clic droit->propriété. 
On coche tout ou taper 777, c'est pareil

Etape 3
---
Configurer Assetic pour le mode production. Ce sont les fichiers CSS, JS et autres

    php bin/console assetic:dump --env=prod
    
NB: Ne pas oublier que les block stylesheet ou js doivent avoir des filtres

Comprendre l'érreur 500
===

Quand symfony trouve une érreur, il montre les érreurs et les logs en mode développement,
mais il montre EXCLUSIVEMENT une érreur 500 pour le mode production.
Pour trouver les éventuels érreur, il faut:

Etape 1: activer le mode debug

    /web/app.php
    
    $kernel = new AppKernel('prod', false); //avant
    
    $kernel = new AppKernel('prod', true); //après
    
Etape 2: recharger la page et on peut voir l'erreur et effectuer des actions correctifs.

Commande pour PuTTY

    /usr/bin/php5.5-cli composer.phar
    