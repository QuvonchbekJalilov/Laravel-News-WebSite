<x-layouts.backend>
<div class="card height-auto">
<div class="breadcrumbs-area">
            <h3>Tags</h3>
            <ul>
                <li>
                    <a href="{{ route('tags.index')}}">Home</a>
                </li>
                
            </ul>
        </div>
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add Tags</h3>
                            </div>
                        </div>
                        <form action="{{ route('tags.store')}}" method="post" class="new-added-form">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12  form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="" class="form-control">
                                </div>
                                <div class="col-12 form-group mg-t-12">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
</x-layouts.backend>