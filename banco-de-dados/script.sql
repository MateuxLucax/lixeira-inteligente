USE `u629327027_count`;

CREATE TABLE IF NOT EXISTS `log` (
    `id` INT PRIMARY KEY AUTO_INCREMENT, 
    `data` DATE NOT NULL,
    `horario` TIME NOT NULL
);

CREATE TABLE IF NOT EXISTS `contador` (
	`id` INT PRIMARY KEY AUTO_INCREMENT, 
	`quantidade` INT
);

DELIMITER $$
CREATE TRIGGER adiciona_quantidade
AFTER INSERT ON `log` 
FOR EACH ROW
BEGIN
	DECLARE qtd INT DEFAULT 0;
	UPDATE `contador` SET `quantidade` = (`quantidade` + 1) WHERE `id` = 1;
END
$$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER remove_quantidade
AFTER DELETE ON `log` 
FOR EACH ROW
BEGIN
	DECLARE qtd INT DEFAULT 0;
	SET qtd = (SELECT `quantidade` FROM `contador` WHERE `id` = 1);
	UPDATE `contador` SET `quantidade` = (`quantidade` - 1) WHERE `id` = 1;
END
$$
DELIMITER ;

INSERT INTO `contador` VALUES(null, 0);
INSERT INTO `log` VALUES (null, '2019-10-26','10:00:00');

SELECT * FROM `log`;
SELECT * FROM `contador`;
