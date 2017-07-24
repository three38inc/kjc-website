<style>
.instant {
  -webkit-transition: 0 0 !important;
          transition: 0 0 !important;
}

.scene {
  position: relative;
  height: 60vh;
  background: #fff;
  -webkit-transition: -webkit-transform 0.5s;
          transition: transform 0.5s;
  will-change: transform;
  overflow: hidden;
}
.scene.menu-visible .menu__btn {
  background: #000;
  color: #000;
}
.scene.menu-visible .menu__btn:after {
  -webkit-transform: scale(1.5) !important;
      -ms-transform: scale(1.5) !important;
          transform: scale(1.5) !important;
}
.scene.menu-visible .menu__heading {
  opacity: 1;
  -webkit-transition: opacity 0.5s 1.7s;
          transition: opacity 0.5s 1.7s;
}

.content {
  position: relative;
  height: 60vh;
  -webkit-transition: -webkit-transform 0.6s, opacity 0.4s 0.1s;
          transition: transform 0.6s, opacity 0.4s 0.1s;
  will-change: transform, opacity;
}
.content.inactive {
  opacity: 0;
  -webkit-transform: scale(0.9);
      -ms-transform: scale(0.9);
          transform: scale(0.9);
}

.back,
.front {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 60vh;
  -webkit-transition: -webkit-transform 0.5s 0.5s;
          transition: transform 0.5s 0.5s;
  will-change: transform;
}
.back__bg,
.front__bg {
  position: absolute;
  left: 0;
  width: 100%;
  height: 60vh;
  background-size: cover;
    background-position: center;
  -webkit-transition: -webkit-transform 0.5s;
          transition: transform 0.5s;
  will-change: transform;
}
.back__bg-1,
.front__bg-1 {
  background-image: url('slider-images/slider.png');
}
/*
.back__bg-2,
.front__bg-2 {
  background-image: url('slider-images/slider-2.jpg');
}
.back__bg-3,
.front__bg-3 {
  background-image: url('slider-images/slider-3.jpg');
}
.back__bg-4,
.front__bg-4 {
  background-image: url('slider-images/slider-4.jpg');
}
*/

.back__bg.hidden {
  display: none;
}
.back__bg:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 60vh;
  background: rgba(0, 0, 0, 0.5);
}
.back__bg-1 {
  top: 0%;
}
/*
.back__bg-2 {
  top: 100%;
}
.back__bg-3 {
  top: 200%;
}
.back__bg-4 {
  top: 300%;
}
*/

.front__bg {
  -webkit-transform: scale(0.8);
      -ms-transform: scale(0.8);
          transform: scale(0.8);
}
.front__bg.active {
  -webkit-transform: scale(1);
      -ms-transform: scale(1);
          transform: scale(1);
}
.front__bg:after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 10vh;
/*  background: rgba(0, 0, 0, 0.5);*/
    
    background: rgba(76,76,76,0);
background: -moz-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(89,89,89,0.1) 10%, rgba(0,0,0,0.39) 39%, rgba(17,17,17,0.53) 52%, rgba(43,43,43,0.64) 63%, rgba(28,28,28,0.74) 73%, rgba(19,19,19,1) 99%, rgba(19,19,19,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(76,76,76,0)), color-stop(10%, rgba(89,89,89,0.1)), color-stop(39%, rgba(0,0,0,0.39)), color-stop(52%, rgba(17,17,17,0.53)), color-stop(63%, rgba(43,43,43,0.64)), color-stop(73%, rgba(28,28,28,0.74)), color-stop(99%, rgba(19,19,19,1)), color-stop(100%, rgba(19,19,19,1)));
background: -webkit-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(89,89,89,0.1) 10%, rgba(0,0,0,0.39) 39%, rgba(17,17,17,0.53) 52%, rgba(43,43,43,0.64) 63%, rgba(28,28,28,0.74) 73%, rgba(19,19,19,1) 99%, rgba(19,19,19,1) 100%);
background: -o-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(89,89,89,0.1) 10%, rgba(0,0,0,0.39) 39%, rgba(17,17,17,0.53) 52%, rgba(43,43,43,0.64) 63%, rgba(28,28,28,0.74) 73%, rgba(19,19,19,1) 99%, rgba(19,19,19,1) 100%);
background: -ms-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(89,89,89,0.1) 10%, rgba(0,0,0,0.39) 39%, rgba(17,17,17,0.53) 52%, rgba(43,43,43,0.64) 63%, rgba(28,28,28,0.74) 73%, rgba(19,19,19,1) 99%, rgba(19,19,19,1) 100%);
background: linear-gradient(to bottom, rgba(76,76,76,0) 0%, rgba(89,89,89,0.1) 10%, rgba(0,0,0,0.39) 39%, rgba(17,17,17,0.53) 52%, rgba(43,43,43,0.64) 63%, rgba(28,28,28,0.74) 73%, rgba(19,19,19,1) 99%, rgba(19,19,19,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0 );
    
    
}
.front__bg-0 {
  top: 100%;
}
.front__bg-1 {
  top: 0%;
}
.front__bg-2 {
  top: -100%;
}
.front__bg-3 {
  top: -200%;
}
.front__bg-4 {
  top: -300%;
}

.scene .nav {
  position: absolute;
  left: 0;
  bottom: 0%;
  width: 100%;
  text-align: center;
}
.nav__el {
  display: inline-block;
  position: relative;
  font-size: 2rem;
  height: 2.8rem;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.5);
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
  margin: 1rem 2rem;
  padding-left: 1.5rem;
  cursor: pointer;
  overflow: hidden;
}
.nav__el-clone {
  position: absolute;
  top: 0;
  left: 0;
  overflow: hidden;
  -webkit-transition: -webkit-transform 0.5s;
          transition: transform 0.5s;
  will-change: transform;
  -webkit-transform: translateX(-100%);
      -ms-transform: translateX(-100%);
          transform: translateX(-100%);
}
.nav__el-clone > div {
  margin: 0;
  color: #fff;
  -webkit-transition: -webkit-transform 0.5s;
          transition: transform 0.5s;
  will-change: transform;
  -webkit-transform: translateX(100%);
      -ms-transform: translateX(100%);
          transform: translateX(100%);
}
.nav__el.active:after {
  -webkit-transform: scale(1);
      -ms-transform: scale(1);
          transform: scale(1);
}
.nav__el.active .nav__el-clone {
  -webkit-transform: scale(1);
      -ms-transform: scale(1);
          transform: scale(1);
  -webkit-transition: -webkit-transform 6s 2s;
          transition: transform 6s 2s;
}
.nav__el.active .nav__el-clone .nav__el {
  -webkit-transform: scale(1);
      -ms-transform: scale(1);
          transform: scale(1);
  -webkit-transition: -webkit-transform 6s 2s;
          transition: transform 6s 2s;
}
.nav__el:before {
  position: absolute;
  top: 50%;
  margin-top: -1rem;
  left: -0.3rem;
  font-size: 1.5rem;
  -webkit-transform: rotate(-90deg);
      -ms-transform: rotate(-90deg);
          transform: rotate(-90deg);
}
.nav__el:after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 1px;
  background: #fff;
  -webkit-transition: -webkit-transform 1.5s;
          transition: transform 1.5s;
  -webkit-transform: scale(0);
      -ms-transform: scale(0);
          transform: scale(0);
}
.nav__el-1:before {
  content: "01";
}
.nav__el-2:before {
  content: "02";
}
.nav__el-3:before {
  content: "03";
}
.nav__el-4:before {
  content: "04";
}

.menu__btn {
  z-index: 5;
  position: absolute;
  top: 5%;
  right: 5%;
  width: 5.2rem;
  height: 5.2rem;
  border: 2px solid;
  color: #fff;
  overflow: hidden;
  cursor: pointer;
  -webkit-transition: background-color 0.5s;
          transition: background-color 0.5s;
}
.menu__btn:hover:after {
  -webkit-transform: scale(1);
      -ms-transform: scale(1);
          transform: scale(1);
}
.menu__btn:hover .menu__btn-line:nth-child(1) {
  -webkit-animation: animateMenuBtn 0.7s 0s;
          animation: animateMenuBtn 0.7s 0s;
}
.menu__btn:hover .menu__btn-line:nth-child(2) {
  -webkit-animation: animateMenuBtn 0.7s 0.2s;
          animation: animateMenuBtn 0.7s 0.2s;
}
.menu__btn:hover .menu__btn-line:nth-child(3) {
  -webkit-animation: animateMenuBtn 0.7s 0.4s;
          animation: animateMenuBtn 0.7s 0.4s;
}
.menu__btn:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 60vh;
  border: 0.5rem solid #fff;
  -webkit-transition: -webkit-transform 0.6s;
          transition: transform 0.6s;
  will-change: transform;
  -webkit-transform: scale(1.5);
      -ms-transform: scale(1.5);
          transform: scale(1.5);
}
.menu__btn-inner {
  position: absolute;
  top: 1.6rem;
  left: 1.2rem;
  width: 2.4rem;
  height: 1.6rem;
  overflow: hidden;
}
.menu__btn-line {
  position: absolute;
  left: 0;
  width: 100%;
  height: 2px;
  background: #fff;
}
.menu__btn-line:nth-child(1) {
  top: 0;
}
.menu__btn-line:nth-child(2) {
  top: 0.7rem;
}
.menu__btn-line:nth-child(3) {
  top: 1.4rem;
}
.menu__block {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 60vh;
  display: none;
  text-align: center;
}
.menu__block.visible {
  display: block;
}
.menu__block-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 60vh;
  background-size: cover;
  background-image: url(http://i.imgur.com/3pu2X8D.jpg);
}
.menu__block-svg {
  overflow: visible;
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 60vh;
}
.menu__block-svgPath {
  fill: #fff;
}
.menu__heading {
  position: absolute;
  max-width: 60rem;
  top: 50%;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
      -ms-transform: translateX(-50%) translateY(-50%);
          transform: translateX(-50%) translateY(-50%);
  font-size: 4rem;
  color: #000;
  text-transform: uppercase;
  opacity: 0;
  -webkit-transition: opacity 0.3s;
          transition: opacity 0.3s;
  text-align: center;
}

@-webkit-keyframes animateMenuBtn {
  49.9% {
    -webkit-transform: translateX(100%);
            transform: translateX(100%);
  }
  50% {
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}

@keyframes animateMenuBtn {
  49.9% {
    -webkit-transform: translateX(100%);
            transform: translateX(100%);
  }
  50% {
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}

</style>
 

 <div class="scene">
  <div class="content">
    <div class="back">
      <div class="back__bg back__bg-1 active"></div>
      
    </div>
    <div class="front">
      <div class="front__bg front__bg-1 active"></div>
      
    </div>
<!--
    <div class="nav">
      <div data-page="1" class="nav__el nav__el-1">
        Why i'm not here?
        <div class="nav__el-clone">
          <div class="nav__el nav__el-1">Why i'm not here?</div>
        </div>
      </div>
      <div data-page="2" class="nav__el nav__el-2">
        Where am i?
        <div class="nav__el-clone">
          <div class="nav__el nav__el-2">Where am i?</div>
        </div>
      </div>
      <div data-page="3" class="nav__el nav__el-3">
        This place is cool
        <div class="nav__el-clone">
          <div class="nav__el nav__el-3">This place is cool</div>
        </div>
      </div>
      <div data-page="4" class="nav__el nav__el-4">
        Cold and beautiful
        <div class="nav__el-clone">
          <div class="nav__el nav__el-4">Cold and beautiful</div>
        </div>
      </div>
    </div>
-->
  </div>
<!--
  <div class="menu">
    <div class="menu__btn">
      <div class="menu__btn-inner">
        <span class="menu__btn-line"></span>
        <span class="menu__btn-line"></span>
        <span class="menu__btn-line"></span>
      </div>
    </div>
    <div class="menu__block">
      <div class="menu__block-bg"></div>
      <svg class="menu__block-svg">
        <path class="menu__block-svgPath" />
      </svg>
    </div>
    <h1 class="menu__heading">I'll try to recreate awesome slider in next demos</h1>
  </div>
-->
</div>