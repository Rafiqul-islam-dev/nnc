<x-app-layout>
    <div class="page-header">
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                <a class="breadcrumb-item" href="#">Edit Notice</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">

            <div class="m-t-25">
                <form action="{{ route('update', $notice->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" id="inputEmail3"
                                value="{{ $notice->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea name="descrition" id="summernote">{!! $notice->descrition !!}</textarea>
                            {{-- <input type="text" class="form-control" name="descrition"
                                value=""> --}}
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            
                            <img id="image" src="{{ URL::to($notice->image) }}" style="height: 80px; width: 80px;">
                            <input type="file" class="form-control" name="old_photo" value="{{ $notice->image }}">
                        </div>
                    </div> --}}

                    <div class="row form-group row">
                        <div class="col-lg-6">
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Photo</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" name="image" accept="image/*"
                                        onchange="readURL(this);">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img id="image" src="{{ URL::to($notice->image) }}" style="height: 80px; width: 80px;">
                            <input type="hidden" name="old_photo" value="{{ $notice->image }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>


    </div>
    </div>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(226)
                        .height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</x-app-layout>
