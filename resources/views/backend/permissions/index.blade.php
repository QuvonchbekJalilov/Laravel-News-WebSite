<x-layouts.backend>
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Permissions</h3>
            <ul>
                <li>
                    <a href="{{route('permissions.index')}}">Home</a>
                </li>
                <li>All Permissions</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Student Table Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <a href="{{ route('permissions.create')}}" class="fw-btn-fill btn-success">Create</a>
                        <h3>All Students Data</h3>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" permission="button" data-toggle="dropdown" aria-expanded="false">...</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table display data-table text-nowrap">
                        <thead>
                            <tr>
                                <th>Permission Name</th>
                                <th>Roles</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td>
                                <td>
                                    @foreach ($permission->roles as $role)
                                    {{ $role->name }}<br>
                                    @endforeach
                                </td>
                                <td><a href="{{ route('permissions.edit', ['permission' => $permission->id])}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                <td>
                                    <form method="post" action="{{ route('permissions.destroy', ['permission' => $permission->id])}}" onsubmit="return confirm('Are you sure you wish to delete?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i class="fa-solid fa-trash-can"></i></button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $permissions->links()}}
                </div>
            </div>
        </div>
        <!-- Student Table Area End Here -->
        <footer class="footer-wrap-layout1">
            <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
        </footer>
    </div>
</x-layouts.backend>