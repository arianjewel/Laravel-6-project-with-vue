@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-8">
			<img src="{{asset('/storage/'.$post->image)}}" class="w-100 h-100">
		</div>
		<div class="col-4">
			<div>
				<div class="d-flex align-items-center">
					<div>
						<img src="{{asset($post->user->profile->profileImage())}}" class="rounded-circle w-100" style="max-width: 40px">
					</div>
					<div class="pl-3 font-weight-bold">
						<a href="{{route('profile.show', $post->user->id)}}" class="text-dark">
						{{$post->user->username}}</a>
						<a href="" class="pl-3">Follow</a>
					</div>
				</div>

				<hr>

				<p>
					<span class="pr-2 font-weight-bold">
						<a href="{{route('profile.show', $post->user->id)}}" class="text-dark">{{$post->user->username}}</a>
					</span>{{$post->caption}}
				</p>
			</div>
			
		</div>
	</div>
</div>
@endsection