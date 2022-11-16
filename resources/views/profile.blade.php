@extends('user.layouts.app')

@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        @if ($user->image_path != null)
                        <img src="/images/users/{{ $user->image_path }}" class="img-fluid card-img-top" alt="{{ $user->name }}" width="300">
                        @else
                            <img src="{{ URL::to('admin/images/users/avatar-1.jpg')}}" alt="" class="img-fluid card-img-top" width="300">
                        @endif
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Full Name: {{ $user->name }}</li>
                                <li class="list-group-item">Nickname: {{ $user->nickname }}</li>
                                <li class="list-group-item">Email: {{ $user->email }}</li>
                                <li class="list-group-item">NID: {{ $user->nid }}</li>
                                <li class="list-group-item">Phone: {{ $user->phone }}</li>
                                <li class="list-group-item">Gender: {{ $user->gender }}</li>
                                <li class="list-group-item">Department: {{ $user->department }}</li>
                                <li class="list-group-item">Hall: {{ $user->hall }}</li>
                                <li class="list-group-item">Blood Group: {{ $user->bloodgroup }}</li>
                                <li class="list-group-item">Birth Date: {{ $user->birthdate }}</li>
                                <li class="list-group-item">District: {{ $user->district }}</li>
                                <li class="list-group-item">Address: {{ $user->address }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portlet"><!-- /portlet heading -->
                        <div class="portlet-heading">
                            <h3 class="portlet-title text-dark text-uppercase">
                                Info
                            </h3>
                            <div class="portlet-widgets">
                                <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                <span class="divider"></span>
                                <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                                <span class="divider"></span>
                                <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div id="portlet2" class="panel-collapse collapse in">
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#profileModal">Update Profile</button>
                                    </div>
                                </div>
                            </div>
                            <!-- modal -->
                            <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title">Update Profile</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                            @csrf
                                            {{-- @method('PUT') --}}
                                            <div class="row mb-3">
                                                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>
                                                <div class="col-md-6">
                                                <input type="file" class="form-control" name="image" id="image">
                    
                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="nickname" class="col-md-4 col-form-label text-md-end">{{ __('Nick Name') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ $user->nickname }}" required autocomplete="nickname" autofocus>
                    
                                                    @error('nickname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="nid" class="col-md-4 col-form-label text-md-end">{{ __('NID No.') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="nid" type="number" class="form-control @error('nid') is-invalid @enderror" name="nid" value="{{ $user->nid }}" required autocomplete="nid">
                    
                                                    @error('nid')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Contact No.') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required autocomplete="phone">
                    
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                    
                                                <div class="col-md-6">
                                                    <select id="gender" class="form-control" name="gender">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                      </select>
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="department" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>
                    
                                                <div class="col-md-6">
                                                    <select id="department" class="form-control" name="department">
                                                        <option disabled="disabled" selected="selected">Choose Department</option>
                                                        <option value="Bengali">Bengali</option>
                                                        <option value="English">English</option>
                                                        <option value="Arabic">Arabic</option>
                                                        <option value="Urdu and Persian Language">Urdu and Persian Language</option>
                                                        <option value="Palli and Sanskriti">Palli and Sanskriti</option>
                                                        <option value="History">History</option>
                                                        <option value="Philosophy">Philosophy</option>
                                                        <option value="Islamic Studies">Islamic Studies</option>
                                                        <option value="Islamic History &amp; Culture">Islamic History &amp; Culture</option>
                                                        <option value="Information Science and Library Management">Information Science and Library Management</option>
                                                        <option value="Theater and Music">Theater and Music</option>
                                                        <option value="World Religions and Culture">World Religions and Culture</option>
                                                        <option value="Economics">Economics</option>
                                                        <option value="Political Science">Political Science</option>
                                                        <option value="International Relations">International Relations</option>
                                                        <option value="Sociology">Sociology</option>
                                                        <option value="Mass Communication &amp; Journalism">Mass Communication &amp; Journalism</option>
                                                        <option value="Public Administration">Public Administration</option>
                                                        <option value="Anthropology">Anthropology</option>
                                                        <option value="Law">Law</option>
                                                        <option value="Management">Management</option>
                                                        <option value="Accounting &amp; Information Systems">Accounting &amp; Information Systems</option>
                                                        <option value="Marketing">Marketing</option>
                                                        <option value="Finance">Finance</option>
                                                        <option value="Physics">Physics</option>
                                                        <option value="Mathematics">Mathematics</option>
                                                        <option value="Chemistry">Chemistry</option>
                                                        <option value="Statistics">Statistics</option>
                                                        <option value="Applied Physics">Applied Physics</option>
                                                        <option value="Soil Science">Soil Science</option>
                                                        <option value="Botany">Botany</option>
                                                        <option value="Zoology">Zoology</option>
                                                        <option value="Biochemistry">Biochemistry</option>
                                                        <option value="Psychology">Psychology</option>
                                                        <option value="Microbiology">Microbiology</option>
                                                        <option value="Pharmacy">Pharmacy</option>
                                                        <option value="Geography &amp; Environment">Geography &amp; Environment</option>
                                                        <option value="Geology">Geology</option>
                                                        <option value="Applied Chemistry">Applied Chemistry</option>
                                                        <option value="Computer Science">Computer Science</option>
                                                        <option value="Institute of Fine Art">Institute of Fine Art</option>
                                                        <option value="Institute of Education and Research">Institute of Education and Research</option>
                                                        <option value="Institute of Statistical Research and Training">Institute of Statistical Research and Training</option>
                                                        <option value="Institute of Business Administration">Institute of Business Administration</option>
                                                        <option value="Institute of Social Welfare and Research">Institute of Social Welfare and Research</option>
                                                        <option value="Bangladesh College of Leather Engineering and Technology">Bangladesh College of Leather Engineering and Technology</option>
                                                        <option value="Institute of Leather Engineering and Technology">Institute of Leather Engineering and Technology</option>
                                                      </select>
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="hall" class="col-md-4 col-form-label text-md-end">{{ __('Hall') }}</label>
                    
                                                <div class="col-md-6">
                                                    <select id="hall" class="form-control" name="hall">
                                                        <option disabled="disabled" selected="selected">Choose Hall</option>
                                                        <option value="Jagannath Hall">Jagannath Hall</option>
                                                        <option value="Salimullah Muslim Hall">Salimullah Muslim Hall</option>
                                                        <option value="Dr. Muhammad Shahidullah Hall">Dr. Muhammad Shahidullah Hall</option>
                                                        <option value="Fazlul Huq Muslim Hall">Fazlul Huq Muslim Hall</option>
                                                        <option value="Saheed Sergeant Zahurul Haque Hall">Saheed Sergeant Zahurul Haque Hall</option>
                                                        <option value="Ruqayyah Hall">Ruqayyah Hall</option>
                                                        <option value="Surja Sen Hall">Surja Sen Hall</option>
                                                        <option value="Haji Muhammad Mohsin Hall">Haji Muhammad Mohsin Hall</option>
                                                        <option value="Shamsunnahar Hall">Shamsunnahar Hall</option>
                                                        <option value="Kabi Jasimuddin Hall">Kabi Jasimuddin Hall</option>
                                                        <option value="Sir A.F. Rahman Hall">Sir A.F. Rahman Hall</option>
                                                        <option value="Shahnewsaz Hostel">Shahnewsaz Hostel</option>
                                                        <option value="Bangabandhu Sheikh Mujibur Rahman Hall">Bangabandhu Sheikh Mujibur Rahman Hall</option>
                                                        <option value="Muktijoddha Ziaur Rahman Hall">Muktijoddha Ziaur Rahman Hall</option>
                                                        <option value="Bangladesh-Kuwait Maitree Hall">Bangladesh-Kuwait Maitree Hall</option>
                                                        <option value="IBA Hostel">IBA Hostel</option>
                                                        <option value="Hostel of Bangladesh College of Leather Engineering and Technology">Hostel of Bangladesh College of Leather Engineering and Technology</option>
                                                        <option value="Dr. Qudrat-i-Khuda Hall">Dr. Qudrat-i-Khuda Hall</option>
                                                    </select>
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="bloodgroup" class="col-md-4 col-form-label text-md-end">{{ __('Blood Group') }}</label>
                    
                                                <div class="col-md-6">
                                                    <select id="bloodgroup" class="form-control" name="bloodgroup">
                                                        <option disabled="disabled" selected="selected">Choose Group</option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                    </select>
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="birthdate" class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="birthdate" type="text" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ $user->birthdate }}" required autocomplete="birthdate">
                    
                                                    @error('birthdate')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="district" class="col-md-4 col-form-label text-md-end">{{ __('District') }}</label>
                    
                                                <div class="col-md-6">
                                                    <select id="district" class="form-control" name="district">
                                                        <option disabled="disabled" selected="selected">Choose District</option>
                                                        <option value="Barguna">Barguna</option>
                                                        <option value="Barisal">Barisal</option>
                                                        <option value="Bhola">Bhola</option>
                                                        <option value="Jhalokati">Jhalokati</option>
                                                        <option value="Patuakhali">Patuakhali</option>
                                                        <option value="Pirojpur">Pirojpur</option>
                                                        <option value="Bandarban">Bandarban</option>
                                                        <option value="Brahmanbaria">Brahmanbaria</option>
                                                        <option value="Chandpur">Chandpur</option>
                                                        <option value="Chittagong">Chittagong</option>
                                                        <option value="Cumilla">Cumilla</option>
                                                        <option value="Cox's Bazar">Cox's Bazar</option>
                                                        <option value="Feni">Feni</option>
                                                        <option value="Khagrachhari">Khagrachhari</option>
                                                        <option value="Lakshmipur">Lakshmipur</option>
                                                        <option value="Noakhali">Noakhali</option>
                                                        <option value="Rangamati">Rangamati</option>
                                                        <option value="Dhaka">Dhaka</option>
                                                        <option value="Faridpur">Faridpur</option>
                                                        <option value="Gazipur">Gazipur</option>
                                                        <option value="Gopalganj">Gopalganj</option>
                                                        <option value="Kishoreganj">Kishoreganj</option>
                                                        <option value="Madaripur">Madaripur</option>
                                                        <option value="Manikganj">Manikganj</option>
                                                        <option value="Munshiganj">Munshiganj</option>
                                                        <option value="Narayanganj">Narayanganj</option>
                                                        <option value="Narsingdi">Narsingdi</option>
                                                        <option value="Rajbari">Rajbari</option>
                                                        <option value="Shariatpur">Shariatpur</option>
                                                        <option value="Tangail">Tangail</option>
                                                        <option value="Bagerhat">Bagerhat</option>
                                                        <option value="Chuadanga">Chuadanga</option>
                                                        <option value="Jessore">Jessore</option>
                                                        <option value="Jhenaidah">Jhenaidah</option>
                                                        <option value="Khulna">Khulna</option>
                                                        <option value="Kushtia">Kushtia</option>
                                                        <option value="Magura">Magura</option>
                                                        <option value="Meherpur">Meherpur</option>
                                                        <option value="Narail">Narail</option>
                                                        <option value="Satkhira">Satkhira</option>
                                                        <option value="Jamalpur">Jamalpur</option>
                                                        <option value="Mymensingh">Mymensingh</option>
                                                        <option value="Netrakona">Netrakona</option>
                                                        <option value="Sherpur">Sherpur</option>
                                                        <option value="Bogra">Bogra</option>
                                                        <option value="Chapainawabganj">Chapainawabganj</option>
                                                        <option value="Joypurhat">Joypurhat</option>
                                                        <option value="Naogaon">Naogaon</option>
                                                        <option value="Natore">Natore</option>
                                                        <option value="Pabna">Pabna</option>
                                                        <option value="Rajshahi">Rajshahi</option>
                                                        <option value="Sirajganj">Sirajganj</option>
                                                        <option value="Dinajpur">Dinajpur</option>
                                                        <option value="Gaibandha">Gaibandha</option>
                                                        <option value="Kurigram">Kurigram</option>
                                                        <option value="Lalmonirhat">Lalmonirhat</option>
                                                        <option value="Nilphamari">Nilphamari</option>
                                                        <option value="Panchagarh">Panchagarh</option>
                                                        <option value="Rangpur">Rangpur</option>
                                                        <option value="Thakurgaon">Thakurgaon</option>
                                                        <option value="Habiganj">Habiganj</option>
                                                        <option value="Moulvibazar">Moulvibazar</option>
                                                        <option value="Sunamganj">Sunamganj</option>
                                                        <option value="Sylhet">Sylhet</option>
                                                      </select>
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                    
                                                <div class="col-md-6">
                                                    <textarea class="form-control" id="address" name="address" rows="3">{{ $user->address }}</textarea>
                                                </div>
                                            </div>
                    
                                            <div class="row mb-0">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Update') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div> <!-- /Portlet -->
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</div>
@endsection
