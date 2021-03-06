@section('title')
<title>Find it | Ajouter un article</title>
@endsection

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-newspaper mx-1"></i>Ajouter un artilce</h1>

        <a href="{{ route('admin.products') }}" class="btn btn-primary bg-gradient-primary btn-icon-split btn-sm d-none d-sm-inline-block pr-2">
            <span class="icon">
                <i class="fas fa-newspaper"></i>
            </span>
            <span>Tous les articles</span>
        </a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ajouter un nouvel article</h6>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="storeProduct">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="control-label font-weight-bold text-dark">Nom d'article:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nom de l'article" wire:model="name" wire:keyup="genarateSlug">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="slug" class="control-label font-weight-bold text-dark">Slug:</label>
                            <input type="text" name="slug" id="slug" class="form-control" placeholder="nom-de-categorie" wire:model="slug">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="short_description" class="control-label font-weight-bold text-dark">Courte description:</label>
                            <textarea name="short_description" id="short_description" class="form-control" placeholder="Saisir une description coutre et pertinente ..." wire:model="short_description"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description" class="control-label font-weight-bold text-dark">Description:</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="D??crivez au mieux votre produit avec tous les d??tails possible ..." wire:model="description"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="regular_price" class="control-label font-weight-bold text-dark">Prix r??gulier:</label>
                            <input type="number" name="regular_price" id="regular_price" class="form-control" wire:model="regular_price">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sale_price" class="control-label font-weight-bold text-dark">Prix promo:</label>
                            <input type="number" name="sale_price" id="sale_price" class="form-control" wire:model="sale_price">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="SKU" class="control-label font-weight-bold text-dark">Unique Identifiant:</label>
                            <input type="text" name="SKU" id="SKU" class="form-control" wire:model="SKU">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="stock" class="control-label font-weight-bold text-dark">Stock:</label>
                            <select name="stock" id="stock" class="form-control" wire:model="stock_status">
                                <option value="InStock">En stock</option>
                                <option value="OutOfStock">Stock ??puis??</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="featured" class="control-label font-weight-bold text-dark">En veudette:</label>
                            <select name="featured" id="featured" class="form-control" wire:model="featured">
                                <option value="0">Non</option>
                                <option value="1">Oui</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="quantity" class="control-label font-weight-bold text-dark">Quantit??:</label>
                            <input type="text" name="quantity" id="quantity" class="form-control" wire:model="quantity">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="category" class="control-label font-weight-bold text-dark">Cat??gorie:</label>
                            <select name="category" id="category" class="form-control" wire:model="category_id">
                                <option value="">S??lectionner une cat??gorie</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="image" class="control-label font-weight-bold text-dark">Image:</label>
                            <input type="file" name="image" id="image" class="" wire:model="image">
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" width="120" alt="{{ $name }}">
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success text-white bg-gradient-success btn-icon-split d-none d-inline-block pr-2">
                        <span class="icon">
                            <i class="fas fa-folder-plus"></i>
                        </span>
                        <span>Enregistrer</span>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
