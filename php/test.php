<?php
/*
Реализуйте класс PassworValidator ориентируясь на тесты.

Этот валидатор поддерживает следующие опции:

minLength (по-умолчанию 8) - минимальная длина пароля
containNumbers (по-умолчанию false) - требование содержать хотя бы одну цифру
Массив ошибок в ключах содержит название опции, а в значении текст указывающий на ошибку (тексты можно подсмотреть в тестах)
*/

class PasswordValidator
{
    public $options = [
        'minLength' => 8,
        'containNumbers' => false
    ];

    public function __construct(array $options = [])
    {
        $this->options = array_merge($this->options, $options);
    }

    public function validate(string $password): array
    {
        $errors = [];
        if (mb_strlen($password) < $this->options['minLength']) {
            $errors['minLength'] = 'too small';
        }

        if ($this->options['containNumbers']) {
            if (!$this->hasNumber($password)) {
                $errors['containNumbers'] = 'should contain at least one number';
            }
        }

        return $errors;
    }
    private function hasNumber($subject)
    {
        return strpbrk($subject, '1234567890') !== false;
    }
}

$validator = new PasswordValidator();
print_r($validator->validate('qwertyui'));
print_r($validator->validate('qwerty'));

$validator = new PasswordValidator(['containNumbers' => true]);print_r($validator->validate('qwertya3sdf'));
print_r($validator->validate('qwerty'));
print_r($validator->validate('q23ty'));