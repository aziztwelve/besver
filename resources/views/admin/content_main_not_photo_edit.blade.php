<div class="wrapper container-fluid">
{!! Form::open(['url' => route('news_dayEdit', array('id' => $data['id'])),  'class' => 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

	<div class="form-group">
		{!! Form::hidden('id', $data['id']) !!}
		{!! Form::label('filter','Филтр', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('filter', $data['filter'], ['class'=>'form-control']) !!}
		</div>
	</div>




	<div class="form-group">
		{!! Form::label('author','Автор', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('author', $data['author'], ['class'=>'form-control', ]) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('content_main','Заголовок', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('content_main', $data['content_main'], ['class'=>'form-control', ]) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('content','Контент', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('content', $data['content'], ['class'=>'form-control', ]) !!}
		</div>
	</div>



	<div class="form-group">
		{!! Form::label('content_text','Текст', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::textarea('content_text', $data['content_text'], ['id'=>'editor', 'class'=>'form-control']) !!}
		</div>
	</div>


	<!-- <div class="form-group">
		{!! Form::label('old_images','Изображение', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Html::image('img/dev.jpg', '',[]) !!}

		</div>
	</div> -->


	<!-- <div class="form-group">
		{!! Form::label('images','Изображение', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::file('images', ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение', 'data-buttonName'=>'btn-primary',  'data-placeholder'=>'Файла нет']) !!}
		</div>
	</div> -->







	<div class="form-group">
		<label for="party"></label>
		<input id="party" type=time name="partydate" value="{{$data['content_text']}}">
	</div>

	<!-- <div class="form-group">
		{{ Form::text('deadline', null, ['class' => 'form-control', 'id'=>'datetimepicker']) }}


		
	</div> -->


	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
		</div>
	</div>



{!! Form::close() !!}

	<!-- <script>
		CKEDITOR.replace('editor'{
			filebrowserBrowseUrl:"{{ url('js/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files') }}",
    	filebrowserImageBrowseUrl:"{{ url('js/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images') }}",
    	filebrowserFlashBrowseUrl:"    {{ url('js/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash') }}",
    	filebrowserUploadUrl:"{{ url('js/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files') }}",
   		 filebrowserImageUploadUrl:"{{ url('js/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images') }}",
    	filebrowserFlashUploadUrl:"{{ url('js/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash') }}",
		});

	
	</script> -->
	 <!-- <script type="text/javascript">
  $('#datetimepicker').datetimepicker({
    format: 'yyyy'
});
  </script> -->



	<script type="text/javascript">
	// var ckeditor1 = CKEDITOR.replace( 'editor' );
	// AjexFileManager.init({
	// returnTo: 'ckeditor',
	// editor: ckeditor1
	// });

	CKEDITOR.replace('editor', options);
	


	
	</script>

</div>