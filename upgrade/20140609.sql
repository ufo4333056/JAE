
ALTER TABLE  jae_member  DROP COLUMN fromuserid;
ALTER TABLE  jae_member  ADD fromuserid MEDIUMINT(8) UNSIGNED DEFAULT null AFTER  userid; 


UPDATE jae_site SET date='20140609' ;
UPDATE jae_site SET version='135';