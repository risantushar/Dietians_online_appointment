@extends('admin.admin_master')

@section('title')
Add || Tutorial
@endsection

@section('body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h1 style="font-size: medium">Add Tutorial</h1>
                </div>
                <div class="card-body">
    <div class="login box box--big col-md-12" >
    <!-- form starts here -->
    <form action="{{route('add_tutorial')}}" method="post" enctype="multipart/form-data">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
        <h3 class="text-center text-success">{{Session::get('save_message')}}</h3>
        {{@csrf_field()}}
        <div class="agile-field-txt">
            <label style="color:#2951C3">Tutorial Category</label>
            <br>
            <select class="agile-field-txt float-left" name="tutorial_category_id"  style="width: 380px">
                <option class="text-center">---Select Category-----</option>
                @foreach($pcs as $pcs)
                    <option class="text-center" value="{{$pcs->id}}">{{$pcs->blog_category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="agile-field-txt">
            <label style="color:#2951C3">Tutorial Title</label>
            <br>
            <input style="text-align: center;height:30px;width: 380px;border:1px solid black" type="text" name="tutorial_title" required/>
        </div>
        <div class="agile-field-txt">
                <label style="color:#2951C3">Tutorial Description </label>
                <br>
                <textarea style="text-align: center;width: 380px;border:1px solid black" type="text" name="tutorial_description" required></textarea>
        </div>
        <div class="agile-field-txt">
                <label style="color:#2951C3">Tutorial Thumbnail </label>
                <br>
                <input type="file" name="tutorial_thumbnail" id="tutorial_thumbnail" style="text-align: center;border-radius:5px;height:30px;width: 380px;border:1px solid black">
        </div>
        <div class="row form-group justify-content-center" >
            <img id="tutorial_thumbnail_show" class="img-fluid" src="" alt="">
        </div>

        <div class="agile-field-txt">
            <label style="color:#2951C3">Intro Video link</label>
            <br>
            <input style="text-align: center;border-radius:5px;height:30px;width: 380px;border:1px solid black" type="link" name="tutorial_video"/>
        </div>
        <div class="agile-field-txt col-md-12">
            <label style="color:#2951C3;">Publication Status</label>

            <div class="agile-field-txt col-md-6">
                <label style="color:green;font-weight: bold">
                    <input style="text-align: center;" type="radio" name="publication_status" value="1"/>Published</label>
                <label style="color:red;font-weight: bold;">
                    <input style="text-align: center;" type="radio" name="publication_status" value="0"/>UnPublished</label>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary" type="submit">Post Tutorial</button>
        </div>
    </form>
</div>
<!-- //form ends here -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script >
$('#tutorial_thumbnail').change(function (e) {
    var reader=new FileReader();
    reader.onload=function (e) {
        $('#tutorial_thumbnail_show').attr('src',e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
    });
    // initSample();
</script>
@endsection