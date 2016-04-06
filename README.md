# TantouMachine
短答マシンのソースです。※データは自分で作ってね

----------------------------------------
1.問題マスタ
mondai
内容	カラム名	型	null
ID番号	id	int	不許可
法域	law	str	不許可
章	chapter	str	不許可
ノンブル	num	int	不許可
枝番号	branch	str	不許可
設問	read	str	不許可
枝本文	quiz	str	不許可
正解	answer	bool	不許可
条文	article	str	許可
----------------------------------------
2.集計テーブル
kaitou
内容	カラム名	型
ID	id	int
回答した枝ID	quizid	int
正誤	result	bool
コメント	comment	text
日時	ansday	day
----------------------------------------

