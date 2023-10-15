<!-- Project 1 -->

<!-- PROBLEM:- i)We have a list of people's information with name and age.
ii)We want to count the number of adults(+18 years old) and children.
iii)We want to make a list of people betwwen 22 to 30 years who can apply for the job opening.
-->

$people=[
    ['name'=>'Joseph','age'=>25],
    ['name'=>'Sarah','age'=>5],
    ['name'=>'Anne','age'=>18],
    ['name'=>'Pratham','age'=>23],
    ['name'=>'Simon','age'=>30],
    ['name'=>'Amir','age'=>28],
    ['name'=>'Sabrina','age'=>22],
    ['name'=>'Rana','age'=>24],
    ['name'=>'Meet','age'=>21],
    ['name'=>'Vitto','age'=>24],
    ['name'=>'Rachel','age'=>9],
    ['name'=>'Tom','age'=>3],
    ];
    <!-- Solution -->

    $adultCount=0;
    $childCount=0;
    $canApplyForTheJob=[];
    foreach($people as $person){
        $age= $person['$age'];
        if($age>=18){
            <!-- this person is an adult -->
            $adultCount++;
            if($age>=22&&$age<=30){
                <!-- this people can apply for the job -->
                $canApplyForTheJob[]=$person;
            }
            else{
                <!-- this person is a child -->
                $childCount++;
            }
        
        }

    }
        echo "There are $adultCount adults in the community" .PHP_EOL;
        echo "There are $childCount adults in the community" .PHP_EOL;
        echo "here is the list of people who can apply for our job opening".PHP_EOL;
        print_r($canApplyForTheJob);
    <!-- End of Project -->