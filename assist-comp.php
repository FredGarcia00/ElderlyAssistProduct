<?

$exitLink = 'https://tidycarcan.com/product/salespage.php?affId='.$_GET['affId'].'&c1='.$_GET['c1'].'&c2='.$_GET['c2'];

?>
<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<? date_default_timezone_set('America/Los_Angeles'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">

<script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/angular.min.js"></script>

<link rel="icon" type="image/png" href="../img/icon.png">

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">



<style type="text/css">
body{
  margin: 0 0 0 0;
  font-family: 'Open Sans', sans-serif;
  background: #d5d4d0;
  padding-top: 15px;
}
a:link,
a:visited{
	text-decoration: inherit;
	color: inherit;
}
a.articleLink:link,
a.articleLink:visited{
  text-decoration: inherit;
	color:#205cc3;
  font-weight: bold;
}
a.articleLink:hover{
  color:#2b75f5;
  text-decoration: underline;
}
.clear{
	clear: both;
}
.addedTop{
  width: 100%;
  height: auto;
  text-align: center;
  color: #333;
  font-size: 17px;
  padding: 4px 0px;
}
#mainBox{
  width: 1600px;
  height: auto;
  background: #fff;
  margin: 0 auto;
  box-shadow: 0px 0px 7px #000;
}
#header{
  width: 100%;
  height: auto;
  margin: 0 auto;
  border-bottom: 2px solid #ccc;
  padding-top: 7px;
  padding-bottom: 7px;
}
#headerInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
}
#logoLeft{
  height: 70px;
  width: auto;
  float: left;
}
#textRight{
  height: 70px;
  width: auto;
  float: right;
  line-height: 70px;
  font-style: italic;
  color: #333;
  font-size: 17px;
}
#titleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#titleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  text-align: center;
  padding-top: 20px;
}
#headline{
  width: 100%;
  height: auto;
  font-size: 34px;
  font-weight: bold;
  color: #222;
}
#author{
  width: 300px;
  height: auto;
  margin: 0 auto;
  font-size: 14px;
  font-weight: bold;
  color: #555;
  margin-top: 15px;
  padding-top: 10px;
  border-top: 1px solid #ccc;
}
#articleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#articleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  padding-top: 35px;
}
#sidebar{
  width: 300px;
  height: auto;
  float: right;
}
.sidebarTitle{
  width: 100%;
  height: auto;
  font-size: 20px;
  text-align: left;
  font-weight: bold;
  color: #333;
  padding-bottom: 10px;
  border-bottom: 2px solid #ccc;
}
.sidebarNative{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top: 15px;
}
.nativeImg{
  width: 45%;
  height: auto;
  float: left;
}
.nativeText{
  width: 52%;
  height: auto;
  float: right;
  font-size: 13px;
  text-align: left;
  color: #444;
}
.nativeText:hover{
  text-decoration: underline;
}


.sidebarImg{
  width: 100%;
  height: auto;
  margin-top: 15px;
}
.sideBarText{
  width: 100%;
  height: auto;
  font-size: 17px;
  text-align: left;
  color: #333;
  margin-top: 10px;
}
#mainContent{
  width: 800px;
  height: auto;
  float: left;
  padding-bottom: 30px;
}
.articleImg{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleImgsmall{
  width: 72%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleSubheader{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 15px;
  font-size: 22px;
  font-weight: bold;
  line-height: 28px;
  color: #17191c;
}
.blockQuote{
  width: calc(90% - 50px);
  height: auto;
  margin: 0 auto;
  border-left: 10px solid #ccc;
  background-color: #f9f9f9;
  background-image: url(../img/blockquote.png);
  background-repeat: no-repeat;
  line-height: 28px;
	padding: 10px 20px 10px 40px;
  margin-bottom: 20px;
}
.articleText{
  width: 100%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleIndent{
  width: 90%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 8px;
  color: #fff;
  font-family: 'Open Sans';
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  background-image: linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%);
  background-repeat: repeat-x;
  border: 1px solid #e67919;
  border-radius: 4px;
}

.commentBreak{
	width:100%;
	border-bottom: 1px solid #198fff;
	margin:0 auto;
	height:80px;
}
#map {
  width: 700px;
  height: 405px
}
#footer{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top:60px;
  background: #5a787c;
}
#footerInner{
  width: 1040px;
  height: auto;
  margin: 0 auto;
  padding: 25px 0px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.linkLine{
  width: 300px;
  height: auto;
  margin: 0 auto;
  padding-top: 15px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.articleSubimg{
  width: 500px;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.imageSub{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
  text-align: center;
  font-size: 16px;
  color: #777;
  font-style: italic;
}
li{
  padding-bottom: 15px;
}
.finalBox{
  width: calc(100% - 42px);
  height: auto;
  margin: 0 auto;
  padding: 30px 20px;
  border: 1px solid #dedede;
  margin-top: 30px;
  margin-bottom: 30px;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 10px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 30px;
  text-align: center;
  background: #63d021;
  border: none;
  outline: none;
}
.articleButton:hover{
  background: #49a511;
}
.updateBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-bottom: 20px;
}
.updateTop{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #459ef7;
  color: #fff;
  padding: 20px 10px;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 700;
}
.updateBot{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #f4f4c3;
  color: #111;
  padding: 20px 10px;
  border-radius: 2px;
  font-size: 18px;
  font-weight: 400;
}
.paperBox{
  width: calc(100% - 50px);
  height: auto;
  margin: 0 auto;
  padding: 25px;
  margin-bottom: 25px;
  background: url(../img/paperbg.jpg);
  background-repeat: repeat;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8);
}
.paperTitle{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 24px;
  font-weight: 700;
  text-align: center;
  padding-bottom: 20px;
}
.paperText{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 18px;
  font-weight: 400;
  text-align: left;
  padding-bottom: 20px;
}
.reviewBox{
  width: calc(100% - 50px);
  height: auto;
  padding: 25px;
  border-bottom: 1px solid #ddd;
}
.namePic{
  width: 34px;
  height: 34px;
  background: #a7a7a7;
  border-radius: 50%;
  float: left;
  position: relative;
  text-align: center;
  color: #fff;
  line-height: 34px;
  font-size: 20px;
}
.nameCheck{
  width: 12px;
  height: 12px;
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 10;
}
.dateRight{
  width: 120px;
  height: auto;
  float: right;
  font-size: 14px;
  color: #777;
}
.reviewHeader{
  width: calc(100% - 184px);
  height: 34px;
  float: left;
  margin-left: 15px;
}
.rh1{
  width: 100%;
  height: 20px;
  text-align: left;
  font-size: 14px;
  color: #777;
  line-height: 20px;
}
.rh2{
  width: 100%;
  height: 14px;
}
.reviewText{
  width: 100%;
  height: auto;
  margin-top: 15px;
  font-size: 16px;
  font-style: italic;
  color: #333;
}


@media screen and (max-width: 1600px) {
  body{
    padding-top: 10px;
  }
  #mainBox{
    width: 100%;
  }
  #headerInner,
  #titleInner,
  #articleInner{
    width: 1250px;
  }
  #mainContent{
    width: 750px;
  }
}

@media screen and (max-width: 1250px) {
  #headerInner,
  #titleInner,
  #articleInner{
    width: 95%;
  }
  .barLeft{
    width: 120px;
    font-size: 15px;
  }
  .barRight{
    width: 170px;
    font-size: 12px;
  }
  .barCenter{
    width: calc(100% - 290px);
    font-size: 11px;
  }
  #mainContent{
    width: 100%;
  }
  #sidebar{
    display: none;
  }
  #footerInner{
    width: 95%;
    font-size: 12px;
    padding: 20px 0px;
  }
  .imgSubheader{
    padding-bottom: 12px;
    font-size: 18px;
    line-height: 24px;
  }
  .articleImgsmall{
    width: 80%;
  }
  .articleSubheader{
    padding-bottom: 12px;
    font-size: 26px;
    line-height: 30px;
  }
  .articleText,
  .articleIndent{
    padding-bottom: 12px;
    font-size: 22px;
    line-height: 32px;
  }
  .articleButton{
    font-size: 24px;
  }
  #footerInner{
    width: 95%;
    font-size: 11px;
    padding: 15px 0px;
  }
  #map{
    transform: scale(0.8);
    margin-left: -80px;
  }
  .updateTop{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 18px;
  }
  .updateBot{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 17px;
  }
  .rh1{
    font-size: 11px;
  }
}
@media screen and (max-width: 750px) {
  .blockQuote{
		font-size:18px;
		line-height:24px;
  }
  .articleSubimg{
    width: 80%;
  }
}
</style>


</head>
<body>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '552365194970012');
fbq('track', 'PageView');
fbq('track', 'ViewContent', {
  content_ids: ['<?php echo $_GET['utm_term'] ?>'],
  content_type: 'product',
  content_category: ['tidycar']
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=552365194970012&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->



<div id="mainBox">
  <div id="header">
    <div id="headerInner">
      <div id="logoLeft">
        <img src="../img/logo1.png" height="100%" />
      </div>
      <div id="textRight">
        Advertisement - Sponsored by TidyCar
      </div>
      <div class="clear"></div>
    </div>
  </div>



  <div id="titleBox">
    <div id="titleInner">
      <div id="headline">
      Give Seniors Their Mobility Back With A Tool So Simple, A Child Can Do It
      </div>
      <div id="author">
        Kurtis Lane | <?=date('l\, F d\, Y',strtotime('-9 days'));?>
      </div>
    </div>
  </div>


  <div id="articleBox">
    <div id="articleInner">
      <div id="sidebar">
        <div class="sidebarTitle">
          Sponsored By:
        </div>
        <div class="sidebarImg">
          <a href="https://about.att.com/pages/5g/how-5g-works.html" target="_blank">
            <img src="../img/attban.jpg" width="100%" />
          </a>
        </div>
        <div class="sidebarImg">
          <a href="https://www.mazdausa.com/vehicles/2020-cx-3" target="_blank">
            <img src="../img/mazdaban.jpg" width="100%" />
          </a>
        </div>
      </div>

      <div id="mainContent">
    <div class="articleImg" style="width:80%">
      <img src="./img/splash.jpg" width="100%" />
     
    </div>
    <div class="articleText">
      <p>The story behind  <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a>  is centered around a young engineer named Kevin, but it starts with the man who inspired the idea in the first place; Kevin’s father. We sat down to interview the family behind this revolutionary product, where we learned a family tragedy led to the creation of a one-of-a-kind solution that has become a go-to item for millions of Americans.</p>

      <p>“My father is one of the most inspiring men I know. He served in the Army during and after Vietnam, and after he retired you would have thought that was a wrap, but not for my dad. After a few months off, he took the test and became a police officer. I remember this like it was yesterday; my older brother was supposed to pick me up after school, but when I stepped outside it was my mother who was waiting for me. You live with a certain understanding when you have a family member in law enforcement, but you never think something’s going to happen to you. Not to your family.”</p>

      <p>Unfortunately, that’s exactly what happened to Kevin.</p>

      <p>“My father was directing traffic around an accident scene when he was struck by a distracted driver. I hopped in the car with my mother and she broke the news to me. I have to tell you, seeing this giant of a man lying down in a hospital bed for weeks was Earth-shattering to me. He fought in the war, I thought. He’ll recover no problem.</p>

      <p>Kevin was wrong.</p>

      <p>Kevin’s father suffered a broken back. The doctors said he was never going to walk again. The police force gave him a medical retirement. Just like that, his days of working were permanently over.</p>

      <div class="blockQuote">
         <i>
         “My father’s not one to take news like that sitting down. Literally, he was up and walking in just a few weeks thanks to physical therapy, but he was in constant pain and would be spending the majority of his life sitting down.” Kevin’s eyes water as he says, “He was becoming more dependent on my mother’s help with everything, especially getting up out of bed and off the couch.” 
		</i>
      </div>


      <p>For Kevin, life went on despite the tragic circumstances. He went to college, became an engineer and took a job at the nuclear power plant near his hometown. He said he felt like he couldn’t move too far away from his parents. He spent a lot of time checking in on them and trying to help out as much as he could. Kevin’s mother eventually developed arthritis—it was getting harder for her to assist her husband on her own.</p>

      <p>“Things were really hitting a low point.” Kevin sighs. “It was almost impossible for her to help him as much as he needed, and that’s when I decided to try to do something about it.”</p>

	<div class="articleImgsmall" style="width:50%">
      <img src="./img/problem.jpg" width="100%" />
      </div>

      <p>“George isn’t a small man,” Kevin’s mother said. “My arthritis flares up so much, it’s really difficult for me to help him up and set him down when he’s got to get up to go to the bathroom, or even if he just wants to go for a walk around the block. I didn’t know how much longer I’d be able to look after him on my own.”</p>


      <p>Kevin is an engineer, so he did what he always does when faced with an impossible problem; try to solve it in the simplest way possible.</p>

      <p>That’s when he designed the <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a>.</p>

      </div>
    <div class="articleSubheader">
        The [Product Name] has started to develop a cult following, and with over 7,000 5-star reviews, it’s easy to see why. Here’s what customers are saying about it:
    </div>
    <div class="reviewBox">
      <div class="namePic">
        I
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Ian L.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        7/2/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      When we saw an ad on TV for this item, my first thought was "what a gimmick". I consulted a physical therapist who recommended the lift. We have a family member who has a fractured leg and is in a brace for 6 weeks. It's hard to sit up in bed and to get up for transfers between couch, chair, etc. It really makes transferring from seat to couch to bed, etc. very easy. One just has to be careful not to pull the person up too much and pull them over with too much momentum. I would buy this again, if we needed another one.
      </div>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        W
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Winston A.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        7/5/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      I could not believe how easy this device is to use. You have the person sitting down grab the two slots on one side and you grab the other two slots. Lean back and as you do, ask the other person to pull on the handle. Walla, you have lifted them very easy without hurting your back. It is wonderful and you can lift them quickly. Great device..I ordered three . Get them while you can. Great gift for those elderly trying to get up out of chair, etc.
      </div>
    </div>
    <div class="reviewBox" style="border-bottom: none;">
      <div class="namePic">
        E
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Elle C.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        7/8/21
    </div>
    <div class="clear"></div>
    <div class="reviewText">
        This item is a must have when it comes to helping a person to stand from sitting on a chair or couch. I needed this for my mother. She has lots of difficulty getting to her feet once she sits down. I have shoulder pain and lifting her is very painful for me. This device helps with the lifting because it distributes the burden of the lifting equally between the parties.
        
    </div>
</div>
<div class="articleSubheader">
    People are even telling their friends and family about [Product Name] on social media…
</div>
<div class="articleImgsmall" style="width:65%">
      <img src="./img/igPost0.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleImgsmall" style="width:65%">
      <img src="./img/igPost1.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleSubheader">
        So What Exactly Is [Product Name] & How Does It Work?
    </div>
    <div class="articleImgsmall">
      <img src="./img/product.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p>The  <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a>  is a simple device made from polypropylene plastic that is durable, lightweight, and easy to clean. The ergonomic, non-slip grip is textured for maximum comfort and user confidence. It’s about the size of a cutting board and weighs one pound, so you can easily carry it in one hand and store it anywhere in your home when not in use.</p>
    </div>

<div class="articleText">
      <p>For the elderly, infirm, or people with back injuries or muscle pain that have difficulty standing on their own, [Product Name] offers an easy solution to help a person up to 400lbs stand up with a natural motion that enables the correct standing posture intuitively—you don’t even realize your body naturally does it. One person holds one side, the person sitting simply grabs onto the other side, and the weight transfers seamlessly from one person to the other via leverage…which allows the person to stand without straining themselves. The weight doesn’t just transfer to the person lifting, either—thanks to the leverage on the [Product Name] itself, the weight is significantly reduced, allowing the lifter to avoid the stress of helping the person up.</p>

      <p> <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> helps you get around the pain and discomfort of standing or sitting because it allows you to brace yourself with the other person’s counterweight, keeping your body in a comfortable position as you sit or stand.</p>

      <p>People of all ages and pain levels are finally sitting and standing the way they used to with non-invasive assistance offered by [Product Name].</p>
    </div>

    <div class="articleSubheader">
    Here are some of the main benefits:
    </div>
    <div class="articleText">
     <ul>
         <li>	Gives you perfect posture & body alignment when sitting/standing</li>
         <li>	Prevents additional back, neck and shoulder pain associated with sitting/standing</li>
         <li>	Supports up to a 400lb person with ease</li>
         <li>	Portable, lightweight, and intuitive use</li>
         <li>	Prevents discomfort and further aggravating of injury</li>
     </ul>
    </div>
  
    <div class="articleSubheader">
    I Tried The [Product Name]…Here’s What I Found
    </div>
    <div class="articleText">
      <p>After I did the interview with Kevin and his family, I was moved. I thought I was just going to get the story on how a small town engineer developed an incredibly useful product that was the talk of the internet this year, but Kevin’s story really hit home. My own father has struggled with his weight for years, and he’s had a hard time getting around for the past decade. I knew he would benefit from using it, but I wanted to see it in action for myself.</p>

      <p>I ordered a  <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a>  from Kevin’s website. 2 days later, it arrived, and I decided to put it through some tests.</p>
   
      <div class="articleImg"  style="width:70%;">
        <img src="./img/unboxing.jpg" width="100%" />
    </div>
    <ul>
        <li>Thursday nights my family gets together at my parent’s house for dinner. I brought the [Product Name] with me, and I had my 7 year old daughter Ellie try it. My father weighs just over 300 pounds, and my daughter’s fifty pounds soaking wet. She could never help my father get off the couch without the [Product Name], but I kid you not, this kid was able to get my old man up on his feet like he was light as a feather.</li>
        
        <li>Think about that for a minute. A child was able to help a nearly 300 pound man stand up. That would be absolutely impossible without the <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a>.</li>
      </ul>
      <div class="articleImg" style="width:50%">
        <img src="./img/helping0.jpg" width="100%" />
      </div>
      <ul>
          <li>That next weekend I visiting my buddy Eric’s house. He was in a motorcycle accident last year, and he’s got permanent nerve damage in his neck, shoulders and back. It flares up anytime he moves, and when I showed him the [Product Name], he was skeptical but gave it a try. “I thought the thing was weird,” Eric said, “but that first time I tried it, I realized it was the real deal. I’ve had trouble sitting without pain, and I’m not able to stand on my own since the accident. I knew that first time you helped me stand with the [Product Name] I needed to get one for myself. My wife gets real bad carpal tunnel from her job as a court reporter, and she’s able to help me up without any pain in her hands. That’s incredible!”</li>
      </ul>
      <div class="articleImg" style="width:50%">
        <img src="./img/helping.jpg" width="100%" />
      </div>
      <ul>
          <li>I ordered a second [Product Name] and gave it to my grandparents. I showed them how it worked, and to say they were impressed is an understatement. I know people in their 80’s expect to lose some of their independence, but they felt like [Product Name] gave them some of that back. My grandfather has a bad back, grandma has had cerebral palsy, and they were able to help each other up and out of bed and off the couch with nothing but the [Product Name]. It’s probably the most useful gift I ever gave anyone!</li>
      </ul>
      </div>
    <div class="articleSubheader">
    How much does it cost? Is it worth it?
    </div>
    <div class="articleText">
      <p>The <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a>  costs $24.95. Kevin says he keeps the price at just above cost because he wants everyone to benefit from it.</p>

	  <p>“I’m proud of what I’ve created, and I feel strongly that no one should struggle with their mobility. This simple device gives people a tiny bit of their freedom back, and that’s worth a lot. I’ve been fortunate to see how many people say it’s worth it. I’m constantly getting letters from customers who tell me what a difference my [Product Name] has made for them. That’s worth getting this product into as many people’s hands as possible at the lowest price I possibly can.”</p>

      <p>Kevin says he’s able to keep the price low because he doesn’t pay stocking fees at stores—he completely cut out the middle man and sells directly to customers.</p>

      <p>Get yourself a <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> and experience the benefits for yourself! Just like the millions of other Americans who have tried it, you’ll be glad you did!</p>

    </div>

        <div class="commentBreak" style="margin-bottom: 30px;"></div>
        <!-- Load comments -->
        <?
        $commentsUrl= 'http://blackin.top/comments/tidycar.php'; // comments location
        $commentsCh = curl_init();
        $commentsTimeout = 5;
        curl_setopt($commentsCh,CURLOPT_URL,$commentsUrl);
        curl_setopt($commentsCh,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($commentsCh,CURLOPT_CONNECTTIMEOUT,$commentsTimeout);
        $commentsData = curl_exec($commentsCh);
        curl_close($commentsCh);
        echo $commentsData;
        ?>
        <!-- End comments -->







      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>







<!--Footer-->
<div id="footer">
  <div id="footerInner">
    THIS IS AN ADVERTISEMENT AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR CONSUMER PROTECTION UPDATE
    <br /><br />
    MARKETING DISCLOSURE: This website is a market place. As such you should know that the owner has a monetary connection to the product and services advertised on the site. The owner receives payment whenever a qualified lead is referred but that is the extent of it.
    <br /><br />
    ADVERTISING DISCLOSURE: This website and the products & services referred to on the site are advertising marketplaces. This website is an advertisement and not a news publication. Any photographs of persons used on this site are models. The owner of this site and of the products and services referred to on this site only provides a service where consumers can obtain and compare.
    <br /><br />
    © <?=date('Y'); ?> All Rights Reserved.
    <br /><br />
      <a href="../contact.php" class="textLink" target="_blank" style="color: white;">Contact Us</a> -
      <a href="../terms.php" class="textLink" target="_blank" style="color: white;">Terms & Conditions</a> -
      <a href="../privacy.php" class="textLink" target="_blank" style="color: white;">Privacy Policy</a>
    <? include_once('../dmca.php'); ?>
  </div>
</div>
</body>
</html>
