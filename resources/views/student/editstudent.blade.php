@extends('layouts.app')

@section('title','Student')

@section('page-title','Student')

@section('dashboard-content')
	<div class="data">
		<h1>EDIT BARANG</h1>
	</div>
	<div>
		  <form action="{{URL('student/'.$students->nim)}}" method="POST">
		  	{{csrf_field()}}
		  	{{method_field('PUT')}}
		    <label for="nim">NIM</label><br>
		    <input type="text" name="nim" value="{{$students->nim}}" placeholder="NIM"><br>

		    <label for="name">Nama</label><br>
		    <input type="text" name="name" value="{{$students->name}}" placeholder="name"><br>

		    <label for="address">address</label><br>
		    <input type="text" name="address" value="{{$students->address}}" placeholder="address"><br>

		    <label for="phone">phone</label><br>
		    <input type="text" name="phone" value="{{$students->phone}}" placeholder="phone"><br>

		    
		    <input type="submit" name="submit" value="Update" id="submit">
		    @if (count($errors)>0)
				    <div class="isa_error" align="center">
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
			        @endif
		    		</div>
		  </form>
	</div>
@endsection