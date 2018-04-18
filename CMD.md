Créer un projet symfony 3.4
---
    php composer.phar create-project symfony/framework-standard-edition my_project_name
    
Générer Bundle
---
    php bin/console generate:bundle
    #Ensuite, mettre le namespace comme ci dessous
    #SAMPortfolioBundle:Project

Clear cache
---

Pour l'environnement prod:

    php bin/console cache:clear --env=prod
    
Pour l'environnement dev:

    php bin/console cache:clear
    

    
Générer une entity

    #Si c'est sa 1ère création
    php bin/console doctrine:generate:entity     ex: OCPlatformBundle:Advert
    
    #Si l'entity existe déjà
    php bin/console doctrine:generate:entities SAMPortfolioBundle:Project
    
The Entity shortcut name
    
    #Il faut mettre comme ça pour la création du namespace
    
    SAMPortfolioBundle:Project
    
    #Ensuite, il faut renseigner les champs    
    
DQL
--
    php bin/console doctrine:query:dql "SELECT a FROM OCPlatformBundle:Advert a"
    
Exemple statement
    
    SELECT a, u FROM OCPlatformBundle:Advert a JOIN a.user u WHERE u.age = 25
    SELECT a FROM OCPlatformBundle:Advert a WHERE TRIM(a.author) = 'Alexandre'
    SELECT a.title FROM OCPlatformBundle:Advert a WHERE a.id IN(1, 3, 5)
---
    <?php
    public function myFindDQL($id)
    {
      $query = $this->_em->createQuery('SELECT a FROM OCPlatformBundle:Advert a WHERE a.id = :id');
      $query->setParameter('id', $id);
      
      // Utilisation de getSingleResult car la requête ne doit retourner qu'un seul résultat
      return $query->getSingleResult();
    }
    
FOSUSER
--
    php composer.phar update friendsofsymfony/user-bundle
    
Créer un utilisateur avec FOSUSER
    
    php bin/console fos:user:create
    php bin/console fos:user:promote admin ROLE_ADMIN

Base de données avec doctrine
---
Créer la Bdd (paramètre déja configurer dans le paramater.yml)

    php bin/console doctrine:database:create
    
Générer la table
--
D'abord on créé la requete avec cette ligne de commande ci-dessous

    php bin/console doctrine:schema:update --dump-sql    
    
Utiliser la ligne ci-dessous pour conclure la création de la table

    php bin/console doctrine:schema:drop --force
    
    php bin/console doctrine:schema:update --force
    
Formulaire
--
Permet de créer un formulaire avec une entity

    php bin/console doctrine:generate:form SAMPortfolioBundle:Project