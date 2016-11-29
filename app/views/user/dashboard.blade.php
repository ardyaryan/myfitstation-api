@extends('layouts.mobile')
@section('title')
Dashboard
@stop

@section('body')
<div id="">

        <div class="col-lg-12">
                  <p>
                    <a href="#" class="btn btn-sq-lg btn-primary" style="width: 150px !important; height: 150px !important; border-radius: 0; margin-left: -4px;">
                        <i class="fa fa-user fa-5x"></i><br>
                        View Tickets
                    </a>
                    <a href="#" class="btn btn-sq-lg btn-success" style="width: 150px !important; height: 150px !important; border-radius: 0; margin-left: -4px;">
                      <i class="fa fa-user fa-5x"></i><br>
                      Dashbaord <br>
                    </a>
                    <a href="#" class="btn btn-sq-lg btn-info" style="width: 150px !important; height: 150px !important; border-radius: 0; margin-left: -4px;">
                      <i class="fa fa-user fa-5x"></i><br>
                      Links
                    </a>
                    <a href="#" class="btn btn-sq-lg btn-warning" style="width: 150px !important; height: 150px !important; border-radius: 0; margin-left: -4px;">
                      <i class="fa fa-user fa-5x"></i><br>
                      Take our Survey
                    </a>
                    <a href="#" class="btn btn-sq-lg btn-danger" style="width: 150px !important; height: 150px !important; border-radius: 0; margin-left: -4px;">
                      <i class="fa fa-user fa-5x"></i><br>
                      Documents
                    </a>
                    <a href="#" class="btn btn-sq-lg btn-success" style="width: 150px !important; height: 150px !important; border-radius: 0; margin-left: -4px;">
                      <i class="fa fa-user fa-5x"></i><br>
                      Documents
                    </a>
                  </p>
        </div>


</div>
@stop

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="{{ URL::asset('userDashboard.js')}}"></script>
