<div class="form-group">
    {!! Form::label('region', '區域名稱：') !!}
    {!! Form::text('region', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('rule', '統治：') !!}
    {!! Form::text('rule', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('attitude', '對於魔法的態度：') !!}
    {!! Form::text('attitude', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('technology', '科技水平：') !!}
    {!! Form::text('technology', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('environment', '整體環境：') !!}
    {!! Form::text('environment', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>