<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>About Page</title>
</head>
<body>
<h1>ABOUT PAGE From Controller</h1>
{{--<a href="{{url('/contact')}}">Contact Url</a>--}}
<a href="{{ route('contact.page') }}">Contact</a>
</body>
</html>
