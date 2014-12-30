ALTER TABLE `jae_focus`
	CHANGE COLUMN `link` `link` TEXT NULL DEFAULT NULL AFTER `picture`;


UPDATE jae_site SET date='20140619' ;
UPDATE jae_site SET version='137';