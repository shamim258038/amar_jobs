@extends('layouts.index')
@section('container')
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.css" />
    <section class="main no-padding">
        <div class="account-header">
            <div class="container">
                <div class="row">
                    @if(Auth::check())

                    @endif
                    <div class="col-sm-4 col-md-3 col-lg-2">
                        <!-- User avatar -->
                        <div class="profile_avatar">
                            <img src="{!! url('img/people/'.$data->profilePic) !!}" alt="avatar" class="img-responsive" id="show">
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-9 col-lg-10">
                        <div class="profile_summary">
                            <!-- User name -->
                            <h3 class="profile_name">{!! $data->firstName !!} {!! $data->middleName !!} {!! $data->lastName !!}</h3>
                            <!-- User status -->
                            <p>{!! $data->summary !!}</p>
                            <!-- Contact -->
                            <a href="{!! route('logout') !!}" class="btn btn-primary btn-warning btn-sm"><i class="fa fa-sign-out"></i> Sign Out</a>
                        </div> <!-- / .profile__summary -->
                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </div>
        <div class="container">
            <div class="row">
                @section('LeftMenuMyProfileCoverLetter','active-profile')
                @include('include.profileLeftMenu')
                <div class="col-md-9 col-sm-9">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{!! $error !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="col-md-9 col-sm-9">
                    <form action="{!! route('coverLetter.store') !!}" method="post">
                        <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#collapseB1" data-toggle="collapse">Cover Latter Add</a>
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="coverLetterTitle">Title</label>
                                    <input type="text" id="coverLetterTitle" class="form-control" name="coverLetterTitle" value="{!! old('coverLetterTitle') !!}">
                                </div>
                                <div class="form-group">
                                    <label for="coverLetter">Cover Letter</label>
                                    <textarea id="coverLetter" class="form-control" rows="8" name="coverLetter">{!! old('coverLetter') !!}</textarea>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="form-group">
                                    <button class="btn btn-success btn-block"><i class="fa fa-save"></i> Save Cover latter</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function () {
            $('.delete').click(function (event) {
                if(!confirm('Are you sure?')){
                    return false;
                }
                var actionTo=$(this).attr('href');
                var token=$(this).attr('data-token');
                var id=$(this).attr('data-id');
                $.ajax({
                    url:actionTo,
                    type: 'post',
                    data: {_method: 'delete',_token:token},
                    beforeSend:function() {
                        $('[data-id='+id+']').fadeOut();
                    },
                    success: function( msg ) {
                        $('.'+id).fadeOut();
                    }
                }).fail(function () {
                    $('[data-id='+id+']').fadeIn();
                });
                return false;
            })
        });
    </script>
@endsection