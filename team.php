<style>
@import url('https://fonts.googleapis.com/css?family=Exo:700');
@import url('https://fonts.googleapis.com/css?family=Abel');
 
 
.card1 {
  text-align:center;
  position: absolute;
  
  width: 250px;
  height: 350px;
  margin-top: 10px;
  margin-bottom: 10px;
  background: linear-gradient(rgb(225,150,58),rgb(227,144,91));
  transition:1.6s;
  
  transform: rotatex(75deg) translatey(-200px) translatez(-100px);
  box-shadow: 0px 20px 60px rgba(0,0,0, 0.5);
}
.card1:hover{
  transform: rotatex(0deg);
  transform: rotatez(0deg);
  transition:1.6s;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
}
.card1 img{
  transform: translateY(5px);
  width:200px;
  height:120px;
} 

.card2 {
  text-align:center;
  position: absolute;
  
  width: 250px;
  height: 350px;
  margin-top: 10px;
  margin-bottom: 10px;
  background: linear-gradient(rgb(93,94,170),rgb(93,66,103));
  animation: animate 1s linear infinite;
  transition:1.6s;
  
  transform: rotatex(75deg) translatey(-200px) translatez(-100px);
  box-shadow: 0px 20px 60px rgba(0, 0, 0, 0.5);
}
.card2:hover{
   transform: rotatex(0deg);
  transition:1.6s;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
}
.card2 img{
  transform: translateY(15px);
  width:180px;
  height:150px;
}
.card3 {
  text-align:center;
  position: absolute;
  
  width: 250px;
  height: 350px;
  margin-top: 10px;
  margin-bottom: 10px;
  background: linear-gradient(#ff5252, #b33939);
  transition:1.6s;
  
  transform: rotatex(75deg) translatey(-200px) translatez(-100px);
  box-shadow: 0px 20px 60px rgba(0, 0, 0, 0.5);
}
.card3:hover{
   transform: rotatex(0deg);
  transition:1.6s;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
}
.card3 img{
  transform: translateY(15px);
  width:200px;
  height:120px;
}
}
</style>
 

<div class="card1">
  <img src="http://www.pngmart.com/files/5/Pyramids-PNG-HD.png" alt="">
  <h3>Pyramids</h3>
  <p>The Egyptian pyramids are ancient pyramid-shaped masonry structures located in Egypt. As of November 2008, sources cite either 118 or 138 as the number of identified Egyptian pyramids.</p>
</div>

<div class="card2">
  <img src="https://wallazee.global.ssl.fastly.net/images/dynamic/items/383-1024.png" alt="Eiffel Tower">
  <h3>Statue of Liberty</h3>
  <p>The Statue of Liberty is a colossal neoclassical sculpture on Liberty Island in New York Harbor in New York City, in the United States.</p>
</div>

<div class="card3">
  <img src="http://pluspng.com/img-png/download-taj-mahal-png-images-transparent-gallery-advertisement-1185.png" alt="">
  <h3>Taj Mahal</h3>
  <p>The Taj Mahal is an ivory-white marble mausoleum on the south bank of the Yamuna river in the Indian city of Agra. It was commissioned in 1632 by the Mughal emperor.</p>
</div>
 

 