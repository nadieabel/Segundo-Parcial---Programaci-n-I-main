CREATE TABLE usuario(
    id int primary key auto_increment,
    username varchar(50) unique,
    complete_name varchar(50),
    password varchar(255)
);

CREATE TABLE POST(
    id int primary key auto_increment,
    username varchar(50) unique,
    fechayhora datetime,	
    cuerpo varchar(300)
);
