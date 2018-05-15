

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>mylogin</title>
  
  
  
  <link rel='stylesheet prefetch' href='https://tympanus.net/Development/TextInputEffects/css/set2.css'>
<link rel='stylesheet prefetch' href='https://tympanus.net/Development/TextInputEffects/css/set1.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Raleway:200,500,700,800'>
<link rel='stylesheet prefetch' href='https://tympanus.net/Development/TextInputEffects/css/demo.css'>
<link rel='stylesheet prefetch' href='https://tympanus.net/Development/TextInputEffects/css/normalize.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>

      <style>
      html {
  background: #FFA6A6;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
}

header {
  top: 10px !important;
  margin: 0 !important;
  padding: 0 !important;
}

body {
  background: transparent;
}

.container {
  background: #FF3131;
  width: 800px;
  height: 300px;
  border-radius: 10px;
  box-shadow: 0px 7px 31px -2px rgba(0, 0, 0, 0.75);
  overflow: visible;
  position: relative;
}

.container input {
  background: #fff;
}

.input__label-content {
  color: #fff;
}

.input {
  z-index: 666;
}
.input:nth-child(2), .input:nth-child(3) {
  opacity: 0;
}
.input:nth-child(3) {
  top: -140px;
}

.fa-thumbs-up {
  transform: scaleX(-1);
  position: absolute;
  right: -100%;
  font-size: 3.5rem;
  padding-top: 10px;
  opacity: 0;
}

.input-1 {
  background: #EC0505;
}
.input-1 .fa {
  color: #EC0505;
}
.input-1 input {
  color: #EC0505;
}

.input-2 {
  background: #EC6E05;
}
.input-2 .fa {
  color: #EC6E05;
}
.input-2 input {
  color: #EC6E05;
}

.input-3 {
  background: #04BC04;
}
.input-3 .fa {
  color: #04BC04;
}
.input-3 input {
  color: #04BC04;
}

.thanks {
  font-size: 3rem;
  position: relative;
  left: -260px;
  top: 170px;
  color: #fff;
  z-index: 420;
  opacity: 0;
}

.fa-heart {
  font-size: 3rem;
  position: relative;
  right: -550px;
  top: 170px;
  z-index: 200;
  opacity: 0;
  color: #fff;
}

    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >

  <header class="codrops-header">
  <h1>This Way In....</h1>

</header>
<span class="thanks">Thank you !</span>
<i class="fa fa-heart"></i>

<div class="container">
  <section class="content">
    <span class="input input-1 input--jiro">
					<input class="input__field input__field--jiro" type="text" id="input-10">
					<label class="input__label input__label--jiro" for="input-10">
						<span class="input__label-content input__label-content--jiro">Your username goes here</span>
    </label>
    <i class="fa fa-thumbs-up"></i>
    </span>
    <span class="input input-2 input--jiro">
					<input class="input__field input__field--jiro" type="password" id="input-11">
					<label class="input__label input__label--jiro" for="input-11">
						<span class="input__label-content input__label-content--jiro">What about your password ?</span>
    </label>
    <i class="fa fa-thumbs-up"></i>
    </span>
    <!-- <span class="input input-3 input--jiro">
					<input class="input__field input__field--jiro" type="text" id="input-12">
					<label class="input__label input__label--jiro" for="input-12">
						<span class="input__label-content input__label-content--jiro">We also need your email</span>
    </label>
    <i class="fa fa-thumbs-up"></i>
    </span> -->
  </section>
</div>
    <script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>

  <script src='https://tympanus.net/Development/TextInputEffects/js/classie.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js'></script>

  

    <script >
      var $inputs = $('input');
      var username;
      var password;

$('.input-1').on('change', function() {
  var tl = new TimelineLite();
  var $self = $(this);
  tl.to($self.find('.fa'), 0.4, {
    right: '5px',
    opacity: 1,
    ease: Elastic.easeOut
  }).to($(this), 0.4, {
    left: "-450px",
    rotation: -220,
    opacity: 0,
    y: '-100',
    ease: Power1.easeOut
  }).to($self.next(), 0.4, {
    top: "-140px",
    opacity: 1,
    ease: Back.easeOut
  }).to($('.container'), 0.4, {
    backgroundColor: '#FFA153',
    ease: Power1.easeOut
  }, '-=0.4').to($('html'), 0.4, {
    backgroundColor: '#FFCEA6',
    ease: Power1.easeOut
  }, '-=0.4');

  setTimeout(function() {
    $self.next().find('input').focus();
  }, 1200)
  username= document.getElementById("input-10").value;
  console.log(username);

})
$('.input-2').on('change', function() {
  // var tl = new TimelineLite();
  // var $self = $(this);
  // tl.to($self.find('.fa'), 0.4, {
  //   right: '5px',
  //    opacity: 1,
  //   ease: Elastic.easeOut
  // }).to($(this), 0.4, {
  //   left: "450px",
  //   rotation: 255,
  //   opacity: 0,
  //   y: "100",
  //   ease: Power1.easeOut
  // }).to($self.next(), 0.4, {
  //   top: "-=140px",
  //   opacity: 1,
  //   ease: Back.easeOut
  // }).to($('.container'), 0.4, {
  //   backgroundColor: '#48DC48',
  //   ease: Power1.easeOut
  // }, '-=0.4').to($('html'), 0.4, {
  //   backgroundColor: '#9DF39D',
  //   ease: Power1.easeOut
  // }, '-=0.4');
  // setTimeout(function() {
  //   $self.next().find('input').focus();
  // }, 1200)

  password= document.getElementById("input-11").value;
  console.log(password);
  console.log(username);
if(username=="melas" && password=="evans"){
window.location.replace("admin.php?username=melas&password=evans");
}
else{
  alert("Incorrect login details");
  window.location.replace("login.php");
}

})
// $('.input-3').on('change', function() {
//   var tl = new TimelineLite();
//   var $self = $(this);
//   tl.to($self.find('.fa'), 0.4, {
//     right: '5px',
//      opacity: 1,
//     ease: Elastic.easeOut
//   }).to($(this), 0.4, {
//     top: "-=450px",
//     rotation: 255,
//     opacity: 0,
//     y: "-100",
//     ease: Power1.easeOut
//   }).to($('.container'), 0.4, {
//     backgroundColor: '#333333',
//     ease: Power1.easeOut
//   }, '-=0.4').to($('html'), 0.4, {
//     backgroundColor: '#999999',
//     ease: Power1.easeOut
//   }, '-=0.4').to($('.thanks'), 0.4, {
//     left: 200,
//     opacity: 1,
//     ease: Power4.easeOut
//   }).to($('.fa-heart'), 0.4, {
//     right: -210,
//     opacity: 1,
//     ease: Power4.easeOut
//   }, '-=0.4')
// });
      //# sourceURL=pen.js
    </script>



  
  

</body>

</html>
 