@extends('layouts.app')

@section('content')

@php

    $status = [ 
    0 => 'new',
    1 => 'checked',
    2 => 'done'
    ]

@endphp


<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
        <table  class="table table-dark" style="background:#2171ff">
        <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">E-mail</th>
          <th scope="col">Section</th>
          <th scope="col">Date</th>
          <th scope="col">Done</th>
          <th scope="col">More</th>
          <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $d)
        <tr>
          <th> {{$d->client->name}}</th>
          <th> {{$d->client->email}}</th>
          <th> {{$d->category->category}}</th>
          <th>{{$d->created_at}}</th>
          <th>
            <div class='check'>
            {{$status[$d->done]}}  
            {{($d->checked_by && !$d->done_by)?' by '.$d->checker->name:''}}
            {{($d->done_by)?' by '.$d->status_done->name:''}}
            
            </div>
          </th>
        
          <td>
          <button type="button" id='resad_more' data-current_user='{{Auth::user()->id}}'  data-id='{{$d->id}}' data-value="1" class="btn btn-primary read_more" data-toggle="modal" data-target="{{'#modal'.$d->id}}" > More</button></td>
          <td><a href="/deleteGuest/{{$d->id}}" class="btn btn-danger ">Delete</a></td>
          </tr>
        @endforeach
        </tbody>
        </table>

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
                  <p class="text" >{{$d->client->name}}</p>
                  <hr>
                  <h5 class="text" >Email</h5>
                  <p class="text" >{{$d->client->email}}</p>
                  <hr>
                  <h5 class="text" >Message</h5>
                  
                  <h4>{{$d->msg}}</h4>
                  <br>
                  <button type="button"  data-current_user='{{Auth::user()->id}}'  data-id='{{$d->id}}' data-value="2" class="btn btn-primary read_more"  > Done</button></td>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>
                </form>
              </div>
            </div>
          </div>

        @endforeach
    </div>
</div>

<script>

$('.read_more').on('click',function(){
    // alert($(this).data(value));
    
    var thisss = $(this);
    
      $.ajax({
        type: "GET",
        url: '/updateStatus/'+$(this).data('id'), // This is what I have updated
        data: { 
            new_status: $(this).data('value'),
            user: $(this).data('current_user')
         }
    }).done(function( msg ) {
      
        if(msg['new_status']==1)
        {
          thisss.parent().parent().find('.check').html('checkd by '+ msg['checked_by'])
        }
        else if(msg['new_status']==2)
        {
          thisss.parent().parent().find('.check').html('Done by '+ msg['done_by'])
          location.reload();
        }
    });
})
</script>
@endsection



