<div class="field">
    {{ Form::label('name', 'Name *') }}
    {{ Form::text('name', null, ['class' => 'vl_empty']) }}
</div>

<div class="field">
    {{ Form::label('city', 'Your city *') }}
    {{ Form::select('city', [null => 'Please Select'] + (\App\Common\Source\City::getOptions()), null) }}
</div>
<div class="field">
    {{ Form::label('area', 'Your area *') }}
    {{ Form::select('area', [null => 'Please Select'] + ([1 => 'Area 1', 2 => 'Area 2']), null) }}
</div>

<div class="field">
    {{ Form::label('street', 'Street *') }}
    {{ Form::text('street', null, ['class' => 'vl_empty']) }}
</div>
<div class="field">
    {{ Form::label('house', 'House # ') }}
    {{ Form::text('house', null, ['class' => 'vl_empty', 'palceholder' => "House Name / Number" ]) }}
</div>

<div class="field">
    {{ Form::label('info', 'Additional information') }}
    {{ Form::text('info', null, ['class' => 'pos_top']) }}
</div>
