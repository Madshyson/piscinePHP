SELECT titre AS 'Titre', resume AS 'Resume', annee_prod FROM film INNER JOIN genre ON genre.id_genre = film.id_genre WHERE genre.nom = 'erotic' ORDER BY annee_prod DESC;