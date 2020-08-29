SELECT d.fname, COUNT(*)
FROM department d, class c
WHERE d.fid = c.fid
AND c.room LIKE 'R128'
GROUP BY d.fid