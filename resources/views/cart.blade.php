@extends('layouts.app')

@section('content')


    <div class="shopping-cart">
        <!-- Title -->
        <div class="title">
            Shopping Bag
        </div>

        <!-- Product #1 -->
        <div class="item">


            <div class="image">
                <img src="images/prod3.png" alt="" />
            </div>

            <div class="description">
                <span>Urban Decay</span>
                <span>Naked 2</span>
                <span>Brown</span>
            </div>

            <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                    <img src="images/plus.svg" alt="" />
                </button>
                <input type="text" name="name" value="1">
                <button class="minus-btn" type="button" name="button">
                    <img src="images/minus.svg" alt="" />
                </button>
            </div>

            <div class="total-price">$70</div>
        </div>

        <!-- Product #2 -->
        <div class="item">


            <div class="image">
                <img src="images/prod2.png" alt=""/>
            </div>

            <div class="description">
                <span>NUX</span>
                <span>Matte</span>
                <span>Red</span>
            </div>

            <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                    <img src="images/plus.svg" alt="" />
                </button>
                <input type="text" name="name" value="1">
                <button class="minus-btn" type="button" name="button">
                    <img src="images/minus.svg" alt="" />
                </button>
            </div>

            <div class="total-price">$15</div>
        </div>

        <!-- Product #3 -->
        <div class="item">


            <div class="image">
                <img src="images/prod.png" alt="" />
            </div>

            <div class="description">
                <span>Urban Decay</span>
                <span>Naked 4</span>
                <span>Rainbow</span>
            </div>

            <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                    <img src="images/plus.svg" alt="" />
                </button>
                <input type="text" name="name" value="1">
                <button class="minus-btn" type="button" name="button">
                    <img src="images/minus.svg" alt="" />
                </button>
            </div>

            <div class="total-price">$90</div>
        </div>
    </div>


@endsection