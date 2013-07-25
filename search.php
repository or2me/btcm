<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

$datas=json_to_array(file_get_contents("./json.txt"));

function json_to_array($str) {
	if (is_string($str))
		$str = json_decode($str);
	$arr=array();
	foreach($str as $k=>$v) {
		if(is_object($v) || is_array($v))
			$arr[$k]=json_to_array($v);
		else
			$arr[$k]=$v;
	}
	return $arr;
}

echo  "About ".$datas['found']." results (".$datas['cost']*"0.001"." seconds)"."<br/>";

$results=$datas['results'];
//var_dump($results);
echo "<ol>";
foreach($results as $key=>$value){
	echo '<div class="m-post m-post-article m-post-leftimg">
                    <a class="readall" hidefocus="true" href="http://teemoo.me/post/2118b3_773792">查看全文</a>
                    <div class="f-clear content">
                        
                        <h2 class="title"><a href="http://teemoo.me/post/2118b3_773792">第四章 人兽时代</a></h2>
                        
                        <div class="wrap f-clear">
                            
                            <div class="text">';
		$files=$value['files'];
		foreach ($files as $key1 => $value1) {
			if (!preg_match(".padding_file.", $value1['name'])) {
				echo "<ul><li>".$value1['name']."</li></ul>";
			}
			
		}
	echo '</div>
                        </div>
                    </div>
                    <div class="f-clear otherinfo">
                        <a class="time" hidefocus="true" href="http://teemoo.me/post/2118b3_773792">2013-07-19</a>
                    </div>
                </div>';
}
echo "</ol>";