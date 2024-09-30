<tr class="js-book-item border-2 border-black">
    <td class="border-2 border-black p-2">{{$item->title}}</td>
    <td class="border-2 border-black p-2">{{$item->writers_string}}</td>
    <td class="border-2 border-black p-2">{{$item->writers()->count()}}</td>
</tr>
