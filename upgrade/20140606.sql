
ALTER TABLE  jae_site  ADD appkey varchar(255) DEFAULT '' AFTER  site_title; 

ALTER TABLE  jae_site  ADD secretkey varchar(255) DEFAULT '' AFTER  appkey; 

ALTER TABLE  jae_site  DROP COLUMN version;
ALTER TABLE  jae_site  ADD version varchar(15) DEFAULT '' AFTER  setting; 

ALTER TABLE  jae_site  DROP COLUMN date;
ALTER TABLE  jae_site  ADD date varchar(15) DEFAULT '' AFTER  version; 

DELETE FROM jae_site;
INSERT INTO `jae_site` (`siteid`, `name`, `dirname`, `domain`, `site_title`, `appkey`, `secretkey`, `keywords`, `description`, `release_point`, `default_style`, `template`, `setting`, `version`, `date`, `uuid`) VALUES
	(1, '��ɫ�й�������', '', 'http://hubei.china.taobao.com/', '��ɫ�й�������', '21689808', '40e7b98fce138a560854d453bc4a1544', '������', '��ɫ�й�������', '', 'hubei', 'hubei', 'array (  head_logo => http://img02.taobaocdn.com/imgextra/i2/1089118323/T2oOoVXMRXXXXXXXXX-1089118323.png,  foot_logo => http://img02.taobaocdn.com/imgextra/i2/1089118323/T2oOoVXMRXXXXXXXXX-1089118323.png,)', '134', '20140606', '1'),
	(2, '��ɫ�й����ɹŹ�', '', 'http://neimenggu.china.taobao.com/', '��ɫ�й����ɹŹ�', '21733132', '2282513e57af0eb8cf77c125049c6427', '���ɹŹ�', '��ɫ�й����ɹŹ�', '', 'neimeng', 'neimeng', 'array (  head_logo => http://img03.taobaocdn.com/imgextra/i3/1863579612/T2cveNXSNXXXXXXXXX-1863579612.jpg,  foot_logo => http://img03.taobaocdn.com/imgextra/i3/1863579612/T2cveNXSNXXXXXXXXX-1863579612.jpg,)', '134', '20140606', '0'),
	(3, '��ɫ�й�����ɽ��', '', 'http://wuyishan.china.taobao.com/', '��ɫ�й�����ɽ��', '21772477', '22f5677315e0f9f3a1e773d6b853fefb', '��ɫ�й�����ɽ��', '��ɫ�й�����ɽ��', '', 'wuyishan', 'wuyishan', 'array (  head_logo => http://img03.taobaocdn.com/imgextra/i3/12004038721590667/T2Nf9.XMpXXXXXXXXX_!!1658162004-2-cs-!CS.png,  foot_logo => http://img03.taobaocdn.com/imgextra/i3/12004038721590667/T2Nf9.XMpXXXXXXXXX_!!1658162004-2-cs-!CS.png,)', '134', '20140606', '0'),
	(4, '��ɫ�й������', '', 'http://gansu.china.taobao.com/', '��ɫ�й������', '21772477', '22f5677315e0f9f3a1e773d6b853fefb', '��ɫ�й������', '��ɫ�й������', '', 'gansu', 'gansu', 'array (  head_logo => http://img03.taobaocdn.com/imgextra/i3/12004038721590667/T2Nf9.XMpXXXXXXXXX_!!1658162004-2-cs-!CS.png,  foot_logo => http://img03.taobaocdn.com/imgextra/i3/12004038721590667/T2Nf9.XMpXXXXXXXXX_!!1658162004-2-cs-!CS.png,)', '134', '20140606', '0'),
	(5, '��ɫ�й�Ϋ����', '', 'http://weifang.china.taobao.com/', '��ɫ�й�Ϋ����', '21772477', '22f5677315e0f9f3a1e773d6b853fefb', '��ɫ�й�Ϋ����', '��ɫ�й�Ϋ����', '', 'weifang', 'weifang', 'array (  head_logo => http://img04.taobaocdn.com/imgextra/i4/2063414185/T2ZFXJX_FXXXXXXXXX_!!2063414185.png,  foot_logo => http://img04.taobaocdn.com/imgextra/i4/2063414185/T2ZFXJX_FXXXXXXXXX_!!2063414185.png,)', '134', '20140606', '0');
	






UPDATE jae_site SET date='20140606' ;
UPDATE jae_site SET version='134';