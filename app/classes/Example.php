<?php


namespace App\classes;


class Example
{
    public $name;
    public $data=[];
    public function index()
    {
//       $this->name="BITM";
//       $this->name="BASIS";
//       echo $this->name;
        /* ARRAY PRINT */
//        $this->data = [10,20,330,'BITM', 'BASIS' ,100.200, true];
//        foreach ($this->data as $indx=> $item)
//        {
//            echo $indx. ' '. $item. '<br/>';
//        }
        $this->data=
            [
                0=>[
                    'name'       =>'Hera',
                    'email'      =>'ffai@gmail.com',
                    'Contact No' =>
                    [
                        'personal' => '1234',
                        'parent'   => '3569'
                    ]

                ],
                1=>[
                    'name'       =>'Hera',
                    'email'      =>'ffai@gmail.com',
                    'Contact No' =>
                        [
                            'personal' => '1234',
                            'parent'   => '3569'
                        ]
                ],
                2=> 'BITM',
                3=>
                [
                    'name'       =>'Fai',
                    'email'      =>'hera@gmail.com',
                    'Contact No' =>'015545'
                ]


            ];

//        echo $this->data[0]['name'];

//
//        foreach ($this->data as $item)
//        {
//            echo $item['name'].' '. $item['email'].' '.$item['Contact No'].'</br>';
//        }
        /* Nested Foreach*/
//        foreach ($this->data as $item)
//        {
//            foreach ($item as $value)
//            {
//                echo $value. ' ';
//            }
//            echo '<br/>';
//        }

      /*  Array r bhitor array*/

//        foreach ($this->data as $item)
//        {
//            foreach ($item as $value)
//            {
//                if(is_array($value))
//                {
//                    foreach ($value as $arna)
//                    {
//                        echo $arna.' ';
//                    }
//
//                }
//                else
//                {
//                    echo $value. ' ';
//                }
//
//            }
//            echo '<br/>';
//        }

        /* Array r bhitor array abar ekta item index e*/
//        foreach ($this->data as $item)
//        {
//           if(is_array($item))
//           {
//               foreach ($item as $value)
//               {
//                   if(is_array($value))
//                   {
//                       foreach ($value as $arna)
//                       {
//                           echo $arna. ' ';
//                       }
//                   }
//                   else
//                   {
//                       echo $value. ' ';
//                   }
//               }
//           }
//           else
//           {
//               echo $item;
//           }
//           echo '<br/>';
//        }
//        echo '<pre/>';
//        print_r($this->data);
//        var_dump($this->data);



    }

}