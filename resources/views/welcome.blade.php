@extends('layouts.app')

@section('content')
    <ul class="flex border-b">
      <li class="-mb-px mr-1">
        <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold" href="#">Active</a>
      </li>
    </ul>
    <div>
        <form action="get">
            <h4> Add Contact </h4>
                <div class="mb4">
                </div>
            <input type="text" name="first_name"/>
        </form>
    </div>
@endsection

