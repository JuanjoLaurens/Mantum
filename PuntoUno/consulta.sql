SELECT tipo_animal_id, COUNT(*) as amount
FROM animal
WHERE fecha_nacimiento > '2016-01-01'
GROUP BY tipo_animal_id
HAVING COUNT(*) > 2;