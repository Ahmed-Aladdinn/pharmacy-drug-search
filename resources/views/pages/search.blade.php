@extends('layouts.default')
@section('content')
    <div class="container center">
        <form style="margin: auto" method="post" class="search">
            @csrf
            <input class="srch" type="search" name="search" placeholder="Search here" required>
            <input type="submit" value="">
        </form>
        @if (isset($drugs))
            @if ($drugs->isNotEmpty())
                <div style="display:flex; justify-content:space-evenly; margin-top: 2%">
                    @foreach ($drugs as $drug)
                        <div style="border: 1px solid #eee; width:30%;display: flex; flex-flow:column;align-items:center;color:#eee">
                            <p>Drug name: {{$drug->Name}}</p>
                            <p>Drug price: {{$drug->Price}}</p>
                            <p>Drug quantity: {{$drug->Quantity}}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-danger alert-dismissible fade show" style="width: 50%; margin-top:3%; margin-left:auto; margin-right:auto;" role="alert">
                    <strong>No drug found!</strong> You should check spelling.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        @endif
    </div>
@endsection