<?
	//화면의 성격
	$user_division = "user";
	$screen_div = "sub";
	$frame_div = "two";

	//카테고리 명칭 & 카테고리 번호
	$cate_name = "복지관소개";
	$cate_num = "1";

	//페이지 명칭 & 페이지 번호
	$page_name = "권익옹호 안내";
	$page_num = "8";

	//현재 활성화 상태
	$gn_btn = "gn_btn".$cate_num;
	$$gn_btn = "current";
	$ln_btn = "ln_btn".$page_num;
	$$ln_btn = "current";
?>
<?include_once("../include/head_sub.php");?>
<?include_once("../include/header.php");?>
<!-- 컨텐츠 : 시작 -->
<div class="guide_area">
	<h4 class="h4_label">권익옹호 절차안내</h4>
	<div class="common_text">
		안양시수리장애인종합복지관에서는 장애인의 권익증진을 위하여 권익옹호 절차를 안내합니다.<br />
		장애인 차별금지법 및 권리구제 등에 관한 법률 위반사항 등 각종 인권 침해 사례가 있을 시 본인 또는 당사자와 관계된 분들께서<br />
		는 즉각적인 신고를 통해 신속한 권리구제가 이루어질 수 있도록 협조 바랍니다.
	</div>
	<ul class="guide_list">
		<li>
			<span class="img"><img src="<?=$g4[path]?>/images/sub1/guide_icon1.jpg" alt="전화 아이콘입니다." /></span>
			<span class="text">전화/방문<br />/온라인</span>
		</li>
		<li>
			<span class="img"><img src="<?=$g4[path]?>/images/sub1/guide_icon2.jpg" alt="전화 아이콘입니다." /></span>
			<span class="text">상담접수</span>
		</li>
		<li>
			<span class="img"><img src="<?=$g4[path]?>/images/sub1/guide_icon3.jpg" alt="전화 아이콘입니다." /></span>
			<span class="text">조사</span>
		</li>
		<li>
			<span class="img"><img src="<?=$g4[path]?>/images/sub1/guide_icon4.jpg" alt="전화 아이콘입니다." /></span>
			<span class="text">사례회의<br />(전문가집단)</span>
		</li>
		<li>
			<span class="img"><img src="<?=$g4[path]?>/images/sub1/guide_icon5.jpg" alt="전화 아이콘입니다." /></span>
			<span class="text">지도및 조정/<br />국가인권위원회 진정<br />/법률자문 및<br /> 소송지원 </span>
		</li>
		<li>
			<span class="img"><img src="<?=$g4[path]?>/images/sub1/guide_icon6.jpg" alt="전화 아이콘입니다." /></span>
			<span class="text">권리보장 및<br />증진 차별행위<br />중지/원상회복<br />/재발방지</span>
		</li>
	</ul>
	<div class="common_arrow2 mt20 mb60"><span>문의전화</span> : 031-465-7465</div>

	<h4 class="h4_label">권익옹호 개념</h4>
	<div class="common_text mb20">
		권익옹호란 자신 또는 누군가를 위해 큰 소리로 말하는 것이며 누군가가 목소리를 높이도록 하는 모든 일련의 행위를 말한다.
	</div>
	<h5 class="h5_label">사회복지분야에서의 권익옹호 개념 정의</h5>
	<div class="common_list mb25">
		<ul>
			<li>권익옹호의 목적은 사회정의, 권리실현 등 사회복지 실천의 목적과 동일</li>
			<li>권익옹호를 하는 대상은 스스로 자신을 변호하기 어려운 사회적 취약계층, 사회복지 이용자와 동일하게 정의 됨</li>
			<li>권익옹호 활동의 범주는 대상자의 일상생활 지원을 위한 정보제공부터 사회 환경 변화를 위한 입법, 정책활동, 사회행동까지 포괄</li>
		</ul>
	</div>
	<div class="common_box">
		<ul>
			<li>모든 사람은 존중되고 목소리를 낼 권리, 자신의 삶에 영향을 미치는 의사결정에 참여할 권리, 미래에 대한 꿈과 계획을 가질 권리, 동일 지역에 사는 다른사람과 동일한 기회와 기여의 가능성을 가질 권리가 있다는 원칙에 기초</li>
			<li>취약해진 사람을 보호하는 활동 및 사회가 들으려 하지 않는 사람들을 위해 또한 그들과 함께 그들이 자신의 견해를 표현하고 자신의 결정을 할 수 있도록 하는 활동을 의미</li>
		</ul>
	</div>

	<h4 class="h4_label">권익옹호 기본 이념</h4>
	<h5 class="h5_label">장애인의 존엄성과 다양성 존중</h5>
	<div class="common_list mb25">
		<ul>
			<li>이상 속의 인간의 존엄성, 인권은 천부성과 보편성을 기본으로 함. 인간이면 누구나 갖게되는 당연한 권리이며 개인이 가진 정체성 및 특성으로 인해 구분되지 않는 권리</li>
			<li>개인의 정치적, 문화적, 유전적 차이를 있는 그대로 인정하고 받아들임. 장애 역시 하나의 차이로 받아들임</li>
		</ul>
	</div>
	<h5 class="h5_label">장애인이 목소리를 낼 수 있는 권한 강화(역량강화)</h5>
	<div class="common_list mb25">
		<ul>
			<li>역량강화(empowerment)란 변화할 수 있는 힘을 내재화하여 외부 환경에 적극적으로 대처할 수 있도록 하는 것</li>
		</ul>
	</div>
	<h5 class="h5_label">자기결정권의 존중</h5>
	<div class="common_list mb25">
		<ul>
			<li>장애인이 자기결정 능력을 가지고 있는가 하는 것이 아니라, 장애인이 자신의 의지에 따라 주체적인 결정권을 행사할 수 있는 사회적 조건이 갖추어져 있는가, 즉 권리의 존중</li>
		</ul>
	</div>
	<h5 class="h5_label mb70">장애인에 대한 차별과 억압에의 도전을 통한 사회통합</h5>

	<h4 class="h4_label">권익옹호의 원칙</h4>
	<h5 class="h5_label">지적장애인 뿐 아니라 권익옹호가 필요한 모든 사람(아동, 정신장애인, 고령자, 여성, 소수인종 등)을 위한 것이어야 한다. </h5>
	<h5 class="h5_label">옹호이용자가 자신의 견해, 선호, 결정사항을 표현하는 것을 지원한다.</h5>
	<h5 class="h5_label">그들이 선택을 표현하면 그것이 실현되도록 노력한다.</h5>
	<h5 class="h5_label">동등한 권리와 반차별을 위한 투쟁의 일환이다.</h5>
	<h5 class="h5_label">배재된 사람이 지역사회에 포함되도록 격려·지원한다.</h5>
	<h5 class="h5_label">하나의 전형, 하나의 형태만이 있는 것이 아니라 다양한 형태의 노력으로 나타난다.</h5>
	<h5 class="h5_label">옹호인은 이용자의 선택과 결정을 대신하여 말하는 것이지 이용자를 대신하여 선택·결정하지 아니한다.</h5>
	<h5 class="h5_label">옹호인은 이용자의 이해를 따라야 하며, 이용자와 이해가 상충하는 다른 관계의 영향을 받아서는 안된다.</h5>
	<h5 class="h5_label mb70">권익옹호의 “이용자”는 장애인의 보호자나 가족이 아니라 당사자이다.</h5>
	
	<h4 class="h4_label">권익옹호 실천원칙</h4>
	<h5 class="h5_label">목적의 명료성</h5>
	<div class="common_list mb25">
		<ul>
			<li>옹호실천이 서비스 이용자에게 무엇을 제공하는지에 대해 이용자에게 옹호체계의 직원, 다른서비스 기관 및 그 기관의 직원,<br /> 돌봄제공자, 자원활동가, 수탁인(재원 제공자) 등 관련자에게 명확히 알려져야 한다.(옹호가 중재나 조언, 친구 되기와 어떻게 다른지 명확히 해야한다.)</li>
		</ul>
	</div>
	<h5 class="h5_label">독립성</h5>
	<div class="common_list mb25">
		<ul>
			<li>옹호체계는 구조적으로 독립적이어야 하며, 서비스 제공기관 또는 행정기관, 자금 제공자로부터의 독립성 유지와 재정 원천을<br /> 다양화함으로써 자금 제공자의 기준과 평가에서 독립성을 유지해야 한다.</li>
		</ul>
	</div>
	<div class="common_box mb30">
		<ul>
			<li>운영상 독립적이어야 하며, 결제 체계, 업무 관리지침, 노동계약, 실천강령, 업무 규칙등에서 서비스 제공기관,<br /> 행정기관, 또는 자금 제공자로부터 독립성이 보장되어야 한다.</li>
			<li>심리적으로 독립적이어야 함. 옹호체계 내외의 관계로부터 독립적으로 개별 옹호인은 서비스 이용자를 대변할 수<br /> 있어야 함.</li>
		</ul>
	</div>

	<h5 class="h5_label">사람 우선</h5>
	<div class="common_list mb25">
		<ul>
			<li>옹호는 이용자가 자신의 의견을 직접 말할 수 있도록 또는 필요한 경우 그들의 요구를 표명해 줄 그들의 편을 갖도록 지원한다.</li>
		</ul>
	</div>
	<div class="common_box mb30">
		<ul>
			<li>기본적으로는 이용자 당사자의 요구에 따른 지시를 받아야 한다. 그러나 장애인의 역량부족으로 자기 옹호 기술이 제한되는 경우에는 지시에 따르지 않는 옹호 또한 필요하며 이때의 옹호는 인권 민감성에 기초한 것이어야 하고, 이용자와 옹호인의 신뢰 관계에 기초한 것이어야 한다.</li>
		</ul>
	</div>
	<h5 class="h5_label">역량강화</h5>
	<div class="common_list mb25">
		<ul>
			<li>권익옹호는 스스로 자신의 의견을 말할 수 있도록 지원함으로써 역량강화를 증진하는 토대가 된다. 옹호과정에 대한 이용자의<br /> 통제권을 인정해야 한다. 즉, 옹호인의 모집과 선발, 옹호체계의 관리 운영 등에 이용자 당사자가 참여할 수 있는 권리가 확보되어야 한다.</li>
		</ul>
	</div>
	<h5 class="h5_label">동등한 기회</h5>
	<div class="common_list mb25">
		<ul>
			<li>옹호체계는 평등과 차별금지를 실천하기 위한 정책을 문서로 갖추고 있어야하며 이 정책이 서비스 이용자들, 직원, 자원활동가에게 평등하게 적용되도록 해야하며, 옹호체계 내부의 크고 작은 결정에 동등한 기회, 평등과 차별금지 원칙이 실현되도록 해야한다.</li>
		</ul>
	</div>
	<h5 class="h5_label">접근 가능성</h5>
	<div class="common_list mb25">
		<ul>
			<li> 옹호체계의 기능과 역할, 옹호의 목적, 이용 방법과 절차 등을 간단하고 명확하게 널리 알려야 하며, 다양한 종류의 홍보가<br /> 필요하다. (옹호 실천의 이용시간, 이용 장소 등을 융통성 있게 운영하여 접근성을 높여야 한다.)</li>
		</ul>
	</div>
	<h5 class="h5_label">책임성</h5>
	<div class="common_list mb25">
		<ul>
			<li>효과적인 모니터링과 평가 시스템을 갖추어야 하며, 이를 위해 기본적인 서비스 기준, 옹호 과정과 결과에 대한 평가 방법을<br /> 마련해야 한다.(옹호실천의 이용자가 어느 정도 역량 강화되었는지에 대한 평가 체계를 마련해야 한다.)</li>
		</ul>
	</div>
	<h5 class="h5_label">옹호인에 대한 지원</h5>
	<div class="common_list mb25">
		<ul>
			<li>옹호인이 자신의 역할과 관련된 지원을 받고 기술과 경험을 발전시킬 수 있는 기회를 갖도록 하며, 훈련 및 수퍼비전 체계가<br /> 마련되어야 한다.</li>
		</ul>
	</div>
	<h5 class="h5_label">비밀보장</h5>
	<div class="common_list mb25">
		<ul>
			<li>옹호실천의 이용자들이 자신의 이야기를 할 수 있도록 비밀보장에 대해 보증해주어야 한다.</li>
		</ul>
	</div>
	<div class="common_box mb30">
		<ul>
			<li>비밀보장 원칙은 옹호인 개인 뿐 아니라 사례회의 및 수퍼비전 체계 내의 집단적 비밀보장 책임으로 이해되어야 한다.</li>
			<li>비밀보장이 이루어질 수 없는 경우에 대한 사전 고지를 해야한다.</li>
		</ul>
	</div>
	<h5 class="h5_label">이의제기</h5>
	<div class="common_list mb25">
		<ul>
			<li>서비스 과정과 결과에서 이용자의 기대를 충족하지 못할 경우에 대한 이의제기 절차가 명확하게 마련되어 있고 접근 가능하도록<br /> 운영되어야 한다.</li>
		</ul>
	</div>
	<div class="common_box">
		<ul>
			<li>옹호 실천 뿐 아니라 복지관 서비스 전반에 대한 이의제기 과정이 마련되어 있는가에 대한 논의가 필요하다.</li>
		</ul>
	</div>
</div>
<!-- 컨텐츠 : 종료 -->
<?include_once("../include/footer.php");?>
<?include_once("../_tail.php");?>