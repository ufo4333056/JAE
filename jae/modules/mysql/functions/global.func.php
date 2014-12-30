<?php

	/**
	 * ���ֶ����߼ӷ����ţ��Ա�֤���ݿⰲȫ
	 * @param $value ����ֵ
	 */
function add_special_char(&$value) {
        if('*' == $value || false !== strpos($value, '(') || false !== strpos($value, '.') || false !== strpos ( $value, '`')) {
            //���������* ���� ʹ����sql������
        } else {
            $value = '`'.trim($value).'`';
        }
        if (preg_match("/\b(select|insert|update|delete)\b/i", $value)) {
            $value = preg_replace("/\b(select|insert|update|delete)\b/i", '', $value);
        }
        return $value;
    }
    
  	/**
	 * ���ֶ�ֵ���߼����ţ��Ա�֤���ݿⰲȫ
	 * @param $value ����ֵ
	 * @param $key ����key
	 * @param $quotation 
	 */ 
function escape_string(&$value, $key='', $quotation = 1) {
        if ($quotation) {
            $q = '"';
        } else {
            $q = '';
        }
        $value = '"'.htmlspecialchars($value).'"';
        return $value;
    }
	
	/**
	 * ��ʽ�������Ϊ INSERT INTO���
	 * @param $data ����ֵ
	 * @param $replace  ����ֵ �Ƿ����� REPLACE INTO ���
	 */ 
function mysqldump ($table,$data,$replace) {	
	
    $variable=array_keys($data[0]);
    foreach ($variable as $value) {
        if (!intval($value) && $value!=0  && $value!='jae_tenant_nick') $fielddata[]=$value;/*ȡ���������*/
    }   
    array_walk($fielddata, 'add_special_char');
    $field = implode (',', $fielddata);
	
	

    foreach ($data as $z) {
        foreach ($z as $k=>$v) {
            if (!intval($k) && $k!=0  && $k!='jae_tenant_nick') $valuedata[$k]=$v;  //ȡ������ֵ
        }   
        array_walk($valuedata, 'escape_string');
   
        $value = implode (',', $valuedata);
        $cmd = $replace ? 'REPLACE INTO' : 'INSERT INTO';
        $sql.= $cmd.' `'.$table.'`('.$field.') VALUES ('.$value.');';
        $sql.= "\r\n";
    }
	
	return $sql;
	}

?>