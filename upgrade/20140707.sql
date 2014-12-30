ALTER TABLE `jae_prize` ADD  `module` VARCHAR(15) NULL DEFAULT NULL  AFTER `typeid`;


UPDATE jae_site SET date='20140707' ;
UPDATE jae_site SET version='142';