<x-layouts.backend>
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Users</h3>
            <ul>
                <li>
                    <a href="{{ route('users.index')}}">Home</a>
                </li>
                <li>All Users</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Student Table Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <a href="{{ route('users.create')}}" class="fw-btn-fill btn-success">Create</a>
                        <h3>All Users Data</h3>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </div>
                <form class="mg-b-20" method="get" action="{{ route('users.index')}}">
                    @csrf

                    <div class="row gutters-8">
                        <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <input type="text" name="first_name" placeholder="Search by First Name ..." class="form-control">
                        </div>
                        <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                            <input type="text" name="last_name" placeholder="Search by Last Name ..." class="form-control">
                        </div>
                        <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <input type="text" name="role" placeholder="Search by Role ..." class="form-control">
                        </div>
                        <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                            <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table display data-table text-nowrap">
                        <thead>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checkAll">
                                        <label class="form-check-label">Id</label>
                                    </div>
                                </th>
                                <th>image</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>email</th>
                                <th>role</th>
                                <th>show</th>
                                <th>update</th>
                                <th>delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($users as $user)
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label">{{ $user->id}}</label>
                                    </div>
                                </td>
                                <td class="text-center"><img src="/admin/assets/img/figure/student2.png" alt="student"></td>
                                <td>{{ $user->first_name}}</td>
                                <td>{{ $user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                <td> {{ $user->getRoleNames()}} </td>
                                <td><a href="{{ route('users.show', ['user' => $user->id])}}"><i class="fa-solid fa-eye"></i></a></td>
                                <td><a href="{{ route('users.edit', ['user' => $user->id])}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                <td>
                                    <form method="post" action="{{ route('users.destroy', ['user' => $user->id])}}" onsubmit="return confirm('Are you sure you wish to delete?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i class="fa-solid fa-trash-can"></i></button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $users->links()}} 
                </div>
            </div>
        </div>
        <!-- Student Table Area End Here -->
        <footer class="footer-wrap-layout1">
            <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
        </footer>
    </div>
</x-layouts.backend>