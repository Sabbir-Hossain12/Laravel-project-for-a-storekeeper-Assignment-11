@extends('layouts.app')

@section('content')


    <section class="container " id="custom-edit" style="margin-top:10rem; ">

        <div class=" p-5 rounded" style="background-color:bisque">
            <h3 class="text-center ">Update Product</h3>
            <h5 class="text-center p-3"></h5>

            <form class="form" method="post" action="">
                <div class="form-outline mb-4">


                    <div class="form-outline mb-4">
                        <input type="text" name="name" id="form3Example3cg" class="form-control form-control-lg" placeholder="Product Name " required />

                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" name="price" id="form3Example3cg" class="form-control form-control-lg" placeholder="Price " required />
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="quantity" id="form3Example3cg" class="form-control form-control-lg" placeholder="Quantity" required />
                    </div>
                </div>

                <div class="d-flex justify-content-center my-2">
                    <button type="submit" name="update" class="btn btn-md btn-primary ">Update</button>
                </div>




            </form>
        </div>


    </section>


@endsection
