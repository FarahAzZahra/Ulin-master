@extends('index')
@section('title')
Create Content
@endsection
@section('content')
<form action="{{ route('create.content') }}" method="POST">
    <div class="form-group">
      <label for="exampleFormControlInput1">Content Title</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter Title" name="judul">
    </div><br>
    <div class="form-group">
        <label for="exampleFormControlFile1">Insert Images</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
    </div><br>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Deskripsi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
      </div><br>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Example select</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Example multiple select</label>
      <select multiple class="form-control" id="exampleFormControlSelect2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
  </form>
@endsection
