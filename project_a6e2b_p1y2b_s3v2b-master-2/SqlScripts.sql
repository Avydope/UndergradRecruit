insert into GraduatedStudent
values('John Booker', 22, 2368685678, FALSE);

DELETE FROM GraduatedStudent WHERE name = ‘Kevin Slater’

UPDATE GraduatedStudent
set age = ‘23’
WHERE name = ‘John Booker’

SELECT *
FROM GraduatedStudent
WHERE Employed = FALSE 

Select name, age, employed
FROM GraduatedStudent
WHERE age < 23
