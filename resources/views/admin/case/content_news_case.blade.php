<div style="margin: 0px 50px 0px 50px;">
@if($news_case)
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

		@foreach($news_case as $case)

			<tr>
				<td>{{$case->id}}</td>
				<td>{!! Html::link(route('news_caseEdit',['case'=> $case->id]), $case->author, ['alt'=>$case->author]) !!}</td>
				<td>{!! $case->filter !!}</td>
				<td>{!! $case->time_create !!}</td>
				<td>{!! $case->content_main !!}</td>

				<td>
				{!! Form::open(['url'=>route('news_caseEdit',['case'=> $case->id]), 'class'=>'form-horizontal', 'method'=>'POST']) !!}

				{{ method_field('DELETE')}}
				{!! Form::button('Удалить',['class'=>'btn btn-danger', 'type'=>'submit']) !!}



				{!! Form::close() !!}
				</td>
			</tr>


		@endforeach
			
		</tbody>
	</table>
@endif

{!! Html::link(route('news_caseAdd'),'Добавить') !!}	
</div>