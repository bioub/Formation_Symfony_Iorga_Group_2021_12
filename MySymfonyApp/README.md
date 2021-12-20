# Exercices

## Routes

Générer un contrôleur `RecetteController`

En plus de la méthode `index()` qui existe déjà

Créer 2 autres méthodes : `details()`, `ajouter()`

Puis faire coincider avec les URL et Méthodes suivantes :

- `GET` `/recettes` -> `index()`
- `GET` `/recettes/{id}` -> `details()`
- `GET` ou `POST` `/recettes/add` -> `ajouter()`

Vérifier que `{id}` soit un nombre entier

Créer les templates twig manquants dans `templates/recettes` avec un titre (balise h1 ou h2) différent sur chaque page

Comme dans `index()` appeler la méthode render pour afficher le template