<div>
    @include('livewire.entreprise.type-offre.modal')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="border-bottom pb-3 mb-3">
                    <div class="d-flex flex-column gap-1">
                        <h1 class="mb-0 h2 fw-bold">Type Offres</h1>
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/entreprise/dashbord') }}">Dashboard</a>
                                </li>

                                <li class="breadcrumb-item active" aria-current="page">
                                    Type Offre
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCatgory">Ajouter Type
                Offre</a>
        </div>
        <div class="row">
            <!-- basic table -->
            <div class="col-md-12 col-12">
                <div class="card mb-5">
                    <!-- card header  -->
                    <div class="card-header">
                        <h4 class="mb-1">Type Offre</h4>
                    </div>
                    <!-- table  -->
                    <div class="card-body">
                        <div class="table-card">
                            <table id="dataTableBasic" class="table table-hover" style="width: 100%">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Modifier</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($typeOffres as $typeOffre)
                                        <tr>
                                            <td>{{ $typeOffre->id }}</td>
                                            <td>{{ $typeOffre->nom }}</td>
                                            <td>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#newCatgory" wire:click="editTypeOffre({{ $typeOffre->id }})" class="btn btn-primary btn-sm">Modifier</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
