<div class="page-wrapper"> <!-- content -->
            <div class="content container-fluid">
				<div class="page-header">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<h5 class="text-uppercase mb-0 mt-0 page-title">Payments VNPAY</h5>
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
                                    <tr >
                                        <th>NGAN HANG</th>
                                        <th>MA THANH TOAN</th>
                                        <th>SO TIEN</th>
                                        <th>HOA DON</th>
                                        <th>PAY DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($all_VNPAY as $vnpay):?>
                                    <tr>
                                        <td><a ><?php echo $vnpay['vnp_BankCode'] ?></a></td>
                                        <td>
                                            <h2><a ><?php echo $vnpay['vnp_BankTranNo'] ?></a></h2>
                                        </td>
                                        <td><?php $number = $vnpay['vnp_Amount'] / 100 ;  echo number_format($number,0,',','.') ?> VNĐ</td>
                                        <td><?php echo $vnpay['vnp_OrderInfo'] ?></td>
                                        <td><?php echo $vnpay['vnp_PayDate'] ?></td>
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