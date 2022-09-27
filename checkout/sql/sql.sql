CREATE TABLE ShippingAddress (
id int(11) unsigned NOT NULL AUTO_INCREMENT,
full_name varchar(25),
email  varchar(25),
address varchar(100),
city varchar(30),
state varchar(30),
zip varchar(15),
PRIMARY KEY (id)
);

CREATE TABLE Cards (
id int(11) unsigned NOT NULL AUTO_INCREMENT,
user_id int(11),
cardname varchar(25),
cardnumber  varchar(25),
expmonth varchar(15),
expyear varchar(15),
cvv varchar(15),
PRIMARY KEY (id)
);
