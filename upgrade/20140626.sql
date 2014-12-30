ALTER TABLE `jae_seckill_person` ADD COLUMN `iswin` TINYINT(1) UNSIGNED default '0'  AFTER `goodsid`;

UPDATE jae_point SET module='sign' where typeid=1;
UPDATE jae_point SET module='prize' where typeid=2;

UPDATE jae_site SET date='20140626' ;
UPDATE jae_site SET version='140';