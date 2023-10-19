@extends('layouts.layout')

@section('content')
    <div class="container my-8 relative">
        <div class="grid grid-cols-4 gap-4">
            <div class="bg-white p-4 rounded shadow">
                <div>
                    <div>
                        <h5>Цвет</h5>
                        <div id="devider" class="my-4"></div>
                        <div class="flex flex-col gap-3">
                            <li class="list-none flex items-center gap-2 text-xs">
                                <input type="checkbox" name="color" id="red">
                                <label for="red">Красный</label>
                            </li>
                            <li class="list-none flex items-center gap-2 text-xs">
                                <input type="checkbox" name="color" id="white">
                                <label for="white">Белый</label>
                            </li>
                            <li class="list-none flex items-center gap-2 text-xs">
                                <input type="checkbox" name="color" id="pink">
                                <label for="pink">Розовый</label>
                            </li>
                        </div>
                    </div>
                    <div class="mt-16">
                        <h5>Цена</h5>
                        <div id="devider" class="my-4"></div>
                        <div>
                            <div class="flex flex-col gap-4 text-xs">
                                <label class="flex flex-col gap-2">
                                    <span>От:</span>
                                    <input type="number" name="from" id="price-from" min="500" value="500">
                                </label>
                                <label class="flex flex-col gap-2 w-auto">
                                    <span>До:</span>
                                    <input type="number" name="from" id="price-from" max="50000" value="50000">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-3 p-4 pt-0">
                <x-products class="container grid grid-cols-3 gap-6 gap-y-10" />
            </div>
        </div>
    </div>
@endsection
