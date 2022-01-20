@extends('layouts/layout')

@section('script')
@include('../dashboard_src/scripts')
<script>
    $(document).ready(function() {
        $('#tenantList').DataTable();
    });
</script>
@endsection

@section('footer')
@include('../dashboard_src/footer')
@endsection

@section('sidebar')
@include('../dashboard_src/sidebar')
@endsection

@section('nav-header')
@include('../dashboard_src/header')
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
								   <h2 class="card-title">Tenants List</h2>
                                   <a href="" class="btn btn-sm btn-primary">Add Tenants</a>
								</div>
                                <hr style="border:1px solid #ccc;margin: 0 23px;">

								<div class="card-body">
									<table class="table table-striped table-bordered  table-hover " id="tenantList">
                                         <thead>
                                             <tr>
                                                 <th>Serial</th>
                                                 <th>Name</th>
                                                 <th>Email</th>
                                                 <th>Phone</th>
                                                 <th>Address</th>
                                                 <th>nid</th>
                                                 <th>Action</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             @forelse ($tenants as $key => $tenant)
                                             <tr>
                                                 <td>{{$key+1}}</td>
                                                 <td>{{$tenant->name}}</td>
                                                 <td>{{$tenant->email}}</td>
                                                 <td>{{$tenant->phone}}</td>
                                                 <td>{{ Illuminate\Support\Str::limit($tenant->address, 30)}}</td>
                                                 <td>{{$tenant->nid}}</td>
                                                 <td>
                                                     <a href="" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></a>
                                                     <a href="" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>
                                                 </td>
                                             </tr>
                                             @empty
                                            @endforelse
                                         </tbody>
                                    </table>
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
