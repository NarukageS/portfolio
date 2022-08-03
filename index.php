<?php get_header() ;?>

    
<main class="l_main">
  <div class="l_container">
    <div class="top_kv" id="bird">
      <p class="top_kv_copy "><span class="js_kv_copy__1">Welcome</span> <span class="js_kv_copy__2">To</span> <span class="js_kv_copy__3">My Portfolio</span></p>
      <p class="top_kv_scroll">scroll <span class="top_kv_scroll-allow">⇀</span></p>
    </div>


    <section class="top_about top_section" id="1">
      <div class="l_content">
        <h2 class="top_section_title js_section_title">
          ABOUT
        </h2>
        <div class="top_about_inner js_about">
          <div class="top_about_img-wrapper">
            <img 
            width="1478"
            height="1108"
            src="<?php echo esc_url( get_template_directory_uri() . '/img/about.jpg' ); ?>" 
            alt="" 
            class="top_about_img">
          </div>
          <div class="top_about_text">
            <table class="top_about_table">
              <tr class="top_about_table-tr">
                <th class="top_about_table-th">氏名：</th>
                <td class="top_about_table-td">成影俊也（ナルカゲシュンヤ）</td>
              </tr>
              <tr class="top_about_table-tr">
                <th class="top_about_table-th">出身：</th>
                <td class="top_about_table-td">京都、現在は都内在住</td>
              </tr>
              <tr class="top_about_table-tr">
                <th class="top_about_table-th">趣味：</th>
                <td class="top_about_table-td">読書、投資</td>
              </tr>
            </table>
            <p class="top_about_desc">都内のITベンチャーで勤務しています。<br>
              Web制作や広告、マーケティングについて
              <br>日々学習しております。
              <span class="top_about_desc__line">
              相談事がございましたら、ご遠慮なくお申し付けください。
              </span>
              </p>
              <div class="top_about_icon-wrapper">
                <a href="https://twitter.com/N82436111" class="top_about_icon-link">
                  <div class="top_about_icon">
                    <img width="50" height="50"
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/twitter.png' ); ?>" alt="" class="top_about_icon-twitter">
                  </div>
                </a>
                <a href="https://www.facebook.com/profile.php?id=100080485482891" class="top_about_icon-link">
                  <div class="top_about_icon">
                    <img width="50" height="50"
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/facebook.png' ); ?>" alt="" class="top_about_icon-facebook">
                  </div>
                </a>
              </div>
          </div>
          
        </div>
      </div>
    </section>
    <section class="top_policy top_section" id="2">
      <div class="l_content">
        <h2 class="top_section_title js_section_title">POLICY</h2>
        <div class="top_policy_inner js_policy">
          <div class="top_policy_content js_policy_content">
            <p class="top_policy_content-item">迅速なレスポンス</p>
            <p class="top_policy_content-desc">ご連絡を確認次第すぐ（遅くとも24時間以内）に返信することをお約束いたします。</p>
          </div>
          <div class="top_policy_content js_policy_content">
            <p class="top_policy_content-item">責任をもってやり遂げる</p>
            <p class="top_policy_content-desc">責任感を持ち、保守・修正まで意識したコーディングをします。</p>
          </div>
          <div class="top_policy_content js_policy_content">
            <p class="top_policy_content-item">前進し続ける</p>
            <p class="top_policy_content-desc">常に向上心を持って、新たな知識・スキルの習得を継続していきます。</p>
          </div>
        </div>
      </div>
    </section>
    <section class="top_skill top_section" id="3">
      <div class="l_content">
        <h2 class="top_section_title top_skill_title js_section_title">SKILL</h2>
        <div class="top_skill_wrapper">
          <div class="top_skill_bg">
            <div class="top_skill_contents js_slider">
              <div class="top_skill_content ">
                <div class="top_skill_content-item">
                  <div class="top_skill_icon-wrapper">
                    <img 
                    width="50"
                    height="50"
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/html.png' ); ?>" 
                    alt="" 
                    class="top_skill_icon">
                  </div>
                  <p class="top_skill_name">HTML</p>
                </div>
              </div>
              <div class="top_skill_content ">
                <div class="top_skill_content-item">
                  <div class="top_skill_icon-wrapper">
                    <img 
                    width="50"
                    height="50"
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/css.png' ); ?>" 
                    alt="" 
                    class="top_skill_icon">
                  </div>
                  <p class="top_skill_name">CSS</p>
                </div>
              </div>
              <div class="top_skill_content ">
                <div class="top_skill_content-item">
                  <div class="top_skill_icon-wrapper">
                    <img 
                    width="50"
                    height="50"
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/sass.png' ); ?>" 
                    alt="" 
                    class="top_skill_icon">
                  </div>
                  <p class="top_skill_name">Sass</p>
                </div>
              </div>
              <div class="top_skill_content ">
                <div class="top_skill_content-item">
                  <div class="top_skill_icon-wrapper">
                    <img 
                    width="50"
                    height="50"
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/js.png' ); ?>" 
                    alt="" 
                    class="top_skill_icon">
                  </div>
                  <p class="top_skill_name">Javascript</p>
                </div>
              </div>
              <div class="top_skill_content ">
                <div class="top_skill_content-item">
                  <div class="top_skill_icon-wrapper">
                    <img 
                    width="50"
                    height="50"
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/jquery.png' ); ?>" 
                    alt="" 
                    class="top_skill_icon">
                  </div>
                  <p class="top_skill_name">jQuery</p>
                </div>
              </div>
              <div class="top_skill_content ">
                <div class="top_skill_content-item">
                  <div class="top_skill_icon-wrapper">
                    <img 
                    width="50"
                    height="50"
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/wp.png' ); ?>" 
                    alt="" 
                    class="top_skill_icon">
                  </div>
                  <p class="top_skill_name">WordPress</p>
                </div>
              </div>
              <div class="top_skill_content ">
                <div class="top_skill_content-item">
                  <div class="top_skill_icon-wrapper">
                    <img 
                    width="50"
                    height="50"
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/xd.png' ); ?>" 
                    alt="" 
                    class="top_skill_icon">
                  </div>
                  <p class="top_skill_name">Adobe Xd</p>
                </div>
              </div>
              
            </div>
          </div>
          <div class="top_skill_bg">
            <div class="top_skill_contents js_slider--reverse" dir="rtl">
              <div class="top_skill_content ">
                <div class="top_skill_content-item">
                  <div class="top_skill_icon-wrapper">
                    <img 
                    width="50"
                    height="50"
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/html.png' ); ?>" 
                    alt="" 
                    class="top_skill_icon">
                  </div>
                  <p class="top_skill_name">HTML</p>
                </div>
              </div>
              <div class="top_skill_content ">
                <div class="top_skill_content-item">
                  <div class="top_skill_icon-wrapper">
                    <img 
                    width="50"
                    height="50"
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/css.png' ); ?>" 
                    alt="" 
                    class="top_skill_icon">
                  </div>
                  <p class="top_skill_name">CSS</p>
                </div>
              </div>
              <div class="top_skill_content ">
                <div class="top_skill_content-item">
                  <div class="top_skill_icon-wrapper">
                    <img 
                    width="50"
                    height="50"
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/sass.png' ); ?>" 
                    alt="" 
                    class="top_skill_icon">
                  </div>
                  <p class="top_skill_name">Sass</p>
                </div>
              </div>
              <div class="top_skill_content ">
                <div class="top_skill_content-item">
                  <div class="top_skill_icon-wrapper">
                    <img 
                    width="50"
                    height="50"
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/js.png' ); ?>" 
                    alt="" 
                    class="top_skill_icon">
                  </div>
                  <p class="top_skill_name">Javascript</p>
                </div>
              </div>
              <div class="top_skill_content ">
                <div class="top_skill_content-item">
                  <div class="top_skill_icon-wrapper">
                    <img 
                    width="50"
                    height="50"
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/jquery.png' ); ?>" 
                    alt="" 
                    class="top_skill_icon">
                  </div>
                  <p class="top_skill_name">jQuery</p>
                </div>
              </div>
              <div class="top_skill_content ">
                <div class="top_skill_content-item">
                  <div class="top_skill_icon-wrapper">
                    <img 
                    width="50"
                    height="50"
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/wp.png' ); ?>" 
                    alt="" 
                    class="top_skill_icon">
                  </div>
                  <p class="top_skill_name">WordPress</p>
                </div>
              </div>
              <div class="top_skill_content ">
                <div class="top_skill_content-item">
                  <div class="top_skill_icon-wrapper">
                    <img 
                    width="50"
                    height="50"
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/xd.png' ); ?>" 
                    alt="" 
                    class="top_skill_icon">
                  </div>
                  <p class="top_skill_name">Adobe Xd</p>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="top_works top_section" id="4">
      <div class="l_content">
        <h2 class="top_section_title js_section_title">WORKS</h2>
        <div class="top_works_contents">
          <div class="top_works_content js_works_content">
            <div class="top_works_img-wrapper">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/work01.jpg' ); ?>" alt="" class="top_works_img">
            </div>
            <div class="top_works_text">
              <h3 class="top_works_title">初めてのポートフォリオ</h3>
              <table class="top_works_table">
                <tr class="top_works_table-tr">
                  <th class="top_works_table-th">制作概要</th>
                  <td class="top_works_table-td">1ページ<br>
                    レスポンシブ対応<br>
                    CMS化（WordPress）
                  </td>
                </tr>
                <tr class="top_works_table-tr">
                  <th class="top_works_table-th">制作期間</th>
                  <td class="top_works_table-td">1か月半</td>
                </tr>
                <tr class="top_works_table-tr">
                  <th class="top_works_table-th">工夫点</th>
                  <td class="top_works_table-td">モノクロのシンプルなデザインにしてアニメーションで少し遊びました。</td>
                </tr>
                <tr class="top_works_table-tr">
                  <th class="top_works_table-th">技術</th>
                  <td class="top_works_table-td">HTML, Sass, JS, jQuery, WordPress</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="top_works_content js_works_content">
            <div class="top_works_img-wrapper">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/work02.jpg' ); ?>" alt="" class="top_works_img">
            </div>
            <div class="top_works_text">
              <h3 class="top_works_title">鳳来弁当 様</h3>
              <table class="top_works_table">
                <tr class="top_works_table-tr">
                  <th class="top_works_table-th">制作概要</th>
                  <td class="top_works_table-td">1ページ<br>
                    レスポンシブ対応
                  </td>
                </tr>
                <tr class="top_works_table-tr">
                  <th class="top_works_table-th">制作期間</th>
                  <td class="top_works_table-td">1か月</td>
                </tr>
                <tr class="top_works_table-tr">
                  <th class="top_works_table-th">工夫点</th>
                  <td class="top_works_table-td">素のJSですべてのアニメーションを作りました。</td>
                </tr>
                <tr class="top_works_table-tr">
                  <th class="top_works_table-th">技術</th>
                  <td class="top_works_table-td">HTML, Sass, JS</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="top_works_content js_works_content">
            <div class="top_works_img-wrapper">
              <img src="" alt="" class="top_works_img">
            </div>
            <div class="top_works_text">
              <h3 class="top_works_title">タイトル</h3>
              <table class="top_works_table">
                <tr class="top_works_table-tr">
                  <th class="top_works_table-th">制作概要</th>
                  <td class="top_works_table-td"></td>
                </tr>
                <tr class="top_works_table-tr">
                  <th class="top_works_table-th">制作期間</th>
                  <td class="top_works_table-td"></td>
                </tr>
                <tr class="top_works_table-tr">
                  <th class="top_works_table-th">工夫点</th>
                  <td class="top_works_table-td"></td>
                </tr>
                <tr class="top_works_table-tr">
                  <th class="top_works_table-th">技術</th>
                  <td class="top_works_table-td"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="top_contact top_section" id="5">
      <div class="top_contact_wrapper">
        <h2 class="top_contact_title js_section_title">CONTACT</h2>
        <p class="top_contact_text">ご依頼や料金のお見積もりなど<br class="u_not-br">お気軽にご相談ください。</p>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="m_contact_button top_contact_button">
          無料で相談する
        </a>
      </div>
    </section>
  </div>
  <div class="m_page_top js_page_top"></div>
</main>
<?php get_footer(); ?>