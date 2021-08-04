<?php get_header(); ?>
    
    <main class="page-wrapper">
        <section class="section section--mainview">
            <video class="video" controls>
				<source src="<?php echo get_template_directory_uri(); ?>/assets/img/movie.mp4" type="video/mp4">
			</video>

            <div class="contact-day">
                <p class="contact-day__left-ttl">受付・診察時間<span></span></p>
                <p class="contact-day__ttl">
                    ココクリニックの診療時間
                </p>
                <div class="contact-day__tbl">
                    <div class="time-table">
                        <div class="table-row">
                            <p class="left">診療時間</p>
                            <p class="right">
                                <span class="span">月</span>
                                <span class="span">火</span>
                                <span class="span">水</span>
                                <span class="span">木</span>
                                <span class="span">金</span>
                                <span class="span">土</span>
                                <span class="span">日/祝</span>
                            </p>
                        </div>
                        <div class="table-row">
                            <p class="left">10：00〜19：00</p>
                            <p class="right">
                                <span class="span">●</span>
                                <span class="span">●</span>
                                <span class="span">●</span>
                                <span class="span">━</span>
                                <span class="span">●</span>
                                <span class="span">●</span>
                                <span class="span">※</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="contact-day__contact">
                    <a href="tel:0362751866" class="link link--phone"><span>03-6275-1866</span></a>
                    <a href="#contact-form" class="link link--email"><span>メールフォーム</span></a>
                    <a href="https://line.me/R/ti/p/%40586yzheo" class="link link--line"><span>LINE</span></a>
                </div>
            </div>
        </section>

        <section class="section section--menus">
            <div class="section__content">
                <ul class="top-menu">
                    <li class="item">
                        <a class="menu" href="#reasons">選ばれる理由</a>
                    </li>

					<li class="item">
						<a class="menu">施術者紹介</a>
						<ul class="sub">
							<li class="subitem">
								<a class="inner-link" href="#staff1">スタッフ1</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#staff2">スタッフ2</a>
							</li>
						</ul>
					</li>

					<li class="item">
						<a class="menu">料金表</a>
						<ul class="sub">
							<li class="subitem">
								<a class="inner-link" href="#eyebrow">アイブロウ</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#eyeline">アイライン</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#setplan">アイブロウ・アイラインセット</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#lip">リップ</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#other">その他部位</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#pairplan">ペアプラン</a>
							</li>
						</ul>
					</li>

					<li class="item">
						<a class="menu" href="<?php echo get_home_url(); ?>/column">アートメイク症例紹介</a>
					</li>

					<li class="item">
						<a class="menu" href="<?php echo get_home_url(); ?>#access">アクセス</a>
					</li>

					<li class="item">
						<a class="menu">ご予約・お問い合わせ</a>
						<ul class="sub">
							<li class="subitem">
								<a class="inner-link" href="#line">LINE</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#contact-form">HPからお問い合わせ</a>
							</li>
						</ul>
					</li>

					<li class="item">
						<a class="menu">NEWS</a>
						<ul class="sub">
							<li class="subitem">
								<a class="inner-link" href="#news">新着情報</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#blog">ブログ</a>
							</li>
						</ul>
					</li>
                </ul>
                <div class="sns-links">
                    <a class="menu" href="https://www.instagram.com/cococlinic_official/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png"></a>
                    <a class="menu" href="https://line.me/R/ti/p/%40586yzheo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lineapp.png"></a>
                </div>
            </div>
        </section>

        <section class="section section--page-title">
            <div class="section__content">
                <h2 class="description">
                    第1印象は目元で決まると言われ、<br class="sp">
					中でも眉が8割を占めている。<br>
					眉の形が少し変わるだけで、<br class="sp">
					なりたい印象にも目ヂカラUPにも、<br class="sp">
					小顔にも・・・
                </h2>
                <h1 class="title">
                    あなたの知らない0.01mmの世界
                </h1>
            </div>
        </section>

        <section class="section section--troubles">
            <div class="section__content">
                <h1>こんなお悩みありませんか？</h1>
                <ul class="troubles-list">
                    <li class="item">
                        <div class="wrapper">
                            <p class="text">メイクで眉が上手く描けない</p>
                        </div>
                    </li>
                    <!-- li class="item">
                        <div class="wrapper">
                            <p class="text">すっぴんに自信がない</p>
                        </div>
                    </li>
                    <li class="item">
                        <div class="wrapper">
                            <p class="text">入れ墨に抵抗がある</p>
                        </div>
                    </li -->
                    <li class="item">
                        <div class="wrapper">
                            <p class="text">眉が薄いが男性なのでメイクに抵抗がある</p>
                        </div>
                    </li>
                    <!--li class="item">
                        <div class="wrapper">
                            <p class="text">本当に安全なのか、衛生的に不安</p>
                        </div>
                    </li -->
                    <li class="item">
                        <div class="wrapper">
                            <p class="text">自分に似合う眉がわからない</p>
                        </div>
                    </li>
                    <li class="item">
                        <div class="wrapper">
                            <p class="text">昔抜きすぎて生えてこない</p>
                        </div>
                    </li>
                    <li class="item">
                        <div class="wrapper">
                            <p class="text">汗などでメイクがすぐ落ちる</p>
                        </div>
                    </li>
                    <li class="item">
                        <div class="wrapper">
                            <p class="text">希望のデザインに仕上がるか心配</p>
                        </div>
                    </li>
                    <!-- li class="item">
                        <div class="wrapper">
                            <p class="text">痛みが心配</p>
                        </div>
                    </li -->
                </ul>
            </div>
        </section>

        <section class="section section--introduction">
            <div class="section__content">
                <h1 class="description">
                    <span class="line-1">ココクリニック独自のアートメイク技法</span>
                    <span class="line-2">
                        「最新」と「伝統」から生まれた<br>
                        全く新しいアートメイク技法
                    </span>
                    <!-- <span class="line-3">ファーエンブロウ式</span> -->
                </h1>
                <figure class="figure">
                    <img class="img pc tb" src="<?php echo get_template_directory_uri(); ?>/assets/img/tech_2.svg">
					<img class="img sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/tech_2-sp.svg">
                </figure>
            </div>
        </section>

        <section class="section section--features">
            <div class="section__content">
                <h1>ファーエンブロウ式の特長</h1>
                <div class="wrapper">
                    <figure class="figure sp">
                        <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/tech3.jpg">
                    </figure>
                    <p class="text">
                        4Dアートメイクのような、<br class="sp"><span>すっぴんでも違和感のない自然な仕上がり</span><br>
                        中国式刺繍メイクの技法を活かした<br class="sp"><span>「持ち」の良さ</span><br>
                        習得が難しい技法の為、<br class="sp"><span>技法を開発した施術者自身が施術を</span>行います
                    </p>
                    <figure class="figure pc tb">
                        <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/tech3.jpg">
                    </figure>
                </div>
            </div>
        </section>

        <section class="section section--features2">
            <div class="section__content">
                <h1>人相学について</h1>
                <div class="wrapper">
                    <figure class="figure">
                        <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/tech4.jpg">
                    </figure>
                    <p class="text">
                        顔には性格や運勢を表す部分があり、<br class="sp">運に恵まれる顔には特徴があります。<br>
                        <span>眉の形を変えることによって、<br class="sp">運勢を導くこと</span>も可能なのです。

                        <a class="about-physiognomy" href="<?php echo get_home_url(); ?>/humanities/">人相学について</a>
                    </p>
                </div>
            </div>
        </section>

        <section class="section section--gallery">
            <div class="section__title">
                <h1>アートメイク症例写真</h1>
                <a href="<?php echo get_home_url(); ?>/column">一覧へ</a>
            </div>
            <div class="wrapper">
                <div class="section__content">
                    <div class="article-list">
                    <?php
                        $args = array(
                        'posts_per_page' => 8,
                        'post_type'      => 'column',
                        );
                        $the_query = new WP_Query($args);
                        $output = '';
                        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

                        $post_id = $the_query->post->ID;
                        $thumb_url = get_the_post_thumbnail_url($post->ID, 'medium');
                        if(!$thumb_url){
                            $thumb_url = get_template_directory_uri().'/assets/img/no_images.jpg';
                        }

                        // $cat_arr = get_the_category($post_id);
                        $post_content = apply_filters('the_content', $the_query->post->post_content);

                        $output .= '
                            <div class="item">
                                <article class="article">
                                    <a href="' . get_permalink($post_id) . '" class="article__link"></a>
                                    <figure class="figure">
                                        <img class="img" src="' . esc_url($thumb_url) . '">
                                    </figure>
                                    <p class="blog-content">
                                    ' . get_the_title($post_id) . '
                                    </p>
                                </article>
                            </div>
                        ';

                        endwhile;
                        else:
                            $output = '<p>まだ投稿がありません</p>';
                        endif;

                        echo $output;

                        wp_reset_postdata();
                    ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--points">
            <div class="anchor" id="reasons"></div>
            <h1 class="section__title">
                ココクリニックの<br class="sp">アートメイクが選ばれる
                <span>3つの理由</span>
            </h1>
            <div class="section__content">
                <ul class="points">
                    <li class="item">
                        <div class="point">
                            <h2>ヒアリングとカウンセリング</h2>
                            <p class="text">ココクリニックでは、カウンセリングを最も重要視しており、施術2時間のうちの約半分の時間をかけております。骨格や筋肉の動き、表情の癖を黄金比率で判断。そのうえで、お客様のお悩みや理想の姿、好みのメイク等を伺い、丁寧かつ慎重な施術を提案させていただきます。</p>
                        </div>
                    </li>
                    <li class="item">
                        <div class="point">
                            <h2>安藤敏江のオリジナル技法と<br class="sp">人相学を活かしたデザイン</h2>
                            <p class="text">看護師の安藤敏江はアートメイク歴20年。現在までに3万人を超える実績を持ち、多くの著名人の施術も手掛けてきました。様々な経験から培われたデザイン力をもとに、安藤が生み出したのが「ファーエンブロウ式」です。より自然な毛並み、さらに美しい持続性へ。4Dを超えた当クリニック独自の技法となります。</p>
                        </div>
                    </li>
                    <li class="item">
                        <div class="point">
                            <h2>医療クリニックによる安全性</h2>
                            <p class="text">アートメイクは針を使って皮膚に色素を入れる医療行為です。そのため、当院では必ず医療行為従事者が担当しますのでご安心ください。また、施術に使用する針は、開封前に必ずお客様に目視で確認していただきます。さらに、染料はアメリカFDA(米国食品医薬品局)の認可を受けたものを使用しています。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="section section--flow">
            <h1 class="section__title">施術の流れ</h1>
            <div class="section__content">
                <ul class="steps">
                    <li class="item">
                        <div class="wrapper">
                            <figure class="figure">
                                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/flow_1.png">
                            </figure>
                            <div class="step">
                                <h2 class="title">ご予約・お問い合わせ</h2>
                                <p class="text">
                                    メールフォームまたはライン、電話で承っております。<br class="pc tb">
                                    ズームでのオンライン無料カウンセリングも実施中です。
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="wrapper">
                            <figure class="figure">
                                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/flow_2.jpg">
                            </figure>
                            <div class="step">
                                <h2 class="title">カウンセリング</h2>
                                <p class="text">
                                    来院いただき、問診票の提出と医師の診察があります。<br class="pc tb">
                                    その後担当者がカウンセリングを丁寧に行います。<br class="pc tb">
                                    表情の癖を読み取り、希望の眉をヒアリングします。
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="wrapper">
                            <figure class="figure">
                                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/flow_3.jpg">
                            </figure>
                            <div class="step">
                                <h2 class="title">施術</h2>
                                <p class="text">
                                    黄金比などを測りつつ、慎重にデザインやお客様に合う色を決めます。<br class="pc tb">
                                    最適な眉のデザインで施術し、クールダウンをすれば本日は終了です。
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="link-panel">
                    <a href="#contact" class="link">お問い合わせはこちら</a>
                </div>
            </div>
        </section>

        <section class="section section--staffs">
            <div class="anchor" id="staff1"></div>
            <h1 class="section__title">施術者紹介</h1>
            <div class="section__content">
                <div class="staff staff--1">
                    <div class="row">
                        <figure class="figure">
                            <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/staff_1.jpg">
                            <figcaption class="caption">
                                <span class="name-en">Toshie Ando</span>
                                <span class="name">安藤敏江</span>
                            </figcaption>
                        </figure>

                        <p class="about-staff">
                            モデルのお仕事をしていた頃、眉のデザイン1つで顔の印象が見違えることへの驚きは今でも忘れられません。その時のヘアメイクさんの技術に感動して以来、様々な美容知識を積み重ねてきました。そして、アートメイクの仕事にたどり着いてから、20年が経ちます。<br><br>
                            今の私があるのは、人を輝かせるプロの美容家や素敵な先生方、そして、何より私の元へ足を運んでくださるお客様との出会いがあったからこそです。<br><br>
                            現在は看護師の資格を取得し、2019年に開院した新たなステージであるココクリニック麻布十番にてお客様に施術をご提供させていただいております。これからも沢山のお客様に愛されるよう、喜んでいただけるように邁進してまいります。
                            <a class="about-physiognomy" href="<?php echo get_home_url(); ?>/humanities/">人相学について</a>
                        </p>
                    </div>
                    <div class="career-introduction">
                        <p class="career-title">経歴紹介</p>
                        <p class="career-content">
                            10代よりTV、CM、レポーター、雑誌のモデルなど数々の仕事を経験。その後、美に関わる仕事に興味を持ち始め、ネイリストのライセンスを取得したことをきっかけに、まつ毛パーマ、ニューヨーク式アートメイクの技術を会得。1998年には、サロン「studio coco」を設立し、インストラクターとしても指導を行う。<br><br>
                            2004年には、当時の最新技術であった中国式刺繍メイクの技術を取り入れ、日本では数少ない高度な刺繍メイクの技術者と認定される。同時に、より高度な技術の習得を目指し、アメリカや韓国で行われているアートメイクの手法を現地で学ぶ。<br><br>
                            法改正により、アートメイクが医療行為となったことをうけて、看護師免許を取得。そして、20年の経験、3万人の実績を経て、従来の4Dアートメイク（マイクロブレーディング法）、中国式刺繍メイクを混ぜたアートメイク「ファーエンブロウ式」を独自で生み出すことに成功する。<br><br>
                            また、人の眉をデザインするにあたって、「良い人相、運気の上がる顔にして差し上げたい」と、人相学で有名な藤木相元先生に弟子入り。以来、「私が携わる全ての方が幸せになれば」という考えを実践し続ける。現在、骨格、メイク、人相学などの観点から、一人一人に似合う眉をつくるスペシャリストとして、メディアに取り上げられ、数多くの著名人からも絶大な人気を得ている。
                        </p>
                        <a class="career-more">MORE</a>
                    </div>
                </div>
                <!-- div class="staff staff--2">
                    <div class="anchor" id="staff2"></div>
                    <div class="row">
                        <figure class="figure">
                            <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/staff_2.png">
                            <figcaption class="caption">
                                <span class="name-en">Rumi Tomizawa</span>
                                <span class="name">冨澤瑠美</span>
                            </figcaption>
                        </figure>

                        <p class="about-staff">
                            施術箇所：眉（ファーエンブロウ、マイクロブレーディング）、アイライン、ほくろ<br><br>
                            アートメイクを習得したいと色々なスクールを探す中、安藤先生にお会いする事ができ、先生の技術の高さ、人柄に惹かれ門戸を叩きました。幼少期より、絵画、油絵を十数年間習っていたお蔭で手先が器用でデザイン力にも自信があり、デッサンのテストではパーフェクトがとれたので先生の目に止まり、見事弟子入り許可を獲得。厳しい訓練のお蔭で、流行の外国人風から自然な感じの愛され眉まで、お客様のご要望に合わせたデザイン、お客様に似合うデザインを提案することが得意となりました。カウンセリングには特に力を入れており、お互いが納得できるまで何度も確認を行いながら形を決めています。もちろん施術も一切妥協しません。<br><br>
                            人のためになりたいと思い看護師という職業を選びましたが、今は施術後お客様が喜んで下さる姿に大変やりがいを感じております。1人でも多くのお客様を笑顔にできるよう、思いを込めて施術させていただきたいと思います。
                        </p>
                    </div>
                </div -->
            </div>
        </section>

        <section class="section section--price">
            <div class="anchor" id="price-table"></div>
            <h1 class="section__title">料金表</h1>
            <div class="section__content">
                <p class="description">
                    初診料について：3,000円（税込 3,300円）、メニュー料金とは別に初診料としていただいております。
                </p>
                <ul class="links">
                    <li class="item">
                        <a class="link" href="#eyebrow">アイブロウ</a>
                    </li>
                    <li class="item">
                        <a class="link" href="#eyeline">アイライン</a>
                    </li>
                    <li class="item">
                        <a class="link" href="#setplan">セットプラン</a>
                    </li>
                    <li class="item">
                        <a class="link" href="#lip">リップ</a>
                    </li>
                    <li class="item">
                        <a class="link" href="#other">その他</a>
                    </li>
                    <li class="item">
                        <a class="link" href="#pairplan">ペアプラン</a>
                    </li>
                </ul>
                <div class="price-sheet price-sheet--eyebrow">
                    <div class="anchor" id="eyebrow"></div>
                    <h2>
                        <span>アイブロウ</span>EYEBROW
                    </h2>
                    <div class="tables">
                        <div class="column">
                            <div class="table">
                                <div class="header">初回</div>
                                <div class="row">
                                    <div class="item-name">
                                        デジタルマシン
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            80,000円/2回セット<br>(税込 88,000円)
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-name">
                                        マイクロブレーディング式
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            120,000円/2回セット<br>(税込 132,000円)
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-name">
                                        マイクロブレーディング<br>プラスパウダー(4D)
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            150,000円/2回セット<br>(税込 165,000円)
                                        </span>
                                    </div>
                                </div>
                                <div class="row row--star">
                                    <div class="item-name star">
                                        当院人気No.1！<br>ファーエンブロウ式
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            150,000円/2回セット<br>(税込 165,000円)
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-name">
                                        ファーエンブロウ<br>プラスパウダー
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            180,000円/2回セット<br>(税込 198,000円)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="table">
                                <div class="header">リタッチ</div>
                                <div class="row">
                                    <div class="item-name">
                                        3～6ヶ月
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            30,000円/1回<br>(税込 33,000円)
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-name">
                                        1年未満
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            50,000円/1回<br>(税込 55,000円)
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-name">
                                        2年未満
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            60,000円/1回<br>(税込 66,000円)
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-name">
                                        3年未満
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            70,000円/1回<br>(税込 77,000円)
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="table">
                                <div class="header">他院お直し</div>
                                <div class="row">
                                    <div class="item-name">
                                        他院お直し
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            90,000円/1回<br>(税込 99,000円)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ref-info">
                        ※全て自由診療価格<br>
                        ※リタッチ料金は施術種類問わず、均一料金となります。<br>
                        ※形が残っており、デザインを変えずに施術する場合は、他院お直しの料金です。<br>
                        形が残っていない、デザインを変更する場合は、新規価格でのご案内となります。
                    </div>
                    <div class="merit-and-demerit">
                        <div class="foldable">
                            <h3 class="foldable__title">メリット</h3>
                            <p class="foldable__text">
                                ・メイクの時間が減り、時短になります。<br>
                                ・汗をかいても水にぬらしても落ちる心配はございません。<br>
                                ・自信が持てるようになります。
                            </p>
                        </div>
                        <div class="foldable">
                            <h3 class="foldable__title">デメリット</h3>
                            <p class="foldable__text">
                                ・施術のときに痛みを感じる場合があります。<br>
                                ・施術後24時間は雑菌が入る恐れがあるため気を付けて頂く必要があります。<br>
                                ・簡単に消すことができません。<br>
                                ・アートメイクを消すには除去施術を受ける必要がある場合があります。<br>
                                ・施術後、色が濃い期間が1週間程度あります。<br>
                                ・通常2〜3年持続するが、1〜2年を目安にリタッチをするなどメンテナンスが必要です。
                            </p>
                        </div>
                    </div>
                    <div class="attentions">
                        <div class="foldable">
                            <h3 class="foldable__title">注意事項</h3>
                            <p class="foldable__text">
                                ・麻酔や針によってアレルギー反応が出ることがあります。<br>
                                ・色素が入りずらい体質の場合がございます。<br>
                                ・健康状態によって受けられない場合がございます。<br><br>
                                ※＜使用する医療機器・医薬品について＞<br>
                                (1)日本国内においては、医薬品医療機器等法上の承認は取得していません。<br>
                                (2)医師が、個人輸入により入手したものです。<br>※ご参考：個人輸入に関する厚生労働省の案内<br>https://www.yakubutsu.mhlw.go.jp/individualimport/healthhazard/<br>
                                (3)同一の成分・性能を有する、他の国内承認医薬品等はありません。<br>
                                (4)重大な副作用などが明らかになっていない可能性があります。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="price-sheet price-sheet--eyeline">
                    <div class="anchor" id="eyeline"></div>
                    <h2>
                        <span>アイライン</span>EYE LINE
                    </h2>
                    <div class="tables">
                        <div class="column">
                            <div class="table">
                                <div class="header">初回</div>
                                <div class="row">
                                    <div class="item-name">
                                        上・下
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            90,000円/2回セット<br>(税込 99,000円)
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-name">
                                        上
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            70,000円/2回セット<br>(税込 77,000円)
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-name">
                                        下
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            50,000円/2回セット<br>(税込 55,000円)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="table">
                                <div class="header">リタッチ</div>
                                <div class="row">
                                    <div class="item-name">
                                        上
                                    </div>
                                    <div class="item-value">
                                        <span>【1年未満】20,000円/1回<br>(税込 22,000円)</span>
                                        <span>【2年未満】30,000円/1回<br>(税込 33,000円)</span>
                                        <span>【3年未満】40,000円/1回<br>(税込 44,000円)</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-name">
                                        下
                                    </div>
                                    <div class="item-value">
                                        <span>【1年未満】10,000円/1回<br>(税込 11,000円)</span>
                                        <span>【2年未満】20,000円/1回<br>(税込 22,000円)</span>
                                        <span>【3年未満】30,000円/1回<br>(税込 33,000円)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="table">
                                <div class="header">他院お直し</div>
                                <div class="row">
                                    <div class="item-name">
                                        上
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            50,000円/1回<br>(税込 55,000円)
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-name">
                                        下
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            40,000円/1回<br>(税込 44,000円)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ref-info">
                        ※全て自由診療価格<br>
                        【初回】<br>
                        ※まつ毛ラインのみになります。<br>
                        ※太め、目頭切開ライン、目尻ご希望の場合は上記価格に、<br>
                        　各＋10,000円(税込 11,000円)になります。<br><br>
                        【他院お直し】<br>
                        ※太め、目頭切開ライン、目尻ご希望の場合は上記価格に、<br>
                        　各＋10,000円(税込 11,000円)になります。<br>
                        ※形が残っており、デザインを変えずに施術する場合は、他院お直しの料金です。<br>
                        　形が残っていない、デザインを変更する場合は、新規価格でのご案内となります。
                    </div>
                    <div class="merit-and-demerit">
                        <div class="foldable">
                            <h3 class="foldable__title">メリット</h3>
                            <p class="foldable__text">
                                ・メイクの時間が減り、時短になります。<br>
                                ・汗をかいても水にぬらしても落ちる心配はございません。<br>
                                ・自信が持てるようになります。
                            </p>
                        </div>
                        <div class="foldable">
                            <h3 class="foldable__title">デメリット</h3>
                            <p class="foldable__text">
                                ・施術のときに痛みを感じる場合があります。<br>
                                ・施術後24時間は雑菌が入る恐れがあるため気を付けて頂く必要があります。<br>
                                ・簡単に消すことができません。<br>
                                ・アートメイクを消すには除去施術を受ける必要がある場合があります。<br>
                                ・施術後、色が濃い期間が1週間程度あります。<br>
                                ・通常2〜3年持続するが、1〜2年を目安にリタッチをするなどメンテナンスが必要です。
                            </p>
                        </div>
                    </div>
                    <div class="attentions">
                        <div class="foldable">
                            <h3 class="foldable__title">注意事項</h3>
                            <p class="foldable__text">
                                ・麻酔や針によってアレルギー反応が出ることがあります。<br>
                                ・色素が入りずらい体質の場合がございます。<br>
                                ・健康状態によって受けられない場合がございます。<br><br>
                                ※＜使用する医療機器・医薬品について＞<br>
                                (1)日本国内においては、医薬品医療機器等法上の承認は取得していません。<br>
                                (2)医師が、個人輸入により入手したものです。<br>※ご参考：個人輸入に関する厚生労働省の案内<br>https://www.yakubutsu.mhlw.go.jp/individualimport/healthhazard/<br>
                                (3)同一の成分・性能を有する、他の国内承認医薬品等はありません。<br>
                                (4)重大な副作用などが明らかになっていない可能性があります。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="price-sheet price-sheet--eyebrow-eyeline">
                    <div class="anchor" id="setplan"></div>
                    <h2>
                        <span>アイブロウ・アイライン<br class="sp">セット</span>EYEBROW / EYE LINE
                    </h2>
                    <div class="tables">
                        <div class="column">
                            <div class="table">
                                <div class="row">
                                    <div class="item-name">
                                        ファーエンブロウ式+アイライン（上下）
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            190,000円/2回セット<br>(税込 209,000円)
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-name">
                                        マイクロブレーディング式+アイライン（上下）
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            170,000円/2回セット<br>(税込 187,000円)
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-name">
                                        デジタルマシン+アイライン（上下）
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            130,000円/2回セット<br>(税込 143,000円)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ref-info">
                        ※全て自由診療価格<br>
                        ※アイラインはまつ毛ラインのみになります。太め、目頭切開ライン、目尻ご希望の場合は<br>
                        上記価格に各+10,000円(税込 11,000円)になります。
                    </div>
                    <div class="merit-and-demerit">
                        <div class="foldable">
                            <h3 class="foldable__title">メリット</h3>
                            <p class="foldable__text">
                                ・メイクの時間が減り、時短になります。<br>
                                ・汗をかいても水にぬらしても落ちる心配はございません。<br>
                                ・自信が持てるようになります。
                            </p>
                        </div>
                        <div class="foldable">
                            <h3 class="foldable__title">デメリット</h3>
                            <p class="foldable__text">
                                ・施術のときに痛みを感じる場合があります。<br>
                                ・施術後24時間は雑菌が入る恐れがあるため気を付けて頂く必要があります。<br>
                                ・簡単に消すことができません。<br>
                                ・アートメイクを消すには除去施術を受ける必要がある場合があります。<br>
                                ・施術後、色が濃い期間が1週間程度あります。<br>
                                ・通常2〜3年持続するが、1〜2年を目安にリタッチをするなどメンテナンスが必要です。<br>
                                ・アイラインは施術の翌日泣いたあとのように腫れることがあります。
                            </p>
                        </div>
                    </div>
                    <div class="attentions">
                        <div class="foldable">
                            <h3 class="foldable__title">注意事項</h3>
                            <p class="foldable__text">
                                ・麻酔や針によってアレルギー反応が出ることがあります。<br>
                                ・色素が入りずらい体質の場合がございます。<br>
                                ・健康状態によって受けられない場合がございます。<br><br>
                                ※＜使用する医療機器・医薬品について＞<br>
                                (1)日本国内においては、医薬品医療機器等法上の承認は取得していません。<br>
                                (2)医師が、個人輸入により入手したものです。<br>※ご参考：個人輸入に関する厚生労働省の案内<br>https://www.yakubutsu.mhlw.go.jp/individualimport/healthhazard/<br>
                                (3)同一の成分・性能を有する、他の国内承認医薬品等はありません。<br>
                                (4)重大な副作用などが明らかになっていない可能性があります。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="price-sheet price-sheet--lip">
                    <div class="anchor" id="lip"></div>
                    <h2>
                        <span>リップ</span>LIP
                    </h2>
                    <div class="tables">
                        <div class="column">
                            <div class="table">
                                <div class="header">リップライン</div>
                                <div class="row">
                                    <div class="item-value">
                                        <span>
                                            100,000円/2回セット<br>(税込 110,000円)
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="table">
                                <div class="header">フルリップ</div>
                                <div class="row">
                                    <div class="item-value">
                                        <span>
                                            140,000円/2回セット<br>(税込 154,000円)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="table">
                                <div class="header">リタッチ</div>
                                <div class="row">
                                    <div class="item-name">
                                        リップライン
                                    </div>
                                    <div class="item-value">
                                        <span>【1年未満】20,000円/1回<br>(税込 22,000円)</span>
                                        <span>【2年未満】30,000円/1回<br>(税込 33,000円)</span>
                                        <span>【3年未満】40,000円/1回<br>(税込 44,000円)</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-name">
                                        フルリップ
                                    </div>
                                    <div class="item-value">
                                        <span>【1年未満】10,000円/1回<br>(税込 11,000円)</span>
                                        <span>【2年未満】20,000円/1回<br>(税込 22,000円)</span>
                                        <span>【3年未満】30,000円/1回<br>(税込 33,000円)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="table">
                                <div class="header">他院お直し</div>
                                <div class="row">
                                    <div class="item-name">
                                        リップライン
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            60,000円/1回<br>(税込 66,000円)
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-name">
                                        フルリップ
                                    </div>
                                    <div class="item-value">
                                        <span>
                                            80,000円/1回<br>(税込 88,000円)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ref-info">
                        ※全て自由診療価格<br>
    					※オーバーリップの場合は上記価格に、<br>
                        プラス上下各10,000円（税込11,000円）かかります。
                    </div>
                    <div class="merit-and-demerit">
                        <div class="foldable">
                            <h3 class="foldable__title">メリット</h3>
                            <p class="foldable__text">
                                ・メイクの時間が減り、時短になります。<br>
                                ・汗をかいても水にぬらしても落ちる心配はございません。<br>
                                ・自信が持てるようになります。
                            </p>
                        </div>
                        <div class="foldable">
                            <h3 class="foldable__title">デメリット</h3>
                            <p class="foldable__text">
                                ・施術のときに痛みを感じる場合があります。<br>
                                ・施術後24時間は雑菌が入る恐れがあるため気を付けて頂く必要があります。<br>
                                ・簡単に消すことができません。<br>
                                ・アートメイクを消すには除去施術を受ける必要がある場合があります。<br>
                                ・施術後、色が濃い期間が1週間程度あります。<br>
                                ・通常2〜3年持続するが、1〜2年を目安にリタッチをするなどメンテナンスが必要です。<br>
                                ・フルリップは施術後、施術翌日と腫れて口が開けにくくなる場合がございます。<br>
                                ・フルリップは、抗生物質を3日間服用する必要がございます。
                            </p>
                        </div>
                    </div>
                    <div class="attentions">
                        <div class="foldable">
                            <h3 class="foldable__title">注意事項</h3>
                            <p class="foldable__text">
                                ・麻酔や針によってアレルギー反応が出ることがあります。<br>
                                ・色素が入りずらい体質の場合がございます。<br>
                                ・健康状態によって受けられない場合がございます。<br><br>
                                ※＜使用する医療機器・医薬品について＞<br>
                                (1)日本国内においては、医薬品医療機器等法上の承認は取得していません。<br>
                                (2)医師が、個人輸入により入手したものです。<br>※ご参考：個人輸入に関する厚生労働省の案内<br>https://www.yakubutsu.mhlw.go.jp/individualimport/healthhazard/<br>
                                (3)同一の成分・性能を有する、他の国内承認医薬品等はありません。<br>
                                (4)重大な副作用などが明らかになっていない可能性があります。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="price-sheet price-sheet--other">
                    <div class="anchor" id="other"></div>
                    <h2>
                        <span>その他部位</span>OTHER
                    </h2>
                    <div class="tables">
                        <div class="column">
                            <div class="table">
                                <div class="header">生え際・頭部</div>
                                <div class="row">
                                    <div class="item-value">
                                        <span>
                                            60,000円/ 2回・1か所<br>(税込 66,000円)
                                        </span>
                                    </div>
                                </div>
                                <p class="comment">※生え際・頭部は施術範囲により<br class="sp">料金、回数が異なります。</p>
                            </div>
                            <div class="table">
                                <div class="header">乳房</div>
                                <div class="row">
                                    <div class="item-value">
                                        <span>
                                            70,000円/ 2回・1か所<br>(税込 77,000円)
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="table">
                                <div class="header">ホクロ</div>
                                <div class="row">
                                    <div class="item-value">
                                        <span>
                                            30,000円/ 2回・1か所<br>(税込 33,000円)
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-value">
                                        <span>
                                            20,000円/ 2回・1か所<br>(税込 22,000円)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ref-info">
                        ※全て自由診療価格
                    </div>
                    <div class="merit-and-demerit">
                        <div class="foldable">
                            <h3 class="foldable__title">メリット</h3>
                            <p class="foldable__text">
                                ・メイクの時間が減り、時短になります。<br>
                                ・汗をかいても水にぬらしても落ちる心配はございません。<br>
                                ・自信が持てるようになります。
                            </p>
                        </div>
                        <div class="foldable">
                            <h3 class="foldable__title">デメリット</h3>
                            <p class="foldable__text">
                                ・施術のときに痛みを感じる場合があります。<br>
                                ・施術後24時間は雑菌が入る恐れがあるため気を付けて頂く必要があります。<br>
                                ・簡単に消すことができません。<br>
                                ・アートメイクを消すには除去施術を受ける必要がある場合があります。<br>
                                ・施術後、色が濃い期間が1週間程度あります。<br>
                                ・通常2〜3年持続するが、1〜2年を目安にリタッチをするなどメンテナンスが必要です。
                            </p>
                        </div>
                    </div>
                    <div class="attentions">
                        <div class="foldable">
                            <h3 class="foldable__title">注意事項</h3>
                            <p class="foldable__text">
                                ・麻酔や針によってアレルギー反応が出ることがあります。<br>
                                ・色素が入りずらい体質の場合がございます。<br>
                                ・健康状態によって受けられない場合がございます。<br><br>
                                ※＜使用する医療機器・医薬品について＞<br>
                                (1)日本国内においては、医薬品医療機器等法上の承認は取得していません。<br>
                                (2)医師が、個人輸入により入手したものです。<br>※ご参考：個人輸入に関する厚生労働省の案内<br>https://www.yakubutsu.mhlw.go.jp/individualimport/healthhazard/<br>
                                (3)同一の成分・性能を有する、他の国内承認医薬品等はありません。<br>
                                (4)重大な副作用などが明らかになっていない可能性があります。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="price-sheet price-sheet--pairplan">
                    <div class="anchor" id="pairplan"></div>
                    <h2>
                        <span>ペアプラン</span>PAIR PLAN
                    </h2>
                    <div class="tables">
                        <div class="column">
                            <div class="table">
                                <div class="header">FE式眉+アイライン</div>
                                <div class="row">
                                    <div class="item-value">
                                        <span>
                                            180,500円<br>(税込 198,550円)
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="table">
                                <div class="header">FE式眉</div>
                                <div class="row">
                                    <div class="item-value">
                                        <span>
                                            70,000円/ 2回・1か所<br>(税込 77,000円)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ref-info">
                        ※全て自由診療価格
                    </div>
                    <div class="merit-and-demerit">
                        <div class="foldable">
                            <h3 class="foldable__title">メリット</h3>
                            <p class="foldable__text">
                                ・メイクの時間が減り、時短になります。<br>
    						    ・汗をかいても水にぬらしても落ちる心配はございません。<br>
    						    ・自信が持てるようになります。
                            </p>
                        </div>
                        <div class="foldable">
                            <h3 class="foldable__title">デメリット</h3>
                            <p class="foldable__text">
                                ・施術のときに痛みを感じる場合があります。<br>
                                ・施術後24時間は雑菌が入る恐れがあるため気を付けて頂く必要があります。<br>
                                ・簡単に消すことができません。<br>
                                ・アートメイクを消すには除去施術を受ける必要がある場合があります。<br>
                                ・施術後、色が濃い期間が1週間程度あります。<br>
                                ・通常2〜3年持続するが、1〜2年を目安にリタッチをするなどメンテナンスが必要です。<br>
                                ・アイラインは施術の翌日泣いたあとのように腫れることがあります。<br>
                                ・フルリップは施術後、施術翌日と腫れて口が開けにくくなる場合がございます。<br>
                                ・フルリップは、抗生物質を3日間服用する必要がございます。
                            </p>
                        </div>
                    </div>
                    <div class="attentions">
                        <div class="foldable">
                            <h3 class="foldable__title">注意事項</h3>
                            <p class="foldable__text">
                                ・麻酔や針によってアレルギー反応が出ることがあります。<br>
                                ・色素が入りずらい体質の場合がございます。<br>
                                ・健康状態によって受けられない場合がございます。<br><br>
                                ※＜使用する医療機器・医薬品について＞<br>
                                (1)日本国内においては、医薬品医療機器等法上の承認は取得していません。<br>
                                (2)医師が、個人輸入により入手したものです。<br>※ご参考：個人輸入に関する厚生労働省の案内<br>https://www.yakubutsu.mhlw.go.jp/individualimport/healthhazard/<br>
                                (3)同一の成分・性能を有する、他の国内承認医薬品等はありません。<br>
                                (4)重大な副作用などが明らかになっていない可能性があります。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--faq">
            <div class="section__content">
                <h1>よくある質問</h1>
                <div class="foldable">
                    <div class="foldable__fixed">
                        痛みはありますか？
                    </div>
                    <p class="foldable__hidden">
                        痛みの感じ方には個人差があり、完全無痛というわけではありません。多くの方が毛を抜く程度の痛みとおっしゃられます。もし施術時に、痛みがあるとお伝えいただければ、追加で麻酔を塗布いたしますのでご安心ください。
                    </p>
                </div>
                <div class="foldable">
                    <div class="foldable__fixed">
                        施術後の腫れはありますか？
                    </div>
                    <p class="foldable__hidden">
                        一般的に大きく眉が腫れることはなく、多少赤みが出る程度です。アイラインに関しては翌日泣いた後のような腫れが出ることもありますが、数日で収まることがほとんどです。
                    </p>
                </div>
                <div class="foldable">
                    <div class="foldable__fixed">
                        持続期間はどのくらいありますか？
                    </div>
                    <p class="foldable__hidden">
                        体質や生活習慣により個人差はございますが、約3～5年の持続性があります。綺麗な眉を保つために1～2年に1回を目安にリタッチをお勧めしております。
                    </p>
                </div>
                <div class="foldable">
                    <div class="foldable__fixed">
                        メイクはいつからできますか？
                    </div>
                    <p class="foldable__hidden">
                        施術箇所以外は、当日からメイクをすることができます。施術箇所に関しても、処方する軟膏を薄く塗った上からであれば、翌日からメイクが可能です。
                    </p>
                </div>
                <div class="foldable">
                    <div class="foldable__fixed">
                        運動はいつからできますか？
                    </div>
                    <p class="foldable__hidden">
                        施術当日の過度な運動はお控えください。翌日からであれば問題ありません。
                    </p>
                </div>
                <div class="foldable">
                    <div class="foldable__fixed">
                        入れ墨（タトゥー）とは何が違うのですか？
                    </div>
                    <p class="foldable__hidden">
                        着色方法は同じですが、入れ墨は皮膚の下の真皮部分に着色します。一方で、アートメイクは表皮部分に着色するのが特徴です。そのため、アートメイクは数年で退色していきます。
                    </p>
                </div>
                <div class="foldable">
                    <div class="foldable__fixed">
                        施術時間はどのくらいかかりますか？
                    </div>
                    <p class="foldable__hidden">
                        当院ではカウンセリングと施術時間を合わせて、約2時間いただいております。施術箇所が複数の場合はお問い合わせください。
                    </p>
                </div>
                <div class="foldable">
                    <div class="foldable__fixed">
                        想像通りのデザインになるのか心配です
                    </div>
                    <p class="foldable__hidden">
                        当院では、20年の経験と3万人の実績を誇る看護師の安藤敏江がデザインを提案させていただいております。また、お客様が納得いただけるまで、時間をかけてカウンセリングを行いますので、ご安心ください。
                    </p>
                </div>
                <div class="foldable">
                    <div class="foldable__fixed">
                        予約なしで受診することはできますか？
                    </div>
                    <p class="foldable__hidden">
                        当院は完全予約制です。申し訳ありませんが、予約なしで受診することはできません。
                    </p>
                </div>
                <div class="foldable">
                    <div class="foldable__fixed">
                        未成年の施術はできますか？
                    </div>
                    <p class="foldable__hidden">
                        18歳から施術が可能です。ただし、20歳以下の方は保護者の同意書が必要になります。
                    </p>
                </div>
                <div class="foldable">
                    <div class="foldable__fixed">
                        アートメイクを受けられないことはありますか？
                    </div>
                    <p class="foldable__hidden">
                        ・妊娠中または妊娠の可能性がある方<br>
                        ※安定期でかかりつけの産婦人科の医師から許可を得た場合は。施術可能の場合もあります。<br><br>
                        ・何らかの感染症をお持ちの方<br>
                        ※感染症の種類によります。問診の結果、場合によっては確認のための血液検査を施術前に行います。例えば 、C 型肝炎の抗体がプラスでも血液検査で抗原(Ｃ型肝炎ウィルス)がマイナスであれば施術可能です。<br><br>
                        ・ケロイド体質の方<br><br>
                        ・長期間ステロイドを内服している場合は主治医の許可を得た場合のみ施術可能です。<br><br>
                        ・糖尿病を患っている方。特にインシュリンを投与されている方は、主治医の許可が必要です。<br><br>
                        ・脳梗塞や肺梗塞などで、血液をサラサラにするお薬(ワーファリン、バファリン 81 など血液の凝固を防止するお薬)を服用している方<br><br>
                        ・アイライン施術の方で，まつ毛エクステンションをされている方。※施術中にエクステが外れて角膜損傷を起こす可能性がありますので、必ず外してからご来院ください。<br><br>
                        ・局所麻酔(リドカイン：薬品名キシロカインなど)でアレルギー・アナフィラキシー反応を起こした方<br><br>
                        ・口唇ヘルペスをよく発症される方は、リップのアートメイクをお断りする場合がございます。<br><br>
                        そのほか気になることがございましたら、一度お問い合わせください。
                    </p>
                </div>
                <div class="foldable">
                    <div class="foldable__fixed">
                        MRI検査を受けられないと聞いたことがあるのですが
                    </div>
                    <p class="foldable__hidden">
                        当院の染料はアメリカFDA(米国食品医薬品局)の認可を受けたものを使用しており、鉄の含有量もごく僅か。現在のMRI検査は問題なく受けられます。ただし、MRI検査を受ける際は、必ず医療機関へ自己申告をお願いいたします。 気になるようであれば施術前に検査を受ける事をお勧めいたします。<br><br>
                        ※ごく稀な症状ですが、インクには微量な金属質が含まれているため、MRIを利用の際、<br>
                        　ピリピリと痛みを感じる場合もございます。<br>
                        ※今後MRI機器の進化に伴って、インクに反応をしてしまう可能性もございます。ご了承ください。
                    </p>
                </div>
                <div class="foldable">
                    <div class="foldable__fixed">
                        クレジットカードは使えますか？
                    </div>
                    <p class="foldable__hidden">
                        使えます。以下クレジットカードをお使いいただけます。<br>
						ＶＩＳＡ・MasterCard・AMERICANEXPRESS・DinersClub・Discover
                    </p>
                </div>
            </div>
        </section>

        <section class="section section--access">
            <div class="anchor" id="access"></div>
            <h1 class="section__title">アクセス</h1>

            <div class="section__content">
                <div class="wrapper">
                    <div class="info">
                        <dl class="row">
                            <dt class="name">
                                医院名
                            </dt>
                            <dd class="value">
                                ココクリニック
                            </dd>
                        </dl>
                        <dl class="row">
                            <dt class="name">
                                住所
                            </dt>
                            <dd class="value">
                                〒106-0045<br>東京都港区麻布十番3-10-1 <br class="sp">デルプレシアード4階
                            </dd>
                        </dl>
                        <dl class="row">
                            <dt class="name">
                                TEL
                            </dt>
                            <dd class="value">
                                03-6275-1866
                            </dd>
                        </dl>
                        <dl class="row">
                            <dt class="name">
                                診療時間
                            </dt>
                            <dd class="value">
                                10:00～19:00<br>※第2、第4日曜日・祝日は<br class="sp">10:00-15:00
                            </dd>
                        </dl>
                        <dl class="row">
                            <dt class="name">
                                休診日
                            </dt>
                            <dd class="value">
                                木曜日、第1・第3日曜日
                            </dd>
                        </dl>
                        <dl class="row">
                            <dt class="name">
                                診療科目
                            </dt>
                            <dd class="value">
                                美容皮膚科・形成外科
                            </dd>
                        </dl>
                    </div>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.979468550742!2d139.73245801525798!3d35.652877480200814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ba1ab2289ff%3A0xbf0bfbfbec120f2a!2z44Kz44Kz44Kv44Oq44OL44OD44KvIOadseS6rCA0ROOCouODvOODiOODoeOCpOOCrw!5e0!3m2!1sja!2sus!4v1626355393205!5m2!1sja!2sus" width="100%" height="100%" style="border: 20px solid white;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--contact" class="contact">
            <div class="anchor" id="contact"></div>
            <h1 class="section__title">ご予約・お問い合わせ</h1>
            <div class="section__content">
                <div class="anchor" id="line"></div>
                <div class="description">
                    <p class="context">
                        <span>オンライン<br class="sp">無料カウンセリングはじめました！</span>
                        こんな状態だけど施術できるのか？不安な部分があるからそれを聞いてから施術したい！などちょっとしたご相談をZOOMというアプリを使用してオンラインで承ります。<br>
						ご希望の方は、メールフォームよりご予約をお願い致します。<br><br>
						※安藤先生の人相学鑑定ではありませんのでご注意下さい<br>
                        <a href="https://zoom.us/join"><img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_zoom.png"></a>
                    </p>
                </div>

                <div class="contact-links">
                    <a href="tel:0362751866" class="link link--phone"><span>03-6275-1866</span></a>
                    <a href="#contact-form" class="link link--email"><span>メールフォーム</span></a>
                    <a href="https://line.me/R/ti/p/%40586yzheo" class="link link--line"><span>LINE</span></a>
                </div>
                
                <?php echo do_shortcode('[contact-form-7 id="2206" title="予約フォーム"]'); ?>

                <div class="download-area">
                    <h3>初めての方へ</h3>
                    <p class="context">ご来院いただく前にご利用案内をご覧ください。<br>また、未成年の方は保護者の同意書が必要になります。<br>下記よりダウンロードをお願いします。</p>
                    <div class="download-links">
                        <a href="<?php echo get_template_directory_uri();?>/assets/pdf/guide.pdf" target="_blank" class="link"><span>ご利用案内（PDF）</span></a>
						<a href="<?php echo get_template_directory_uri();?>/assets/pdf/consent.pdf" target="_blank" class="link"><span>保護者同意書（PDF）</span></a>
                    </div>
                </div>

                <?php // get_template_part('template-parts/google-form');?>
                <?php // echo do_shortcode('[mwform_formkey key="5"]'); ?>
            </div>
        </section>

        <section class="section section--news">
            <div class="anchor" id="news"></div>
            <div class="section__title">
                <h1>お知らせ</h1>
                <a href="<?php echo get_home_url(); ?>/category/news/">一覧へ</a>
            </div>
            <div class="section__content">
                <?php
                    $args = array(
                    'posts_per_page' => 3,
                    'category_name'  => 'news',
                    );
                    $the_query = new WP_Query($args);
                    $output = '';
                    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

                    $post_id = $the_query->post->ID;

                    // $cat_arr = get_the_category($post_id);
                    $post_content = apply_filters('the_content', $the_query->post->post_content);

                    $output .= '
                        <div class="news-row">
                            <time class="datetime">' . get_the_time('Y.m.d', $post_id) . '</time>
                            <a class="link" href="' . get_permalink($post_id) . '">' . get_the_title($post_id) . '</a>
                        </div>
                    ';

                    endwhile;
                    else:
                        $output = '<p>まだ投稿がありません</p>';
                    endif;

                    echo $output;

                    wp_reset_postdata();
                ?>
            </div>
        </section>

        <section class="section section--blog">
            <div class="wrapper">
                <div class="section__title">
                    <div class="anchor" id="blog"></div>
                    <h1>ブログ</h1>
                    <a href="<?php echo get_home_url(); ?>/category/blog/">一覧へ</a>
                </div>
                <div class="section__content">
                    <div class="article-list">
                    <?php
                        $args = array(
                        'posts_per_page' => 8,
                        'category_name'  => 'blog',
                        );
                        $the_query = new WP_Query($args);
                        $output = '';
                        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

                        $post_id = $the_query->post->ID;

                        // $cat_arr = get_the_category($post_id);
                        $post_content = apply_filters('the_content', $the_query->post->post_content);
                        $thumb_url = get_the_post_thumbnail_url($post->ID, 'medium');
                        if(!$thumb_url){
                            $thumb_url = get_template_directory_uri().'/assets/img/no_images.jpg';
                        }

                        $output .= '
                            <div class="item">
                                <article class="article">
                                    <a href="' . get_permalink($post_id) . '" class="article__link"></a>
                                    <figure class="figure">
                                        <img class="img" src="' . esc_url($thumb_url) . '">
                                    </figure>
                                    <p class="blog-content">
                                        <time>' . get_the_time('Y.m.d', $post_id) . '</time>
                                        ' . get_the_title($post_id) . '
                                    </p>
                                </article>
                            </div>
                        ';

                        endwhile;
                        else:
                            $output = '<p>まだ投稿がありません</p>';
                        endif;

                        echo $output;

                        wp_reset_postdata();
                    ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--fixed-bottom">
            <div class="section__content">
                <div class="links">
                    <a class="link" href="tel:0362751866">
                        <span>Tel</span>
                    </a>
                    <a class="link" href="https://www.instagram.com/cococlinic_official/">
                        <span>Instagram</span>
                    </a>
                    <a class="link" href="https://line.me/R/ti/p/%40586yzheo">
                        <span>Line</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
