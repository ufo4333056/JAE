<?php
            include("top/RequestCheckUtil.php");
            include("top/TmcMessagesConsumeRequest.php");
            include("top/topclient.php");
            include("top/TmcMessagesConfirmRequest.php");
            //ʵ����TopClient��
            $c = new TopClient;
            $c->appkey = "1021689808";
            $c->secretKey = "sandboxfce138a560854d453bc4a1544";
            $c->gatewayUrl = "http://gw.api.tbsandbox.com/router/rest"; 
           // $c->format = "json";
            //ʵ��������API��Ӧ��Request��
            $req = new TmcMessagesConsumeRequest;
            $req->setGroupName("vip_user");
            $req->setQuantity(10);
            $resp = $c->execute($req);
            print_r($resp);
            for ($i=0; $i<count($resp->messages->tmc_message); $i++)
            {
                $messages_ids.=$resp->messages->tmc_message[$i]->id.",";
            }
            $messages_ids = substr($messages_ids,0,strlen($messages_ids)-1);
            /*
             * do something
             *
             * */
            //echo $messages_ids;
            //ȷ����Ϣ
            $req2 = new TmcMessagesConfirmRequest;
            $req2->setSMessageIds($messages_ids);
            $resp2 = $c->execute($req2);
 // stdClass Object ( [messages] => stdClass Object ( [tmc_message] => Array ( [0] => stdClass Object ( [user_id] => 0 [content] => {"buyer_nick":"��01sFPHkvIUn+0iz7SFXIznPxzFidsYny1qVs/ZHI2U3s4\u003d","auction_id":36261151986,"paid_fee":990,"auction_count":1,"auction_title":"������ζ ˮ���� �����������Ӳ�248g ����ƿ�� ��2ƿ�����Ӱ���"} [id] => 7112500108330773705 [pub_time] => 2014-04-11 23:38:23 [pub_app_key] => 12497914 [topic] => jae_trade_PaidSuccessed ) ) ) )
          
            ?>