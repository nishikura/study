<html>

  <head>
    <meta http-equiv="content-language" content="ja">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ==" crossorigin="">
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>
    <title>店舗検索</title>
  </head>

  <body>

    <div id="page">

    <!-- ヘッダー -->
    <?php include ('./conf/header.html'); ?>

    <!-- メニュー -->
    <div id="menu" style="width: 300; height: 265; font-size: 13; float: left; margin: 30; background-color: snow;">

    <ul type="none" style="padding: 0; margin: 0">
      <li style="width: 100%; line-height: 3em; border-bottom: 1px solid darkgrey; border-top: 1px solid darkgrey;"><a href="tenpo_seach.html" style="display: block; text-decoration: none;">店舗検索</a></li>
      <li style="width: 100%;">都道府県から探す</li>
        <select name="add_dool">
          <option value="select">選択してください</option>
          <option value="Hokkaido">北海道(1)</option>
          <option value="Miyagi">宮城県(2)</option>
          <option value="Niigatan">新潟県(1)</option>
          <option value="Nagano">長野県(1)</option>
          <option value="Tokyo">東京都(9)</option>
          <option value="Ibaraki">茨城県(1)</option>
          <option value="Tochigi">栃木県(1)</option>
          <option value="Chiba">千葉県(3)</option>
          <option value="Saitama">埼玉県(4)</option>
          <option value="Kanagawa">神奈川県(4)</option>
          <option value="Shizuoka">静岡県(2)</option>
          <option value="Aichi">愛知県(4)</option>
          <option value="Gifu">岐阜県(1)</option>
          <option value="Mie">三重県(1)</option>
          <option value="Kyoto">京都府(1)</option>
          <option value="Osaka">大阪府(4)</option>
          <option value="Hyougo">兵庫県(3)</option>
          <option value="Nara">奈良県(1)</option>
          <option value="Shiga">滋賀県(1)</option>
          <option value="Hiroshima">広島県(1)</option>
          <option value="Fukuoka">福岡県(3)</option>
        </select>

      <input type="search" name="search" placeholder="フリーワード">
      <input type="submit" name="submit" value="検索">

      <li style="width: 100%; line-height: 3em; border-bottom: 1px solid darkgrey; border-top: 1px solid darkgrey;">パークチケット取扱い店舗</li>
      <li style="width: 100%; line-height: 3em; border-bottom: 1px solid darkgrey;">コーポレートプログラム利用券取扱い店舗</li>
      <li style="width: 100%; line-height: 3em; border-bottom: 1px solid darkgrey;">アウトレット店・期間限定店</li>
      <li style="width: 100%; line-height: 3em; border-bottom: 1px solid darkgrey;"><a href="http://www.disney.co.jp/" style="display: block; text-decoration: none;">TOPページへ</a></li>
    </ul>
    </div>

    <!-- マップ -->
    <div id="mapid" style="width: 600px; height: 600px; position: relative; margin: 30; margin-right:30;"
     class="leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"></div>

    <script>

      var mymap = L.map('mapid').setView([36.38591, 139.08691], 5);

      L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    		maxZoom: 18,
    		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
    			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
    			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
    		id: 'mapbox.streets'
    	}).addTo(mymap);

      var myIcon = L.icon({
        iconUrl: 'img/icon.png',
        iconSize: [30, 30],
        iconAnchor: [15, 30],
        popupAnchor: [0, -15]
      });

      L.marker([43.068012,141.350197], {icon:myIcon}).addTo(mymap)
       .bindPopup("札幌ステラプレイス店").openPopup();

      L.marker([38.262736,140.869411], {icon:myIcon}).addTo(mymap)
       .bindPopup("仙台東映プラザ店").openPopup();

      L.marker([38.2264676,140.8724867], {icon:myIcon}).addTo(mymap)
       .bindPopup("仙台ザ・モール長町店").openPopup();

      L.marker([37.91586, 139.05371], {icon:myIcon}).addTo(mymap)
       .bindPopup("新潟万代ビルボードプレイス店").openPopup();

      L.marker([36.275689,138.462061], {icon:myIcon}).addTo(mymap)
       .bindPopup("佐久平イオンモール店").openPopup();

      L.marker([35.710314,139.811141], {icon:myIcon}).addTo(mymap)
       .bindPopup("東京スカイツリータウン・ソラマチ店").openPopup();

      L.marker([35.661157,139.700211], {icon:myIcon}).addTo(mymap)
       .bindPopup("渋谷公園通り店").openPopup();

      L.marker([35.687288,139.702519], {icon:myIcon}).addTo(mymap)
       .bindPopup("新宿高島屋店").openPopup();

      L.marker([35.671209,139.704313], {icon:myIcon}).addTo(mymap)
       .bindPopup("原宿アルタ店").openPopup();

      L.marker([35.627779,139.773797], {icon:myIcon}).addTo(mymap)
       .bindPopup("お台場アクアシティ店").openPopup();

      L.marker([35.728865,139.719245], {icon:myIcon}).addTo(mymap)
       .bindPopup("池袋サンシャインシティアルパ店").openPopup();

      L.marker([35.657185,139.338594], {icon:myIcon}).addTo(mymap)
       .bindPopup("八王子東急スクエア店").openPopup();

      L.marker([35.542921,139.447332], {icon:myIcon}).addTo(mymap)
       .bindPopup("町田109店").openPopup();

      L.marker([35.714065,139.36299], {icon:myIcon}).addTo(mymap)
       .bindPopup("昭島モリタウン店").openPopup();

      L.marker([36.080414,140.180728], {icon:myIcon}).addTo(mymap)
       .bindPopup("土浦イオンモール店").openPopup();

      L.marker([36.574072,139.900366], {icon:myIcon}).addTo(mymap)
       .bindPopup("宇都宮福田屋ショッピングプラザ店").openPopup();

      L.marker([35.6340364,139.8870036], {icon:myIcon}).addTo(mymap)
       .bindPopup("東京ディズニーリゾート店").openPopup();

      L.marker([35.68614,139.991025], {icon:myIcon}).addTo(mymap)
       .bindPopup("船橋ららぽーとTOKYO-BAY店").openPopup();

      L.marker([35.862391,139.970791], {icon:myIcon}).addTo(mymap)
       .bindPopup("柏高島屋ステーションモール店").openPopup();

      L.marker([35.807373,139.71388], {icon:myIcon}).addTo(mymap)
       .bindPopup("川口アリオ店").openPopup();

      L.marker([35.905986,139.622078], {icon:myIcon}).addTo(mymap)
       .bindPopup("大宮アルシェ店").openPopup();

      L.marker([36.142391,139.542602], {icon:myIcon}).addTo(mymap)
       .bindPopup("羽生イオンモール店").openPopup();

      L.marker([35.880238,139.828156], {icon:myIcon}).addTo(mymap)
       .bindPopup("越谷イオンテイクタウン店").openPopup();

      L.marker([35.51735,139.566309], {icon:myIcon}).addTo(mymap)
       .bindPopup("ららぽーと横浜店").openPopup();

      L.marker([35.465177,139.624469], {icon:myIcon}).addTo(mymap)
       .bindPopup("横浜そごう店").openPopup();

      L.marker([35.45688,139.634018], {icon:myIcon}).addTo(mymap)
       .bindPopup("横浜 [アット！] 店").openPopup();

      L.marker([35.339837,139.487223], {icon:myIcon}).addTo(mymap)
       .bindPopup("藤沢さいか屋店").openPopup();

      L.marker([35.107413,138.857822], {icon:myIcon}).addTo(mymap)
       .bindPopup("沼津イシバシプラザ店").openPopup();

      L.marker([34.703996,137.733659], {icon:myIcon}).addTo(mymap)
       .bindPopup("浜松遠鉄店").openPopup();

      L.marker([35.17187,136.883175], {icon:myIcon}).addTo(mymap)
       .bindPopup("名古屋ゲートタワーモール店").openPopup();

      L.marker([35.16552,136.907665], {icon:myIcon}).addTo(mymap)
       .bindPopup("名古屋松坂店").openPopup();

      L.marker([35.053324,136.947638], {icon:myIcon}).addTo(mymap)
       .bindPopup("大高イオンモール店").openPopup();

      L.marker([34.937602,137.164904], {icon:myIcon}).addTo(mymap)
       .bindPopup("岡崎イオンモール店").openPopup();

      L.marker([35.44843,136.744585], {icon:myIcon}).addTo(mymap)
       .bindPopup("岐阜マーサ店").openPopup();

      L.marker([34.872315,136.531415], {icon:myIcon}).addTo(mymap)
       .bindPopup("鈴鹿イオンモール店").openPopup();

      L.marker([35.004027,135.769637], {icon:myIcon}).addTo(mymap)
       .bindPopup("京都四条河原町店").openPopup();

      L.marker([34.70397,135.500197], {icon:myIcon}).addTo(mymap)
       .bindPopup("梅田HEP FIVE店").openPopup();

      L.marker([34.671732,135.50156], {icon:myIcon}).addTo(mymap)
       .bindPopup("心斎橋店").openPopup();

      L.marker([34.702491,135.494892], {icon:myIcon}).addTo(mymap)
       .bindPopup("ルクア大阪店").openPopup();

      L.marker([34.645096,135.51153], {icon:myIcon}).addTo(mymap)
       .bindPopup("あべのキューズモール店").openPopup();

      L.marker([34.691112,135.193106], {icon:myIcon}).addTo(mymap)
       .bindPopup("三宮クレフィ店").openPopup();

      L.marker([34.781799,135.423735], {icon:myIcon}).addTo(mymap)
       .bindPopup("伊丹イオンモール店").openPopup();

      L.marker([34.744223,135.358972], {icon:myIcon}).addTo(mymap)
       .bindPopup("西宮ガーデンズ店").openPopup();

      L.marker([34.505967,135.763351], {icon:myIcon}).addTo(mymap)
       .bindPopup("橿原イオンモール店").openPopup();

      L.marker([34.997779,135.912548], {icon:myIcon}).addTo(mymap)
       .bindPopup("草津イオンモール店").openPopup();

      L.marker([34.394713,132.499586], {icon:myIcon}).addTo(mymap)
       .bindPopup("広島府中イオンモール店").openPopup();

      L.marker([33.590277,130.419915], {icon:myIcon}).addTo(mymap)
       .bindPopup("アミュプラザ博多店").openPopup();

      L.marker([33.589093,130.410837], {icon:myIcon}).addTo(mymap)
       .bindPopup("博多キャナルシティ店").openPopup();

      L.marker([33.591076,130.398506], {icon:myIcon}).addTo(mymap)
       .bindPopup("福岡パルコ店").openPopup();

    </script>

    <!-- フッター -->
    <?php include ('./conf/footer.html'); ?>

  </div>

  </body>

</html>
