INSERT INTO users (name, lastname, email) VALUES("John", "DOe", "john@email.com");
INSERT INTO users SET name="Jane", lastname="Smith", email= "jane@gmail.com";

SELECT * FROM users;
SELECT name, email FROM users;
SELECT * FROM users WHERE name = 'John';

SELECT * FROM users WHERE lastname = 'Doe' AND name="Blake";

SELECT * FROM users WHERE lastname = 'Smith' OR name="Blake";
SELECT * FROM users WHERE id >=2;

SELECT * FROM users WHERE name LIKE 'Bl%';
SELECT * FROM users WHERE name LIKE '%ak%';

SELECT * FROM users ORDER BY name DESC;

SELECT * FROM users LIMIT 2;
SELECT * FROM users LIMIT 2, 1;

UPDATE users SET name = "Mark", lastname="Johnson" WHERE name = "Blake";

DELETE FROM users WHERE id = 1;

-- aggregates
SELECT SUM(population) FROM country WHERE continent = "Europe";
SELECT AVG(population) FROM country WHERE continent = "Europe";
SELECT MAX(population) FROM country WHERE continent = "Europe";
SELECT MIN(population) FROM country WHERE continent = "Europe";
SELECT COUNT(population) FROM country WHERE continent = "Europe";
---  alias

SELECT SUM(population) as total_population FROM country;

SELECT SUM(population) as pop FROM country GROUP BY continent;

SELECT continent, SUM(population) as pop FROM country GROUP BY continent;

SELECT COUNT(DISTINCT region)  FROM country;