<?php
//error_reporting(0);
date_default_timezone_set('Asia/Shanghai');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <table border="1">
        <tr>
            <td>用户ID</td>
            <td>用户名称</td>
        </tr>
        <tr>
            <?php
            /*
             * SAE_MYSQL_USER:用户名 
             * SAE_MYSQL_PASS：密码： 
             * SAE_MYSQL_HOST_M：主库域名
             * SAE_MYSQL_HOST_S：从库域名 
             * SAE_MYSQL_PORT：端口： 
             * SAE_MYSQL_DB数据库名
             * 
             * 详细说明：页面的编码要和数据库的编码一样，不然会出现乱码
             * 或者在连接数据库时设置mysql_set_charset()
             * 
             */
			//$link = mysql_connect ( SAE_MYSQL_HOST_M . ':' . SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS );
			//$link = mysql_connect ( 'w.rdc.sae.sina.com.cn:3307', 'j13l04n3nl', '4mj2k0mjzm0w0j231w05kjwwwjkxw010hw4wiz03' )or die("can't connect!");
			//$link = mysql_connect ( 'db4free.net:3306', 'weit', 'Weit6198' )or die("can't connect!");
			$link = mysql_connect ( 'sql6.freesqldatabase.com:3306', 'sql6113592', 'iWILmwybHr' )or die("can't connect!");

			if ($link) {
                //mysql_select_db ( SAE_MYSQL_DB, $link );
                //mysql_select_db ( 'app_record', $link );
                //mysql_select_db ( 'weit', $link );
                mysql_select_db ( 'sql6113592', $link );
                mysql_set_charset("utf-8");
                
                $sql = "select * from `bookmark` LIMIT 0, 30";
                $result = mysql_query ( $sql );
                //while ( $row = mysql_fetch_array ($result, MYSQL_NUM)) {
                while ( $row = mysql_fetch_array ($result)) {
                    //echo ("<tr><td>$row[0]</td><td>$row[2]</td></tr>");
                    echo ("<tr><td>".$row['username']."</td><td>".$row['account']."</td></tr>");
                }
                
                mysql_free_result ($result);
            } else {
                echo "数据库连接KO";
            }
            ?>
        </tr>

    </table>
    <?php //echo SAE_MYSQL_HOST_M . ':' . SAE_MYSQL_PORT . ' ' . SAE_MYSQL_USER . ' ' . SAE_MYSQL_PASS;?>

</body>
</html>