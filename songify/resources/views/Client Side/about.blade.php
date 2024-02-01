@if(session()->has('userid'))

@extends('Client Side.constant.content')

@section('main-section')
<div>
<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3">
                <img src="Client/img/prapti.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Prapti Shah</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                </div>
                {{-- <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div> --}}
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-3">
                <img src="Client/img/aayushi.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Aayushi Patel</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                </div>
                {{-- <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div> --}}
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-3">
                <img src="Client/img/uzma.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Uzma Saiyed</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                </div>
                {{-- <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div> --}}
            </div>
        </div>
        <!-- Repeat the above card structure for other cards -->

    </div>
</div>       
@endsection

@else
	<script>
        window.location = "/loginPage"; // Redirect to loginPage if not logged in
    </script>
@endif