@extends('admin.admin_master')

@section('title')
    Add || Tutorial Parts
@endsection

@section('body')
@if(session('save_message'))
    <div class="alert alert-success">
        {{session('save_message')}}
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class=" card col-md-10">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 style="float: left">Add {{$tutorialinfos->tutorial_title}} parts</h4>
                    </div>
                    <div class="col-md-6 addRowDiv">
                        <a style="float: right" href="javascript:;" class="btn btn-info addRow"><i class="fas fa-plus"></i> Add Row</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('save_tutorials')}}" method="POST">
                @csrf
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Link</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <input type="hidden" name="tutorial_id" id="" value="{{$tutorialinfos->tutorial_id}}">
                        <td>
                            <input type="text" name="sub_tutorial_title[]" id="sub_tutorial_title" class="form-control" required>
                        </td>
                        <td>
                            <input type="url" name="sub_tutorial_link[]" id="sub_tutorial_link" class="form-control" required>
                        </td>
                        <td><a style="float: right" href="javascript:;" class="btn btn-danger deleteRow"><i class="fas fa-minus"></i></a></td>
                      </tr>
                    </tbody>

                  </table>
                  <div class="row" style="float: right">
                    <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Add Tutorials</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $('.addRowDiv').on('click','.addRow',function(){
        // alert('hello');
        var tr='<tr>'+
                '<td><input type="text" name="sub_tutorial_title[]" id="sub_tutorial_title" class="form-control" required></td>'+
                '<td><input type="url" name="sub_tutorial_link[]" id="sub_tutorial_link" class="form-control" required></td>'+
                '<td><a style="float: right" href="javascript:;" class="btn btn-danger deleteRow"><i class="fas fa-minus"></i></a></td>'+
                '</tr>';

                $('tbody').append(tr);
    });

    $('tbody').on('click','.deleteRow',function(){
        // alert("delete");
        $(this).parent().parent().remove();
    });
</script>
@endsection
