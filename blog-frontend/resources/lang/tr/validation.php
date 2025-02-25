<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Bu dosya, tüm validation hata mesajlarını içerir. Laravel, belirli
    | kurallar geçerli olmadığında bu mesajları kullanır. Buradaki
    | mesajları uygulamanın diline göre özelleştirebilirsiniz.
    |
    */

    'accepted' => ':attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL olmalıdır.',
    'after' => ':attribute, :date tarihinden sonra bir tarih olmalıdır.',
    'after_or_equal' => ':attribute, :date tarihinden sonra veya ona eşit bir tarih olmalıdır.',
    'alpha' => ':attribute sadece harflerden oluşmalıdır.',
    'alpha_dash' => ':attribute sadece harf, rakam, tire ve alt çizgi içerebilir.',
    'alpha_num' => ':attribute sadece harf ve rakamlardan oluşmalıdır.',
    'array' => ':attribute bir dizi olmalıdır.',
    'before' => ':attribute, :date tarihinden önce bir tarih olmalıdır.',
    'before_or_equal' => ':attribute, :date tarihinden önce veya ona eşit bir tarih olmalıdır.',
    'between' => [
        'numeric' => ':attribute :min ile :max arasında bir değer olmalıdır.',
        'file' => ':attribute :min ile :max kilobayt arasında olmalıdır.',
        'string' => ':attribute :min ile :max karakter arasında olmalıdır.',
        'array' => ':attribute :min ile :max öğe arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute onayı eşleşmiyor.',
    'date' => ':attribute geçerli bir tarih olmalıdır.',
    'date_equals' => ':attribute, :date ile aynı tarihte olmalıdır.',
    'date_format' => ':attribute, :format formatına uymalıdır.',
    'different' => ':attribute ve :other farklı olmalıdır.',
    'digits' => ':attribute :digits basamaktan oluşmalıdır.',
    'digits_between' => ':attribute :min ile :max basamak arasında olmalıdır.',
    'dimensions' => ':attribute geçerli resim boyutlarına sahip olmalıdır.',
    'distinct' => ':attribute alanında tekrar eden değerler var.',
    'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute şu değerlerden biriyle bitmelidir: :values',
    'exists' => 'Seçilen :attribute geçerli değil.',
    'file' => ':attribute bir dosya olmalıdır.',
    'filled' => ':attribute alanı doldurulmalıdır.',
    'gt' => [
        'numeric' => ':attribute, :value’dan büyük olmalıdır.',
        'file' => ':attribute, :value kilobayttan büyük olmalıdır.',
        'string' => ':attribute, :value karakterden uzun olmalıdır.',
        'array' => ':attribute, :value öğeden fazla öğe içermelidir.',
    ],
    'gte' => [
        'numeric' => ':attribute, :value’dan büyük veya eşit olmalıdır.',
        'file' => ':attribute, :value kilobayttan büyük veya eşit olmalıdır.',
        'string' => ':attribute, :value karakterden uzun veya eşit olmalıdır.',
        'array' => ':attribute, :value öğeden fazla veya eşit öğe içermelidir.',
    ],
    'image' => ':attribute bir resim olmalıdır.',
    'in' => 'Seçilen :attribute geçerli değil.',
    'in_array' => ':attribute alanı :other içinde mevcut değil.',
    'integer' => ':attribute bir tamsayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON dizesi olmalıdır.',
    'lt' => [
        'numeric' => ':attribute, :value’dan küçük olmalıdır.',
        'file' => ':attribute, :value kilobayttan küçük olmalıdır.',
        'string' => ':attribute, :value karakterden kısa olmalıdır.',
        'array' => ':attribute, :value öğeden daha az öğe içermelidir.',
    ],
    'lte' => [
        'numeric' => ':attribute, :value’dan küçük veya eşit olmalıdır.',
        'file' => ':attribute, :value kilobayttan küçük veya eşit olmalıdır.',
        'string' => ':attribute, :value karakterden kısa veya eşit olmalıdır.',
        'array' => ':attribute, :value öğeden daha az veya eşit öğe içermelidir.',
    ],
    'max' => [
        'numeric' => ':attribute :max’dan büyük olamaz.',
        'file' => ':attribute :max kilobaytın üzerinde olamaz.',
        'string' => ':attribute :max karakterden uzun olamaz.',
        'array' => ':attribute :max öğeden fazla olamaz.',
    ],
    'mimes' => ':attribute şu dosya türlerinden biri olmalıdır: :values.',
    'mimetypes' => ':attribute şu dosya türlerinden biri olmalıdır: :values.',
    'min' => [
        'numeric' => ':attribute en az :min olmalıdır.',
        'file' => ':attribute en az :min kilobayt olmalıdır.',
        'string' => ':attribute en az :min karakter olmalıdır.',
        'array' => ':attribute en az :min öğe içermelidir.',
    ],
    'multiple_of' => ':attribute, :value’ın katı olmalıdır.',
    'not_in' => 'Seçilen :attribute geçerli değil.',
    'not_regex' => ':attribute formatı geçersiz.',
    'numeric' => ':attribute bir sayı olmalıdır.',
    'present' => ':attribute alanı mevcut olmalıdır.',
    'regex' => ':attribute formatı geçersiz.',
    'required' => ':attribute alanı zorunludur.',
    'required_if' => ':other :value olduğunda :attribute zorunludur.',
    'required_unless' => ':other :values dışında olduğunda :attribute zorunludur.',
    'required_with' => ':values varken :attribute zorunludur.',
    'required_with_all' => ':values varken :attribute zorunludur.',
    'required_without' => ':values yokken :attribute zorunludur.',
    'required_without_all' => ':values yokken :attribute zorunludur.',
    'same' => ':attribute ve :other aynı olmalıdır.',
    'size' => [
        'numeric' => ':attribute :size olmalıdır.',
        'file' => ':attribute :size kilobayt olmalıdır.',
        'string' => ':attribute :size karakter olmalıdır.',
        'array' => ':attribute :size öğe içermelidir.',
    ],
    'starts_with' => ':attribute şu değerlerden biriyle başlamalıdır: :values',
    'string' => ':attribute bir metin olmalıdır.',
    'timezone' => ':attribute geçerli bir zaman dilimi olmalıdır.',
    'unique' => ':attribute daha önce alınmış.',
    'uploaded' => ':attribute yüklenemedi.',
    'url' => ':attribute geçerli bir URL olmalıdır.',
    'uuid' => ':attribute geçerli bir UUID olmalıdır.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Burada, uygulamanızda kullanılan özel validation kuralları için hata mesajları
    | tanımlayabilirsiniz. Örnek olarak, aşağıdaki gibi bir yapı kullanabilirsiniz:
    |
    | 'custom' => [
    |     'attribute-name' => [
    |         'rule-name' => 'Hata mesajı',
    |     ],
    | ],
    |
    */

    'custom' => [
        'product_name' => [
            'required' => 'Ürün adı gereklidir.',
        ],
        'product_price' => [
            'required' => 'Fiyat gereklidir.',
            'numeric' => 'Fiyat sadece rakamlardan oluşmalıdır.',
            'min' => 'Fiyat en az 1 TL olmalıdır.',
            'max' => 'Fiyat 6 haneliden fazla olamaz.',
        ],
        'description' => [
            'required' => 'Açıklama gereklidir.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Burada, validasyon sırasında kullanılan attribute isimlerinin daha anlamlı olmasını
    | sağlamak için, onları insan dostu isimlerle değiştirebilirsiniz.
    |
    */

    'attributes' => [
        'product_name' => 'ürün adı',
        'product_price' => 'fiyat',
        'description' => 'açıklama',
    ],
];
