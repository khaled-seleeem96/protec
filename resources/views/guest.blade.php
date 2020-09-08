
@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
        <table class="table "style="background:#2171ff;color:white">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $d)
    <tr> 
      <th> {{$d->id}}</th>
      <td> {{$d->name}}</td>
      <td> {{$d->email}}</td>
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="{{'#modal'.$d->id}}" > More</button></td>
      <td><a href="/deleteGuest/{{$d->id}}" class="btn btn-danger ">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
            </div>
        </div>


        @foreach($data as $d)
          <div class="modal fade" data-name="{{$d->name}}" id="{{'modal'.$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Message</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h5 class="text" >Name</h5>
                  <p class="text" >{{$d->name}}</p>
                  <hr>
                  <h5 class="text" >Email</h5>
                  <p class="text" >{{$d->email}}</p>
                  <hr>
                  <h5 class="text" >Message</h5>
                  
                  <h4>{{$d->msg}}</h4>
                  <br>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>
                </form>
              </div>
            </div>
          </div>

        @endforeach
        </div>
    </div>
</div>
@endsection