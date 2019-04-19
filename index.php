<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_lesson_theme
 */

get_header();
?>
    <section class="fv">
        <div class="fv-wrapper">
            <p class="textl">プログラミングで</p>
            <p class="textl">人生の安定を手にいれよう</p>
            <img class="fv-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="画像">
            <p class="textm">バンコクのノマドエンジニア育成講座<br>iSara[イサラ]</p>
            <p class="textm"></p>
        </div>
    </section>

    <section class="conversion">
        <div class="conversion-wrapper">
            <p class="textm">まずは２０日間で、<br>月１０万円稼げるスキルを手にいれよう。</p>
            <p class="highlight-txt">※受講料金は実質０円です。詳しくは資料請求をどうぞ。</p>
            <div class="cvbtn-conversion">
                <p class="textl cvtxt">お問い合わせ / 資料請求はこちら</p>
            </div>
            <p class="textm">第４期生：2018年12月３日 ~ 2018年12月22日  ＊締め切りました</p>
            <p class="textm">第５期生：2019年４月8日 ~ 2019年4月27日　＊締め切りました</p>
            <p class="textm">第６期生：資料請求受付中です</p>
            <p class="share">
                <span class="snsbox snsbox-tw"><i class="sns-icon fab fa-twitter"></i>ツイート</span>
                <span class="snsbox snsbox-fb"><i class="sns-icon fas fa-thumbs-up"></i>いいね!</span>
                <span class="snsbox snsbox-fb"><i class="sns-icon fas fa-share-alt"></i>シェア</span>
            </p>
        </div>
    </section>

    <section class="introduction">
        <div class="introduction-wrapper">
            <div class="yellow-brackets-wide">
                <div class="textl">エンジニアとして本当の自由を手に入れるためには？</div>
            </div>
            <p class="textm">エンジニア需要の高まりに伴い、プログラミングスクールが増えています。<br>しかしそこでの学習の先は、 提携して決められた就職先に就職すること。</p>
            <p class="textm">これで本当にいいのですか？<br>日本人エンジニアはアメリカと較べて給料が格段に低い。<br>その理由がここにあり、 エンジニアは自分の給料をコントロールすべきなのです。</p>
            <p class="textm">スキルを身につけたエンジニアは、人生をコントロールすることでより自由に。<br>そこで必要なのが<span class="underline">「稼ぐ力」</span>です。</p>
        </div>
    </section>

    <div class="about-icon"><p class="about-circle">ABOUT</p></div>

    <section class="about">
        <div class="about-wrapper">
            <div>
                <p class="about-title textl">ノマドエンジニア育成講座<br>iSara[イサラ]とは</p>
            </div>
            <p class="textm about-text"> 「稼ぐこと」にフォーカスしたエンジニア育成講座です。</p>
            <div class="skill-box">
                <p class="skill-box-title textm">稼げるエンジニアに必要な５つのスキルとは？</p>
                <div class="skill-wrapper">
                    <div class="box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/skill.jpg" alt="スキル">
                        <span>基礎的な<br>プログラミングスキル</span>
                    </div>
                    <div class="box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sales.jpg" alt="セールス">
                        <span>案件獲得に必要な<br>営業力</span>
                    </div>
                    <div class="box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/document.jpg" alt="ドキュメント">
                        <span>見積作成から<br>納品までの知識</span>
                    </div>
                    <div class="box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plusone.jpg" alt="プラスワン">
                        <span>自分の付加価値を<br>高めるスキル</span>
                    </div>
                    <div class="box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/connection.jpg" alt="コネクション">
                        <span>フリーランス同士の<br>横のつながり</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-second">
        <div class="font-white">
            <p class="textl">iSaraで「基本的なプログラミングスキル」は教えません</p>
            <p class="textm">基本的なプログラミングスキルは無料で学べる時代。</p>
            <p class="textm">iSaraでは、基礎知識学習は<span class="font-yellow">事前課題</span>と<span class="font-yellow">チャットサポート</span>のみ。</p>
        </div>
        <div class="step-wrapper">
            <div class="step-unit">
                <p class="step-num">STEP.1</p>
                <p class="step-lead">【バンコク渡航前１ヶ月】</p>
                <p class="step-text">事前課題で基礎知識を学ぶ</p>
            </div>
            <div class="step-unit">
                <p class="step-num">STEP.2</p>
                <p class="step-lead">【バンコク到着後】</p>
                <p class="step-text">実践的に稼ぐことに特化した学習</p>
            </div>
            <div class="step-unit">
                <p class="step-num">STEP.3</p>
                <p class="step-lead">【バンコク帰国後】</p>
                <p class="step-text">講座実施後の案件獲得サポート</p>
            </div>
        </div>
    </section>

    <section class="about-blue">
        <p class="textm">スキルアップしてもフリーランスエンジニアとして食べていくことは難しい。</p>
        <p class="textm">フリーランスには<span class="font-yellow">プログラミングスキル以外</span>が大切。</p>
    </section>

    <section class="leaning">
        <p class="textl">iSara<span class="texts">[イサラ]</span>で学べること</p>
        <p class="textm">iSaraの学習では、エンジニアとして「稼ぐ」ために必要な能力を身につけます。</p>
        <div class="leaning-point">
            <img src="<?php echo get_template_directory_uri(); ?>/img/salesskill.jpg" alt="salesskill">
            <img src="<?php echo get_template_directory_uri(); ?>/img/knowledge.jpg" alt="knowledge">
            <img src="<?php echo get_template_directory_uri(); ?>/img/skillup.jpg" alt="skillup">
            <img src="<?php echo get_template_directory_uri(); ?>/img/freelanceconnection.jpg" alt="freelanceconnection">
        </div>
        <p class="textm">これらを教えるのがiSaraです。</p>
    </section>

    <section class="merit">
        <div class="merit-title-wrapper">
            <p class="textm">他のプログラミングスクールとここが違う！</p>
            <p class="textl">iSara[イサラ]の３つのメリット</p>
        </div>
        <div class="merit-point-wrapper">
            <div class="merit-point-unit">
                <img src="<?php echo get_template_directory_uri(); ?>/img/learnfromfreelancer.jpg" alt="learnfromfreelancer">
                <p class="unit-title textm">現役フリーランスから学べる</p>
                <p class="unit-text">他のプログラミングスクールとは違い、実際にフリーランスとして活動しているエンジニアが直接講師を勤めます。</p>
            </div>
            <div class="merit-point-unit">
                <img src="<?php echo get_template_directory_uri(); ?>/img/learnfromprojects.jpg" alt="learnfromprojects">
                <p class="unit-title textm">実践を通じて学べる</p>
                <p class="unit-text">フリーランスにとって最短の学習方法は「実践」。iSaraでは実案件を通して学びます。現役フリーランサーの案件サポートに加え、クラウドソーシングを活用。初心者の自分じゃ無理と思うかもですが、現役フリーランスがサポートしますので大丈夫。</p>
            </div>
            <div class="merit-point-unit">
                <img src="<?php echo get_template_directory_uri(); ?>/img/actuallyfree.jpg" alt="actuallyfree">
                <p class="unit-title textm">授業料が実質０円</p>
                <p class="unit-text">講座費用248,000円以上の金額が稼げるまで「永久サポート延長」があります。</p>
            </div>
        </div>
        <div class="merit-support">
            <p class="support-title textl">さらに！帰国後もサポート付き</p>
            <p class="support-read textm">リモートワーカーのチームを作ることで受注率、受注単価が大幅に向上します。</p>
            <p class="support-text texts">iSaraは講座が終わって終了ではありません。<br>参加メンバーのチャットグループを作り、帰国後も継続的に案件参加できるようになります。<br>また、チームで働くことで継続的に稼ぎやすい仕組みづくりも構築しております。</p>
        </div>
        <div class="merit-bottom-text texts">事前課題ができない人はお断りしております。iSaraでは、無料で学べるプログラミング基礎知識は教えません。事前課題一覧はメールで送りつつ、<br>チャットサポートのみ。従って、本気で取り組まないと結果は出ません。</div>
    </section>

    <section class="teachers">
        <p class=" teachers-title textl"><i class="far fa-id-card"></i></i>運営メンバー</p>
        <p class="teachers-text texts">実際にフリーランスとして活躍しているエンジニアが運営しています</p>
        <div class="teacher-wrapper">
            <div class="teacher-unit">
                <img class="teacher-img" src="<?php echo get_template_directory_uri(); ?>/img/keisuke_someya.jpg" alt="keisuke_someya">
                <div class="teacher-text-wrapper">
                    <p class="teacher-class">フリーランス講師（代表）</p>
                    <p class="teacher-name">染谷 佳佑</p>
                    <p class="teacher-info">ISARA (THAILAND) CO.,LTD.の代表です。学生起業の後にリクルートへ就職、その後独立し、海外移住しました。今はフリーランスとしてリモートワークで日本円を稼ぎ、外国通貨に変えて使い、海外を旅してます。営業、ブログPVアップ(最高月間150万PV)、ビジネス構築が専門です。</p>
                </div>
            </div>
            <div class="teacher-unit">
                <img class="teacher-img" src="<?php echo get_template_directory_uri(); ?>/img/yuki.png" alt="yuki">
                <div class="teacher-text-wrapper">
                    <p class="teacher-class">フリーランス講師（副代表）</p>
                    <p class="teacher-name">成田　雄輝</p>
                    <p class="teacher-info">バンコクのシェアハウスのオーナーをやりながら一年の大半をタイで過ごしています。 大学時代から今に至るまでネットだけで生計を立てているので、自由歴だけは講師陣の中で最長です！ 母親がタイ人という事もありタイには精通してますので、こちらでの生活のサポートはお任せください！</p>
                </div>
            </div>
            <div class="teacher-unit">
                <img class="teacher-img" src="<?php echo get_template_directory_uri(); ?>/img/shohey.png" alt="shohey">
                <div class="teacher-text-wrapper">
                    <p class="teacher-class">フリーランスエンジニア</p>
                    <p class="teacher-name">大滝　昇平</p>
                    <p class="teacher-info">月の半分は東京の会社にリモートで勤めつつ、フリーでも活動しているノマドWebディレクター兼エンジニアです。Laravel・WordPressでのWeb制作がコアスキル。会社員とフリーランス、２つの顔があるからこそ、両方の側面からお話できるかと思います。宜しくお願いします！</p>
                </div>
            </div>
            <div class="teacher-unit">
                <img class="teacher-img" src="<?php echo get_template_directory_uri(); ?>/img/manabu.png" alt="manabu">
                <div class="teacher-text-wrapper">
                    <p class="teacher-class">フリーランスエンジニア</p>
                    <p class="teacher-name">坂内　学</p>
                    <p class="teacher-info">ITとセブ島とお酒を愛しています。新卒で海外就職して１１ヶ月後に退職。今は日本にいたり海外にいたりでゆるくフリーランスをしています。<br><br>お仕事はWebマーケティングとプログラミングが専門領域です。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="qa-yellow">
        <div class="qa-circle">
            <p>Q&A</p>
        </div>
        <div class="qa-brackets">
            <p class="qa-title textl">ノマドエンジニアとして自由に稼ぐことは <br>「 本当に 」可能なのか？</p>
        </div>
    </section>

    <section class="answer">
        <p class="answer-title textl">実現可能です</p>
        <p class="answer-lead texts">その証拠に第三者の声を聞いてみました。</p>
        <p class="answer-text texts">＊実際にフリーランスエンジニアを採用する企業様から、メッセージをいただきました。</p>
        <div class="client-wrapper">
            <div class="client-unit">
                <img src="<?php echo get_template_directory_uri(); ?>/img/take.jpg" alt="take">
                <div class="client-text-wrapper">
                    <p class="client-comment">リモートワークという言葉がありますが、弊社では何も気にしません。エンジニアに求めるのは、快適なコミュニケーションと信頼と成果物のみ。</p>
                    <p class="client-name">Kredo IT Abroad . Inc 代表取締役 横田 猛夫</p>
                </div>
            </div>
            <div class="client-unit">
                <img src="<?php echo get_template_directory_uri(); ?>/img/minami_sato.jpg" alt="minami_sato">
                <div class="client-text-wrapper">
                    <p class="client-comment">社内でスキルのある人材を採用するのは難しい。外部パートナーとして継続的に依頼できるフリーランスには助かっています。</p>
                    <p class="client-name">SAPEUR . Inc 代表取締役 佐藤 陽</p>
                </div>
            </div>
            <div class="client-unit">
                <img src="<?php echo get_template_directory_uri(); ?>/img/asada.jpg" alt="asada">
                <div class="client-text-wrapper">
                    <p class="client-comment">プログラマーが足りていないときに外部リソースとして、フリーランスに発注しています。今はどこの会社でもエンジニアが不足していますね。</p>
                    <p class="client-name">株式会社BeautifulWorks 代表取締役 淺田 百合</p>
                </div>
            </div>
        </div>
    </section>

    <section class="isara-contents">
        <p class="contents-title textl">iSara[イサラ]で学べる内容</p>
        <p class="contents-text">渡航前の事前課題と渡航中に学べることの一覧です。</p>
        <div class="content-wrapper">
            <div class="content-unit">
                <p class="content-title textm">渡航前の事前学習</p>
                <ul class="content-list">
                    <li>０から始めるプログラミング事前学習講座</li>
                    <li>参加者グループコミュニティ</li>
                    <li>チャットサポート</li>
                    <li>事前スカイプコンサル</li>
                    <li>環境構築の事前学習</li>
                    <li>jQueryの事前学習講座</li>
                    <li>Bootstrapの事前講座</li>
                    <li>PHP / Mysqlの事前学習講座</li>
                    <li>稼ぐためのHTML/CSS講座</li>
                    <li>WordPressの事前学習講座</li>
                </ul>
            </div>
            <div class="content-unit">
                <p class="content-title textm">バンコク渡航中</p>
                <ul class="content-list">
                    <li>フリーランス独立術講座</li>
                    <li>実際の実務案件をこなす</li>
                    <li>ノマドフリーランス体験</li>
                    <li>バンコク生活体験</li>
                    <li>クラウドソーシング活用講座</li>
                    <li>フリーランスのための営業講座</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="blue-risk-zero">
        <p class="risk-zero-text textm">講座費用248,000円以上の金額が稼げるまで「永久サポート延長」します。<br>つまりリスク０で参加できます。</p>
    </div>

    <section class="apply-flow">
        <p class="flow-title textl"><i class="fas fa-laptop"></i>受講の流れ</p>
        <img class="flow-img" src="<?php echo get_template_directory_uri(); ?>/img/flow.jpg" alt="flow">
        <div class="flow-wrapper">
            <div class="flow-unit skype">
                <div class="flow-unit-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/skype.png" alt="skype">
                    <p class="flow-unit-title">Skypeで<br>事前コンサル</p>
                </div>
                <div class="flow-unit-right">
                    <p class=" font-a">現在のスキルの状況、パソコンの環境説明、渡航での注意点を話します。</p>
                    <p class=" font-a">簡単なテストあり</p>
                    <p class="font-b">iSaraでは受講料を稼げることを保障しています。従って、事前コンサル時点で簡単なテストを実施し、場合によってはお断りをしております。（テストの内容はPCの基礎知識に関するテストですので、普段からパソコンを利用する方でしたら問題ありません。テストはもちろん無料ですので、まずはお問い合わせください。）</p>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/flowline1.png" alt="flowline1">
            <div class="flow-unit preworks">
                <div class="flow-unit-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/preworks.png" alt="preworks">
                    <p class="flow-unit-title">事前課題の提出</p>
                </div>
                <div class="flow-unit-right">
                    <p class=" font-a">出発前の１ヶ月前に事前課題を送ります。</p>
                    <p class="font-b">０から始めるプログラミング事前学習講座、環境構築の事前学習、jQueryの事前学習講座、Bootstrapの事前学習講座、PHP / Mysqlの事前講座</p>
                    <p class=" font-a">課題は多いですが、ここで努力が必須です。プログラミングは高付加価値なスキルです。そのためには学習が必須です。回数無制限のチャットサポート付きですので、最初は努力してください。<br>また、参加者グループコミュニティも作成するので、横の繋がりでモチベーションを高めることもできます。</p></div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/flowline2.png" alt="flowline2">
            <div class="flow-unit flight">
                <div class="flow-unit-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flight.png" alt="flight">
                    <p class="flow-unit-title">現地に渡航</p>
                </div>
                <div class="flow-unit-right">
                    <p class=" font-a">到着日には空港でお出迎えし、初日のオリエンテーションを行います。<br>滞在先は空港からすぐの出来たてシェアハウス。美味しいタイ料理などもご紹介します。</p>
                    <p class=" font-a">iSaraは『ノマド』フリーランス養成講座です。</p>
                    <p class=" font-a">楽しいノマド体験ができるよう、バンコクでの生活はこちらでサポートします。</p>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/flowline1.png" alt="flowline1">
            <div class="flow-unit leaning">
                <div class="flow-unit-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/leaning.png" alt="leaning">
                    <p class="flow-unit-title">実案件を<br>通して学ぶ</p>
                </div>
                <div class="flow-unit-right">
                    <p class="font-a">現役フリーランスが抱える案件に加え、クラウドソーシングを使って実案件をこなします。</p>
                    <p class="font-a">案件獲得のためのメールの書き方や見積りの仕方など、<br>他のプログラミングスクールでは教えてくれない実務スキルを学ぶことができます。</p>
                    <p class="font-b">＊現役フリーランスがサポートします。</p>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/flowline2.png" alt="flowline2">
            <div class="flow-unit jobsupport">
                <div class="flow-unit-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/jobsupport.png" alt="jobsupport">
                    <p class="flow-unit-title">帰国後の仕事獲得<br>サポート付き</p>
                </div>
                <div class="flow-unit-right">
                    <p class="font-a">経験年数の少ないフリーランスが高単価で継続的に仕事受注するコツ、それがチームを組むことです。</p>
                    <p class="font-a">iSaraではフリーランスコミュニティを形成し、帰国後のエンジニアでも継続的に稼げる仕組みを提供します。</p>
                    <p class="font-a">もちろん、個人で十分に稼げるようになった場合はいつでも脱退できますし、制限などは何もありません。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="why-bangkok">
        <p class="title textl">なぜバンコクなのか？</p>
        <p class="read texts">ここまで見ると、iSaraは日本でも実施可能に見えます。<br>しかし、バンコクを選んだのには理由があります。</p>
        <ul class="list">
            <li>・プログラミングフリーランスの最先端</li>
            <li>・水準は日本と同じなのに、生活費が安い（毎月８万円ほど）</li>
            <li>・昼、夜共に遊びが充実（稼ぐモチベーションアップと息抜きにGOOD）</li>
            <li>・日本人が住みやすい（食事が美味しい / 気候が良い / 親日である）</li>
        </ul>
        <p class="summary textm">環境が大切。さらにこの価格が実現できるのが、バンコクなのです。</p>
    </section>

    <section class="special">
        <p class="special-title textl"><i class="fas fa-gift"></i>iSara受講生への参加特典</p>
        <p class="special-text"><span class="font-white">講座費用248,000円以上の金額が稼げるまでの「永久サポート延長」</span> を追加します。つまり、<span class="font-white">実質０円</span>です。</p>
        <p class="zero-yen-title textl">iSaraは『実質０円』！更なる特典もあります。</p>
        <div class="tokuten-wrapper">
            <div class="tokuten-unit">
                <p class="tokuten-title textl">特典１</p>
                <p class="tokuten-text texts">講座費用248,000円以上の金額が稼げるまで、「永久サポート延長」。リスク０で参加できます。</p>
            </div>
            <div class="tokuten-unit">
                <p class="tokuten-title textl">特典２</p>
                <p class="tokuten-text texts">iSaraフリーランスコミュニティ参加権利。案件の紹介や、新施設OPENの際の優先利用権が受けられます。</p>
            </div>
            <div class="tokuten-unit">
                <p class="tokuten-title textl">特典３</p>
                <p class="tokuten-text texts">講座参加後のシェアハウス利用権利（ドンムアン空港至近のため、とても便利です）</p>
            </div>
        </div>
    </section>



    <section class="isara-value">
        <p class="value-title textl">iSaraはボランティアではありません</p>
        <p class="value-text textm">ここまでみると、実質０円で各種サポートもある、特典が多すぎて逆に怪しい。<br>そう思われるかもしれません。<br>しかし、iSaraが目指すことは異なります。</p>
        <div class="brackets">
            <p class="main-text textl">月１０万円稼げるエンジニアを輩出し続ける。</p>
        </div>
        <p class="value-text textm">最大の価値がこれです。<br>iSaraの卒業生が稼ぎ続けることで、小さな経済が動き始めます。<br>ここに最大の価値があり、この講座はその序章にすぎません。</p>
    </section>

    <section class="message">
        <p class="message-title textl">創業者からのメッセージ</p>
        <p class="massage-text textm">「一生もののスキル」を身につけ、ノマドライフを楽しもう！</p>
        <div class="ceo-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ceo.jpg" alt="ceo" class="ceo">
            <p class="ceo-text texts">初めまして。「iSara（イサラ）」創業者の染谷佳佑と申します。<br>iSaraの開講は、僕達講師陣にとってもとても大きな挑戦です。今回、参加者に圧倒的な価値提供をするために、超少人数制だからできる内容を用意しました。<br><br>・「プログラミングで稼ぐ」に特化した超実践的カリキュラム<br>・フリーランスとして生計を立て、いつでも世界中を旅できるスキル、収入のある講師陣のみを厳選<br>・講座参加者が24万8,000円の参加費以上を稼ぐまでの無期限サポート延長<br><br>ここまでのカリキュラムを備えた講座は、世界で唯一iSaraだけでしょう。 iSaraでプログラミングを学ぶことで、「一生ものの潰しが効くスキル」が間違いなく身につきます。 もちろん勉強だけでなく、バンコクを楽しめるプログラムも用意しています！<br><br>３ヶ月間徹底的にサポートします。ぜひバンコクでお会いしましょう。</p>
        </div>
    </section>


<section class="form">
    <p class="title textl"><i class="far fa-file-alt"></i>資料請求フォーム</p>
    <p class="text texts">まずは無料で資料請求からどうぞ。</p>
    <?php echo do_shortcode('[contact-form-7 id="6" title="テストフォーム"]'); ?>
</section>



<section class="qa">
    <p class="qa-title textl"><i class="far fa-envelope-open"></i>よくある質問</p>
    <ul class="accordion1">
        <li class="qa-unit">
            <p class="question">プログラミングスキルは必要ですか？</p>
            <ul class="inner">
                <li class="answer">いいえ、必要ありません。しかし、iSaraでは参加費以上の金額が稼げることを保障しています。 従って、事前通話面談時点で簡単なテストを実施し、場合によってはお断りをしております。この点だけはご了承ください。</li>
            </ul>
        </li>
        <li class="qa-unit">
            <p class="question">参加費以上に稼げなかったらどうなりますか？</p>
            <ul class="inner">
                <li class="answer">参加費である248,000円以上の金額をトータルで稼ぐまで、無期限でサポート延長いたします。（講座参加後、週30時間以上の実践をすることと、週１回の実践報告をすることが延長条件です。）きちんと学び実践すれば、フリーランスでも収入を作ることは十分に可能です。</li>
            </ul>
        </li>
        <li class="qa-unit">
            <p class="question">滞在中の宿泊先はどうなりますか？</p>
            <ul class="inner">
                <li class="answer">宿泊費用が必要ですが、iSara専用のシェアハウス・ホステルに宿泊することになりますので心配はありません。</li>
            </ul>
        </li>
        <li class="qa-unit">
            <p class="question">滞在中の食事どうなりますか？</p>
            <ul class="inner">
                <li class="answer">拠点となる新築シェアハウスの周辺に、50バーツ程度の（150円）安価な飲食店が多数あります。 日本食レストランもありますし、出前を取ることも可能です。</li>
            </ul>
        </li>
        <li class="qa-unit">
            <p class="question">追加でかかる費用はありますか？</p>
            <ul class="inner">
                <li class="answer">宿泊費（トータル20000円）と食費（一食150円程度）くらいです。</li>
            </ul>
        </li>
        <li class="qa-unit">
            <p class="question">就職、転職はできますか？</p>
            <ul class="inner">
                <li class="answer">DODAの調査によると、2017年のエンジニアの求人倍率は7.5倍です。これは、人材不足が叫ばれる医療業界（医師：6倍、看護師：3倍）よりも高い数値です。ですのできちんとしたスキルを身につけることができれば、就職・転職には困らないはずです。元リクルートの転職のプロも運営スタッフとして参加しています。</li>
            </ul>
        </li>
        <li class="qa-unit">
            <p class="question">フリーランスにならなければならないのですか？</p>
            <ul class="inner">
                <li class="answer">いいえ、必ずフリーランスにならないといけないわけではありません。 エンジニアの需要は右肩上がりで上がっていますので、スキルがあれば就職の間口も非常に大きいです。</li>
            </ul>
        </li>
        <li class="qa-unit">
            <p class="question">ノマドワーカー的に世界を旅しながら働きたいです。可能ですか？</p>
            <ul class="inner">
                <li class="answer">きちんと努力し、スキルを身に着けることができれば可能です。 iSaraは、「好きなときに働き、好きなときに遊ぶ」という人生を送れる人を増やすために開講しました。 ちなみに、講師は全員ノマドワーカーとして、働きながら自由に世界中を旅しています。</li>
            </ul>
        </li>
        <li class="qa-unit">
            <p class="question">学ぶプログラミング言語はなんですか？</p>
            <ul class="inner">
                <li class="answer">HTML / CSS / PHPを学びます。どの言語も需要が高いです。</li>
            </ul>
        </li>
        <li class="qa-unit">
            <p class="question">将来的にwebサービス、アプリ、メディアを作りたいです。</p>
            <ul class="inner">
                <li class="answer">経験してる講師がいますよ。大丈夫です。</li>
            </ul>
        </li>
        <li class="qa-unit">
            <p class="question">次回開催の予定はありますか？</p>
            <ul class="inner">
                <li class="answer">未定です。まずはお問合せください。</li>
            </ul>
        </li>
        <li class="qa-unit">
            <p class="question">海外に出るのが初めてで不安です。</p>
            <ul class="inner">
                <li class="answer">講師陣が現地での生活をサポートしますので安心してください。ただしパスポート取得は必要です。</li>
            </ul>
        </li>
        <li class="qa-unit">
            <p class="question">タイ語、英語が一切話せません。参加可能でしょうか。</p>
            <ul class="inner">
                <li class="answer">タイ語スタッフ、英語スタッフがいるのでOKです。日本人、タイ人スタッフがおりますので、期間中のトラブル対応の心配は必要ありません。</li>
            </ul>
        </li>
        <li class="qa-unit">
            <p class="question">治安はどうですか？</p>
            <ul class="inner">
                <li class="answer">バンコクは、東南アジアや南アジアの他の国の都市部と比べると、街中も整備されており、非常に治安の良い街です。日本ほどではないですが、世界でも非常に治安の良い国として知られています。</li>
            </ul>
        </li>
        <li class="qa-unit">
            <p class="question">パソコンは必要ですか？</p>
            <ul class="inner">
                <li class="answer">Macをご準備ください。</li>
            </ul>
        </li>
    </ul>
</section>




<?php
get_sidebar();
get_footer();

?>


<script>
    $(function(){


        //.accordion1の中のp要素がクリックされたら
        $('.accordion1 p').click(function(){

            //クリックされた.accordion1の中のp要素に隣接するul要素が開いたり閉じたりする。
            // console.log($(this).next('ul'));
            $(this).next('ul').slideToggle();

        });
    });
</script>