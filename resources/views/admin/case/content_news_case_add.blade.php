<div class="wrapper container-fluid">
	{!! Form::open(['url'=>route('news_caseAdd'), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
	
	<div class="form-group">
		{!! Form::label('filter','Филтр', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('filter', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('author','Автор', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('author', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tume_create', 'Время', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('tume_create', old('name'), ['id'=>'datetimepicker1', 'class'=>'form-control input-group date', 'placeholder'=>'12.02.1996 12:02']) !!}
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
		{!! Form::label('image','Изображение', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::file('image', ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение', 'data-buttonName'=>'btn-primary',  'data-placeholder'=>'Файла нет']) !!}
		</div>
	</div>







	{{-- <div class="form-group">
		<label for="party"></label>
		<input id="party" type=time name="partydate">
	</div>
 --}}




	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
		</div>
	</div>
	
	{!! Form::close() !!}

	<script>
		CKEDITOR.replace('editor', options)
		CKEDITOR.replace('editorimg', options)

		 $(function () {
    		            $('#datetimepicker1').datetimepicker();
    		        });
	</script>
</div>