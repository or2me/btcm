<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="themename" content="102001"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Teemoo</title>
<link rel="shortcut icon" href="http://imgsize.ph.126.net/?imgurl=http://img0.ph.126.net/Soo0X6wwyelrtKTmgsawQA==/1577385769504523652.jpg_16x16x0x90.jpg">
<link rel="alternate" type="application/rss+xml" href="http://teemoo.me/rss">
<meta name="Keywords" content="Teemoo - Linux,python,kali,ubuntu,"/>
<meta name="Description" content="Teemoo - Never underestimate the power of the Scouts&#39; code ! 一切 一切都是命运 一切都是烟云 一切都是没有结局的开始 一切都是稍纵即逝的追寻 一切欢乐都没有微笑 一切苦难都没有泪痕 一切语言都是重复 一切交往都是初逢 一切爱情都在心里 一切往事都在梦中 一切希望都带着注释 一切信仰都带着呻吟 一切爆发都有片刻的宁静 一切死亡都有冗长的回声 email: or2me#qq.com"/>

<meta name="color:主题颜色" content="#ff0000"/>

<link rel="stylesheet" type="text/css" href="http://lofter.ph.126.net/9La23eg0HIjX9B-tU9-Ffw==/6597131339307155757.css" />

<style type="text/css">
/* 主题颜色 */
.m-innerpager a:hover,
.m-pager a:hover,
.m-pager .js-curpage,
.m-post .time,
.m-nav a:hover,
.m-nav .js-selected a,
.m-nick .nick:first-letter{color:#ff0000;}
.m-post .readall{border-top-color:#ff0000;}
</style>
</head>
<iframe id="control_frame" allowtransparency="true" scrolling="no" frameborder="0" style="position:fixed;_position:absolute;clear:both; width: 390px; height: 32px; z-index:1337; top:0; right:15px;zoom:1; border:0px; background-color:transparent; overflow:hidden;" src="http://www.lofter.com/control?blogId=2169011" ></iframe>
<iframe style="display:none" src="http://l.bst.126.net/rsc/htm/music.html" ></iframe>

<body>

<div id="g-doc" class="g-doc  js-m-about-hide">
    <div class="f-clear g-body">
        <div class="g-side">
            <div id="m-nav" class="f-trans m-nav">
              <div class="navwrap">
                <div class="nav">
                    <div class="navitm about"><a id="aboutme_btn" hidefocus="true" href="#">关于</a></div>
                    <div class="navitm sixin"><a hidefocus="true" href="http://www.lofter.com/message/weidawawa" rel="nofollow" title="私信">私信</a></div>
                    
                    
                    <div class="navitm guidang"><a hidefocus="true" href="http://teemoo.me/view" title="归档">归档</a></div>
                    <div class="navitm rss"><a hidefocus="true" href="http://teemoo.me/rss" title="RSS">RSS</a></div>
                </div>
                
                
                
                <div class="search">
                    <a id="search_btn" hidefocus="true" href="#">搜索</a>
                    <div class="searchipt">
                        <form action="./" method="post"><input id="search_content" class="f-trans" type="text" name="q" /></form>
                    </div>
                </div>
              </div>
            </div>
            
            <div class="f-trans m-about">
                <div class="aboutwrap">
                    <div class="face">
                        <img class="f-trans" src="http://imgsize.ph.126.net/?imgurl=http://img0.ph.126.net/Soo0X6wwyelrtKTmgsawQA==/1577385769504523652.jpg_110x110x0x90.jpg">
                    </div>
                    <div class="desc">
                        <p>Never underestimate the power of the Scouts&#39; code !
<br/>
<br/>
<br/>   一切
<br/>
<br/>一切都是命运
<br/>一切都是烟云
<br/>
<br/>一切都是没有结局的开始
<br/>一切都是稍纵即逝的追寻
<br/>
<br/>一切欢乐都没有微笑
<br/>一切苦难都没有泪痕
<br/>
<br/>一切语言都是重复
<br/>一切交往都是初逢
<br/>
<br/>一切爱情都在心里
<br/>一切往事都在梦中
<br/>
<br/>一切希望都带着注释
<br/>一切信仰都带着呻吟
<br/>
<br/>一切爆发都有片刻的宁静
<br/>一切死亡都有冗长的回声
<br/>
<br/>email: or2me#qq.com</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="g-main">
            <div class="m-nick">
                <div class="f-iblock nick">
                    <a hidefocus="true" href="http://dvwa.com/btcm/">Teemoo</a>
                    <em>&nbsp;</em>
                </div>
            </div>
            
            
            <div class="g-postlist">
            
                
                
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
if( isset($_POST['q']) ){
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

    $serchKey="http://bt.cm/e/api/search?q=".urlencode($_POST['q']);
$datas=json_to_array(file_get_contents("http://bt.cm/e/api/search?q=".urldecode($_POST['q'])));


echo  "About ".$datas['found']." results (".$datas['cost']*"0.001"." seconds)"."<br/>";

$results=$datas['results'];
//var_dump($results);
echo "<ol>";
foreach($results as $key=>$value){
    echo '<div class="m-post m-post-article m-post-leftimg">
                    <a class="readall" hidefocus="true" href="http://teemoo.me/post/2118b3_773792">查看全文</a>
                    <div class="f-clear content">
                        
                        <h2 class="title"><a href="http://teemoo.me/post/2118b3_773792">'.$value['name'].'</a></h2>
                        
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
}
?>
                
                
                
                
                
                
                
                
            </div>
            
            
            
            
            
            
            <div class="m-copyr">
                <span class="copyr">&copy; <a href="http://teemoo.me/">Teemoo</a><span class="sep"> | </span>Powered by <a href="http://www.lofter.com">LOFTER</a></span>
            </div>
        </div>
        
    </div>
    

</div>

<script type="text/javascript">
    window.permalink = false;
    
</script>
<script type="text/javascript" src="http://l.bst.126.net/rsc/js/jquery-1.6.2.min.js" ></script>
<script type="text/javascript" src="http://lofter.ph.126.net/wZzD2tb9yDf8QCWraga1OA==/6597131339307155758.js" ></script>



<script>window.Theme = {'ImageProtected':false,'CcType':0,ContextValue:'版权保护'};</script>
<script src="http://l.bst.126.net/rsc/js/themecommon.js?0004" type="text/javascript"></script>
<script src="http://analytics.163.com/ntes.js" type="text/javascript"></script><script>_ntes_nacc = 'lofter';try{neteaseTracker();}catch(e){}</script>
<script>var _gaq = _gaq || [];_gaq.push(['_setAccount', 'UA-31007899-1']);_gaq.push(['_setDomainName', 'lofter.com']);_gaq.push(['_trackPageview']);(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();</script>
</body>
</html>
