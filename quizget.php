        <?php
        //DB接続
        $link = mysql_connect('localhost', 'root', 'password');
                mysql_query('SET NAMES utf8', $link ); //文字化け防止
                if (!$link) {die('接続失敗です。'.mysql_error());}   
                
                $db_selected = mysql_select_db('tantou', $link);
                if (!$db_selected){die('データベース選択失敗です。'.mysql_error());}
  
                $page = $_POST['quizid'];
               // print($page);
                $num=$page;
                
                $result = mysql_query('SELECT * FROM mondai WHERE id ='.$num.';');
                if (!$result) {die('クエリーが失敗しました。'.mysql_error());}
                //DBとじる
                $close_flag = mysql_close($link);       
                
                $arr = mysql_fetch_assoc($result);
                
                $resultarr = json_encode($arr);
                echo $resultarr;  
        
        ?>