CREATE DATABASE event_management;
USE event_management;

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address TEXT,
    city VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    service_name VARCHAR(100) NOT NULL,
    service_slug VARCHAR(100) NOT NULL UNIQUE,
    description TEXT,
    price DECIMAL(10,2) DEFAULT 0.00,
    status ENUM('active', 'inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE enquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(20) DEFAULT NULL,
    subject VARCHAR(200) NOT NULL,
    message TEXT NOT NULL,
    source ENUM('contact', 'enquiry') DEFAULT 'contact',
    status ENUM('new', 'in_progress', 'closed') DEFAULT 'new',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT NOT NULL,
    service_id INT NOT NULL,
    event_date DATE NOT NULL,
    event_time VARCHAR(50),
    event_location VARCHAR(255) NOT NULL,
    guest_count INT DEFAULT 0,
    budget DECIMAL(12,2) DEFAULT 0.00,
    special_request TEXT,
    booking_status ENUM('pending', 'confirmed', 'completed', 'cancelled') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (customer_id) REFERENCES customers(id) ON DELETE CASCADE,
    FOREIGN KEY (service_id) REFERENCES services(id) ON DELETE CASCADE
);

CREATE TABLE testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_name VARCHAR(100) NOT NULL,
    client_role VARCHAR(100),
    message TEXT NOT NULL,
    image VARCHAR(255),
    status ENUM('active', 'inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    image VARCHAR(255) NOT NULL,
    category VARCHAR(100),
    status ENUM('active', 'inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO services (service_name, service_slug, description, price) VALUES
('Birthday Parties', 'birthday-parties', 'Complete birthday party arrangement service', 15000.00),
('Corporate Events', 'corporate-events', 'Professional corporate event management', 50000.00),
('Wedding Meal', 'wedding-meal', 'Wedding catering and meal planning', 80000.00),
('Bar Service', 'bar-service', 'Premium bar arrangement service', 25000.00),
('Drop Catering', 'drop-catering', 'Food catering delivery service', 12000.00),
('Exhibition', 'exhibition', 'Exhibition and stall event management', 60000.00),
('Staff Service', 'staff-service', 'Event support staff service', 10000.00),
('Trou Packing', 'trou-packing', 'Food and event packing service', 7000.00);