@extends('user.layouts.app')

@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Search Members</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-11">


                                    <form class="form-inline" method="GET" action="{{ route('search')}} ">

                                        <div class="input-group ">
                                            <div class="input-group ">
                                                <input type="text" name="search" class="form-control" id="search" placeholder="Search Name or Email">
                                            </div>
                                            <div class="input-group">
                                                <div class="input-group-addon p-3 mb-2 bg-success text-white">Blood Group</div>
                                                <select name="bloodgroup" class="form-control" id="bloodgroup">
                                                    <option disabled="disabled" selected="selected">Any</option>
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
                                            <div class="input-group">
                                                <div class="input-group-addon p-3 mb-2 bg-success text-white">District</div>
                                                <select name="district" class="form-control" id="district">
                                                    <option disabled="disabled" selected="selected">Any</option>
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
                                            <div class="input-group">
                                                <div class="input-group-addon p-3 mb-2 bg-success text-white">Department</div>
                                                <select name="department" class="form-control" id="department">
                                                    <option disabled="disabled" selected="selected">Any</option>
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
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </form>

                                </div>
                                                            <div class="row">
                    <div class="col-md-12">

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>

                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Bloodgroup</th>
                                                        <th>Phone</th>
                                                        <th>Department</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($mission as $item)
                                                    <tr>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->email }}</td>
                                                        <td>{{ $item->bloodgroup }}</td>
                                                        <td>{{ $item->phone }}</td>
                                                        <td>{{ $item->department }}</td>
                                                    </tr>

                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer text-right">
        2015 © Moltran.
    </footer>

</div>
@endsection
