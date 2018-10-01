CREATE TABLE comments (
    comment_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id varchar(128) NOT NULL,
    date datetime NOT NULL,
    message TEXT NOT NULL
);