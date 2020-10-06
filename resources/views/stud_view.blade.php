<!DOCTYPE html>
<html>
<head>
	<title>DHKT</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style type="text/css">
		.modal-header, h4, .close {
		    background-color: #5cb85c;
		    color:white !important;
		    text-align: center;
		    font-size: 30px;
		  }
		.modal-footer {
		    background-color: #f9f9f9;
 		 }
		.dropbtn {
		  background-color: #4CAF50;
		  color: white;
		  padding: 16px;
		  font-size: 16px;
		  border: none;
		  cursor: pointer;
		}

		.dropbtn:hover, .dropbtn:focus {
		  background-color: #3e8e41;
		}

		.dropdown {
		  position: relative;
		  display: inline-block;
		}

		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #f9f9f9;
		  min-width: 160px;
		  overflow: auto;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		}

		.dropdown-content a {
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		}

		.dropdown-content a:hover {background-color: red}

		.show {display:block;}
	</style>
</head>
<body>
	
	<div >
		<img class="float-left ml-5" src="https://upload.wikimedia.org/wikipedia/commons/6/64/Logo_dhktdn.png" height="100" width="8%">
		<div class="float-left pt-1" style="width: 69.8% ; text-align: center">
			<h1 >ĐẠI HỌC KIẾN TRÚC ĐÀ NẴNG </h1>
			<h3>PHÒNG ĐÀO TẠO</h3>
		</div>
		<img class="mr-5 float-right" src="https://scontent.fdad3-3.fna.fbcdn.net/v/t1.15752-9/96793766_256875945462898_3923584153974472704_n.png?_nc_cat=111&_nc_sid=b96e70&_nc_ohc=vlxBhQkRz6YAX-tfW0p&_nc_ht=scontent.fdad3-3.fna&oh=b8c352a3c5c7adcbcb8c09ea665a81da&oe=5EE50AA9" height="100" width="15%">
	</div>
	<div style="height: 1200px ; background-image: url('https://i1.wp.com/thuvienanh.net/wp-content/uploads/2019/03/hinh-nen-powerpoint-mau-xanh-6.jpeg?resize=2560%2C1440&ssl=1');"  >
		<div class="sticky-top p-3 mb-2 bg-info text-white " style="clear: both">
			
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand pl-5" href="/">Trang Chủ</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			 
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      
			      <li class="nav-item  pl-3">
			        <a class="nav-link" href="/ct">Chương trình dào tạo<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item pl-3 ">
			        <a class="nav-link" href="/mh">Môn học / Học phần</a>
			      </li>
			     <li class="nav-item pl-3 ">
			        <a class="nav-link" href="/qc">Quy chế / Qui định</a>
			      </li>
			      
			      <li class="nav-item pl-3 ">
			        <a class="nav-link" href="/tc">Tra cứu văn bằng</a>
			      </li>
			      <li class="nav-item pl-3 ">
			        <a class="nav-link" href="/hd">Hướng dẫn</a>
			      </li>
			      <li class="nav-item pl-3 border border-info">
			      	@foreach ($users as $user)
			        <a class="nav-link" href="/"> Đăng Xuất : <h8 style="color: red">{{ $user->name }} - {{ $user->lop }}</h8></a>
			        @endforeach
			      </li>
			    </ul>
			   
			  </div>

			</nav>
			
		</div>

		<div style=" height:790px; width: 80%;margin: auto ;">
			<div style="width: 20%;border-radius: 10px;" class="float-left border border-info">
				<div class="row">
					  <div class="col">
					    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					      <a id="btnTT" class="nav-link active mt-3" id="v-pills-home-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="true">Thông tin cá nhân</a>
					      <hr width="100%" size="1">
					      <a  id="btnCT" class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profile" aria-selected="false">Chương trình đào tạo</a>
					      <hr width="100%" size="1">
					      <a id="btnDK" class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-messages" aria-selected="false">Đăng ký học phần</a>
					      <hr width="100%" size="1">
					      <a id="btnTK" class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false">Thời khóa biểu / Lịch thi</a>
					      <hr width="100%" size="1">
					      <a id="btnXD" class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false">Xem điểm</a>
					      <hr width="100%" size="1">
					      <a id="btnLT" class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false">Lịch toàn trường</a>
					      <hr width="100%" size="1">
					      <a id="btnYK" class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false">Ý kiến - thảo luận</a>
					      <hr width="100%" size="1">
					      <a id="btnNX" class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false">Nhận xét cố vấn</a>
					      <hr width="100%" size="1">
					      <a id="btnXG" class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false">Xin giấy xác nhận</a>
					      <hr width="100%" size="1">
					      <a id="btnGD" class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false">Ghi danh môn tự chọn</a>
					      <hr width="100%" size="1">
					      <a id="btnT" class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false">Thoát</a>
					    </div>
					  </div>
					  
				</div>
			</div>

			<div style="height: 790px; width: 70%; margin-left: 5% ; margin-right: 5%;border: solid;border-radius: 10px" class="float-left  bg-info">
				<!-- show thoong tin sv -->
				  <div id="myDropdownTT" class="dropdown-content border " style="margin-left: 18%;border-radius: 10px"  >
				  	<h3 style="text-align: center">Thông Tin</h3>
				    <table class="border-info bg-light" border="1" style="width: 300px ;">
						@foreach ($users as $user)
						<tr>
							<td rowspan="3"><img style="height: 90px;width: 70px" src="{{ $user->hinhanh }}"></td>
							<td><font class="text-danger p-2" style="font-size: 13px;" >{{ $user->maso }}</font></td>

						</tr>
						@endforeach
						@foreach ($users as $user)
						<tr>
							<td ><font class=" text-danger p-2" style="font-size: 13px;">{{ $user->name }}</font></td>
						</tr>
						@endforeach
						@foreach ($users as $user)
						<tr>
							<td><form class=" text-danger p-2" style="font-size: 13px;" >{{ $user->lop }}</form></td>
						</tr>
						@endforeach

					</table>
				  </div>
				<!-- show thoi khoa bieu -->
				
				<script>
					document.getElementById("btnTT").onclick = function() {myFunction()};
					function myFunction() {
					  document.getElementById("myDropdownTT").classList.toggle("show");
					}
				
				</script>

			</div>







		</div>

		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>


