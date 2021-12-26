@extends('layouts.layout')

@section('script')
@include('../dashboard_src/scripts')
<script>
    $('#editor').ckeditor();
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
								   <h2 class="card-title">Update Property </h2>
								</div>
                                <hr style="border:1px solid #ccc;margin: 0 23px;">
								<div class="card-body">
                                    
									<form action="" method="post">
                                    @csrf
                                        <div class="form-group mb-5">

                                            <label for="property_name" style="font-weight: bold">Property Name</label>
                                            <input type="text" class="form-control" id="property_name" name="property_name" value="{{$postSingle->name}}">
                                            <input type="hidden" class="form-control" id="property_id" name="property_id" value="{{$postSingle->id}}">

                                        </div>
                                        <div class="form-group mb-5">

                                            <label for="editor" style="font-weight: bold">Property Address</label>
                                            <textarea id="editor" name="property_addr" >{{$postSingle->address}}</textarea>

                                        </div>

                                        <div class="form-group">
                                            <input type="button" class="btn btn-primary btn-block" value="Update">
                                        </div>
                                    </form>
                                    
<script>
    CKEDITOR.replace('editor');
</script>
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