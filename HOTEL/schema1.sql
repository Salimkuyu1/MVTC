CREATE DATABASE HOTEL;

use HOTEL;

-- e.g. Manager, Receptionist, Housekeeping
CREATE TABLE HOTEL.staff (
    staff_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    role VARCHAR(20) NOT NULL, 
    email VARCHAR(30) NOT NULL,
    phoneNumber INT(13) NOT NULL,
    hire_date DATE NOT NULL
);

CREATE TABLE HOTEL.guests (
    guest_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    guestName VARCHAR (30) NOT NULL,
    servicedate date NOT NULL,
    email VARCHAR (30),
    phonenumber INT (13) NOT  NULL
);
-- Table: menu_items
CREATE TABLE HOTEL.menu_items (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    category ENUM('Food', 'Drink', 'Dessert') NOT NULL,
    is_available BOOLEAN DEFAULT TRUE
);

-- Table: orders
CREATE TABLE HOTEL.orders (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    guestName VARCHAR(30),
    table_number INT,
    order_time DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('Pending', 'Preparing', 'Served', 'Cancelled') DEFAULT 'Pending'
);

-- Table: order_items
CREATE TABLE HOTEL.order_items (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    menu_item_id INT NOT NULL,
    quantity INT DEFAULT 1,
    price DECIMAL(10,2),  -- price at the time of ordering
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
    FOREIGN KEY (menu_item_id) REFERENCES menu_items(id)
);

CREATE TABLE HOTEL.payments (
    payment_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT null,
    amount DECIMAL(10, 2),
    payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    payment_method ENUM('Cash', 'Credit Card', 'Debit Card', 'Mpesa'),
    status ENUM('Pending', 'Completed', 'Failed') DEFAULT 'Pending'
);



