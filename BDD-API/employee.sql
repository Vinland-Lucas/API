DROP TABLE IF EXISTS employee;

CREATE TABLE employee(
    id SERIAL PRIMARY KEY,
    name varchar(30) NOT NULL,
    email varchar(255) NOT NULL,
    age INT,
    designation varchar(255) NOT NULL,
    hiring_date date NOT NULL
);

INSERT INTO employee(name, email, age, designation, hiring_date)
    VALUES
        ('Ahri', 'ahri@gmail.com', 26, 'Reine Mage', '2011-12-14'),
        ('Aatrox', 'aatrox@gmail.com', 38, 'Roi Démon', '2013-06-13'),
        ('Miss Fortune', 'missfortune@gmail.com', 26, 'Artilleuse', '2010-09-08'),
        ('Rengar', 'rengar@gmail.com', 35, 'Chasseur', '2012-08-21'),
        ('Sett', 'sett@gmail.com', 23, 'Catcheur', '2020-01-14'),
        ('Yasuo', 'yasuo@gmail.com', 30, 'Epéiste','2013-12-13'),
        ('Taliyah', 'taliyah@gmail.com', 25, 'Impératrice des sables', '2016-05-18'),
        ('Senna', 'senna@gmail.com', 29, 'Sentinelle de la Brume Noire', '2019-11-10'),
        ('Leona', 'leona@gmail.com', 42, 'Gardienne Solaire', '2011-07-13'),
        ('Gangplank', 'gangplank@gmail.com', 50, 'Capitaine', '2009-08-19');



