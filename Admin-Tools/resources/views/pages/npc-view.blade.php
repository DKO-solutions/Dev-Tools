@extends('App')
@section('content')

<main>
    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-bottom: 1em; margin-top: 1em;">
            <div class="col-sm-8">
                @csrf
                @if (Session::has('test'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('test') }}
                </div>
                @endif
                <table id="myTable" class="table table-dark table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">sSid</th>
                            <th>strName</th>
                            <th>SpawnCount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($knpc as $npc)
                        <tr class="text-center">
                            <td>{{ $npc->sSid }}</td>
                            <td>{{ $npc->strName }}</td>
                            <td>{{ $npc->SpawnCount }}</td>
                            <td>
                                <ul>
                                    <li class="nav-item dropdownTD">
                                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdownTD" aria-expanded="false">
                                            <i class="fa fa-gears icon-cog" style="color:aliceblue;"></i>
                                        </a>
                                        <ul class="dropdownTD-content">
                                            <li class="nav-item"><a class="nav-link dropdownTD-edit" data-bss-hover-animate="rubberBand" href="#">View</a></li>
                                            <li class="nav-item"><a class="nav-link dropdownTD-edit" data-bss-hover-animate="rubberBand" href="/npc/edit/{{$npc->id}}">Edit</a></li>
                                            <li class="nav-item"><a class="nav-link dropdownTD-delete" data-bss-hover-animate="rubberBand" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Deletion</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure that you want to delete this item?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yes</button>
                    <button type="button" class="btn btn-primary">No</button>
                </div>
            </div>
        </div>
    </div>
</main>

@stop