ALTER TABLE `jae_weblink` ADD  `siteid` SMALLINT(5) UNSIGNED NULL DEFAULT '0'  AFTER `id`;
ALTER TABLE `jae_weblink_type` ADD  `siteid` SMALLINT(5) UNSIGNED NULL DEFAULT '0'  AFTER `typeid`;


UPDATE jae_site SET date='20140718' ;
UPDATE jae_site SET version='144';