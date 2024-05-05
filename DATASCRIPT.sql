CREATE DATABASE WIX_Air_Flights;

USE WIX_Air_Flights;

CREATE TABLE Registered_user
(
    User_ID INTEGER PRIMARY KEY AUTO_INCREMENT,
    Time_create TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    username VARCHAR(50) NOT NULL,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(40) NOT NULL,
    password VARCHAR(40) NOT NULL,
    mobile_number VARCHAR(15) NOT NULL,
    bio VARCHAR(30),
    special_need VARCHAR(30),
    dob VARCHAR(15),
    passport VARCHAR(20),
    gender VARCHAR(10),
    city VARCHAR(30),
    postalcode VARCHAR(10),
    user_profile_img VARCHAR(255)
);


CREATE TABLE flights (
    flight_ID INTEGER PRIMARY KEY AUTO_INCREMENT,
                         arrival VARCHAR(50) NOT NULL,
                         arrival_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
                         departure VARCHAR(40) NOT NULL,
                         departure_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
                         duration TIME NOT NULL,
                         airline VARCHAR(30) NOT NULL,
                         business_seats VARCHAR(30) NOT NULL,
                         economy_seats VARCHAR(15) NOT NULL,
                         price VARCHAR(20) NOT NULL,
                         admin_id VARCHAR(10) NOT NULL
);


CREATE TABLE reservation (
                             ref_id INTEGER PRIMARY KEY AUTO_INCREMENT,
                             user_id INT NOT NULL,
                             flight_id INT NOT NULL,
                             name VARCHAR(50) NOT NULL,
                             address VARCHAR(100) NOT NULL,
                             contact VARCHAR(20)NOT NULL,
                             passport VARCHAR(30) NOT NULL,
                             class VARCHAR(40) NOT NULL,
                             seat_no VARCHAR(15) NOT NULL,
                             price VARCHAR(20) NOT NULL,
                             Luggage VARCHAR(10) NOT NULL,
                             CONSTRAINT FK_reservation_user_id FOREIGN KEY (user_id) REFERENCES Registered_user(User_ID) ON DELETE CASCADE,
                             CONSTRAINT FK_reservation_flight_id FOREIGN KEY (flight_id) REFERENCES flights(flight_ID) ON DELETE CASCADE
);

CREATE TABLE payment (
                         payref_ID INTEGER PRIMARY KEY AUTO_INCREMENT,
                         ref_id INT NOT NULL,
                         payment_date DATE NOT NULL,
                         total_payment VARCHAR(40) NOT NULL,
                         CONSTRAINT FK_payment_ref_id FOREIGN KEY (ref_id) REFERENCES reservation(ref_id) ON DELETE CASCADE
);

CREATE TABLE validation (
                            card_ID INTEGER PRIMARY KEY AUTO_INCREMENT,
                            card_number VARCHAR(40) NOT NULL,
                            card_holdername VARCHAR(50) NOT NULL,
                            card_type VARCHAR(40) NOT NULL,
                            Exp_date DATE NOT NULL,
                            CVV VARCHAR(10) NOT NULL
);

CREATE TABLE feedback (
                          feedback_id INTEGER PRIMARY KEY AUTO_INCREMENT,
                          user_id INT NOT NULL,
                          email VARCHAR(30),
                          question VARCHAR(500) NOT NULL,
                          post_date DATE NOT NULL,
                          reply VARCHAR(500)
);

CREATE TABLE inquire (
                         inq_id INTEGER PRIMARY KEY AUTO_INCREMENT,
                         user_id INT NOT NULL,
                         post_date DATE NOT NULL,
                         question VARCHAR(500) NOT NULL,
                         likes INT  NULL,
                         dislikes INT NULL,
                         CONSTRAINT FK_inquire_user_id FOREIGN KEY (user_id) REFERENCES Registered_user(User_ID) ON DELETE CASCADE
);
CREATE TABLE admin (
                       admin_id INTEGER PRIMARY KEY AUTO_INCREMENT,
                       added_admin_id INT NOT NULL,
                       name VARCHAR(30) NOT NULL,
                       age VARCHAR(15) NOT NULL,
                       email VARCHAR(40) NOT NULL,
                       password VARCHAR(50) NOT NULL,
                       added_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE customer_service (
                                  csr_id INTEGER PRIMARY KEY AUTO_INCREMENT,
                                  added_date DATE NOT NULL,
                                  email VARCHAR(40) NOT NULL,
                                  password VARCHAR(50) NOT NULL
);


CREATE TABLE manager (
                         manager_id INTEGER PRIMARY KEY AUTO_INCREMENT,
                         admin_id INT NOT NULL,
                         CONSTRAINT FK_manager_admin_id FOREIGN KEY (admin_id) REFERENCES admin(admin_id) ON DELETE CASCADE
);

CREATE TABLE report (
                        report_id INTEGER PRIMARY KEY AUTO_INCREMENT,
                        manager_id INT NOT NULL,
                        report_path VARCHAR(255) NOT NULL,
                        added_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
                        CONSTRAINT FK_report_manager_id FOREIGN KEY (manager_id) REFERENCES manager(manager_id) ON DELETE CASCADE
);

CREATE TABLE resetpw (
                         reset_pw_id INTEGER PRIMARY KEY AUTO_INCREMENT,
                         user_id INT NOT NULL,
                         email VARCHAR(40) NOT NULL,
                         changed_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
                         CONSTRAINT FK_resetpw_user_id FOREIGN KEY (user_id) REFERENCES Registered_user(User_ID) ON DELETE CASCADE
);

CREATE TABLE Seats (
                       seat_id INT AUTO_INCREMENT PRIMARY KEY,
                       flight_id INT,
                       user_id INT NOT NULL,
                       seat_number VARCHAR(5) NOT NULL,
                       is_booked BOOLEAN DEFAULT FALSE,
                       FOREIGN KEY (flight_id) REFERENCES flights(flight_ID) ON DELETE CASCADE,
                       FOREIGN KEY (user_id) REFERENCES Registered_user(User_ID) ON DELETE CASCADE
);

CREATE TABLE subscribe (
                           sub_id INT AUTO_INCREMENT PRIMARY KEY,
                           email VARCHAR(40)
);

-- Data Insertions
INSERT INTO Registered_user (User_ID, username, name, email, password, mobile_number, bio, special_need, dob, passport, gender, city, postalcode, user_profile_img)
VALUES
    (1, 'user1', 'John Doe', 'john@example.com', 'password1', '1234567890', 'Sample bio 1', 'None', '1990-01-01', 'AB123456', 'Male', 'New York', '12345', 'profile1.jpg'),
    (2, 'user2', 'Jane Smith', 'jane@example.com', 'password2', '9876543210', 'Sample bio 2', 'Allergy', '1985-05-15', 'CD789012', 'Female', 'Los Angeles', '54321', 'profile2.jpg'),
    (3, 'user3', 'Alice Johnson', 'alice@example.com', 'password3', '5551234567', 'Sample bio 3', 'None', '1995-10-20', 'EF345678', 'Female', 'Chicago', '67890', 'profile3.jpg');


INSERT INTO flights (arrival, arrival_time, departure, departure_time, duration, airline, business_seats, economy_seats, price, admin_id)
VALUES
    ('New York', '2024-04-17 14:30:00', 'London', '2024-04-17 18:00:00', '04:30:00', 'British Airways', '20', '150', '1000', 'admin01'),
    ('Paris', '2024-04-18 09:45:00', 'Rome', '2024-04-18 11:30:00', '01:45:00', 'Air France', '15', '120', '800', 'admin02'),
    ('Tokyo', '2024-04-19 23:00:00', 'Sydney', '2024-04-20 08:30:00', '09:30:00', 'Japan Airlines', '30', '200', '1500', 'admin03');


INSERT INTO reservation (user_id, flight_id, name, address, contact, passport, class, seat_no, price, Luggage)
VALUES
    (1, 3, 'John Doe', '123 Main Street', '1234567890', 'AB123456', 'Economy', '12A', '500', '2'),
    (2, 1, 'Jane Smith', '456 Elm Street', '0987654321', 'CD789012', 'Business', '5B', '1000', '1'),
    (3, 1, 'Alice Johnson', '789 Oak Street', '1357924680', 'EF345678', 'Economy', '8C', '600', '3');


INSERT INTO payment (ref_id, payment_date, total_payment)
VALUES
    (1, '2024-04-15', '500'),
    (2, '2024-04-16', '1000'),
    (3, '2024-04-17', '1500');

INSERT INTO validation (card_number, card_holdername, card_type, Exp_date,CVV)
VALUES
    ('1111222233334444', 'Alice Johnson', 'American Express', '2023-08-31','456'),
    ('4444333322221111', 'Bob Smith', 'Visa', '2025-02-28','567'),
    ('5555666677778888', 'Emily Brown', 'Visa', '2024-10-31','786');

INSERT INTO feedback (user_id, question, post_date, reply)
VALUES
    (1, 'How was your experience with our service?', '2024-04-15', 'Thank you for your feedback. We are glad to hear that you had a positive experience.'),
    (2, 'Do you have any suggestions for improvement?', '2024-04-16', 'Thank you for your suggestions. We will take them into consideration.'),
    (3, 'Was the booking process clear and easy to use?', '2024-04-17', NULL);

INSERT INTO inquire (user_id, post_date, question, likes, dislikes)
VALUES
    (1, '2024-04-15', 'What are the available flight options from New York to London?', 10, 2),
    (2, '2024-04-16', 'How can I upgrade my seat class?', 5, 1),
    (3, '2024-04-17', 'What is the baggage allowance for economy class?', 8, 0);

INSERT INTO admin (added_admin_id, name, age, email, password)
VALUES
    (0, 'Admin1', '35', 'admin1@wixair.com', 'adminpass1'),
    (1, 'Admin2', '40', 'admin2@wixair.com', 'adminpass2'),
    (1, 'Admin3', '30', 'admin3@wixair.com', 'adminpass3');


INSERT INTO customer_service (added_date, email, password)
VALUES
    ('2024-04-15', 'csr1@example.com', 'password1'),
    ('2024-04-16', 'csr2@example.com', 'password2'),
    ('2024-04-17', 'csr3@example.com', 'password3');



INSERT INTO manager (admin_id)
VALUES
    (1),
    (2),
    (3);

INSERT INTO report (manager_id, report_path, added_date)
VALUES
    (1, '/path/to/report1', '2024-04-15'),
    (2, '/path/to/report2', '2024-04-16'),
    (3, '/path/to/report3', '2024-04-17');

INSERT INTO resetpw (user_id, email, changed_date)
VALUES
    (1, 'user1@example.com', '2024-04-15'),
    (2, 'user2@example.com', '2024-04-16'),
    (3, 'user3@example.com', '2024-04-17');

INSERT INTO Seats (flight_id, user_id, seat_number, is_booked)
VALUES
    (1, 3, '1A', TRUE),
    (1, 3, '1B', TRUE),
    (2, 2, '1A', TRUE);

INSERT INTO subscribe (email)
VALUES
    ('email1@example.com'),
    ('email2@example.com'),
    ('email3@example.com');
