<div class="form-group">
    {!! Form::label('name', '角色名稱：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('profession', '角色職業：') !!}
    {!! Form::text('profession', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('world', '所屬區域：') !!}
    <!-- 待設計一下拉式選單 -->
</div>
<div class="form-group">
    {!! Form::label('usage_rate', '使用率：') !!}
    {!! Form::text('usage_rate', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('winning_rate', '勝率：') !!}
    {!! Form::text('winning_rate', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('ban_rate', '禁用率：') !!}
    {!! Form::text('ban_rate', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('skin_of_shapes', '當前造型數量：') !!}
    {!! Form::text('skin_of_shapes', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('listing_date','上市時間:') !!}
    {!! Form::date('listing_date',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>