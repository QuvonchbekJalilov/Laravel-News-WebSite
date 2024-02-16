<x-layouts.backend>
    <!-- Admit Form Area Start Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Students</h3>
            <ul>
                <li>
                    <a href="{{ route('posts.index')}}">Home</a>
                </li>
                <li>Student Admit Form</li>
            </ul>
        </div>
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add New Post</h3>
                    </div>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('posts.store')}}" method="post" class="new-added-form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>title *</label>
                            <input type="text" name="title" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="category">Select a Category:</label>
                            <select class="select2" id="category" name="category">

                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="category">Select Tags:</label>
                            <select class="form-control" id="category" name="tags[]" multiple>
                                @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-6 col-12 form-group">
                            <label>Text *</label>
                            <textarea class="textarea form-control" name="description" id="form-message" cols="10" rows="9"></textarea>
                        </div>
                        <div class="col-lg-6 col-12 form-group mg-t-30">
                            <label class="text-dark-medium">Upload Post Photo (150px X 150px)</label>
                            <input type="file" name="photo" class="form-control-file">
                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>

        <!-- Admit Form Area End Here -->
</x-layouts.backend>