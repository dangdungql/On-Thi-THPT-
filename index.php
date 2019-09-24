<?php include("header.php"); ?>
<link rel="stylesheet" type="text/css" href="http://csshake.surge.sh/csshake-slow.min.css">
<content>
	<div class="panelSelect content-item">
		<h2 class="title-panel">Trải nghiệm hay, chạm tay điểm 10!</h2>
		<div class="line-main"></div>
		<div class="container">
			<div class="row">
				<div class="col col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<p class="title-q" style="background: #38A9E5;">CHỌN LỚP</p>
						<div class="form-group selectPanel">
							<select class="form-control selectDown" id="select-class">
								<option value="12" selected="">Lớp 12</option>
								<option value="11">Lớp 11</option>
							<option value="10">Lớp 10</option>
							</select>
						</div>
					</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-4">
					<p class="title-q" style="background: #FF7C76;">CHỌN MÔN</p>
					<div class="form-group selectPanel">
						<select class="form-control selectDown" id="select-subject">
						<option data-class12="on-thi-toan-hoc" data-class11="toan-hoc-lop-11" data-class10="toan-hoc-lop-10" selected="">Toán Học</option>
						<option data-class12="on-thi-vat-ly" data-class11="vat-ly-lop-11" data-class10="vat-ly-lop-10">Vật Lý</option>
						<option data-class12="on-thi-hoa-hoc" data-class11="hoa-hoc-lop-11" data-class10="hoa-hoc-lop-10">Hóa Học</option>
						<option data-class12="on-thi-sinh-hoc" data-class11="on-thi-sinh-hoc" data-class10="on-thi-sinh-hoc">Sinh Học</option>
							<option data-class12="on-thi-tieng-anh" data-class11="tieng-anh-lop-11" data-class10="tieng-anh-lop-10">Tiếng Anh</option>
							<option value="on-thi-toeic">Toeic</option>
						</select>
						</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-4">
					<p class="title-q" style="background: #00A89B;cursor: pointer;" onclick="selectSubject()">VÀO HỌC</p>
				</div>	
				<div class="col-12 text-center">
					<img src="./site/img/banner-icon.png">
				</div>	
				
			</div>		
		</div>
	</div>
	<div class="panelSelect content-item background-gray">
		<div class="container">
			<h2 class="title-panel title-panel-black text-center">Tại sao bạn nên chọn Lize?</h2>
			<div class="line-main"></div>
			<div class="row">
				<div class="slogan-item col-12 col-sm-12 col-md-4 col-lg-4 wow bounceIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;">
					<div class="shake-chunk"><img class="gwt-Image" alt="Học qua video bài giảng" src="./site/img/icon_brain.png"></div>
					<div class="title-center">Khoa Học Nhất</div>
					<div class="des-center">Hệ thống ứng dụng những thành tựu mới nhất của tâm lí học giáo dục và khoa học nghiên cứu về não bộ. Chương trình học được thiết kế để phù hợp nhất cho việc tự học, dành riêng cho từng đối tượng học sinh.</div>
					<!-- <a href="javascript:;">Đọc thêm về thuyết Lãng quên →</a> -->
				</div>

				<div class="slogan-item col-12 col-sm-6 col-md-4 col-lg-4 wow bounceIn" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: bounceIn;">
					<div class="shake-chunk"><img class="gwt-Image" alt="Học qua video bài giảng" src="./site/img/icon_khoa-hoc-nhat.png"></div>
					<div class="title-center">Hiện đại nhất</div>
					<div class="des-center">Học sinh được tự chọn chương trình học phù hợp với năng lực và dễ dàng điều chỉnh chương trình học theo điểm số kỳ vọng. Hệ thống lưu lại toàn bộ lịch sử học tập, tự động phát hiện nhanh các lỗ hổng kiến thức, và đề xuất giải pháp khắc phục cho hiệu quả ngay lập tức.</div>
					<!-- <a href="javascript:;">Đọc thêm về cơ chế phát hiện lỗ hổng kiến thức ... →</a> -->
				</div>

				<div class="slogan-item col-12 col-sm-6 col-md-4 col-lg-4 wow bounceIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">
					<div><img class="gwt-Image" alt="Học qua video bài giảng" src="./site/img/icon_tien-loi-nhat.png"></div>
					<div class="title-center">Thuận tiện nhất</div>
					<div class="des-center">Hệ thống được vận hành trên cả web, wap và app . Ứng dụng Lize trên di động giúp bạn có thể học mọi lúc, mọi nơi, ngay cả khi không có internet.</div>
					<a href="/tin-tuc/cai-dat-ung-dung-5345312751222784" target="_blank">Tải ứng dụng điện thoại khi offline →</a>
				</div>
			</div>
			
		</div>
	</div>
	<div class="background-feedback">
		<div class="container">
			<div class="title-feedback">
				CẢM NHẬN CỦA HỌC VIÊN
			</div>	
		</div>
		<div class="container">
						<!-- lam slide -->
						<div class="row">
				  <section class="lazy slider" data-sizes="50vw">
						<div class="row display-flex-slide-missme">
							<div class="col-lg-6 main-slide-left">
								<div class="container">
									<p>Công ty TNHH Miss Me là công ty liên doanh giữa 3 nước: Singapore – Việt Nam – Đài Loan, được thành lập năm 2017 với mong muốn mang lại một cuộc sống tốt đẹp cho cộng đồng, nơi mọi người thật sự quan tâm đến những giá trị về sức khỏe và làm đẹp từ các sản phẩm đạt tiêu chuẩn cao về chất lượng.</p>
									<p>Hiện nay, Miss Me là đối tác chiến lược của nhiều “công ty xanh” tại thị trường châu Á. Chúng tôi là nhà sản xuất và phân phối độc quyền các dòng sản phẩm chính hãng về chăm sóc, bảo vệ sức khỏe và sắc đẹp tại thị trường Việt Nam.</p>
									<P>Chúng tôi đang sở hữu 2 nhà máy sản xuất đạt chuẩn GMP-WHO, được đặt tại Singapore và Đài Bắc. Nguồn nguyên liệu sạch, đạt chuẩn hữu cơ là điều kiện tối thiểu trước khi đưa vào quy trình sản xuất và đóng gói khép kín, được quản lí nghiêm ngặt.</P>
								</div>
							</div>
							<div class="col-lg-6 main-slide-right text-center">
								<img src="./site/img/img_avatar2.png">
							</div>
						</div>
						<div class="row display-flex-slide-missme">
							<div class="col-lg-6 main-slide-left">
								<div class="container">
									<p>Ngày 26 tháng 01 năm 2018 MISS ME tổ chức đêm nhạc trao quà tết “Xuân Nghĩa Tình” tại TP.Tây Ninh với sự góp mặt của nhiều ca sĩ và khách mời nổi tiếng.</p>
									<p>Hiện nay, Miss Me là đối tác chiến lược của nhiều “công ty xanh” tại thị trường châu Á. Chúng tôi là nhà sản xuất và phân phối độc quyền các dòng sản phẩm chính hãng về chăm sóc, bảo vệ sức khỏe và sắc đẹp tại thị trường Việt Nam.</p>
									<P>Đêm nhạc được tài trợ bởi các doanh nghiệp, doanh nhân nổi tiếng và những mạnh thường quân giàu lòng nhân ái, mong muốn được san sẻ yêu thương với cộng đồng.</P>
									<P class="xemthem"><a href="#">Xem Them >></a></P>
								</div>
							</div>
							<div class="col-lg-6 main-slide-right text-center">
								<img src="./site/img/img_avatar2.png">
							</div>
						</div>
						<div class="row display-flex-slide-missme">
							<div class="col-lg-6 main-slide-left">
								<div class="container">
									<p>Miss Me đồng hành cùng cuộc thi NÉT ĐẸP CÔNG SỞ 2017 với vai trò là nhà tài trợ.</p>
									<p>Đồng hành cùng cuộc thi xuyên suốt từ đầu chương trình đến vòng chung kết, Miss Me hân hạnh được trở thành thương hiệu đại diện cho vòng thi mẫu ảnh của top 16 thí sinh dự thi với sản phẩm xịt khoáng Mistmi Nano Water.</p>
									<P class="xemthem"><a href="#">Xem Them >></a></P>
								</div>
							</div>
							<div class="col-lg-6 main-slide-right text-center">
								<img src="./site/img/img_avatar2.png">
							</div>
						</div>
				  </section>

				  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
				  <script src="./site/slick/slick.js" type="text/javascript" charset="utf-8"></script>
				  <script type="text/javascript">
					    $(document).on('ready', function() {
					      
					      $(".lazy").slick({
					        lazyLoad: 'ondemand', // ondemand progressive anticipated
					        infinite: true,
					        dots:true,
					        autoplay: false,
	               			autoplaySpeed: 3000,
	               			arrows: true,
	               			prevArrow: '<button class="slick-prev btn-left" aria-label="Previous" type="button">Previous</button>',
                			nextArrow: '<button class="slick-next btn-right" aria-label="Next" type="button">Next</button>',
                			fade: true,
					      });
					    });
				  </script>
			</div>
		</div>
	
	</div>
	<div class="panelCategoryLize  panelScroll content-item">
			<div class="container">
				<h2 class="title-panel title-panel-black text-center">Chương trình Ôn thi THPT Quốc gia của Lize có gì?</h2>
				<div class="des-panel">Chỉ là cách học đơn giản và vui vẻ
					nhất mà bạn từng biết đến thôi mà. Cùng điểm qua có gì HOT nhé</div>
				<div class="line-main"></div>
				<div class="aboutFunctionsPanel row">
					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 wow fadeInUp shake-chunk" style="visibility: visible;">
						<img alt="Luyện đề trắc nghiệm chọn lọc" src="./site/img/IconList.png">
						<a href="/luyen-de-tat-ca-0/1">Luyện đề trắc nghiệm chọn lọc</a>
					</div>
					
					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 wow fadeInUp shake-chunk" style="visibility: visible;">
						<img alt="Thách đấu bạn bè cùng chơi" src="./site/img/IconList.png">
						<div>Thách đấu bạn bè cùng chơi</div>
					</div>

					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 wow fadeInUp shake-chunk" style="visibility: visible;">
						<img alt="Tham gia các sự kiện hấp dẫn" src="./site/img/IconList.png">
						<div>Tham gia các sự kiện hấp dẫn</div>
					</div>

					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 wow fadeInUp shake-chunk" style="visibility: visible;">
						<img alt="Tranh tài trên bảng xếp hạng" src="./site/img/IconList.png">
						<div>Tranh tài trên bảng xếp hạng</div>
					</div>
					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 wow fadeInUp shake-chunk" style="visibility: visible;">
						<img alt="Sử dụng offline với ứng dụng di động" src="./site/img/IconList.png">
						<a href="/tin-tuc/cai-dat-ung-dung-5345312751222784">Sử dụng offline với ứng dụng di động</a>
					</div>
					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 wow fadeInUp shake-chunk" style="visibility: visible;">
						<img alt="Được nhắc &amp; theo dõi tiến trình học của mình" src="./site/img/IconList.png">
						<div>Được nhắc &amp; theo dõi tiến trình<br>
							học của mình</div>
					</div>
					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 wow fadeInUp shake-chunk" style="visibility: visible;">
						<img alt="Nhận giải đáp nhanh chóng" src="./site/img/IconList.png">
						<div>Nhận giải đáp nhanh chóng</div>
					</div>
					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 wow fadeInUp shake-chunk" style="visibility: visible;">
						<img alt="Tải thêm nhiều tài liệu miễn phí" src="./site/img/IconList.png">
						<div>Tải thêm nhiều tài liệu miễn phí</div>
					</div>
					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 wow fadeInUp shake-chunk" style="visibility: visible;">
						<img alt="Học qua video bài giảng" src="./site/img/IconList.png">
						<div>Học qua video bài giảng</div>
					</div>
				</div>

				<div class="htmlFunction">Và Trải nghiệm nhiều tính năng trò
					chơi thú vị khác...</div>
			</div>
	</div>
	<div class="topicInfo content-item background-gray">
			<div class="container">
				<h2 class="title-panel title-panel-black text-center">Cùng khám phá các khóa ôn thi THPT Quốc Gia online nổi bật nhé…</h2>
				<div class="line-main"></div>
				<div style="border-bottom: 2px solid white; width: 50px; margin: 10px auto; display: block;"></div>
				<div class="row topicPanel text-center">
					<a onclick="ga('send','event','Ôn thi hóa học','Trang chủ')" href="/on-thi-hoa-hoc" class="topicInfo-item clean col-6 col-sm-6 col-md-2 col-lg-2 wow slideInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInRight;">
						<div class="topicInfo-item-content" style="background-color: #4caf50;">
							<img class="gwt-Image" src="./site/img/icon_chemistry.png">
							<div class="info">
								<div class="title title-font-size">Hoá Học</div>
								<div class="des">9 chuyên đề</div>
							</div>
						</div>

					</a>

					<a onclick="ga('send','event','Ôn thi vật lý','Trang chủ')" href="/on-thi-vat-ly" class="topicInfo-item clean col-6 col-sm-6 col-md-2 col-lg-2 wow slideInRight" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: slideInRight;">
						<div class="topicInfo-item-content" style="background-color: #efca1c;">
							<img class="gwt-Image" src="./site/img/icon_chemistry.png">
							<div class="info">
								<div class="title title-font-size">Vật Lý</div>
								<div class="des">7 chuyên đề</div>
							</div>
						</div>
					</a>

					<a onclick="ga('send','event','Ôn thi sinh học','Trang chủ')" href="/on-thi-sinh-hoc" class="topicInfo-item clean col-6 col-sm-6 col-md-2 col-lg-2 wow slideInRight" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInRight;">
						<div class="topicInfo-item-content" style="background-color: #e91e63;">
							<img class="gwt-Image" src="./site/img/icon_chemistry.png">
							<div class="info">
								<div class="title title-font-size">Sinh Học</div>
								<div class="des">10 chuyên đề</div>
							</div>
						</div>
					</a>

					<a onclick="ga('send','event','Ôn thi tiếng anh','Trang chủ')" href="/on-thi-tieng-anh" class="topicInfo-item clean col-6 col-sm-6 col-md-2 col-lg-2 wow slideInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: slideInRight;">
						<div class="topicInfo-item-content" style="background-color: #ff6634;">
							<img class="gwt-Image" src="./site/img/icon_chemistry.png">
							<div class="info">
								<div class="title title-font-size">Tiếng Anh</div>
								<div class="des">10 chuyên đề</div>
							</div>
						</div>
					</a>
					
					 <a onclick="ga('send','event','Ôn thi toán học','Trang chủ')" href="/on-thi-toan-hoc" class="topicInfo-item clean col-6 col-sm-6 col-md-2 col-lg-2 wow slideInRight" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
						<div class="topicInfo-item-content" style="background-color: #00a99d;">
							<img class="gwt-Image" src="./site/img/icon_chemistry.png">
							<div class="info">
								<div class="title title-font-size">Toán Học</div>
								<div class="des">10 chuyên đề</div>
							</div>
						</div>
					</a>
				</div>
			</div>
	</div>
	<div class="panelSystemInfo content-item progress-animated" id="sys-info">
		<div class="container">
			<h2 class="title-panel title-panel-black text-center">Và hiện giờ bạn có
				thể thỏa thích tương tác với...</h2>
			<div class="line-main"></div>
			<div>
				<div class="statictisItem">
					<div class="contentPanel" style="height: 100px; width: 100px; border-color: #4caf50;">
						<!-- <div class="wow circle"></div> -->
						<div class="wow circle animated" data-value="1" data-size="92" data-thickness="5" data-animation-start-value="0" data-fill="{
							&quot;color&quot;: &quot;rgba(76, 175, 80, .5)&quot;,
							&quot;color&quot;: &quot;#4caf50&quot;
							}" data-reverse="true" style="visibility: visible;"><canvas width="92" height="92"></canvas></div>
						<div class="progressValueHTML">30,000+</div>
					</div>
					<div class="statictisTitleHTML">30,000+ người dùng</div>
				</div>
				<div class="statictisItem">
					<div class="contentPanel" style="height: 100px; width: 100px; border-color: #efca1c;">
						<!-- <div class="circle"></div> -->
						<div class="wow circle animated" data-value="1" data-size="92" data-thickness="5" data-animation-start-value="0" data-fill="{
							&quot;color&quot;: &quot;rgba(239, 202, 28, .5)&quot;,
							&quot;color&quot;: &quot;#efca1c&quot;
							}" data-reverse="true" style="visibility: visible;"><canvas width="92" height="92"></canvas></div>
						<div class="progressValueHTML">60.000+</div>
					</div>
					<div class="statictisTitleHTML">60.000+ câu hỏi</div>
				</div>
				<div class="statictisItem">
					<div class="contentPanel" style="height: 100px; width: 100px; border-color: #e91e63;">
						<!-- <div class="circle"></div> -->
						<div class="wow circle animated" data-value="1" data-size="92" data-thickness="5" data-animation-start-value="0" data-fill="{
							&quot;color&quot;: &quot;rgba(233, 30, 99, .5)&quot;,
							&quot;color&quot;: &quot;#e91e63&quot;
							}" data-reverse="true" style="visibility: visible;"><canvas width="92" height="92"></canvas></div>
						<div class="progressValueHTML">800+</div>
					</div>
					<div class="statictisTitleHTML">800+ bài giảng thuộc 5 môn học với 46 chuyên đề</div>
				</div>
			</div>
		</div>
	</div>
</content>
<script type="text/javascript">
	var initAccountKit = false;
	var currentUser = null;
	jQuery(document).ready(function($) {
		// show lixi 2018
		if(false){
			setTimeout(function(){
				//TODO
				showInfo('Chúc mừng năm mới !<br>Bạn đã được Lize Lì Xì 50xu nhân dịp năm mới<br>Lize chúc bạn một năm mới vui vẻ, hạnh phúc và thành công !');
			}, 1000);
		}
		
		// check user first use lize
		
		firstTimeUseLize(currentUser, function(){
			setTimeout(function(){
				openUpdateUserInfo();
			}, 1000);
		});
		
		$("#btn-fullRegister").click(function(){
			if(!initAccountKit) {
				initAccountKit = true;
				AccountKit_OnInteractive = function(){
					AccountKit.init({
						appId:1494587197507036, 
						state:"{{csrf}}", 
						version:"v1.0"
					  });
				};
				AccountKit_OnInteractive();
			}
		   
				if($("#btn-fullRegister").data('update-facebook')){
					completeRegisterFacebook('#form-register');
				} else {
					fullRegisterWithLize('#form-register');
				}
			
			});
		
		initSelectStyle("#lb-birthyear", "Năm sinh *");
		initSelectStyle("#lb-province", "Tỉnh/Thành phố *)");
		initSelectStyle("#lb-school", "Trường *");
		initSelectStyle("#lb-dreamSchool", "Bạn muốn trở thành sinh viên của trường nào?");
	
		
		
		$('#login-success-modal').on('hidden.bs.modal', function () {
			window.location.reload();
		});
		$('#login-modal').on('hidden.bs.modal', function () {
			if($("#btn-fullRegister").data('update-facebook')){
				window.location.reload();
			}
		});
	});
	var notCompleteUserInfoFromFacebook = null;
	function completeRegisterFacebook(formSelector) {
		var account = $(formSelector + " #tb-reg-account").val();
		var phoneNumber = account;
		var fullName = $(formSelector + " #tb-fullName").val();
		var birthYear = "";
		var province = -1;
		var school = -1;
		var email = "";
		
		console.log('completeRegisterFacebook', email, phoneNumber, fullName, birthYear, province, school);
		
		if(!account){
			$(formSelector + " .form-error").html("Vui lòng nhập số điện thoại!");
			return false;
		}
		if(!validPhone(account, "", "")) {
			$(formSelector + " .form-error").html("Số điện thoại không hợp lệ!");
			return false;
		}
		if(fullName && !checkSpecialCharacter(fullName)) {
			$(formSelector + " .form-error").html("Họ và tên không được chứa kí tự đặc biệt.");
			return false;
		}
		/*
		if(province === '-1') {
			$(formSelector + " .form-error").html('Vui lòng chọn tên thành phố !');
			return false;
		}
		if(school === '-1') {
			$(formSelector + " .form-error").html('Vui lòng chọn tên trường học !');
			return false;
		}
		console.log((birthYear === '-1'));
		if(birthYear === '-1') {
			$(formSelector + " .form-error").html('Vui lòng chọn năm sinh !');
			return false;
		}
		*/
		console.log('notCompleteUserInfo', notCompleteUserInfoFromFacebook);
		var valTemp = Cookies.get('resgisterFromPage');
		if(typeof valTemp !== 'undefined'){
			notCompleteUserInfoFromFacebook.affiliateId = valTemp;
			Cookies.remove('resgisterFromPage');
		}
		var postData = {
			'userId': notCompleteUserInfoFromFacebook.id,
			'name': notCompleteUserInfoFromFacebook.name,
			'gender':notCompleteUserInfoFromFacebook.gender,
			'fullName': fullName,
			'phone' : phoneNumber,
			'birth' : birthYear,
			'province' : province,
			'school' : school,
			'email' : notCompleteUserInfoFromFacebook.email,
			'verifyPhoneNumber': false,
			'affiliateId': notCompleteUserInfoFromFacebook.affiliateId,
			};
		updateStatusBtnLoading($(formSelector + " .buttonLoading"), "run");
		$.post('/completeFacebookRegister',postData, function(data, status){
				updateStatusBtnLoading($(formSelector + " .buttonLoading"), "success");
			if(onUpdateInfoSuccessFacebook(formSelector, data) === 0) {
					ga('send','event','Đăng Nhập Facebook','Đăng ký thành công');
			};
		});
	}
	
	function showPopupLoginSuccess() {
		$("#btn-fullRegister").data('update-facebook', false);
		hideLoginPopup();
		$('#login-success-modal').modal('toggle');
		$('#count-hide').text('3');
		setTimeout(function(){
			$('#count-hide').text('2');
		}, 1500);
		setTimeout(function(){
			$('#count-hide').text('1');
		}, 2500);
		setTimeout(function(){
			$('#count-hide').text('0');
			 $('#login-success-modal').modal('hide');
		}, 3500);
	}
	function hideLoginPopup() {
		$('#login-modal').modal('hide');
	}
	function showLoginPopupNew(msg) {
		$('#login-modal').modal('toggle');
		if(!!msg){
			$('#login-modal #form-login-main .form-error_').html(msg);
		}
		$('.login-popup-panel a:first').tab('show');
	}
	function showSignUpPopup(msg){
		$('#login-modal').modal('toggle');
		if(!!msg){
			$('#login-modal #form-register .form-error_').html(msg);
		}
		$('.login-popup-panel a:last').tab('show');
	}
	function showInfoFacebookToUpdate(fbData) {
		if(!($("#login-modal").data('bs.modal') || {}).isShown){
			$('#login-modal').modal('toggle');
		}
		notCompleteUserInfoFromFacebook = fbData;
		console.log('showInfoFacebookToUpdate', fbData, fbData.mobilePhone);
		var formSelector = "#form-register";
		
		$(formSelector + " #tb-reg-account").val(fbData.mobilePhone);
		addFocus(formSelector + " #tb-reg-account", fbData.mobilePhone);
		
		$(formSelector + " #tb-reg-password").parent().hide();
		
		$(formSelector + " #tb-fullName").val(fbData.fullName);
		addFocus(formSelector + " #tb-fullName", fbData.fullName);
		
		$('.login-popup-panel li').removeClass('active');
		$('.login-popup-content-panel.tab-content .tab-pane').removeClass('active');
		$('.login-popup-panel signUp').addClass('active');
		$('.login-popup-content-panel.tab-content #signUp').addClass('active');
		
		$('.login-popup-panel').hide();
		$('.update-title-panel').show();
		$(formSelector + " .form-error").html("Cập nhật thông tin để hoàn thành đăng ký facebook!!!");
		$("#btn-fullRegister").data('update-facebook', true);
		$("#btn-fullRegister .buttonLoading-text").text('CẬP NHẬT');
		$('#btn-registerFb-2').parent().hide();
		$('.or-text_').hide();
	}
	
	function addFocus(elem, value){
		if(typeof value === 'number' && value >= 0){
			$(elem).parent().addClass('is-focused');
		}
		if(typeof value === 'string' && value.trim().length > 0){
			$(elem).parent().addClass('is-focused');
		}
	}
	
	function openUpdateUserInfo() {
		console.log('openUpdateUserInfo()');
		$('#update-user-info-modal').modal('toggle');
	}
	
	function updateFullInfo(button){
		console.log('currentUser', currentUser);
		var formSelector = "#form-update";
		
		var phoneNumber = $(formSelector + " #tb-phone-update").val();
		var birthYear = $(formSelector + " #lb-birthyear-update option:selected").val();
		var province = $(formSelector + " #lb-province option:selected").val();
		var school = $(formSelector + " #lb-school option:selected").val();
		var email = $(formSelector + " #tb-email-update").val();
		var fullName = $(formSelector + " #tb-fullName-update").val();
		var displayName = fullName;
		var patternEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		
		if(!phoneNumber === "") {
			showInfo("Bạn cần nhập số điện thoại để hoàn tất quá trình đăng ký");
			return false;
		}
		if(!validPhone(phoneNumber, "", "")) {
			$(formSelector + " #tb-phone-update").css("border-color", "red");
			$(formSelector + " #tb-phone-update").css("color", "red");
	// 	    	 setTimeout(function(){
	// 	    		 $(formSelector + " #tb-phone-update").css("border-color", "rgba(147,157,166, 0.6)");
	// 	        	 $(formSelector + " #tb-phone-update").css("color", "#7a7a7a");
	// 	    	 }, 10000);
			 $(formSelector + " #form-msg-update").html("Số điện thoại không hợp lệ.");
			 return false;
		}
		
		if(email === "") {
			$(formSelector + " #tb-email-update").css("color", "red");
	// 		setTimeout(function(){
	// 			$(formSelector + " #tb-email-update").css("border-color", "rgba(147,157,166, 0.6)");
	// 			$(formSelector + " #tb-email-update").css("color", "#7a7a7a");
	// 		}, 10000);
			$(formSelector + " #form-msg-update").html('Bạn chưa cập nhật đầy đủ thông tin!');
			return false;
		}
		if(phoneNumber === ""){
			$(formSelector + " #tb-phone-update").css("border-color", "red");
			$(formSelector + " #tb-phone-update").css("color", "red");
	// 		setTimeout(function(){
	// 			$(formSelector + " #tb-phone-update").css("border-color", "rgba(147,157,166, 0.6)");
	// 			$(formSelector + " #tb-phone-update").css("color", "#7a7a7a");
	// 		}, 10000);
			$(formSelector + " #form-msg-update").html('Bạn chưa cập nhật đầy đủ thông tin!');
			return false;
		}
		if(!email.match(patternEmail)) {
			$(formSelector + " #tb-email-update").css("border-color", "red");
			$(formSelector + " #tb-email-update").css("color", "red");
	// 		setTimeout(function(){
	// 			$(formSelector + " #tb-email-update").css("border-color", "rgba(147,157,166, 0.6)");
	// 			$(formSelector + " #tb-email-update").css("color", "#7a7a7a");
	// 		}, 10000);
			$(formSelector + " #form-msg-update").html('Địa chỉ email không hợp lệ !');
			return false;
		}
		if(fullName === "") {
			$(formSelector + " #form-msg").html('Vui lòng nhập họ tên !');
			return false;
		}
		if(!checkSpecialCharacter(fullName)) {
			$(formSelector + " #form-msg-update").html("Họ và tên không được chứa kí tự đặc biệt !");
			return false;
		}
		if(typeof province === 'undefined' || province === '-1') {
			$(formSelector + " #form-msg-update").html('Vui lòng chọn tên thành phố !');
			return false;
		}
		if(typeof school === 'undefined' ||  school === '-1') {
			$(formSelector + " #form-msg-update").html('Vui lòng chọn tên trường học !');
			return false;
		}
		birthYear = parseInt(birthYear);
		if(birthYear < 1900 || birthYear > 2010) {
			$(formSelector + " #form-msg-update").html('Năm sinh không hợp lệ !');
			return false;
		}
		updateStatusBtnLoading(button, "run");
		var postData = {
			'userId': currentUser.id,
			'account': currentUser.account,
			'password' : currentUser.password,
			'name': (!!currentUser.name && currentUser.name.length > 0 ? currentUser.name : fullName),
			'phone' : phoneNumber,
			'birth' : birthYear,
			'province' : province,
			'school' : school,
			'email' : email,
			'fullName': fullName,
			'targetCareer': "",
			'targetSchool': "",
			'verifyPhoneNumber': false
		};
		console.log('update', postData);
		$.post('/update-userinfo',postData, function(data, status){
			 console.log('on success: ', data);
			 onUpdateInfoSuccess(formSelector, data, 'reload');
		});
	}
	
	function firstTimeUseLize(currentUser, callback){
		
		if(false && true){
			if(!!currentUser && firstTimeUpdatedInfo(currentUser)){
				$.post('/checkfirsttimeuselize', {userId: currentUser.id}, function(data){
					(data == 1) && callback();
				});
			}
		}
	}
	
	function recoveryAccountCoincident(data){
	// 	console.log('recoveryAccountCoincident', data);
		$('#dialog-main').css('z-index', 9999999999);
		showDialog("<span style='color:#00a99d'>Thông báo</span>", "<span style='color:red'>Thông báo số điện thoại của bạn đã được sử dụng để đăng ký trên Lize<br>Khôi phục tài khoản hoặc chọn số điện thoại khác để đăng ký tài khoản</span>", "Khôi phục tài khoản", "Đóng", function (){
			window.location.href="/quen-mat-khau?name=" + data.mobilePhone + "&phone=" + data.mobilePhone;
		}, function(){});
	}
	</script>
<footer></footer>
</body>
</html>
