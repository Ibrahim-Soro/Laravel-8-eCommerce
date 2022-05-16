@section('title')
<title>Find it | Sale time</title>
@endsection

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-clock mx-1"></i>Promo Time-line</h1>

        <a href="{{ route('admin.addproduct') }}" class="btn btn-primary bg-gradient-primary btn-icon-split btn-sm d-none d-sm-inline-block pr-2">
            <span class="icon">
                <i class="fas fa-fw fa-clock"></i>
            </span>
            <span>Ajouter une time-line</span>
        </a>
    </div>

    @if (Session::has('message'))
        <div class="alert alert-success bg-gradient-success text-white font-weight-bold text-center" role="alert"> <i class="fas fa-check-double px-1"></i> {{ Session::get('message') }}</div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Promo time-line</h6>
        </div>
        <div class="card-body">
            <form action="" wire:submit.prevent="updateSale">
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control" wire:model="status">
                                <option value="0">Inactif</option>
                                <option value="1">Actif</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sale-date">Période promo</label>
                            <input type="text" class="form-control" name="sale-date" id="sale-date" placeholder="AAAA/MM/JJ H:M:S" wire:model="sale_date">
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

@push('scripts')
    <script>
        $(function(){
            $('#sale-date').datetimepicker({
                format : 'DD/MM/Y h:m:s',
            })
            .on('dp.change',function(ev){
                var data = $('#sale-date').val();
                @this.set('sale_date',data);
            });
        });
    </script>
@endpush
