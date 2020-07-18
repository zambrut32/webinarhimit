@extends('index.index')
@section('content')
    <div class="wrapper">
            <div class="main">
                <div class="section">
                <div class="container">
                    <h2 style="text-align: center">Form Pengumpulan Link Project <br>
                        Webinar Laravel Fundamental</h2><br><br>
                    <form action="{{ route('tambahdata')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 col-sm-9">
                                <div class="form-group">
                                    <h6>Full Name<span class="icon-danger">*</span></h6>
                                    <input type="text" name="name" class="form-control border-input" required placeholder="enter name here...">
                                </div>
                                <div class="form-group">
                                    <h6>Email <span class="icon-danger">*</span></h6>
                                    <input type="text" name="email" class="form-control border-input" required placeholder="enter email here...">
                                </div>
                                <div class="form-group">
                                    <h6>Link <span class="icon-danger">*</span></h6>
                                    <input type="text" name="link" class="form-control border-input" required placeholder="enter link here...">
                                </div>
                            </div>
                        </div>

                        <h6><span class="icon-danger">*</span>Tuliskan nama lengkap karena akan dicantumkan di E-Certificate</h6>
                        <div class="row buttons-row">
                            <div class="col-md-4 col-sm-4">
                                <input type="submit" class="btn btn-outline-primary btn-block btn-round" value="submit"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
