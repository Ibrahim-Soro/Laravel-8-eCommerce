@section('title')
<title>Find it | Admin Slider</title>
@endsection

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-image mx-1"></i>Bannières</h1>

        <a href="{{ route('admin.addhomeslider') }}" class="btn btn-primary bg-gradient-primary btn-icon-split btn-sm d-none d-sm-inline-block pr-2">
            <span class="icon">
                <i class="fas fa-image"></i>
            </span>
            <span>Ajouter une bannière</span>
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
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Sous-titre</th>
                            <th>Prix</th>
                            <th>Lien</th>
                            <th>Statut</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>{{ $slider->id }}</td>
                                <td>
                                    <img src="{{ asset('assets/images/sliders') }}/{{ $slider->image }}" width="120" alt="{{ $slider->title }}">
                                </td>
                                <td>{{ $slider->title }}</td>
                                <td>{{ $slider->subtitle }}</td>
                                <td>{{ $slider->price }}</td>
                                <td>{{ $slider->link }}</td>
                                <td>{{ $slider->status == 1 ? 'Actif' : 'Inactif' }}</td>
                                <td>{{ $slider->created_at->format('d/m/Y à H:i') }}</td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn-circle text-white bg-gradient-secondary mx-3" href="{{ route('admin.edithomeslider', ['slider_id' => $slider->id]) }}" title="Modifier"><i class="fas fa-edit"></i></a>
                                        <a class="btn-circle text-white bg-gradient-danger mx-3" href="#" wire:click.prevent="deleteSlide({{ $slider->id }})" title="Supprimer"><i class="fas fa-trash "></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
