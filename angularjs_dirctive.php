



<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>


<div ng-app=""  ng-init="firstName='shah'" >
<p>name <input type="text" ng-model="firstName"></p>

<p> {{ firstName}}</p>
</div>

 <div ng-app="" ng-init="quantity=1;price=5">

Quantity: <input type="number"	ng-model="quantity">
Costs:    <input type="number" ng-model="price">

Total in dollar: {{ quantity * price }}

</div>

<div ng-app="" ng-init="names=['shah','jjj','khan']">

<ul>
    <li ng-repeat="x in names">
      {{x}}
    </li>
</ul>

</div>



 
</body>
</html>