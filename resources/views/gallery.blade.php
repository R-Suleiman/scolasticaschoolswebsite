@extends('layouts.guest')
@section('title', 'Gallery')
@section('content')
    <section class="w-11/12 mx-auto my-4 p-4">
        <div class="w-max">
            <h1 class="oswald text-2xl md:text-4xl text-green-900">Our School Gallery</h1>
            <div class="w-2/5 border-2 border-green-800 mt-2"></div>
        </div>

        <div class="w-full flex md:flex-row flex-wrap">
            @foreach ($images as $image)
                <div class="w-1/2 md:1/3 lg:w-1/5 my-2">
                    <div class="w-11/12 mx-auto h-48 overflow-hidden">
                        <img src="{{ asset('/storage/' . $image->image) }}" alt="image" class="w-full h-full object-cover hover:scale-110">
                    </div>
                </div>
            @endforeach
        </div>

        <div class="w-full my-2">
            {{ $images->links() }}
        </div>
    </section>
@endsection
