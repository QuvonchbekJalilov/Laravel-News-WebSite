<x-layouts.backend>
<div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add Users</h3>
                            </div>
                            
                        </div>
                        <form action="{{ route('users.store')}}" method="post" class="new-added-form">
                            @csrf
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" placeholder="" class="form-control">
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail</label>
                                    <input type="email" name="email" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Repeat password</label>
                                    <input type="password" name="password_confirmation" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Role</label>
                                    <select class="select2" name="role">
                                        <option value="">Please Select Role</option>
                                        @foreach ($roles as $role )
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
</x-layouts.backend>