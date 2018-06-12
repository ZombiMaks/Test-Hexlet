<?php

const FREE_EMAIL_DOMAINS = [
    'gmail.com', 'yandex.ru', 'hotmail.com'
];

function getFreeDomainsCount($emails) 
{
    //отделяем домен
    $domains = array_map(function ($email) {
        $domainArr = explode( '@',  $email);
        return $domainArr[1];
    }, $emails);
    // проверяем присутствие домена в массиве доменов 'FREE_EMAIL_DOMAINS' - in_array
    // создаем новый массив с подходящими доменами и считаем их количество
    // array_key_exists - проверяет наличие ключа в массиве (так-как домен в новом массиве является ключом)
    $freeDomainCount = array_reduce($domains, function($acc, $domain){
        if (in_array($domain, FREE_EMAIL_DOMAINS)){
            if (array_key_exists($domain, $acc)){
            $acc[$domain] += 1;
            }else{
                $acc[$domain] = 1;
            }
        }
        return $acc;
    }, []);
    
    return $freeDomainCount;
}

$emails = [
    'info@gmail.com',
    'info@yandex.ru',
    'info@hotmail.com',
    'mk@host.com',
    'support@hexlet.io',
    'key@yandex.ru',
    'sergey@gmail.com',
    'vovan@gmail.com',
    'vovan@hotmail.com'
];

print_r(getFreeDomainsCount($emails));
# => Array (
#     'gmail.com' => 3
#     'yandex.ru' => 2
#     'hotmail.com' => 2
#  )