<?php
 $link = mysql_connect('localhost', 'root', 'nekodama1919');
                mysql_query('SET NAMES utf8', $link ); //文字化け防止
                if (!$link) {die('接続失敗です。'.mysql_error());}   
                
                $db_selected = mysql_select_db('tantou', $link);
                if (!$db_selected){die('データベース選択失敗です。'.mysql_error());}
                
                
                //データ数(初期状態かどうか)
                $data=mysql_query('SELECT EXISTS(SELECT * FROM kaitou WHERE quizid)');
                if (!$data) {die('データ来ません'.mysql_error());}
                
                
                $earr = mysql_fetch_array($data);
                if ($earr[0]==0){
                    echo "0";
                }else{
                //クイズIDを最大値の次から自動取得する
                $result = mysql_query('SELECT MAX(quizid) FROM kaitou');    
                if (!$result) {die('クエリーが失敗しました。'.mysql_error());}    
                $arr = mysql_fetch_assoc($result);
                echo $arr ["MAX(quizid)"]; 
                }
                
                $close_flag = mysql_close($link);  

        ?>

