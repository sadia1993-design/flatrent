@extends('layouts.layout')

@section('script')
@include('../dashboard_src/scripts')
<script>
    $(document).ready(function () {
        $('#propertyList').DataTable({
            'paging': true,
            'pageLength': 5,
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20]
            ]
        });
    });
</script>
@endsection

@section('page_name')
Property
@endsection

@section('footer')
@include('../dashboard_src/footer')
@endsection

@section('nav-header')
@include('../dashboard_src.header')
@endsection 

@section('sidebar')
@include('../dashboard_src.sidebar')
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
								   <h2 class="card-title">Property List</h2>
                                   <a href="" class="btn btn-sm btn-primary">Add Property</a>
								</div>
                                <hr style="border:1px solid #ccc;margin: 0 23px;">
								<div class="card-body">
									<table class="table table-striped table-condensed  table-hover " id="propertyList">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($properties as $key => $property)
                                            <tr>
                                                <td >{{$key+1}}</td>
                                                <td>{{$property->name}}</td>
                                                <td>{{$property->address}}</td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-primary">Edit</a>
                                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
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