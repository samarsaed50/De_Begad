@extends('layouts.app')
@section('content')
<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">create new Info</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('info.store')}}" enctype="multipart/form-data">
            {{--for security--}}
            {{csrf_field()}}
              <div class="box-body">
              {{--title--}}
              <div class="form-group">
                  <label for="exampleInputtitle">Title</label>
                  <input type="text" class="form-control" name="title"  placeholder="Enter title" value="{{old('title')}}">
                </div>
                {{--body--}}
                <div class="form-group">
                  <label for="exampleInputdescription">Description</label>
                  <textarea class="form-control" name="description"  placeholder="Enter description" rows="4" cols="50">{{old('description')}}</textarea>
                </div> 
                <div class="form-group">
                  <label for="exampleInputcategory">Category</label>
                  <select class="form-control" name="category_id"  placeholder="Enter category">
                  @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                  </select>
                <div class="form-group">
                <label for="exampleInputImage">Image</label>
                 <input type="file" class="form-control" name="image" id="image" value="{{old('image')}}"> 
                  </div>
                </div> 
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add Info</button>
              </div>
            </form>
          </div>
          </div>
          </div>
</section>
@endsection