@extends('layouts.app')

@section('content')
@foreach($posts as $post)
	<div class="container">
		<div class="row">
			<div class="col-6 offset-3">
				<a href="{{route('profile.show', $post->user->id)}}">
					<img src="{{asset('/storage/'.$post->image)}}" class="w-100 h-100">
				</a>
			</div>
		</div>

		<div class="row pt-2 pb-4">
			<div class="col-6 offset-3">
				<div>
					
					<p>
						<span class="pr-2 font-weight-bold">
							<a href="{{route('profile.show', $post->user->id)}}" class="text-dark">{{$post->user->username}}</a>
						</span>{{$post->caption}}
					</p>
				</div>
				
			</div>
		</div>
	</div>
@endforeach

	<div class="row">
		<div class="col-12 justify-content-center d-flex">
			{{$posts->links()}}
		</div>
	</div>
@endsection