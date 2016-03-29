INSERT INTO users (id, name, password, role) VALUES ("dd", "donald", "duck", "user");
INSERT INTO users (id, name, password, role) VALUES ("mm", "mickey", "mouse", "admin");
UPDATE users SET password = "$2y$10$Rga7t2AYnyhJs5kQIWcDEu5V/x12jOeB5fp1ZivYu5fGQIjODDdVK" where id = "dd";
UPDATE users SET password = "$2y$10$MDR86Btj9Iwzc9rQ.HxP1O3SSrcS1G1kEwBqh67QwMVgS8/NmH7y." where id = "mm";