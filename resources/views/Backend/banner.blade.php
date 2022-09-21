<x-app-layout>
    <div class="page-header">
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                <a class="breadcrumb-item" href="#">Banner</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="hederButton">
                <p>Banner List</p>
                <button type="button" class="btn btn-primary text-left" data-toggle="modal"
                    data-target=".bd-example-modal-lg"><i class="anticon anticon-plus"></i>Add
                    New</button>
            </div>
            <div class="m-t-25">
                <table id="data-table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banner as $kye => $item)
                            <tr>
                                <td>{{ $kye + 1 }}</td>
                                <td>
                                    <img id="image" src="{{ URL::to($item->image) }}"
                                        style="height: 80px; width: 80px;">
                                </td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    <a href="{{ route('delet', $item->id) }}"><i
                                            class="anticon anticon-delete btn btn-danger btn-tone m-r-5"></i></a>
                                    <a href=""><i
                                            class="anticon anticon-form btn btn-secondary btn-tone m-r-5"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>

        <div class="modal fade bd-example-modal-lg">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4">Large modal</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="anticon anticon-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('addbanner') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" id="inputEmail3"
                                        placeholder="Title">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image">
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

    </div>
    </div>
</x-app-layout>
