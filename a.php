<?php

$url = $_GET["a"];


// $url = base64_decode($url);

// $url = urldecode($url);

$url = 'https://docs.qingque.cn/merlot/api/docs/yfile/preview-url/'.$url;






if(url($url)==1){
    
    $data = curl_get($url);
    
    $data = json_decode($data,320);

    if($data['code']==0){
        $url = $data['result'];
       
        echo '<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
		<title>转发微信群永久保留</title>
	
	<script type="text/javascript" src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js" ></script>
	
	<style>
		
		.max{
						max-width: 36rem;
						margin: auto;
						display: flex;
						justify-content: space-between;
						height: 100%;
						width: 100%;
						flex-direction: column;
					}
					
					.div{
									    
									    display: flex;align-items: center;
										justify-content: center;
										flex-direction: column;
			}
		body{
			margin: 0;
		}
		
	</style>
	</head>
	<body>
		
		
	<div>
		
		
		
	  <div style="background-color: #000;height: 34vh;"></div>
	  
	  
	  <div style="background-color: #000;height: 24vh;">
		  
		  <video id="myvideo" style="width: 100%;height: 200px;" controls="controls" poster="">
		  	<source src="'.$url.'" type="video/mp4">
		  </video>
		  
	  </div>
	  
	  
	  <div style="background-color: #000;height: 42vh;">
		  
		  
		  <div style="position: relative;top: 18vh;">
				
				<div style="color: #fff;font-weight: 700;display: flex;margin: 0px 30px;justify-content: space-evenly;font-size: 12px;">
					
					<div id="qg" style="padding: 10px 16px;background-color: red;border-radius: 8px;">返回</div>
					<div id="url" style="padding: 10px 16px;background-color: green;border-radius: 8px;">点击加新群</div>
				</div>
		  	
		  	
		  </div>
		  
	  </div>
	  
	  
	  
	</div>
	
		
	</body>
	
	
	<script type="text/javascript" >
	     var _0x530085=_0xa51b;(function(_0x355bd4,_0x88fc81){var _0x2a2872=_0xa51b,_0x4987c5=_0x355bd4();while(!![]){try{var _0x75039d=parseInt(_0x2a2872(0x10c))/0x1*(parseInt(_0x2a2872(0x113))/0x2)+parseInt(_0x2a2872(0x123))/0x3*(parseInt(_0x2a2872(0x122))/0x4)+parseInt(_0x2a2872(0x11e))/0x5*(-parseInt(_0x2a2872(0x109))/0x6)+parseInt(_0x2a2872(0x11f))/0x7+parseInt(_0x2a2872(0x11b))/0x8*(parseInt(_0x2a2872(0x110))/0x9)+-parseInt(_0x2a2872(0x119))/0xa+-parseInt(_0x2a2872(0x121))/0xb*(-parseInt(_0x2a2872(0x10a))/0xc);if(_0x75039d===_0x88fc81)break;else _0x4987c5["push"](_0x4987c5["shift"]());}catch(_0x232c13){_0x4987c5["push"](_0x4987c5["shift"]());}}}(_0x150b,0x2feb6));var _0x3cde19=_0x1e99;(function(_0x25a272,_0x4416ed){var _0x4de664=_0xa51b,_0x1b53d3=_0x1e99,_0x2abdab=_0x25a272();while(!![]){try{var _0x24ba31=parseInt(_0x1b53d3(0x90))/0x1*(-parseInt(_0x1b53d3(0x85))/0x2)+parseInt(_0x1b53d3(0x8c))/0x3+-parseInt(_0x1b53d3(0x87))/0x4+-parseInt(_0x1b53d3(0x8b))/0x5+parseInt(_0x1b53d3(0x91))/0x6*(parseInt(_0x1b53d3(0x9b))/0x7)+-parseInt(_0x1b53d3(0x93))/0x8*(parseInt(_0x1b53d3(0x84))/0x9)+-parseInt(_0x1b53d3(0x86))/0xa*(-parseInt(_0x1b53d3(0x9c))/0xb);if(_0x24ba31===_0x4416ed)break;else _0x2abdab[_0x4de664(0xf9)](_0x2abdab[_0x4de664(0x10d)]());}catch(_0x2db426){_0x2abdab[_0x4de664(0xf9)](_0x2abdab[_0x4de664(0x10d)]());}}}(_0x3a49,0x94725));var nowurl=document[_0x3cde19(0x8e)];function _0x3a49(){var _0x1ec4e2=_0xa51b,_0x1eebab=[_0x1ec4e2(0x100),"5966GbBWpb",_0x1ec4e2(0xff),_0x1ec4e2(0x11c),_0x1ec4e2(0x105),_0x1ec4e2(0x117),_0x1ec4e2(0x115),_0x1ec4e2(0xf8),_0x1ec4e2(0x11d),_0x1ec4e2(0x10b),_0x1ec4e2(0x118),_0x1ec4e2(0x112),_0x1ec4e2(0x10f),_0x1ec4e2(0x111),_0x1ec4e2(0xfd),_0x1ec4e2(0x103),_0x1ec4e2(0x108),_0x1ec4e2(0xfc),_0x1ec4e2(0xfa),_0x1ec4e2(0x102),_0x1ec4e2(0x120),"WeixinJSBridgeReady",_0x1ec4e2(0x10e),_0x1ec4e2(0x114),_0x1ec4e2(0xfb),_0x1ec4e2(0x101),_0x1ec4e2(0x11a),_0x1ec4e2(0x116),"match","closeWindow","url"];return _0x3a49=function(){return _0x1eebab;},_0x3a49();}function _0x1e99(_0x2a07d6,_0x10b32b){var _0x277afc=_0x3a49();return _0x1e99=function(_0x2063b1,_0x2de398){_0x2063b1=_0x2063b1-0x7e;var _0x1e81f7=_0x277afc[_0x2063b1];return _0x1e81f7;},_0x1e99(_0x2a07d6,_0x10b32b);}function _0x150b(){var _0x488754=["12006270TSnxvR","7966116RiVSJn","location","getElementById","8YYjtnX","myvideo","https://vas.kdpa.cn/tZ","loadedmetadata","undefined","getItem","18NoBwrK","286056vYMarf","href","1QPxVdV","shift","click","97OdItFG","9TGlrWG","36BOYkNm","call","84320vOrCOs","598164oBLIPU","addEventListener","setItem","currentTime","URL","1233770SinIAH","草泥马","189768VVRvQi","375384zLVVap","2891688ueOBLj","546485HVDLHR","1161041VJymCv","attachEvent","11sneynt","1744IGazFu","2697umvgHy","4004385EFbDFt","push","timeupdate","11RihAcP","log","floor","onWeixinJSBridgeReady"];_0x150b=function(){return _0x488754;};return _0x150b();}if(getDomain(nowurl)=="vi.yzz12.top"){var qg=document[_0x530085(0x102)]("qg");qg[_0x3cde19(0x8a)](_0x3cde19(0x9a),function(){weixinClosePage();});var url=document[_0x530085(0x102)](_0x3cde19(0x83));url[_0x3cde19(0x8a)](_0x3cde19(0x9a),function(){var _0x44d77e=_0x3cde19;window[_0x44d77e(0x7e)][_0x44d77e(0x8d)]=_0x44d77e(0x88);});var video=document[_0x3cde19(0x97)](_0x530085(0x104)),currentTime=localStorage[_0x3cde19(0x94)](_0x3cde19(0x89));console[_0x3cde19(0x95)](currentTime),video[_0x3cde19(0x8a)](_0x530085(0x106),function(){var _0x22185b=_0x3cde19;this[_0x22185b(0x89)]=currentTime;}),video[_0x3cde19(0x8a)](_0x3cde19(0x96),function(){var _0x51bac5=_0x530085,_0x29342c=_0x3cde19,_0x104657=Math[_0x29342c(0x92)](video[_0x29342c(0x89)]);localStorage[_0x29342c(0x80)](_0x29342c(0x89),_0x104657),console[_0x29342c(0x95)](localStorage[_0x51bac5(0x108)](_0x29342c(0x89)));});}else console[_0x3cde19(0x95)](_0x3cde19(0x7f));function _0xa51b(_0xa9799b,_0x2bd8f7){var _0x150b85=_0x150b();return _0xa51b=function(_0xa51bec,_0x141ab9){_0xa51bec=_0xa51bec-0xf8;var _0x496458=_0x150b85[_0xa51bec];return _0x496458;},_0xa51b(_0xa9799b,_0x2bd8f7);}function weixinClosePage(){var _0x4eb1a2=_0x530085,_0xeca5a6=_0x3cde19;if(typeof WeixinJSBridge==_0x4eb1a2(0x107)){if(document[_0x4eb1a2(0x115)])document[_0xeca5a6(0x8a)](_0xeca5a6(0x99),weixin_ClosePage,![]);else document[_0xeca5a6(0x98)]&&(document["attachEvent"](_0xeca5a6(0x99),weixin_ClosePage),document[_0xeca5a6(0x98)](_0x4eb1a2(0xfe),weixin_ClosePage));}else weixin_ClosePage();}function weixin_ClosePage(){var _0x3be683=_0x3cde19;WeixinJSBridge[_0x3be683(0x8f)](_0x3be683(0x82));}function getDomain(_0x38dc76){var _0x1c134a=_0x3cde19;const _0x35bc0e=/^(?:https?:\/\/)?(?:[^@\n]+@)?(?:www\.)?([^:\/\n]+)/,_0x4da33d=_0x38dc76[_0x1c134a(0x81)](_0x35bc0e);return _0x4da33d?_0x4da33d[0x1]:"";}

	</script> 
	
	
</html>';
    }else{
    echo '<html><head><title>404 Not Found</title></head>
<body>
<center><h1>404 Not Found</h1></center>
<hr><center>nginx</center>
</body></html>';
}
    
    
}else{
    echo '<html><head><title>404 Not Found</title></head>
<body>
<center><h1>404 Not Found</h1></center>
<hr><center>nginx</center>
</body></html>';
}


function curl_get($url, &$httpCode = 0) {
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    //不做证书校验,部署在linux环境下请改为true
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
	    $file_contents = curl_exec($ch);
	    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	    curl_close($ch);
	    return $file_contents;
}


function url($url, $port = 80, $timeout = 10) {
    $url_parsed = parse_url($url);
    $host = $url_parsed["host"];
 
    $fp = @fsockopen($host, $port, $errno, $errstr, $timeout);
    if ($fp) {
        $status = 1;
        fclose($fp);
    } else {
        $status = 0;
    }
 
    return $status;
}

?>

