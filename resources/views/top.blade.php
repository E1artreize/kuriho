<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
        <link rel="stylesheet" href="{{asset('style.css')}}">   
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">     
        <title>和栗モンブラン専門店 -栗歩-</title>
    </head>
    <body>
        <section class="header-menu">
            <p>testtesttest</p>
        </section>
        <section class="first-view">
            <h1>和栗モンブラン専門店 -栗歩-</h1>
            <div class="fv-content">
                <img src="images/栗歩ロゴ.png">
                <div class="fv-menu">
                    <ul class="menu-items">
                    <li><a href=#about>栗歩について</a></li>
                    <li><a href=#menu>お品書き</a></li>
                    <li><a href="">店舗情報</a></li>
                    <li><a href="https://www.instagram.com/waguri_montblanc_kuriho" target="blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                <div>
            </div>
        </section>
        <section class="about" id="about">
            <div class="about-header">
                <h2>能登・松尾栗園がこだわり抜いた<br>究極の味。</h2>
                <div class="about-header-content">
                    <img src="images/about-image.png">
                    <p>石川県の栗農家「松尾栗園」の最高級和栗をじっくりと熟成させた後焼き、ペーストにして使用。<br>
                        妥協のない選果に加え、作業場の温度・湿度管理にも細かく気を遣い、無糖ながら栗本来の甘みや香りを最大限に引き出しています。 <br>
                        徹底したこだわりが生んだ「能登栗の無糖プレミアムモンブラン」をお楽しみください。
                    </p>
                </div>
                <img class="bar" src="images/about-bar.png">
            </div>
            <div class="about-detail">
                <div class="jukusei">
                    <h2><span>熟成</span><img src="images/hisigata.png"></h2>
                    <div class="jukusei-content">
                        <p class="content-head">１５年かけて導き出した”奇跡の１０日間”</p>
                        <p class="content-description">採れたての栗は糖度１０ほどしかありませんが、マイナス１℃で４５日間熟成させることにより、糖度２０を超えるほど甘味が増します。 これは栗農家・松尾さんが自身で温度・風の強さなどの条件を変えながら糖度を図り、１５年かけて導き出した熟成期間なのです。 さらに糖度が一番高い熟成期間は１０日間しかなく、松尾さんはこれを「奇跡の１０日間」 と呼んでいます。 </p>
                    </div>
                </div>
                <div class="yakiguri">
                    <div class="yakiguri-content">
                    <p class="content-head">無糖で驚きの甘さを実現</p>
                    <p class="content-description">熟成された栗を焼き栗窯で焼き栗にします。 加圧量や加熱温度、加熱時間などもこだわりがあり、その条件で焼いた栗は糖度３０を超えるほどまで甘くなります。 その焼き立ての焼き栗は驚くほど美味しく、甘み、香りがとてつもなく引き立ちます。 </p>
                    </div>
                    <h2><span>焼き栗</span><img src="images/hisigata.png"></h2>
                </div>
            </div>
            <div class="about-detail-sp">
                <div class="feature">
                    <div class="title">
                        <h2><span>熟成</span><img src="images/hisigata.png"></h2>
                        <p class="content-head">15年かけて導き出した<br>”奇跡の10日間”</p>
                    </div> 
                    <p class="content-description">採れたての栗は糖度10ほどしかありませんが、マイナス1℃で45日間熟成させることにより、糖度20を超えるほど甘味が増します。 これは栗農家・松尾さんが自身で温度・風の強さなどの条件を変えながら糖度を図り、15年かけて導き出した熟成期間なのです。 さらに糖度が一番高い熟成期間は10日間しかなく、松尾さんはこれを「奇跡の10日間」 と呼んでいます。</p>
                </div>
                <div class="feature">
                    <div class="title">
                        <h2><span>焼き栗</span><img src="images/hisigata.png"></h2>
                        <p class="content-head">無糖で驚きの甘さを実現</p>
                    </div> 
                    <p class="content-description">熟成された栗を焼き栗窯で焼き栗にします。 加圧量や加熱温度、加熱時間などもこだわりがあり、その条件で焼いた栗は糖度30を超えるほどまで甘くなります。 その焼き立ての焼き栗は驚くほど美味しく、甘み、香りがとてつもなく引き立ちます。</p>
                </div>
            </div>
        </section>
        <section class="menu" id="menu">
            <div class="menu-box">
                <h2>お品書き<span class="english">Items</span><br><span class="sub">※価格は税抜きです。</span></h2>
                <div class="menu-content">
                    <ul class="items">
                        <li><small>砂糖不使用</small><br><span class="item-box"><span class="name">熟成無糖モンブラン</span><span class="price">2200yen</span></span></li>
                        <li><small>高級国産和栗をブレンド</small><br><span class="item-box"><span class="name">国産和栗のモンブラン</span><span class="price">1800yen</span></span></li>
                        <li><small>旬の果実を使用</small><br><span class="item-box"><span class="name">季節の果物タルト</span><span class="price">2000yen</span></span></li>
                        <li><small>国産和栗×マルガージェラート</small><br><span class="item-box"><span class="name">季節の果物パルフェ</span><span class="price">2000yen</span></span></li>
                    </ul>
                    <div class="menu-image"><img src="images/ATE.png"><p>「熟成無糖モンブラン」</p></div>
                </div>
            </div>
        </section>
        <section class="shops">
            <div class="shops-title">
                <h2><span class="english">Shops</span><br>店舗情報</h2>
            </div>
            <div class="shops-content">
                <div class="shop-item">
                    <img src="images/shop-jiyugaoka-image.png">
                    <div class="shop-text">
                        <h3 class="shop-title">自由が丘店</h3>
                        <dl class="shop-information">
                            <dt>■所在地</dt><dd>東京都目黒区自由が丘1-9-6 オハナビル2F</dd>
                            <dt>■電話番号</dt><dd>03-6459-5535</dd>
                            <dt>■営業時間</dt><dd>11:00-18:00（L.O17:00）／年中無休</dd>
                            <dt>■アクセス</dt><dd>東急東横線／大井町線　自由が丘駅　南口出てすぐ</dd>
                        </dl>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.8251522636483!2d139.66716391448438!3d35.60737938021156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f51f13aec327%3A0xb9b1c91c1a66784d!2z44CSMTUyLTAwMzUg5p2x5Lqs6YO955uu6buS5Yy66Ieq55Sx44GM5LiY77yR5LiB55uu77yZ4oiS77yW!5e0!3m2!1sja!2sjp!4v1595961848690!5m2!1sja!2sjp"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </section>
        <section class="footer">
            <div class="footer-content">
                <img src="images/栗歩ロゴ.png">
                <div class="footer-information">
                    <p>完全予約制／ご予約はお電話でのみ承っております。</p>
                    <p class="phone"><i class="fas fa-phone"></i>03-6459-5535</p>
                    <div class="instagram"><a href="https://www.instagram.com/waguri_montblanc_kuriho" target="blank"></a><i class="fab fa-instagram"></i>公式Instagramアカウント</div>
                </div>
            </div>
            <small>&copy;2020 KURIHO</small>
        </section>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="{{asset('js/scrollreveal.min.js')}}"></script>
        <script src="{{asset('js/anime.js')}}"></script>
        
    </body>
</html>