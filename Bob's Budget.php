<?php
 // Bob's Budget 

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

//Use $incomeSegments to calculate Bob's $netIncome after these taxes and print. 
$netIncome = $incomeSegments[0][0]*$incomeSegments[0][1] + $incomeSegments[1][0]*$incomeSegments[1][1] + $incomeSegments[2][0]*$incomeSegments[2][1];
echo "Net income: $netIncome\n";

// Calculate the $annualIncome after social security tax and print.
$annualIncome = $netIncome - $socialSecurity;
echo "Annual income: $annualIncome\n";

// Calculate the remaining income after annual expenses. 
$afterExpenses = $annualIncome - $annualExpenses["vacations"] - $annualExpenses["carRepairs"];
echo "Remaining income after annual expenses: $afterExpenses\n";

// Calculate monthly income and print.
$monthlyIncome = $afterExpenses/12;
echo "Monthly income: $monthlyIncome\n";

// Calculate the remaining income after monthly expenses and print.
$monthlyAfterExpenses = $monthlyIncome - $monthlyExpenses["rent"] - $monthlyExpenses["utilities"] - $monthlyExpenses["healthInsurance"];
echo "Remaining monthly income after expenses: $monthlyAfterExpenses\n";

// Calculate the weekly income and print.
$weeklyIncome = $monthlyAfterExpenses/4.33; 
echo "Weekly income: $weeklyIncome\n";

// Define an array of Bob's weekly expenses. 
$weeklyExpenses = ["gas"=> 25, "food"=> 90, "entertainment" => 47];

// Calculate the income after weekly expenses and print.
$weeklyAfterExpenses = $weeklyIncome - $weeklyExpenses["gas"] - $weeklyExpenses["food"] - $weeklyExpenses["entertainment"]; 
echo "Remaining weekly income after expenses: $weeklyAfterExpenses\n";

// Use Bob's remaining income to calculate how much he can save annually and print the result. 
$annualSavings = round($weeklyAfterExpenses*52, 2);
echo "Bob can save £$annualSavings per year.";

