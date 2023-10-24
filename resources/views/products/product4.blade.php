

@extends('layouts.mainpage')

@section('container')

<div class="product-type">
    <div class="product-container">
            <div class="row">
                <div class="lightbox-gallery">
                    <img src="../img/laptop-sold/lenovo-ideapad-3-i3gen11.jpg" alt="Lenovo Ideapad 3">
                </div>
                <div class="col-md-8">
                    <h3 class="mb-0">
                        Lenovo Ideapad 3
                        <label>Trending</label>
                    </h3>

                    <hr>
                    <div class="product-price">Rp 6.100.000 <span>Rp 6.300.000</span></div>
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi asperiores nobis vitae perspiciatis, tempora modi.
                    </p>
                    <hr>
                    <label for="">In Stock</label>
                    <label for="">Out Of Stock</label>

                    <div class="row-mt-2">
                        <div class="col-md-2">
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3">
                                <span class="input-group-text">-</span>
                                <input type="text" name="quantity" value="1" class="form-control" />
                                <div class="input-group-text">+</div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <br/>
                            <button type="button" class="">Add To Wishlist</button>
                            <button type="button" class="">Add To Cart</button>
                        </div>

                    </div>
                </div>
            </div>
    </div>
</div>

@endsection