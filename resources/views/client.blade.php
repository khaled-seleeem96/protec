@extends('layouts.app')

@section('content')
<div class="container">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" > New Client</button>
    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-12">
        <table class="table table-dark" style="background:#2171ff">
        <thead><tr><th scope="col">Name</th>
        <th scope="col">E-mail</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $d)
            <tr>
            <th scope="row">{{$d->name}}</th>
            <td>{{$d->email}}</td>
            <td>{{$d->phone}}</td>
            <td>{{$d->address}}</td>
            <td><a href="/deleteClient/{{$d->id}}" class="btn btn-danger ">Delete</a></td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
<div style="z-index: 1900;"  class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div   class="modal-dialog modal-dialog-centered" role="document">
      <div style="background-image: url({{ asset('img/56413.jpg')}});" class="modal-content">
        <div class="modal-header">
            <div style="text-align: center;align-items: center;">
                <img  src="{{ asset('img/logo3.png')}}" width="150px"   alt="Protec"   >
                 </div>
            
          </button>
        </div>
        <div class="modal-body">
            <form style="min-height: 400px;" action="{{route('addClient')}}" method="post" enctype="multipart/form-data" >
            {{ csrf_field() }}
                <input type="email" class="con-input" name="email" placeholder="Your Email *" required >
                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="text">{{ $errors->first('email') }}</strong>
                                    </span>
                                    <br><br>
                                @endif
                                
                <input type="text" class="con-input" name="name" placeholder="Your Name *" required >
                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong class="text">{{ $errors->first('name') }}</strong>
                                    </span>
                                    <br><br>
                                @endif
                <input type="text" class="con-input" name="phone" placeholder="Your Phone *" required >
                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong class="text">{{ $errors->first('phone') }}</strong>
                                    </span>
                                    <br><br>
                                @endif
                <input type="text" class="con-input" name="address" placeholder="Your Address *" required >
                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong class="text">{{ $errors->first('address') }}</strong>
                                    </span>
                                    <br><br>
                                @endif
                <input type="text" name="password" class="con-input" placeholder="Your Password *" required >
                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong class="text">{{ $errors->first('password') }}</strong>
                                    </span>
                                    <br><br>
                                @endif
                <input class="con-btn" type="submit" value="New Client"> 
                <button  type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
        </div>
      </div>
    </div>
  </div>



@endsection