create database if not exists fureverhome; 
use fureverhome;

CREATE TABLE if not exists `account` (
  `username` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone_number` varchar(256) NOT NULL,
  `postal_code` int(13) NOT NULL,
  `adoption_basket` varchar(256)
); 

insert into account values('SupremeLeader555', 'Kyong Bieber', 'ilovedogs', 'supremebieber@gmail.com', '5156243463', '94563', '49777535, 49777541, 4977753');