<?php session_start();
error_reporting(E_ERROR | E_PARSE);
    header('Cache-Control: no cache'); //no cache
    session_cache_limiter('private_no_expire'); // works
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Tìm kiếm nâng cao</title>
        <link rel="stylesheet" type="text/css" href="css/stylejobseeker.css" />
        <link rel="stylesheet" type="text/css" href="js/style.js" />
        <script type="text/javascript" src="js/validation_advance_search.js"></script> 
        <link rel="stylesheet" type="text/css" href="lib/jquery.ad-gallery.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="lib/jquery.ad-gallery.js"></script>
        <script type="text/javascript">
            $(function() {
              $('img.image1').data('ad-desc', 'Whoa! This description is set through elm.data("ad-desc") instead of using the longdesc attribute.<br>And it contains <strong>H</strong>ow <strong>T</strong>o <strong>M</strong>eet <strong>L</strong>adies... <em>What?</em> That aint what HTML stands for? Man...');
              $('img.image1').data('ad-title', 'Title through $.data');
              $('img.image4').data('ad-desc', 'This image is wider than the wrapper, so it has been scaled down');
              $('img.image5').data('ad-desc', 'This image is higher than the wrapper, so it has been scaled down');
              var galleries = $('.ad-gallery').adGallery();
            
              $('#switch-effect').change(
                function() {
                  galleries[0].settings.effect = $(this).val();
                  return false;
                }
              );
              $('#toggle-slideshow').click(
                function() {
                  galleries[0].slideshow.toggle();
                  return false;
                }
              );
              $('#toggle-description').click(
                function() {
                  if(!galleries[0].settings.description_wrapper) {
                    galleries[0].settings.description_wrapper = $('#descriptions');
                  } else {
                    galleries[0].settings.description_wrapper = false;
                  }
                  return false;
                }
              );
            });
        </script>
        <style type="text/css">
            * {
            font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, Arial, sans-serif;
            color: #333;
            line-height: 140%;
            }
            h2 {
            margin-top: 1.2em;
            margin-bottom: 0;
            padding: 0;
            border-bottom: 1px dotted #dedede;
            }
            h3 {
            margin-top: 1.2em;
            margin-bottom: 0;
            padding: 0;
            }
            .example {
            border: 1px solid #CCC;
            background: #f2f2f2;
            padding: 10px;
            }
            ul {
            list-style-image:url(list-style.gif);
            }
            pre {
            font-family: "Lucida Console", "Courier New", Verdana;
            border: 1px solid #CCC;
            background: #f2f2f2;
            padding: 10px;
            }
            code {
            font-family: "Lucida Console", "Courier New", Verdana;
            margin: 0;
            padding: 0;
            }
            #gallery {
            background: #fff;
            padding-top: 0px;
            padding-right: 125px;
            padding-bottom: 0px;
            padding-left: 30px;
            width:1000px; margin:0 auto;
            }
            #descriptions {
            position: relative;
            height: 50px;
            background: #EEE;
            margin-top: 10px;
            width: 640px;
            padding: 10px;
            overflow: hidden;
            }
            #descriptions .ad-image-description {
            position: absolute;
            }
            #descriptions .ad-image-description .ad-description-title {
            display: block;
            }
        </style>
        <style>
            input[type=text]{ color:#ccc;}
            input[type=text]:focus{ color:#71716f;}
            input.focus {
            border: 1px solid #F00;
            }
        </style>
    </head>
    <body>
        <div class="home_header_main">
            <div id="home_header">
                <div class="home_logo"><a href="employer_home.php"><img src="images/large_logo.png" width="180" /></a></div>
                <div class="home_header_right">
                    <div class="home_right_topmenubar">
                        <?php
                            include ('includes/top.inc.php');
                            ?>
                    </div>
                    <div class="home_menubar">
                        <div class="home_socialmedia_icons">
                            <ul>
                                <li><a href="#"><img src="images/facebook.png" width="23" /></a></li>
                                <li><a href="#"><img src="images/twitter.png" width="23" /></a></li>
                                <li><a href="#"><img src="images/linkedin.png" width="23" /></a></li>
                            </ul>
                        </div>
                        <div class="home_menubar_manu">
                            <?php
                                include ('includes/menu.inc.php');
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear_both">&nbsp;</div>
        <div class="home_banner_main_search">
            <div id="home_banner_search">
                <div id="reg_maindiv">
                    <div class="reg_left">
                        <div class="advanced_search_div">
                            <img src="images/advanced.png" width="50" align="left" class="advanced_image" />
                            <p><strong>Tìm kiếm nâng cao</strong></p>
                            <table width="100%" cellspacing="10" cellpadding="5">
                                <form name="advanced_search" action="process_advanced_search.php" method="post" onsubmit="return required()">
                                    <tr>
                                        <td width="20%"><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Từ khóa</td>
                                        <td width="5%">:</td>
                                        <td width="75%"><input type="text" placeholder="Nhập Từ khóa"
                                            name="keyword" id="keyword"
                                            onblur="if(value==" ") value = ''" 
                                            onfocus="if(value=='') value = " "" class="advanced_box" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Địa Điểm</td>
                                        <td>:</td>
                                        <td><input type="text" placeholder="Nhập Từ khóa"
                                            name="location" id="keyword"
                                            onblur="if(value==" ") value = ''" 
                                            onfocus="if(value=='') value = " "" class="advanced_box"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kinh nghiệm</td>
                                        <td>:</td>
                                        <td>
                                            <select id="experience" title="-Experience-" name="experience" class="advanced_box_select">
                                                <option selected="" value="-1">Tùy chọn</option>
                                                <option value="Thực tập">Thực tập</option>
                                                <option value="0" label="0">Dưới 1 năm</option>
                                                <option value="1" label="1">1 năm</option>
                                                <option value="2" label="2">2 năm</option>
                                                <option value="3" label="3">3 năm</option>
                                                <option value="4" label="4">4 năm</option>
                                                <option value="5" label="5">5 năm</option>
                                                <option value="greater_5" label="greater_5">Hơn 5 năm</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Lĩnh vực</td>
                                        <td>:</td>
                                        <td>
                                            <select id="sector" class="advanced_box_select" title="Search with Industry" name="sector">
                                                <option selected="" value="">- Tùy chọn -</option>
                                                <option value="IT Phần mềm">IT Phần mềm</option>
                                                <option value="IT Phần cứng">IT Phần cứng</option>
                                                <option value="Graphics/Designer">Graphics/Designer</option>
                                                <option value="UI / UX">UI / UX</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loại</td>
                                        <td>:</td>
                                        <td>
                                            <input type="radio" id="companytype" name="companytype" value="company"  />Công ty&nbsp;&nbsp;&nbsp;
                                            <input type="radio" id="companytype" name="companytype" value="agency" />Cơ quan tuyển dụng
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input type="hidden" name="Search" value="Search" />
                                            <input type="submit" value="Tìm kiếm"  style="background:url(images/button.png) no-repeat; width:100px; height:25px; border:none; color:#fff;" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>Các trường có dấu <span class="advanced_star">*</span> là bắt buộc</td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                    </div>
                    <div class="search_main_div">
                        <?php
                            include ('includes/sidebar.inc.php');
                            ?> 
                    </div>
                </div>
            </div>
        </div>
        <div id="container">
            <div id="gallery" class="ad-gallery">
                <iframe  frameborder="0" width="1075" height="125" src="navigator/example/navigator.html"   scrolling="no" frameborder="0"   allowtransparency="no" >
                </iframe>
            </div>
        </div>
        <div id="home_footer_main">
        <div id="home_footer">
            <div id="home_footer_slice_one"> <a href="#"><img src="images/large_logo.png" width="100"  border="none"/></a> </div>
            <div id="home_footer_slice_two">
                <span class="home_foote_span">JFD Links</span><br />
                <?php
                    include ('includes/footer.inc.php');
                    ?>
                <div id="home_footer_slice_five"> <span class="home_foote_span">Liên hệ hỗ trợ</span><br />
                    <br />
                    <span class="speech_number">090 1168 525</br></br> jobfordue@gmail.com</span> 
                </div>
            </div>
        </div>
    </body>
</html>