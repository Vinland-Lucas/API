# API REST

Ressources : 
- https://course.valentinflgt.fr/#/c/2023/api/1.-introduction
- https://www.youtube.com/watch?v=f5qEXU3btp8
- https://www.youtube.com/watch?v=dlGtSoigdB0

## Qu'est qu'une API REST ?
- **API (Application Programming Interface) :** <br>
    Système permettant à qui le souhaite, l'accès aux données ou modules de d'une application à distance c'est à dire  depuis un autre système, une autre machine, depuis Internet etc.. <br>
    En bref, c'est un moyen permettant la communication entre 2 systèmes différents qui de base n'auraient pas pu communiquer autrement, d'une autre manière.
- **REST (Representative State Transfer) :** <br>
    - Client-serveur side, avec des requêtes gérées par le protocole HTTP
    - Stateless, aucune données client ne doivent être stockées entre les requêtes GET, donc le serveur ne doit en aucun cas connaitre l'état du client, chaque requête vers le serveur est indépendante.
    - Cacheable, rationalizable via un cache --> les données envoyées par le serveur doivent permettre au client de les stocker, les mettre en cache, afin de pouvoir les réutiliser sans devoir tout le temps les demander au serveur.
    - Uniforme, l’API doit être claire et correctement documentée :
      - Ressources demandées claires et identifiables
      - Représentation données suffisante pour être manipulée par le client
      - Documentation claire et précise du contrat de service
    - Système de couches :

Pour qu'une API soit considérée comme REST, elle doit respecter les 5 points ci-dessus.

**Les différentes méthodes HTTP :** <br>
- GET pour lire des données
- POST pour ajouter des données
- PUT pour modifier des données
- DELETE pour supprimer des données