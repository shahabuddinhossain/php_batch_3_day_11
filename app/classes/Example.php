<?php


namespace App\classes;


class Example
{
    public $students = [];

    public function index()
    {
        /* foreach loop*/
        /*$this->students = [10, 20, 'BITM', 10, 20, false, true];

        foreach ($this->students as $roll => $student)
        {
            echo 'Roll no: '.$roll.' Name: '.$student."<br/>";
        }*/

        $this->students = [
            0 => [
                    'name'   => 'Jahed',
                    'email'  => 'jahid@gmail.com',
                    'mobile' => '01715846578',
            ],
            1 => [
                'name'   => 'Fahim',
                'email'  => 'Fahim@gmail.com',
                'mobile' => '01715841234',
            ],
            2 => 'BITM',

            3 => [
                'name'   => 'Shahabuddin',
                'email'  => 'shahabuddin@gmail.com',
                'mobile' => '01548734587',
            ],
        ];

        /*foreach ($this->students as $key => $student)
        {
            echo $student['name'].' '.$student['mobile'].' '.$student['email']."<br/>";

        }*/


        /*foreach ($this->students as $key => $student) {
            if ($key == 0) {
                echo $student['name'] . ' ' . $student['mobile'] . ' ' . $student['email'] . "<br/>";
                break;
            }
        }*/


        foreach ($this->students as $key => $item) {

            if(is_array($item)) {
                foreach ($item as $value ) {
                    echo $value. "    ";
                }
                echo "<br/>";
            }
        }
    } // index function ends here;

}