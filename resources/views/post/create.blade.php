@extends('layouts.admin')

@section('pageTitle', 'Create A Post')

@section('content')
    <h1 class="display-6">Create New Post</h1>

    <hr/>

    <!-- if validation in the controller fails, show the errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

     <div class="card-body">
        <div class="basic-form">
            <!--<form method="POST" action="{{ route('category.store') }}">-->
            <!--@csrf-->
            <!--    <div class="form-group">-->
            <!--       <label>Category Name</label>-->
            <!--        <input type="text" class="form-control input-default " name="name" placeholder="Enter Category type here" value="{{ old('name') }}">-->
            <!--        @error('name')-->
            <!--            <span class="invalid-feedback" role="alert">-->
            <!--            <strong>{{ $message }}</strong>-->
            <!--            </span>-->
            <!--        @enderror-->
            <!--    </div>-->

            <!--     <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Create Category</button>-->
            <!--</form>-->
             <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                   <label>H1 Tag</label>
                    <input type="text" class="form-control input-default " name="title" placeholder="Enter your H1 heading here" value="{{ old('title') }}">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                   <label>Featured Image</label>
                  <input type="file" class="form-control-file " id="file-input" name="image" value="{{ old('image') }}">
                    @error('image')
                        <span class="invalid-feedback"  role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div id="thumb-output"></div><br>
                </div>
                <div class="form-group">
                   <label>Featured Image Alt Text</label>
                    <input type="text" class="form-control input-default " name="altText" placeholder="Alt text here" value="{{ old('altText') }}">
                    @error('altText')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                   <label>Body Content</label>
                   <textarea class="form-control" name="content">{{ old('content') }}</textarea>
                    @error('content')
                        <span class="invalid-feedback"  role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                   <label>Meta title</label>
                    <input type="text" class="form-control input-default" name="metatitle" placeholder="Enter your Meta Title here" value="{{ old('metatitle') }}">
                    @error('metatitle')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                   <label>Meta Description</label>
                    <textarea type="text" class="form-control input-default" name="meta_description" placeholder="Enter your Meta description here">{{ old('meta_description') }}</textarea>
                    @error('meta_description')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                   <label>Slug</label>
                    <input type="text" class="form-control input-default" name="slug" placeholder="Enter your slug here" value="{{ old('slug') }}">
                    @error('slug')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                            <label for="Categories_id">Category</label>
                            <select id="Categories_id" name="categories_id" class="form-control">
                                <option value="">--- Select Category ---</option>
                                @foreach ($Categories as $category)
                                    <option value="{{ $category->id }}" {{ old('categories_id') == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('categories_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('categories_id') }}</strong>
                            </span>
                            @endif
                </div>

                 <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Create Post</button>
            </form>
        </div>
    </div>

@endsection

