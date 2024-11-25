@extends('layout')
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
                <div class="col-md-4"> <img alt="" style="width:100%;" title="" class="img-circle img-thumbnail isTooltip" src="{{ $guardian->src ? asset($guardian->src) : 'https://bootdey.com/img/Content/avatar/avatar7.png' }}" data-original-title="Usuario"> </div>

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
                                            {{ $guardian->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="glyphicon glyphicon-user text-primary"></span>
                                                Description
                                            </strong>
                                        </td>
                                        <td class="text-primary">
                                            <form action="{{ route('updateGuardianDescription', $guardian->id) }}" method="POST">
                                                @csrf
                                                <input type="text" name="description" value="{{ $guardian->description }}" class="form-control">
                                                <button type="submit" class="btn btn-primary mt-2">Save</button>
                                            </form>
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
                                            <form action="{{ route('updateGuardianYearsOfWork', $guardian->id) }}" method="POST">
                                                @csrf
                                                <input type="text" name="years_of_work" value="{{ $guardian->years_of_work }}" class="form-control">
                                                <button type="submit" class="btn btn-primary mt-2">Save</button>
                                            </form>
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
                                            <form action="{{ route('updateGuardianPhoneNumber', $guardian->id) }}" method="POST">
                                                @csrf
                                                <input type="text" name="phone_number" value="{{ $guardian->phone_number }}" class="form-control">
                                                <button type="submit" class="btn btn-primary mt-2">Save</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="glyphicon glyphicon-eye-open text-primary"></span>
                                                Rank
                                            </strong>
                                        </td>
                                        <td class="achievements">
                                                <div class="star-rating">
                                                    @php
                                                        $fullStars = floor($guardian->rank);
                                                        $emptyStars = 5 - $fullStars;
                                                    @endphp

                                                    @for ($i = 0; $i < $fullStars; $i++)
                                                        <span class="star">&#9733;</span> <!-- pełna gwiazdka -->
                                                    @endfor

                                                    @for ($i = 0; $i < $emptyStars; $i++)
                                                        <span class="star empty">&#9734;</span> <!-- pusta gwiazdka -->
                                                    @endfor
                                            </div>



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


                                            <form action="{{ route('updateGuardianDegree', $guardian->id) }}" method="POST">
                                                @csrf
                                                <input type="text" name="degree" value="{{ $guardian->degree }}" class="form-control">
                                                <button type="submit" class="btn btn-primary mt-2">Save</button>
                                            </form>


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
                                            <form action="{{ route('updateGuardianPhoto', $guardian->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="src" value="{{ $guardian->src }}" class="form-control">
                                                <input type="file" name="photo" accept="image/*" class="form-control">
                                                <button type="submit" class="btn btn-primary mt-2">Save</button>
                                            </form>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>
                                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                                Show Opinie
                                            </strong>
                                        </td>
                                        <td>
                                            <a href="{{ route('showGuardianReviews', $guardian->id) }}" class="btn btn-warning">SHOW</a>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

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
                                            <td class="text-primary">
                                                <button type="button" class="btn btn-sm
                                            @if($guardian->options->contains($option))
                                                btn-warning set-button-option" data-option-id="{{ $option->id }}">Used
                                                    @else
                                                        btn-outline-dark not-set-button-option btn-danger " data-option-id="{{ $option->id }}">Not Set
                                                    @endif
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <input type="hidden" name="status" id="statusInputOption" value="">
                                <input type="hidden" name="option_id" id="optionIdInput" value="">
                            </form>
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    const formOption = document.getElementById('optionForm');
                                    const statusInputOption = document.getElementById('statusInputOption');
                                    const optionIdInput = document.getElementById('optionIdInput');

                                    formOption.querySelectorAll('.set-button-option, .not-set-button-option').forEach(button => {
                                        button.addEventListener('click', function () {
                                            const optionId = this.getAttribute('data-option-id');
                                            optionIdInput.value = optionId;
                                            statusInputOption.value = (this.classList.contains('set-button-option')) ? 'set' : 'unset';
                                            formOption.submit();
                                        });
                                    });
                                });
                            </script>
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
                    </div>
                    <div class="col-md-6">
                        <h3><strong>Map</strong><br></h3>
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
                                                <button type="button" class=" btn btn-sm
                                                @if($guardian->districts->contains($district))
                                                btn-primary set-button-district" data-district-id="{{ $district->id }}">Your District
                                                    @else
                                                        btn-danger not-set-button-district"
                                                        data-district-id="{{ $district->id }}">Not Set
                                                    @endif
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <input type="hidden" name="status" id="statusInputDistrict" value="">
                                <input type="hidden" name="district_id" id="districtIdInput" value="">
                            </form>
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    const formDistrict = document.getElementById('districtForm');
                                    const statusInputDistrict = document.getElementById('statusInputDistrict');
                                    const districtIdInput = document.getElementById('districtIdInput');

                                    formDistrict.querySelectorAll('.set-button-district, .not-set-button-district').forEach(button => {
                                        button.addEventListener('click', function () {
                                            const districtId = this.getAttribute('data-district-id');
                                            districtIdInput.value = districtId;
                                            statusInputDistrict.value = (this.classList.contains('set-button-district')) ? 'set' : 'unset';
                                            formDistrict.submit();
                                        });
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif
@endsection
