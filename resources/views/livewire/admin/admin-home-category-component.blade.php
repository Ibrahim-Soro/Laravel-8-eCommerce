@section('title')
<title>Find it | Admin Home Categories</title>
@endsection

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-tasks mx-1"></i> Gestion des catégories</h1>
    </div>

    @if (Session::has('message'))
        <div class="alert alert-success bg-gradient-success text-white font-weight-bold text-center" role="alert"> <i class="fas fa-check-double px-1"></i> {{ Session::get('message') }}</div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Gestion de la catégorie</h6>
        </div>
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <form wire:submit.prevent="updateHomeCategory">

                        <div class="form-group" wire:ignore>
                            <label for="categories[]" class="control-label">Choisir des catégories:</label>
                            <select name="categories[]" id="categories[]" multiple="multiple" class="form-control sel_categories" wire:model="selected_categories">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="numberof" class="control-label">Nbr d'articles:</label>
                            <input name="numberof" id="numberof" multiple="multiple" class="form-control" wire:model="number_of_products"/>
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

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.sel_categories').select2();
            $('.sel_categories').on('change', function(e){
                var data = $('.sel_categories').select2("val");
                @this.set('selected_categories', data);
            });
        });
    </script>
@endpush
