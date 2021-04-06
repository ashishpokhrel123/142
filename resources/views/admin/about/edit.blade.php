@extends('admin.layouts.app');
@section('title') Edit @endsection


@section('body')

<!--create tab content-->    
    <div class="card bg-white">
        <div class="card-header text-right bg-white">
            <a href="{{ url('admin/about')}}" class="btn-link">Cancel</a>
        </div>
        <div class="card-body">
            <!-- error messages -->
                @include('admin.includes.message')

                <form class="well form-horizontal" action="{{ url('/updateAbout') }}" method="POST" enctype="multipart/form-data" id="addmovie">
                    @csrf
                        <!--about title-->
                            <div class="form-group mb-3">
                                <label for="email">Title *</label>
                                    <input type="text" class="form-control" name="title" value="{{  }}" required>
                            </div>
                        <!--description-->    
                            <div class="form-group mb-3">
                                <label for="email">Description *</label>
                                    <textarea name="description" id="editor" value=""></textarea>
                            </div>
                        <!--status-->    
                            <div class="form-group">
                                <label for="status">Status</label>
                                    <select class="form-control" name="status">
                                        <option selected value="0">Active</option>
                                        <option value="1">Inactive</option>
                                    </select>
                            </div>
                        <!--button-->   
                            <div class="form-group"> 
                                <button type="submit" class="btn btn-default submit">Create</button>
                            </div>
                </form>

                @endsection