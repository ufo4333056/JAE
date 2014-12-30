ALTER TABLE `jae_block` ADD COLUMN `siteid` smallint(5)	 UNSIGNED default '0'  AFTER `id`;


UPDATE jae_site SET date='20140704' ;
UPDATE jae_site SET version='141';