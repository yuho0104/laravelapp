@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
   @parent
   インデックスページ
@endsection
@section('content')
   <p>ここが本文のコンテンツです。</p>
   <table>
   @foreach($data as $item)
   <tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>
   @endforeach
   </table>
@endsection
   @each('components.item', $data, 'item')
   </ul>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
