USE metadash;


DROP TABLE IF EXISTS user;

CREATE TABLE user (
username varchar(16),
password_hash varchar(150),
password_reset_token varchar(100),
email varchar(100),
auth_key varchar(100),
role int(6),
status int(6),
created_at int(6),
updated_at int(6),
password varchar(16),
id int(4) NOT NULL AUTO_INCREMENT, PRIMARY KEY id(id)
);


INSERT INTO user 
(username, password_hash, password_reset_token, email, auth_key, role, status, created_at, updated_at, password)
VALUES ('fakeuser', '^%$#@1', '98tbjbgui', 'fake_user@chapinhall.org', '2984d5', 10, 10, 2534353, 3736363, 'yak2');


SELECT * FROM user ORDER BY username;
