<?php
	include_once('./_common.php');
$g5['title'] = '보건 및 안전';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>


<!-----style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:50px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style------>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<!--------link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"------->


<style>
	.fc_pointer {color:#BC0000; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto; font-family:georgia; font-size:1.2em;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

	.vision_type5 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type5:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type5 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type5 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type5 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type5 .vision_area ul {margin:0; padding:0; }
	.vision_type5 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; }
    
	.vision_type5 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}
	.vision_type5 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#005bab;}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#36b1d4;}
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#f48025;}
    .vision_type5 .vision_area:nth-child(7) ul li .i_box {background:#339999;}
    
    
    
	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type5 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
    
    
     
	.partner_type2 .con_area .txtArea ul li{margin-top:15px;}
	.partner_type2 .con_area .txtArea ul li:first-child{margin-top:0}
	.partner_type2 .con_area .txtArea ul li span{font-weight:700; margin-right:10px; }
	.partner_type2 .con_area .txtArea ul li p{display:inline-block; }
    
    
    /* (주)아이지씨인증원 사업영역 시작  */	
	.partner_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.partner_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.partner_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.partner_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}

	.partner_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.partner_type2 .con_box:after{content:""; display:block; clear:both;}
	.partner_type2 .con_box ul { padding:0; margin:0; }
	.partner_type2 .con_box ul li {float:left; width:50%; list-style:none; margin:10px 0; }
	.partner_type2 .con_box ul li p{display:table; width:100%; }
	.partner_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.partner_type2 .con_box ul li p > em{ width:30px; }
	.partner_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.partner_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}
    /* (주)아이지씨인증원 사업영역 종료  */
    
	@media screen and (max-width:768px){
		
		.content_wrap{width:96%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		.vision_type5 .vision_area h2.title { font-size:1.5em; }
		.vision_type5 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type5 .vision_area ul li {width:100%;}
		.vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
        
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 사업영역, 우리가 제공하는 서비스 모바일 View */
	}

</style>


<div class="content_wrap">
	<section class="page_title">
		<h1 class="sub_tit">OHSAS 18001<span class="fc_pointer">  심사원 교육</span> </h1>
		<h2 class="sub_txt">OHSAS 18001은 안전보건경영시스템으로, <br>
		모든 리스크 관리 측면 미 법규 준수를 포함한
		보건 및 안전의 효율적 관리를 위한 프레임워크를 제공</h2>
	</section>
	<section class="vision_type5">
	
		<div class="vision_area">
		<h2 class="title">OHSAS 18001 교육 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_ohsas1800_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt" style="line-height:332px;">
					<span style="text-align:justify;text-justify:inter-word;">
						신뢰성을 얻기 위하여, 인정받은 인증원은 적격성을 갖춘 심사원을 필요로 합니다. 경쟁력과 능력을 갖추기 위하여 기업과 산업체는 적격성을 갖춘 심사원을 필요로 합니다. OHSAS 경영 시스템 심사원 인증 프로그램 (OHSAS 18001 프로그램)의 목적은 이 프로그램을 통해 인증 받은 심사원이 적격하며, 인증원과 기업 및 산업 분야에 신뢰성을 제공하기 위함입니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. OHSAS 교육 프로그램은 BS OHSAS 18001 시리즈 규격을 기본으로 하고 있고, 심사 가이던스 규격 ISO 19011:2018에 근간을 두고 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">OHSAS 18001이란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_ohsas1800_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt" style="line-height:332px;">
					<span style="text-align:justify;text-justify: inter-word;">
						OHSAS 18001은 안전보건경영시스템으로, 모든 리스크 관리 측면 미 법규 준수를 포함한 보건 및 안전의 효율적 관리를 위한 프레임워크를 제공합니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						귀사의 조직에 필요한 정책 절차 및 통제를 통해 국제적으로 인정된 모범 사례에 부합하는 최상의 근로 조건 및 근로 환경 상의 건강과 안전을 달성할 수 있도록 지원합니다. OHSAS 18001이 2021년 3월 만료됨에 따라, ISO 45001로 인증이 전환되어야 합니다.
						<span>
						OHSAS 18001이 2021년 3월 만료됨에 따라, ISO 45001로 인증이 전환되어야 합니다.
					</span>
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">OHSAS 18001의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_ohsas1800_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt" style="line-height:332px;">
					<span style="text-align:justify;text-justify: inter-word;">
						OHSAS 18001은 품질, 환경 및 기타 경영시스템과 더불어 핵심적인 경영시스템 중 하나입니다. 조직 전체에 최적의 작업 환경을 만들어 위험요소를 파악하고 이를 제대로 통제할 수 있도록 관리할 수 있습니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						이는 작업장에서의 부상을 예방하는 동시에 기업의 직접 및 간접 비용을 줄이는데 도움을 줍니다. OHSAS 18001을 준수함으로써, 더 안전하고 나은 작업 환경을 통해 기업은 종업원, 공급자 및 고객 등과 같은 이해 관계자들을 위험으로부터 보호할 수 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">OHSAS 18001 교육 내용</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>CHALLENGE</em></div>
				</div>
				<div class="con_txt" style="line-height:332px;">
					<span style="text-align:justify;text-justify: inter-word;">
                       &#10054;  OHSAS 18001 요구사항의 이해<br><br>
                       &#10054;  OHSAS 18001에서 요구하는 산업안전 보건에서의 핵심 요소 이해<br><br>
                       &#10054;  심사 스킬 이해, 심사 절차와 프로세스 접근 방법 습득<br><br>
                       &#10054;  심사 역량을 습득하고 인증심사원 자격 취득<br><br>
                       &#10054;  심사원으로서의 전문성을 갖추어 3자 심사에 활용<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">IGC의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>SOLUTION</em></div>
				</div>
				<div class="con_txt" style="line-height:332px;">
					<span style="text-align:justify;text-justify: inter-word;">
						&#10048; IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 OHSAS 18001 선임심사원 교육 및 인증서 발행에 대한 서비스를 제공합니다. <br><br>
						&#10048; GPC는 인증분야 최상위 기관인 IAF(International Accreditation Forum)로부터 국제적 상호인정 협약을 체결한 미국 소재의 인정기관인 IAS(International Accreditation Service)로부터 ISO/IEC 17024를 기준으로 인정을 받은 개인인증기관입니다.<br><br> 
						&#10048; GPC는 IAF로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관으로, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<!----(주)아이지씨인증원 사업영역 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>우리가 제공하는 서비스</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         		IGC는 OHSAS 18001 및 ISO 45001에 대한 전 과정에 대한 서비스를 제공합니다.<br>
	         			<li><p><em><strong>01</strong></em><span>OHSAS 18001/ISO 45001 시스템 인증</span></p></li>
	         			<li style="float:none;"><p><em><strong>02</strong></em><span>OHSAS 18001/ISO 45001 교육 가능 연수기관 안내</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>OHSAS 18001/ISO 45001 심사원 인증</span></p></li>
	         		</ul>
	         		<br><br>
	         		<ul>
	         		또한, 개인인증기관인 GPC와의 협력을 통해 다음과 같은 여러 분야에 관련된 교육 관련 서비스를 제공하고 있습니다.<br>
	         			<li><p><em><strong>1</strong></em><span>정보 보안</span></p></li>
	         			<li><p><em><strong>2</strong></em><span>보건, 안전 및 환경</span></p></li>
	         			<li><p><em><strong>3</strong></em><span>품질경영시스템</span></p></li>
	         			<li><p><em><strong>4</strong></em><span>경영, 위험 및 규정 준수</span></p></li>
	         			<li><p><em><strong>5</strong></em><span>교통, 통신 및 에너지</span></p></li>
	         			<li><p><em><strong>6</strong></em><span>연속성, 복원력 및 복구</span></p></li>
	         			<li><p><em><strong>7</strong></em><span>IT 보안</span></p></li>
	         			<li><p><em><strong>8</strong></em><span>서비스 관리</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
		
	</section>
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>