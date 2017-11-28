<div class="wrapper container-fluid">
	{!! Form::open(['url'=>route('siderightAdd'), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data'] )!!}	


	<div class="form-group">
		{!! Form::label('filter', 'Филтр', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('filter', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>



	<div class="form-group">
		{!! Form::label('author', 'Автор', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('author', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>




	<div class="form-group">
		{!! Form::label('time_create', 'Время', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('time_create', old('names'), ['id'=>'datetimepicker1', 'class'=>'form-control', 'placeholder'=>'12.02.1996 12:02']) !!}
		</div>
	</div>



	<div class="form-group">
		{!! Form::label('content_main', 'Заголовок', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('content_main', old('names'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>



	<div class="form-group">
		{!! Form::label('content', 'Контент', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('content', old('names'), ['class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>



	<div class="form-group">
		{!! Form::label('content_text', 'Текст', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::textarea('content_text', old('names'), ['id'=>'editor', 'class'=>'form-control', 'placeholder'=>'Введите текст']) !!}
		</div>
	</div>




	<script>
		CKEDITOR.replace('editor', options)
		CKEDITOR.replace('editorimg', options)

		 $(function () {
    		            $('#datetimepicker1').datetimepicker();
    		        });
	</script>
</div>