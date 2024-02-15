<x-layouts.backend>
    <div class="card height-auto">
        <div class="card-body">
            <div class="breadcrumbs-area">
                <ul>
                    <li>
                        <a href="{{ route('permissions.index') }}">Home</a>
                    </li>
                    <li>Edit Permission</li>
                </ul>
            </div>
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Edit Permission</h3>
                </div>
            </div>
            <form action="{{ route('permissions.update', ['permission' => $permission->id]) }}" method="post" class="new-added-form">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xl-12 form-group">
                        <label>Permission Name</label>
                        <input type="text" name="name" value="{{ $permission->name }}" class="form-control">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Select a Role:</label>
                        <select class="select2" name="role">
                            <option value="">No Role Selected</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}" {{ $permission->roles->contains('id', $role->id) ? 'selected' : '' }}>{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 form-group mg-t-12">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layouts.backend>
