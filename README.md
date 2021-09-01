## 目標達成アプリ

### アプリの概要
目標を達成するために予定を立て記録し、分析するアプリ。  

### アプリの機能
①目標設定  
②Plan設定  
③振り返り機能  
④分析機能  
⑤リマインダー機能  
　・LINE  
　・Web画面  
⑥ログイン機能  

### 使用言語  
フロントエンド：HTML,CSS,Bootstrap,JavaScript  
バックエンド:PHP(Laravel)  

### 開発環境  
cloud9  

### 工夫したところ  
・リマインダー機能で、データの有無や振り返り記入の有無によって場合分けしたところ。  
・分析機能の達成率の計算  

### 難しかったところ  
・ログインのAPI連携  

### このアプリを作った経緯
  私は、利用者が毎日を充実感をもって過ごせるようなアプリを作りたかった。  
　そこで、アプリを利用することを通して自己成長できるようなものがあれば、人は一日一日を意味のあるものと感じるのではないかと考えた。  
　自己成長について書籍を調べたり、自分の経験を振り返ると、自分成長に必要なのは「続けること」だと感じた。成長しようと意識するよりも、「昨日やったことを今日少しできるようにする」ということを毎日積み重ねて、結果的に自己成長になるのではないかと考えた。  
　ささいなことでも「達成したいもの＝目標」として設定し、継続できるようにするために、私は人が続けられなくなる要因を考え、科学的根拠のある目標達成の視点を取り入れた。それが、MACの法則である。MACの法則とは、オランダのアイントホーフェン工科大学の研究チームが推奨した目標の達成率が上がる方法のことである。これを目標のデータとして導入した。また、人が続けられなくなる要因の一つに「時間が経つにつれて、自分で立てた目標の意義が薄まってしまう」ということが考えられたため、Home画面に目標が見えるようにして、「リマインダー機能」を設定した。  

### ターゲット
・目標を達成できた経験が少ないが、目標を立てて頑張りたい人。  
・何か物事を継続させたい人。  

### 使い方
ログイン  
⓪右上の「Register」を押して、名前・メールアドレス・パスワードを登録する。  
①ログイン画面からメールアドレスとパスワードを記入する。  

目標記入  
①「目標データ」画面を開き、青いボタン「目標を設定する」を押す。  
②目標設定画面には4つの項目がある。  
　1．MainGoal  
　2．Measurable  
　　1で立てた目標を数値化する。  
　3．Actionable  
　　1で立てた目標までのプロセスを明確にする  
　4．Competent  
　　目標を設定した理由を自分のもっている価値観に基づいて考える。  
③保存ボタンを押すと、目標データ画面に移行し、データが追加される。  
※2，3，4は全部記入しなくても、登録できる。  
Plan記入
目標を設定した上で、毎日予定と振り返りを記入する。  
①Home画面の日付選択から日付を選択する。  
②Plan画面には、予定の内容・開始時間・取り組む時間を記入する。  
③保存を押すと、Planlist画面に移行し、追加される。  

振り返り記入  
①Planlistから振り返りを書きたい予定内容の項目を選択する。  
②「振り返りを書く」をクリックし、振り返りの内容・開始時間・取り組む時間・達成度を記入する。  
③保存を押すとPlanlist画面に移行する。  

### URL
[目標達成アプリ](https://sheltered-sierra-83292.herokuapp.com/)  

#### テストアカウント  
Name: TestTaro  
Mail: test@gmail.com  
Password: test12345  





##### ホーム画面  
![S__56074245](https://user-images.githubusercontent.com/78404592/131443120-1d4ac9f9-6dd6-474d-a072-9be709225c56.jpg)  
##### Plan記入画面  
![スクリーンショット (522)](https://user-images.githubusercontent.com/78404592/131443458-7d0dcc2a-b0ab-4352-ae03-66ea4938dc28.png)  
##### 分析画面  
![S__56074247](https://user-images.githubusercontent.com/78404592/131443123-dcaed5cc-ce12-40d1-aae0-dfdb32fb747b.jpg)  
##### リマインダー画面  
![S__56074248](https://user-images.githubusercontent.com/78404592/131443127-e0f94d8f-4efc-42e2-98b6-5c58d055c3ff.jpg)  




