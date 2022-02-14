@extends('admin.layouts.app')


@push('custom-style')

@endpush

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-block dashboard">
    <section class="main-content">
        <div class="title-section d-flex justify-content-between align-items-center">
            <div class="text-block">
                <h1 class="title">New Product Create</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-block">
                <a class="btn btn-primary" href="{{ route('product.index') }}">
                <ion-icon name="list-outline"></ion-icon>
                    <span>Product List</span>
                </a>
            </div>
        </div>
        <div class="form-block">
            {!! Form::open(array('route' => 'product.store', 'method'=> 'POST', 'class'=> 'row g-3', 'enctype' => 'multipart/form-data')) !!}
                @csrf
                <div class="col-md-9">
                    <div class="col-md-11">
                        {!! Form::label('name', 'Title', ['class' => 'form-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'required' => true]) !!}
                        @if($errors->has('name'))
                            <div class="error_msg">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>
                    {{-- Imagess Upload section start --}}
                    <section class="box-content mt-20" id="scroll-image">
                        <div class="data-container" >
                            <div class="data-block cover-image drop-container" data-id="0">
                                <div class="field-text">Cover image <span class="required-span d-flex">*</span></div>
                                <div class="upload-btn-block">
                                    <div class="select-btn" id="drop-container" data-id="coverImage">
                                        {!! Form::label('coverImage', 'Select files', ['class'=>'']) !!}
                                        {!! Form::hidden('coverImage_data',"", ['id' => 'coverImage_data', 'class' => 'product-image']) !!}
                                        {!! Form::file('coverimage', ['onchange' => 'imageUpload(this)', 'id' => 'coverImage','class' => 'drop-area-text', 'required' => true]) !!}
                                    </div>
                                    <div class="delete-btn" id="coverImageDelete" onclick="removeImage('coverImage')">Delete image</div>
                                </div>
                                <div class="image-name" id="coverImageName">Not selected</div>
                                <div class="product-image">
                                    <img id="coverImagePreview" src="{{ asset('images/admin/default.jpg') }}" alt="">
                                    <span class="formate-error coverImageerror">Select a jpg, jpeg, png type image file.</span>
                                </div>
                                @if($errors->has('cover_image'))
                                    <div class="error_msg">
                                        {{ $errors->first('cover_image') }}
                                    </div>
                                @endif
                            </div>
                            <hr>
                            <div class="data-block pb-0 drop-container" data-id="1">
                                <div class="field-text mt-30">Additional image</div>
                                <div class="upload-btn-block">
                                    <p class="index">image1*</p>
                                    <div class="select-btn" id="drop-container-1" data-id="thumbnail_image1">
                                        {!! Form::label('thumbnail_image1', 'Select files') !!}
                                        {!! Form::hidden('thumbnail_image1_data',"", ['id' => 'thumbnail_image1_data', 'class' => 'product-image']) !!}
                                        {!! Form::file('thumbnail_image[]', ['onchange' => 'imageUpload(this)', 'id' => 'thumbnail_image1', 'required' => true]) !!}
                                    </div>
                                    <div class="delete-btn" id="thumbnail_image1Delete"  onclick="removeImage('thumbnail_image1', true)">Delete image</div>
                                </div>
                                <div class="image-name space-top" id="thumbnail_image1Name">Not selected</div>
                                <div class="product-image">
                                    <img id="thumbnail_image1Preview" src="{{ asset('images/admin/default.jpg') }}" alt="">
                                    <span class="formate-error thumbnail_image1error">Select a jpg, jpeg, png type image file.</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 d-flex w-100 justify-content-center">
                                <button onclick="addImages()" type="button" class="btn btn-secondary m-5">Add more image</button>
                            </div>
                    </section>
                    <!-- Imagess Upload section end -->

                    <div class="col-md-11">
                        {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
                        {!! Form::textarea('description', null, ['placeholder' => 'Description', 'class' => 'form-control', 'id' => 'description', 'type' => 'textarea', 'required' => true]) !!}
                        @if($errors->has('description'))
                            <div class="error_msg">
                                {{ $errors->first('description') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-11">
                        <button type="submit" class="btn btn-primary mt-4">Save</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-md-8">
                        {!! Form::label('quantity', 'Quantity', ['class' => 'form-label']) !!}
                        {!! Form::number('quantity', null, ['class' => 'form-control', 'required' => true]) !!}
                        @if($errors->has('quantity'))
                            <div class="error_msg">
                                {{ $errors->first('quantity') }}
                            </div>
                        @endif
                    </div>
                    <div class="d-flex flex-column pt-2">
                        <p>Trending Product</p>
                            <div class="form-check">
                                <input name="trending" class="form-check-input" value="1" type="checkbox" id="trending">
                                <label class="form-check-label" for="trending">Trending</label>
                            </div>
                    </div>
                    <div class="d-flex flex-column pt-2">
                        <p>Select a type</p>
                        @foreach($types as $type)
                            <div class="form-check">
                                <input name="product_type_id" class="form-check-input" value="{{ $type->id }}" type="radio" name="type" id="type{{ $type->id }}"{{ $loop->index == 0 ? ' checked' : '' }}>
                                <label class="form-check-label" for="type{{ $type->id }}">
                                    {{ $type->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex flex-column pt-2">
                        <p>Select categories</p>
                        @foreach($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="categories[]" value="{{ $category->id }}" id="category{{ $category->id }}">
                                <label class="form-check-label" for="category{{ $category->id }}">
                                    {{ $category->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </section>
</main>
@endsection

@push('custom-scripts')
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        var noImage = "{{ asset('images/admin/default.jpg') }}";

        // ckeditor init js
        setTimeout(function(){
            CKEDITOR.replace('description', {
                filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
        },100);

        // Add images function
        var imageCounter = 1;
        function addImages() {
            imageCounter++;
            var removeThumbnail_image = 'thumbnail_image' + imageCounter;
            var view = '';
            view += '<div class="data-block pb-0 drop-container" data-id="' + imageCounter +'">';
            view += '<div class="field-text mt-30"></div>';
            view += '<div class="upload-btn-block">';
            view += '<p class="index">image' + imageCounter +'</p>';
            view += '<div class="select-btn" id="drop-container-' + imageCounter +'" data-id="thumbnail_image' + imageCounter +'">';
            view += '<label for="thumbnail_image' + imageCounter +'">Select files</label>';
            view += '<input id="thumbnail_image' + imageCounter +'_data" class="product-image" name="thumbnail_image' + imageCounter +'_data" type="hidden" value="">';
            view += '<input onchange="imageUpload(this)" id="thumbnail_image' + imageCounter +'" name="thumbnail_image[]" type="file">';
            view += '</div>';
            view += '<div class="delete-btn" id="thumbnail_image' + imageCounter +'Delete" onclick="removeImage(\'' + removeThumbnail_image +'\', true)">Delete image</div>';
            view += '</div>';
            view += '<div class="image-name space-top" id="thumbnail_image' + imageCounter +'Name">Not selected</div>';
            view += '<div class="product-image">';
            view += '<img id="thumbnail_image' + imageCounter +'Preview" src="' + noImage +'" alt="">';
            view += '<span class="formate-error thumbnail_image' + imageCounter +'error">Select a jpg, jpeg, png type image file.</span>';
            view += '</div>';
            view += '</div>';

            $('.data-container').append(view);
        }

        // image upload and preview js
        function imageUpload( e ) {
            var imgPath = e.value;
            var ext = imgPath.substring( imgPath.lastIndexOf( '.' ) + 1 ).toLowerCase();
            if ( ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg" ) {
                readURL( e, e.id );
                $( '.' + e.id + 'error' ).hide()
                $( '.btn-submit' ).prop( "disabled", false );
            } else {
                $( '.' + e.id + 'error' ).html( 'Select a jpg, jpeg, png type image file.' ).show();
                $( '.btn-submit' ).prop( "disabled", true );
            }
        }

        var imageName;
        function readURL( input, id ) {
            if ( input.files && input.files[ 0 ] ) {
                imageName = input.files[0].name;
                var reader = new FileReader();
                reader.readAsDataURL( input.files[ 0 ] );
                reader.onload = function ( e ) {
                    $( '#' + id + 'Preview' ).attr( 'src', e.target.result ).show();
                    $( '#' + id + 'Delete' ).css( 'display', 'flex' );
                    $( '#' + id + 'Name' ).html( input.files[ 0 ].name );
                    $("#" + id + "_data").attr("value", imageName);
                };
            }
        }

        function removeImage( id, noPreview ) {
            $( "#" + id ).val( null );
            if ( noPreview ) {
                $( '#' + id + 'Preview' ).attr( 'src', noImage ).hide();
            } else {
                $( '#' + id + 'Preview' ).attr( 'src', noImage );
            }
            $( '#' + id + 'Name' ).html( 'Not selected' );
            $( '#' + id + 'Delete' ).css( 'display', 'none' );
        }

    </script>
@endpush
