<html>

<body>

<?php

$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// $grossSalary = 48150;
// $incomeSegments = [
//     12 => $grossSalary * 0.88, 
//     22 => $grossSalary * 0.78, 
//     24 => $grossSalary * 0.76];

// $netIncome = $incomeSegments[12] + $incomeSegments[22] + $incomeSegments[24];

$netIncome = $incomeSegments[0][0] + $incomeSegments[1][0] + $incomeSegments[2][0];

print_r($netIncome);

echo "\n";

$annualIncome = $netIncome - $socialSecurity;

echo $annualIncome;

echo "\n";

$annualIncome = $annualIncome - $annualExpenses["vacations"] - $annualExpenses["carRepairs"];

echo $annualIncome;

echo "\n";

$monthlyIncome = $annualIncome / 12;

echo $monthlyIncome;

$monthlyIncome = $monthlyIncome - $monthlyExpenses['rent'] - $monthlyExpenses['utilities'] - $monthlyExpenses['healthInsurance'];

echo $monthlyIncome;

echo "\n";

$weeklyIncome = $monthlyIncome / 4.33 ;

echo $weeklyIncome;

echo "\n";

$weeklyExpenses = [
    "gas" => 25,
    "food" => 90,
    "entertainment" => 47
];



echo $weeklyIncome - $weeklyExpenses;

echo "\n";

$save = $weeklyIncome - $weeklyExpenses;

echo $save * 52 ;

?>


</body>

</html>



