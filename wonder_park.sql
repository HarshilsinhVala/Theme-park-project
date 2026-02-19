
CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    city VARCHAR(50),
    phone VARCHAR(15)
);

INSERT INTO users (username, password, email, city, phone) VALUES
('Rahul Sharma', '$2y$10$EixZaYVK1fsbw1ZfbX3OXePaWxn96p36IQ5N8U3IsJ5Ife5I00k3G', 'rahul.sharma@gmail.com', 'Delhi', '9876543210');

CREATE TABLE contacts (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO contacts (name, email, subject, message) VALUES
('Rahul Sharma', 'rahul.sharma@gmail.com', 'Inquiry about tickets', 'I would like to know more about the ticket prices for the theme park.');


CREATE TABLE feedback (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    rating INT(1) NOT NULL CHECK (rating >= 1 AND rating <= 5), 
    comments TEXT,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO feedback (name, email, rating, comments) VALUES
('Rahul Sharma', 'rahul.sharma@gmail.com', 5, 'Awesome!');

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    mobile VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    visit_date DATE NOT NULL,
    park VARCHAR(50) NOT NULL,
    option_selected VARCHAR(255) NOT NULL,
    booking_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO bookings (name, mobile, email, visit_date, park, option_selected)
VALUES
('Rahul Sharma', '9876543210', 'rohan.sharma@gmail.com', '2024-11-01', 'Theme Park', 'Happy Tuesday at Wonder-Park Theme Park- @999/-');
