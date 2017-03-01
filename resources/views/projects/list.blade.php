@foreach($projects as $project)
	<article class="message is-primary">
		<div class="message-header">
			<p>{{ $project->name }}</p>
		</div>
		<div class="message-body">
			{{ $project->description }}
		</div>
	</article>
@endforeach