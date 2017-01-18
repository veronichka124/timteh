@extends('layouts.app')

@section('content')


  <center><h1>Contact Us</h1></center>


  <form class="form-horizontal">
      <div class="form-group">
          <label class="control-label col-sm-2"></label>
          <div class="col-sm-8">
              <input type="text" class="form-control" id="email" placeholder="Name">
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-sm-2"></label>
          <div class="col-sm-8">
              <input type="email" class="form-control"  id="pwd" placeholder="Email">
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-sm-2"></label>
          <div class="col-sm-8">
            <textarea class="form-control" rows="5" id="message" placeholder="Your Message"></textarea>
              <p class="help-block text-danger"></p>
          </div>
      </div>

      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Send</button>
          </div>
      </div>
  </form>

@endsection

