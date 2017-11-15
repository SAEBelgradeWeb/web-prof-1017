INSERT INTO users (`name`, `lastname`, `email`, `age`) VALUES ("John", "Smith", "john@email.com", 30);

INSERT INTO users SET name="Jane", lastname="Smith", email="jane@mail.com", age=27;
INSERT INTO users SET name="Michael", lastname="Brown", email="michael@mail.com", age=50;
INSERT INTO users SET name="Michelle", lastname="LeBron", email="m@mail.com", age=25;


SELECT * FROM users;
SELECT name, lastname FROM users;
SELECT * FROM users WHERE id = 1;
SELECT * FROM users WHERE name = 'Jane';
SELECT * FROM users WHERE age = 29;
SELECT * FROM users WHERE age > 29 AND age < 50;
SELECT * FROM users WHERE age != 30;
SELECT * FROM users WHERE name LIKE  "J%";
SELECT * FROM users WHERE lastname LIKE  "%wn";
SELECT * FROM users WHERE lastname LIKE  "%o%" ORDER BY name DESC;
SELECT * FROM users ORDER BY name DESC;
SELECT * FROM users LIMIT 2;
SELECT * FROM users LIMIT 2, 3;
SELECT name as 'imekorisnika' FROM users;
SELECT *, CONCAT(`name`, ' ', `lastname`) as 'fullname' FROM users;

UPDATE users SET name="Lidija" WHERE name="Michelle";
UPDATE users SET email="email@rmail.com";

DELETE FROM users WHERE name = "Jane";

-- napravi tabelu koja se zove products i koja ima najmanje 10 polja. trudite se da su razlicitog tipa podataka makar neka
-- napisi kveri koji upisuje jedan red u vasu tabelu
-- napisi kveri koji ce da izmeni taj jedan proizvod
-- napisi kveri koji ce da izlista sve proizvode
-- napisi kveri koji ce da obrise onaj jedan proizvod























