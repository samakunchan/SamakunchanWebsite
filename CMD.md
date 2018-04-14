Créer un projet symfony 3.4
---
    php composer.phar create-project symfony/framework-standard-edition my_project_name
    
Générer Bundle
---
    php bin/console generate:bundle
    #Ensuite, mettre le namespace comme ci dessous
    #OC\PlatformBundle

Clear cache
---

Pour l'environnement prod:

    php bin/console cache:clear --env=prod
    
Pour l'environnement dev:

    php bin/console cache:clear
    
Base de données avec doctrine
---
Créer la Bdd (paramètre déja configurer dans le paramater.yml)

    php bin/console doctrine:database:create
    
Générer une entity

    #Si c'est sa 1ère création
    php bin/console doctrine:generate:entity     ex: OCPlatformBundle:Advert
    
    #Si l'entity existe déjà
    php bin/console doctrine:generate:entities OCPlatformBundle:Advert
    
The Entity shortcut name
    
    #Il faut mettre comme ça pour la création du namespace
    
    OCPlatformBundle:Advert
    
    #Ensuite, il faut renseigner les champs
    
Générer la table
--
D'abord on créé la requete avec cette ligne de commande ci-dessous

    php bin/console doctrine:schema:update --dump-sql
    
Voici ce que fait doctrine, mais la table n'est pas encore générer

    CREATE TABLE Advert (
        id INT AUTO_INCREMENT NOT NULL,
        date DATETIME NOT NULL,
        title VARCHAR(255) NOT NULL,
        author VARCHAR(255) NOT NULL,
        content LONGTEXT NOT NULL,
        PRIMARY KEY(id)
    ) ENGINE = InnoDB;
    
Utiliser la ligne ci-dessous pour conclure la création de la table

    php bin/console doctrine:schema:update --force
    
Mettre à jours les données de la BDD
   
    doctrine:schema:update
    
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
    
Formulaire
--
Permet de créer un formulaire avec une entity

    php bin/console doctrine:generate:form SAMPortfolioBundle:Project