# TantouMachine
短答マシンのソースです。※データは自分で作ってね

----------------------------------------
1.問題マスタ
mondai
内容	ID番号	法域	章	ノンブル	枝番号	設問	枝本文	正解	条文
カラム名	id	law	chapter	num	branch	read	quiz	answer	article
型	int	str	str	int	str	str	str	bool	str
null	不許可	不許可	不許可	不許可	不許可	不許可	不許可	不許可	許可
----------------------------------------
2.集計テーブル
kaitou
内容	ID	回答した枝ID	正誤	コメント	日時
カラム名	id	quizid	result	comment	ansday
型	int	int	bool	text	day
----------------------------------------

