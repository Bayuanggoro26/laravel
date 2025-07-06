@extends('components.layout')

@section('body')
<a href="/create" class="bg-blue-500 mb-2 px-4 rounded">create new.</a>

  <table class="w-100">
    <thead class="bg-gray-500 border ">
        <tr class=""">
            <th class=" border px-4 py-2 ">Name</th>
            <th class=" border px-4 py-2 ">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $item)
            
        <tr>
           
                
            <td class="border px-4 py-2 text-left">{{ $item ['name']}}</td>
            <td class="border px-4 py-2 text-left">{{$item['email']}}</td>
            <td class="border px-4 py-2 text-left">
                <a href="/{{$item['id']}}/edit">Edit</a>
                 <form action="/{{ $item->id }}" method="POST" onsubmit="return confirm('Hapus data ini?')" class="inline">
                @csrf
                @method('DELETE')
            <button type="submit" class="text-red-500">Hapus</button>
        </form>
            </td>
            
        </tr>
        @endforeach
        
    </tbody>
  </table>
@endsection