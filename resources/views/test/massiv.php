<!DOCTYPE html> 
<html> 
<head> 
<title>My view</title> 
</head> 
<body> 
<p>первый элемент массива:  {{ $arr[0] }} </p>
<p>второй элемент массива: {{ $arr[1] }}</p>
<p>сумма: {{ $arr[0] + $arr[1] }}</p>

</body> 
</html>
<!DOCTYPE html> 
<html> 
<head> 
<title>My view</title> 
</head> 
<body> 
<p>name: <input value="{{ $name }}"> </p>
<p>age: <input value="{{ $age }}"> </p>
<p>salary: <input value="{{ $salary }}"> </p>
{{date ('d-m-Y');}}
<p style="{{$t}}">dfujioljhgfdfghjklkjhgfdfghjkl;jhgfhjkl;kjghjkl</p>
</body> 
</html>