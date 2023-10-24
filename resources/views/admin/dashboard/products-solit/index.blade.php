@extends('admin.dashboard.layouts.main')

<link rel="icon" href="../../../../../img/solit.jpg" type="image/x-icon"/>

@section('container')

<div class="content">
	<div class="page-inner">
		<div class="mt-2 mb-4">
			<h2 class="text-white pb-2">Product In Solit Computer</h2>
			<h5 class="text-white op-7 mb-4">Yesterday I was clever, so I wanted to change the world. Today I am wise, so I am changing myself.</h5>
		</div>
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">Data Laptop Solit Computer</h4>
						<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
							<i class="fa fa-plus"></i>
							Add Row
						</button>
					</div>
				</div>
				<div class="card-body">
					<!-- Modal -->
					<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header no-bd">
									<h5 class="modal-title">
										<span class="fw-mediumbold">
										New</span> 
										<span class="fw-light">
											Row
										</span>
									</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p class="small">Create a new row using this form, make sure you fill them all</p>
									<form>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group form-group-default">
													<label>Name</label>
													<input id="addName" type="text" class="form-control" placeholder="fill name">
												</div>
											</div>
											<div class="col-md-6 pr-0">
												<div class="form-group form-group-default">
													<label>Position</label>
													<input id="addPosition" type="text" class="form-control" placeholder="fill position">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Office</label>
													<input id="addOffice" type="text" class="form-control" placeholder="fill office">
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="modal-footer no-bd">
									<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

					<div class="table-responsive">
						<table id="add-row" class="display table table-striped table-hover" >
							<thead>
								<tr>
									<th>N0</th>
									<th>Foto Produk</th>
									<th>Nama Produk</th>
									<th>Kategori</th>
									<th>Harga</th>
									<th>Kondisi</th>
									<th>Deskripsi</th>
									<th>Merek</th>
									<th>Stok</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>N0</th>
									<th>Foto Produk</th>
									<th>Nama Produk</th>
									<th>Kategori</th>
									<th>Harga</th>
									<th>Kondisi</th>
									<th>Deskripsi</th>
									<th>Merek</th>
									<th>Stok</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
								<tr>
									<td>1</td>
									<td>X270.jpg</td>
									<td>Lenovo Thinkpad X270</td>
									<td>Laptop</td>
									<td>2.200.000</td>
									<td>Second</td>
									<td>Laptop import</td>
									<td>Lenovo</td>
									<td>12</td>
									<td>
										<div class="form-button-action">
											<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
												<i class="fa fa-edit"></i>
											</button>
											<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
												<i class="fa fa-times"></i>
											</button>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

@endsection