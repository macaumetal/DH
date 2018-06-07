-- Ejercicio a
SELECT *
FROM movies
WHERE release_date BETWEEN '1999-10-01' AND '2004-12-31'
ORDER BY release_date DESC

-- Ejercicio b
SELECT *
FROM movies
WHERE length BETWEEN '45' AND '150'
ORDER BY length 

-- Ejercicio c
SELECT *
FROM actors
WHERE first_name BETWEEN 'He%' AND 'To%'
ORDER BY first_name 

-- Ejercicio d
SELECT *
FROM movies
WHERE title LIKE 'T%'
ORDER BY title 

-- Ejercicio e
SELECT *
FROM movies
WHERE title LIKE 'T%c'
ORDER BY title 

-- Ejercicio f
SELECT *
FROM movies
WHERE release_date BETWEEN '2000-01-01' AND '2000-12-31'
ORDER BY title 

-- Ejercicio g
SELECT *
FROM movies
WHERE title IN ('-')
ORDER BY title 

-- Ejercicio h
SELECT *
FROM movies
WHERE release_date LIKE '%-10-%' OR '1999-%-%'
ORDER BY title 

-- Ejercicio i
SELECT *
FROM actors
WHERE first_name LIKE 'J____y'
ORDER BY first_name 

-- Ejercicio j
SELECT *
FROM actors
WHERE first_name LIKE '%am'
ORDER BY last_name, first_name 

-- Ejercicio k
SELECT *
FROM movies
WHERE title LIKE '% y %' AND title LIKE '%la%'
ORDER BY title 

-- Ejercicio l
SELECT *
FROM actors
WHERE (last_name LIKE '%de%' or last_name LIKE '%ll%') AND first_name LIKE '%a%'
ORDER BY first_name 

-- Ejercicio m
SELECT *
FROM movies
WHERE (title LIKE 'Toy Story %' OR title LIKE 'Harry Potter %') AND length > '120'
ORDER BY title ASC, length DESC

-- Ejercicio n
SELECT rating, title
FROM movies
WHERE rating IN (8.3, 9.1, 9.0)

-- Ejercicio o
SELECT awards, title
FROM movies
WHERE awards IN (2, 5, 7)
ORDER BY awards DESC

-- Ejercicio p
SELECT length, title
FROM movies
WHERE length > '0'
ORDER BY length DESC

-- Ejercicio q
SELECT release_date, title
FROM movies
WHERE month(release_date) = '07'

-- Ejercicio r
SELECT first_name, last_name
FROM actors
WHERE NOT first_name = '%k%' OR  NOT last_name = '%k%'

-- Ejercicio s
SELECT length, title
FROM movies
WHERE NOT length = '120' OR  NOT length = '150'


-- 2 - ALIAS

-- 2.a 
SELECT title AS 'Título de la Película'
FROM movies

-- 2.b
SELECT id AS id_genero, name AS nombre_genero
FROM genres
ORDER BY nombre_genero

-- 2.c
SELECT CONCAT ('Actor: ', first_name) 
FROM actors
ORDER BY first_name

   
-- 22-05-2018 --

-- 3 Combinaciones --
-- 3.a
SELECT title, genre_id
FROM movies
ORDER BY title

-- 3.b
SELECT title, first_name, last_name
FROM movies, actors
ORDER BY title, first_name

-- 3.c
SELECT first_name, last_name, title
FROM movies, actors
ORDER BY first_name

-- 4 JOINS
-- 4.a
SELECT title, genres.name 
FROM movies
	INNER JOIN genres ON movies.genre_id = genres.id

-- 4.b
SELECT title AS Titulo, actors.first_name AS Nombre
FROM movies
	INNER JOIN actor_movi ON actor_movie.movie_id = actors.id
    
-- 4.c
SELECT actors.last_name AS Apellido, actors.first_name AS Nombre, title AS Titulo
FROM movies
	INNER JOIN actors ON movies.genre_id = actors.id
ORDER BY last_name

-- 4.d
SELECT title AS Titulo, actors.first_name AS Nombre, actors.last_name AS Apellido
FROM actor_movie
	INNER JOIN movies ON actor_movie.movie_id = movies.id
    INNER JOIN actors ON actor_movie.actor_id = actors.id
    ORDER BY title

-- 4.e
SELECT title AS Titulo, genres.name AS Genero, actors.first_name AS Nombre, actors.last_name AS Apellido
FROM actor_movie
	INNER JOIN movies ON actor_movie.movie_id = movies.id
    INNER JOIN actors ON actor_movie.actor_id = actors.id
    INNER JOIN genres ON movies.genre_id = genres.id
    ORDER BY genres.name, title, first_name

-- 4.f    
SELECT title, genres.name
FROM movies
	INNER JOIN genres ON movies.genre_id = genres.id
     ORDER BY genres.name, title
     
-- 4.g
SELECT first_name, title
FROM actor_movie	
	INNER JOIN actors ON actor_movie.actor_id = actors.id
    INNER JOIN movies ON actor_movie.movie_id = movies.id
 ORDER BY title

-- 4.h

SELECT genres.name, title
FROM movies
LEFT JOIN genres ON movies.genre_id = genres.id
ORDER BY genres.name, title


-- ********************************

-- SIN Alias
SELECT *
FROM movies, genres
WHERE movies.genre_id = genres.id

-- Utilizando Alias
SELECT *
FROM movies AS m, genres AS g
WHERE m.genre_id = g.id

-- INNER JOIN

SELECT *
FROM movies
	INNER JOIN genres ON movies.genre_id = genres.id

-- LEFT JOIN
SELECT *
FROM movies
	LEFT JOIN genres ON movies.genre_id = genres.id -- ME trae las peliculas y sus generos independientemente de que tenga o no genero


-- Para averiguar cuantos hay
SELECT count(id)
	FROM movies_db.movies
    WHERE awards = 2
    ORDER BY id
    
-- Para averiguar el promedio
SELECT avg(rating)
	FROM movies_db.movies
    WHERE awards = 2
    ORDER BY id

-- Para averiguar el promedio mas la cantidad de titulos
SELECT avg(rating), count(title)
	FROM movies_db.movies

-- Para averiguar el minimo
SELECT min(rating)
	FROM movies_db.movies

-- Para averiguar el maximo
SELECT max(rating)
	FROM movies_db.movies
    
-- Para traer el MAX rating con el titulo   
SELECT title, rating
	FROM movies
    WHERE rating = (SELECT max(rating)
	FROM movies_db.movies)

-- Para sumar premios   
SELECT sum(awards)
	FROM movies
    WHERE title LIKE '%Harry Potter%'


-- Para concatenar un string  
SELECT concat('La pelicula es ', title)
	FROM movies
    WHERE title LIKE '%Harry Potter%'


-- Para concatenar un string  y agregar el año solo
SELECT concat(title, ' (', year(release_date), ')') AS Titulo_año
	FROM movies



SELECT *
FROM episodes

SELECT *
FROM movies
