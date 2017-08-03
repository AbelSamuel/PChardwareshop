/*****************************************
* Create the my_pc_shop database
*****************************************/
DROP DATABASE IF EXISTS my_pc_shop;
CREATE DATABASE my_pc_shop;
USE my_pc_shop;  -- MySQL command

-- create the tables
CREATE TABLE categories (
  categoryID       INT(11)        NOT NULL   AUTO_INCREMENT,
  categoryName     VARCHAR(255)   NOT NULL,
  PRIMARY KEY (categoryID)
);

CREATE TABLE products (
  productID        INT(11)        NOT NULL   AUTO_INCREMENT,
  categoryID       INT(11)        NOT NULL,
  productCode      VARCHAR(20)    NOT NULL   UNIQUE,
  productName      VARCHAR(255)   NOT NULL,
  listPrice        DECIMAL(10,2)  NOT NULL,
  stock            INT(11)        Not Null,
  PRIMARY KEY (productID)
);

CREATE TABLE orders (
  orderID        INT(11)        NOT NULL   AUTO_INCREMENT,
  customerID     INT            NOT NULL,
  orderDate      DATETIME       NOT NULL,
  PRIMARY KEY (orderID)
);

-- insert data into the database
INSERT INTO categories VALUES
(1, 'Solid State Drives'),
(2, 'Hard Disk Drives'),
(3, 'External Hard Drives'),
(4, 'Graphics Cards'),
(5, 'Memory');

INSERT INTO products VALUES
(1, 1, 'SSD1', 'Raptor 2TB SSD', '135.00', '10'),
(2, 1, 'SSD2', 'Cobalt SanDisk 1TB SSD', '100.00', '12'),
(3, 1, 'SSD3', 'Silver Herring 2TB', '155.00', '15'),
(4, 1, 'SSD4', 'Seagate 1200.2 SSD 2.5TB', '200.00', '23'),
(5, 1, 'SSD5', 'Force ls 960GB', '115.00', '7'),
(6, 2, 'HDD1', 'SATA Hard Drive 350GB', '95.00', '14'),
(7, 2, 'HDD2', 'Helioseal HD 8TB', '215.00', '12'),
(8, 2, 'HDD3', 'Maxtor 4TB', '135.00', '12'),
(9, 2, 'HDD4', 'PC SATA HD 2TB', '75.00', '12'),
(10, 2, 'HDD5', 'WD4001 4TB', '110.00', '10'),
(11, 3, 'EHD1', 'Silver External HardDrive 1TB', '45.00', '10'),
(12, 3, 'EHD2', 'Green/Onyx External Hard Drive 2 TB', '65.00', '7'),
(13, 3, 'EHD3', 'Matte Black External HD 5TB', '125.00', '15'),
(14, 3, 'EHD4', 'Light External HD 150GB ', '35.00', '18'),
(15, 3, 'EHD5', 'Dark Steel External Hard Drive 3TB', '75.00', '20'),
(16, 4, 'GraphicsCard1', 'GeForce GTX 1070', '125.00', '5'),
(17, 4, 'GraphicsCard2', 'Gigabyte 550', '85.00', '3'),
(18, 4, 'GraphicsCard3', 'Dragon GPU 2000', '54.00', '12'),
(19, 4, 'GraphicsCard4', 'Titan Nividia 1080', '115.00', '12'),
(20, 4, 'GraphicsCard5', 'Quadro Nividia 1575', '175.00', '2'),
(21, 5, 'RAM1', 'KVR 4GB RAM', '35.00', '15'),
(22, 5, 'RAM2', 'Vengeance Corsair 16GB RAM', '60.00', '23'),
(23, 5, 'RAM3', 'Viper Patrist (2x4GB) RAM', '64.00', '20'),
(24, 5, 'RAM4', 'Fatality (2x8GB) RAM', '80.00', '14'),
(25, 5, 'RAM5', 'Savage HYPER 16GB RAM', '120.00', '12');

-- create the users and grant priveleges to those users
GRANT SELECT, INSERT, DELETE, UPDATE
ON my_pc_shop.*
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON products
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';

