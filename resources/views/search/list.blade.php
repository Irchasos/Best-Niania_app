@extends('layout')

@section('content')





    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2>Lista dostępnych opiekunek</b></h2>
                        </div>

                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Tytuł</th>
                        <th>Imię</th>
                        <th>Data dołaczenia</th>
                        <th>Lata doświadczenia</th>
                        <th>Rank</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($guardians as $guardian)


                        <tr>
                            <td>{{$guardian->degree}}</td>
                            <td><a href="#"><img style="height:50px;width:50px"
                                                 src="{{asset('images/')}}/{{$guardian->src}}" class="avatar"
                                                 alt="Avatar"> {{$guardian->name}}</a></td>
                            <td>{{$guardian->created_at}}</td>
                            <td>{{$guardian->years_of_work}}</td>
                            <td><span class="status text-success">&bull;</span> {{$guardian->rank}}/10</td>
                            <td>
                                <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i
                                        class="fas fa-angle-double-right"></i></a>
                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i
                                        class="fas fa-exclamation-triangle"></i></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection('content')
