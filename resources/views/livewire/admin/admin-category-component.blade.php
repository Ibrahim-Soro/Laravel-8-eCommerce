@section('title')
<title>Find it | Admin Category</title>
@endsection

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-table mx-1"></i>Catégories</h1>

        <a href="{{ route('admin.addcategory') }}" class="btn btn-primary bg-gradient-primary btn-icon-split btn-sm d-none d-sm-inline-block pr-2">
            <span class="icon">
                <i class="fas fa-folder"></i>
            </span>
            <span>Ajouter une catégorie</span>
        </a>
    </div>

    @if (Session::has('message'))
        <div class="alert alert-success bg-gradient-success text-white font-weight-bold text-center" role="alert"> <i class="fas fa-check-double px-1"></i> {{ Session::get('message') }}</div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Toutes les catégories</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#Id</th>
                            <th>Nom</th>
                            <th>Slug</th>
                            <th>Date de création</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->created_at->format('d/m/Y à h:i') }}</td>
                                <td class="d-flex justify-content-between">
                                    <a class="btn-circle text-white bg-gradient-secondary mx-3" href="{{ route('admin.editcategory', ['category_slug' => $category->slug]) }}" title="Modifier"><i class="fas fa-edit "></i></a>
                                    <a class="btn-circle text-white bg-gradient-danger mx-3" href="#" wire:click.prevent="deleteCategory({{ $category->id }})" title="Modifier"><i class="fas fa-trash "></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="wrap-pagination-info">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
