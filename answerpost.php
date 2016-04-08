<?php
        //DBに回答結果を記録する
        date_default_timezone_set('Asia/Tokyo');
        //DB接続
        $link = mysql_connect('localhost', 'root', 'nekodama1919');
                mysql_query('SET NAMES utf8', $link ); //文字化け防止
                if (!$link) {die('接続失敗です。'.mysql_error());}   
                
                $db_selected = mysql_select_db('tantou', $link);
                if (!$db_selected){die('データベース選択エラ～'.mysql_error());}
  
                $quizid = $_POST['quizid'];
                $branch = $_POST['branch'];
                $result = $_POST['result'];
                $text = $_POST['comment'];
                $kasegi = $_POST['kasegi'];
                $timestamp=date('YmdHis');  
                
                $result=mysql_query('INSERT INTO tantou.kaitou (quizid, branch, result, comment, kasegi, ansday) VALUES ('.$quizid.', "'.$branch.'", '.$result.', "'.$text.'",'.$kasegi.','.$timestamp.');');
                
                if (!$result) {die('クエリエラ～'.mysql_error());}
                //DBとじる
                $close_flag = mysql_close($link);        
?>