<?php
///**
// * Created by runner.han
// * There is nothing new under the sun
// */


ob_start();

if (!isset($ROOKIE_ROOT_DIR)) {
    $ROOKIE_ROOT_DIR = '';
}


//$ACTIVE = array("active open","active","","","");

if (!isset($ACTIVE)) {
    $SELF_PAGE = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/') + 1);
    if ($SELF_PAGE = "index.php") {
        //22 title
        $ACTIVE = array("active open", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>rookie</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo $ROOKIE_ROOT_DIR; ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $ROOKIE_ROOT_DIR; ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo $ROOKIE_ROOT_DIR; ?>assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo $ROOKIE_ROOT_DIR; ?>assets/css/ace.min.css" class="ace-main-stylesheet"
        id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo $ROOKIE_ROOT_DIR; ?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo $ROOKIE_ROOT_DIR; ?>assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?php echo $ROOKIE_ROOT_DIR; ?>assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo $ROOKIE_ROOT_DIR; ?>assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="<?php echo $ROOKIE_ROOT_DIR; ?>assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="<?php echo $ROOKIE_ROOT_DIR; ?>assets/js/html5shiv.min.js"></script>
    <script src="<?php echo $ROOKIE_ROOT_DIR; ?>assets/js/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo $ROOKIE_ROOT_DIR; ?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo $ROOKIE_ROOT_DIR; ?>assets/js/bootstrap.min.js"></script>

</head>

<body class="no-skin">
    <div id="navbar" class="navbar navbar-default          ace-save-state">
        <div class="navbar-container ace-save-state" id="navbar-container">

            <div class="navbar-header pull-left">
                <a href="<?php echo $ROOKIE_ROOT_DIR; ?>index.php" class="navbar-brand">
                    <small>
                        <i class="fa fa-key"></i>
                        Rookie网络漏洞练习平台 biu~biu~
                    </small>
                </a>
            </div>

            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">

                    <li class=" dropdown-modal">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo"
                                src="<?php echo $ROOKIE_ROOT_DIR; ?>assets/images/avatars/rookie.jpg" />
                            <span class="user-info">
                                <small>欢迎</small>
                                菜鸟
                            </span>
                        </a>

                    </li>
                </ul>
            </div>
        </div><!-- /.navbar-container -->
    </div>

    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try { ace.settings.loadState('main-container') } catch (e) { }
        </script>


        <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
            <script type="text/javascript">
                try { ace.settings.loadState('sidebar') } catch (e) { }
            </script>

            <ul class="nav nav-list">
                <li class="<?php echo $ACTIVE[0]; ?>">
                    <a href="<?php echo $ROOKIE_ROOT_DIR; ?>index.php">
                        <i class="ace-icon glyphicon glyphicon-tags"></i>
                        <span class="menu-text"> 系统介绍 </span>
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="<?php echo $ACTIVE[1]; ?>">
                    <a href="#" class="dropdown-toggle">
                        <i class="ace-icon glyphicon glyphicon-lock"></i>
                        <span class="menu-text">
                            暴力破解
                        </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="<?php echo $ACTIVE[2]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/burteforce/burteforce.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                概述
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="<?php echo $ACTIVE[3]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/burteforce/bf_form.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                基于表单的暴力破解
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo $ACTIVE[4]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/burteforce/bf_server.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                验证码绕过(on server)
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo $ACTIVE[5]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/burteforce/bf_client.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                验证码绕过(on client)
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>


                <li class="<?php echo $ACTIVE[7]; ?>">
                    <a href="#" class="dropdown-toggle">
                        <i class="ace-icon glyphicon glyphicon-indent-left"></i>
                        <span class="menu-text">
                            前端渗透
                        </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">

                        <li class="<?php echo $ACTIVE[8]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/xss/xss.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                概述
                            </a>
                            <b class="arrow"></b>
                        </li>


                        <li class="<?php echo $ACTIVE[9]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/xss/xss_reflected_get.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                反射型xss(get)
                            </a>
                            <b class="arrow"></b>
                        </li>



                        <li class="<?php echo $ACTIVE[10]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/xss/xsspost/post_login.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                反射型xss(post)
                            </a>
                            <b class="arrow"></b>
                        </li>


                        <li class="<?php echo $ACTIVE[11]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/xss/xss_stored.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                存储型xss
                            </a>
                            <b class="arrow"></b>
                        </li>


                        <li class="<?php echo $ACTIVE[12]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/xss/xss_dom.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                DOM型xss
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo $ACTIVE[12]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/xss/xss_dom_x.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                DOM型xss-x
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>




                <li class="<?php echo $ACTIVE[35]; ?>">
                    <a href="#" class="dropdown-toggle">
                        <i class="ace-icon fa fa-fighter-jet"></i>
                        <span class="menu-text">
                            注入全方位利用
                        </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">

                        <li class="<?php echo $ACTIVE[36]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/sqli/sqli.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                概述
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo $ACTIVE[37]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/sqli/sqli_id.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                数字型注入(post)
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo $ACTIVE[38]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/sqli/sqli_str.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                字符型注入(get)
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo $ACTIVE[39]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/sqli/sqli_search.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                搜索型注入
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo $ACTIVE[40]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/sqli/sqli_x.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                xx型注入
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo $ACTIVE[41]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/sqli/sqli_iu/sqli_login.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                "insert/update"注入
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo $ACTIVE[42]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/sqli/sqli_del.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                "delete"注入
                            </a>
                            <b class="arrow"></b>
                        </li>


                        <li class="<?php echo $ACTIVE[43]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/sqli/sqli_header/sqli_header_login.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                "http header"注入
                            </a>
                            <b class="arrow"></b>
                        </li>


                        <li class="<?php echo $ACTIVE[44]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/sqli/sqli_blind_b.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                盲注(base on boolian)
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo $ACTIVE[45]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/sqli/sqli_blind_t.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                盲注(base on time)
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo $ACTIVE[46]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/sqli/sqli_widebyte.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                宽字节注入
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>





                <li class="<?php echo $ACTIVE[65]; ?>">
                    <a href="#" class="dropdown-toggle">
                        <i class="ace-icon glyphicon glyphicon-upload"></i>
                        <span class="menu-text">
                            文件上传解析漏洞
                        </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">

                        <li class="<?php echo $ACTIVE[66]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/unsafeupload/upload.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                概述
                            </a>
                            <b class="arrow"></b>
                        </li>


                        <li class="<?php echo $ACTIVE[67]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/unsafeupload/clientcheck.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                client check
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo $ACTIVE[68]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/unsafeupload/servercheck.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                MIME type
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo $ACTIVE[69]; ?>">
                            <a href="<?php echo $ROOKIE_ROOT_DIR; ?>view/unsafeupload/getimagesize.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                getimagesize
                            </a>
                            <b class="arrow"></b>
                        </li>

                    </ul>
                </li>

            </ul><!-- /.nav-list -->

            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
                    data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
            </div>
        </div>