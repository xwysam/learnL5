<!-- Temporary-->

<div class="form-group">

    {!! Form::label('title','Title:') !!}

    {!! Form::text('title',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body','Body: ') !!}
    {!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at','Published At: ') !!}
    {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tag_list','Tags:') !!}
    {!! Form::select('tag_list[]', $tags ,null, ['class' => 'form-control','multiple']) !!}
</div>

{!! Form::submit($submitBtnText,['class'=>'btn btn-primary form-control']) !!}
