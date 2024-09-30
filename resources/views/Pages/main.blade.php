@extends("Layouts.layout")

@section('content')

<div class="flex flex-col container m-auto">
    <h1 class="mt-5 text-4xl">Бибилиотека</h1>

    <div class="mt-10">
        <form class="js-select-form" action="{{ route('api.filter')}}">
            <select name="writer" id="writer" class="js-select-component">
                <option value="all">Все авторы</option>
                @foreach($writers as $writer)
                    <option value="{{$writer->id}}">{{$writer->name}}</option>
                @endforeach
            </select>
        </form>
    </div>

    <table class="border-2 border-black mt-10 js-table-body">
        <tr class="border-2 border-black">
            <td class="border-2 border-black p-2">Название книги</td>
            <td class="border-2 border-black p-2">Авторы</td>
            <td class="border-2 border-black p-2">Кол-во авторов</td>
        </tr class="border-2 border-black">
        @foreach ($data as $item)
        <x-table-row :item="$item"/>
        @endforeach
    </table>
</div>
@endsection 