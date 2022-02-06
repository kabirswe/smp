
@extends('admin.layouts.app')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-block dashboard">
    <div class="title-section d-flex flex-column justify-content-center align-items-start pt-3 pb-2 mb-3">
        <div class="text-block">
        <h3>OVERVIEW</h3>
        <h1 class="h2">Dashboard</h1>
    </div>
    <!-- <h2>Section title</h2>
    <div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Header</th>
            <th scope="col">Header</th>
            <th scope="col">Header</th>
            <th scope="col">Header</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1,001</td>
            <td>random</td>
            <td>data</td>
            <td>placeholder</td>
            <td>text</td>
        </tr>
        <tr>
            <td>1,002</td>
            <td>placeholder</td>
            <td>irrelevant</td>
            <td>visual</td>
            <td>layout</td>
        </tr>
        <tr>
            <td>1,003</td>
            <td>data</td>
            <td>rich</td>
            <td>dashboard</td>
            <td>tabular</td>
        </tr>
        <tr>
            <td>1,003</td>
            <td>information</td>
            <td>placeholder</td>
            <td>illustrative</td>
            <td>data</td>
        </tr>
        <tr>
            <td>1,004</td>
            <td>text</td>
            <td>random</td>
            <td>layout</td>
            <td>dashboard</td>
        </tr>
        <tr>
            <td>1,005</td>
            <td>dashboard</td>
            <td>irrelevant</td>
            <td>text</td>
            <td>placeholder</td>
        </tr>
        <tr>
            <td>1,006</td>
            <td>dashboard</td>
            <td>illustrative</td>
            <td>rich</td>
            <td>data</td>
        </tr>
        <tr>
            <td>1,007</td>
            <td>placeholder</td>
            <td>tabular</td>
            <td>information</td>
            <td>irrelevant</td>
        </tr>
        <tr>
            <td>1,008</td>
            <td>random</td>
            <td>data</td>
            <td>placeholder</td>
            <td>text</td>
        </tr>
        <tr>
            <td>1,009</td>
            <td>placeholder</td>
            <td>irrelevant</td>
            <td>visual</td>
            <td>layout</td>
        </tr>
        <tr>
            <td>1,010</td>
            <td>data</td>
            <td>rich</td>
            <td>dashboard</td>
            <td>tabular</td>
        </tr>
        <tr>
            <td>1,011</td>
            <td>information</td>
            <td>placeholder</td>
            <td>illustrative</td>
            <td>data</td>
        </tr>
        <tr>
            <td>1,012</td>
            <td>text</td>
            <td>placeholder</td>
            <td>layout</td>
            <td>dashboard</td>
        </tr>
        <tr>
            <td>1,013</td>
            <td>dashboard</td>
            <td>irrelevant</td>
            <td>text</td>
            <td>visual</td>
        </tr>
        <tr>
            <td>1,014</td>
            <td>dashboard</td>
            <td>illustrative</td>
            <td>rich</td>
            <td>data</td>
        </tr>
        <tr>
            <td>1,015</td>
            <td>random</td>
            <td>tabular</td>
            <td>information</td>
            <td>text</td>
        </tr>
        </tbody>
    </table>
    </div> -->
</main>
<div class="dashboard-section col-md-9 ms-sm-auto col-lg-10 main-block px-md-4">
        <div class="single-item-inner">
            <div class="single-item">
                <div class="section-title">
                    <h6>Product</h6>
                    <h1>{{ $product_all }}</h1>
                    <a href="{{ route('product.index') }}">All product <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
            <div class="single-item">
                <div class="section-title">
                    <h6>Post</h6>
                    <h1>{{ $post_all }}</h1>
                    <a href="{{ route('product.index') }}">All post <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
            <div class="single-item">
                <div class="section-title">
                    <h6>Comment</h6>
                    <h1>{{ $post_comment_all }}</h1>
                    <a href="{{ route('product.index') }}">All comment <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="latest-order">
            <div class="order-header">
                <h6>Latest order</h6>
                <a href="{{ route('order.index') }}">View all</a>
            </div>
            <div class="table-inner">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <th scope="row">{{ $order->id }}</th>
                            <td>{{ $order->product_name }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->phone}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="latest-comment">
            <div class="comment-header">
                <h6>Latest comment</h6>
                <a href="{{ route('post_comment.index') }}">View all</a>
            </div>
            <div class="table-inner">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">post_id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($post_comments as $post_comment)
                        <tr>
                            <th scope="row">{{ $post_comment->id }}</th>
                            <td>{{ $post_comment->post_id }}</td>
                            <td>{{ $post_comment->name }}</td>
                            <td>{{ $post_comment->email }}</td>
                            <td>{{ $post_comment->comment}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
