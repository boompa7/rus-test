<?php
	include_once('./_common.php');
$g5['title'] = 'ISO 27799: 2016 / 교육';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#36b1d4;}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#36b1d4;}
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:##f48025;}
    .vision_type5 .vision_area:nth-child(7) ul li .i_box {background:##339999;}
    
    
    
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
		.vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:50px 0; }
		.vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:30px 0; margin:0;}
		.vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
	}

</style>

<div class="content_wrap">


	<section class="page_title">
		<h1 class="sub_tit">ISO 27799: 2016 <span class="fc_pointer">심사원 교육</span> </h1>
		<h2 class="sub_txt">Information Security_ ISO 27799: 2016 의료정보보호시스템</h2>
	</section>
	<section class="vision_type5">

		<div class="vision_area">
		<h2 class="title">ISO 27799: 2016이란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_27799_2016_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						헬스케어 산업 및 고유한 운영 환경에서 근무하는 모든 사람의 개인 건강 데이터의 기밀성, 무결성 및 가용성을 최상으로 보호하는 방법에 대한 지침을 제공하는 국제 표준입니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						구체적으로는 의료기관 내 진료 및 처방기록, 검진결과 등 환자의 민감한 의료 및 개인 데이터를 적법하고 안전하게 관리할 수 있는 정보보호 관리 체계 인증입니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						이 규격은 다음 사항들에 도움을 줍니다<br><br>

                        &#10022; 데이터 액세스 제어 및 액세스 권한 관리<br><br>
                        &#10022; 암호키 관리 및 보<br><br>
                        &#10022; 보안 위협을 방지하기 위해 건강 기록을 보호하고 모니터<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">ISO 27799: 2016 교육의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_27799_2016_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO27799 : 2016 교육은 개인 건강 정보를 보호하기 위한 기본적인 지침을 제공하기에 해당 분야에 종사하는 인원에게는 필수적입니다. 
						
						해당 표준의 이점은 크기, 유형 또는 복잡성에 관계없이 모든 의료기관에서 유효하다는 점입니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
                        의료 기관에는 매우 민감하고 취약한 정보 시스템 및 정보 자산을 보유하고 있습니다. ISO 27799 표준은 이러한 조직이 처리하는 개인 정보를 안전하게 관리하는 데 큰 도움이 될 것입니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">기대 효과</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_27799_2016_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						품질 경영 시스템 인증 및 심사 스페셜리스트 - 일반적으로 의료기기 승인에 있어서 품질 경영 시스템 구현이 필요합니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
		     			IGC인증원은 대부분의 국제 규정 및 표준에 따라 품질 경영 시스템 인증, 감사 및 공장 심사를 수행하여 고객이 시간 및 비용을 줄이고 통합 검사 및 심사를 받으실 수 있습니다.
					</span>
					<br><br>
					<span style="text-align:justify;text-justify: inter-word;">
					<sapn style="font-weight:bold;">&#10050; 최상의 솔루션 제공</sapn><br>
				       IGC인증원은 국제 표준 및 규정에 따라 주요 의료기기 시장 진입에 필요한 시험 서비스를 제공합니다.
				       <br><br>
				    <sapn style="font-weight:bold;">&#10050; 전문집단과의 파트너쉽</sapn><br>
				       IGC인증원은 오랜 기간 의료기기에 대한 기술 및 규제에 관한 전문지식을 축적해 왔으며, 글로벌 제조사에서부터 지역 연구소에 이르기까지 다양한 조직으로부터 신뢰를 받고 있습니다.
				    </span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">IGC인증원의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>SOLUTIONS</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						&#10049; IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 27799: 2016 선임심사원 교육 및 인증서 발행에 대한 서비스를 제공합니다. <br><br>
						&#10049; GPC는 인증분야 최상위 기관인 IAF(International Accreditation Forum)로부터 국제적 상호인정 협약을 체결한 미국 소재의 인정기관인 IAS(International Accreditation Service)로부터 ISO/IEC 17024를 기준으로 인정을 받은 개인인증 기관입니다. <br><br>
						&#10049; GPC는 IAF로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관으로, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
				    <span style="font-weight:bold">&#8280; IAF로부터 인정받은 공식 인증서</span>
                        가장 널리 쓰이는 규격인 ISO 9001/ ISO 14001/ ISO 22000/ ISO 13485/ OSHAS 18001에 대해 IAF로부터의 인정을 받은 공식 인증서가 발행됩니다.<br><br>
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
				    <span style="font-weight:bold">&#8280; IPC로부터 인정받은 국내 유일의 연수기관 지정기관</span>
                        전 세계 수 십여 개 회원국의 신뢰를 받는 IPC의 인정을 획득한 국내 유일의 연수기관 지정가능 기관입니다. 이는 유능한 심사원 양성의 기틀을 제공할 것입니다.
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
	         		<span style="font-weight:bold;">하기 분야 관련 연수기관 연계</span><br><br>
	         			<li><p><em><strong>01</strong></em><span>정보보안</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>보건,안전 및 환경</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>품질경영 시스템</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>경영, 위험 및 규정 준수</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>교통, 통신 및 에너지</span></p></li>
	         			<li><p><em><strong>06</strong></em><span>연속성, 복원력 및 복구</span></p></li>
	         			<li><p><em><strong>07</strong></em><span>IT보안</span></p></li>
	         			<li><p><em><strong>08</strong></em><span>서비스관리<br><br><br></span></p></li>
	         			<br>
	         		<span style="font-weight:bold;">긴밀한 협력관계에 있는 IGC ACADEMY 연계</span><br>
                    해당 규격에 대한 일정 이상의 수요 발생 시, GPC와 긴밀한 협력관계에 있는 IGC ACADEMY에서 자체적으로 교육 개최 서비스를 제공합니다.
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
		
	</section>
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>