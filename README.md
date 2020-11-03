1. Changer le dbname
2. Créer une base de donnée
3. Modéliser nos tables
    "user" : "id,email,password,pseudo,username,phone"
    "products" : "product_id, name, description, city, price, author, category_id",
    "category" : "category_id, name"
    }
-----------------------------------------------------
4. Créer un formulaire pour l'inscription des utilisateurs qui reprend les informations de connections
    -> Ne pas oublier l'ation et les méthode POST du formulaire
    -> Ne pas oublier les names sur les inputs (pour les récupérer lors $_POST)
    -> ** Rajouter les vérifications du front **
5. Récupérer les données du formulaire en prenant soin de les sécuriser
    -> htmlspecialchars sur nos variables POST 
    -> $$ On peut   aussi utiliser string_tags **
6. Créer uene logique doit forcément posséder un email, un passwprd, un username et avoir cliqué sur le bouton insription
    (1er if : !empty et isset)
    -> Un utilisateur ne peut pas avoir le même username ou la même adresse mail que quelqu'un d'autre. Pour ce faire, nous
    allons compter le nombre de fois que l'email ou l'username sera trouvé dans la base données. (2e if pour l'email, et
    3e if pour l'username)
    -> Un utilisateur doit être sur de son mot de passe (4e if avec la vérification de la concordance des mots de passe entrés
    "$pass1 === $pass2")
    -> LES MOTS DE PASSE SONT TOUJOURS CRYPTE DANS LA BASE DE DONNNES (RGPD 2018) - Le mot de passe doit être crypté avec le hashage md5 ; les sha1 sont faciles à
