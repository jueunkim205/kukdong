<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>극동건설</title>
  <!-- swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- 구글아이콘 -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <!-- 나눔스퀘어 -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@2.0/nanumsquare.css" />
  <!-- -----------Roboto----------- -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <!-- Play -->
  <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet" />
  <!-- -----------Noto sans Kr----------- -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="./css/layout.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <!-- https://www.kukdong.co.kr/ -->
  <div class="wrap">

    <?php include 'subhead.php'; ?>

    <div id="visual">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="./images/background01.jpg" alt="img"></div>
          <div class="swiper-slide"><img src="./images/background02.jpg" alt="img"></div>
          <div class="swiper-slide"><img src="./images/background03.jpg" alt="img"></div>
        </div>
        <div class="txt">
          <div>
            <span>Architecture & Culture</span>
            <h1><strong>인류</strong>의 <strong>상상</strong>을 <strong>뛰어넘다</strong><br>
            </h1>
            <p>지상 88층·지하 6층·452m 높이의 세계적인 마천루, 페트로나스 트윈타워.<br>
              극동건설의 첨단 공법이 세계의 스카이라인을 바꾸고 있습니다.</p>
          </div>

          <div>
            <span>Architecture & Culture</span>
            <h1><strong>건축</strong>에 <strong>문화</strong>를 <strong>더하다</strong><br>
            </h1>
            <p>한국 전통가옥 지붕의 곡선을 경기장에 접목한 세계 최고 수준의 대구스타디움.<br>
              극동건설이 대한민국의 첨단 기술력을 전 세계에 과시하고 있습니다.</p>
          </div>

          <div>
            <span>Architecture & Culture</span>
            <h1><strong>가치</strong>와 <strong>가치</strong>를 <strong>이어주다</strong><br>
            </h1>
            <p>길이 416km, 너비 22.4m 전국을 일일생활권으로 만든 국가 대동맥, 경부고속도로.<br>
              극동건설은 지금 이 순간에도 대한민국의 가치를 높여가고 있습니다.</p>
          </div>
        </div>

        <div id="controls">
          <div id="arrow">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <div id="page">
            <span class="start"></span>
            <span> / </span>
            <span class="end"></span>
          </div>
          <div id="playStop">
            <span class="material-symbols-outlined stop">
              pause
            </span>
          </div>
        </div>
      </div>
    </div>

    <section class="section1">
      <div class="wrap">
        <ul>
          <li>
            <a href="#">
              <h3>CIVIL<br />WORKS</h3>
              <p>토목</p>
              <span class="arrow"></span>
            </a>
          </li>

          <li><a href="#">
              <h3>ARCHITECTURAL<br />WORKS</h3>
              <p>건축</p>
              <span class="arrow"></span>
            </a>
          </li>

          <li>
            <h3 class="tit">BUSINESS</h3>
          </li>

          <li>
            <!-- 빈칸 -->
          </li>

          <li>
            <a href="#">
              <h3>PLANTS<br />ENVIRONMENTAL<br>WORKS</h3>
              <p>플랜트ㆍ환경</p>
              <span class="arrow"></span>
            </a>
          </li>

          <li>
            <a href="#">
              <h3>OVERSEAS<br />BUSINESS</h3>
              <p>해외사업</p>
              <span class="arrow"></span>
            </a>
          </li>

        </ul>
      </div>
    </section>

    <section class="section2">
      <div class="wrap">
        <div class="up">
          <h3 class="tit">PORTFOLIO</h3>
          <div id="upBtn">
            <button type="button">토목</button>
            <button type="button">건축</button>
            <button type="button">플랜트ㆍ환경</button>
            <button type="button">해외사업</button>
          </div>
        </div>

        <div id="downCon">
          <!-- 1 -->
          <div class="swiper2 mySwiper2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <p><img src="./images/port_img1_1.jpg" alt="포트폴리오 이미지"></p>
                <div class="con">
                  <h1>도로/터널/교량</h1>
                  <div class="line"></div>
                  <h3>CIVILENGINEERING WORKS</h3>
                  <p>극동건설은 허허벌판에 길을 내고, 망망대해에 다리를 놓으며, 대한민국 지도를 바꾸어
                    왔습니다.
                  </p>
                  <a href="#">Detail view</a>
                </div>
              </div>

              <div class="swiper-slide">
                <p><img src="./images/port_img1_2.jpg" alt="포트폴리오 이미지"></p>
                <div class="con">
                  <h1>철도/지하철</h1>
                  <div class="line"></div>
                  <h3>CIVILENGINEERING WORKS</h3>
                  <p>극동건설은 철길을 따라, 지하공간을 지나 대한민국의 경제발전을 이끌어 왔습니
                    다.
                  </p>
                  <a href="#">Detail view</a>
                </div>
              </div>

              <div class="swiper-slide">
                <p><img src="./images/port_img1_3.jpg" alt="포트폴리오 이미지"></p>
                <div class="con">
                  <h1>댐/항만/수자원</h1>
                  <div class="line"></div>
                  <h3>CIVILENGINEERING WORKS</h3>
                  <p>극동건설은 우수한 항만개발 역량을 발휘하여 대한민국을 동북아 허브 물류기지로
                    만들겠습니다
                  </p>
                  <a href="#">Detail view</a>
                </div>
              </div>

              <div class="swiper-slide">
                <p><img src="./images/port_img1_4.jpg" alt="포트폴리오 이미지"></p>
                <div class="con">
                  <h1>단지조성</h1>
                  <div class="line"></div>
                  <h3>CIVILENGINEERING WORKS</h3>
                  <p>극동건설은 우수한 토목 시공능력을 바탕으로 대한민국의 국토개발에 앞장서 왔습니
                    다.
                  </p>
                  <a href="#">Detail view</a>
                </div>
              </div>

            </div>
            <div id="arrow">
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>

          <!-- 2 -->
          <div class="swiper2 mySwiper2">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <p><img src="./images/port_imgnew_2_1.jpg" alt="포트폴리오 이미지"></p>
                <div class="con">
                  <h1>공동주택</h1>
                  <div class="line"></div>
                  <h3>HOUSINGS·ARCHITECTURAL WORKS</h3>
                  <p>극동건설만의 독창적인 첨단 공법으로 건축공간의 패러다임을 바꿉니다.</p>
                  <a href="#">Detail view</a>
                </div>
              </div>

              <div class="swiper-slide">
                <p><img src="./images/port_imgnew_2_2.jpg" alt="포트폴리오 이미지"></p>
                <div class="con">
                  <h1>상업/업무시설</h1>
                  <div class="line"></div>
                  <h3>HOUSINGS·ARCHITECTURAL WORKS</h3>
                  <p>극동건설만의 독창적인 첨단 공법으로 건축공간의 패러다임을 바꿉니다.</p>
                  <a href="#">Detail view</a>
                </div>
              </div>

              <div class="swiper-slide">
                <p><img src="./images/port_imgnew_2_3.jpg" alt="포트폴리오 이미지"></p>
                <div class="con">
                  <h1>스포츠레저/관광/숙박시설</h1>
                  <div class="line"></div>
                  <h3>HOUSINGS·ARCHITECTURAL WORKS</h3>
                  <p>극동건설만의 독창적인 첨단 공법으로 건축공간의 패러다임을 바꿉니다.</p>
                  <a href="#">Detail view</a>
                </div>
              </div>

              <div class="swiper-slide">
                <p><img src="./images/port_imgnew_2_4.jpg" alt="포트폴리오 이미지"></p>
                <div class="con">
                  <h1>의료/교육시설</h1>
                  <div class="line"></div>
                  <h3>HOUSINGS·ARCHITECTURAL WORKS</h3>
                  <p>극동건설만의 독창적인 첨단 공법으로 건축공간의 패러다임을 바꿉니다.</p>
                  <a href="#">Detail view</a>
                </div>
              </div>

              <div class="swiper-slide">
                <p><img src="./images/port_imgnew_2_5.jpg" alt="포트폴리오 이미지"></p>
                <div class="con">
                  <h1>공공시설</h1>
                  <div class="line"></div>
                  <h3>HOUSINGS·ARCHITECTURAL WORKS</h3>
                  <p>극동건설만의 독창적인 첨단 공법으로 건축공간의 패러다임을 바꿉니다.</p>
                  <a href="#">Detail view</a>
                </div>
              </div>

            </div>
            <div id="arrow">
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>

          <!-- 3 -->
          <div class="swiper2 mySwiper2">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <p><img src="./images/port_imgnew_3_1.jpg" alt="포트폴리오 이미지"></p>
                <div class="con">
                  <h1>산업시설</h1>
                  <div class="line"></div>
                  <h3>PLANTS·ENVIRONMENTAL WORKS</h3>
                  <p>반세기동안 축적된 역량과 전문성이 담긴 완벽한 플랜트 솔루션을 제공합니다.</p>
                  <a href="#">Detail view</a>
                </div>
              </div>

              <div class="swiper-slide">
                <p><img src="./images/port_imgnew_3_2.jpg" alt="포트폴리오 이미지"></p>
                <div class="con">
                  <h1>환경시설</h1>
                  <div class="line"></div>
                  <h3>PLANTS·ENVIRONMENTAL WORKS</h3>
                  <p>반세기동안 축적된 역량과 전문성이 담긴 완벽한 플랜트 솔루션을 제공합니다.</p>
                  <a href="#">Detail view</a>
                </div>
              </div>

              <div class="swiper-slide">
                <p><img src="./images/port_imgnew_3_3.jpg" alt="포트폴리오 이미지"></p>
                <div class="con">
                  <h1>전력/통신시설</h1>
                  <div class="line"></div>
                  <h3>PLANTS·ENVIRONMENTAL WORKS</h3>
                  <p>극동건설은 최첨단 전기통신기술을 바탕으로 유비쿼터스 세상을 열어갑니다.</p>
                  <a href="#">Detail view</a>
                </div>
              </div>

            </div>
            <div id="arrow">
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>

          <!-- 4 -->
          <div class="swiper2 ">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <p><img src="./images/port_imgnew_4_1.jpg" alt="포트폴리오 이미지"></p>
                <div class="con">
                  <h1>해외사업</h1>
                  <div class="line"></div>
                  <h3>Overseas Business</h3>
                  <p>글로벌 스탠다드 테크놀로지를 보유한 극동건설의 무대는 세계입니다.</p>
                  <a href="#">Detail view</a>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="section3">
      <div class="wrap">
        <h1>개개인의 특성과 능력을 중시하는 극동건설은<br>
          여러분의 <strong>성장의 터</strong>를 마련합니다.</h1>
        <ul>
          <li>
            <a href="#">
              <h4>
                인재상
                <span class="line top"></span>
                <span class="line right"></span>
                <span class="line bottom"></span>
                <span class="line left"></span>
              </h4>
              <p>극동건설이 추구하는 인재상을 여러분께 소개합니다</p>
            </a>
          </li>
          <li>
            <a href="#">
              <h4>
                인사제도
                <span class="line top"></span>
                <span class="line right"></span>
                <span class="line bottom"></span>
                <span class="line left"></span>
              </h4>
              <p>
                임직원의 역량향상과 동기부여를 위해 다양한 제도를 운영합니다
              </p>
            </a>
          </li>
          <li>
            <a href="#">
              <h4>
                채용안내
                <span class="line top"></span>
                <span class="line right"></span>
                <span class="line bottom"></span>
                <span class="line left"></span>
              </h4>
              <p>극동건설의 채용제도 및 절차를 자세히 소개합니다</p>
            </a>
          </li>
          <li>
            <a href="#">
              <h4>
                채용공고
                <span class="line top"></span>
                <span class="line right"></span>
                <span class="line bottom"></span>
                <span class="line left"></span>
              </h4>
              <p>극동건설의 채용공고를 소개합니다</p>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <section class="section4">
      <div class="wrap">
        <h3 class="tit">PR Center</h3>
        <p>세상에 없던 신기술을 개척하는 기업, 극동건설이 기술의 진보를 선도합니다</p>

        <div class="con">
          <ul class="con_left">
            <li><a href="#">
                <div class="txt">
                  <h3 class="tit">극동뉴스</h3>
                  <p>극동건설의 다양한 소식을 가장 빠르게 전달해드립니다.</p>
                  <span class="arrow">
                </div>
              </a></li>

            <li><a href="#">
                <div class="txt">
                  <h3 class="tit">R&D</h3>
                  <p>끊임없는 신기술 개발과 혁신으로 극동건설이 건축기술의 진보를 위해 노력하고 있습니다</p>
                  <span class="arrow">
                </div>
              </a></li>
          </ul>
          <ul class="con_right">
            <li>
              <a href="#">
                <h4>언론속의 <span>극동</span></h4>
                <p>언론에 소개되는 극동의 소식을<br />안내해드립니다.</p>
                <span class="arrow">
                </span>
                <span class="line top"></span>
                <span class="line right"></span>
                <span class="line bottom"></span>
                <span class="line left"></span>
              </a>
            </li>
            <li>
              <a href="#">
                <h4>입주고객 <span>A/S 안내</span></h4>
                <p>스타클래스 입주 후 A/S 신청에<br />대한 안내 입니다.</p>
                <span class="arrow">
                </span>
                <span class="line top"></span>
                <span class="line right"></span>
                <span class="line bottom"></span>
                <span class="line left"></span>
              </a>
            </li>
            <li>
              <a href="#">
                <h4>극동건설 <span>인재채용</span></h4>
                <p>극동건설과 함께 성장해 나갈<br>인재를 모집합니다</p>
                <span class="arrow">
                </span>
                <span class="line top"></span>
                <span class="line right"></span>
                <span class="line bottom"></span>
                <span class="line left"></span>
              </a>
            </li>
            <li>
              <a href="#">
                <h4>기업 <span>홍보영상</span></h4>
                <p>극동건설의 다양한 홍보영상을<br>소개합니다.</p>
                <span class="arrow">
                </span>
                <span class="line top"></span>
                <span class="line right"></span>
                <span class="line bottom"></span>
                <span class="line left"></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="section5">
      <ul class="banner">
        <li><a href="https://www.gumgwang.co.kr/" target="_blank"><img src="./images/banner1_gumgwangLogo.jpg"
              alt="banner img"></a>
        </li>
        <li><a href="https://www.namkwang.co.kr/" target="_blank"><img src="./images/banner2_namkwangLogo.jpg"
              alt="banner img"></a>
        </li>
        <li><a href="https://www.haustory.co.kr/" target="_blank"><img src="./images/banner3_haustoryLogo.jpg"
              alt="banner img"></a>
        </li>
        <li><a href="https://www.kukdongapt.co.kr/" target="_blank"><img src="./images/banner4_starclassLogo.jpg"
              alt="banner img"></a>
        </li>
        <li><a href="https://b2b.gumgwang.co.kr/" target="_blank"><img src="./images/banner5_B2BLogo.jpg"
              alt="banner img"></a></li>
      </ul>
    </section>

    <div id="topbtn">
      <span class="material-symbols-outlined">
        keyboard_arrow_up
      </span>
      <p>TOP</p>
    </div>

    <!-- 전체메뉴 -->



  </div>

  <?php include 'subtail.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>