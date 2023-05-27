<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute ir jābūt pieņemtam.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => ':attribute ir ar nederīgu saiti.',
    'after' => ':attribute ir jābūt ar datumu pēc :date.',
    'after_or_equal' => ':attribute ir jābūt ar datumu pēc vai vienādu ar :date.',
    'alpha' => ':attribute var saturēt tikai burtus.',
    'alpha_dash' => ':attribute var saturēt tikai burtus, numurus un atstarpes.',
    'alpha_num' => ':attribute var tikai saturēt burtus un numurus.',
    'array' => ':attribute ir jābūt sakārtotam.',
    'before' => ':attribute ir jābūt ar datumu pirms :date.',
    'before_or_equal' => ':attribute ir jābūt ar datumu pirms vai vienādu ar :date.',
    'between' => [
        'array' => ':attribute jābūt no :min līdz :max vienībām.',
        'file' => ':attribute jābūt starp :min un :max kilobaitiem.',
        'numeric' => ':attribute jābūt starp :min un :max.',
        'string' => ':attribute jābūt no :min līdz :max zīmēm.',
    ],
    'boolean' => ':attribute lauciņam jābūt patiesam vai nepatiesam.',
    'confirmed' => ':attribute apstiprinājums neatbilst.',
    'current_password' => 'The password is incorrect.',
    'date' => ':attribute nav derīgs.',
    'date_equals' => ':attribute datumam jāsakrīt ar :date.',
    'date_format' => ':attribute neatbilst formātam :format.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => ':attribute un :other ir jābūt atšķirīgiem.',
    'digits' => ':attribute ir jābūt :digits cipariem.',
    'digits_between' => ':attribute garumam ir jābūt starp :min un :max cipariem.',
    'dimensions' => ':attribute ir nederīgs attēla izmērs.',
    'distinct' => ':attribute laukam ir dublikāts.',
    'email' => ':attribute ir jābūt derīgai e-pasta adresei.',
    'ends_with' => ':attribute jābeidzas ar vienu no šiem: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'Izvēlētais :attribute ir nederīgs.',
    'file' => ':attribute jābūt failam.',
    'filled' => ':attribute lauks ir obligāts.',
    'gt' => [
        'array' => ':attribute jābūt vairāk nekā :value vienībām.',
        'file' => ':attribute jābūt lielākam par :value kilobaitiem.',
        'numeric' => ':attribute jābūt lielākam par :value.',
        'string' => ':attribute jāpārsniedz :value rakstzīmes.',
    ],
    'gte' => [
        'array' => ':attribute jābūt :value vai vairāk vienībām.',
        'file' => ':attribute jābūt lielākam vai vienādam ar :value kilobaitiem.',
        'numeric' => ':attribute jābūt lielākam vai vienādam ar :value.',
        'string' => ':attribute garumam jābūt lielākam vai vienādam ar :value rakstzīmēm.',
    ],
    'image' => ':attribute jābūt attēlam.',
    'in' => 'Izvēlētais :attribute ir nederīgs.',
    'in_array' => ':other neeksistē lauks :attribute.',
    'integer' => ' :attribute ir jābūt skaitlim.',
    'ip' => ':attribute jābūt derīgai IP adresei.',
    'ipv4' => ':attribute jābūt derīgai IPv4 adresei.',
    'ipv6' => ':attribute jābūt derīgai IPv6 adresei.',
    'json' => ':attribute jābūt derīgai JSON virknei.',
    'lt' => [
        'array' => ':attribute jābūt mazāk nekā :value vienībām.',
        'file' => ':attribute nedrīkst pārsniegt :value kilobaitus.',
        'numeric' => ':attribute jābūt mazākam nekā :value.',
        'string' => ':attribute nedrīkst pārsniegt :value rakstzīmes.',
    ],
    'lte' => [
        'array' => ':attribute nedrīkst būt vairāk par :value vienībām.',
        'file' => ':attribute nedrīkst pārsniegt :value kilobaitus.',
        'numeric' => ':attribute jābūt mazākam vai vienādam ar :value.',
        'string' => ':attribute nedrīkst pārsniegt :value rakstzīmes.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => ':attribute nedrīkst pārsniegt :max vienības.',
        'file' => ':attribute nedrīkst pārsniegt :max kilobaitus.',
        'numeric' => ':attribute nedrīkst pārsniegt :max.',
        'string' => ':attribute nedrīkst pārsniegt :max rakstzīmes.',
    ],
    'mimes' => ':attribute jābūt faila tipam: :values',
    'mimetypes' => ':attribute jābūt faila tipam: :values.',
    'min' => [
        'array' => ':attribute jāsatur vismaz :min vienības.',
        'file' => ':attribute jābūt vismaz :min kilobaitiem.',
        'numeric' => ':attribute jābūt vismaz :min.',
        'string' => ':attribute jābūt vismaz :min rakstzīmēm.',
    ],
    'multiple_of' => ':attribute jābūt :value daudzkārtnim.',
    'not_in' => 'izvēlētais :attribute ir nederīgs.',
    'not_regex' => ':attribute formāts ir nederīgs.',
    'numeric' => ':attribute jābūt skaitlim.',
    'password' => 'Parole ir nepareiza.',
    'present' => ':attribute lauks ir obligāts.',
    'prohibited' => ':attribute lauks ir aizliegts.',
    'prohibited_if' => ':attribute lauks ir aizliegts, ja :other ir :value.',
    'prohibited_unless' => ':attribute lauks ir aizliegts, ja vien :other nav :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => ':attribute formāts ir nederīgs.',
    'required' => ':attribute lauks ir obligāts.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => ':attribute lauks ir obligāts, ja :other ir :values.',
    'required_unless' => ':attribute lauks ir obligāts, ja vien :other nav :values.',
    'required_with' => ':attribute lauks ir obligāts, kad kāds no :values ir pieejams.',
    'required_with_all' => ':attribute lauks ir obligāts, kad viss no :values ir pieejams.',
    'required_without' => ':attribute lauks ir obligāts, kad kāds no :values nav pieejams.',
    'required_without_all' => ':attribute lauks ir obligāts, kad neviens no :values nav pieejams.',
    'same' => ':attribute un :other ir jāsakrīt.',
    'size' => [
        'array' => ':attribute jāsatur :size vienības.',
        'file' => ':attribute jābūt :size kilobaiti.',
        'numeric' => ':attribute jābūt :size.',
        'string' => ':attribute jābūt :size rakstzīmēm.',
    ],
    'starts_with' => ':attribute jāsākas ar kādu no šiem: :values',
    'string' => ':attribute jābūt virknē.',
    'timezone' => ':attribute jābūt derīgai laika zonai.',
    'unique' => ':attribute jau ir aizņemts.',
    'uploaded' => ':attribute netika augšupielādēts.',
    'url' => ':attribute formāts ir nederīgs.',
    'uuid' => ':attribute jābūt derīgam UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
