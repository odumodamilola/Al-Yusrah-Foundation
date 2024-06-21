<!-- resources/views/pdf/member_details.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Details</title>
</head>
<body>
    <h1>Member Details</h1>

    <p><strong>Name:</strong> {{ $member->name }}</p>
    <p><strong>Business Type:</strong> {{ $member->businesstype }}</p>
    <p><strong>Business Year:</strong> {{ $member->businessyear }}</p>
    <p><strong>Goods List:</strong> {{ $member->goodslist }}</p>
    <p><strong>Working Capital:</strong> {{ $member->workingcapital }}</p>
    <p><strong>Weekly Profit:</strong> {{ $member->weeklyprofit }}</p>
    <p><strong>Monthly Expense:</strong> {{ $member->monthlyexpense }}</p>
</body>
</html>
