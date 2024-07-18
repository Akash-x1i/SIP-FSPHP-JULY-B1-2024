CREATE DATABASE portfolio;
USE portfolio;
CREATE TABLE carousel_image (
    id INT AUTO_INCREMENT PRIMARY KEY,
    img_url VARCHAR(200)NOT NULL,

);

INSERT INTO carousel_image(img_url) VALUES('https://plus.unsplash.com/premium_photo-1661889099855-b44dc39e88c9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZnJlZSUyMGltYWdlc3xlbnwwfDB8MHx8fDA%3D');