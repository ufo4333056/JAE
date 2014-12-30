
ALTER TABLE `jae_block_type` ADD  `siteid` SMALLINT(5) UNSIGNED NULL DEFAULT '0'  AFTER `typeid`;


UPDATE jae_site SET date='20140724' ;
UPDATE jae_site SET version='145';