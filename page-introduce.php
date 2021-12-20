<?php
/**
 * The template for displaying pages
 *
 * @package Hub theme
 */

get_header();
?>
<link rel="stylesheet" href="/wp-content/uploads/elementor/css/custom-frontend-lite.min.css">
<style>
  .introduce_bg {
    position: absolute;
    height: 500px;
    background-color: #f9e032;
    width: 100%;
    bottom: 0;
  }
  section.c_about #page {margin-bottom: 150px; border-radius: 20px;}
</style>
<!-- Contents S -->
<div id="contents">
  <section class="c_about">
    <div class="wrap">
      <!-- <div class="c_title">
        <h2 class="ct_m">ABOUT US</h2>
      </div> -->
      <style>
        .Play-Archive {
          display: inline-block;
          width: 513px;
          padding: 100px 0;
          margin: 38px 0 0;
          font-family: Montserrat;
          font-size: 4rem;
          font-weight: 700;
          text-align: center;
          font-stretch: normal;
          font-style: normal;
          line-height: 2.12;
          letter-spacing: normal;
          color: #1d1d1d;
        }
        .title_wrapper {
          display: inline-block;
          width: 100%;
          text-align: left;
        }
      </style>
      <span class="Play-Archive">
        Play Archive
      </span>
      <div id="page" class="c_wrap box">
        <!-- <h3 class="title t1 bold bar s1"><mark>ABOUT US</mark></h3> -->
        <div class="title_wrapper"><h3 class="fl title bold deco s1"><mark>Startups Archive Gongju</mark></h3></div>
        <div class="ca_txt text left">
          <p class="big light s1">
          매일 많은 콘텐츠들이 만들어지고 사라집니다.<br>
공스타는 지역의 콘텐츠를 지키(SAVE)고<br>
도시를 새롭게 아카이브합니다.
            <!-- 많은 <strong class="bold">914</strong>명의  -->
            <!-- <mark class="medium marker"><mark>“뉴버드 덕분에 웃을 수 있었고, </mark></mark><mark class="medium marker"><mark>만족스러웠고, </mark></mark><mark class="medium marker"><mark>사업에 </mark></mark><mark class="medium marker"><mark>큰 </mark></mark><mark class="medium marker"><mark>도움이 </mark></mark><mark class="medium marker"><mark>되었다”</mark></mark>고 들어왔습니다.<br />
            그리고 앞으로도 듣고 싶습니다.<br />
            &nbsp;<br />
            <mark class="giant thin">뉴버드의 열정과 변화가 시들지 않는 큰 원동력이기 때문입니다.</mark> -->
          </p>
        </div>
        <div class="ca_pic"></div>
        <!-- <div class="ca_number number_point">
          <ul>
            <li>
              <strong>PROJECTS</strong>
              <p class="number">447</p>
            </li>
            <li>
              <strong>CLIENTS</strong>
              <p class="number">412</p>
            </li>
            <li>
              <strong>WORKERS</strong>
              <p><span class="number">14</span>+</p>
            </li>
            <li>
              <strong>AVERAGE CAREER</strong>
              <p><span class="number">7</span>+</p>
            </li>
          </ul>
        </div> -->
        <div class="ca_overview">
          <h3 class="fl title bold deco s1"><mark>MISSION</mark></h3>
          <ul class="text middle left cb">
            <li>
              <strong class="bold ck s1">Save</strong>
              <p>지역의 콘텐츠는 지역 주민들이 만들어왔습니다. 그들의 콘텐츠가 시간의 
흐름속에 사라지지 않도록 저장하고 정리하여 새로운 메타버스를 만들어냅니다.
</p>
            </li>
            <li>
              <strong class="bold ck s1">Local</strong>
              <p>지역의 콘텐츠는 지역 주민들이 만들어왔습니다. 그들의 콘텐츠가 시간의 
흐름속에 사라지지 않도록 저장하고 정리하여 새로운 메타버스를 만들어냅니다.
</p>
            </li>
            <li>
              <strong class="bold ck s1">Archive</strong>
              <p>지역의 따듯한 일상과 유익한 정보들,
콘텐츠와 수 많은 사람들 모두 이곳에서 볼 수 있습니다.
</p>
            </li>
            <!-- <li>
              <strong class="bold ck s1">SINCE</strong>
              <p>2012년 10월</p>
            </li>
            <li>
              <strong class="bold ck s1">ADDRESS</strong>
              <p>서울특별시 마포구 양화로10길 19, 상록빌딩 2층 202호</p>
            </li>
            <li>
              <strong class="bold ck s1">BUSINESS</strong>
              <p>Web, Mobile, App, E-commerce, Solution, Ad/Marketing</p>
            </li> -->
          </ul>
        </div>
        <div class="ca_vision">
          <ul>
            <li>상호작용<p>오프라인을 온라인으로
리디자인 합니다. 그리하여
인터렉티브한 도시재생을
실현합니다.</p></li>
            <li>지속가능<p>지역에서 활동하는 기업들이
모여 각자의 역할을 통해
끊임없이 콘텐츠를 수집하고
만들어갑니다.</p></li>
            <li>네트워크<p>공주의 다양한 기업들과
컨소시움하여 아카이브하고, 
프로젝트를 통해
새로운 콘텐츠를 만들어갑니다.</p></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="c_bg"></div>
  </section>
</div>
<!-- Contents E -->
<!-- -->
<div class="fusion-sep-clear"></div>
<div class="c_bg2"></div>
<?php
get_footer();
