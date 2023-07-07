# API TP - Réponses aux questions

Lien du TP : https://course.valentinflgt.fr/#/c/2023/api/tp/api-rest#pr%25C3%25A9-requis

Correction TP : https://github.com/Doha3ris/TP-API-POO

## Création de la table
### Q1 - name, de type varchar, non null choisissez vous-même la limite, justifiez


### Q2 -  email, de type varchar (255), non null :  cette déclaration de champ n’est pas optimale, justifiez pouquoi et comment faire mieux ? 

### Q3 - Le concept de class, à quoi servent-elles ?
Le principale but des class est de permettre la construction, l'instanciation, la création d'objet.<br>
On peut les considéré comme le mode d'emploi de l'objet pour l'ordinateur.<br>
A l'intérieur des classes on retrouve des propriétés, qui seront les caractéristiques de l'objet, ainsi que des méthodes qui seront les actions que pourra effectuer l’objet.

### Q4 - L’intérêt de déclarer la connection PDO dans cette class et pas dans un fichier “général” type index.php ?
La POO et donc logiquement les class, fonctionnent avec le principe d'encapsulation, c'est à dire que selon le mot clé d'accessibilité (public, private, protected) appliqué aux propriétés et méthodes, elles ne seront potentiellement pas accessibles et modifiables en dehors de la class. Cela permet en quelque sorte de protéger les données.<br>
Ici nous essayons de connecter PDO à la BDD, cette base de donnée contient des informations importantes/confidentielles (logs de connexion...) qui ne doivent pas être divulgués à n'importe qui.<br>
Donc dans notre class, en configurant les mots clés d'accessibilité appropriés à nos propriétés et méthodes, on s'assure que ces infos confidentielles ne peuvent être accessibles en dehors de la class d'où l'utilité de déclarer la connexion PDO dans une class.<br>
Dans un fichier "général" type index.php tout le monde aurait accès à ces infos.