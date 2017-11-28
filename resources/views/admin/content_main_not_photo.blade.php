<div style="margin: 0px 50px 0px 50px;">
@if($main_not_photos)
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>№</th>
				<th>Автор</th>
				<th>Филтр</th>
				<th>Время</th>
				<th>Заголовок</th>
				<!-- <th>Контент</th> -->
				<!-- <th>Текст</th> -->
				<th>Удалить</th>
			</tr>
		</thead>

		<tbody>

		@foreach($main_not_photos as $photo)

			<tr>
				<td>{{$photo->id}}</td>
				<td>{!! Html::link(route('news_dayEdit',['photo'=> $photo->id]), $photo->author, ['alt'=>$photo->author]) !!}</td>
				<td>{!! $photo->filter !!}</td>
				<td>{!! $photo->time_create !!}</td>
				<td>{!! $photo->content_main !!}</td>
				<!-- <td>{!! $photo->content !!}</td> -->
				<!-- <td class="heghtmax">{!! $photo->content_text !!}</td> -->

				<td>
				{!! Form::open(['url'=>route('news_dayEdit',['photo'=> $photo->id]), 'class'=>'form-horizontal', 'method'=>'POST']) !!}

				{{ method_field('DELETE')}}
				{!! Form::button('Удалить',['class'=>'btn btn-danger', 'type'=>'submit']) !!}



				{!! Form::close() !!}
				</td>
			</tr>


		@endforeach
			
		</tbody>
	</table>
@endif

{!! Html::link(route('news_dayAdd'),'Добавить') !!}	
</div>