@extends('admin.dashboard.layouts.main')

@section('container')

<div class="content">
	<div class="page-inner">
		<div class="mt-2 mb-4">
			<h2 class="text-white pb-2">Welcome back, {{ auth()->user()->username }}</h2>
			<h5 class="text-white op-7 mb-4">Yesterday I was clever, so I wanted to change the world. Today I am wise, so I am changing myself.</h5>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="card card-dark bg-primary-gradient">
					<div class="card-body pb-0">
						<div class="h1 fw-bold float-right">+5%</div>
						<h2 class="mb-2">17</h2>
						<p>Users online</p>
						<div class="pull-in sparkline-fix chart-as-background">
							<div id="lineChart"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-dark bg-secondary-gradient">
					<div class="card-body pb-0">
						<div class="h1 fw-bold float-right">-3%</div>
						<h2 class="mb-2">27</h2>
						<p>New Users</p>
						<div class="pull-in sparkline-fix chart-as-background">
							<div id="lineChart2"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-dark bg-success2">
					<div class="card-body pb-0">
						<div class="h1 fw-bold float-right">+7%</div>
						<h2 class="mb-2">213</h2>
						<p>Transactions</p>
						<div class="pull-in sparkline-fix chart-as-background">
							<div id="lineChart3"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<div class="card-head-row">
							<div class="card-title">User Statistics</div>
							<div class="card-tools">
								<a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
									<span class="btn-label">
										<i class="fa fa-pencil"></i>
									</span>
									Export
								</a>
								<a href="#" class="btn btn-info btn-border btn-round btn-sm">
									<span class="btn-label">
										<i class="fa fa-print"></i>
									</span>
									Print
								</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="chart-container" style="min-height: 375px">
							<canvas id="statisticsChart"></canvas>
						</div>
						<div id="myChartLegend"></div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-secondary">
					<div class="card-header">
						<div class="card-title">Daily Sales</div>
						<div class="card-category">March 25 - April 02</div>
					</div>
					<div class="card-body pb-0">
						<div class="mb-4 mt-2">
							<h1>$4,578.58</h1>
						</div>
						<div class="pull-in">
							<canvas id="dailySalesChart"></canvas>
						</div>
					</div>
				</div>
				<div class="card card-primary bg-primary-gradient">
					<div class="card-body">
						<h4 class="mb-1 fw-bold">Tasks Progress</h4>
						<div id="task-complete" class="chart-circle mt-4 mb-3"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-card-no-pd">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="card-head-row">
							<h4 class="card-title">Users Geolocation</h4>
							<div class="card-tools">
								<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
								<button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
								<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
							</div>
						</div>
						<p class="card-category">
						Map of the distribution of users around the world</p>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="table-responsive table-hover table-sales">
									<table class="table">
										<tbody>
											<tr>
												<td>
													<div class="flag">
														<img src="{{ asset('style/assets/img/flags/id.png') }}" alt="indonesia">
													</div>
												</td>
												<td>Indonesia</td>
												<td class="text-right">
													2.320
												</td>
												<td class="text-right">
													42.18%
												</td>
											</tr>
											<tr>
												<td>
													<div class="flag">
														<img src="{{ asset('style/assets/img/flags/us.png') }}" alt="united states">
													</div>
												</td>
												<td>USA</td>
												<td class="text-right">
													240
												</td>
												<td class="text-right">
													4.36%
												</td>
											</tr>
											<tr>
												<td>
													<div class="flag">
														<img src="{{ asset('style/assets/img/flags/au.png') }}" alt="australia">
													</div>
												</td>
												<td>Australia</td>
												<td class="text-right">
													119
												</td>
												<td class="text-right">
													2.16%
												</td>
											</tr>
											<tr>
												<td>
													<div class="flag">
														<img src="{{ asset('style/assets/img/flags/ru.png') }}" alt="russia">
													</div>
												</td>
												<td>Russia</td>
												<td class="text-right">
													1.081
												</td>
												<td class="text-right">
													19.65%
												</td>
											</tr>
											<tr>
												<td>
													<div class="flag">
														<img src="{{ asset('style/assets/img/flags/cn.png') }}" alt="china">
													</div>
												</td>
												<td>China</td>
												<td class="text-right">
													1.100
												</td>
												<td class="text-right">
													20%
												</td>
											</tr>
											<tr>
												<td>
													<div class="flag">
														<img src="{{ asset('style/assets/img/flags/br.png') }}" alt="brazil">
													</div>
												</td>
												<td>Brasil</td>
												<td class="text-right">
													640
												</td>
												<td class="text-right">
													11.63%
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mapcontainer">
									<div id="map-example" class="vmap"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Top Products</div>
					</div>
					<div class="card-body pb-0">
						<div class="d-flex">
							<div class="avatar">
								<img src="{{ asset('style/assets/img/logoproduct.svg') }}" alt="..." class="avatar-img rounded-circle">
							</div>
							<div class="flex-1 pt-1 ml-2">
								<h6 class="fw-bold mb-1">CSS</h6>
								<small class="text-muted">Cascading Style Sheets</small>
							</div>
							<div class="d-flex ml-auto align-items-center">
								<h3 class="text-info fw-bold">+$17</h3>
							</div>
						</div>
						<div class="separator-dashed"></div>
						<div class="d-flex">
							<div class="avatar">
								<img src="{{ asset('style/assets/img/logoproduct.svg') }}" alt="..." class="avatar-img rounded-circle">
							</div>
							<div class="flex-1 pt-1 ml-2">
								<h6 class="fw-bold mb-1">J.CO Donuts</h6>
								<small class="text-muted">The Best Donuts</small>
							</div>
							<div class="d-flex ml-auto align-items-center">
								<h3 class="text-info fw-bold">+$300</h3>
							</div>
						</div>
						<div class="separator-dashed"></div>
						<div class="d-flex">
							<div class="avatar">
								<img src="{{ asset('style/assets/img/logoproduct3.svg') }}" alt="..." class="avatar-img rounded-circle">
							</div>
							<div class="flex-1 pt-1 ml-2">
								<h6 class="fw-bold mb-1">Ready Pro</h6>
								<small class="text-muted">Bootstrap 4 Admin Dashboard</small>
							</div>
							<div class="d-flex ml-auto align-items-center">
								<h3 class="text-info fw-bold">+$350</h3>
							</div>
						</div>
						<div class="separator-dashed"></div>
						<div class="pull-in">
							<canvas id="topProductsChart"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<div class="card-title fw-mediumbold">Suggested People</div>
						<div class="card-list">
							<div class="item-list">
								<div class="avatar">
									<img src="{{ asset('style/assets/img/jm_denis.jpg') }}" alt="..." class="avatar-img rounded-circle">
								</div>
								<div class="info-user ml-3">
									<div class="username">Jimmy Denis</div>
									<div class="status">Graphic Designer</div>
								</div>
								<button class="btn btn-icon btn-primary btn-round btn-xs">
									<i class="fa fa-plus"></i>
								</button>
							</div>
							<div class="item-list">
								<div class="avatar">
									<img src="{{ asset('style/assets/img/chadengle.jpg') }}" alt="..." class="avatar-img rounded-circle">
								</div>
								<div class="info-user ml-3">
									<div class="username">Chad</div>
									<div class="status">CEO Zeleaf</div>
								</div>
								<button class="btn btn-icon btn-primary btn-round btn-xs">
									<i class="fa fa-plus"></i>
								</button>
							</div>
							<div class="item-list">
								<div class="avatar">
									<img src="{{ asset('style/assets/img/talha.jpg') }}" alt="..." class="avatar-img rounded-circle">
								</div>
								<div class="info-user ml-3">
									<div class="username">Talha</div>
									<div class="status">Front End Designer</div>
								</div>
								<button class="btn btn-icon btn-primary btn-round btn-xs">
									<i class="fa fa-plus"></i>
								</button>
							</div>
							<div class="item-list">
								<div class="avatar">
									<img src="{{ asset('style/assets/img/mlane.jpg') }}" alt="..." class="avatar-img rounded-circle">
								</div>
								<div class="info-user ml-3">
									<div class="username">John Doe</div>
									<div class="status">Back End Developer</div>
								</div>
								<button class="btn btn-icon btn-primary btn-round btn-xs">
									<i class="fa fa-plus"></i>
								</button>
							</div>
							<div class="item-list">
								<div class="avatar">
									<img src="{{ asset('style/assets/img/talha.jpg') }}" alt="..." class="avatar-img rounded-circle">
								</div>
								<div class="info-user ml-3">
									<div class="username">Talha</div>
									<div class="status">Front End Designer</div>
								</div>
								<button class="btn btn-icon btn-primary btn-round btn-xs">
									<i class="fa fa-plus"></i>
								</button>
							</div>
							<div class="item-list">
								<div class="avatar">
									<img src="{{ asset('style/assets/img/jm_denis.jpg') }}" alt="..." class="avatar-img rounded-circle">
								</div>
								<div class="info-user ml-3">
									<div class="username">Jimmy Denis</div>
									<div class="status">Graphic Designer</div>
								</div>
								<button class="btn btn-icon btn-primary btn-round btn-xs">
									<i class="fa fa-plus"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-primary bg-primary-gradient">
					<div class="card-body">
						<h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Active user right now</h4>
						<h1 class="mb-4 fw-bold">17</h1>
						<h4 class="mt-3 b-b1 pb-2 mb-5 fw-bold">Page view per minutes</h4>
						<div id="activeUsersChart"></div>
						<h4 class="mt-5 pb-3 mb-0 fw-bold">Top active pages</h4>
						<ul class="list-unstyled">
							<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/readypro/index.html</small> <span>7</span></li>
							<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/atlantis/demo.html</small> <span>10</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Feed Activity</div>
					</div>
					<div class="card-body">
						<ol class="activity-feed">
							<li class="feed-item feed-item-secondary">
								<time class="date" datetime="9-25">Sep 25</time>
								<span class="text">Responded to need <a href="#">"Volunteer opportunity"</a></span>
							</li>
							<li class="feed-item feed-item-success">
								<time class="date" datetime="9-24">Sep 24</time>
								<span class="text">Added an interest <a href="#">"Volunteer Activities"</a></span>
							</li>
							<li class="feed-item feed-item-info">
								<time class="date" datetime="9-23">Sep 23</time>
								<span class="text">Joined the group <a href="single-group.php">"Boardsmanship Forum"</a></span>
							</li>
							<li class="feed-item feed-item-warning">
								<time class="date" datetime="9-21">Sep 21</time>
								<span class="text">Responded to need <a href="#">"In-Kind Opportunity"</a></span>
							</li>
							<li class="feed-item feed-item-danger">
								<time class="date" datetime="9-18">Sep 18</time>
								<span class="text">Created need <a href="#">"Volunteer Opportunity"</a></span>
							</li>
							<li class="feed-item">
								<time class="date" datetime="9-17">Sep 17</time>
								<span class="text">Attending the event <a href="single-event.php">"Some New Event"</a></span>
							</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<div class="card-head-row">
							<div class="card-title">Support Tickets</div>
							<div class="card-tools">
								<ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link" id="pills-today" data-toggle="pill" href="#pills-today" role="tab" aria-selected="true">Today</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" id="pills-week" data-toggle="pill" href="#pills-week" role="tab" aria-selected="false">Week</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-month" data-toggle="pill" href="#pills-month" role="tab" aria-selected="false">Month</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="d-flex">
							<div class="avatar avatar-online">
								<span class="avatar-title rounded-circle border border-white bg-info">J</span>
							</div>
							<div class="flex-1 ml-3 pt-1">
								<h6 class="text-uppercase fw-bold mb-1">Joko Subianto <span class="text-warning pl-3">pending</span></h6>
								<span class="text-muted">I am facing some trouble with my viewport. When i start my</span>
							</div>
							<div class="float-right pt-1">
								<small class="text-muted">8:40 PM</small>
							</div>
						</div>
						<div class="separator-dashed"></div>
						<div class="d-flex">
							<div class="avatar avatar-offline">
								<span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
							</div>
							<div class="flex-1 ml-3 pt-1">
								<h6 class="text-uppercase fw-bold mb-1">Prabowo Widodo <span class="text-success pl-3">open</span></h6>
								<span class="text-muted">I have some query regarding the license issue.</span>
							</div>
							<div class="float-right pt-1">
								<small class="text-muted">1 Day Ago</small>
							</div>
						</div>
						<div class="separator-dashed"></div>
						<div class="d-flex">
							<div class="avatar avatar-away">
								<span class="avatar-title rounded-circle border border-white bg-danger">L</span>
							</div>
							<div class="flex-1 ml-3 pt-1">
								<h6 class="text-uppercase fw-bold mb-1">Lee Chong Wei <span class="text-muted pl-3">closed</span></h6>
								<span class="text-muted">Is there any update plan for RTL version near future?</span>
							</div>
							<div class="float-right pt-1">
								<small class="text-muted">2 Days Ago</small>
							</div>
						</div>
						<div class="separator-dashed"></div>
						<div class="d-flex">
							<div class="avatar avatar-offline">
								<span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
							</div>
							<div class="flex-1 ml-3 pt-1">
								<h6 class="text-uppercase fw-bold mb-1">Peter Parker <span class="text-success pl-3">open</span></h6>
								<span class="text-muted">I have some query regarding the license issue.</span>
							</div>
							<div class="float-right pt-1">
								<small class="text-muted">2 Day Ago</small>
							</div>
						</div>
						<div class="separator-dashed"></div>
						<div class="d-flex">
							<div class="avatar avatar-away">
								<span class="avatar-title rounded-circle border border-white bg-danger">L</span>
							</div>
							<div class="flex-1 ml-3 pt-1">
								<h6 class="text-uppercase fw-bold mb-1">Logan Paul <span class="text-muted pl-3">closed</span></h6>
								<span class="text-muted">Is there any update plan for RTL version near future?</span>
							</div>
							<div class="float-right pt-1">
								<small class="text-muted">2 Days Ago</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection