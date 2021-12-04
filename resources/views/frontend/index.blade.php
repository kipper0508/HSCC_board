@extends('frontend/master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#introduction" class="nav-link scrollto"><i class="bx bx-message-alt-dots"></i> <span>Introduction</span></a></li>
        <li><a href="#professor" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Professor</span></a></li>
        <li><a href="#research" class="nav-link scrollto"><i class="bx bx-book"></i> <span>Research</span></a></li>
        <li><a href="#publication" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Publication</span></a></li>
        <li><a href="#member" class="nav-link scrollto"><i class="bx bx-group"></i> <span>Member</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">

      <h1>High-Speed Communication and Computing Lab</h1>
      <h2>National Central University</h2>
      <p>We're <span class="typed" data-typed-items="Programer, Developer, Maker"></span></p>
    </div>
  </section><!-- End hero -->

  <main id="main">

    <!-- ======= Introduction Section ======= -->
    <section id="introduction" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Introduction</h2>
          <div style="text-align: left;">
            <h4>我們是國立中央大學資訊工程學系 - 高速通訊與計算實驗室 (HSCC)</h4>
            <h4>歡迎對無線通訊、5G、物聯網與嵌入式系統資訊安全等等主題有興趣的同學，加入本實驗室一同努力研究！</h4>
            <h4>本實驗室目前的研究主題如下：</h4>
            <div>
              <ul style="font-size:22px;">
                <li>5G - 第五代行動通訊技術</li>
                <li>IoT - 物聯網相關技術</li>
                <li>Edge Computing - 邊端運算</li>
                <li>Satellite Networks - 衛星網路</li>
                <li>IoT/Embedded Systems Security - 物聯網及嵌入式系統安全</li>
              </ul>
            </div>
          </div>
        </div>

        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach($albums as $photo)
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{$photo->path}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$photo->comment}}</h4>
                <div class="portfolio-links">
                  <a href="{{$photo->path}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search-alt-2"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        

      </div>
    </section><!-- End Introduction Section -->

    <!-- ======= Professor Section ======= -->
    <section id="professor" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Professor</h2>
          <!--<p></p>-->
        </div>

        <div class="row justify-content-end">
          <div class="col-lg-3 col-md-5 col-9">
            <img src="img/other/teacher.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-6 pt-lg-0 content col-md-6 col-11">
            <h3>張貴雲 Guey-Yun Chang</h3>
            <div class="row">
              <div class="col-lg-7">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>學歷:</strong> <span>國立台灣大學 資訊工程學系 博士</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>經歷:</strong> <span>國立中央大學 資訊工程學系 教授</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>專業領域:</strong> <span>物聯網 無線感測網路 演算法</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>信箱:</strong> <span>gychang@csie.ncu.edu.tw</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>辦公室:</strong> <span>中央大學工程五館 B-310</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>分機:</strong> <span>+886-3-4227151 #35310</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>實驗室:</strong> <span>中央大學工程五館 A-310</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Professor Section -->

    <!-- ======= Research Section ======= -->
    <section id="research" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Research</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bx-wifi"></i>
              </div>
              <h4><a data-bs-toggle="modal" data-bs-target="#FiveG" href="FiveG">5th Generation Mobile Networks</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-lock"></i>
              </div>
              <h4><a data-bs-toggle="modal" data-bs-target="#IoT_Security" href="IoT_Security">IoT Security</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-rocket"></i>
              </div>
              <h4><a data-bs-toggle="modal" data-bs-target="#Satellite" href="Satellite">Satellite Networks</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-cloud"></i>
              </div>
              <h4><a data-bs-toggle="modal" data-bs-target="#Others" href="Others">Other Network Technologies</a></h4>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Research Section -->

    <!-- ======= Publications Section ======= -->
    <section id="publication" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Publications</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <h3 class="resume-title"></h3>
            @foreach($publications as $publication)
            @if($loop->first)
            <div class="resume-item pb-0">
              <h4>{{$publication->content}}</h4>
              <h5>{{$publication->month}} {{$publication->year}}</h5>
            </div>
            @else
            <div class="resume-item">
              <h4>{{$publication->content}}</h4>
              <h5>{{$publication->month}} {{$publication->year}}</h5>
            </div>
            @endif
            @endforeach
          </div>
        </div>
        @if(!$publications->isEmpty())
        <a href="{{route('publication')}}" target="_blank">read more</a>
        @endif
      </div>
    </section><!-- End Publications Section -->

    <!-- ======= Member Section ======= -->
    <section id="member" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Member</h2>
        </div>

        @foreach($years as $year)
        <div class="section-title">
          <h3>{{$year->year}}</h3>
        </div>

        @if(!$students[$loop->index]->isEmpty())
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper" style="height:236px;">
            @foreach($students[$loop->index] as $student)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{$student->photo}}" class="testimonial-img" onerror="this.src = 'img\\member\\default.png';">
                <h3>{{$student->name}}</h3>
                <h4>{{$student->comment}}</h4>
                <p style="font-size:22px;">
                  @if($student->facebook)
                  <a href="{{$student->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                  @endif
                  @if($student->instagram)
                  <a href="{{$student->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                  @endif
                  @if($student->github)
                  <a href="{{$student->github}}" class="github"><i class="bx bxl-github"></i></a>
                  @endif
                </p>
              </div>
            </div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
        @endif
        @endforeach

        @if($students)
        <div class="section-title">
          <h3><a href="{{route('member')}}" target="_blank">read more</a></h3>
        </div>
        @endif
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div>
          <div class="info">
            <div class="address" style="width:400px;height:100px;margin:0 auto;">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>320 桃園市中壢區中大路 300 號 工程五館 - A310</p>
            </div>

            <div class="email" style="width:400px;height:100px;margin:0 auto;">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>gychang@csie.ncu.edu.tw</p>
            </div>

            <div class="phone" style="width:400px;height:100px;margin:0 auto;">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>(+886)-3-4227151 ext. 35330</p>
            </div>

          </div>

        </div>


      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>HSCC</h3>
      <p>High-Speed Communication and Computing Lab</p>
      <div class="copyright">
        &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

<!-- Modal -->
<div id="FiveG" class="modal fade" style="top: 20%" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">5th Generation Mobile Networks</h4>
        <button type="button" class="button-29" data-bs-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>
          <span>在現有的 5G 網路架構下，改善網路資源分配達到負載均衡 (Load balancing)、降低網路延遲、實現超可靠通訊以及解決目前 3GPP 提出的探討與議題。</span>
        <p></p>
        <span>為了熟悉 5G 架構，首先必須熟讀 3GPP 提出的 5G 規格書 (Spec)，理解 MIMO、mmWave、Beamforming 等技術的實作流程，進一步為現有的通訊架構與演算法進行研究與優化，來達到改善用戶體驗或降低通訊成本之效果。</span>
        <p></p>
        <ul>
          <li>The Fifth Generation Network (<a href="https://www.youtube.com/watch?v=GEx_d0SjvS0" target="_blank">影片介紹</a>)</li>
          <li>5G Overview Spec 38.300 (<a href="https://www.etsi.org/deliver/etsi_ts/138300_138399/138300/15.07.00_60/ts_138300v150700p.pdf" target="_blank">檔案連結</a>)</li>
          <li>5G 技術筆記 (<a href="https://www.sharetechnote.com/html/5G/Handbook_5G_Index.html" target="_blank">網站連結</a>)</li>
        </ul>
        </p>
      </div>
    </div>
  </div>
</div>

<div id="IoT_Security" class="modal fade" style="top: 15%" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">IoT/Embedded Systems Security</h4>
        <button type="button" class="button-29" data-bs-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>
          <span>針對物聯網與嵌入式系統單晶片，進行系統安全的研究。(P.S. 這個主題軟硬體都會碰到)</span>
        <p></p>
        <span>在這個主題，首先要熟悉基本的 C 語言、作業系統 (Linux) 與密碼學相關知識，並會接觸到大型開源專案，在 Linux 上安裝此專案，進一步學會改寫專案的原始碼與 Makefile，並在專案上開發應用程式，甚至是撰寫 device driver 和 file system 等等相關系統技術。</span>
        <p></p>
        <span>目前研究的方向為嵌入式系統的可信賴執行環境 (TEE, Trusted Execution Environment)，例如 ARM TrustZone，此技術已套用在手機、車載晶片或物聯網裝置上，加強系統整體的安全性，現今許多手機 OEM 與晶片大廠 (三星、高通、聯發科、新思) 都有引入。我們主要使用 QEMU 虛擬機、Raspberry Pi 與 HiKey960 開發板，進行開發與研究。</span>
        <p></p>
        <ul>
          <li>TEE (Trusted Execution Environment, <a href="https://www.twblogs.net/a/5b7cd3b12b71770a43dcc356" target="_blank">中文介紹</a>)</li>
          <li>ARM TrustZone (<a href="https://www.trustonic.com/news/technology/what-is-trustzone/" target="_blank">技術簡介</a>)</li>
          <li>主要開源專案：OP-TEE (<a href="https://github.com/OP-TEE" target="_blank">GitHub 連結</a>, <a href="https://optee.readthedocs.io/en/latest/general/about.html" target="_blank">官方說明文件</a>)</li>
        </ul>
        </p>
      </div>
    </div>
  </div>
</div>

<div id="Satellite" class="modal fade" style="top: 20%" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Satellite Networks</h4>
        <button type="button" class="button-29" data-bs-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>
          <span>未來 6G 場景，最不同於現有 5G 技術的關鍵，即為 6G 將 "衛星系統" 整合入現有通訊系統中，成為未來無線通訊的一大媒介，以達成全球覆蓋網路之目的。</span>
        <p></p>
        <span>在這個主題將探討，傳統的地面無線基地台若與太空中的衛星做結合，在通訊技術上將會遇到什麼樣的挑戰，例如訊號傳遞的強弱與干擾，以及 UE、地面無線基地台與衛星彼此之間的 Handover 演算法，甚至在衛星場景中如何做維持 UE 的連線品質，都在此主題的探討範疇內。</span>
        <p></p>
        <span>此主題期望將傳統基地台與衛星整合後，對整合場景中遇到的通訊瓶頸進行演算法或流程之優化，並在衛星模擬器上進行實驗。</span>
        <p></p>
        <ul>
          <li>Paper: 6G Wireless Communication Systems: Applications, Requirements, Technologies, Challenges, and Research Directions (<a href="https://arxiv.org/ftp/arxiv/papers/1909/1909.11315.pdf" target="_blank">PDF 連結</a>)</li>
          <li>5G Non-Terrestrial Network 38.811 (<a href="assets/file/38811.pdf" target="_blank">PDF 連結</a>)</li>
        </ul>
        </p>
      </div>
    </div>
  </div>
</div>

<div id="Others" class="modal fade" style="top: 20%" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Other Network Technologies</h4>
        <button type="button" class="button-29" data-bs-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>
          <span>針對其他無線通訊技術進行研究。</span>
        <ul>
          <li>Data Center Network Topologies (<a href="https://zh.wikipedia.org/wiki/%E8%B7%B3%E9%A2%91%E6%89%A9%E9%A2%91" target="_blank">華盛頓大學課程簡報</a>)</li>
          <li>Data Center Congestion Control and Load Balancing (<a href="https://people.csail.mit.edu/alizadeh/papers/conga-sigcomm14.pdf" target="_blank">Paper: CONGA 2014</a>)</li>
          <li>Channel Hopping (<a href="https://zh.wikipedia.org/wiki/%E8%B7%B3%E9%A2%91%E6%89%A9%E9%A2%91" target="_blank">維基百科</a>)</li>
          <li>4G LTE</li>
          <li>AIoT</li>
          <li>LoRa</li>
        </ul>
        </p>
      </div>
    </div>
  </div>
</div>

@endsection