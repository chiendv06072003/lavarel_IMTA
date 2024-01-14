
    <h1>Product form</h1>
    @if (session('msg'))
        <div class="alert alert-success">
            {{session('msg')}}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            Dữ liệu nhập vào không hợp lệ
        </div>
    @endif
    <form class="form-add" action="<?= route('handleAddProduct') ?>" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" placeholder="Name...">
            @error('name')
                <span style="color: red">
                    {{$message}}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Price</label>
            <input type="text" class="form-control" placeholder="Price..." name="price">
            @error('price')
                <span style="color: red">
                    {{$message}}
                </span>
            @enderror
        </div>
          <div class="mb-3">
            <label  class="form-label">Description</label>
            <input type="text" class="form-control" placeholder="Description..." name="description">
            @error('desc')
                <span style="color: red">
                    {{$message}}
                </span>
            @enderror
          </div>
          <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="category_id">
                <option selected>Open this select menu</option>
                @foreach ($allCate as $cate)
                    <option value="{{$cate->id}}" >{{$cate->name}}</option>
                @endforeach
                
              </select>
            
          </div>
        <div class="contain-btn">
            
            <button type="submit" class="form_submit-btn btn btn-primary">Submit</button>
            <button type="button" class="form_submit-btn btn btn-warning">
                <a href={{route('products.list')}} style="text-decoration: none">Back</a>
            </button>
        </div>
        </form>
