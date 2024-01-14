@extends('layouts.client')
@section('content')
<main>

  
    <div class="album py-5 ">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($listProduct as $product)
            <div class="col">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                  <div class="card-body">
                    <h4>{{$product->name}}</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <button type="button" class="btn btn-secondary mb-3">{{$product->category_name}}</button>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary" >{{$product->price}} VND</button>
                      </div>
                      
                      <small class="text-body-secondary">{{$product->created_at}}</small>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          
        </div>
      </div>
    </div>
  
  </main>
@endsection
@section('sidebar')
    <h3>Home sidebar</h3>
@endsection
