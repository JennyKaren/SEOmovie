create database film_db;
use film_db;

CREATE TABLE films (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    annee INT NOT NULL,
    description TEXT,
    image_url VARCHAR(255)
);

INSERT INTO films (titre, annee, description, image_url) VALUES
('Inception', 2010, 'A mind-bending thriller about dreams within dreams, directed by Christopher Nolan.', 'assets/4.jpg'),
('The Matrix', 1999, 'A computer hacker learns about the true nature of his reality and his role in the war against its controllers.', 'assets/2.jpg'),
('The Shawshank Redemption', 1994, 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.', 'assets/5.jpg'),
('The Dark Knight', 2008, 'Batman faces the Joker, a criminal mastermind who seeks to create chaos in Gotham City.', 'assets/3.jpg'),
('Interstellar', 2014, 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.', 'assets/1.jpg');
