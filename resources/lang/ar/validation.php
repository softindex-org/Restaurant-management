<?php
return [
  /*
  |--------------------------------------------------------------------------
  | Validation Language Lines
  |--------------------------------------------------------------------------
  |
  | السطور التالية تحتوي على رسائل الخطأ الافتراضية المستخدمة بواسطة فئة المدقق.
  | بعض هذه القواعد لها إصدارات متعددة مثل قواعد الحجم. يمكنك تعديل كل من هذه الرسائل هنا.
  |
  */
  'accepted' => 'يجب قبول :attribute.',
  'active_url' => ':attribute ليس عنوان URL صالحًا.',
  'after' => 'يجب أن يكون :attribute تاريخًا بعد :date.',
  'after_or_equal' => 'يجب أن يكون :attribute تاريخًا بعد أو يساوي :date.',
  'alpha' => 'يجب أن يحتوي :attribute فقط على أحرف.',
  'alpha_dash' => 'يجب أن يحتوي :attribute فقط على أحرف وأرقام وشرطات وشرطات سفلية.',
  'alpha_num' => 'يجب أن يحتوي :attribute فقط على أحرف وأرقام.',
  'array' => 'يجب أن يكون :attribute مصفوفة.',
  'before' => 'يجب أن يكون :attribute تاريخًا قبل :date.',
  'before_or_equal' => 'يجب أن يكون :attribute تاريخًا قبل أو يساوي :date.',
  'between' => [
      'numeric' => 'يجب أن يكون :attribute بين :min و:max.',
      'file' => 'يجب أن يكون حجم :attribute بين :min و:max كيلوبايت.',
      'string' => 'يجب أن يكون طول :attribute بين :min و:max حرفًا.',
      'array' => 'يجب أن يحتوي :attribute على عدد عناصر بين :min و:max.',
  ],
  'boolean' => 'يجب أن يكون حقل :attribute صحيحًا أو خطأً.',
  'confirmed' => 'تأكيد :attribute غير متطابق.',
  'date' => ':attribute ليس تاريخًا صالحًا.',
  'date_equals' => 'يجب أن يكون :attribute تاريخًا مساويًا لـ :date.',
  'date_format' => ':attribute لا يتطابق مع التنسيق :format.',
  'different' => 'يجب أن يكون :attribute و:other مختلفين.',
  'digits' => 'يجب أن يكون :attribute مكونًا من :digits أرقام.',
  'digits_between' => 'يجب أن يكون :attribute بين :min و:max أرقام.',
  'dimensions' => ':attribute يحتوي على أبعاد صورة غير صالحة.',
  'distinct' => 'حقل :attribute يحتوي على قيمة مكررة.',
  'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صالحًا.',
  'ends_with' => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values.',
  'exists' => ':attribute المحدد غير صالح.',
  'file' => 'يجب أن يكون :attribute ملفًا.',
  'filled' => 'يجب أن يحتوي حقل :attribute على قيمة.',
  'gt' => [
      'numeric' => 'يجب أن يكون :attribute أكبر من :value.',
      'file' => 'يجب أن يكون حجم :attribute أكبر من :value كيلوبايت.',
      'string' => 'يجب أن يكون طول :attribute أكبر من :value حرفًا.',
      'array' => 'يجب أن يحتوي :attribute على أكثر من :value عنصر.',
  ],
  'gte' => [
      'numeric' => 'يجب أن يكون :attribute أكبر من أو يساوي :value.',
      'file' => 'يجب أن يكون حجم :attribute أكبر من أو يساوي :value كيلوبايت.',
      'string' => 'يجب أن يكون طول :attribute أكبر من أو يساوي :value حرفًا.',
      'array' => 'يجب أن يحتوي :attribute على :value عناصر أو أكثر.',
  ],
  'image' => 'يجب أن يكون :attribute صورة.',
  'in' => ':attribute المحدد غير صالح.',
  'in_array' => 'حقل :attribute غير موجود في :other.',
  'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
  'ip' => 'يجب أن يكون :attribute عنوان IP صالحًا.',
  'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صالحًا.',
  'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صالحًا.',
  'json' => 'يجب أن يكون :attribute نص JSON صالحًا.',
  'lt' => [
      'numeric' => 'يجب أن يكون :attribute أقل من :value.',
      'file' => 'يجب أن يكون حجم :attribute أقل من :value كيلوبايت.',
      'string' => 'يجب أن يكون طول :attribute أقل من :value حرفًا.',
      'array' => 'يجب أن يحتوي :attribute على أقل من :value عنصر.',
  ],
  'lte' => [
      'numeric' => 'يجب أن يكون :attribute أقل من أو يساوي :value.',
      'file' => 'يجب أن يكون حجم :attribute أقل من أو يساوي :value كيلوبايت.',
      'string' => 'يجب أن يكون طول :attribute أقل من أو يساوي :value حرفًا.',
      'array' => 'يجب ألا يحتوي :attribute على أكثر من :value عنصر.',
  ],
  'max' => [
      'numeric' => 'لا يجب أن يكون :attribute أكبر من :max.',
      'file' => 'لا يجب أن يكون حجم :attribute أكبر من :max كيلوبايت.',
      'string' => 'لا يجب أن يكون طول :attribute أكبر من :max حرفًا.',
      'array' => 'لا يجب أن يحتوي :attribute على أكثر من :max عنصر.',
  ],
  'mimes' => 'يجب أن يكون :attribute ملفًا من نوع: :values.',
  'mimetypes' => 'يجب أن يكون :attribute ملفًا من نوع: :values.',
  'min' => [
      'numeric' => 'يجب أن يكون :attribute على الأقل :min.',
      'file' => 'يجب أن يكون حجم :attribute على الأقل :min كيلوبايت.',
      'string' => 'يجب أن يكون طول :attribute على الأقل :min حرفًا.',
      'array' => 'يجب أن يحتوي :attribute على الأقل على :min عنصر.',
  ],
  'not_in' => ':attribute المحدد غير صالح.',
  'not_regex' => 'تنسيق :attribute غير صالح.',
  'numeric' => 'يجب أن يكون :attribute رقمًا.',
  'password' => 'كلمة المرور غير صحيحة.',
  'present' => 'يجب أن يكون حقل :attribute موجودًا.',
  'regex' => 'تنسيق :attribute غير صالح.',
  'required' => 'حقل :attribute مطلوب.',
  'required_if' => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
  'required_unless' => 'حقل :attribute مطلوب ما لم يكن :other ضمن :values.',
  'required_with' => 'حقل :attribute مطلوب عندما يكون :values موجودًا.',
  'required_with_all' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
  'required_without' => 'حقل :attribute مطلوب عندما لا يكون :values موجودًا.',
  'required_without_all' => 'حقل :attribute مطلوب عندما لا تكون أي من :values موجودة.',
  'same' => 'يجب أن يتطابق :attribute و:other.',
  'size' => [
      'numeric' => 'يجب أن يكون :attribute بحجم :size.',
      'file' => 'يجب أن يكون حجم :attribute :size كيلوبايت.',
      'string' => 'يجب أن يكون طول :attribute :size حرفًا.',
      'array' => 'يجب أن يحتوي :attribute على :size عناصر.',
  ],
  'starts_with' => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values.',
  'string' => 'يجب أن يكون :attribute نصًا.',
  'timezone' => 'يجب أن يكون :attribute منطقة زمنية صالحة.',
  'unique' => ':attribute مستخدم بالفعل.',
  'uploaded' => 'فشل تحميل :attribute.',
  'url' => 'تنسيق :attribute غير صالح.',
  'uuid' => 'يجب أن يكون :attribute UUID صالحًا.',
  /*
  |--------------------------------------------------------------------------
  | Custom Validation Language Lines
  |--------------------------------------------------------------------------
  |
  | هنا يمكنك تحديد رسائل تحقق مخصصة للسمات باستخدام الاتفاقية "attribute.rule" لتسمية السطور.
  | هذا يجعل من السهل تحديد رسالة لغوية مخصصة لقاعدة سمة معينة.
  |
  */
  'custom' => [
      'attribute-name' => [
          'rule-name' => 'رسالة مخصصة',
      ],
  ],
  /*
  |--------------------------------------------------------------------------
  | Custom Validation Attributes
  |--------------------------------------------------------------------------
  |
  | السطور التالية تُستخدم لاستبدال العنصر النائب الخاص بالسمة بشيء أكثر وضوحًا مثل "عنوان البريد الإلكتروني"
  | بدلاً من "email". هذا يساعدنا فقط في جعل رسائلنا أكثر تعبيرًا.
  |
  */
  'attributes' => [],
];