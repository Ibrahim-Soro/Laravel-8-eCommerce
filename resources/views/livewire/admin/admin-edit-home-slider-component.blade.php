@section('title')
    <title>Find it | Modifier la bannière</title>
@endsection

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-image mx-1"></i>Modifier la bannière</h1>

        <a href="{{ route('admin.homeslider') }}" class="btn btn-primary bg-gradient-primary btn-icon-split btn-sm d-none d-sm-inline-block pr-2">
            <span class="icon">
                <i class="fas fa-image"></i>
            </span>
            <span>Toutes les bannières</span>
        </a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Mise à jour de la bannière</h6>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="updateSlide">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title" class="control-label">Titre:</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Titre de la bannière" wire:model="title">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="subtitle" class="control-label">Sous-titre:</label>
                            <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="Sous-titre de la bannière" wire:model="subtitle">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="link" class="control-label">Lien:</label>
                            <input type="text" name="link" id="link" class="form-control" placeholder="Lien d'accès au produit concerné" wire:model="link">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price" class="control-label">Prix:</label>
                            <input type="text" name="price" id="price" class="form-control" placeholder="Prix à afficher" wire:model="price">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status" class="control-label">Statut:</label>
                            <select name="status" id="status" class="form-control" wire:model="status">
                                <option value="1">Actif</option>
                                <option value="0">Inactif</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image" class="control-label">Image:</label><br>
                            <input type="file" name="image" id="image" wire:model="newImage">
                            @if ($newImage)
                                <img src="{{ $newImage->temporaryUrl() }}" alt="" width="120">
                            @else
                                <img src="{{ asset('assets/images/sliders') }}/{{ $image }}" width="120" alt="">
                            @endif
                        </div>
                    </div>
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
<!-- /.container-fluid -->
