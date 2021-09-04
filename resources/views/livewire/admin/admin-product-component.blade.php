@section('title')
<title>Find it | Admin Products</title>
@endsection

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-newspaper mx-1"></i>Articles</h1>

        <a href="{{ route('admin.addproduct') }}" class="btn btn-primary bg-gradient-primary btn-icon-split btn-sm d-none d-sm-inline-block pr-2">
            <span class="icon">
                <i class="fas fa-fw fa-newspaper"></i>
            </span>
            <span>Ajouter un article</span>
        </a>
    </div>

    @if (Session::has('message'))
        <div class="alert alert-success bg-gradient-success text-white font-weight-bold text-center" role="alert"> <i class="fas fa-check-double px-1"></i> {{ Session::get('message') }}</div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tous les articles</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#Unik-Id</th>
                            <th>Image</th>
                            <th>Article</th>
                            <th>Disponibilité</th>
                            <th>Prix</th>
                            <th>catégorie</th>
                            <th>Date de création</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->SKU }}</td>
                                <td>
                                    <img width="60" src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="{{ $product->name }}">
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>
                                    @if ($product->quantity > 0 )
                                    <span class="text-success font-weight-bold"><i class="fas fa-check-circle mr-2"></i>En stock</span>
                                    @else
                                    <span class="text-danger font-weight-bold"><i class="fas fa-exclamation-triangle mr-2"></i>En Rupture</span>
                                    @endif
                                </td>
                                <td width="130">{{ $product->getFormatedPrice() }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->created_at->format('d/m/Y à h:i') }}</td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn-circle text-white bg-gradient-secondary mx-3" href="{{ route('admin.editproduct', ['product_slug' => $product->slug]) }}" title="Modifier"><i class="fas fa-edit "></i></a>
                                        <a class="btn-circle text-white bg-gradient-danger mx-3" href="#" wire:click.prevent="deletProduct({{ $product->id }})" title="Supprimer"><i class="fas fa-trash "></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="wrap-pagination-info">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
