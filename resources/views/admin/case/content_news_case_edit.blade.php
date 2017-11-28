<div class="wrapper container-fluid">
{!! Form::open(['url'=>route('news_caseEdit', array('id'=>$data['id'])), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

	<div class="form-group">
		{!! Form::hidden('id', $data['id']) !!}
		{!! Form::label('filter', 'Филтер', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('filter', $data['filter'], ['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('author', 'Автор', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('author', $data['author'], ['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('time_create', 'Время', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('time_create', $data['tume_create'], ['id'=>'datetimepicker1', 'class'=>'form-control input-group date ']) !!}
		</div>
	</div>

	

	<div class="form-group">
		{!! Form::label('images','Изображение', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::file('images', ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение', 'data-buttonName'=>'btn-primary',  'data-placeholder'=>'Файла нет']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('content_main', 'Заголовок',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('content_main', $data['content_main'],['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('content', 'Контент', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('content', $data['content'], ['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('content_text', 'Текст', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::textarea('content_text', $data['content_text'], ['id'=>'editor', 'class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
		</div>
	</div>

{!! Form::close() !!}
</div>

<script>
	CKEDITOR.replace('editor', options);

    $('#time').datetimepicker({
        format: 'dd/mm/yyyy HH:mm'
    });

    $(function () {
    		            $('#datetimepicker1').datetimepicker({format: 'HH:mm'});
    		        });
</script>