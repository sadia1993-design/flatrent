@extends('layouts.layout')

@section('script')
@include('../dashboard_src/scripts')
<script>
    $(document).ready(function() {
        $('#flatList').DataTable();
    });
</script>
@endsection

@section('page_name')
Flats
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
								   <h2 class="card-title">Flat List</h2>
                                   <a href="{{url('properties.create')}}" class="btn btn-sm btn-primary">Add Flats</a>
								</div>
                                <hr style="border:1px solid #ccc;margin: 0 23px;">
								<div class="card-body">
									<table class="table table-striped table-condensed  table-hover " id="flatList">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Property Name</th>
                                                <th>Flat No</th>
                                                <th>Size</th>
                                                <th>Details</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($flat_list as $key => $flat)
                                            <tr>
                                                <td >{{$key+1}}</td>
                                                <td>{{$flat->property->name}}</td>
                                                <td>{{ $flat->flat_no }}</td>
                                                <td>{{ $flat->size }}</td>
                                                <td>{{ Illuminate\Support\Str::limit($flat->details, 50) }}</td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                                    
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