<div class="page-wrapper"> 
            <div class="content container-fluid">

                <!-- page-header-->
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="page-title mb-0">BANG DIEU KHIEN ADMIN</h3>
                        </div>
                            <div class="col-md-6">
                            <ul class="breadcrumb mb-0 p-0 float-right">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ page-header-->

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="float-left"><img src="assets/img/sidebar/icon-5.png" alt="" width="80"></span>
                            <div class="dash-widget-info text-right">
								
                                <span>Tong Hang Hoa</span>
                                 <div><?php $tonghh_ad = soluonghh_ad(); $hh = 0; foreach($tonghh_ad  as $hhad){
                                                   $hh+=$hhad['quantity'];
                                 }; echo $hh;?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                             <div class="dash-widget-info text-left d-inline-block">
							
								
                                <span>Tong Danh Muc</span>
                              <div class="dm">2</div>
                            </div>
                            <span class="float-right"><img src="assets/img/sidebar/icon-7.png" width="80" alt=""></span>
                           
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="float-left"><img src="assets/img/dash/dash-3.png" alt="" width="80"></span>
                            <div class="dash-widget-info text-right">
								
							
                                <span>Tong Thanh Vien</span>
                                 <div><?php $tongtk = tong_taikhoan(); $tongtk_ad=0; foreach($tongtk as $ttk){
                                    $tongtk_ad+=$ttk['COUNT(taikhoan.id)'];
                                 }; echo $tongtk_ad; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <div class="dash-widget-info d-inline-block text-left">
							
                                <span>Tong Doanh Thu</span>
                                <div><?php $tk_dt = thongke_doanhthu_vip(); $tk_ad =0 ; foreach($tk_dt as $dt_dt){
                                    $tk_ad+=$dt_dt['tongprice'];
                                };echo number_format($tk_ad,0,',','.'); ?> VNĐ</div>
                                 
                            </div>
                            <span class="float-right"><img src="assets/img/dash/dash-4.png" alt="" width="70"></span>
                        </div>
                    </div>
                </div>
                <style>
                    .btc{
                        height: 400px;
                        position: relative;
                        margin-top: 50px;
                    }
                    .col-auto{
                        position: absolute;
                        z-index: 10px;
                        margin-bottom: 20px;    
                    }
                </style>
				<div class="row">
					<div class="col-lg-6 d-flex">
                    <div class="col-auto">
                                        <div class="page-title">
                                          Thong Ke Theo Danh Muc
                                        </div>
                                    </div>
					<div
                id="myChartr" style="width:100%; max-width:600px; height:500px;" class='btc'>
                
                </div>
                </div>
                <script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
<?php $thongkedanhmuc = thongke_dm_sp(); ?>
function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  <?php  foreach($thongkedanhmuc as $tkdm):?>
  ['<?php echo $tkdm['namedm'] ?>',<?php echo $tkdm['soluong'] ?>],
   <?php endforeach ?>
]);

// Set Options
const options = {
  title:'Thống Kê Hàng Hóa Theo Danh Mục'
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChartr'));
chart.draw(data, options);

}
</script>

					<div class="col-lg-6 d-flex">
                    <style>
                                .bd{
                                    width: 1000px;
                                    height: 600px;
                                    background-color: gray;
                                    margin-top: 50px;
                                    margin-bottom: 20px;
                                }
                                #myChartt{
                                    background-color: transparent;
                                }
                            </style>
                             <div class="col-auto">
                                        <div class="page-title">
                                          Thong Ke San Pham Ban Chay
                                        </div>
                                    </div>
                    <div id="myChart" style="max-width:900px; height: 500px; " class='bd'></div>
                    <?php $result_thongkesp =thongke_sanpham(); ?>
                    <script>
google.charts.load('current',{packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Your Function
function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Xếp Hạng', 'Lượt Mua'],
  <?php foreach($result_thongkesp  as $tksp): ?>
  ['<?php echo $tksp['name'] ?>',<?php echo $tksp['luotmua'] ?>],
<?php endforeach ?>
]);

// Set Options
const options = {
  title: 'Thống Kê Sản Phẩm Bán Chạy'
};

// Draw
const chart = new google.visualization.BarChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>
                    </div>
				</div>
				
				
                <div class="row">
                     <div class="col-lg-6 col-md-12 col-12 d-flex">
                     <div class="col-auto">
                                        <div class="page-title">
                                          Thong Ke Top Doanh Thu Nhiều Nhất
                                        </div>
                                    </div>  
                     <div
                        id="myChartt" style="width:100%; max-width:600px; height:570px; margin-top: 50px;">
                        </div>
                        <?php $doanhthu = thongke_doanhthu(); ;?>
                        <script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  <?php foreach($doanhthu as $tkdt):?>
  ['<?php echo $tkdt['name'] ?>',<?php $sotien = $tkdt['luotmua'] * $tkdt['price']; echo $sotien; ?>],
 <?php endforeach ?>
]);

// Set Options
const options = {
  title:'Thong Ke Top Doanh Thu Nhiều Nhất',
  is3D:true
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChartt'));
chart.draw(data, options);

}
</script>
                    </div>
					<div class="col-lg-6 d-flex">
						<div class="card flex-fill">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="page-title">
                                            Tong Thanh Vien
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <div class=" mt-sm-0 mt-2">
                                            <button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
    									<div class="table-responsive">
    										<table class="table custom-table">
    											<thead class="thead-light">
    												<tr>
    													<th>ID </th>
    													<th>Usser</th>
    													<th>Email</th>
    													<th>Phone Number</th>
    													<th>Password</th>
    													<th>Avatar</th>
														<th>Address</th>
														<th>Phan Quyen</th>
    													<th class="text-right">Thao Tac</th>
    												</tr>
    											</thead>

    											<tbody>
													<?php $taikhoan = select_taikhoan();
													foreach($taikhoan as $tk):
													?>
    												 <tr>
    													<td>
    														<?php echo $tk['id'] ?>
    													</td>
    													<td><?php echo $tk['user'] ?></td>
    													<td><?php echo $tk['email'] ?></td>
    													<td><?php echo $tk['sdt'] ?></td>
    													<td><?php echo $tk['password'] ?></td>
    													<td><?php echo $tk['img'] ?></td>
														<td><?php echo $tk['address'] ?></td>
														<td><?php echo $tk['role'] ?></td>
    													<td class="text-right" >
    														<a href="index.php?act=suatk" class="btn btn-primary btn-sm mb-1">
    															<i class="far fa-edit"></i>
    														</a>
    														<a href="index.php?act=deletetk">
															<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
    														<i class="far fa-trash-alt"></i>
    														</button>
															</a>
    													</td>
    												</tr>
													<?php endforeach ?>
    											
    											</tbody>
    										</table>
    									</div>
    								</div>
    							</div>
    						</div>
                        </div>
					</div>
				</div>
             
                <div class="row">
                    <div class="col-12">
        				<div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <div class="page-title">
                                            New Students
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-sm-right">
                                        <div class=" mt-sm-0 mt-2">
                                            <button class="btn btn-outline-primary mr-2"><img src="assets/img/excel.png" alt=""><span class="ml-2">Excel</span></button>
                                            <button class="btn btn-outline-danger mr-2"><img src="assets/img/pdf.png" alt="" height="18"><span class="ml-2">PDF</span></button>
                                            <button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
        						<div class="row">
        							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
        								<div class="table-responsive">
        									<table class="table custom-table">
        										<thead class="thead-light">
        											<tr>
													<th>ID </th>
    													<th>Usser</th>
    													<th>Email</th>
    													<th>Phone Number</th>
    													<th>Password</th>
    													<th>Avatar</th>
														<th>Address</th>
														<th>Phan Quyen</th>
    													<th class="text-right">Thao Tac</th>
        											</tr>
        										</thead>
        										<tbody>
													<?php $taikhoan = select_taikhoan();
													foreach($taikhoan as $tk):
													?>
    												 <tr>
    													<td>
    														<?php echo $tk['id'] ?>
    													</td>
    													<td><?php echo $tk['user'] ?></td>
    													<td><?php echo $tk['email'] ?></td>
    													<td><?php echo $tk['sdt'] ?></td>
    													<td><?php echo $tk['password'] ?></td>
    													<td><?php echo $tk['img'] ?></td>
														<td><?php echo $tk['address'] ?></td>
														<td><?php echo $tk['role'] ?></td>
    													<td class="text-right" >
    														<a href="index.php?act=suatk" class="btn btn-primary btn-sm mb-1">
    															<i class="far fa-edit"></i>
    														</a>
    														<a href="index.php?act=deletetk">
															<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
    														<i class="far fa-trash-alt"></i>
    														</button>
															</a>
    													</td>
    												</tr>
													<?php endforeach ?>
    											
    											</tbody>
        									</table>
        								</div>
        							</div>
        						</div>
                            </div>
        				</div>
    				</div>
                </div>
				
			</div>
		</div>
	</div>