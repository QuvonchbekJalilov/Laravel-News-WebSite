<x-layouts.backend>
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Students</h3>
            <ul>
                <li>
                    <a href="{{route('posts.index')}}">Home</a>
                </li>
                <li>Student Details</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Student Details Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>About Post</h3>
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
                <div class="single-info-details">
                    <div class="item-img">
                        <img src="/storage/<?= $post->image ?>" alt="student">
                    </div>
                    <div class="item-content">
                        <div class="header-inline item-header">
                            <h3 class="text-dark-medium font-medium">{{ $post->title  }}</h3>

                        </div>

                        <div class="info-table table-responsive">
                            <table class="table text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>Creator:</td>
                                        <td class="font-medium text-dark-medium">{{ $post->user->first_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Category:</td>
                                        <td class="font-medium text-dark-medium">{{ $post->category->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tags:</td>
                                        @foreach ($post->tags as $tag )
                                            <td class="font-medium text-dark-medium">{{ $tag->name}}</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Text:</td>
                                        <td class="font-medium text-dark-medium">{{ $post->description }}</td>
                                    </tr>
                                    <tr>
                                        <td>Admission Date:</td>
                                        <td class="font-medium text-dark-medium">{{ $post->created_at->format('Y-m-d')}}</td>
                                    </tr>




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Student Details Area End Here -->
        <footer class="footer-wrap-layout1">
            <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
        </footer>
    </div>
</x-layouts.backend>