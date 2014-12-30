ALTER TABLE `jae_seckill` ADD  `question` VARCHAR(255) NULL DEFAULT NULL  AFTER `description`;
ALTER TABLE `jae_seckill` ADD  `answer` VARCHAR(255) NULL DEFAULT NULL  AFTER `question`;

UPDATE jae_site SET date='20140708' ;
UPDATE jae_site SET version='143';