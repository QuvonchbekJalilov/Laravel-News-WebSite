<x-layouts.backend>
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Users</h3>
            <ul>
                <li>
                    <a href="{{route('posts.index')}}">Home</a>
                </li>

            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Admit Form Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Update Posts</h3>
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
                <form action="{{ route('posts.update', ['post' => $post])}}" class="new-added-form" enctype="multipart/form-data" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                            <label>Title *</label>
                            <input type="text" value="{{$post->title}}" name="title" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                            <label>Description *</label>
                            <textarea type="text" value="" name="description" placeholder="" class="form-control">{{$post->description}}</textarea>
                        </div>
                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                            <label>Category *</label>
                            <select class="select2" id="category" name="category">
                                <option value="{{ $post->category->id }}">Current Category: {{$post->category->name}}</option>

                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ old('category', $post->category_id) == $category->id ? 'selected : ' : '' }}
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                            <label for="category">Select Tags:</label>
                            <select class="form-control" id="category" name="tags[]" multiple>

                                @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">
                                    {{ in_array($tag->id, old('tags', $post->tags->pluck('id')->toArray())) ? 'selected' : '' }}

                                    {{ $tag->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-12 item-img">
                            <label class="text-dark-medium">Old Photo</label>
                            <img src="/storage/<?= $post->image ?>" alt="no photo">
                        </div>
                        <div class="col-lg-6 col-12 form-group mg-t-30">
                            <label class="text-dark-medium">Upload Post Photo (150px X 150px)</label>
                            <input type="file" name="photo" class="form-control-file">
                        </div>
                    </div>
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Admit Form Area End Here -->
        <footer class="footer-wrap-layout1">
            <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
        </footer>
    </div>
</x-layouts.backend>