<?
	//ȭ���� ����
	$user_division = "user";
	$screen_div = "sub";
	$frame_div = "two";

	//ī�װ� ��Ī & ī�װ� ��ȣ
	$cate_name = "�������Ұ�";
	$cate_num = "1";

	//������ ��Ī & ������ ��ȣ
	$page_name = "������Ȳ";
	$page_num = "5";

	//������ ��Ī & ������ ��ȣ
	$spage_name = "������";
	$spage_num = "1";

	//���� Ȱ��ȭ ����
	$gn_btn = "gn_btn".$cate_num;
	$$gn_btn = "current";
	$ln_btn = "ln_btn".$page_num;
	$$ln_btn = "current";
	$sln_btn = "sln_btn".$spage_num;
	$$sln_btn = "current";
?>
<?include_once("../include/head_sub.php");?>
<?include_once("../include/header.php");?>
<!-- ������ : ���� -->
<div class="organization_area">
	<div class="organization">
		<dl class="executives executives1">
			<dt>��ȸ��������<br />���� �����</dt>
			<dd><span class="blet">�̻�ȸ</span></dd>
		</dl>
		<dl class="executives executives2">
			<dt><a href="#n">����</a></dt>
			<dd>
				<span class="blet">�����ȸ</span>
				<span class="blet">�λ�����ȸ</span>
				<span class="blet">�ڹ�����ȸ</span>
				<span class="blet">�Ĵ�����ȸ</span>
				<span class="blet">�����θ�ȸ</span>
				<span class="blet">������︲�����</span>
			</dd>
		</dl>
		<div class="executives3"><a href="#n">�繫����</a></div>
		<div class="team_area">
			<dl class="team1">
				<dt><a href="#n">�������</a></dt>
				<dd class="first"><a href="#n">
					<span>�ѹ���</span>
					<p>�ѹ�ȸ��</p>
					<p>�Ĵ����</p>
					<p>��������</p>
					<p>ȯ�����</p>
				</a></dd>
<!--
				<dd><a href="#n">
					<span>�ü�<br>������</span>
					<p>- �ü�����<br>- ��������</p>
				</a></dd>
-->
				<dd><a href="#n">
					<span>��ȹ<br>������</span>
					<p>��ȹ���<br>ȫ�����<br>��������<br>�Ŀ�����<br>�ڿ�����</p>
				</a></dd>
				<!--<dd><a href="#n">����<br />���</a></dd>
				<dd><a href="#n">��Ȱ<br />ü����</a></dd>-->
			</dl>
			<dl class="team2">
				<dt><a href="#n">���ġ��������</a></dt>
				<dd><a href="#n">
					<span>��㰡��<br>������</span>
					<p>�������<br>��������<br>������Ȱ<br>����ı���(�ʵ�)<br>�����б� </p>
				</a></dd>
				<dd><a href="#n">
					<span>������<br>������</span>
					<p>�Ƿ���Ȱ<br>�ɸ�ġ�� <br>�Ƶ��ߴ�</p>
				</a></dd>
			</dl>
			<dl class="team2-1">
				<dt><a href="#n">��ȸ����������</a></dt>
				<dd><a href="#n">
					<span>����<br>������</span>
					<p>��ʰ���<br>��������<br>��ȭ����<br>�簢����(������)<br>����ȭ <br>���ض�</p>
				</a></dd>
				<dd><a href="#n">
					<span>�������<br>������</span>
					<p>�������<br>������Ȱ <br>�����pg <br>�����(�߰��) <br>����(��ī��)</p>
				</a></dd>
			</dl>
			<dl class="team3">
				<dt><a href="#n">��Ȱ����������</a></dt>
				<dd class="first"><a href="#n">
					<span>����<br>���</span>
					<p>������</p>
				</a></dd>
				<dd><a href="#n">
					<span>��Ȱ<br>ü����</span>
					<p>��Ȱü��<br>ü�´ܷý�</p>
				</a></dd>
				<dd><a href="#n">
					<span>�ü�<br>������</span>
					<p>�ü�����</p>
				</a></dd>
			</dl>
			<dl class="team4">
				<dt><a href="#n">�ڸ���Ȱ������</a></dt>
				<dd class="first"><a href="#n">
					<span>�ְ�<br>��ȣ<br>����</span>
				</a></dd>
				<dd><a href="#n">
					<span>�ܱ�<br>��ȣ<br>����</span>
				</a></dd>
				<dd><a href="#n">
					<span>Ȱ��<br>����<br>����<br>����</span>
				</a></dd>
			</dl>
		</div>
		<div class="reference">�� �Ⱦ�ü�����ȣ�۾��� ����</div>
	</div>

	<div class="organization_detail_page"><!--// ���� -->
		<h4 class="h4_label">����</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img2.jpg" alt="�繫���� ����ȯ�� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">����ȯ</p>
						<p>���� : ���� </p>
						<p>���� : ������ � �Ѱ� �� ��ܾ���</p>
						<p>���� : whan1202@hanmail.net</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// �繫���� -->
		<h4 class="h4_label">�繫����</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img3.jpg" alt="������� �强���� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�强��</p>
						<p>���� : ����</p>
						<p>���� : ������ ���� �Ѱ� �� ��ܾ���</p>
						<p>���� : zec-key@hanmail.net</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// ������� �Ѱ� -->
		<h4 class="h4_label">������� �Ѱ�</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img21.jpg" alt="������� �Ѱ� �����ξ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ����</p>
						<p>���� : ������� �Ѱ�</p>
						<p>���� : skyhm0129@hanmail.net</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// �ѹ��� -->
		<h4 class="h4_label">�ѹ���</h4>
		<div class="organization_detail">
			<ul>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img6.jpg" alt="������� �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ����</p>
						<p>���� : ȸ��</p>
						<p>���� : 39ssong@naver.com</p>
					</div>
				</li> -->
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img21.jpg" alt="��ȹ������ �����ξ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ����</p>
						<p>���� : �ѹ��� ��� �Ѱ�</p>
						<p>���� : skyhm0129@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img124.jpg" alt="������� ������ �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : �繫��</p>
						<p>���� : ȸ��</p>
						<p>���� : didwl9401@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img139.jpg" alt="������� ������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�����</p>
						<p>���� : �繫��</p>
						<p>���� : ȸ��</p>
						<p>���� : pinkpunkmj@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img143.jpg" alt="���������� ��öȯ�� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">��öȯ</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �λ����</p>
						<p>���� : chamsalang7@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img104.jpg" alt="������� �̹̰澾 �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�̹̰�</p>
						<p>���� : �繫��</p>
						<p>���� : ����</p>
						<p>���� : dksroduwk333@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img8.jpg" alt="������� �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : �����</p>
						<p>���� : �����</p>
						<p>���� : jihye6608@hanmail.net </p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img9.jpg" alt="������� ��â�澾 �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">��â��</p>
						<p>���� : ������</p>
						<p>���� : ������</p>
						<p>���� : chang2260@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img105.jpg" alt="������� �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ������</p>
						<p>���� : ������</p>
						<p>���� : shhj564@hanmail.net </p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img11.jpg" alt="������� ��ȫ�ھ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">��ȫ��</p>
						<p>���� : ��ȭ��</p>
						<p>���� : ȯ���ȭ</p>
						<p>���� : munhj66@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img5.jpg" alt="������� �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������(��������)</p>
						<p>���� : �繫��</p>
						<p>���� : ȸ��</p>
						<p>���� : dbwls7285@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img16.jpg" alt="������� �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : �븮</p>
						<p>���� : �������� �� ����</p>
						<p>���� : jetu70@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img18.jpg" alt="������� �̽¹ξ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�̽¹�</p>
						<p>���� : �������</p>
						<p>���� : �����Ʋ</p>
						<p>���� : minlee20@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img136.jpg" alt="������� ����ȯ�� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">����ȯ</p>
						<p>���� : �������</p>
						<p>���� : �����Ʋ</p>
						<p>���� : mimun0610@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img137.jpg" alt="������� ���Լ��� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">���Լ�</p>
						<p>���� : �������</p>
						<p>���� : �����Ʋ</p>
						<p>���� : dude80@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img19.jpg" alt="������� �ڿ���� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�ڿ��</p>
						<p>���� : ����������</p>
						<p>���� : �����Ʋ</p>
						<p></p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img2_04.jpg" alt="������� ����ȫ�� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">����ȫ</p>
						<p>���� : ����������</p>
						<p>���� : �����Ʋ</p>
						<p></p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img2_01.jpg" alt="������� �ڰ���� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�ڰ��</p>
						<p>���� : ����������</p>
						<p>���� : �����Ʋ</p>
						<p></p>
					</div>
				</li>
			</ul>
		</div>
	</div>


<div class="organization_detail_page"><!--// ��ȹ������ -->
		<h4 class="h4_label">��ȹ������</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img22.jpg" alt="��ȹ������ ����ȭ�� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">����ȭ</p>
						<p>���� : ����</p>
						<p>���� : ��ȹȫ�����, ���������� �Ѱ�</p>
						<p>���� : ckh11021@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img25.jpg" alt="��ȹ������ ���Ƹ��� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">���Ƹ�</p>
						<p>���� : �븮</p>
						<p>���� : �ڿ�������</p>
						<p>���� : areum8961@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img98.jpg" alt="��ȹ������ �����ľ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �Ŀ����</p>
						<p>���� : mr.yu@hanmail.net?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img114.jpg" alt="��ȹ������ �����ƾ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ��ȸ������</p>
						<p>���� : ����������</p>
						<p>���� : haha99987@naver.com</p>
					</div>
				</li>
			</ul>
		</div>
	</div>


	

	<div class="organization_detail_page"><!--// ��Ȱ����� �Ѱ� -->
		<h4 class="h4_label">��Ȱ����� �Ѱ�</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img40.jpg" alt="��㰡�������� �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ����</p>
						<p>���� : ��Ȱ����� �Ѱ�, �θ�ȸ �, ��������ȸ, Ȯ����ȸ��</p>
						<p>���� : sunoa98@naver.com</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// ��㰡�������� -->
		<h4 class="h4_label">��㰡��������</h4>
		<div class="organization_detail">
			<ul>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img41.jpg" alt="��㰡�������� ������ �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ����</p>
						<p>���� : ��㰡�������������</p>
						<p>���� : yunicuri@daum.net</p>
					</div>
				</li> -->
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img56.jpg" alt="���������� �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ����</p>
						<p>���� : ���, �����򰡻�� �Ѱ�</p>
						<p>���� : rararahappy@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img_42_n.png" alt="��㰡�������� �����澾 �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ��ȸ������</p>
						<p>���� : ���, �����򰡻��</p>
						<p>���� : abcd111999@naver.com</p>
					</div>
				</li>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img116.jpg" alt="������������ ������ �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : �븮</p>
						<p>���� : ��־Ƶ� �ߴ���Ȱ���</p>
						<p>���� : alsn1127@hanmail.net?</p>
					</div>
				</li> -->
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// ������������ -->
		<h4 class="h4_label">������������(�Ƶ��ߴ޼��� ����)</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img43.jpg" alt="������������ �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ����</p>
						<p>���� : �Ƶ�����ġ��</p>
						<p>���� : miniswing@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img44.jpg" alt="������������ �Ѽ�ȯ�� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�Ѽ�ȯ</p>
						<p>���� : �븮</p>
						<p>���� : ���� ����ġ��, ���߹���ġ��</p>
						<p>���� : coccyx77@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img46.jpg" alt="������������ �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ����ġ���</p>
						<p>���� : ���� ����ġ��</p>
						<p>���� : witch076@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img47.jpg" alt="������������ �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ���ġ���</p>
						<p>���� : ���ġ��</p>
						<p>���� : 7206blue@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img48.jpg" alt="������������ �̽����� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�̽���</p>
						<p>���� : ���ġ���</p>
						<p>���� : ���ġ��</p>
						<p>���� : tortillachip@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img50.jpg" alt="������������ �̼־� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�� ��</p>
						<p>���� : �۾�ġ���</p>
						<p>���� : �Ƶ� �۾�ġ��, ��������ġ��</p>
						<p>���� : green_day11@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img142.bmp" alt="������������ ��Ҵ㾾 �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">��Ҵ�</p>
						<p>���� : �̼�ġ���</p>
						<p>���� : �̼�ġ��</p>
						<p>���� :  hoyayu35@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img52.jpg" alt="������������ �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ����ġ���</p>
						<p>���� : ����ġ��</p>
						<p>���� : positive7175@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img54.jpg" alt="������������ �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : �۾�ġ���</p>
						<p>���� : �����۾�ġ��</p>
						<p>���� : ktsyjj@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img135.png" alt="������������ �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : Ư������</p>
						<p>���� : ������Ȱ���</p>
						<p>���� : cookieluv2@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img113.bmp" alt="������������ �����澾 �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ��ȸ������</p>
						<p>���� : ��־Ƶ� �ߴ���Ȱ���</p>
						<p>���� : dmsrud8610@naver.com?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img134.jpg" alt="������������ �̿����� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�̿���</p>
						<p>���� : ��ȸ������</p>
						<p>���� : ��־Ƶ� �ߴ���Ȱ���</p>
						<p>���� : lyrim0825@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img49.jpg" alt="������������ �ֿ�ȯ�� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�ֿ�ȯ(��������)</p>
						<p>���� : �۾�ġ���</p>
						<p>���� : �Ƶ� �۾�ġ��, ��������ġ��</p>
						<p>���� : choidud88@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img65.jpg" alt="������������ �����ξ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������(��������)</p>
						<p>���� : �븮</p>
						<p>���� : ������Ȱ���</p>
						<p>���� : 2pdnim@hanmail.net?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img45.jpg" alt="������������ �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������(��������)</p>
						<p>���� : ����ġ���</p>
						<p>���� : �Ƶ� ����ġ��</p>
						<p>���� : junghl82@hanmail.net</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	
<div class="organization_detail_page">
</div>
	<div class="organization_detail_page"><!--// ���������� -->
		<h4 class="h4_label">��������(�����Ȱ������ ����)</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img108.jpg" alt="���������� �Ź��羾 �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�Ź���</p>
						<p>���� : ����</p>
						<p>���� : ����������� �Ѱ�</p>
						<p>���� : inter0311@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img42.jpg" alt="��㰡�������� �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : �븮</p>
						<p>���� : �����������</p>
						<p>���� : arimorning@daum.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img57.jpg" alt="���������� �躸�澾 �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�躸��</p>
						<p>���� : ��ȸ������</p>
						<p>���� : ��ȭ�������</p>
						<p>���� : esc9552@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img59.jpg" alt="���������� �̹ο쾾 �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�̹ο�</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �����������</p>
						<p>���� : alsdn6023@naver.com?</p>
					</div>
				</li>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img58.jpg" alt="���������� �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : �缭</p>
						<p>���� : �ð��������</p>
						<p>���� : esl-bi@hanmail.net</p>
					</div>
				</li> -->
				
			</ul>
		</div>
	</div>
<div class="organization_detail_page"><!--// ������������� -->
		<h4 class="h4_label">�������������</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img60.jpg" alt="��ȯ���������� �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ����</p>
						<p>���� : �������������� �Ѱ�</p>
						<p>���� : y2eve@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img62.jpg" alt="��ȯ���������� �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : �븮</p>
						<p>���� : �����Ʒ�</p>
						<p>���� : eekfrl07@nate.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img66.jpg" alt="��ȯ���������� ǥ������ �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">ǥ����</p>
						<p>���� : �븮</p>
						<p>���� : �����Ʒ�</p>
						<p>���� : pjh8806@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img68.jpg" alt="��ȯ���������� ����ö�� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">����ö</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �����Ʒ�</p>
						<p>���� : hhsoii13@nate.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img64.jpg" alt="��ȯ���������� �̵����� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�̵���</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �����Ʒ�</p>
						<p>���� : keee1004@nate.com?</p>
					</div>
				</li>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img69.jpg" alt="��ȯ���������� �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �����Ʒ�</p>
						<p>���� : iijihye@naver.com</p>
					</div>
				</li> -->
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img102.jpg" alt="��ȯ���������� �����ƾ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �����Ʒ�</p>
						<p>���� : 7star25@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img128.jpg" alt="��ȯ���������� �ں������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�ں�����</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �����Ʒ�</p>
						<p>���� : ykspbnr5@naver.com</p>
					</div>
				</li>
				<!--<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img129.jpg" alt="��ȯ���������� Ȳ�뼺�� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">Ȳ�뼺</p>
						<p>���� : ��ȸ������</p>
						<p>���� : ��밳��</p>
						<p>���� : maniads8@naver.com</p>
					</div>
				</li>-->
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img103.bmp" alt="��ȯ���������� �����ľ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ��Ȱ����</p>
						<p>���� : ��밳��</p>
						<p>���� : indulge2@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img101.jpg" alt="��ȯ���������� �����ξ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ��Ȱ����</p>
						<p>���� : �����Ʒ�</p>
						<p>���� : wjdxotnr34@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_imgnew_10101.jpg" alt="��ȯ���������� �����ξ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">���ο�</p>
						<p>���� : ��Ȱ����</p>
						<p>���� : �����Ʒ�</p>
						<p>���� : zlxl0622@nate.com</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="organization_detail_page"><!--// ��Ȱ���������� �Ѱ� -->
		<h4 class="h4_label">��Ȱ���������� �Ѱ�</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img26.jpg" alt="���߿�� �̿��Ծ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�̿���</p>
						<p>���� : ����</p>
						<p>���� : ��Ȱ���������� �Ѱ�</p>
						<p>���� : lyk8062@hanmail.net</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// ���߿�� -->
		<h4 class="h4_label">���߿��</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img26.jpg" alt="���߿�� �̿��Ծ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�̿���</p>
						<p>���� : ����</p>
						<p>���� : ������Ȱ, ���߿</p>
						<p>���� : lyk8062@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img121.jpg" alt="���߿�� ��â�Ͼ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">��â��</p>
						<p>���� : ���߿��Ȱ��</p>
						<p>���� : ������Ȱ, ���߿</p>
						<p>���� : ckdgk6003@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img127.jpg" alt="���߿�� �����̾� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ���߿��Ȱ��</p>
						<p>���� : ������Ȱ, ���߿</p>
						<p>���� : juande153@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img130.jpg" alt="���߿�� ��ġ���� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">��ġ��</p>
						<p>���� : ���߿��Ȱ��</p>
						<p>���� : ������Ȱ, ���߿</p>
						<p>���� : qkrclgus8359@naver.com</p>
					</div>
				</li>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img133.jpg" alt="���߿�� �ӹ̼��� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�ӹ̼�</p>
						<p>���� : ���߿��Ȱ��</p>
						<p>���� : ������Ȱ, ���߿</p>
						<p>���� : lms96win@gmail.com</p>
					</div>
				</li> -->
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img30.jpg" alt="���߿�� �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ������</p>
						<p>���� : �ȳ�����ũ ������</p>
						<p>���� : suyeon0825@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img115.jpg" alt="���߿�� �ۺ����� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�ۺ���</p>
						<p>���� : ������</p>
						<p>���� : �ȳ�����ũ ������</p>
						<p>���� : thdqlcsk1510@gmail.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img32.jpg" alt="���߿�� ������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�����</p>
						<p>���� : ������</p>
						<p>���� : ������ Ż�ǽ�</p>
						<p>���� : impcs123@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img33.jpg" alt="���߿�� �۹̽¾� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�۹̽�</p>
						<p>���� : ������</p>
						<p>���� : ������ Ż�ǽ�</p>
						<p>���� : 3217sms@hanmail.net?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img34.jpg" alt="���߿�� �����ƾ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ������</p>
						<p>���� : ������ Ż�ǽ�</p>
						<p>���� : ddn22@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img39.jpg" alt="���߿�� ����ö�� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">����ö</p>
						<p>���� : ������</p>
						<p>���� : ������ Ż�ǽ�</p>
						<p>���� : zxc678910@naver.com</p>
					</div>
				</li>
				<!--<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img35.jpg" alt="���߿�� ��ȫ�⾾ �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">��ȫ��</p>
						<p>���� : ������</p>
						<p>���� : ������ Ż�ǽ�</p>
						<p>���� : </p>
					</div>
				</li>-->
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// ��Ȱü���� -->
		<h4 class="h4_label">��Ȱü����</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img37.jpg" alt="��Ȱü���� �����ƾ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ����</p>
						<p>���� : ü�´ܷý�, ��Ȱü��</p>
						<p>���� : mrgc79@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img2_02.jpg" alt="�ڸ���Ȱ�������� ������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�����</p>
						<p>���� : ��Ȱ���</p>
						<p>���� : ��Ȱü��</p>
						<p>���� : kimseung8@gmail.com</p>
					</div>
				</li>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img38.jpg" alt="��Ȱü���� �����⾾ �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ��Ȱ���</p>
						<p>���� : ü�´ܷý�, ��Ȱü��</p>
						<p>���� : rugbyis@nate.com</p>
					</div>
				</li> -->
				<!--<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img107.jpg" alt="��Ȱü���� Ȳ��� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">Ȳ���</p>
						<p>���� : ��Ȱ���</p>
						<p>���� : ��Ȱü��</p>
						<p>���� : 91kzsw@naver.com</p>
					</div>
				</li>-->
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img131.jpg" alt="��Ȱü���� ������ �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ��Ȱ���</p>
						<p>���� : ��Ȱü��</p>
						<p>���� : dlwlsgml1000@naver.com</p>
					</div>
				</li> -->
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// �ü������� -->
		<h4 class="h4_label">�ü�������</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img12.jpg" alt="������� ���¿뾾 �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">���¿�</p>
						<p>���� : �븮</p>
						<p>���� : �ü�����</p>
						<p>���� : taekim1961@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img13.jpg" alt="������� ��ȸ���� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">��ȸ��</p>
						<p>���� : �ü����</p>
						<p>���� : �ü�����</p>
						<p>���� : yhb5210@naver.com?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img126.jpg" alt="������� �̹��ľ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�̹���</p>
						<p>���� : �ü����</p>
						<p>���� : �ü�����</p>
						<p>���� : bada1976@gmail.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img15.jpg" alt="������� ����� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�����</p>
						<p>���� : �ü����</p>
						<p>���� : �ü�����</p>
						<p>���� : comsman@hanmail.net?</p>
					</div>
				</li>
				
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// �ڸ���Ȱ������ �Ѱ� -->
		<h4 class="h4_label">�ڸ���Ȱ��������</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img78.jpg" alt="�ڸ���Ȱ�������� �����Ǿ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ����</p>
						<p>���� : �ڸ���Ȱ������ �Ѱ�</p>
						<p>���� : jhs6680@hanmail.net</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// �ְ���ȣ���� -->
		<h4 class="h4_label">�ְ���ȣ����</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img72.jpg" alt="�ְ���ȣ���� �Ե��ƾ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�Ե���</p>
						<p>���� : ����</p>
						<p>���� : �ְ���ȣ</p>
						<p>���� : nishigaki@naver.com?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img75.jpg" alt="�ְ���ȣ���� ��ȿ���� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">��ȿ��</p>
						<p>���� : �븮</p>
						<p>���� : �ְ���ȣ</p>
						<p>���� : softrocker018@hanmail.net?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img73.jpg" alt="�ְ���ȣ���� �����ؾ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �ְ���ȣ</p>
						<p>���� : jhyoon1003@naver.com</p>
					</div>
				</li>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img76.jpg" alt="�ְ���ȣ���� �̴�ξ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�̴��</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �ְ���ȣ</p>
						<p>���� : gogocof@naver.com?</p>
					</div>
				</li> -->
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img74.jpg" alt="�ְ���ȣ���� ������ �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �ְ���ȣ</p>
						<p>���� : kdm3049@naver.com</p>
					</div>
				</li>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img100.jpg" alt="�ְ���ȣ���� ����ȭ�� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">����ȭ</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �ְ���ȣ</p>
						<p>���� : dbrtjsghk6@naver.com?</p>
					</div>
				</li> -->
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img122.jpg" alt="�ְ���ȣ���� ���ع��� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">���ع�</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �ְ���ȣ</p>
						<p>���� : kimjb0436@naver.com?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img141.jpg" alt="�ְ���ȣ���� ȫ����� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">ȫ���</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �ְ���ȣ</p>
						<p>���� : hoydw@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img109.jpg" alt="�ְ���ȣ���� ��ô�� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">��ô��</p>
						<p>���� : �������</p>
						<p>���� : �ְ���ȣ ��Ʋ �</p>
						<p>���� : bigkjs10@naver.com?</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// �ܱ⺸ȣ���� -->
		<h4 class="h4_label">�ܱ⺸ȣ����</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img110.jpg" alt="�ܱ⺸ȣ���� ����ȭ�� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">����ȭ</p>
						<p>���� : ����</p>
						<p>���� : �ܱ⺸ȣ ���� �Ѱ�</p>
						<p>���� : woorijkh@hanmail.net?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img80.jpg" alt="�ܱ⺸ȣ���� �������� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : �븮</p>
						<p>���� : �ܱ⺸ȣ</p>
						<p>���� : tymhwan@lycos.co.kr</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img81.jpg" alt="�ܱ⺸ȣ���� �ֿ����� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�ֿ���</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �ܱ⺸ȣ</p>
						<p>���� : say_cheese1@naver.com?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img82.jpg" alt="�ܱ⺸ȣ���� ����� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �ܱ⺸ȣ</p>
						<p>���� : youngun0501@nate.com?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img123.jpg" alt="�ܱ⺸ȣ���� ��ȣ���� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">��ȣ��</p>
						<p>���� : ��ȸ������</p>
						<p>���� : �ܱ⺸ȣ</p>
						<p>���� : ccgm@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img111.jpg" alt="�ܱ⺸ȣ���� �Ӵ뼺�� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�Ӵ뼺</p>
						<p>���� : ��Ȱ������</p>
						<p>���� : �ܱ⺸ȣ</p>
						<p>���� : myladder@naver.com?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img112.jpg" alt="�ܱ⺸ȣ���� �ο��þ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">�ο���</p>
						<p>���� : ��Ȱ������</p>
						<p>���� : �ܱ⺸ȣ</p>
						<p>���� : myyoun23@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img118.jpg" alt="�ܱ⺸ȣ���� ������ �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ��Ȱ������</p>
						<p>���� : �ܱ⺸ȣ</p>
						<p>���� : andante-21@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img119.jpg" alt="�ܱ⺸ȣ���� ��̼��� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">��̼�</p>
						<p>���� : ��Ȱ������</p>
						<p>���� : �ܱ⺸ȣ</p>
						<p>���� : meesook921@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img132.jpg" alt="�ܱ⺸ȣ���� �����̾� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">������</p>
						<p>���� : ��Ȱ������</p>
						<p>���� : �ܱ⺸ȣ</p>
						<p>���� : house2348@naver.com</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="organization_detail_page"><!--// �ܱ⺸ȣ���� -->
		<h4 class="h4_label">Ȱ��������������</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img138.jpg" alt="���������� ���ƷҾ� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">���Ʒ�</p>
						<p>���� : ����</p>
						<p>���� : Ȱ��������� �Ѱ�</p>
						<p>���� : gwakarom@daum.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img87.jpg" alt="��ȸ���񽺼��� ���ֿ��� �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">���ֿ�</p>
						<p>���� : ��ȸ������</p>
						<p>���� : Ȱ���������</p>
						<p>���� : dream-young@naver.com?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img120.jpg" alt="��ȸ���񽺼��� ������ �����Դϴ�." /></p>
					<div class="detail">
						<p class="name">����</p>
						<p>���� : ��ȸ������</p>
						<p>���� : Ȱ���������</p>
						<p>���� : anjin315@naver.com</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<script type="text/javascript">
		$(function(){
			var clickNum;

			$(".organization a").click(function(){
				clickNum = $(".organization a").index($(this));

				$(".organization_detail_page").hide();
				$(".organization_detail_page").eq(clickNum).fadeIn('fast');
			});
		});
	</script>
</div>
<!-- ������ : ���� -->
<?include_once("../include/footer.php");?>
<?include_once("../_tail.php");?>