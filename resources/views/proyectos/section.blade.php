<script>
    $(document).ready(function(){
        $('#nav-icon').click(function(){
            $(this).toggleClass('open');
        $(".overlay").toggleClass("open");
        $(".overlay a").toggleClass("open");
        $(".overlay p").toggleClass("open");
            });
        
        // Scroll Reveal
        // ScrollReveal().reveal('.services .grid .card');
        
        $('.square.blue').on('inview', function(event, isInView) {
            if (isInView) {
            // element is now visible in the viewport
            $(this).addClass("in-view");
            } else {
            // element has gone out of viewport
            $(this).removeClass("in-view");
            }
        });
    });
 
</script>

<div class="background">
    <div class="header">
      <div class="headerWrapper">
        <h6>¿Que hacemos?</h6>
        <h1>Paginas web, e-commerce <br> & sistemas</h1>
        <div class="circle blue"></div>
        <div class="square red"></div>
        <div class="triangle green"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 177.893 177.893"><defs><style>.a{fill:url(#a);}.b{filter:url(#b);}</style><linearGradient id="a" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#3dbed5"/><stop offset="1" stop-color="#3dd55a"/></linearGradient><filter id="b" x="0" y="0" width="177.893" height="177.893" filterUnits="userSpaceOnUse"><feOffset dx="3" dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="7.5" result="c"/><feFlood flood-color="#3dd55a" flood-opacity="0.396"/><feComposite operator="in" in2="c"/><feComposite in="SourceGraphic"/></filter></defs><g class="b" transform="matrix(1, 0, 0, 1, 0, 0)"><path class="a" d="M136.727,21104.928l-50.222,100h100Z" transform="translate(-8978.23 -19029.24) rotate(-25)"/></g></svg></div>
        <div class="circle orange"></div>
      </div>
    </div>
  </div>
  
  <div class="section pages">
    <div class="sectionWrapper">
      <h2>Nuestros proyectos</h2>
      <p class="description">Somos desarrolladores apasionados y dedicados a ofrecer productos, siempre pensando como alguien que forma parte de tu empresa.</p>
      <div class="square blue"></div>
      <div class="grid">
        <!-- Web Design -->
        <div class="card" data-id="landing">
          <h3>Landing page</h3>
          <p></p>
        </div>
        <!-- Branding -->
        <div class="card" data-id="e-commerce">
          <h3>e-commerce</h3>
          <p></p>
        </div>
        <!-- Social Media Marketing -->
        <div class="card" data-id="intranet">
          <h3>Intranet</h3>
          <p></p>
        </div>
        <div class="card" data-id="intranet">
          <h3>Web page</h3>
          <p></p>
        </div>
      </div>
    </div>
  </div>


<style>
    @import url('https://fonts.googleapis.com/css?family=Pacifico');
@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700');
 
h1 {
  color: #272727;
  font-size: 96px;
  font-weight: 700;
}

h2 {
  color: #151515;
  font-size: 64px;
  font-weight: 700;
}

h6 {
  color: #D6D6D6;
  font-size: 24px;
  font-weight: 600;
  text-transform: uppercase;
}

p.description {
  color: #5A5A5A;
  font-size: 24px;
  font-weight: normal;
}

h1::selection {
  color: white;
  background: #272727;
}

h1::-moz-selection {
  color: white;
  background: #272727;
}

.section {
  width: 100vw;
  height: 100vh;
  min-height: 1000px;
  background: white;
  position: relative;
}

.sectionWrapper {
  width: 85%;
  height: 100%;
  margin: auto;
  display: flex;
  justify-content: center;
  flex-direction: column;
  position: relative;
}

.background {
  width: 100vw;
  height: 100vh;
  min-height: 700px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.header {
  width: 100vw;
  display: flex;
  justify-content: center;
  align-items: center;
}

.headerWrapper {
  text-align: center;
  position: relative;
  padding: 56px 71px 128px 108px;
}

.headerWrapper h6 {
  animation: 1s fadeIn ease;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}


.circle {
  border-radius: 50%;
	width: 100px;
	height: 100px;
}

.circle.blue {
  background: linear-gradient(#4F3DD5, #3DB2D5);
  position: absolute;
  top: 21px;
  left: 0px;
  animation: circleBlueMove 2s ease;
  box-shadow: 3px 3px 15px rgba(61, 178, 213, 0.4);
}

@keyframes circleBlueMove {
  0% {
    opacity: 0;
    transform: translate(200px, 75px) rotate(90deg);
  }
  100% {
    opacity: 1;
  }
}

.circle.orange { 
  background: linear-gradient(#D53D3D, #D5B83D);
  position: absolute;
  bottom: 0px;
  right: 0px;
  animation: circleOrangeMove 2s ease;
  box-shadow: 3px 3px 15px rgba(213, 184, 61, 0.4);
}

@keyframes circleOrangeMove {
  0% {
    opacity: 0;
    transform: translate(-200px, -75px) rotate(90deg);
  }
  35% {
    opacity: 0;
    transform: translate(-200px, -75px) rotate(90deg);
  }
  100% {
    opacity: 1;
  }
}

.square {
  width: 100px;
  height: 100px;
}
 
.square.red {
  background: linear-gradient(135deg, #D53D3D, #D53DC9);
  position: absolute;
  top: 15px; 
  right: 15px;
  animation: squareRedMove 2s ease;
  box-shadow: 3px 3px 15px rgba(213, 61, 201, 0.4);
  transform: rotate(45deg);
} 

@keyframes squareRedMove {
  0% {
    opacity: 0;
  }
  20% {
    opacity: 0;
    transform: translate(-200px, 75px) rotate(90deg);
  }
  100% {
    opacity: 1;
  }
}

.triangle svg {
  width: 175px;
  height: 175px;
  position: absolute;
  bottom: -17px; 
  left: -20px;  
  animation: triangleGreendMove 2s ease;
} 

@keyframes triangleGreendMove {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 0;
    transform: translate(200px, -75px) rotate(90deg);
  }
  100% {
    opacity: 1;
  }
}

/* Services */

.pages h6 {
  margin-bottom: 5px;
}

.pages h2 {
  margin-bottom: 15px;
}

.pages .description {
  margin-bottom: 60px;
  width: 685px;
  line-height: 40px;
}

.pages .grid {
  display: grid;
  grid-template-columns: 400px 500px;
  grid-column-gap: 10px;
  grid-template-rows: 150px 150px;
  grid-row-gap: 30px;
  justify-items: normal

}

.pages .grid .card {
  width: 300px;
  padding: 43px 40px;
  background: linear-gradient(to bottom right, #313131, #0F0F0F);
  border-radius: 5px;
  display: block;
}

.pages .grid .card h3 {
  color: white;
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 5px;
}

.pages .grid .card p {
  color: #C3C3C3;
  font-size: 22px;
  font-weight: normal;
}

.square.blue { 
  position: absolute;
  box-shadow: 3px 3px 15px rgba(61, 178, 213, 0.4);
  background: linear-gradient(#4F3DD5, #3DB2D5);
  top: 100px;
  right: 75px;
  width: 125px;
  height: 125px;
  opacity: 0.01;
  transition: all 0.05s ease;
  transform: translateX(125px);
}

 .square.blue.in-view {
  transform: rotate(22.5deg) translateX(0px);
  opacity: 1;
  transition: all 1s ease;
}

/* Responsive */

@media (max-width: 1280px) {
  
  .pages .grid {
    display: grid;
    grid-template-columns: 350px 500px;

    grid-template-rows: 150px 150px;
    grid-row-gap: 30px;
  }

  .pages .grid .card{

  }
}

@media (max-width: 1200px) {
  
  .pages .sectionWrapper {
    padding-top: 185px;
    padding-bottom: 185px;
  }
  
  .pages .grid {
    display: grid;
    grid-template-columns: 480px;
    grid-template-rows: 150px 150px;
    grid-row-gap: 30px;
  }
  
  .pages .grid .card {
    width: 420px;
    padding: 43px 40px;
    background: linear-gradient(to bottom right, #313131, #0F0F0F);
    border-radius: 5px;
  }
}

@media (max-width: 850px) {
  
  .pages .sectionWrapper {
    padding-top: 150px;
    padding-bottom: 150px;
  }
  
  h6 {
    font-size: 22px;
  }
  
  h2 {
    font-size: 48px;
  }
  
  .pages .description {
    font-size: 22px;
    width: initial;
  }
  
  .pages .square.blue {
    width: 75px;
    height: 75px;
  }
   
   .pages .grid {
    display: grid;
    grid-template-columns: 85%;
    grid-template-rows: initial;
    grid-row-gap: 25px;
    justify-items: normal
  }
  
  .pages .grid .card {
    width: 100%;
    padding: 31.5px 30px;
    background: linear-gradient(to bottom right, #313131, #0F0F0F);
    border-radius: 5px;
  } 

  .pages .grid .card h3 {
    color: white;
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 5px;
  }

  .pages .grid .card p {
    color: #C3C3C3;
    font-size: 20px;
    font-weight: normal;
  }
}

@media (max-width: 850px) and (min-width: 440px){

.headerWrapper {
   position: static;
  padding: 0;
}
  
.overlay a {
  color: white;
  font-size: 36px;
  font-weight: bold;
  text-decoration: none;
  display: block;
  margin-left: 40px;
  margin-bottom: 10px; 
  opacity: 0;
  transition: transform 0.2s ease;
  overflow: hidden;
}

.overlay p {
    margin-left: 40px;
}
  
#pages {
  width: 134px;
}

#work {
  width: 150px;
}

#contact {
  width: 125px;
}
   
h6 {
  font-size: 22px;
}
  
.headerWrapper h1 {
  color: #272727;
  font-size: 56px;
  font-weight: 700;
  animation: 1.5s fadeInTitle ease;
}
  
.circle {
  border-radius: 50%;  
	width: 75px;
	height: 75px; 
}

.circle.blue {
  background: linear-gradient(#4F3DD5, #3DB2D5);
  position: absolute;
  top: 129px;
  left: 50px;
  animation: circleBlueMove 2s ease;
  box-shadow: 3px 3px 15px rgba(61, 178, 213, 0.4);
}
 
@keyframes circleBlueMove {
  0% {
    opacity: 0;
    transform: translate(200px, 75px) rotate(90deg);
  }
  100% {
    opacity: 1;
  }
}

.circle.orange { 
  background: linear-gradient(#D53D3D, #D5B83D); 
  position: absolute;
  top: 520px;
  right: 50px;
  animation: circleOrangeMove 2s ease;
  box-shadow: 3px 3px 15px rgba(213, 184, 61, 0.4);
}

@keyframes circleOrangeMove {
  0% {
    opacity: 0;
    transform: translate(-200px, -75px) rotate(90deg);
  }
  35% {
    opacity: 0;
    transform: translate(-200px, -75px) rotate(90deg);
  }
  100% {
    opacity: 1;
  }
}

.square {
  width: 75px;
  height: 75px;
}
 
.square.red {
  background: linear-gradient(135deg, #D53D3D, #D53DC9); 
  position: absolute;
  top: 130px; 
  right: 50px; 
  animation: squareRedMove 2s ease;
  box-shadow: 3px 3px 15px rgba(213, 61, 201, 0.4);
  transform: rotate(45deg);
} 

@keyframes squareRedMove {
  0% {
    opacity: 0;
  }
  20% {
    opacity: 0;
    transform: translate(-200px, 75px) rotate(90deg);
  }
  100% {
    opacity: 1;
  }
}

.triangle svg {  
  width: 125px;
  height: 125px;
  position: absolute;
  top: 480px;
  left: 25px;
  animation: triangleGreendMove 2s ease;
}

@keyframes triangleGreendMove {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 0;
    transform: translate(200px, -75px) rotate(90deg);
  }
  100% {
    opacity: 1;
  }
}
}

@media (max-width: 440px) {

  .background {
    max-height: 700px;
  }
  
  .headerWrapper {
    position: static;
    padding: 0;
  }
  
.overlay a {
  color: white;
  font-size: 36px;
  font-weight: bold;
  text-decoration: none;
  display: block;
  margin-left: 40px;
  margin-bottom: 10px; 
  opacity: 0;
  transition: transform 0.2s ease;
  overflow: hidden;
}
  
.overlay p {
  margin-left: 40px;
  position: static;
  margin-top: 40px;
}
  
#pages {
  width: 134px;
}

#work {
  width: 150px;
}

#contact {
  width: 125px;
}
   
.headerWrapper h6 {
  color: #D6D6D6;
  font-size: 22px;
  font-weight: 600;
  text-transform: uppercase;
  animation: 1s fadeIn ease;
}
  
.headerWrapper h1 {
  color: #272727;
  font-size: 48px;
  font-weight: 700;
  animation: 1.5s fadeInTitle ease;
}
  
.circle {
  border-radius: 50%;  
	width: 75px;
	height: 75px; 
}

.circle.blue {
  background: linear-gradient(#4F3DD5, #3DB2D5);
  position: absolute;
  top: 169px;
  left: 25px;
  animation: circleBlueMove 2s ease;
  box-shadow: 3px 3px 15px rgba(61, 178, 213, 0.4);
}
 
@keyframes circleBlueMove {
  0% {
    opacity: 0;
    transform: translate(100px, 75px) rotate(90deg);
  }
  100% {
    opacity: 1;
  }
}

.circle.orange { 
  background: linear-gradient(#D53D3D, #D5B83D); 
  position: absolute;
  top: 480px;
  right: 25px;
  animation: circleOrangeMove 2s ease;
  box-shadow: 3px 3px 15px rgba(213, 184, 61, 0.4);
}

@keyframes circleOrangeMove {
  0% {
    opacity: 0;
  }
  35% {
    opacity: 0;
    transform: translate(-100px, -75px) rotate(90deg);
  }
  100% {
    opacity: 1;
  }
}

.square {
  width: 75px;
  height: 75px;
}
 
.square.red {
  background: linear-gradient(135deg, #D53D3D, #D53DC9); 
  position: absolute;
  top: 170px; 
  right: 25px; 
  animation: squareRedMove 2s ease;
  box-shadow: 3px 3px 15px rgba(213, 61, 201, 0.4);
  transform: rotate(45deg);
} 

@keyframes squareRedMove {
  0% {
    opacity: 0;
  }
  20% {
    opacity: 0;
    transform: translate(-100px, 75px) rotate(90deg);
  }
  100% {
    opacity: 1;
  }
}

.triangle svg {  
  width: 125px;
  height: 125px;
  position: absolute;
  top: 450px;
  left: 5px;
  animation: triangleGreendMove 2s ease;
}

@keyframes triangleGreendMove {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 0;
    transform: translate(100px, -75px) rotate(90deg);
  }
  100% {
    opacity: 1;
  }
}
  
  .square.blue {
    top: 30px;
    right: 10px;
    transform: translateX(60px);
  }
  
   .square.blue.in-view {
      transform: rotate(22.5deg) translateX(0px);
  }

}
</style>