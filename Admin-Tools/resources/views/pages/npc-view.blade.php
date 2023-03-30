@extends('App')
@section('content')

<main>
    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-bottom: 1em;">
            <div class="col-sm-8">
                <table id="myTable" class="table table-dark table-striped table-hover">
                    <thead>
                        <tr>
                            <th>sSid</th>
                            <th>strName</th>
                            <th>SpawnCount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($knpc as $npc)
                        <tr>
                            <td>{{ $npc->sSid }}</td>
                            <td>{{ $npc->strName }}</td>
                            <td>{{ $npc->SpawnCount }}</td>
                            <td>
                                <ul>
                                    <li class="nav-item dropdownTD">
                                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdownTD" aria-expanded="false">
                                            <i class="fa fa-gears" style="color:aliceblue;"></i>
                                        </a>
                                        <ul class="dropdownTD-content">
                                            <li class="nav-item"><a class="nav-link dropdownTD-edit" data-bss-hover-animate="rubberBand" href="#">View</a></li>
                                            <li class="nav-item"><a class="nav-link dropdownTD-edit" data-bss-hover-animate="rubberBand" href="#">Edit</a></li>
                                            <li class="nav-item"><a class="nav-link dropdownTD-delete" data-bss-hover-animate="rubberBand" href="#">Delete</a></li>
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
</main>

@stop