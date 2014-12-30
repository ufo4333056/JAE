<?php
defined('IN_JAE') or exit('No permission resources.');
jae_base::load_app_class('admin', 'admin', 0);

class goods extends admin
{
    function __construct()
    {
        parent::__construct();
        
		$this->db= jae_base::load_model('goods_model');
		$this->position_db= jae_base::load_model('position_model');
		$this->position_data_db= jae_base::load_model('position_data_model');
       
        $this->menuid = 20;
        
    }
    function init()
    {   $where= "status=1";
		$searchCategoryId=-1;
		$searchPindaoId=-1;
		$searchPromoteId=-1;
		$dopost = isset($_POST["dopost"]) ? $_POST["dopost"] : '';
	    $page = $_GET['page'];
        $data = $this->db->listinfo($where, "id DESC", $page, 10);
		$categoryArr = rGetCategoryArr();
		$promotePositionArr = rGetPromotePositionArr();
		$pindaoArr = rGetPindaoArr();
        
        $pages = $this->db->pages;
        include $this->admin_tpl('goods_list');
    }
    function search()
    {
		$categoryArr = rGetCategoryArr();
		$promotePositionArr = rGetPromotePositionArr();
		$pindaoArr = rGetPindaoArr();
        
       
	   
	 	$where= "status = 1 ";
		
		//搜索
		$searchWord=isset($_GET['searchWord'])?$_GET['searchWord']:'';
		$searchCategoryId=isset($_GET['searchCategoryId'])?$_GET['searchCategoryId']:'';
	 	$searchPindaoId=isset($_GET['searchPindaoId'])?$_GET['searchPindaoId']:'';
		$searchPromoteId=isset($_GET['searchPromoteId'])?$_GET['searchPromoteId']:'';
	
			
		if (!empty( $searchWord))$where .= " AND `title` LIKE '%$searchWord%' OR `num_iid` = '$searchWord' OR `nick` = '$searchWord'";
		if ($searchPromoteId>=0)  $where .=" AND promote_id = '$searchPromoteId' ";
		
		if($searchCategoryId>=0)$where .=" AND category_id = $searchCategoryId";
			if($searchPindaoId>=0)$where .=" AND pindao_id = $searchPindaoId";
			//if($searchPromoteId>=0)$where .=" AND promote_id = $searchPromoteId";	
		
		
		//搜索结束
			
		
		$page=$_GET['page'];		
		$data=$this->db->listinfo($where,"id DESC",$page,10);
	
		$pages=$this->db->pages;			
        include $this->admin_tpl('goods_list');
    }
    
	
	function goods_collect (){
		$position=$this->position_db->select(array('modelid'=>1),'posid,name','',"posid ASC");		
		foreach ($position as $v){$position_array[$v['posid']]=$v['name'] ;}
        $categoryArr = rGetCategoryArr();
		
		$numiid = isset($_POST['numiid']) ? trim($_POST['numiid']) : ''; //提交过来的num_iid
		if (isset($_POST['dopost'])) {
            if ($numiid != "" && rRuleNum($numiid)) {
				$array=goods_collect($numiid);
				extract($array);
				} else {
                showmessage(L('商品ID不能为空并且必须是数字'));
            }
        }
		include $this->admin_tpl('goods_add');
		
		}
	
    function add()
    {		
		$position=$this->position_db->select(array('modelid'=>1),'posid,name','',"posid ASC");		
		foreach ($position as $v){$position_array[$v['posid']]=$v['name'] ;}         
        $categoryArr = rGetCategoryArr();  
		
        if (isset($_POST['dosubmit'])) {
			$data=$_POST['info'];
			$data['begin_time']=strtotime($_POST['info']['begin_time']);
			$data['end_time']=strtotime($_POST['info']['end_time']);
			$data['status']=1;
			$data['create_time']=SYS_TIME;
			$insert_id=$this->db->insert($data,$return_insert_id =true);
			
			$posids=$_POST['posids']; 
			$arr['title']=$data['title'];
			$arr['isicon']=$data['isicon'];
			$arr['icon_url']=$data['icon_url'];
			$arr['thumb']=$data['pic_url'];
			$arr['url']=$data['detail_url'];
			$arr['inputtime']=$data['begin_time'];
			$arr['price']=$data['price'];
			$arr['coupon_price']=$data['coupon_price'];	
			$arr['begin_time']=$data['begin_time'];
			$arr['end_time']=$data['end_time'];				
			$string=array2string($arr);
			foreach ($posids as $posid){				
				$this->position_data_db->insert(array('posid'=>$posid,'id'=>$insert_id,'modelid'=>1,'module'=>'goods','data'=>$string,'expiration'=>$data['begin_time'],'siteid'=>SITEID));
				}   
			 showmessage(L('operation_success'));
			}
        
       include $this->admin_tpl('goods_add');
    }
  
    function delete()
    {
		if(is_array($_POST['ids'])){
				foreach($_POST['ids'] as $id) {
					print_r($linkid_arr);
 					//批量删除友情链接
					
					 $this->db->delete('id=' . $id);
					
				}
				showmessage(L('operation_success'),'?m=link&c=link');
			}
        $_GET['id'] = intval($_GET['id']);
        $this->db->delete('id=' . $_GET['id']);
        showmessage(L('operation_success'));
       	
    }
    
    function edit()
    { 	
		$categoryArr= rGetCategoryArr();
		
		$position=$this->position_db->select(array('modelid'=>1),'posid,name','',"posid ASC");		
		foreach ($position as $v){$position_array[$v['posid']]=$v['name'] ;}
		
		
        if (isset($_POST['dosubmit'])) {            
            $id   = intval($_POST['id']); $data = $_POST['info'];
			$data["begin_time"]    = strtotime($_POST['info']["begin_time"]);
        	$data["end_time"]      = strtotime($_POST['info']["end_time"]); 
			
			
			$this->db->update($data, 'id=' . $id);
			$this->position_data_db->delete(array('id'=>$id,'module'=>'goods'));
			$posids=$_POST['posids'];
			$arr['title']=$data['title'];
			$arr['isicon']=$data['isicon'];
			$arr['icon_url']=$data['icon_url'];
			$arr['thumb']=$data['pic_url'];
			$arr['url']=$data['detail_url'];
			$arr['inputtime']=$data['begin_time'];
			$arr['price']=$data['price'];
			$arr['coupon_price']=$data['coupon_price'];	
			$arr['begin_time']=$data['begin_time'];
			$arr['end_time']=$data['end_time'];				
			$string=array2string($arr);
			
			foreach ($posids as $posid){				
				$this->position_data_db->insert(array('posid'=>$posid,'id'=>$id,'module'=>'goods','modelid'=>1,'data'=>$string,'expiration'=>$data['begin_time'],'siteid'=>SITEID));
				}   
			
          
			
			          
           showmessage(L('operation_success'));
           
            
        } else {
			$id = intval($_GET['id']);
			$posids=$this->position_data_db->select(array('id'=>$id,'module'=>"goods"),"*","1000","id ASC ");
			foreach ($posids as $c){ $posids_array[]=$c['posid'];}
			
          



            $r  = $this->db->get_one( 'id=' . $id);
            extract($r);
            include $this->admin_tpl('goods_edit');
            
        }
    }
    
    /**
     * 排序
     */
    function listorder()
    {
        if (isset($_POST['dosubmit'])) {
            foreach ($_POST['listorders'] as $id => $listorder) {
				$listorder = !empty($listorder) ? $listorder : '0';	
                $this->db->update(array('listorder' => $listorder), 'id=' . $id);
                $status = isset($_POST["status"][$id]) ? $_POST["status"][$id] : '0';
                $this->db->update(array('status' => $status), 'id=' . $id);
            }         
            showmessage(L('operation_success'));
           
        } else {
            showmessage(L('operation_failure'));
           
        }
    }
    
    
}
?>