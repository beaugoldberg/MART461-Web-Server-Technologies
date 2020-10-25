DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spDisplayAllUsers`()
BEGIN
SELECT firstName, lastName, username, gamertag, phoneNum FROM users;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spDisplayUserByUserID`(in user_id int)
BEGIN
SELECT * FROM users WHERE userID = user_id;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spDeleteUserByUserID`(in user_id int)
BEGIN
DELETE FROM users WHERE userID = user_id;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsertNewUser`(in firstname varchar(50), in lastname varchar(50), in username varchar(50), in passwrd varchar(50), in gamertag varchar(50), 
									in phonenum varchar(50))
BEGIN
INSERT INTO users (firstName, lastName, username, pwd, gamertag, phoneNum, subscribedchk, adminchk) VALUES (firstname, lastname, username, passwrd, gamertag, phoneNum, 0, 0);
END$$
DELIMITER ;
