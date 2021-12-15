<?php

class Hoge
{
    public readonly ?string $status;

    public function __construct(string $status)
    {
        $this->status = $status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}

$h = new Hoge('success');
// $h->setStatus('success');
// var_dump($h->status);
// $h->status = 'success';

//$h->status = 'failed'; 
// $h->setStatus('failed');
// var_dump($h->status);

class Student
{
    public function __construct(
        public readonly string $name,
        public readonly int $age
    ) {
    }
}

$s = new Student('utakata', 17);
var_dump($s->name);
var_dump($s->age);
