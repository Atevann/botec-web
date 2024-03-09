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

    'accepted' => ':attribute должен быть принят.',
    'accepted_if' => ':attribute должен быть принят, если :other равен :value.',
    'active_url' => ':attribute не является допустимым URL-адресом.',
    'after' => 'The :Атрибут должен быть датой после :date.',
    'after_or_equal' => ':attribute должен быть датой, следующей за :date или равной ей.',
    'alpha' => ':attribute должен содержать только буквы.',
    'alpha_dash' => ':attribute должен содержать только буквы, цифры, тире и подчеркивания.',
    'alpha_num' => ':attribute должен содержать только буквы и цифры.',
    'array' => ':attribute должен быть массивом.',
    'ascii' => ':attribute должен содержать только однобайтовые буквенно-цифровые символы и символы.',
    'before' => ':attribute должен быть датой перед :date.',
    'before_or_equal' => ':attribute должен быть датой, предшествующей :date или равной ей.',
    'between' => [
        'array' => ':attribute должен содержать элементы от :min до :max.',
        'file' => 'Размер :attribute должен находиться в диапазоне от :min до :max килобайт.',
        'numeric' => 'Значение :attribute должно находиться в диапазоне от :min до :max.',
        'string' => ':attribute должен находиться между символами :min и :max.',
    ],
    'boolean' => 'Поле :attribute должно иметь значение true или false.',
    'confirmed' => 'Подтверждение :attribute не соответствует.',
    'current_password' => 'Неправильный пароль.',
    'date' => ':attribute не является допустимой датой.',
    'date_equals' => ':attribute должен быть датой, равной :date.',
    'date_format' => ':attribute не соответствует формату :format.',
    'decimal' => ':attribute должен содержать :decimal десятичные знаки.',
    'declined' => ':attribute должен быть отклонен.',
    'declined_if' => ':attribute должен быть отклонен, если :other равен :value.',
    'different' => ':attribute и :other должны быть разными.',
    'digits' => ':attribute должен быть :digits цифрами.',
    'digits_between' => ':attribute должен находиться между цифрами :min и :max.',
    'dimensions' => ':attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute имеет повторяющееся значение.',
    'doesnt_end_with' => ':attribute не может заканчиваться одним из следующих символов: :values.',
    'doesnt_start_with' => ':attribute не может начинаться с одного из следующих значений: :values.',
    'email' => ':attribute должен быть действительным адресом электронной почты.',
    'ends_with' => ':attribute должен заканчиваться одним из следующих значений: :values.',
    'enum' => 'Выбранный :attribute недействителен.',
    'exists' => 'Выбранный :attribute недействителен.',
    'file' => ':attribute должен быть файлом.',
    'filled' => 'Поле :attribute должно иметь значение.',
    'gt' => [
        'array' => ':attribute должен содержать более :value элементов.',
        'file' => ':attribute должен быть больше :value в килобайтах.',
        'numeric' => ':attribute должен быть больше :value.',
        'string' => ':attribute должен содержать больше символов :value.',
    ],
    'gte' => [
        'array' => ':attribute должен содержать элементы :value или более.',
        'file' => ':attribute должен быть больше или равен :value в килобайтах.',
        'numeric' => ':attribute должен быть больше или равен :value.',
        'string' => ':attribute должен быть больше или равен символам :value.',
    ],
    'image' => ':attribute должен быть изображением.',
    'in' => 'Выбранный :attribute недействителен.',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer' => 'Атрибут :attribute должен быть целым числом.',
    'ip' => ':attribute должен быть действительным IP-адресом.',
    'ipv4' => 'Атрибут :attribute должен быть действительным IPv4-адресом.',
    'ipv6' => 'Атрибут :attribute должен быть действительным IPv6-адресом.',
    'json' => 'Атрибут :attribute должен быть допустимой строкой JSON.',
    'lowercase' => 'Атрибут :attribute должен быть в нижнем регистре.',
    'lt' => [
        'array' => 'В :attribute должно быть меньше :value элементов.',
        'file' => 'Размер :attribute должен быть меньше :value в килобайтах.',
        'numeric' => 'Значение :attribute должно быть меньше :value.',
        'string' => 'Значение :attribute должно быть меньше символов :value.',
    ],
    'lte' => [
        'array' => 'В :attribute не должно быть более :value элементов.',
        'file' => 'Значение :attribute должно быть меньше или равно :value в килобайтах.',
        'numeric' => 'Значение :attribute должно быть меньше или равно :value.',
        'string' => 'Значение :attribute должно быть меньше или равно числу символов :value.',
    ],
    'mac_address' => 'Атрибут :attribute должен быть действительным MAC-адресом.',
    'max' => [
        'array' => 'В :attribute не должно быть более :max элементов.',
        'file' => 'Размер :attribute не должен превышать :max килобайт.',
        'numeric' => 'Значение :attribute не должно быть больше :max.',
        'string' => 'Значение :attribute не должно превышать :max символов.',
    ],
    'max_digits' => 'В :attribute не должно быть более :max цифр.',
    'mimes' => ':attribute должен быть файлом типа: :values.',
    'mimetypes' => ':attribute должен быть файлом типа: :values.',
    'min' => [
        'array' => 'В :attribute должно быть не менее :min элементов.',
        'file' => 'Размер :attribute должен быть не менее :min килобайт.',
        'numeric' => 'Значение :attribute должно быть не менее :min.',
        'string' => 'В поле :attribute должно быть не менее :min символов.',
    ],
    'min_digits' => 'В атрибуте :attribute должно быть не менее :min цифр.',
    'missing' => 'Поле :attribute должно отсутствовать.',
    'missing_if' => 'Поле :attribute должно отсутствовать, если :other равно :value.',
    'missing_unless' => 'Поле :attribute должно отсутствовать, если только :other не равно :value.',
    'missing_with' => 'Поле :attribute должно отсутствовать, если присутствует :values.',
    'missing_with_all' => 'Поле :attribute должно отсутствовать, если присутствуют :values.',
    'multiple_of' => 'Атрибут :attribute должен быть кратен :value.',
    'not_in' => 'Выбранный :attribute недействителен.',
    'not_regex' => 'Формат :attribute недействителен.',
    'numeric' => 'Атрибут :attribute должен быть числом.',
    'password' => [
        'letters' => 'Атрибут :attribute должен содержать хотя бы одну букву.',
        'mixed' => 'Атрибут :attribute должен содержать хотя бы одну прописную и одну строчную букву.',
        'numbers' => 'Атрибут :attribute должен содержать хотя бы одно число.',
        'symbols' => 'Атрибут :attribute должен содержать хотя бы один символ.',
        'uncompromized' => 'Данный :attribute появился в результате утечки данных. Пожалуйста, выберите другой :attribute.',
    ],
    'present' => 'Поле :attribute должно присутствовать.',
    'prohibited' => 'Поле :attribute запрещено.',
    'prohibited_if' => 'Поле :attribute запрещено, если :other равно :value.',
    'prohibited_unless' => 'Поле :attribute запрещено, если только :other не находится в :values.',
    'prohibits' => 'Поле :attribute запрещает присутствие :other.',
    'regex' => 'Формат :attribute недействителен.',
    'required' => 'Поле :attribute является обязательным.',
    'required_array_keys' => 'Поле :attribute должно содержать записи для: :values.',
    'required_if' => 'Поле :attribute является обязательным, если :other равно :value.',
    'required_if_accepted' => 'Поле :attribute является обязательным, если принято :other.',
    'required_unless' => 'Поле :attribute является обязательным, если только :other не находится в :values.',
    'required_with' => 'Поле :attribute является обязательным, если присутствует :values.',
    'required_with_all' => 'Поле :attribute является обязательным, если присутствуют :values.',
    'required_without' => 'Поле :attribute является обязательным, если :values отсутствует.',
    'required_without_all' => 'Поле :attribute является обязательным, если ни одно из :values не присутствует.',
    'same' => 'Параметры :attribute и :other должны совпадать.',
    'size' => [
        'array' => ':attribute должен содержать элементы :size.',
        'file' => 'Значение :attribute должно быть :size в килобайтах.',
        'numeric' => 'Атрибут :attribute должен быть :size.',
        'string' => 'В поле :attribute должны быть символы :size.',
    ],
    'starts_with' => 'Атрибут :attribute должен начинаться с одного из следующих символов: :values.',
    'string' => 'Атрибут :attribute должен быть строкой.',
    'timezone' => 'В поле :attribute должен быть указан действительный часовой пояс.',
    'unique' => 'Атрибут :attribute уже занят.',
    'uploaded' => 'Не удалось загрузить :attribute.',
    'uppercase' => 'Атрибут :attribute должен быть в верхнем регистре.',
    'url' => ':attribute должен быть действительным URL-адресом.',
    'ulid' => 'Параметр :attribute должен быть действительным ULID.',
    'uuid' => 'Атрибут :attribute должен быть допустимым UUID.',
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
