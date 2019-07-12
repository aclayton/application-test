<!doctype html>
<html lang="en-ca">

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
</head>

<body ng-app="eBASE-test1" ng-controller="tableCtrl">
<?php

$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

?>

<table ng-init="people = <?php echo htmlspecialchars(json_encode($people)); ?>">
  <th><td>People</td></th>
  <tr ng-repeat="person in people">
    <td>{{ person.first_name }} {{ person.last_name }}</td>
    <td>{{ person.email }}</td>
    <td><button ng-click="click(person)">click me</button></td>
  </tr>

</table>

<script>

var app = angular.module("eBASE-test1", []);
app.controller("tableCtrl", function($scope) {
    $scope.click = (person) => {
      const alertMsg = `You clicked ${person.first_name} ${person.last_name} ${person.email}`;
      alert(alertMsg);
    }
});

</script>
</body>
</html>
