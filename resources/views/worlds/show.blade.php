@extends('app')

@section('title', '英雄聯盟網站 - 顯示單一區域')

@section('lol_contents')

區域編號:{{$world -> id}} <br/>
區域:{{$world -> region}} <br/>
統治:{{$world -> rule}} <br/>
對於魔法的態度:{{$world -> attitude}} <br/>
科技水平:{{$world -> technology}} <br/>
整體環境:{{$world -> environment}} <br/>

@endsection