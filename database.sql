use db_surf;
CREATE TABLE users (
id int AUTO_INCREMENT PRIMARY key,
nom varchar(30) not null,
email varchar(255) unique not null ,
psw varchar(255) not null ,
role enum('gerant','surfeur')
); 

CREATE TABLE surfeur_profil (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    country VARCHAR(100),
    level ENUM('Débutant','Intermediaire','Avancé'),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE session (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    coach VARCHAR(100),
    price DECIMAL(10,2),
    date DATETIME
);


create table inscription (
   id_inscription int AUTO_INCREMENT PRIMARY key ,
   id_surfeur int  ,
    id_session int  , 
    date datetime ,
    payement_status enum('payé','en attente'),
    FOREIGN key (id_surfeur) REFERENCES surfeur_profil(id),
    FOREIGN key (id_session) REFERENCES session(id) 

);