@extends('layouts.layout')

@section('script')
@include('dashboard_src.scripts')
@endsection

@section('footer')
@include('dashboard_src.footer')
@endsection 

@section('page_name')
Dashboard
@endsection

@section('nav-header')
@include('dashboard_src.header')
@endsection 

@section('sidebar')
@include('dashboard_src.sidebar')
@endsection

@section('content')
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
							<div class="card">
								<div class="card-header border-0 flex-wrap">
										
								</div>
								<div class="card-body">
									
								</div>
							</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection

