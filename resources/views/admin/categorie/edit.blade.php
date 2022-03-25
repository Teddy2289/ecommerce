@extends('layouts.admin')
@section('title')
    Edit | Categories
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Vertical Form</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ url('update_cat/'.$categorie->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text"  value="{{$categorie->name}}" name="name" class="form-control" placeholder="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Slug</label>
                        <div class="col-sm-10">
                            <input type="text"  value="{{$categorie->slug}}" name="slug" class="form-control" placeholder="slug">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea type="text"  name="description" rows="3" class="form-control" placeholder="description">{{$categorie->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">Satuts</div>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" value="{{$categorie->status == '1' ? 'checked':'' }}" name="status" type="checkbox">
                                <label class="form-check-label">
                                    Satuts
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">Populaire</div>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" value="{{$categorie->popular == '1' ? 'checked':''}}" name="popular" type="checkbox">
                                <label class="form-check-label">
                                    popular
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Meta_titre</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$categorie->meta_title}}" name="meta_title"  class="form-control" placeholder="description">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Meta_descri</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$categorie->meta_descri}}" name="meta_descri"  class="form-control" placeholder="description">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Meta_keyword</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$categorie->meta_keyword}}" name="meta_keyword"  class="form-control" placeholder="description">
                        </div>
                    </div>
                    @if($categorie->image)
                    <img src="{{asset('uploads/'.$categorie->image)}}" class="w-35" alt="">
                    @endif
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control" >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Save</button>
                    <a href="{{route('categorie')}}"  class="btn btn-outline-warning">Cancel</a>

                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
