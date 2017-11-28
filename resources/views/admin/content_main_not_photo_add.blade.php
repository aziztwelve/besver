<div class="wrapper container-fluid">
	{!! Form::open(['url'=>route('news_dayAdd'), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
	
	<div class="form-group">
		{!! Form::label('filter','Филтр', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('filter', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>

	

	<div class="form-group">
		{!! Form::label('content_main','Заголовок', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('content_main', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('content','Контент', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('content', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>



	<div class="form-group">
		{!! Form::label('content_text','Текст', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::textarea('content_text', old('name'), ['id'=>'editor', 'class'=>'form-control']) !!}
		</div>
	</div>


	<div class="form-group">
		{!! Form::label('images','Изображение', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::file('images', ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение', 'data-buttonName'=>'btn-primary',  'data-placeholder'=>'Файла нет']) !!}
		</div>
	</div>







	<div class="form-group">
		<label for="party"></label>
		<input id="party" type=time name="partydate">
	</div>





	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
		</div>
	</div>
	
	{!! Form::close() !!}

	<script>
		CKEDITOR.replace('editor', options)
	</script>
</div>