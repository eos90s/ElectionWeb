<style>
@keyframes fadeInLeftBig {0% {opacity: 0;transform: translateX(-2000px);}100% {opacity: 1;transform: translateX(0px);}}
.fadeInLeftBig {animation-name: fadeInLeftBig;}
.animated {animation-duration: 1s;animation-fill-mode: both;}
@keyframes fadeInRightBig {0% {opacity: 0;transform: translateX(2000px);}100% {opacity: 1;transform: translateX(0px);}}
.fadeInRightBig {animation-name: fadeInRightBig;}
.banner-bottom-left1, .about-left1 { border: 4px double #a5a5a5;padding: 2em; position: relative;}
.banner-bottom-left1 h1, .about-left1 h3 {border-bottom: 1px solid #cecece;color: #1f2027;font-size: 2.5em;letter-spacing: 5px; margin: 0;padding-bottom: 0.5em;text-align: center;}
.banner-bottom-left1 p {color: #999;font-size: 14px;line-height: 2.4em;margin: 1em 0 2em;}
.banner-bottom-left1 p span {color: #44a790; display: block; font-size: 1.2em; margin-bottom: 1em;}

.banner-bottom-left2, .about-left1 { border: 4px double #a5a5a5;padding: 2em; position: relative;}
.banner-bottom-left2 h1, .about-left1 h3 {border-bottom: 1px solid #cecece;color: #1f2027;font-size: 2.5em;letter-spacing: 5px; margin: 0;padding-bottom: 0.5em;text-align: center;}
.banner-bottom-left2 p {color: #999;font-size: 18px;line-height: 4.4em;margin: 1em 0 2em;}
.banner-bottom-left2 p span {color: #44a790; display: block; font-size: 1.2em; margin-bottom: 1em;}
.home-txt-section{
    background-color: #fafafa;
    border-bottom: 1px solid #eaeaea;
    border-top: 1px solid #eaeaea;    margin: 0;
    padding: 70px 0 70px;
    width: 100%; 
}

</style>
<!-- wallstreet Blog Section ---->
<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
 if($current_options['txt_section_enabled'] == true) { ?>	
<div class="home-txt-section">
    <div class="container">
<!--	<div class="row">
		<div class="section_heading_title">
		<?php if($current_options['home_blog_heading']) { ?>
			<h1><?php echo $current_options['home_blog_heading']; ?></h1>
		<?php } ?>
		<?php if($current_options['home_blog_description']) { ?>
			<div class="pagetitle-separator">
				<div class="pagetitle-separator-border">
					<div class="pagetitle-separator-box"></div>
				</div>
			</div>
			<p><?php echo $current_options['home_blog_description']; ?></p>
		<?php } ?>
		</div>
	</div>-->
	<div class="row">
            <div data-wow-delay="500ms" data-wow-duration="1000ms" class="col-md-6 banner-bottom-left animated wow fadeInRightBig animated" style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInRightBig;">
                <div class="banner-bottom-left1">
                        <h1>竞选宣言</h1>
                        <p>
我们人微，因为大佬遥不可及；<br/>
我们言轻，因为区块链的世界实在太热闹；<br/>
我们势单，因为四周只有陌生的面孔；<br/>
我们力薄，因为资本的眼中没有我们的存在；<br/>
我们一直在被代表，似乎这就是我们存在的唯一意义；<br/>
<span>看到EOS，平凡的我们内心突然被点燃，此刻我们发出自己的声音：</span>
我们人微，但我们是这个世界的基石；<br/>
我们言轻，但我们有着自己的见解；<br/>
我们势单，但我们才是构成这个世界的主体；<br/>
我们力薄，但叠加在一起谁敢忽视我们的力量；<br/>
我们一直在被代表，但我们这一次希望能代表我们自己；<br/>
我们是年轻的草根，但我们要证明这是谁的时代；<br/>
<span>我们是EOS90后，这就是我们的竞选宣言！</span>
        </p>
                </div>
            </div>
            <div data-wow-delay="500ms" data-wow-duration="1000ms" class="col-md-6 banner-bottom-right animated wow fadeInLeftBig animated" style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInLeftBig;">
                <div class="banner-bottom-left2">
                <h1>价值观.愿景</h1>
                <p>
1，EOS用户草根利益维护者。<br/>
2，独立决策。（独立团队，不受控于资本，不受控于他人）<br/>
3，诚信。不撒谎，不作恶。<br/>
4，向年轻人普及EOS区块链知识。<br/>
5，为开发者与投资者搭建沟通平台，促进区块链经济组织建立。<br/>
                    
                </p>
                </div>
            </div>
            
            
	</div>
    </div>
</div><!-- /wallstreet Blog Section ---->
<?php } ?>