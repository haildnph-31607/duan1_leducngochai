<div class="page-wrapper"> <!-- content -->
            <div class="content container-fluid">
				<div class="page-header">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<h5 class="text-uppercase mb-0 mt-0 page-title">Payments MOMO</h5>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<ul class="breadcrumb float-right p-0 mb-0">
								<li class="breadcrumb-item"><a href="index.php"><I class="fas fa-home"></i> Home</a></li>
								
							</ul>
						</div>
					</div>
				</div>
				<div class="content-page">
                <div class="row">
                    <div class="col-sm-12">
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table custom-table" style="color: white;">
                                <thead class="thead-light">
                                    <tr>
                                        <th>MA GIAO DICH</th>
                                        <th>MA HOA DON</th>
                                        <th>SO TIEN</th>
                                        <th>KIEU THANH TOAN</th>
                                        <th>KIEU NGAN HANG</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($all_MOMO as $momo):?>
                                    <tr>
                                        <td><a ><?php echo $momo['partnerCode'] ?></a></td>
                                        <td>
                                            <h2><a ><?php echo $momo['orderId'] ?></a></h2>
                                        </td>
                                        <td><?php echo number_format($momo['amount'],0,',','.') ?> VNĐ</td>
                                        <td> <?php echo $momo['orderType'] ?> </td>
                                        <td><?php echo $momo['payType'] ?></td>
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