@extends('layouts.app')
@section('content')

        <div class="row mb-3">
            <div class="col">
                    <span class="display-4">Recipes</span>
            </div>
            <div class="col">
                <button class="btn btn-danger float-right mt-4">Add New Recipe</button>
            </div>
        </div>


        @foreach($recipes->chunk(3) as $row)
        <div class="row py-2">
            @foreach($row as $recipe)
            <div class="col">
                <div class="card" style="height: 250px;">
                    <div class="card-body">

                    <div class="row">
                        <div class="col-4">
                            <div style="height: 150px; width: auto;" class="bg-light">
                                {{-- <span data-feather="play-circle" style="height: 50px; width: auto; color: gray;"></span> --}}
                            </div>
                        </div>
                        <div class="col-8">
                        <p class="font-weight-normal mb-0">{{ $recipe->title }}</p>
                        <p class="font-weight-normal mt-0 text-muted">{{ $recipe->description }}</p>

                        </div>
                    </div>
                    </div>
                    <div class="card-footer bg-white p-2">
                        <a class="btn btn-link text-dark font-weight-normal">
                            Details
                        </a>
                        <a class="btn btn-link text-dark font-weight-normal">
                            Remove
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
            @endforeach




@endsection
