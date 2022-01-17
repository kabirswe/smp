
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Ticket</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog-rtl/">

    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Amiri:wght@400;700&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../blog/blog.rtl.css" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
       
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Ticket</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
       
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        @foreach($categories as $category) 
        <a class="p-2 link-secondary" href="{{ route('ticket.category', $category->id) }}">{{ $category->name }}</a>
        @endforeach  
    </nav>
  </div>
</div>

<main class="container"> 
  <div class="row mb-2">
    <div class="col-md-12">
      <div class="row g-0 flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        
      <div class="form-block">
            {!! Form::open(array('route' => 'ticket.store', 'method'=> 'POST', 'class'=> 'row g-3', 'id' => 'form-id', 'enctype' => 'multipart/form-data')) !!}
                @csrf
                         
                    {!! Form::hidden('category_name', $get_category->name, ['class' => 'form-control']) !!}
                    {!! Form::hidden('unit_price', $get_category->price, ['class' => 'form-control']) !!}
                    {!! Form::hidden('quantity', null, ['class' => 'form-control', 'id' => 'quantity']) !!}
                    <div class="box">
                        <div class="box-item" onclick="saveForm(1)">1</div>
                        <div class="box-item" onclick="saveForm(2)">2</div>
                        <div class="box-item" onclick="saveForm(3)">3</div>  
                        <div class="box-item" onclick="saveForm(4)">4</div>
                        <div class="box-item" onclick="saveForm(5)">5</div>
                        <div class="box-item" onclick="saveForm(6)">6</div>  
                        <div class="box-item" onclick="saveForm(7)">7</div>
                        <div class="box-item" onclick="saveForm(8)">8</div>
                        <div class="box-item" onclick="saveForm(9)">9</div>  
                        <div class="box-item" onclick="saveForm(10)">10</div>  

                    </div>                
               
                
                <!-- <div class="col-md-8">
                    {!! Form::label('unit_price', 'Unit Price', ['class' => 'form-label']) !!}
                    {!! Form::text('unit_price', null, ['class' => 'form-control']) !!}
                    @if($errors->has('unit_price'))
                        <div class="error_msg">
                            {{ $errors->first('unit_price') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-8">
                    {!! Form::label('quantity', 'Quantity', ['class' => 'form-label']) !!}
                    {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
                    @if($errors->has('quantity'))
                        <div class="error_msg">
                            {{ $errors->first('quantity') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-8">
                    {!! Form::label('total_price', 'Total Price', ['class' => 'form-label']) !!}
                    {!! Form::text('total_price', null, ['class' => 'form-control']) !!}
                    @if($errors->has('total_price'))
                        <div class="error_msg">
                            {{ $errors->first('total_price') }}
                        </div>
                    @endif
                </div> -->
                <!-- <div class="col-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div> -->
            {!! Form::close() !!}
        </div>
    </div>   
  </div>
</main>
<script>
    function saveForm(id) {
        document.getElementById('quantity').value = id;
        var form = document.getElementById("form-id");
        form.submit();
    };
</script>
  </body>
</html>
