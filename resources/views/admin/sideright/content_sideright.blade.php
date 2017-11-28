<div style="margin: 0px 50px 0px 50px;">
	@if($siderights)
		<table class="table table-condensed">
			<thead>
				<tr>
					<th>№</th>
					<th>Автор</th>
					<th>Филтр</th>
					<th>Время</th>
					<th>Заголовок</th>
					<th>Удалить</th>
				</tr>
			</thead>

			<tbody>

			@foreach($siderights as $side)
				<tr>
					<td>{{$side->id}}</td>
					<td>{!! Html::link(route('siderightEdit', ['sideright'=> $side->id]), $side->author, ['alt'=>$side->author]) !!}</td>
					<td>{!! $side->filter !!}</td>
					<td>{!! $side->time_create !!}</td>
					<td>{!! $side->content_main !!}</td>

					<td>
					{!! Form::open(['url'=>route('siderightEdit',['case'=> $side->id]), 'class'=>'form-horizontal', 'method'=>'POST']) !!}

					{{ method_field('DELETE')}}
					{!! Form::button('Удалить',['class'=>'btn btn-danger', 'type'=>'submit']) !!}



					{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
				
			</tbody>
		</table>
	@endif

	{!! Html::link(route('siderightAdd'),'Добавить') !!}	
</div>