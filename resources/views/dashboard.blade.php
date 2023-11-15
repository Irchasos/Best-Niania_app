@extends('layouts.app')

@section('content')

    <style>
        .inf-content {
            border: 1px solid #DDDDDD;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
        }
    </style>
    <div class="container bootstrap snippets bootdey">
        <div class="panel-body inf-content">
            <div class="row">
                <div class="col-md-4">
                    <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip"
                         src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario">
                    <ul title="Ratings" class="list-inline ratings text-center">
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3><strong>User Information</strong><br></h3>
                    <div class="table-responsive">
                        <table class="table table-user-information">
                            <tbody>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                        Identificacion
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{$user->id}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-user  text-primary"></span>
                                        Name
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{$user->name}}
                                    <button type="button" class="btn  btn-sm btn-primary">Change</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-cloud text-primary"></span>
                                        Email
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{$user->email}}
                                    <button type="button" class="btn  btn-sm btn-primary">Change</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-bookmark text-primary"></span>
                                        Guardian
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    @if($user->guardian ===1)
                                        Guardian
                                    @else
                                        User/Customer
                                    @endif
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-eye-open text-primary"></span>
                                        Created
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{$user->created_at}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-envelope text-primary"></span>
                                        Password
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    **************
                                    <button type="button" class="btn  btn-sm btn-primary">Change</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-calendar text-primary"></span>
                                        Verified Mail
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    @if($user->email_verified_at ===null)
                                        No
                                    @else
                                        {{  $user->email_verified_at}}
                                    @endif
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    @if($user->guardian ===1)

        <div class="container bootstrap snippets bootdey">
            <div class="panel-body inf-content">
                <div class="row">
                    <div class="col-md-4">
                        <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip"
                             src="{{ asset('images/licence.jpg') }}" data-original-title="Usuario">
                        <ul title="Ratings" class="list-inline ratings text-center">
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3><strong>Guardian Information</strong><br></h3>
                        <div class="table-responsive">
                            <table class="table table-user-information">


                                    <tbody>
                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                                LicenceNumber
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            {{ $guardian->id}}                                </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="glyphicon glyphicon-user  text-primary"></span>
                                                Description </strong>
                                        </td>
                                        <td class="text-primary">
                                            {{ $guardian->description}}                                </td>
                                                                         </td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="glyphicon glyphicon-cloud text-primary"></span>
                                                Years of Work

                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            {{ $guardian->years_of_work}}                                </td>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="glyphicon glyphicon-bookmark text-primary"></span>
                                                Phone Number
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            {{ $guardian->phone_number}}                                </td>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="glyphicon glyphicon-eye-open text-primary"></span>
                                                Rank
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            {{ $guardian->rank}}                                </td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="glyphicon glyphicon-envelope text-primary"></span>
                                                Degree
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            {{ $guardian->degree}}                                </td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                                Photo
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            {{ $guardian->src}}                                </td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                                show opinie
                                            </strong>
                                        </td>
                                        <td class="btn btn-outline-dark "> SHOW
                                        </td>
                                    </tr>
                                    </tbody>


                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <div class="container bootstrap snippets bootdey">
            <div class="panel-body inf-content">
                <div class="row">
                    <div class="col-md-4">
                        <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip"
                             src="{{ asset('images/options.jpg') }}" data-original-title="Usuario">
                        <ul title="Ratings" class="list-inline ratings text-center">
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3><strong>Option Information</strong><br></h3>
                        <div class="table-responsive">
                            <form action="{{ route('updateOptionStatus') }}" method="POST" id="optionForm">
                                @csrf
                                <table class="table table-user-information">
                                    <tbody>
                                    @foreach($options as $option)
                                        <tr>
                                            <td>
                                                <strong>
                                                    <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                                    {{ $option->name }}
                                                </strong>
                                            </td>
                                            <td class="text-primary">{{ $option->id }}
                                                <button type="submit" class="btn btn-sm
                            @if($guardian->options->contains($option))
                                btn-warning set-button" name="option_id" value="{{ $option->id }}">Used
                                                    @else
                                                        btn-outline-dark not-set-button" name="option_id" value="{{ $option->id }}">Not Set
                                                    @endif
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <input type="hidden" name="status" id="statusInput" value="">
                            </form>


                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <div class="container bootstrap snippets bootdey">
            <div class="panel-body inf-content">
                <div class="row">
                    <div class="col-md-4">
                        <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip"
                             src="{{ asset('images/1.png') }}" data-original-title="Usuario">
                        <ul title="Ratings" class="list-inline ratings text-center">
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3><strong>Map</strong><br></h3>
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <form action="{{ route('updateDistrictStatus') }}" method="POST" id="districtForm">
                                    @csrf
                                    <table class="table table-user-information">
                                        <tbody>
                                        @foreach($districts as $district)
                                            <tr>
                                                <td>
                                                    <strong>
                                                        <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                                        {{ $district->id }} - {{ $district->name }}
                                                    </strong>
                                                </td>
                                                <td class="text-primary">
                                                    <button type="button" class="btn btn-sm
                        @if($guardian->districts->contains($district))
                            btn-primary set-button" data-district-id="{{ $district->id }}">Your District
                                                        @else
                                                            btn-danger not-set-button" data-district-id="{{ $district->id }}">Not Set
                                                        @endif
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <input type="hidden" name="status" id="statusInput" value="">
                                    <input type="hidden" name="district_id" id="districtIdInput" value="">
                                </form>

                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        const buttons = document.querySelectorAll('.set-button, .not-set-button');
                                        const statusInput = document.getElementById('statusInput');
                                        const districtIdInput = document.getElementById('districtIdInput');
                                        const form = document.getElementById('districtForm');

                                        buttons.forEach(button => {
                                            button.addEventListener('click', function () {
                                                const districtId = this.getAttribute('data-district-id');
                                                districtIdInput.value = districtId;
                                                statusInput.value = (this.classList.contains('set-button')) ? 'set' : 'unset';
                                                form.submit();
                                            });
                                        });
                                    });
                                </script>


                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    @endif

@endsection
