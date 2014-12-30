<?php

	/**
	 * 对字段两边加反引号，以保证数据库安全
	 * @param $value 数组值
	 */
function add_special_char(&$value) {
        if('*' == $value || false !== strpos($value, '(') || false !== strpos($value, '.') || false !== strpos ( $value, '`')) {
            //不处理包含* 或者 使用了sql方法。
        } else {
            $value = '`'.trim($value).'`';
        }
        if (preg_match("/\b(select|insert|update|delete)\b/i", $value)) {
            $value = preg_replace("/\b(select|insert|update|delete)\b/i", '', $value);
        }
        return $value;
    }
    
  	/**
	 * 对字段值两边加引号，以保证数据库安全
	 * @param $value 数组值
	 * @param $key 数组key
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
	 * 格式化数组成为 INSERT INTO语句
	 * @param $data 数组值
	 * @param $replace  布尔值 是否生成 REPLACE INTO 语句
	 */ 
function mysqldump ($table,$data,$replace) {	
	
    $variable=array_keys($data[0]);
    foreach ($variable as $value) {
        if (!intval($value) && $value!=0  && $value!='jae_tenant_nick') $fielddata[]=$value;/*取得数组键名*/
    }   
    array_walk($fielddata, 'add_special_char');
    $field = implode (',', $fielddata);
	
	

    foreach ($data as $z) {
        foreach ($z as $k=>$v) {
            if (!intval($k) && $k!=0  && $k!='jae_tenant_nick') $valuedata[$k]=$v;  //取得数组值
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