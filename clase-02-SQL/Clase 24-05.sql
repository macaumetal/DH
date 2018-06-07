SELECT g.name, count(m.title)-- esto es todo lo que quiero mostrar
FROM genres AS g
	LEFT JOIN movies AS m ON g.id = m.genre_id
GROUP BY g.name
ORDER BY 1,2


SELECT g.name, count(m.title) AS cantidad-- esto es todo lo que quiero mostrar
FROM genres AS g
	LEFT JOIN movies AS m ON g.id = m.genre_id
GROUP BY g.name
HAVING cantidad>2 -- se usa para filtrar con clausulas de agregacion (count, avg
ORDER BY 1,2

-- INSERT
INSERT INTO movies (title, rating, awards, genre_id, release_date)
VALUE ('La nueva peli', 8.9, 1000, 4, now())

-- UPDATE

UPDATE movies 
SET id = 23
WHERE id=24

-- DELETE

DELETE FROM movies
WHERE id = 