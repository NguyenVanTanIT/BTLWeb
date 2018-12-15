ALTER TABLE `users` ADD `address` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL FIRST, ADD `cmnd` INT NOT NULL AFTER `address`, ADD `sex` VARCHAR(3) NOT NULL AFTER `cmnd`, ADD `license` VARCHAR(30) NOT NULL AFTER `sex`;

CREATE TABLE `datxedulich`.`car` ( `id_car` INT NOT NULL AUTO_INCREMENT , `carname` VARCHAR(30) NOT NULL , `describe` VARCHAR(500) NOT NULL , `image` VARCHAR(300) NOT NULL , `seats` INT NOT NULL , `licenseplate` VARCHAR(30) NOT NULL , `license` VARCHAR(30) NOT NULL , `status` INT NOT NULL , PRIMARY KEY (`id_car`)) ENGINE = InnoDB

CREATE TABLE `datxedulich`.`Drivers` ( `iddriver` INT NOT NULL AUTO_INCREMENT , `id_car` INT NOT NULL , `drivername` VARCHAR(30) NOT NULL , `driverphone` INT NOT NULL , `driveraddress` VARCHAR(50) NOT NULL , `drivercmnd` INT NOT NULL , `license` VARCHAR(30) NOT NULL , `driversex` VARCHAR(3) NOT NULL , `driverstatus` INT NOT NULL , PRIMARY KEY (`iddriver`)) ENGINE = InnoDB;

CREATE TABLE `datxedulich`.`unitprice` ( `id_unitprice` INT NOT NULL , `id_car` INT NOT NULL , `unitpriceN` FLOAT NOT NULL , `unitpriceY` FLOAT NOT NULL , `discountcode` INT NOT NULL , `datecreate` DATE NOT NULL , `statusunitprice` INT NOT NULL , PRIMARY KEY (`id_unitprice`)) ENGINE = InnoDB;

CREATE TABLE `datxedulich`.`bookcar` ( `id_bookcar` INT NOT NULL AUTO_INCREMENT , `id_car` INT NOT NULL , `id_unitprice` INT NOT NULL , `starttime` DATE NOT NULL , `endtime` DATE NOT NULL , `bookcar_status` INT NOT NULL , PRIMARY KEY (`id_bookcar`)  ) ENGINE = InnoDB;

CREATE TABLE `datxedulich`.`bill` ( `id_bill` INT NOT NULL , `id_bookcar` INT NOT NULL , `id` INT NOT NULL , `deposits` FLOAT NOT NULL , `totalmoney` FLOAT NOT NULL , `status_bill` INT NOT NULL , PRIMARY KEY (`id_bill`) ) ENGINE = InnoDB;

CREATE TABLE `datxedulich`.`comment` ( `idcmt` INT NOT NULL AUTO_INCREMENT , `id` INT NOT NULL , `comment` VARCHAR(500) NOT NULL , PRIMARY KEY (`idcmt`)) ENGINE = InnoDB




 --chạy lần lượt từng khóa ngoại bên dưới
ALTER TABLE drivers ADD FOREIGN KEY(id_car) REFERENCES car(id_car);

ALTER TABLE unitprice ADD FOREIGN KEY(id_car) REFERENCES car(id_car);

ALTER TABLE bookcar ADD FOREIGN KEY(id_car) REFERENCES car(id_car);

ALTER TABLE bill ADD FOREIGN KEY(id_bookcar) REFERENCES bookcar(id_bookcar);

ALTER TABLE bill ADD FOREIGN KEY(id) REFERENCES users(idusers);

ALTER TABLE comment ADD FOREIGN KEY(id) REFERENCES users(idusers);

