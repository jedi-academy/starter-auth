# create a simple users table for authentication
CREATE TABLE IF NOT EXISTS `users` (
    `id` varchar(10) NOT NULL,
    `name` varchar(20) NOT NULL,
    `password` varchar(64) NOT NULL,
    `role` varchar(20) NOT NULL,
    PRIMARY KEY (`id`)
);

# create the sessions storage file
CREATE TABLE IF NOT EXISTS `ci_sessions` (
    `id` varchar(40) NOT NULL,
    `ip_address` varchar(45) NOT NULL,
    `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
    `data` blob NOT NULL,
    PRIMARY KEY (id),
    KEY `ci_sessions_timestamp` (`timestamp`)
);
