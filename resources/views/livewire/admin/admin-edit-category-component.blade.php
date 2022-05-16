@section('title')
<title>Find it | Modifier la categorie</title>
@endsection

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-edit mx-1"></i>Modifier la catégorie</h1>

        <a href="{{ route('admin.categories') }}" class="btn btn-primary bg-gradient-primary btn-icon-split btn-sm d-none d-sm-inline-block pr-2">
            <span class="icon">
                <i class="fas fa-table"></i>
            </span>
            <span>Toutes les catégories</span>
        </a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Mise à jour ou Modification de la catégorie</h6>
        </div>
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <form wire:submit.prevent="updateCategory">
                        <div class="form-group">
                            <label for="name" class="control-label">Nom:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nom de catégorie" wire:model="name" wire:keyup="genarateSlug">
                        </div>
                        <div class="form-group">
                            <label for="slug" class="control-label">Slug:</label>
                            <input type="text" name="slug" id="slug" class="form-control" placeholder="nom-de-categorie" wire:model="slug">
                        </div>
                        <div class="form-group">
                             <button type="submit" class="btn btn-success text-white bg-gradient-success btn-icon-split d-none d-inline-block pr-2">
                                <span class="icon">
                                    <i class="fas fa-redo-alt"></i>
                                </span>
                                <span>Mettre à jour</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
