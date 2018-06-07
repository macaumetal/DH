-- EJERCICIO 1 
-- 1.a
SELECT genres.name AS Titulo, count(title) AS Cantidad
FROM movies
INNER JOIN genres ON movies.genre_id = genres.id
GROUP BY genres.name

-- 1.b
SELECT MIN(rating) AS 'Rating Bajo', genres.name Genero
FROM movies
INNER JOIN genres ON movies.genre_id = genres.id
GROUP BY genres.name

-- 1.c
SELECT MAX(rating) 'Rating Alto', genres.name Genero
FROM movies
INNER JOIN genres ON movies.genre_id = genres.id
GROUP BY genres.name

-- 1.d
SELECT AVG(rating) 'Rating Promedio', genres.name Genero
FROM movies
INNER JOIN genres ON movies.genre_id = genres.id
GROUP BY genres.name

-- 1.e
SELECT series.title, count(number)-- le pido el titulo de la serie y que cuente cuantas temporadas tiene
FROM series -- de a tabla series
INNER JOIN seasons ON seasons.serie_id = series.id -- unir series a seasons por la llave
GROUP BY series.title -- pido que agrup por el campo que se repite (el titulo)

-- 1.f Obtener por cada temporada (seasons)​, el título de la serie (title)​ y la
-- cantidad de capítulos (usar number de la tabla episodes)

SELECT series.title AS Serie, count(episodes.number) AS 'Cantidad Capitulos', seasons.title AS Temporada
FROM episodes
INNER JOIN seasons ON episodes.season_id = seasons.id
INNER JOIN series ON seasons.serie_id = series.id
GROUP BY seasons.title
ORDER BY series.title ASC, seasons.title ASC

-- 1.g
-- Obtener por cada capítulo (episodes)​, el número de temporada (seasons)​,
-- el nombre de la serie (series)​, el género (genres)​ y la cantidad de actores
-- (actors)​ que tiene.

SELECT episodes.number AS 'Capitulo #', seasons.title AS 'Temporada', series.title, genres.name AS 'Genero' , count(actor_id) AS 'Cantidad de Actores'
FROM series
INNER JOIN genres ON series.genre_id = genres.id
INNER JOIN seasons ON seasons.serie_id = series.id
INNER JOIN episodes ON episodes.season_id = seasons.id
INNER JOIN actor_episode ON episodes.id = actor_episode.episode_id
GROUP BY episodes.number, seasons.title, series.title, genres.name
ORDER BY series.title, seasons.number, episodes.number

-- Obtener las películas (movies) hechas en el mes de Octubre o en el año
-- 1999, ordenar que el año sea el primer ordenamiento y el título de mayor a
-- menor. (usar release_date y title)

SELECT title, month(release_date), year(release_date)
FROM movies
WHERE (release_date LIKE month(release_date) = '10') OR 
(release_date LIKE year(release_date) = '1999') 
ORDER BY title





