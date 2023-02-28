<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "urlredirect.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$ROOKIE_ROOT_DIR =  "../../";
include_once $ROOKIE_ROOT_DIR.'header.php';

$html="";
if(isset($_GET['url']) && $_GET['url'] != null){
    $url = $_GET['url'];
    if($url == 'i'){
        $html.="<p>好的,希望你能坚持做你自己!</p>";
    }else {
        header("location:{$url}");
    }
}



?>



<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="unsafere.php.php"></a>
                </li>
                <li class="active">不安全url跳转</li>
            </ul>
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(再点一下关闭)"
               data-content="仔细看下每个请求的内容">
                点一下提示~
            </a>
        </div>
        <div class="page-content">

            <div class="view info">

                我想问一下,你到底是下面哪一种类型的人:<br>
                <pre>

                <a href="urlredirect.php">搬砖一样的少年</a>
                <a href="urlredirect.php">呆板一样的少年</a>
                <a href="urlredirect.php?url=unsafere.php">沙雕一样的少年</a>
                <a href="urlredirect.php?url=i">我就是我,不一样的我</a>
                    </pre>
                <?php echo $html;?>


            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->



<?php
include_once $ROOKIE_ROOT_DIR . 'footer.php';

?>
