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
                    'mobile' => [
                        'mobile1' => '01548795864',
                        'mobile2' => '01256325654',
                    ],
            ],
            1 => [
                'name'   => 'Fahim',
                'email'  => 'Fahim@gmail.com',
                'mobile' => [
                    'mobile1' => '01548791234',
                    'mobile2' => '01256325678',
                ],
            ],
            2 => 'BITM',

            3 => [
                'name'   => 'Shahabuddin',
                'email'  => 'shahabuddin@gmail.com',
                'mobile' => [
                    'mobile1' => '01548791234',
                    'mobile2' => '01256325678',
                ],
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


        /*foreach ($this->students as $key => $item)
        {

            if(is_array($item))
            {
                foreach ($item as $value ) {
                    if(is_array($value)) {
                        foreach ($value as $v_value) echo $v_value. "  ";
                    } else { echo $value. "    ";}
                }
                echo "<br/>";
            }
        }*/
        echo '<pre>';
        print_r($this->students);
    } // index function ends here;

}