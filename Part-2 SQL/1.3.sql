SELECT s.level, AVG(s.age)
FROM student s
GROUP BY s.level
HAVING (s.level NOT LIKE 'JR')