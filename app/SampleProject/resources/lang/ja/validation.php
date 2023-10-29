<?php

return [

'max' => [
    'numeric' => 'The :attribute must not be greater than :max.',
    'file' => 'The :attribute must not be greater than :max kilobytes.',
    'string' => ':attributeは:max文字以内で、記入してください。',
    'array' => 'The :attribute must not have more than :max items.',
],

'min' => [
    'numeric' => 'The :attribute must be at least :min.',
    'file' => 'The :attribute must be at least :min kilobytes.',
    'string' => ':attributeは:min文字以上で、記入してください。',
    'array' => 'The :attribute must have at least :min items.',
],

'required' => ':attributeは必須です。',

'attributes' => [
  'content' => 'TODO'
],

];