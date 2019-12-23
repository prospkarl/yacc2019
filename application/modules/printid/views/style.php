<style media="screen">
@import url('https://fonts.googleapis.com/css?family=Lato');
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* FONTS */


.montserrat{
  font-family: 'Montserrat';
}
body{
  background: grey;
}
.a4 {
  height: 3508px;
  width: 2480px;
  background: #fff;
}
.id-container {
  position: relative;
  height: 1536px;
  width: 1017px;
  display: inline-block;
  margin: 20px;
  background: url(../assets/images/idbg.png);
  background-size: cover;
  padding: 88px;
}
.row{
  display: flex;
}
.w2{
  width: 50%;
}
img.logo {
  width: 100%;
}
img.avatar {
  width: 400px;
  height: 400px;
  object-fit: cover;
  border: 19px solid #eee;
}
.data{
  background: rgba(250,250,250, 0.9);
  height: 150px;
  width: 90%;
  position: relative;
  margin: 0 auto;
}
.data label{
  background: #F45A25;
  color: #fff;
  position: absolute;
  left: 50%;
  padding: 1px 1em;
  font-size: 30px;
  bottom: 0;
  transform: translate3d(-50%, 0, 10px);
  letter-spacing: 2px;
  font-weight: bold;
}
.data p{
  text-transform: uppercase;
  font-weight: 900;
  text-align: center;
  font-size: 55px;
  margin: 26px 0;
}

.bottom {
  width: 150%;
  position: absolute;
  bottom: 125px;
  display: block;
  left: 49.5%;
  text-align: center;
  transform: translate3d(-50%, 0, 0);
}

.bottom p{
  font-size: 25px;
  margin: 1em 10px;
  color: #fff;
  font-weight: bold;
  display: inline-block;
  width: 407px;
}

.row.footer .row {
    width: 415px;
    text-align: center;
    display: flex;
}

.footer{
  justify-content: center;
  margin-top: 20px;
  width: 100%;
  position: absolute;
  bottom: 30px;
  left: 55%;
  transform: translate3d(-50%, 0, 0);
}

.footer p{
  font-size: 30px;
  margin: 0em 20px 0 10px;
  letter-spacing: 1;
  color: #fff;
  font-weight: bold;
}

</style>
