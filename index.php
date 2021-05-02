<?php error_reporting(E_ERROR | E_PARSE); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>JFD - Job for DUE</title>
        <link rel="stylesheet" type="text/css" href="css/stylehome.css" />
    </head>
    <body>
        <style>
            input[type=text]{ 
            color:#bcbbb8;
            padding-left: 10px;
            }
            input[type=text]:focus{ 
            color:#000;
            }
            input.focus {
            border: 1px solid #F00;
            }
        </style>
        <div id="main">
            <a href="index.php" class=""><div class="logo"></div></a>
            <div class="textbar">
                <form action="process_home_search.php" name="search" method="post">
                    <input 
                        type="text" 
                        placeholder="Nhập công việc cần tìm"
                        name="keyword"
                        id="keyword"
                        onblur="if(value=='') value = ''" 
                        onfocus="if(value=='') value = ''"
                        class="box_one" required
                        />
                    <input 
                        type="text" 
                        placeholder="Nhập Thành phố / Vị trí"
                        name="keyword2"
                        id="keyword2" 
                        onblur="if(value=='') value = ''" 
                        onfocus="if(value=='') value = ''"
                        class="box_two" required
                        /> 
                    <br />  
                    <input name="search" type="submit" value="Tìm kiếm"  onmouseover="this.style.backgroundColor='#449ac9';return true;" onmouseout="this.style.backgroundColor='#68b5de';return true;"  class="search"/>
                </form>
            </div>
        </div>
        <div class="footer">
            <p>
                <strong>Người tìm việc</strong>: <a href="jobseeker_home.php">Tìm việc</a> | <a href="jobseeker_advanced_search.php">Tìm kiếm việc làm nâng cao</a> | <a href="jobseeker_registration.php">Gửi hồ sơ</a> | <a href="jobseeker_login.php"> Đăng nhập vào tài khoản của bạn</a> |<br />
                <strong>Nhà tuyển dụng</strong>:  <a href="employer_home.php">Trang chủ</a> | <a href="employer_registration.php">Đăng Ký</a> | <a href="employer_login.php"> Đăng nhập vào tài khoản của bạn</a> | <a href="download_resume.php">Tìm kiếm hồ sơ</a><br /> <br />
            </p>
            <p><a href="#">Giới thiệu</a> | <a href="#">Câu hỏi thường gặp</a> | <a href="#">Điều khoản sử dụng</a> | <a href="#">Chính sách bảo mật</a> | <a href="#">Liên hệ với chúng tôi</a><br />
                <span class="copyright">
                Copyright © 2021 jobfordue.com. Được thực hiện bởi Team 44K211.04.</span>
            </p>
        </div>
    </body>
</html>