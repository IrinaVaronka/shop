@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Add Product</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('products-store')}}" method="post">

                        <div class="container">
                            <div class="row">
                                <div class="col-8">


                                    <div class="mb-3">
                                        <label class="form-label">Product Name</label>
                                        <input type="text" class="form-control" name="name" value={{old('name')}}>
                                        <div class="form-text">Please add product name here</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label">Product Price</label>
                                        <input type="text" class="form-control" name="price" value={{old('price')}}>
                                        <div class="form-text">Please add product here</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label class="form-label">Product Category</label>
                                    <select class="form-select">
                                        <option value="0">Categories list</option>
                                        @foreach($cats as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="form-text">Please select product category here</div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="mt-5 btn btn-outline-primary">Submit</button>
                                </div>
                            </div>
                        </div>


                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection