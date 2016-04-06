<?php
 $link = mysql_connect('localhost', 'root', 'nekodama1919');
                mysql_query('SET NAMES utf8', $link ); //文字化け防止
                if (!$link) {die('接続失敗です。'.mysql_error());}   
                
                $db_selected = mysql_select_db('tantou', $link);
                if (!$db_selected){die('データベース選択失敗です。'.mysql_error());}
                
                //クイズIDを最大値の次から自動取得する
                $result = mysql_query('SELECT MAX(quizid) FROM kaitou');
                if (!$result) {die('クエリーが失敗しました。'.mysql_error());}
                //DBとじる
                $close_flag = mysql_close($link);       
                
                $arr = mysql_fetch_assoc($result);
                echo $arr ["MAX(quizid)"];
        
        ?>

