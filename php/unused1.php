<?php

function component($productname , $productprice, $productpath ){
    $element = "
    <div class='col-md-3 col-sm-6 my-3 my-md-0'>

    <form action='handlebuy.php' method='post'>
        <div class='card-shadow'>
            <div>
                <img src='$productpath' alt='loading' class='img-fluid card.img-top'>
            </div>
            <div class='card-body'>
                <h5 class='card-title'>$productname</h5>
                <h6>
                    <i class=fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='far fa-star'></i>
                </h6>
                <p class='card-text'>
                    High Definition lcd for shows
                </p>
                <small><s class='bg-secondary'>$49999</s></small>
                <span>
                    $productprice
                </span>

            </div>
            <button type='submit' name='add' class='btn btn-warning'>Add to cart <i class=' fas fa-shopping-cart'></i></button>
            <input type='hidden' name='product_id'>
        </div>
    </form>

</div>
    ";
    echo $element;
}







?>